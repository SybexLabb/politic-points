<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact_us;
use App\Models\faqs;
use App\Models\news;
use App\Models\presidential_score;
use App\Models\recent_legislation;
use App\Models\senators;
use App\Models\volunteer;
use App\Models\watch_list;
use Exception;
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
        $faqs = faqs::active()->get();
        $senators = senators::active()->take(4)->orderBy('id', 'DESC')->get();
        $watch_list = watch_list::where('is_active', 1)->where('is_deleted', 0)->get();
        $presidential_score = presidential_score::where('is_active', 1)->where('is_deleted', 0)->get();
        $news = news::active()->latest('id')->take(3)->get();

        return view('web.pages.index', compact('presidential_score', 'watch_list', 'senators', 'faqs', 'news'))->with('title', 'Index');
    }
    public function news()
    {
        $category = category::active()->whereHas('getNews')->get()->take(5);
        $news = news::active()->paginate(3);
        $popular_news = news::active()->latest('id')->take(3)->get();

        return view('web.pages.news', compact('category', 'news', 'popular_news'))->with('title', 'News');
    }
    public function category_news($id)
    {
        $category = category::active()->whereHas('getNews')->get()->take(5);
        $news = news::where('category_id', $id)->active()->paginate(3);
        $popular_news = news::active()->latest('id')->take(3)->get();

        return view('web.pages.news', compact('category', 'news', 'popular_news'))->with('title', 'News');
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
        $faqs = faqs::active()->get();
        return view('web.pages.politics', compact('faqs'))->with('title', 'Politics');
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
        try {
            $politicalpoint = new contact_us();
            $politicalpoint->first_name = $request->first_name;
            $politicalpoint->last_name = $request->last_name;
            $politicalpoint->phone = $request->phone;
            $politicalpoint->email = $request->email;
            $politicalpoint->message = $request->massage;
            $politicalpoint->save();
            return redirect()->back()->with('message', 'Contact Inquiry Submitted');
        } catch (Exception $error) {
            return redirect()->back()->with('error', $error->getMessage());
        }
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $searchnews = news::where('title', 'LIKE', '%' . $query . '%')->get();
        $body = view('web.ajax.search', compact('searchnews'))->render();
        return response()->json(["body" => $body]);
    }



}
