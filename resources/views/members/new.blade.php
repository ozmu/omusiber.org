<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OMUSiber | Üye Ol</title>
    <meta name="description" content="Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu resmi web sitesidir.">
    <meta name="author" content="Muhammet Öztürk">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{secure_asset('assets/images/favicon.ico')}}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="{{secure_asset('assets/subscribe/css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{secure_asset('assets/subscribe/css/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{secure_asset('assets/subscribe/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{secure_asset('assets/subscribe/css/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{secure_asset('assets/subscribe/css/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{secure_asset('assets/subscribe/css/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{secure_asset('assets/subscribe/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{secure_asset('assets/subscribe/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{secure_asset('assets/subscribe/css/login-4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
</head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="{{secure_asset('assets/images/logo.png')}}" alt="logo" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="index.html" method="POST">
        <h3 class="form-title">Üyemiz Olun</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Lütfen eksiksiz doldurun. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Adınız</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Adınız" name="name" required/> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email" required/> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Telefon</label>
            <div class="input-icon">
                <i class="fa fa-phone"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Phone" name="phone" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Telegram</label>
            <div class="input-icon">
                <i class="fa fa-telegram"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Telegram" name="telegram" /> </div>
        </div>
        <div class="form-actions">
            <label class="rememberme mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" value="1" /> Remember me
                <span></span>
            </label>
            <button type="submit" class="btn green pull-right"> Login </button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright"> 2017 &copy; OMUSiber | Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu </div>
<!-- END COPYRIGHT -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{secure_asset('assets/subscribe/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/css/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/js/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/js/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/js/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/css/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{secure_asset('assets/subscribe/js/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/js/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/css/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{secure_asset('assets/subscribe/js/backstretch/jquery.backstretch.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{secure_asset('assets/subscribe/js/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{secure_asset('assets/subscribe/js/login-4.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>