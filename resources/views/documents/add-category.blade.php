@extends('layouts.docs')
@section('content')
    <form id="tool-form" class="add-category-form" name="contact" action="/docs/add-category" method="POST" novalidate="novalidate">
        {{csrf_field()}}

        @if ($errors->any())
            <div class="add-error row">
                <div class=" alert alert-danger">
                    Lütfen formu eksiksiz doldurunuz!
                </div>
            </div>
        @endif
        <div class="row form-group">
            <div class="col-md-4">
                <label for="cat-name">Kategori<small>*</small></label>
                <input type="text" id="cat-name" name="cat-name" placeholder="Örn. Bilgi Toplama" class="form-control required" maxlength="30" required>
            </div>
            <div class="col-md-4">
                <label for="cat-cat">Kategori Adı(boşluksuz,küçük harf)<small>*</small></label>
                <input type="text" id="cat-cat" name="cat-cat" placeholder="Örn. information-gathering" class="form-control required" required>
            </div>
            <div class="col-md-4">
                <label for="cat-icon">Icon (font awesome icon)<small>*</small></label>
                <input type="text" id="cat-icon" name="cat-icon" placeholder="Örn. gear" class="form-control required" required>
            </div>
        </div>
        <div class="row form-group over-hidden" style="padding-left: 15px;font-weight: 700;">
            Veritabanındaki Kategoriler
        </div>
        <div class="row form-group over-hidden">
            <div class="col-md-12">
                <ul class="exist-cats">
                    @foreach($categories as $category)
                        <li>{{$category->categoryName}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="form-group m-t-2">
            <button class="btn rect-angles btn-gry-border btn-lg" type="submit" id="tool-submit" name="tool-submit" value="submit"><i class="fa fa-crop"></i></span></span></span>Gönder</button>
        </div>

    </form>
@endsection