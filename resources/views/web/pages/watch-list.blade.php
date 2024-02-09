@extends('web.layout.master')
@section('content')
    <main>
        <section class="sec-inner-banner" data-bg-image="{{ asset(getCMS('watchlist_banner', 'value')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h4>{{ getCMS('watchlist_banner_title','value') }}</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li>Watchlist</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-watch-list pt-5">
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
                            <div class="card wt-card bg-img" data-bg-image="{{ asset($item->image) }}">
                                <div class="row align-items-center justify-content-evenly">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 col-xxl-2">
                                        <div class="date">
                                            <h6>{{ date("d", strtotime($item->created_at)) }}</h6>
                                            <span>{{ date("M Y", strtotime($item->created_at)) }}</span>
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
    </main>
@endsection
