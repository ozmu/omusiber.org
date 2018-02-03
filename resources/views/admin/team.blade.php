@extends('layouts.docs')

@section('content')
    <team :projects="{{ $projects }}"></team>
@endsection