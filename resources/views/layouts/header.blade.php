<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                <a href="{{ url('/') }}" class="horizontal-logo text-left">
                    <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">Dashbaord</span>
                </a>
            </div>

            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="javascript:void(0)" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>
            


            <div class="navbar-right ml-auto h-100">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="javascript:void(0)" class="nav-link mobilesearch" data-toggle="dropdown"
                            aria-expanded="false"><i class="icon-magnifier h4"></i>
                        </a>
                    </li>

                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="javascript:void(0)" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                @if (Auth::check())
                                    @php $user = Auth::user(); @endphp
                                    @if ($user->profile_pic != '')
                                        @php $path = $user->profile_pic; @endphp
                                    @else
                                        @php $path = "images/no-img.png"; @endphp
                                    @endif
                                @endif
                                <img src="{{ asset($path) }}" alt="{{ $user->name }} Profile"
                                    title="{{ Auth::user()->name }} Dashboard" class="d-flex img-fluid rounded-circle"
                                    width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <a href="{{ route('user_profile') }}" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile Info</a>

                            <a href="{{ route('update_password') }}"
                                class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Update Password</a>


                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
