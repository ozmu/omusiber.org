<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OMUSiber | Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu resmi web sitesidir.">
    <meta name="author" content="Muhammet Öztürk">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{secure_asset('assets/images/favicon.ico')}}">

    <link href='https://fonts.googleapis.com/css?family=Oswald:400,100,300,500,700%7CLato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Plugins CSS files -->
    <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
    <link rel="stylesheet" href="{{secure_asset('assets/css/assets.css')}}">
    <link rel="stylesheet" href="{{secure_asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{secure_asset('assets/css/shortcodes.css')}}">

    @stack('styles')

    <link id="theme_css" rel="stylesheet" href="{{secure_asset('assets/css/theme/light.css')}}">
    <link id="skin_css" rel="stylesheet" href="{{secure_asset('assets/css/theme/skin/default.css')}}">
    @stack('poststyles')
</head>
<body>
<!-- site preloader start -->
<div class="page-loader"></div>
<!-- site preloader end -->

<div class="pageWrapper">
<!-- Content start -->
    <div class="pageContent">
        <div id="home" class="content">
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
<script type="text/javascript" src="{{secure_asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('assets/js/jquery-1.12.0.min.js')}}"></script>
<script type="text/javascript" src="{{secure_asset('assets/js/assets.js')}}"></script>
@stack('scripts')
<!-- general script file -->
<script type="text/javascript" src="{{secure_asset('assets/js/script.js')}}"></script>


</body>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111259450-1"></script>
<script>
    window.csrf_token = {{ csrf_token() }};
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-111259450-1');
</script>

</html>