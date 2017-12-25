@extends('layouts.docs')

@section('content')
    <about-us header="{{$titles->about_us}}" content="{{ $about }}"></about-us>
@endsection