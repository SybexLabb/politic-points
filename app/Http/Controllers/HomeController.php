<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\attributes;
use App\Models\config;
use App\Models\logo;
use App\Models\senators;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function dashboard()
    {
        return view('dashboard');
    }


    public function logo()
    {
        $user = Auth::user();
        $logo = logo::where('slug', 'logo')->orderBy('id', 'desc')->first();
        $favicon = logo::where('slug', 'favicon')->orderBy('id', 'desc')->first();
        return view('logo')->with('title', "System Configuration")->with(compact('user', 'logo', 'favicon'));
    }
    public function change_logo(Request $request)
    {
        $logo = new logo;
        $path = "";
        if ($request->file('pic_attach') != '') {
            $path = ($request->file('pic_attach'))->store('uploads/logo/' . md5(Str::random(20)), 'public');
        }
        $logo->slug = $request->slug;
        $logo->image = $path;
        $logo->save();
        return redirect()->back()->with('success', 'Image has been successfully updated');
    }
    public function user_profile()
    {
        $user = Auth::user();
        if (!$user->role_id == 1) {
            return redirect()->route("welcome");
        }
        return view('user-profile')->with('title', "Home Page")->with(compact('user'));
    }

    public function update_password()
    {
        $user = Auth::user();
        if (!$user->role_id == 1) {
            return redirect()->route("welcome");
        }
        return view('user-password')->with('title', "Home Page")->with(compact('user'));
    }
    public function user_infoupdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('message', 'Information updated successfully');
    }
    public function user_passwordupdate(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $post_feilds['password']  = $hashed_password;
        if (password_verify($old_password, $user->password) && $new_password == $confirm_password && $new_password != $old_password) {
            $create = User::where("id", $user->id)->update($post_feilds);
            return redirect()->back()->with('message', 'Information updated successfully');
        } else {
            return redirect()->back()->with('message', 'Problem updating Information');
        }
    }

    public function user_updates(Request $request)
    {
        $user = User::find($_POST['user_id']);
        if (!is_null($request->emp_id) && $request->emp_id != "") {
            $user->emp_id = $request->emp_id;
        }
        if (!is_null($request->role_id) && $request->role_id != "") {
            $user->role_id = $request->role_id;
        }
        if (!is_null($request->department_id) && $request->department_id != "") {
            $user->department = $request->department_id;
        }
        if (!is_null($request->designations) && $request->designations != "") {
            $user->designation = $request->designations;
        }
        if (!is_null($request->reporting_line_id) && $request->reporting_line_id != "") {
            $user->reporting_line = $request->reporting_line_id;
        }
        if (!is_null($request->salary) && $request->salary != "") {
            $user->salary = $request->salary;
        }
        if (!is_null($request->status) && $request->status != "") {
            $user->is_active = $request->status;
        }
        if (!is_null($request->shift_in) && $request->shift_in != "") {
            $user->shift_in = $request->shift_in;
        }
        if (!is_null($request->shift_out) && $request->shift_out != "") {
            $user->shift_out = $request->shift_out;
        }

        $user->save();
        return redirect()->back()->with('message', 'Information updated successfully');
    }


    public function upload_image(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $path = "";
        if ($request->file('pic_attach') != '') {
            $path = ($request->file('pic_attach'))->store('uploads/avatar/' . md5(Str::random(20)), 'public');
        }
        $user->profile_pic = $path;
        $user->save();
        return redirect()->back()->with('success', 'Image has been successfully updated');
    }
    public function profile_submit(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($request->has('avatar')) {
            if ($request->file('avatar') != '') {
                $request->validate([
                    'avatar' => ['required', 'mimes:jpeg,png,jpg', 'max:2000']
                ]);
                $path_a = ($request->file('avatar'))->store('uploads/avatar/' . md5(Str::random(20)), 'public');
                $user->profile_pic = $path_a;
                $user->save();
                return redirect()->back()->with('message', 'Profile Picture been updated successfully');
            } else {
                return redirect()->back()->with('error', 'File not found, please update your Profile Picture');
            }
        }
        // Resume Upload
        if ($request->has('cnic_file')) {
            if ($request->file('cnic_file') != '') {
                $request->validate([
                    'cnic_file' => ['required', 'mimes:jpeg,png,jpg', 'max:2000']
                ]);
                $path_c = ($request->file('cnic_file'))->store('uploads/cnic/' . md5(Str::random(20)), 'public');
                $user->cnic_doc = $path_c;
                $user->save();
                return redirect()->back()->with('message', 'NIC Picture has been updated successfully');
            } else {
                return redirect()->back()->with('error', 'File not found, please update your NIC Picture');
            }
        }
        // // CNIC Upload
        if ($request->has('cv_file')) {
            if ($request->file('cv_file') != '') {
                $request->validate([
                    'cv_file' => ['required', 'mimes:doc,docs,pdf', 'max:5000']
                ]);
                $path_r = ($request->file('cv_file'))->store('uploads/resume/' . md5(Str::random(20)), 'public');
                $user->resume_doc = $path_r;
                $user->save();
                return redirect()->back()->with('message', 'Resume/CV Document has been updated successfully');
            } else {
                return redirect()->back()->with('error', 'File not found, please update your Resume/CV Document');
            }
        }
        if ($request->has('education_file')) {
            if ($request->file('education_file') != '') {
                $request->validate([
                    'education_file' => ['required', 'mimes:doc,docs,pdf', 'max:5000']
                ]);
                $path_e = ($request->file('education_file'))->store('uploads/education/' . md5(Str::random(20)), 'public');
                $user->education_doc = $path_e;
                $user->save();
                return redirect()->back()->with('message', 'Education Document has been updated successfully');
            } else {
                return redirect()->back()->with('error', 'File not found, please update your Education Document');
            }
        }
    }

    public function web_config()
    {
        $user = Auth::user();
        $config = config::all();
        return view('config')->with('title', "System Configuration")->with(compact('user', 'config'));
    }

    public function config_update(Request $request)
    {
        $token_ignore = ['_token' => ''];
        $post_feilds = array_diff_key($_POST, $token_ignore);
        foreach ($post_feilds as $key => $value) {
            $config = config::where("type", $key)->first();
            $config->value = $value;
            $config->save();
        }
        return redirect()->back()->with('message', 'Setting has been updated.');
    }

    public function legislative_activity($id)
    {

        $senator = senators::find($id);

        return view('roles.pages.legislative-activity', compact('id', 'senator'))->with('title', 'Legislative Activity');
    }
}
