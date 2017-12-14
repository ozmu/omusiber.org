@extends('layouts.docs')
@push('scripts')
<script type="text/javascript" src="{{asset('assets/js/members.js')}}"></script>
@endpush
@section('content')
    <div class="add-title">
        Üye Ekle
    </div>

    <form action="/members/add" id="add-member" method="POST" novalidate="novalidate">
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="add-error row">
                <div class=" alert alert-danger">
                    Lütfen formu eksiksiz doldurunuz!
                </div>
            </div>
        @endif
        <div class="row form-group over-hidden">
            <div class="col-md-6">
                <label for="member-name">Üye Adı<small>*</small></label>
                <input type="text" id="member-name" name="member-name" placeholder="Örn. Muhammet Öztürk" class="form-control required" maxlength="30" required>
            </div>
            <div class="col-md-6">
                <label for="member-email">Mail Adresi<small>*</small></label>
                <input type="email" id="member-email" name="member-email" class="form-control required" required>
            </div>
        </div>
        <div class="row form-group over-hidden">
            <div class="col-md-6">
                <label for="member-name">Telefon<small>*</small></label>
                <input type="text" id="member-phone" name="member-phone" class="form-control required" onkeypress="return numberPressed(event);" required>
            </div>
            <div class="col-md-6">
                <select name="member-role" id="member-role">
                    <option value="">1</option>
                    <option value="">1</option>
                    <option value="">1</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group m-t-2">
                <button class="btn rect-angles btn-gry-border btn-lg" type="submit" id="member-submit" name="member-submit" value="submit">
                    <i class="fa fa-crop"></i></span></span></span>Kaydet</button>
            </div>
        </div>
    </form>
@endsection