@extends('layouts.docs')
@section('content')

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
                        <a href="">
                            #{{ $category->categoryName }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>


@endsection