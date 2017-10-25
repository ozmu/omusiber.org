@extends('layouts.docs')

@section('content')
    <div id="acc" class="accordion toggle bottom-border">
        @foreach($datas as $data)
            <div class="panel">
                <h5 class="acc-head">
                    <a href="#{{$data->id}}" data-toggle="collapse" data-parent="#acc" class="collapsed">
                        <i class="fa fa-{{$data->icon}} main-color"></i>{{$data->categoryName}}</a>
                </h5>
                <div class="acc-body collapse" id="{{$data->id}}">
                    <div class="acc-content">
                        <ul class="tools">
                            @foreach($data->tools as $tool)
                                <li><a href="/docs/tool/{{$tool->tool}}">{{$tool->toolName}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="clearfix"></div>

@endsection