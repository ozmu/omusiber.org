@extends('layouts.docs')
@section('content')

    <div class="row">
        <div class="breadcrumbs style2">
            <a href="#" class="main-bg">Home</a><a href="#">{{$toolName[0]->category}}</a><span>{{$toolName[0]->tool}}</span>
        </div>
    </div>

    @markdown
    ```bash
    require 'redcarpet'
    markdown = Redcarpet.new("Hello World!")
    puts markdown.to_html
    ```
    @endmarkdown

    <div class="row tool-name">
        @markdown
            # {{$toolName[0]->tool}}
        @endmarkdown
    </div>
    <div class="row tool-desc">
        @markdown
        {{$toolName[0]->description}}
        @endmarkdown
    </div>



@endsection