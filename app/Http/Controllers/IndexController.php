<?php

namespace App\Http\Controllers;

use App\Models\contact_us;
use App\Models\presidential_score;
use App\Models\volunteer;
use App\Models\watch_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use Auth;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function login()
    {
        if (Auth::check()) {

            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    public function index(){
        $watch_list = watch_list::where('is_active',1)->where('is_deleted',0)->get();

        $presidential_score = presidential_score::where('is_active',1)->where('is_deleted',0)->get();
        return view('web.pages.index', compact('presidential_score','watch_list'))->with('title','Index');
    }
    public function news(){
        return view('web.pages.news')->with('title','news');
}
public function political_detail(){
    return view('web.pages.political-detail')->with('title','political-detail');

}
public function political_point(){
    return view('web.pages.political-point')->with('title','political-point');

}
public function politics(){
    return view('web.pages.politics')->with('title','politics');

}
public function presidential_score_detail()
{
    return view('web.pages.political-detail')->with('title','political-detail');
}
public function volunteer()
{
    return view('web.pages.volunteer')->with('title','volunteer');
}
public function volunteer_submit(Request $request){

    $volunteer = new volunteer();
    $volunteer->first_name = $request->first_name;
    $volunteer->last_name = $request->last_name;
    $volunteer->phone = $request->phone;
    $volunteer->email = $request->email;
    $volunteer->age = $request->age;
    $volunteer->education = $request->education;
    $volunteer->message = $request->message;
    $volunteer->save();
    return redirect()->back()->with('message','Contact Inquiry Submitted');


}


public function watch_list()
{
    $watch_list = watch_list::where('is_active',1)->where('is_deleted',0)->get();

    return view('web.pages.watch-list', compact('watch_list'))->with('title','watch-list');
}
public function contact()
{
    return view('web.pages.contact')->with('title','contact');
}
public function contact_submit(Request $request)
{
    $politicalpoint = new contact_us();
    $politicalpoint->first_name = $request->first_name;
    $politicalpoint->last_name = $request->last_name;
    $politicalpoint->phone = $request->phone;
    $politicalpoint->email = $request->email;
    $politicalpoint->message = $request->massage;
    $politicalpoint->save();



    return redirect()->back()->with('message','Contact Inquiry Submitted');
}


}
