@extends('layouts.docs')

@section('content')
<activities :activities="{{ $activities }}"></activities>
@endsection