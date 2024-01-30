@extends('web.layout.master')
@section('content')

<main>
    <section class="sec-home-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7">
                    <div class="desc">
                        <h6>Core Scoring System</h6>
                        <h4>Understanding Politics, One Point At A Time</h4>
                        <p>The President's Politic Points total has remained steady at 65 this week, despite the recent approval of a significant infrastructure spending package. Our analysis indicates that while the bill garnered bipartisan support, there were apprehensions regarding its potential impact on inflation and the deficit. The President has accrued points for his economic initiatives thus far this year, but it will be crucial to uphold party unity in the run-up to the midterms to maintain his current score.</p>
                        <div class="btn-grp">
                            <a href="void:;" class="btn learn-btn hvr-bounce-to-left">Join Campaign!</a>
                            <a href="void:;" class="btn view-btn hvr-bounce-to-left">Donate Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-about">
        <div class="container">
            <div class="row gx-xxl-3 gx-xl-3 gx-lg-3 align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="img-main">
                        <img src="{{asset('web/images/about.jpg')}}" class="img-fluid thumb" alt="">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h6>ABOUT POLITICS POINT</h6>
                        <h4>About Us</h4>
                        <p>Politik Points is a platform that operates independently and without bias. Our goal is to enhance political transparency and accountability through the use of objective data-driven analysis. We aim to provide voters with fair and fact-based scoring, offering valuable insights to complement their decision-making process. We aim to promote engaged citizenship by equipping voters with the necessary resources to make well-informed choices.</p>

                        <p>The Politik Points scoring system synthesizes a politician's record into an easy-to-understand score reflecting key categories like policy expertise, ethics, bipartisanship, and leadership skills. This quantitative assessment is designed to help voters quickly compare politicians' competence and performance.</p>

                        <p>Our team comprises political scientists, data analysts, journalists, and civic technologists dedicated to upholding impartiality and rigor. We encourage public scrutiny of our methodology and results to enhance our commitment to impartiality continually.</p>

                        <!-- <div class="card-grp">
                            <div class="row justify-content-around">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-5">
                                    <div class="card abt-card">
                                        <div class="icon-main">
                                            <img src="images/icn1.png" class="img-fluid thumb" alt="">
                                        </div>
                                        <div class="desc">
                                            <a href="void:;">Majored in Political Science</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-5">
                                    <div class="card abt-card">
                                        <div class="icon-main">
                                            <img src="images/icn2.png" class="img-fluid thumb" alt="">
                                        </div>
                                        <div class="desc">
                                            <a href="void:;">Public Perception & Media</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-5">
                                    <div class="card abt-card">
                                        <div class="icon-main">
                                            <img src="images/icn3.png" class="img-fluid thumb" alt="">
                                        </div>
                                        <div class="desc">
                                            <a href="void:;">Legislative Activity</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-5">
                                    <div class="card abt-card">
                                        <div class="icon-main">
                                            <img src="images/icn4.png" class="img-fluid thumb" alt="">
                                        </div>
                                        <div class="desc">
                                            <a href="void:;">Public Speaking & Debates</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <a href="{{route('politics')}}" class="btn abt-btn">view more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-faq">
        <div class="container">
            <div class="row align-items-center gx-xxl-5 gx-xl-5 gx-lg-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h6>MISSION & VISION</h6>
                        <h4>Our Mission</h4>
                        <p>At Politik Points, we aim to facilitate an enlightening discovery process as you delve into candidates' positions. We offer data-driven analysis to inform your perspectives without seeking to replace them.</p>
                        <p>Our Politik Point scores provide an objective snapshot of a politician's track record. However, it is crucial to consider numerous other factors when deciding whom to support. Voters should undertake additional research on the issues and stances that are important to them.</p>
                        <p>No solitary metric or ideology can perfectly determine a leader's suitability to govern. Our aim is to foster thoughtful contemplation, enabling you to evaluate leaders from diverse perspectives.</p>
                        <p>Our objective is to ignite an inquisitive pursuit of facts. We provide rigorous and impartial information, empowering you to think critically and determine what matters most. Consider our scores as a starting point, rather than a final verdict. The journey of democracy is one that we embark upon together.</p>
                        <!-- <div class="card-grp">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card faq-card">
                                        <div class="fq-desc">
                                            <h6>Mission</h6>
                                            <p>In hac habitasse platea dictumst. Quisque sit amet tortor sed tortor
                                                congue
                                                imperdiet ut.</p>
                                            <a href="void:;">learn more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="card faq-card">
                                        <div class="fq-desc">
                                            <h6>Vision</h6>
                                            <p>In hac habitasse platea dictumst. Quisque sit amet tortor sed tortor
                                                congue
                                                imperdiet ut.</p>
                                            <a href="void:;">learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h6>Politik Point market caps</h6>
                        <h4>For the executive and legislative branches</h4>
                        <div class="faq-area">
                            <div class="row justify-content-center">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button " type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Politik Point Market Caps: Assessing Government Competence
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>The hypothetical Politik Point market caps calculated below
                                                            aim to quantify the overall competence and performance of
                                                            each branch of government and each party within them.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="true" aria-controls="collapseTwo">
                                                    Executive Branch Market Cap
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>The total executive branch Politik Point market cap stands
                                                            at 8212. This reflects the combined scores of the President,
                                                            Vice President, and Cabinet secretaries. The President's
                                                            score fluctuations likely have an outsized impact on the
                                                            overall executive score.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Legislative Branch Market Cap
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>The total Politik Point market cap for the legislative
                                                            branch is 9102. This measures the aggregated scores for all
                                                            Senators and Representatives. The breakdown by party is:
                                                        </li>
                                                        <li>Senate Democrats: 2144</li>
                                                        <li>Senate Republicans: 1915 House Democrats: 2595</li>
                                                        <li>House Republicans: 2448</li>
                                                        <li>Comparing the hypothetical totals, the legislative branch
                                                            currently has a higher market cap than the executive branch.
                                                            The Democratic Party also leads Republicans in both
                                                            chambers.</li>
                                                        <li>Tracking the market caps periodically provides a 30,000 foot
                                                            view of perceived government competence. As leaders change,
                                                            we can monitor resulting shifts in the quantitative data.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Campaign & Fundraising
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>Campaign Management (merging Fundraising, Campaign
                                                            Contributions, Fundraising Strategies) x 2.3</li>
                                                        <li>Grassroots & Community Engagement (merging Grassroots
                                                            Engagement, Engagement with Local Organizations) x 0.7</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Knowledge & Acumen
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>Domestic Policy Acumen x 1.0</li>
                                                        <li>Foreign Policy Acumen x 1.0</li>
                                                        <li>Current Events Acumen (merging Knowledge of Current Events &
                                                            Interpretation of Political Landscape) x 1.5</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-score">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="head">
                        <h6>TOP INTEREST SCORES</h6>
                        <h4>Presidential Score</h4>
                    </div>
                </div>
            </div>
            <div class="row gx-xxl-2 gx-xl-2 gx-lg-2">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card sc-crd">
                        <div class="img-main">
                            <img src="{{asset('web/images/politic-detail.webp')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="presidential-score-detail.php">Joe Biden</a>
                            <h6>Score: 681/1000</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-cont">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>Contribute Now!</h4>
                        <p>We aim to continuously improve our scoring system and expand our coverage of politicians. If you are interested in contributing to Politik Points, don't hesitate to get in touch with us contact us for more information on how to get involved.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="btn-grp">
                        <a href="void:;" class="btn dnt-btn">$5</a>
                        <a href="void:;" class="btn dnt-btn">$15</a>
                        <a href="void:;" class="btn dnt-btn">$25</a>
                        <a href="void:;" class="btn dnt-btn">$50</a>
                        <a href="void:;" class="btn dnt-btn">other</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-senators">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="head">
                        <h6>POLITICS POINT</h6>
                        <h4>All Senators</h4>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($senators as $value)
                <div class="col-12 col-sm-6 col-md-5 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card sn-card">
                        <div class="img-main">
                            <img src="{{asset($value->image)}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('political-detail', $value->id)}}" class="link">{{$value->name}}</a>
                            <p>Bipartisanship: -20 points (bypassing compromise for power deal) </p>
                            <a href="{{route('political-detail', $value->id)}}" class="btn view-btn">Read Full Biography</a>
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- <div class="col-12 col-sm-6 col-md-5 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card sn-card">
                        <div class="img-main">
                            <img src="{{asset('web/images/sen2.jpg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('political-detail')}}" class="link">Jim Jordan</a>
                            <p>Conservative Credentials: +10 points (elevated by base) </p>
                            <a href="{{route('political-detail')}}" class="btn view-btn">Read Full Biography</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card sn-card">
                        <div class="img-main">
                            <img src="{{asset('web/images/sen3.jpg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('political-detail')}}" class="link">Bob Menendez</a>
                            <p>Senator Menendez received an extremely low score of 412 this week, a sharp drop from 682 last </p>
                            <a href="{{route('political-detail')}}" class="btn view-btn">Read Full Biography</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-5 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="card sn-card">
                        <div class="img-main">
                            <img src="{{asset('web/images/sen4.jpeg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('political-detail')}}" class="link">Jamaal Bowman</a>
                            <p>Democratic Rep. Jamaal Bowman was charged with triggering a false fire alarm in the</p>
                            <a href="{{route('political-detail')}}" class="btn view-btn">Read Full Biography</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <a href="{{route('political-point')}}" class="btn view-btn">view more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-cta">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>Stay Updated</h4>
                        <p>Sign up for our newsletter and follow us on social media to stay updated on the latest Politik Point scores and analysis. Don't miss out on significant political developments and insights – join the conversation and be part of our community.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="desc">
                        <a href="contact.php" class="btn cnt-btn">contact us</a>
                        <a href="void:;" class="link">Get Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-watch-list">
        <div class="counter-area">
            <div class="row justify-content-evenly">
                <div class="col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="cnt-bx">
                        <span data-text="k" class="counter">21</span>
                        <p>Active Volunteer</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="cnt-bx">
                        <span data-text="+" class="counter">68</span>
                        <p>Area Coverage</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="cnt-bx">
                        <span data-text="+" class="counter">158</span>
                        <p>Success Campaign</p>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
                    <div class="cnt-bx">
                        <span data-text="+" class="counter">30</span>
                        <p>Year Experience</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="head">
                        <h6>WATCH LIST</h6>
                        <h4>Politic Points Weekly</h4>
                    </div>
                </div>
                @foreach ($watch_list as $item)
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="card wt-card bg-img" data-bg-image="{{asset($item->image)}}">
                        <div class="row align-items-center justify-content-evenly">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                                <div class="date">
                                    <h6>15</h6>
                                    <span>June 2023</span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 col-xxl-7">
                                <div class="desc">
                                    <h4>{{ $item->name }}</h4>
                                    <p>{!! $item->description !!}</p>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                                <div class="bnt-grp">
                                    <a href="void:;" class="btn watch-btn">watch now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

    </section>

    <section class="sec-interest">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="head">
                        <span>TOP INTEREST SCORES</span>
                        <h4>Presidential Score</h4>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="btn-area">
                        <a href="void:;" class="btn view-btn">view more</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($presidential_score as $value)
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card sc-card">
                        <div class="img-main">
                            <img src="{{asset($value->image)}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <h4>{{$value->name}}</h4>
                            <ul>
                                <li class="lc-icon">Score: {{$value->score}}</li>
                                <li class="cl-icon">{{date("M d,Y", strtotime($value->date))}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card sc-card">
                        <div class="img-main">
                            <img src="{{asset('web/images/in2.jpg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <h4>Nancy Peloski</h4>
                            <ul>
                                <li class="lc-icon">Score: 632</li>
                                <li class="cl-icon">Wed, 15 Sep 2023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card sc-card">
                        <div class="img-main">
                            <img src="{{asset('web/images/in3.png')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <h4>Mitch McConell</h4>
                            <ul>
                                <li class="lc-icon">Score: 703</li>
                                <li class="cl-icon">Wed, 18 Oct 2023</li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <section class="sec-news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="head">
                        <h6>NEWS</h6>
                        <h4>Latest News</h4>
                    </div>
                </div>
            </div>
            <div class="row gx-xxl-2 gx-xl-2 gx-lg-2 justify-content-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card ns-crd">
                        <div class="img-main">
                            <img src="{{asset('web/images/ne1.jpg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('news')}}">Lorem Ipsom News</a>
                            <h6>United States</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card ns-crd">
                        <div class="img-main">
                            <img src="{{asset('web/images/ne2.jpg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('news')}}">Lorem Ipsom News</a>
                            <h6>United States</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card ns-crd">
                        <div class="img-main">
                            <img src="{{asset('web/images/ne3.jpg')}}" class="img-fluid thumb" alt="">
                        </div>
                        <div class="desc">
                            <a href="{{route('news')}}">Lorem Ipsom News</a>
                            <h6>United States</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <a href="{{route('news')}}" class="btn view-btn">view more</a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
