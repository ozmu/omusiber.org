@extends('layouts.docs')
@section('content')
    @foreach($toolName as $tool)
        Kategori = {{ $tool->category }} <br>
        Adı = {{ $tool->tool }} <br>
        Id = {{ $tool->id }} <br>
    @endforeach

    <div class="row">
        <div class="tool-name">
            <p>{{$toolName[0]->tool}}</p>
        </div>
    </div>

    <div class="row">
        <div class="tool-desc">
            {{$toolName[0]->description}}
        </div>
    </div>


@endsection