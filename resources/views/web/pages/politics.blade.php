@extends('web.layout.master')
@section('content')

<main>
    <section class="sec-inner-banner" data-bg-image="{{asset('web/images/politic-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>Poltics</h4>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li>Poltics</li>
                        </ul>
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
                        <p>Politik Points is an independent, nonpartisan platform seeking to promote political transparency and accountability using objective data-driven analysis.</p>

                        <p>Our mission is to provide voters with fair, fact-based scoring and insights to complement their decision-making process. We aim to foster engaged citizenship by equipping voters with resources to make well-informed choices.</p>

                        <p>The Politik Points scoring system synthesizes a politician's record into an easy-to-understand score reflecting key categories like policy expertise, ethics, bipartisanship, and leadership skills. This quantitative assessment is designed to help voters quickly compare politicians' competence and performance.</p>

                        <p>Our team includes political scientists, data analysts, journalists and civic technologists devoted to impartiality and rigor. We welcome public scrutiny of our methodology and results to constantly strengthen our impartiality.</p>

                        <!-- <div class="card-grp">
                            <div class="row justify-content-around">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-5">
                                    <div class="card abt-card">
                                        <div class="icon-main">
                                            <img src="asset('web/images/icn1.png" class="img-fluid thumb" alt="">
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
                        <p>Our mission at Politik Points is to catalyze an enriching discovery process as you explore where candidates stand. We provide data-driven analysis to inform your opinions, not replace them.</p>
                        <p>Our Politik Point scores offer an objective snapshot of a politician's record. But many other factors matter when choosing who to support. Voters should conduct additional research on issues and stances important to them.</p>
                        <p>No single metric or ideology can perfectly determine a leader's fitness to govern. We aim to nurture thoughtful reflection so you can evaluate leaders from diverse perspectives.</p>
                        <p>Our goal is to spark an inquisitive pursuit of facts. We provide rigorous, impartial information so you can think critically and decide what matters most. Consider our scores a beginning, not an end. The journey of democracy is one we travel together.</p>
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
                                                        <li>The hypothetical Politik Point market caps calculated below aim to quantify the overall competence and performance of each branch of government and each party within them.</li>
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
                                                        <li>The total executive branch Politik Point market cap stands at 8212. This reflects the combined scores of the President, Vice President, and Cabinet secretaries. The President's score fluctuations likely have an outsized impact on the overall executive score.</li>
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
                                                        <li>The total Politik Point market cap for the legislative branch is 9102. This measures the aggregated scores for all Senators and Representatives. The breakdown by party is:</li>
                                                        <li>Senate Democrats: 2144</li>
                                                        <li>Senate Republicans: 1915 House Democrats: 2595</li>
                                                        <li>House Republicans: 2448</li>
                                                        <li>Comparing the hypothetical totals, the legislative branch currently has a higher market cap than the executive branch. The Democratic Party also leads Republicans in both chambers.</li>
                                                        <li>Tracking the market caps periodically provides a 30,000 foot view of perceived government competence. As leaders change, we can monitor resulting shifts in the quantitative data.</li>
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
</main>

@endsection