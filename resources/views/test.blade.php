{{ Auth::user() }} <br><br>
@if(Auth::user() == NULL)
    Kullanıcı yok!
@else(Auth::user())
    Böyle bir kullanıcı var.<br>
    Adı: {{Auth::user()->name}}<br><br>
    @if(Auth::user()->is_editor)
        Bu arkadaş editör!
    @endif
    @if(Auth::user()->is_admin)
        Bu arkadaş admin!
    @endif
@endif
