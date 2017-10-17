@extends('layouts.docs')
@push('scripts')
<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.6/marked.min.js"></script>
<script src="{{asset('assets/js/markdown-preview.js')}}"></script>
@endpush
@section('content')
    <div class="add-title">
        İçerik Ekle
    </div>
    <form id="contact-form" class="ajax-form" name="contact" action="/docs/add" method="post" novalidate="novalidate">
        {{csrf_field()}}
        <div class="contact-msg">
            <div class="alert contact-success">
                <img alt="" src="{{asset('assets/images/ajax-loader.gif')}}" class="contact-loader" />
                <div class="success-msg">
                    <i class="fa fa-thumbs-o-up ico-block"></i>
                    <p>İlginiz için teşekkür ederiz.En kısa sürede dönüş yapacağız! :)</p>
                </div>
            </div>
        </div>
        <div class="row form-group over-hidden">
            <div class="col-md-6">
                <label for="tool-name">Tool Adı<small>*</small></label>
                <input type="text" id="tool-name" name="tool-name" placeholder="Örn. Metasploit Framework" class="form-control required" maxlength="30">
            </div>

            <div class="col-md-6">
                <label for="tool-category">Kategori <small>*</small></label>
                <select id="tool-category" name="tool-category" class="form-control required">
                    @foreach($categories as $category)
                        <option>{{ $category->categoryName }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group over-hidden">
            <div class="col-md-6">
                <label for="tool-tool">Tool Adı(boşluksuz ve küçük harf)<small>*</small></label>
                <input type="text" id="tool-tool" name="tool-tool" placeholder="Örn. metasploit-framework" class="form-control required">
            </div>
            <div class="col-md-6">
                <label for="contact-email">Email<small>*</small></label>
                <input type="email" id="contact-email" name="contact-email" placeholder="E-Postanızı Girin" class="form-control required">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="markdown-header">
                    Markdown
                </div>
                <div id="markdown" class="flex-item form-control" contenteditable>Buraya metin girin...</div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="markdown-header">
                    Görünüm
                </div>
                <div id="preview" class="flex-item markdown-body"></div>
            </div>
        </div>
        <div class="row">

        </div>

        <div class="form-group m-t-2">
            <button class="btn rect-angles btn-gry-border btn-lg" type="submit" id="contact-submit" name="contact-submit" value="submit"><i class="fa fa-crop"></i></span></span></span>Send Message</button>
        </div>

    </form>
@endsection