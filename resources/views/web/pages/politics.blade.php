@extends('web.layout.master')
@section('content')
    <main>
        <section class="sec-inner-banner" data-bg-image="{{ asset(getCMS('poltics_banner_image', 'value')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h4>Politics</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li>Politics</li>
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
                            <img src="{{ asset(getCMS('home_section1_image', 'value')) }}" class="img-fluid thumb"
                                alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h6>{{ getCMS('poltics_section1_title', 'value') }}</h6>
                            <h4>{{ getCMS('poltics_section1_heading', 'value') }}</h4>
                            <p>{!! str_replace("\r\n", '<p>', getCMS('poltics_section1_description', 'value')) !!}</p>
                            {{-- <a href="{{ route('politics') }}" class="btn abt-btn">view more</a> --}}
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
                            <h6>{{ getCMS('poltics_section2_title', 'value') }}</h6>
                            <h4>{{ getCMS('poltics_section2_heading', 'value') }}</h4>
                            <p>{!! str_replace("\r\n", '<p>', getCMS('poltics_section2_description', 'value')) !!}</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h6>{{ getCMS('poltics_section3_title', 'value') }}</h6>
                            <h4>{{ getCMS('poltics_section3_heading', 'value') }}</h4>
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
    </main>
@endsection
