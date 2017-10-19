@extends('layouts.docs')
@section('content')
    @foreach($users as $user)
        <li>{{$user->name}}</li>
    @endforeach
@endsection