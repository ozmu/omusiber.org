<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OMUSiber | Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu</title>
    <meta name="description" content="Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu resmi web sitesidir.">
    <meta name="author" content="Muhammet Öztürk">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <!-- Plugins CSS files -->
    <link rel="stylesheet" href="{{asset('assets/css/assets.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/shortcodes.css')}}">


    @stack('styles')

    <link id="theme_css" rel="stylesheet" href="{{asset('assets/css/theme/light.css')}}">
    <link id="skin_css" rel="stylesheet" href="{{asset('assets/css/theme/skin/default.css')}}">
    @stack('poststyles')

    <link rel="stylesheet" href="{{asset('assets/css/docs.css')}}">
</head>
<body>
<!-- site preloader start -->
<div class="page-loader"></div>
<!-- site preloader end -->

<div class="pageWrapper">

<!-- Content start -->
    <div class="pageContent">
        <div class="col-md-8 col-md-offset-2">

            <div class="row">
                <!-- Logo start -->
                <div class="logo">
                    <a href="/"><img alt="" src="{{asset('assets/images/logo2.png')}}" /></a>
                </div>
                <!-- Logo end -->

                <ul class="docsnav">
                    <li><a href="/docs">Anasayfa</a></li>
                    <li><a href="#">Depo</a></li>
                    <li><a href="/#about-us">Hakkında</a></li>
                </ul>
            </div>

            @auth
            <div class="row">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if (auth()->user()->isAdmin())
                                <li>
                                    <a href="/users">
                                        Kullanıcıları Yönet
                                    </a>
                                </li>
                                <li>
                                    <a href="/docs/add-category">
                                        Kategori Ekle
                                    </a>
                                </li>
                            @endif
                            @if (auth()->user()->isEditor() || auth()->user()->isAdmin())
                                <li>
                                    <a href="/docs/add">
                                        İçerik Ekle
                                    </a>
                                </li>
                            @endif
                            @yield('tool-edit')
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Çıkış Yap
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
            @endauth



            @yield('content')

        </div>
    </div>
    <!-- Content end -->

    <!-- Footer start -->
    <footer id="footWrapper">
        <!-- footer bottom bar start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <!-- footer copyrights left cell -->
                    <div class="copyrights">© Copyrights <b class="main-color">OMUSIBER</b> 2017. All rights reserved.</div>
                </div>
            </div>
        </div>
        <!-- footer bottom bar end -->
    </footer>
    <!-- Footer end -->
</div>

<!-- Back to top Link -->
<a id="to-top" href="#"><span class="fa fa fa-angle-up"></span></a>

<!-- Load JS plugins -->
<script type="text/javascript" src="{{asset('assets/js/jquery-1.12.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/assets.js')}}"></script>
@stack('scripts')
<!-- general script file -->
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/docs.js')}}"></script>


</body>
</html>