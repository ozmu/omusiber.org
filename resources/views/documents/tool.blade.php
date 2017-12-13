@extends('layouts.docs')
@section('content')

    @if(Auth::user() != NULL)
        @section('tool-edit')
            @if (Auth::user()->is_editor || Auth::user()->is_admin)
                <li>
                    <a href="/docs/tool/{{$toolInfo->tool}}/edit">
                        İçeriği Düzenle
                    </a>
                </li>
            @endif
        @endsection
    @endif

    <div class="row tool-name">
        @markdown
                # {{$toolInfo->toolName}}
        @endmarkdown
    </div>
    <div class="row tool-desc">
        @markdown
        {!! $toolInfo->description !!}
        @endmarkdown
    </div>


    <div id="categories">
        <div class="row">
            <ul class="categories">
                @foreach($categories as $category)
                    <li class="category">
                        <a href="/docs">
                            #{{ $category->categoryName }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div id="resources">
        <h1>Kaynakça</h1>
        <ul class="resources">
            @foreach($resources as $resource)
                <li class="resource">
                    <a href="{{$resource}}" target="_blank">
                        {{$resource}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div id="author">
        <div class="row">
            <ul class="author">
                <li class="category">
                    <i class="fa fa-user"></i>
                    <span>{{ $created_by }}</span>
                </li>
            </ul>
        </div>
    </div>


@endsection