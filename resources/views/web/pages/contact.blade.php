@extends('web.layout.master')
@section('content')
<main>
    <section class="sec-inner-banner" data-bg-image="web/images/cta-bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
                    <div class="form-main">
                        <div class="head">
                            <h6>Send Us A Message</h6>
                        </div>

                        <form action="{{route('contact-submit')}}" method="POST" >
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="input-main">
                                        <input type="text" class="form-control fm-ctl" placeholder="First Name"
                                            name="first_name" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="input-main">
                                        <input type="text" class="form-control fm-ctl" placeholder="Last Name" name="last_name" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="input-main">
                                        <input type="number" class="form-control fm-ctl" placeholder="Phone"
                                            name="phone" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="input-main">
                                        <input type="email" class="form-control fm-ctl" placeholder="Email"
                                            name="email" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="input-main">
                                        <textarea rows="4" class="form-control fm-ctl" placeholder="massage" name="massage" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <button type="submit" class="btn submit-btn">send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="info-box">
                        <ul>
                            <li><a href="void:;" class="lc-ico">{{ $address->value }}</a></li>
                            <li><a href="mailto:{{ $emailaddress->value }}" class="msg-ico">{{ $emailaddress->value }}</a></li>
                            <li><a href="tel:{{ $phonenumber->value }}" class="phn-ico">{{ $phonenumber->value }}</a></li>
                        </ul>
                        <iframe src="{{ $location->value }}" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
