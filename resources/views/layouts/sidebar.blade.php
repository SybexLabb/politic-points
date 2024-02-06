<div class="sidebar">
    <div class="site-width">
        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
            <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>
                <ul>
                    <li class="{{ Request::path() == 'dashboard' ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i
                                class="icon-rocket"></i> Dashboard</a></li>
                    @if ($sidebar_data)
                        @foreach ($sidebar_data as $side)
                            @if ($side != 'roles')
                                <li class="{{ Request::path() == 'attribute/' . $side ? 'active' : '' }}"><a
                                        href="{{ route('listing', $side) }}" data-actor="{{ $side }}"><i
                                            class="{{ Helper::get_sidebar_icon($side) }}"></i>
                                        {{ ucwords(str_replace('-', ' ', $side)) }}</a></li>
                            @endif
                        @endforeach
                    @endif

                </ul>
            </li>
            @if (Auth::user()->role_id == 1)
                <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i> Web Apps</a>
                    <ul>
                        <li
                            class="dropdown {{ Request::path() == 'web-config' || Request::path() == 'logo-favicon' ? 'active' : '' }}">
                            <a href="#"><i class="icon-options"></i>Website Settings</a>
                            <ul class="sub-menu">
                                <li class="{{ Request::path() == 'web-config' ? 'active' : '' }}"><a
                                        href="{{ route('web_config') }}"><i class="icon-energy"></i> Config</a></li>
                                <li class="{{ Request::path() == 'logo-favicon' ? 'active' : '' }}"><a
                                        href="{{ route('logo') }}"><i class="icon-energy"></i> Logo-Favicon</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i> Web CMS</a>
                    <ul>    
                        <li class="{{ Request::path() == 'banners-cms' ? 'active' : '' }}"><a
                                href="{{ route('banners.cms') }}"><i class="icon-energy"></i> Banners CMS</a></li>
                        <li class="{{ Request::path() == 'home-cms' ? 'active' : '' }}"><a
                                href="{{ route('home.cms') }}"><i class="icon-energy"></i> Homepage CMS</a></li>
                        <li class="{{ Request::path() == 'politics-cms' ? 'active' : '' }}"><a
                                href="{{ route('politics.cms') }}"><i class="icon-energy"></i> Politics CMS</a></li>
                        <li class="{{ Request::path() == 'presedential-cms' ? 'active' : '' }}"><a
                                href="{{ route('presedential.cms') }}"><i class="icon-energy"></i> Presedential CMS</a>
                        </li>
                    </ul>
                </li>
        </ul>
        @endif
        </ul>
    </div>
</div>
