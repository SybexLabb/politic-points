    <header>
        <div class="header-mid">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index">
                        <img src="{{ $logo }}" class="logo" alt="">
                    </a>
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a class="nav-link anim-active hvr-underline-from-left" href="{{route('index')}}">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-left" href="{{route('politics')}}">Politics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-left" href="{{route('news')}}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-left" href="{{route('watch-list')}}">Watchlist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link hvr-underline-from-left" href="{{route('political-point')}}">Politics Point</a>
                            </li>
                            <!-- <li class="nav-item dropdown-sm">
                                <a class="nav-link dropdown-toggle-arrow hvr-underline-from-left"
                                    data-bs-toggle="collapse" href="#drp-one" role="button" aria-expanded="false"
                                    aria-controls="drp-one">Inspiration</a>
                                <div class="dropdown-menu-ct-sm collapse multi-collapse" id="drp-one">
                                    <ul class="sm-menu-ul">
                                        <li class="sub-dropdown">
                                            <a class="sub-toggle" data-bs-toggle="collapse" href="#in-1" role="button"
                                                aria-expanded="false" aria-controls="in-1">
                                                Equine Facilities
                                            </a>
                                            <div class="sub-menu-sm collapse multi-collapse" id="in-1">
                                                <ul class="sub-sm-ul">
                                                    <li>
                                                        <a href="void:;">
                                                            Vet Clinics
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="horse-barn.php">
                                                            Horse Barns
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="void:;">
                                                            Dairy Barns
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="void:;">
                                                Food Processing Facilities
                                            </a>
                                        </li>
                                        <li>
                                            <a href="void:;">
                                                Custom Projects
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->
                            <li class="nav-item dropdown-sm">
                                <a class="nav-link dropdown-toggle-arrow hvr-underline-from-left"
                                    data-bs-toggle="collapse" href="#drp-two" role="button" aria-expanded="false"
                                    aria-controls="drp-two">More</a>
                                <div class="dropdown-menu-ct-sm collapse multi-collapse" id="drp-two">
                                    <ul class="sm-menu-ul">
                                        <li>
                                            <a href="{{route('contact')}}">
                                                Contact us
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                        <ul class="side-ul">
                            <li class="sd-li">
                                <a class="cart-anchor basket-icon" href="{{route('volunteer')}}">
                                    Become a Volunteer
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
