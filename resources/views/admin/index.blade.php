@extends('layouts.docs')

@section('content')
    <div id="admin">
        <ul class="admin">
            <li><a href="/admin/messages">Mesajlar</a></li>
            <li><a href="/admin/edit/about-us">Hakkımızda Düzenle</a></li>
            <li><a href="/admin/edit/projects">Projeleri Düzenle</a></li>
            <li><a href="/admin/edit/activities">Etkinlikleri Düzenle</a></li>
            <li><a href="/admin/edit/gallery">Galeriyi Düzenle</a></li>
            <li><a href="/admin/edit/members">Üyeleri Düzenle</a></li>
            <li><a href="/admin/edit/users">Kullanıcıları Düzenle</a></li>
            <li><a href="/admin/edit/categories">Kategorileri Düzenle</a></li>
        </ul>
    </div>
@endsection