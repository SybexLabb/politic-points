@extends('web.layout.master')
@section('content')
    <main>
        <section class="sec-home-banner"
            style="background: url({{ asset(getCMS('home_banner_image', 'value')) }});
    position: relative;
    overflow: hidden;
    margin: 0;
    padding: 0;
    height: 90vh;
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    }">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7">
                        <div class="desc">
                            <h6>{{ getCMS('home_banner_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_banner_heading', 'value') }}</h4>
                            <p>{!! str_replace("\r\n", '<p>', getCMS('home_banner_description', 'value')) !!}</p>
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
                            <img src="{{ asset(getCMS('home_section1_image', 'value')) }}" class="img-fluid thumb"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h6>{{ getCMS('home_section1_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section1_heading', 'value') }}</h4>
                            <p>{!! str_replace("\r\n", '<p>', getCMS('home_section1_description', 'value')) !!}</p>
                            <a href="{{ route('politics') }}" class="btn abt-btn">view more</a>
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
                            <h6>{{ getCMS('home_section2_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section2_heading', 'value') }}</h4>
                            <p>{!! str_replace("\r\n", '<p>', getCMS('home_section2_description', 'value')) !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h6>{{ getCMS('home_section3_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section3_heading', 'value') }}</h4>
                            <div class="faq-area">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="accordion" id="accordionExample">
                                            @foreach ($faqs as $key => $faq)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading">
                                                        <button class="accordion-button " type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $key }}"
                                                            aria-expanded="true"
                                                            aria-controls="collapse{{ $key }}">
                                                            {{ $faq->question }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse{{ $key }}"
                                                        class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}"
                                                        aria-labelledby="heading" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            {!! $faq->answer !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
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
                            <h6>{{ getCMS('home_section4_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section4_heading', 'value') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row gx-xxl-2 gx-xl-2 gx-lg-2">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card sc-crd">
                            <div class="img-main">
                                <img src="{{ asset('web/images/politic-detail.webp') }}" class="img-fluid thumb"
                                    alt="">
                            </div>
                            <div class="desc">
                                <a href="{{ route('presidential-score-detail') }}">Joe Biden</a>
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
                            <h4>{{ getCMS('home_section5_title', 'value') }}</h4>
                            <p>{{ getCMS('home_section5_heading', 'value') }}</p>
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

        {{-- <section class="sec-senators">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="head">
                            <h6>{{ getCMS('home_section6_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section6_heading', 'value') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($senators as $value)
                        <div class="col-12 col-sm-6 col-md-5 col-lg-3 col-xl-3 col-xxl-3">
                            <div class="card sn-card">
                                <div class="img-main">
                                    <img src="{{ asset($value->image) }}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <a href="{{ route('political-detail', $value->id) }}"
                                        class="link">{{ $value->name }}</a>
                                    <p>{{ $value->short_description }} </p>
                                    <a href="{{ route('political-detail', $value->id) }}" class="btn view-btn">Read Full
                                        Biography</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 col-sm-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <a href="{{ route('political-point') }}" class="btn view-btn">view more</a>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="sec-table-data">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="head">
                            <h4>{{-- Track Voting Data --}} {{ getCMS('home_section6_heading', 'value') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"></th>
                                        <th scope="col">Name</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Party</th>
                                        <th scope="col">Class</th>
                                        <th scope="col">Office Room</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Percentage Change</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($senators as $key => $value)
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>
                                                @if (isset($value->image))
                                                    <img src="{{ asset($value->image) }}" alt="Picture1">
                                            </td>
                                        @else
                                            <img src="{{ asset('web/images/no-image.jpg') }}" alt="Picture1"></td>
                                    @endif
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->state }}</td>
                                    <td>{{ $value->party }}</td>
                                    <td>{{ $value->class }}</td>
                                    <td>{{ $value->office_room }}</td>
                                    <td>{{ $value->contact }}</td>
                                    <td>
                                        <div id="chart{{ ++$key }}" class="chart"></div>
                                    </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-cta">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h4>{{ getCMS('home_section7_title', 'value') }}</h4>
                            <p>{{ getCMS('home_section7_heading', 'value') }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="desc">
                            <a href="{{ route('contact') }}" class="btn cnt-btn">contact us</a>
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
                            <h6>{{ getCMS('home_section8_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section8_heading', 'value') }}</h4>
                        </div>
                    </div>
                    @foreach ($watch_list as $item)
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="card wt-card bg-img" data-bg-image="{{ asset($item->image) }}">
                                <div class="row align-items-center justify-content-evenly">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                                        <div class="date">
                                            <h6>{{ date('d', strtotime($item->created_at)) }}</h6>
                                            <span>{{ date('M Y', strtotime($item->created_at)) }}</span>
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
                </div>
            </div>
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
                    @foreach ($presidential_score as $value)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card sc-card">
                                <div class="img-main">
                                    <img src="{{ asset($value->image) }}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <h4>{{ $value->name }}</h4>
                                    <ul>
                                        <li class="lc-icon">Score: {{ $value->score }}</li>
                                        <li class="cl-icon">{{ date('M d,Y', strtotime($value->date)) }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="sec-news">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="head">
                            <h6>{{ getCMS('home_section9_title', 'value') }}</h6>
                            <h4>{{ getCMS('home_section9_heading', 'value') }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row gx-xxl-2 gx-xl-2 gx-lg-2 justify-content-center">
                    @foreach ($news as $new)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card ns-crd">
                                <div class="img-main">
                                    <img src="{{ asset($new->image) }}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <a href="{{ route('news') }}">{{ $new->title }}</a>
                                    <h6>United States</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <a href="{{ route('news') }}" class="btn view-btn">view more</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            for (var i = 0; i < 100; i++) {
                fetch(getJsFiles())
                    .then((response) => {
                        if (!response.ok) {
                            throw new Error("Network response was not ok");
                        }
                        return response.json(); // Parse the JSON from the response
                    })
                    .then((data) => {
                        // Work with the fetched JSON data
                        console.log(data); // This will log the content of your JSON file

                        // Perform operations with the data (e.g., use it in your chart)
                        // Example: Assuming your chart creation logic
                        const transformedData = data.map((d) => ({
                            x: new Date(d.date),
                            y: [d.open, d.open, d.close, d.close],
                        }));

                        // Your chart creation with the transformed data
                        var options = {
                            series: [{
                                name: "Close Price",
                                data: transformedData,
                            }, ],
                            chart: {
                                stacked: false,
                                height: 150,
                                toolbar: {
                                    show: true,
                                },

                                zoom: {
                                    type: "x",

                                    enabled: true,

                                    autoScaleYaxis: true,
                                },
                            },

                            colors: ["#e01515", "#e01515"],

                            dataLabels: {
                                enabled: false,
                            },

                            grid: {
                                yaxis: {
                                    // set to false to remove horizontal lines through graph

                                    lines: {
                                        show: false,
                                    },
                                },
                            },

                            legend: {
                                show: true,

                                position: "top",

                                horizontalAlign: "left",

                                labels: {},
                            },

                            stroke: {
                                width: 3,

                                curve: "smooth",

                                lineCap: "butt",

                                dashArray: [0, 3],
                            },

                            theme: {},

                            tooltip: {
                                x: {
                                    formatter: function(val) {
                                        console.log(val);

                                        return dayjs(val).format("MMM DD, YYYY");
                                    },
                                },

                                shared: false,

                                marker: false,
                            },

                            xaxis: {
                                type: "datetime",

                                tooltip: {
                                    enabled: false,
                                },

                                axisTicks: {
                                    show: true,
                                },
                                tooltip: {
                                    enabled: true,
                                    formatter: function(val) {
                                        return dayjs(val).format("MMM YYYY");
                                    },
                                },
                                labels: {
                                    show: false,

                                    showDuplicates: false,

                                    formatter: function(val) {
                                        return dayjs(val).format("MMM YYYY");
                                    },
                                },
                            },

                            yaxis: [{
                                seriesName: "Close Price",

                                axisBorder: {
                                    show: false,
                                },

                                axisTicks: {
                                    show: false,
                                },

                                labels: {
                                    show: false,
                                    style: {},
                                },

                                opposite: false,
                            }, ],
                        };

                        var chart = new ApexCharts(document.querySelector("#chart2"), options);
                        chart.render();
                    })
                    .catch((error) => {
                        console.error("There was a problem fetching the data:", error);
                    });
            }
        });
    </script>
@endsection
