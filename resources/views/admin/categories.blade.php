@extends('layouts.docs')

@section('content')
<categories :categories="{{ $categories }}"></categories>
@endsection