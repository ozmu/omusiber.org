@extends('layouts.docs')
@section('content')

    @if($isEditor)
        <div class="row add-toolp">
            <a class="add-tool" href="/docs/tool/{{$toolInfo->tool}}/edit">Düzenle</a>
        </div>
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
                    <a href="{{$resource}}">
                        {{$resource}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>


@endsection