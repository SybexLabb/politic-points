<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\RequestAttributes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\attributes;
use App\Models\role_assign;
use App\Models\category;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class GenericController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $user = Helper::curren_user();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function roles()
    {
        $user = Auth::user();
        if ($user->role_id != 1) {
            return redirect()->back()->with('error', "No Link found");
        }
        $attributes = attributes::where('is_active', 1)->get();
        $role_assign = role_assign::where('is_active', 1)->where("role_id", $user->role_id)->first();

        return view('roles/roles')->with(compact('attributes', 'role_assign'));
    }

    public function generic_submit(RequestAttributes $request)
    {
        $token_ignore = ['_token' => '', 'type' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);

        try {
            attributes::insert($post_feilds);
            return redirect()->back()->with('message', 'Information updated successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error will saving record');
        }
    }

    public function role_assign_modal()
    {
        $user = Auth::user();
        $role_assign = role_assign::where('is_active', 1)->where("role_id", $_POST['role_id'])->orderBy('id', 'desc')->first();
        $att_tag = attributes::where('is_active', 1)->select('attribute')->distinct()->get();
        $body = "";
        if ($att_tag) {
            $route = route('roleassign_submit');
            $body .= "<input type='hidden' name='role_id' id='fetch-role-id' value='" . $_POST['role_id'] . "'>";
            if ($role_assign && $role_assign->assignee != 'N;') {
                $checker = unserialize($role_assign->assignee);
                $body .= "<input type='hidden' name='record_id' value='" . $role_assign->id . "'>";
            } else {
                $checker = [];
            }
            foreach ($att_tag as $key => $role) {
                $body .= "<tr><td>" . ucwords($role->attribute) . "</td><td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck1" . $key . "' ";
                if (in_array($role->attribute . "_1", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_1'>
                                  <label class='custom-control-label' for='customCheck1" . $key . "'>1</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck2" . $key . "' ";
                if (in_array($role->attribute . "_2", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_2'>
                                  <label class='custom-control-label' for='customCheck2" . $key . "'>2</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck3" . $key . "' ";
                if (in_array($role->attribute . "_3", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_3'>
                                  <label class='custom-control-label' for='customCheck3" . $key . "'>3</label></div></td>

                            <td><div class='custom-control custom-checkbox'>
                                  <input type='checkbox' name='assignee[]' class='custom-control-input' id='customCheck4" . $key . "' ";
                if (in_array($role->attribute . "_4", $checker)) {
                    $body .= "checked";
                }
                $body .= " value='" . $role->attribute . "_4'>
                                  <label class='custom-control-label' for='customCheck4" . $key . "'>4</label></div></td></tr>";
            }
        }

        $bod['body'] = $body;
        $response = json_encode($bod);
        return $response;
    }

    public function roleassign_submit(Request $request)
    {
        if (isset($request->record_id) && $request->record_id != 0) {
            $role_assign = role_assign::where('is_active', 1)->where("id", $request->record_id)->first();
        } else {
            $role_assign = new role_assign;
            $role_assign->role_id = $request->role_id;
        }

        $role_assign->assignee = serialize($request->assignee);
        $role_assign->save();
        return redirect()->back()->with('message', 'Role has been assigned successfully');
    }

    public function listing($slug = '')
    {
        $user = Auth::user();
        $role_assign = role_assign::where('is_active', 1)->where("role_id", $user->role_id)->first();
        if ($role_assign) {
            $validator = Helper::check_rights($slug);
            if (is_null($validator)) {
                return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
            }
        } else {
            return redirect()->back()->with('error', "Don't have sufficient rights to access this page");
        }

        $form = null;
        $table = null;
        $eloquent = '';
        if ($slug == "roles") {
            $attributes = attributes::where('is_active', 1)->where('attribute', $slug)->get();
        } else {
            $attributes = attributes::where('is_active', 1)->where('attribute', $slug)->get();
            $get_eloquent = attributes::where('is_active', 1)->where('attribute', $slug)->first();
            $eloquent = ($get_eloquent->model != '') ? $get_eloquent->model : '';

            if ($eloquent != '') {
                $form = $this->generated_form($slug);
                $table = $this->generated_table($slug);
            }
        }
        return view('roles/crud')->with(compact('attributes', 'slug', 'eloquent', 'form', 'table'))->with('title', ucwords(str_replace("-", " ", $slug)));
    }

    private function generated_form($slug = '')
    {
        $body = '';

        if ($slug == 'brand') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="role-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image:</label>
                                <div class="d-flex">
                                    <input type="file" id="image" accept="image/*" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'product') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Category:</label>
                                <div class="d-flex">
                                    <select name="category_id" id="category_id" class="form-control profession" required value="">
                                        <option selected="true" disabled="disabled" >Select Category</option>';
            $category = category::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($category) {
                foreach ($category as $k => $val) {
                    $body .= '<option value="' . $val->id . '">' . $val->name . '</option>';
                }
            }
            $body .= '</select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image:</label>
                                <div class="d-flex">
                                    <input type="file" id="image" accept="image/*" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <div class="d-flex">
                                    <td><img id="image-add" style="width:80px;height:80px;display:none;" src=""></td>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Price:</label>
                                <div class="d-flex">
                                    <input id="price" placeholder="Price" name="price" class="form-control" type="number" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Description:</label>
                                <div class="d-flex">
                                    <textarea id="description" required name="description" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Specification:</label>
                                <div class="d-flex">
                                    <textarea id="specification" required name="specification" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'category') {
            $route_url = route('crud_generator', $slug);
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'presidential-score') {
            $route_url = route('crud_generator', 'presidential_score');
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image:</label>
                                <div class="d-flex">
                                    <input type="file" id="image" accept="image/*" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <div class="d-flex">
                                    <td><img id="image-add" style="width:80px;height:80px;display:none;" src=""></td>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Score:</label>
                                <div class="d-flex">
                                    <input id="score" placeholder="Score" name="score" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Date:</label>
                                <div class="d-flex">
                                    <input id="date" placeholder="Date" name="date" class="form-control" type="date" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>';
            return $body;
        } elseif ($slug == 'watch-list') {
            $route_url = route('crud_generator', 'watch_list');
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">
                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6 col-12" id="role-label">
                            <div class="form-group end-date">
                                <label for="end-date" class="">Description:</label>
                                <div class="d-flex">
                                    <textarea id="description" required name="description" class="form-control" ></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image:</label>
                                <div class="d-flex">
                                    <input type="file" id="image" accept="image/*" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                        </div>
                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <div class="d-flex">
                                    <td><img id="image-add" style="width:80px;height:80px;display:none;" src=""></td>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Date:</label>
                                <div class="d-flex">
                                    <input id="date" placeholder="Date" name="date" class="form-control" type="date" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>';
            return $body;
        }elseif ($slug == 'senators') {
            $route_url = route('crud_generator', 'senators');
            $body = '<form class="" id="generic-form" enctype="multipart/form-data" method="POST" action="' . $route_url . '">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="record_id" id="record_id" value="">


                    <div class="row">
                        <div id="assignrole"></div>
                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Name:</label>
                                <div class="d-flex">
                                    <input id="name" placeholder="Name" name="name" class="form-control" type="text" autocomplete="off" required/>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                            <div class="form-group start-date">
                                <label for="start-date" class="">Image:</label>
                                <div class="d-flex">
                                    <input type="file" id="image" accept="image/*" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-6" id="rank-label">
                        <div class="form-group start-date">
                            <div class="d-flex">
                                <td><img id="image-add" style="width:80px;height:80px;display:none;" src=""></td>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                        <div class="form-group start-date">
                            <label for="start-date" class="">city:</label>
                            <div class="d-flex">
                                <input id="city" placeholder="city" name="city" class="form-control" type="text" autocomplete="off" required/>
                            </div>
                        </div>
                        </div>


                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                        <div class="form-group start-date">
                            <label for="start-date" class="">party:</label>
                            <div class="d-flex">
                                <input id="party" placeholder="party" name="party" class="form-control" type="text" autocomplete="off" required/>
                            </div>
                        </div>
                        </div>



                        <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                        <div class="form-group start-date">
                            <label for="start-date" class="">current_score:</label>
                            <div class="d-flex">
                                <input id="current_score" placeholder="current_score" name="current_score" class="form-control" type="text" autocomplete="off" required/>
                            </div>
                       </div>
                       </div>

                       <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                       <div class="form-group start-date">
                           <label for="start-date" class="">weekly_range:</label>
                           <div class="d-flex">
                               <input id="weekly_range" placeholder="weekly_range" name="weekly_range" class="form-control" type="text" autocomplete="off" required/>
                           </div>
                      </div>
                      </div>


                      <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                      <div class="form-group start-date">
                          <label for="start-date" class="">ytd_range:</label>
                          <div class="d-flex">
                              <input id="ytd_range" placeholder="ytd_range" name="ytd_range" class="form-control" type="text" autocomplete="off" required/>
                          </div>
                     </div>
                     </div>


                     <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                     <div class="form-group start-date">
                         <label for="start-date" class="">1y_range:</label>
                         <div class="d-flex">
                             <input id="1y_range" placeholder="1y_range" name="y1_range" class="form-control" type="text" autocomplete="off" required/>
                         </div>
                    </div>
                    </div>


                    <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                    <div class="form-group start-date">
                        <label for="start-date" class="">all_time_high:</label>
                        <div class="d-flex">
                            <input id="all_time_high" placeholder="all_time_high" name="all_time_high" class="form-control" type="text" autocomplete="off" required/>
                        </div>
                   </div>
                   </div>


                   <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                   <div class="form-group start-date">
                       <label for="start-date" class="">all_time_low:</label>
                       <div class="d-flex">
                           <input id="all_time_low" placeholder="all_time_low" name="all_time_low" class="form-control" type="text" autocomplete="off" required/>
                       </div>
                  </div>
                  </div>


                  <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">news_mentions:</label>
                      <div class="d-flex">
                          <input id="news_mentions" placeholder="news_mentions" name="news_mentions" class="form-control" type="text" autocomplete="off" required/>
                      </div>
                 </div>
                 </div>





                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                 <div class="form-group start-date">
                     <label for="start-date" class="">social_posts:</label>
                     <div class="d-flex">
                         <input id="social_posts" placeholder="social_posts" name="social_posts" class="form-control" type="text" autocomplete="off" required/>
                     </div>
                </div>
                </div>



                <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">description:</label>
                      <div class="d-flex">
                          <textarea id="description" placeholder="description" name="description" class="form-control" type="text" autocomplete="off" required/></textarea>
                      </div>
                 </div>
                 </div>



                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">contact:</label>
                      <div class="d-flex">
                          <input id="contact" placeholder="contact" name="contact" class="form-control" type="text" autocomplete="off" required/>
                      </div>
                 </div>
                 </div>



                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">email:</label>
                      <div class="d-flex">
                          <input id="email" placeholder="email" name="email" class="form-control" type="text" autocomplete="off" required/>
                      </div>
                 </div>
                 </div>




                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">twitter:</label>
                      <div class="d-flex">
                          <input id="twitter" placeholder="twitter" name="twitter" class="form-control" type="text" autocomplete="off" required/>
                      </div>
                 </div>
                 </div>



                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">facebook:</label>
                      <div class="d-flex">
                          <input id="facebook" placeholder="facebook" name="facebook" class="form-control" type="text" autocomplete="off" required/>
                      </div>
                 </div>
                 </div>



                 <div class="col-md-12 col-sm-6 col-12" id="rank-label">
                  <div class="form-group start-date">
                      <label for="start-date" class="">linkedin:</label>
                      <div class="d-flex">
                          <input id="linkedin" placeholder="linkedin" name="linkedin" class="form-control" type="text" autocomplete="off" required/>
                      </div>
                 </div>
                 </div>





                    </div>








                </form>';
            return $body;
        }
        else {
            return $body;
        }
    }

    private function generated_table($slug = '')
    {


        $body = '';
        if ($slug == "brand") {
            $data = 'App\Models\\' . $slug;
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>';
                if (Helper::can_edit($slug) || Helper::can_delete($slug)) {
                    $body .= '<th>Action</th>';
                }
                $body .= '
                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td><img style="width:80px;height:80px;" src="' . $i . '"></td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>';
                        if (Helper::can_edit($slug) || Helper::can_delete($slug)) {
                            $body .= '<td>';
                            if (Helper::can_edit($slug)) {
                                $body .= '<button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name . '" >Edit</button>';
                            }
                            if (Helper::can_delete($slug)) {
                                $body .= '<button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>';
                            }

                            $body .= '</td>';
                        }
                        $body .= '</tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S. No</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Creation Date</th>';
                if (Helper::can_edit($slug) || Helper::can_delete($slug)) {
                    $body .= '<th>Action</th>';
                }
                $body .= '
                                        </tr>
                                    </tfoot>';
            }
            $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "product") {
            $data = 'App\Models\\' . $slug;
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Category</th>
                                          <th>Price</th>
                                          <th>Description</th>
                                          <th>Specification</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $category = category::where('is_active', 1)->where('is_deleted', 0)->where('id', $val->category_id)->first();
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . $category->name . '</td>
                                          <td>$' . $val->price . '</td>
                                          <td>' . $val->description . '</td>
                                          <td>' . $val->specification . '</td>
                                          <td><img style="width:80px;height:80px;" src="' . $i . '"></td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name . '" data-description= "' . $val->description . '" data-category_id= "' . $val->category_id . '" data-price= "' . $val->price . '" data-image= "' . $i . '" data-specification= "' . $val->specification . '" >Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Category</th>
                                          <th>Price</th>
                                          <th>Description</th>
                                          <th>Specification</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            }
            $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#category_id").val($(this).data("category_id"))
                                                $("#price").val($(this).data("price"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                var description = $(this).data("description");
                                                CKEDITOR.instances.description.setData(description);
                                                var specification = $(this).data("specification");
                                                CKEDITOR.instances.specification.setData(specification);
                                                $("#image").removeAttr("required");
                                                $("#image-add").css("display","");
                                                $("#image-add").attr("src",$(this).data("image"));
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "category") {
            $data = 'App\Models\\' . $slug;
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name . '" >Edit</button>
                                             <a href="' . route('news.category', $val->id) . '" class="btn btn-secondary">Add News</a>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            }
            $script = '$("body").on("click" ,".editor-form",function(){
                                                $("#name").val($(this).data("name"))
                                                $("#record_id").val($(this).data("edit_id"))
                                                $("#addevent").modal("show")
                                            })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "contact-us") {
            $data = 'App\Models\contact_us';
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Message</th>
                                          <th>Creation Date</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->first_name . '</td>
                                          <td>' . $val->last_name . '</td>
                                          <td>' . $val->phone . '</td>
                                          <td>' . $val->email . '</td>
                                          <td>' . $val->message . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                       </tr>';
                    }
                }
                $body .= '<thead>
                                       <tr>
                                            <th>S. No</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Creation Date</th>
                                       </tr>
                                       </thead>
                                       <tbody>';
               }
            $script = '';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "presidential-score") {
            $data = 'App\Models\presidential_score';
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>Score</th>
                                          <th>Date</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . $val->score . '</td>
                                          <td>' . $val->date . '</td>
                                          <td><img style="width:80px;height:80px;" src="' . $i . '"></td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name . '" data-score= "' . $val->score . '" data-date= "' . $val->date . '" data-image= "' . $i . '">Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                       <th>S. No</th>
                                       <th>Name</th>
                                       <th>Score</th>
                                       <th>Date</th>
                                       <th>Image</th>
                                       <th>Creation Date</th>
                                       <th>Action</th>
                                       </tr>
                                    </tfoot>';
            }
            $script = '$("body").on("click" ,".editor-form",function(){
                                        $("#name").val($(this).data("name"))
                                        $("#score").val($(this).data("score"))
                                        $("#date").val($(this).data("date"))
                                        $("#record_id").val($(this).data("edit_id"))
                                        $("#image").removeAttr("required");
                                        $("#image-add").css("display","");
                                        $("#image-add").attr("src",$(this).data("image"));
                                        $("#addevent").modal("show")
                                    })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "volunteer") {
            $data = 'App\Models\\' . $slug;
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>First_name</th>
                                          <th>Last_name</th>
                                          <th>Phone</th>
                                          <th>Email</th>
                                          <th>Age</th>
                                          <th>Education</th>
                                          <th>Message</th>
                                          <th>Created_at</th>

                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->first_name . '</td>
                                          <td>' . $val->last_name . '</td>
                                          <td>' . $val->phone . '</td>
                                          <td>' . $val->email . '</td>
                                          <td>' . $val->age . '</td>
                                          <td>' . $val->education . '</td>
                                          <td>' . $val->message . '</td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>


                                       </tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>

                                    </tfoot>';
            }
            $script = '';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "watch-list") {
            $data = 'App\Models\watch_list';
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>desciption</th>
                                          <th>Date</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . $val->description . '</td>
                                          <td>' . $val->date . '</td>
                                          <td><img style="height:80px;" src="' . $i . '"></td>
                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name .'" data-name= "' . $val->name . '" data-description= "' . $val->description . '" data-date= "' . $val->date . '" data-image= "' . $i . '">Edit</button>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                          </td>
                                       </tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                       <th>S. No</th>
                                          <th>Name</th>
                                          <th>desciption</th>
                                          <th>Date</th>
                                          <th>Image</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            }
            $script = '$("body").on("click" ,".editor-form",function(){
                                        $("#name").val($(this).data("name"))
                                        $("#description").val($(this).data("description"))
                                        $("#date").val($(this).data("date"))
                                        $("#record_id").val($(this).data("edit_id"))
                                        $("#image").removeAttr("required");
                                        $("#image-add").css("display","");
                                        $("#image-add").attr("src",$(this).data("image"));
                                        $("#addevent").modal("show")
                                    })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } elseif ($slug == "senators") {
            $data = 'App\Models\senators';
            $loop = $data::where("is_active", 1)->where("is_deleted", 0)->get();
            if ($loop) {
                $body = '<thead>
                                       <tr>
                                          <th>S. No</th>
                                          <th>Name</th>
                                          <th>City</th>
                                          <th>Party</th>
                                          <th>Image</th>
                                          <th>Current Score</th>
                                          <th>Weekly Range</th>
                                          <th>YTD Range</th>
                                          <th>1y Range</th>
                                          <th>All Time High</th>
                                          <th>All Time Low</th>
                                          <th>News Mentions</th>
                                          <th>Social Posts</th>
                                          <th>Description</th>
                                          <th>Contact</th>
                                          <th>Email</th>
                                          <th>Twitter</th>
                                          <th>Facebook</th>
                                          <th>Linkedin</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>

                                       </tr>
                                    </thead>
                                    <tbody>';
                if ($loop) {
                    foreach ($loop as $key => $val) {
                        $i = asset($val->image);
                        $body .= '<tr>
                                          <td>' . ++$key . '</td>
                                          <td>' . $val->name . '</td>
                                          <td>' . $val->city . '</td>
                                          <td>' . $val->party . '</td>
                                          <td><img style="height:80px;" src="' . $i . '"></td>
                                          <td>' . $val->current_score . '</td>
                                          <td>' . $val->weekly_range . '</td>
                                          <td>' . $val->ytd_range . '</td>
                                          <td>' . $val->y1_range . '</td>
                                          <td>' . $val->all_time_high . '</td>
                                          <td>' . $val->all_time_low . '</td>
                                          <td>' . $val->news_mentions . '</td>
                                          <td>' . $val->social_posts . '</td>
                                          <td>' . $val->description . '</td>
                                          <td>' . $val->contact . '</td>
                                          <td>' . $val->email . '</td>
                                          <td>' . $val->twitter . '</td>
                                          <td>' . $val->facebook . '</td>
                                          <td>' . $val->linkedin . '</td>

                                          <td>' . date("M d,Y", strtotime($val->created_at)) . '</td>
                                          <td>
                                             <button type="button" class="btn btn-primary editor-form" data-edit_id= "' . $val->id . '" data-name= "' . $val->name . '" data-city= "' . $val->city . '" data-party= "' . $val->party .'" data-current_score	= "' . $val->current_score	 .'" data-weekly_range= "' . $val->weekly_range .'" data-ytd_range= "' . $val->ytd_range .'" data-y1_range= "' . $val->y1_range .'" data-all_time_high	= "' . $val->all_time_high	 .'" data-all_time_low	= "' . $val->all_time_low	 .'" data-news_mentions= "' . $val->news_mentions .'" data-social_posts= "' . $val->social_posts . '" data-contact= "' . $val->contact . '" data-email	= "' . $val->email . '" data-twitter= "' . $val->twitter .   '" data-facebook= "' . $val->facebook . '" data-linkedin= "' . $val->linkedin .'" data-description= "' . $val->description . '" data-date= "' . $val->date . '" data-image= "' . $i . '">Edit</button>
                                             <a href="' . route('legislative-activity', $val->id) . '" class="btn btn-secondary">Add Legislation</a>
                                             <button type="button" class="btn btn-danger delete-record" data-model="' . $data . '" data-id= "' . $val->id . '" >Delete</button>
                                             </td>
                                       </tr>';
                    }
                }
                $body .= '</tbody>
                                    <tfoot>
                                       <tr>
                                       <th>S. No</th>
                                          <th>Name</th>
                                          <th>City</th>
                                          <th>Party</th>
                                          <th>Image</th>
                                          <th>Current Score</th>
                                          <th>Weekly Range</th>
                                          <th>YTD Range</th>
                                          <th>1y Range</th>
                                          <th>All Time High</th>
                                          <th>All Time Low</th>
                                          <th>News Mentions</th>
                                          <th>Social Posts</th>
                                          <th>Description</th>
                                          <th>Contact</th>
                                          <th>Email</th>
                                          <th>Twitter</th>
                                          <th>Facebook</th>
                                          <th>Linkedin</th>
                                          <th>Creation Date</th>
                                          <th>Action</th>
                                       </tr>
                                    </tfoot>';
            }
            $script = '$("body").on("click" ,".editor-form",function(){
                                        $("#name").val($(this).data("name"))
                                        $("#city").val($(this).data("city"))
                                        $("#party").val($(this).data("party"))
                                        $("#current_score").val($(this).data("current_score"))
                                        $("#weekly_range").val($(this).data("weekly_range"))
                                        $("#ytd_range").val($(this).data("ytd_range"))
                                        $("#1y_range").val($(this).data("y1_range"))
                                        $("#all_time_high").val($(this).data("all_time_high"))
                                        $("#all_time_low").val($(this).data("all_time_low"))
                                        $("#news_mentions").val($(this).data("news_mentions"))
                                        $("#social_posts").val($(this).data("social_posts"))
                                        $("#description").val($(this).data("description"))
                                        $("#contact").val($(this).data("contact"))
                                        $("#email").val($(this).data("email"))
                                        $("#twitter").val($(this).data("twitter"))
                                        $("#facebook").val($(this).data("facebook"))
                                        $("#linkedin").val($(this).data("linkedin"))
                                        $("#record_id").val($(this).data("edit_id"))
                                        $("#image").removeAttr("required");
                                        $("#image-add").css("display","");
                                        $("#image-add").attr("src",$(this).data("image"));
                                        $("#addevent").modal("show")
                                    })';
            $resp['body'] = $body;
            $resp['script'] = $script;
            return $resp;
        } else {
            return $body;
        }

    }


    public function crud_generator($slug = '', Request $request)
    {
        $token_ignore = ['_token' => '', 'record_id' => '', 'image' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        $data = 'App\Models\\' . $slug;
        if ($slug == 'product') {
            $s = $_POST['name'];
            $s = str_replace(' ', '-', $s);
            $s = strtolower($s);
            $post_feilds['slug'] = $s;
        }
        $extension = array("jpeg", "jpg", "png", "jfif", "webp");
        if (isset($request->image)) {
            $file = $request->image;
            $ext = $request->image->getClientOriginalExtension();
            if (in_array($ext, $extension)) {
                $file_name = $request->image->getClientOriginalName();
                $file_name = substr($file_name, 0, strpos($file_name, "."));
                $name = "uploads/product/" . $file_name . "_" . time() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path() . '/uploads/product/';
                $share = $request->image->move($destinationPath, $name);
                $post_feilds['image'] = $name;
            } else {
                $msg = "This File type is not Supported!";
                return redirect()->back()->with('error', "Error Code: " . $msg);
            }
        }
        try {
            if (isset($_POST['record_id']) && $_POST['record_id'] != '') {
                $create = $data::where("id", $_POST['record_id'])->update($post_feilds);
                $msg = "Record has been updated";
            }
            else {
                $create = $data::create($post_feilds);
                $msg = "Record has been created";
            }
            return redirect()->back()->with('message', $msg);
        } catch (Exception $e) {
            $error = $e->getMessage();
            return redirect()->back()->with('error', "Error Code: " . $error);
        }
    }

    public function delete_record(Request $request)
    {
        $token_ignore = ['_token' => '', 'id' => '', 'model' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        $data = $_POST['model'];
        try {
            $update = $data::where("id", $_POST['id'])->update($post_feilds);
            $status['message'] = "Record has been deleted";
            $status['status'] = 1;
            return json_encode($status);
        } catch (Exception $e) {
            $error = $e->getMessage();
            $status['message'] = $error;
            $status['status'] = 0;
            return json_encode($status);
        }
    }
}
