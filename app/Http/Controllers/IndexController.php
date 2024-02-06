<?php

namespace App\Http\Controllers;

use App\Models\contact_us;
use App\Models\presidential_score;
use App\Models\recent_legislation;
use App\Models\senators;
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
    public function index()
    {
        $senators = senators::where('is_active', 1)->where('is_deleted', 0)->take(4)->orderBy('id', 'DESC')->get();
        $watch_list = watch_list::where('is_active', 1)->where('is_deleted', 0)->get();

        $presidential_score = presidential_score::where('is_active', 1)->where('is_deleted', 0)->get();
        return view('web.pages.index', compact('presidential_score', 'watch_list', 'senators'))->with('title', 'Index');
    }
    public function news()
    {
        return view('web.pages.news')->with('title', 'News');
    }
    public function political_detail($id)
    {


        $senator = senators::find($id);
        $recent_legislation = $senator->recentlegislations;
        return view('web.pages.political-detail', compact('id', 'senator', 'recent_legislation'))->with('title', 'Political-Detail');
    }
    public function political_point()
    {
        $senators = senators::where('is_active', 1)->where('is_deleted', 0)->get();


        return view('web.pages.political-point', compact('senators'))->with('title', 'Political-Point');
    }
    public function politics()
    {
        return view('web.pages.politics')->with('title', 'Politics');
    }
    public function presidential_score_detail()
    {
        return view('web.pages.presidential-score-detail')->with('title', 'Presidential-Score');
    }
    public function volunteer()
    {
        return view('web.pages.volunteer')->with('title', 'Volunteer');
    }
    public function volunteer_submit(Request $request)
    {

        $volunteer = new volunteer();
        $volunteer->first_name = $request->first_name;
        $volunteer->last_name = $request->last_name;
        $volunteer->phone = $request->phone;
        $volunteer->email = $request->email;
        $volunteer->age = $request->age;
        $volunteer->education = $request->education;
        $volunteer->message = $request->message;
        $volunteer->save();
        return redirect()->back()->with('message', 'Inquiry Submitted Successfully');
    }


    public function watch_list()
    {
        $watch_list = watch_list::where('is_active', 1)->where('is_deleted', 0)->get();

        return view('web.pages.watch-list', compact('watch_list'))->with('title', 'Watch-List');
    }
    public function contact()
    {
        return view('web.pages.contact')->with('title', 'Contact Us');
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



        return redirect()->back()->with('message', 'Contact Inquiry Submitted');
    }



}
