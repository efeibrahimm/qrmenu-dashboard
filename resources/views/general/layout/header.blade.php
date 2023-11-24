<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="{{ $settings->author ?? '' }}">
    <meta name="keywords" content="{{ $settings->keywords ?? '' }}">
    <meta name="description" content="{{ $settings->description ?? '' }}">
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('theme/assets/img/favicon.png') }}">
    <!-- Site Title -->
    <title>{{ $settings->site_title }}</title>
    <link rel="shortcut icon" href="{{ asset('images/' . $settings->favicon ?? '') }}" type="image/x-icon">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('theme/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/video.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">
</head>

<body class="ori-digital-studio">
    <div id="preloader"></div>
    <div class="up">
        <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
    </div>
    <div class="cursor"></div>
    <!-- Start of header section
 ============================================= -->
    <header id="ori-header" class="ori-header-section header-style-one">
        <div class="ori-header-content-area">
            <div class="ori-header-content d-flex align-items-center justify-content-between">
                <div class="brand-logo">
                    <a href="#">
                        <img src="{{ asset('images/' . $settings->image ?? '') }}" alt="Site Logosu" style="max-width: 120px">
                    </a>
                </div>
                <div class="ori-main-navigation-area">
                    <nav class="ori-main-navigation clearfix ul-li">
                        <ul id="main-nav" class="nav navbar-nav clearfix">
                            <li class="dropdown ori-megamenu">
                                <a href="/">ANASAYFA</a>
                            </li>
                            <!-- <li><a target="_blank" href="#"></a></li> -->
                            <li class="dropdown">
                                <a href="#">Kurumsal</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="/hakkimizda">Hakkımızda </a></li>
                                    {{-- <li><a  href="./ekibimiz.html">Ekibimiz</a></li> --}}
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/hizmetler">Hizmetlerimiz</a>
                                <ul class="dropdown-menu clearfix">
                                    {{-- @foreach ($services as $service)
                                        @if ($service->category_id == $item->id)
                                            <li>
                                                <a
                                                    href="/hizmetlerimiz/{{ $service->slug ?? '' }}">{{ $service->title ?? '' }}</a>
                                            </li>
                                        @endif
                                    @endforeach --}}
                                    @foreach ($services_categories as $item)
                                    <li class="menu-item-has-children">
                                        <a href="/hizmetler/{{ $item->id ?? '' }}/{{ $item->slug ?? '' }}">{{ $item->title ?? '' }}</a>
                                        {{-- <ul>
                                            @foreach ($services as $service)
                                                @if ($service->category_id == $item->id)
                                                    <li>
                                                        <a href="/hizmetlerimiz/{{$service->slug ?? ''}}">{{$service->title ?? ''}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul> --}}
                                    </li>
                                @endforeach
                                </ul>
                            </li>
                            <li>
                                <a class="" href="/blog">Blog</a>
                            </li>
                            <li class="">
                                <a href="/referanslarimiz">Portfolio</a>
                            </li>
                            <li class="">
                                <a href="/iletisim">İletişim</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="ori-header-sidebar-search d-flex align-items-center">

                    <div class="ori-sidenav-btn navSidebar-button">
                        <button><i class="fal fa-bars"></i></button>
                    </div>
                </div>
            </div>
            <div class="mobile_menu position-relative">
                <div class="mobile_menu_button open_mobile_menu">
                    <i class="fal fa-bars"></i>
                </div>
                <div class="mobile_menu_wrap">
                    <div class="mobile_menu_overlay open_mobile_menu"></div>
                    <div class="mobile_menu_content">
                        <div class="mobile_menu_close open_mobile_menu">
                            <i class="fal fa-times"></i>
                        </div>
                        <div class="m-brand-logo">
                            <a href="#"><img src="assets/img/logo.svg" alt=""></a>
                        </div>
                        <nav class="mobile-main-navigation  clearfix ul-li">
                            <ul id="m-main-nav" class="nav navbar-nav clearfix">
                                <li class="dropdown ori-megamenu">
                                    <a href="/">ANASAYFA</a>
                                </li>
                                <!-- <li><a target="_blank" href="#"></a></li> -->
                                <li class="dropdown">
                                    <a href="#">Kurumsal</a>
                                    <ul class="dropdown-menu clearfix">
                                        <li><a href="/hakkimizda">Hakkımızda </a></li>
                                        {{-- <li><a  href="./ekibimiz.html">Ekibimiz</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="/hizmetler">Hizmetlerimiz</a>
                                    <ul class="dropdown-menu clearfix">
                                        {{-- @foreach ($services as $service)
                                            @if ($service->category_id == $item->id)
                                                <li>
                                                    <a
                                                        href="/hizmetlerimiz/{{ $service->slug ?? '' }}">{{ $service->title ?? '' }}</a>
                                                </li>
                                            @endif
                                        @endforeach --}}
                                        @foreach ($services_categories as $item)
                                        <li class="menu-item-has-children">
                                            <a href="/hizmetler/{{ $item->id ?? '' }}/{{ $item->slug ?? '' }}">{{ $item->title ?? '' }}</a>
                                            {{-- <ul>
                                                @foreach ($services as $service)
                                                    @if ($service->category_id == $item->id)
                                                        <li>
                                                            <a href="/hizmetlerimiz/{{$service->slug ?? ''}}">{{$service->title ?? ''}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul> --}}
                                        </li>
                                    @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a class="" href="/blog">Blog</a>
                                </li>
                                <li class="">
                                    <a href="/portfolio">Portfolio</a>
                                </li>
                                <li class="">
                                    <a href="/iletisim">İletişim</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /Mobile-Menu -->
            </div>
        </div>
    </header><!-- /header -->

    <!-- Search PopUp -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="fal fa-times"></span></button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Sidebar sidebar Item -->
    <div class="xs-sidebar-group info-group">
        <div class="xs-overlay xs-bg-black">
            <div class="row loader-area">
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
                <div class="col-3 preloader-wrap">
                    <div class="loader-bg"></div>
                </div>
            </div>
        </div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">
                        X
                    </a>
                </div>
                <div class="sidebar-textwidget">

                    <div class="sidebar-info-contents headline pera-content">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="/"><img src="assets/img/logo.svg" alt=""></a>
                            </div>
                            <div class="content-box">
                                <h5>Hakkımızda</h5>
                                <p class="text">Hoş geldiniz! Softwareplas, dijital dünyada öne çıkan bir dijital
                                    ajans olarak bilinir ve müşterilerimize yaratıcı, stratejik ve sonuç odaklı çözümler
                                    sunma konusundaki kararlılığımızla tanınır. Sizin başarınız bizim önceliğimizdir ve
                                    bu amaçla ajansımızın misyonu, vizyonu ve değerleri, her projeye ve iş ortağımıza
                                    sunduğumuz hizmetlere yansır.</p>
                            </div>
                            <div class="content-box">
                                <h5>Sosyal Medya</h5>
                                <ul class="social-box">
                                    <li><a target="_blank" href="{{ $settings->facebook ?? '' }}"
                                            class="fab fa-facebook-f"></a></li>
                                    <li><a target="_blank" href="{{ $settings->twitter ?? '' }}"
                                            class="fab fa-twitter"></a></li>
                                    {{-- <li><a target="_blank" href="https://dribbble.com/" class="fab fa-dribbble"></a></li> --}}
                                    <li><a target="_blank" href="{{ $settings->linkedin ?? '' }}"
                                            class="fab fa-linkedin"></a></li>
                                    <li><a target="_blank" href="{{ $settings->instagram ?? '' }}"
                                            class="fab fa-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
