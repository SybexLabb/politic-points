@extends('web.layout.master')
@section('content')

<main>
    <section class="sec-inner-banner" data-bg-image="web/images/news-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>Presidential Score</h4>
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
                        <img src="{{asset('web/images/politic-detail.webp')}}" class="img-fluid thumb" alt="">
                    </div>
                        <h4>President Biden - Economic Outlook and Politik Points</h4>
                        <h6>Current Politik Point Score: 681/1000</h6>
                        <ul>
                            <h5>Key Economic Stats:</h5>
                            <li>GDP Growth: 4/10 </li>
                            <li>Inflation: 3/10 </li>
                            <li>Consumer Confidence: 5/10 </li>
                        </ul>
                        <p>With GDP growth projected to slow to just 1.5% in 2024, President Biden faces economic headwinds that could further erode his standing with voters.</p>
                        <p>Biden's Politik Points have already dropped from 712 to 681 this year amid high inflation and weak growth compared to 2021. Additional declines in GDP would likely drag his score down further.</p>
                        <p>Voters increasingly favor Republicans on prosperity and the economy. Without new spending to stimulate growth, Biden has limited tools to reverse this momentum.</p>
                        <p>Absent a significant upside surprise, the data indicates Biden's economic credentials will remain under pressure through the 2024 election. This could subtract critical points related to areas like competency, leadership and vision.</p>
                        <p>While the economy is not the sole factor in Biden's political health, it exerts an outsized influence. A Politik Point drop into the low 600s due to worsening perceptions on the economy would seriously jeopardize Biden's reelection prospects.</p>
                        <p>In short, if GDP meets muted expectations, Biden cannot count on the economy to buoy his score. He must make up ground through strong performances on other metrics like foreign policy and social issues. But overcoming economic discontent may be his biggest politic point challenge.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
