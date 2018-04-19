<!-- HEADER -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header_nav d-sm-flex align-items-sm-center justify-content-sm-between">
                    <div class="header_nav_icon">
                        <!-- NAV -->
                        <a href="javascript:void(0);" id="nav_open" class="nav_open">
                            <img src="https://static.wixstatic.com/media/bf03ed_cca79d55df80482bb10d2bf5f66a25f0~mv2_d_5100_3300_s_4_2.png/v1/fill/w_60,h_39,al_c,usm_0.66_1.00_0.01/bf03ed_cca79d55df80482bb10d2bf5f66a25f0~mv2_d_5100_3300_s_4_2.png" style="width: 60px; height: 39px; object-fit: cover;">
                        </a>
                        <div id="hidden_menu_overlay"></div>
                        <div class="hidden_menu">
                            <a href="javascript:void(0);" id="nav_close" class="nav_close">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="25.974998474121094 25.975000381469727 148.05001831054688 148.0500030517578" role="img" preserveAspectRatio="xMidYMid meet" style="stroke-width: 0px;">
                                    <g>
                                        <path d="M172.9 167.6L105.3 100l67.6-67.6c1.5-1.5 1.5-3.8 0-5.3s-3.8-1.5-5.3 0L100 94.7 32.4 27.1c-1.5-1.5-3.8-1.5-5.3 0s-1.5 3.8 0 5.3L94.7 100l-67.6 67.6c-1.5 1.5-1.5 3.8 0 5.3s3.8 1.5 5.3 0l67.6-67.6 67.6 67.6c1.5 1.5 3.8 1.5 5.3 0s1.5-3.8 0-5.3z"></path>
                                    </g>
                                </svg>
                            </a>
                            <ul>
                            <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}">{{ __('header.home') }}</a></li>  
                                <li><a class="text-uppercase" href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), '/') }}">{{ __('header.shop') }}</a></li>
                                <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}/original-beans">{{ __('header.original_beands') }}</a></li>  
                                <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}/csr">{{ __('header.csr') }}</a></li>
                                <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}/events">{{ __('header.events') }}</a></li>
                                <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}/kurser">{{ __('header.courses') }}</a></li>
                                <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}/bryllupskagen">{{ __('header.wedding_cake') }}</a></li>
                                <li><a class="text-uppercase" href="{{ env('APP_URL_ORIGIN') }}/om-os">{{ __('header.about_us') }}</a></li>
                                <li><a class="text-uppercase" href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'signup') }}">{{ __('header.b2b') }}</a></li>
                            </ul>
                        </div>
                        <!-- END NAV -->
                    </div>
                    <div class="header_logo">
                        <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), '/') }}">
                            <img src="/img/pic/logo.png" alt="img" />
                        </a>
                    </div>
                    <div class="header_social">
                        <!-- <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'search') }}"> -->
                        <div class="header_social_lang">
                            <a href="{{ LaravelLocalization::getLocalizedURL('dk') }}" class="header_social_lang_box">
                                <img src="/img/pic/norway.png" alt="">
                                <span>DA</span>
                            </a>
                            <a href="{{ url('en') }}" class="header_social_lang_box">
                                <img src="/img/pic/usa.png" alt="usa" />
                                <span>EN</span>
                            </a>
                        </div>
                        <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'search') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0.39999961853027344 0 199.1125946044922 199.90000915527344" role="img" preserveAspectRatio="xMidYMid meet" style="stroke-width: 0px; width: 21px; height: 21px; fill: #734A2B;">
                                <g>
                                    <path d="M195.4 175.1l-56.1-56.2c19.9-29.6 16.8-70.3-9.3-96.5C115.7 7.9 96.7 0 76.4 0 56.1 0 37 7.9 22.6 22.3-7 52.1-7 100.4 22.6 130.1c14.3 14.4 33.4 22.3 53.7 22.3 15.3 0 29.9-4.5 42.3-12.9l56 56.2c2.7 2.7 6.2 4.2 10 4.2s7.3-1.5 10-4.2l.7-.7c5.6-5.4 5.6-14.4.1-19.9zm-72.1-50.7c-12.6 12.4-29.2 19.2-46.9 19.2-17.9 0-34.8-7-47.4-19.7-26.2-26.3-26.2-69 0-95.3C41.6 15.9 58.4 8.9 76.4 8.9c17.9 0 34.8 7 47.4 19.7 26 26.1 26.1 68.4.5 94.8l-1 1zm65.8 64.5l-.7.7c-1 1-2.3 1.6-3.8 1.6-1.4 0-2.7-.6-3.7-1.6l-55.1-55.3 3.7-3.7.5-.5c.2-.2.3-.3.4-.5l3.6-3.6 55.1 55.2c2.1 2.2 2.1 5.6 0 7.7z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="{{ LaravelLocalization::getLocalizedURL(LaravelLocalization::getCurrentLocale(), 'cart') }}"><img src="/img/pic/cart.png" alt="cart"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- END HEADER -->