@extends('web.layout.master')
@section('content')

<main>
    <section class="sec-inner-banner" data-bg-image="{{ asset(getCMS('presidential_score_banner','value')) }}">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>{{ getCMS('presidential_score_banner_title','value') }}</h4>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li><a href="{{route('presidential-score-detail')}}">Presidential Score</a></li>
                            <li>Presidential Score Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-presidential-detail">
        <div class="container">
            <div class="row gx-xxl-3 gx-xl-3 gx-lg-3 align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="desc">
                    <div class="img-main">
                        <img src="{{ asset(getCMS('presedential_section1_image','value')) }}" class="img-fluid thumb" alt="">
                    </div>
                        <h4>{{ getCMS('presedential_section1_title','value') }}</h4>
                        <h6>{{ getCMS('presedential_section1_heading','value') }}</h6>
                        <ul>
                            <h5>{{ getCMS('presidential_section1_sub_title','value') }}</h5>
                            <li>{!! str_replace("\r\n", "<li>", getCMS('key_economic_stats','value')) !!}</li>
                            {{-- <li>Inflation: 3/10 </li>
                            <li>Consumer Confidence: 5/10 </li> --}}
                        </ul>
                        <p>{!! str_replace("\r\n", "<br>", getCMS('presedential_section1_description','value')) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
