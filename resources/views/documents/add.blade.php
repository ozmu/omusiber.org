@extends('layouts.docs')
@push('scripts')
<script src="{{asset('assets/js/markdown-preview.js')}}"></script>
<script src="{{asset('assets/js/to-markdown.js')}}"></script>
@endpush
@push('styles')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-markdown.css')}}">
<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
@endpush
@section('content')
    <div class="add-title">
        İçerik Ekle
    </div>

    <form id="tool-form" name="contact" action="/docs/add" method="POST" novalidate="novalidate">
        {{csrf_field()}}

        @if ($errors->any())
            <div class="add-error row">
                <div class=" alert alert-danger">
                    Lütfen formu eksiksiz doldurunuz!
                </div>
            </div>
        @endif
        <div class="row form-group over-hidden">
            <div class="col-md-6">
                <label for="tool-name">Tool Adı<small>*</small></label>
                <input type="text" id="tool-name" name="tool-name" placeholder="Örn. Metasploit Framework" class="form-control required" maxlength="30" required>
            </div>
            <div class="col-md-6">
                <label for="tool-tool">Tool Adı(boşluksuz ve küçük harf)<small>*</small></label>
                <input type="text" id="tool-tool" name="tool-tool" placeholder="Örn. metasploit-framework" class="form-control required" required>
            </div>
        </div>
        <div class="row form-group over-hidden">
            <div class="col-md-12">
                <label for="tool-category">Kategori(ler) <small>*</small></label>
                <div class="form-box floated-controls checkbox-table">
                    @foreach($categories as $category)
                        <div class="f-left m-r-1">
                            <input type="checkbox" name="category[]" value="{{$category->category}}" class="labelauty" data-labelauty="{{ $category->categoryName }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="markdown-header">
                    İçerik
                </div>
                <div class="form-group over-hidden">
                    <textarea name="tool-content" data-height="400" data-provide="markdown" class="form-control required"></textarea>
                </div>
            </div>
        </div>
        <div class="row resources">
            <div class="col-md-12">
                <label for="tool-resources">Kaynaklar<small>*</small> (Birden fazlaysa araya virgül koyunuz)</label>
                <input type="text" id="tool-resources" name="tool-resources" placeholder="Kaynak olarak gösterebileceğiniz adres(ler)" class="form-control required" required>
            </div>
        </div>

        <div class="form-group m-t-2">
            <button class="btn rect-angles btn-gry-border btn-lg" type="submit" id="tool-submit" name="tool-submit" value="submit"><i class="fa fa-crop"></i></span></span></span>Gönder</button>
        </div>

    </form>
@endsection