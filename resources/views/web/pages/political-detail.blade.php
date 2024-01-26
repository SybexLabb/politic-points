@extends('web.layout.master')
@section('content')

<main>
    <section class="sec-inner-banner" data-bg-image="images/news-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>Politic Point</h4>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li><a href="{{route('political-point')}}">politics Point</a></li>
                            <li>Politic Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-politic-detail">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 col-xxl-9">
                    <div class="desc">
                        <div class="img-main">
                            <img src="{{asset('web/images/politic-detail.webp')}}" class="img-fluid thumb" alt="">
                        </div>
                        <h3>John Doe</h3>
                        <h4>Senator from Montana</h4>
                        <h4>Democratic Party</h4>
                        <h6>Score and Trends:</h6>
                        <ul class="d-flex flex-row flex-wrap">
                            <li class="w-50 fw-bold">Current Score: 728</li>
                            <li class="w-50 fw-bold">Weekly Range: 720-735</li>
                            <li class="w-50 fw-bold">YTD Range: 715-740</li>
                            <li class="w-50 fw-bold">1Y Range: 690-780</li>
                            <li class="w-50 fw-bold">All-Time High (ATH): 810</li>
                            <li class="w-50 fw-bold">All-Time Low (ATL): 630</li>
                        </ul>
                        <h5>Performance Metrics</h5>
                        <ul class="d-flex flex-row flex-wrap">
                            <li class="w-50 fw-bold">
                                <h6>Political Presence:</h6> News Mentions: High
                            </li>
                            <li class="w-50 fw-bold">
                                <h6>Political Engagement:</h6> Social Media Posts: Medium
                            </li>
                        </ul>
                        <p>John Doe has served the people of Montana in the U.S. Senate since 1990. A dedicated public
                            servant, Doe has a long history of working on bipartisan legislation, with a strong focus on
                            conservation and agriculture. Prior to his Senate service, he was the Mayor of Missoula and
                            has been a champion for rural healthcare and community development.Prior to his Senate
                            service, he was the Mayor of Missoula and has been a champion for rural healthcare and
                            community development.Prior to his Senate service, he was the Mayor of Missoula and has been
                            a champion for rural healthcare and community development.</p>
                        <h4>Legislative Activity</h4>
                        <ul>
                            <h5>Recent Legislation</h5>
                            <li>
                                <h6>Public Lands Conservation Act:</h6> Legislation aimed at expanding Montana's
                                protected wilderness to safeguard natural habitats and promote environmental
                                stewardship.
                            </li>
                            <li>
                                <h6>Farm Subsidies Adjustment Act:</h6>An initiative to reform agricultural subsidies,
                                ensuring fair distribution and support for Montana's farmers.
                            </li>
                            <li>
                                <h6>Rural Healthcare Access Act:</h6>A bill providing increased funds to rural health
                                centers, improving access to medical services for underserved communities.
                            </li>
                        </ul>

                        <div class="graph-area my-5">
                            <h3>Score trend graph</h3>
                            <div id="chart-detail" class="chart"></div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="box-area">
                                    <h6>Contact Information:</h6>
                                    <ul>
                                        <li><a class="icon phn-icon" href="tel:+1234567890">+123-456-7890</a></li>
                                        <li><a class="icon em-icon" href="mailto:abc@gmail.com">abc@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="box-area">
                                    <h6>Social Media Links:</h6>
                                    <ul class="d-flex flex-row">
                                        <li><a class="social-icon" href="void:;"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li><a class="social-icon" href="void:;"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a class="social-icon" href="void:;"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                    <div class="side-area">
                        <div class="list-box">
                            <h5>Recent News</h5>
                            <ul>
                                <li><a href="void:;">John Doe's Score Rises 14 Points After Conservation Bill
                                        Passage</a></li>
                                <li><a href="void:;">Doe Wins Reelection Bid Easily With Rural Vote Surge</a></li>
                                <li><a href="void:;">Poll: All For Doe As Senator's Approval Hits 60%</a></li>
                                <li><a href="void:;">Doe Under Fire From Party Leaders For Tax Stance</a></li>
                                <li><a href="void:;">Senator Doe Spearheads Flood Relief Bill</a></li>
                            </ul>
                        </div>
                        <div class="list-box">
                            <h5>Current Committee Assignments:</h5>
                            <ul>
                                <li><a href="void:;">Committee on Agriculture, Nutrition, and Forestry</a></li>
                                <li><a href="void:;">Committee on Energy and Natural Resources</a></li>
                                <li><a href="void:;">Committee on Indian Affairs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
