@extends('layouts.content')
@push('styles')
<link href="https://fonts.googleapis.com/css?family=Poiret+One|Source+Sans+Pro" rel="stylesheet">
@endpush
@push('poststyles')
<link rel="stylesheet" type="text/css" href="{{secure_asset('assets/css/index.css')}}">
@endpush
@push('scripts')
<script type="text/javascript" src="{{secure_asset('assets/js/onepage-nav.js')}}"></script>

@endpush
@section('content')
    <site-projects :projects="{{ $projects }}"></site-projects>
@endsection
