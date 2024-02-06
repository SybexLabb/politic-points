<!--footer start-->
<footer data-aos="fade-in" data-aos-easing="ease-in-sine" data-aos-delay="10s" data-aos-offset="40" data-aos-duration="900" class="aos-init aos-animate">
    <div class="footer-main">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="logo-footer">
                        <div class="logo-f">
                            <a href="void:;" class="footer-logo-text">
                                <h6>Politics Point</h6>
                                <!-- <img src="images/logo.png" class="img-fluid footer-logo" alt=""> -->
                            </a>
                        </div>
                        <div class="logo-para">
                            <p>Nam sit amet faucibus nunc. Fusce tristique commodo purus.</p>
                        </div>
                        <!-- <div class="social-icons">
                            <ul class="sicon-ul">
                                <li class="sicon-li"><a href="javascript:" class="social-a"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="sicon-li"><a href="javascript:" class="social-a"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li class="sicon-li"><a href="javascript:" class="social-a"><i class="fa-brands fa-youtube"></i></a>
                                </li>
                                <li class="sicon-li"><a href="javascript:" class="social-a"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 px-xxl-5">
                    <div class="categ-main">
                        <h6 class="categ-h">Quick Links</h6>
                        <ul class="categ-ul">
                            <li class="categ-li"><a href="{{route('index')}}" class="categ-a hvr-underline-from-left">Home</a>
                            </li>
                            <li class="categ-li"><a href="{{route('politics')}}" class="categ-a hvr-underline-from-left">Politics</a>
                            </li>
                            <li class="categ-li"><a href="{{route('news')}}" class="categ-a hvr-underline-from-left">News</a>
                            </li>
                            <li class="categ-li"><a href="{{route('watch-list')}}" class="categ-a hvr-underline-from-left">Watchlist</a></li>
                            <li class="categ-li"><a href="{{route('political-point')}}" class="categ-a hvr-underline-from-left">Politic
                                    Points</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="contact-main">
                        <h6 class="contact-h">Contact Information</h6>
                        <ul class="contact-ul">
                            <li class="contact-li"><a href="javascript:;" class="contact-a lct-icon">{{ $address->value }}</a></li>
                            <li class="contact-li"><a href="mailto:{{ $emailaddress->value }}" class="contact-a mail-icon">{{ $emailaddress->value }}</a></li>
                            <li class="contact-li"><a href="tel:{{ $phonenumber->value }}" class="contact-a phn-icon">{{ $phonenumber->value }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-btm-main">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="footer-btm">
                        <p class="footer-btm-para">Copyright 2023 © Politics Point | Powered by <a href="void:;" class="ftr-btm-a">Elite Website Hub</a></p>
                    </div>
                </div>

                <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 col-xxl-3">
                    <ul class="btm-ul">
                        <li class="btm-li"><a href="void:;" class="btm-a"><img src="images/payments.png"
                                    class="img-fluid"></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</footer>
<!--footer close-->
