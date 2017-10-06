@extends('layouts.docs')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <!-- Logo start -->
        <div class="logo">
            <a href="/"><img alt="" src="{{asset('assets/images/logo.jpg')}}" /></a>
        </div>
        <!-- Logo end -->

        <ul class="docsnav">
            <li><a href="/">Anasayfa</a></li>
            <li><a href="/repo">Depo</a></li>
            <li><a href="/#about-us">Hakkında</a></li>
        </ul>

        <div class="breadcrumbs style2">
            <a href="#" class="main-bg">Home</a><a href="#">Shortcodes</a><span>Breadcrumbs</span>
        </div>
        <div id="acc_3" class="accordion toggle bottom-border">

            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v1" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-cloud-download main-color"></i>Bilgi Toplama</a>
                </h5>
                <div class="acc-body collapse" id="v1">
                    <div class="acc-content">
                        <ul class="tools">
                            <li><a>Metasploit</a></li>
                            <li><a>Nmap</a></li>
                            <li><a>Ping</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v2" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-shopping-bag main-color"></i>Izleme & Zehirleme</a>
                </h5>
                <div class="acc-body collapse" id="v2">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v3" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Güvenlik Zaafiyetleri</a>
                </h5>
                <div class="acc-body collapse" id="v3">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v4" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Parola Saldırıları</a>
                </h5>
                <div class="acc-body collapse" id="v4">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>

            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v5" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Kablosuz Ataklar</a>
                </h5>
                <div class="acc-body collapse" id="v5">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>
            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v5" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Adli Bilişim</a>
                </h5>
                <div class="acc-body collapse" id="v5">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>
            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v5" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Erişim Sağlama</a>
                </h5>
                <div class="acc-body collapse" id="v5">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>
            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v5" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Donanıma Sızma</a>
                </h5>
                <div class="acc-body collapse" id="v5">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>
            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v5" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Web Uygulamaları</a>
                </h5>
                <div class="acc-body collapse" id="v5">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>
            <div class="panel">
                <h5 class="acc-head">
                    <a href="#v5" data-toggle="collapse" data-parent="#acc_3" class="collapsed"><i class="fa fa-gears main-color"></i>Tersine Mühendislik</a>
                </h5>
                <div class="acc-body collapse" id="v5">
                    <div class="acc-content">
                        Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed.
                    </div>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>


    </div>

@endsection