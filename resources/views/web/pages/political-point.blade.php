@extends('web.layout.master')
@section('content')
    <main>
        <section class="sec-inner-banner" data-bg-image="{{ asset('web/images/news-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h4>Poltics Points</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li>Poltics Point</li>
                            </ul>
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
                                    <img src="{{ asset($value->image) }}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <a href="{{ route('political-detail', $value->id) }}"
                                        class="link">{{ $value->name }}</a>
                                    <p>{{ $value->short_description }}</p>
                                    <a href="{{ route('political-detail', $value->id) }}" class="btn view-btn">Read Full
                                        Biography</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="sec-table-data">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="head">
                            <h4>Track Voting Data</h4>
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
                                        <th scope="col">Position</th>
                                        <th scope="col">Party</th>
                                        <th scope="col">State</th>
                                        <th scope="col">Politik Point Score</th>
                                        <th scope="col">Percentage Change</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{ asset('web/images/tv1.webp') }}" alt="Picture1"></td>
                                        <td>Bernie Sanders</td>
                                        <td>Senator</td>
                                        <td>Independent</td>
                                        <td>Vermont</td>
                                        <td>850</td>
                                        <td>
                                            <div id="chart" class="chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="{{ asset('web/images/tv2.webp') }}" alt="Picture1"></td>
                                        <td>Elizabeth Warren</td>
                                        <td>Senator</td>
                                        <td>Democratic</td>
                                        <td>Massachusetts</td>
                                        <td>830</td>
                                        <td>
                                            <div id="chart2" class="chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="{{ asset('web/images/tv3.jpg') }}" alt="Picture1"></td>
                                        <td>Alexandria Ocasio-Cortez</td>
                                        <td>Senator</td>
                                        <td>Democratic</td>
                                        <td>New York</td>
                                        <td>820</td>
                                        <td>
                                            <div id="chart3" class="chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="{{ asset('web/images/tv4.jpg') }}" alt="Picture1"></td>
                                        <td>Rand Paul</td>
                                        <td>Senator</td>
                                        <td>Republican</td>
                                        <td>Kentucky</td>
                                        <td>780</td>
                                        <td>
                                            <div id="chart4" class="chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="{{ asset('web/images/tv5.webp') }}" alt="Picture1"></td>
                                        <td>Ted Cruz</td>
                                        <td>Senator</td>
                                        <td>Republican</td>
                                        <td>Texas</td>
                                        <td>750</td>
                                        <td>
                                            <div id="chart5" class="chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="{{ asset('web/images/tv6.webp') }}" alt="Picture1"></td>
                                        <td>Joe Biden</td>
                                        <td>President</td>
                                        <td>Democratic</td>
                                        <td>-</td>
                                        <td>900</td>
                                        <td>
                                            <div id="chart6" class="chart"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><img src="{{ asset('web/images/tv7.webp') }}" alt="Picture1"></td>
                                        <td>Kamala Harris</td>
                                        <td>Vice President</td>
                                        <td>Democratic</td>
                                        <td>-</td>
                                        <td>880</td>
                                        <td>
                                            <div id="chart7" class="chart"></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
