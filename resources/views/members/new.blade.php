<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>OMUSiber | Üye Ol</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu resmi web sitesidir.">
    <meta name="author" content="Muhammet Öztürk">

    <!-- Devices Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="shortcut icon" href="{{secure_asset('assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{secure_asset('assets/subscribe/css/subscribe.css')}}">
    <link rel="stylesheet" href="{{secure_asset('assets/subscribe/css/icono.min.css')}}">
</head>
<body>
<div id="progress"></div>
<div class="center">
    <div id="register">
        <i id="progressButton" class="icono-caretRight next"></i>
        <div id="inputContainer">
            <input id="inputField" required autofocus />
            <label id="inputLabel"></label>
            <div id="inputProgress"></div>
        </div>
    </div>
</div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="{{secure_asset('assets/subscribe/js/subscribe.js')}}"></script>
</body>
</html>