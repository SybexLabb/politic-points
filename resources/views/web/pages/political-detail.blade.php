@extends('web.layout.master')
@section('content')
    <main>
        <section class="sec-inner-banner" data-bg-image="{{ asset(getCMS('poltics_points_banner','value')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h4>{{ getCMS('politics_point_title','value') }}</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li><a href="{{ route('political-point') }}">politics Point</a></li>
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
                                <img src="{{ asset($senator->image) }}" class="img-fluid thumb" alt="">
                            </div>
                            <h3>{{ $senator->name }}</h3>
                            <h4>{{ $senator->city }}</h4>
                            <h4>{{ $senator->party }}</h4>
                            <h6>Score and Trends:</h6>
                            <ul class="d-flex flex-row flex-wrap">
                                <li class="w-50 fw-bold">Current Score: {{ $senator->current_score }}</li>
                                <li class="w-50 fw-bold">Weekly Range:{{ $senator->weekly_range }}</li>
                                <li class="w-50 fw-bold">YTD Range: {{ $senator->ytd_range }}</li>
                                <li class="w-50 fw-bold">1Y Range: {{ $senator->y1_range }}</li>
                                <li class="w-50 fw-bold">All-Time High (ATH): {{ $senator->all_time_high }}</li>
                                <li class="w-50 fw-bold">All-Time Low (ATL): {{ $senator->all_time_low }}</li>
                            </ul>
                            <h5>Performance Metrics</h5>
                            <ul class="d-flex flex-row flex-wrap">
                                <li class="w-50 fw-bold">
                                    <h6>Political Presence:</h6> News Mentions: {{ $senator->news_mentions }}
                                </li>
                                <li class="w-50 fw-bold">
                                    <h6>Political Engagement:</h6> Social Media Posts: {{ $senator->social_posts }}
                                </li>
                            </ul>
                            <p>{{ $senator->description }}</p>
                            <h4>Legislative Activity</h4>
                            <ul>
                                <h5>Recent Legislation</h5>
                                @foreach ($recent_legislation as $value)
                                    <li>
                                        <h6>{{ $value->title }}</h6> {{ $value->description }}
                                    </li>
                                @endforeach
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
                                            <li><a class="icon phn-icon"
                                                    href="tel:{{ $senator->contact }}">{{ $senator->contact }}</a></li>
                                            <li><a class="icon em-icon"
                                                    href="mailto:{{ $senator->email }}">{{ $senator->email }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                                    <div class="box-area">
                                        <h6>Social Media Links:</h6>
                                        <ul class="d-flex flex-row">
                                            <li><a class="social-icon" href="{{ $senator->twitter }}" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a></li>
                                            <li><a class="social-icon" href="{{ $senator->facebook }}" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a class="social-icon" href="{{ $senator->linkedin }}" target="_blank"><i
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
