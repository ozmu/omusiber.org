@extends('layouts.site')
@push('styles')
  <link href="https://fonts.googleapis.com/css?family=Poiret+One|Source+Sans+Pro" rel="stylesheet">
  <!-- Slider Revolution CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/revolution/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/revolution/css/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/revolution/css/navigation.css')}}">
  <!-- Particles CSS-->
  <link rel='stylesheet' id='rs-particles-front-css' href='{{secure_asset('assets/css/particles.css')}}' type='text/css' media='all'/>
  <link rel='stylesheet' href='{{secure_asset('assets/css/bttn.min.css')}}' type='text/css' media='all'/>

@endpush
@push('poststyles')
	<link rel="stylesheet" type="text/css" href="{{secure_asset('assets//css/index.css')}}">
@endpush
@push('scripts')
  <!-- SLIDER REVOLUTION  -->
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
	  (Load Extensions only on Local File Systems !  +
	  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.j')}}s"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/source/revolution.extension.video.js')}}"></script>
  <!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
  <!-- Particles Js -->
  <script type='text/javascript' src="{{secure_asset('assets/js/particles.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/js/onepage-nav.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/js/index.js')}}"></script>

@endpush
@section('content')
	<home></home>
	<about header="{{ $titles->about_us }}" content="{{ $texts->about_us_body }}" :team="{{ $team }}"></about>
	<home-projects header="{{ $titles->projects }}"></home-projects>
	<home-activities header="{{ $titles->activities }}"></home-activities>
	<site-gallery header="{{ $titles->gallery }}" :images="{{ $gallery }}"></site-gallery>
	<home-subscribe header="{{ $titles->members }}" content="{!! $texts->subscribe_body !!}"></home-subscribe>
	<contact header="{{ $titles->contact }}"></contact>
	</div>



@endsection
