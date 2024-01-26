@extends('web.layout.master')
@section('content')
<main>
    <section class="sec-inner-banner" data-bg-image="web/images/watchlist-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                    <div class="desc">
                        <h4>Become A Volunteer</h4>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
                            <li>Become A Volunteer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-volunteer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="head">
                        <h6>BECOME A VOLUNTEER</h6>
                        <h4>Apply & Join Us Today!</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut velit quis erat finibus faucibus. Proin cursus tortor consectetur elit posuere, molestie elementum nisi facilisis.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="form-main">
                        <form action="{{route('volunteer-submit')}}" method="POST" >
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
                                        <input type="text" class="form-control fm-ctl" placeholder="Last Name" name="last_name" required="">
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
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="input-main">
                                        <input type="text" class="form-control fm-ctl" placeholder="Age"
                                            name="age" required="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="input-main">
                                        <input type="education" class="form-control fm-ctl" placeholder="Education" name="education" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <div class="input-main">
                                        <textarea rows="4" class="form-control fm-ctl" placeholder="message" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <button type="submit" class="btn submit-btn">send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>



@endsection
