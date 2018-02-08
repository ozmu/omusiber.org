@extends('layouts.site')
@push('styles')
  <link href="https://fonts.googleapis.com/css?family=Poiret+One|Source+Sans+Pro" rel="stylesheet">
  <!-- Slider Revolution CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/revolution/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/revolution/css/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{secure_asset('assets/revolution/css/navigation.css')}}">
  <!-- Particles CSS-->
  <link rel='stylesheet' id='rs-particles-front-css' href='{{secure_asset('assets/css/particles.css')}}' type='text/css' media='all'/>
  <link rel='stylesheet' href='{{secure_asset('assets/css/bttn.min.css')}}' type='text/css' media='all'/>

@endpush
@push('poststyles')
	<link rel="stylesheet" type="text/css" href="{{secure_asset('assets//css/index.css')}}">
@endpush
@push('scripts')
  <!-- SLIDER REVOLUTION  -->
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
	  (Load Extensions only on Local File Systems !  +
	  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.j')}}s"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/revolution/js/extensions/source/revolution.extension.video.js')}}"></script>
  <!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
  <!-- Particles Js -->
  <script type='text/javascript' src="{{secure_asset('assets/js/particles.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/js/onepage-nav.js')}}"></script>
  <script type="text/javascript" src="{{secure_asset('assets/js/index.js')}}"></script>

@endpush
@section('content')
	<home></home>

	<about header="{{ $titles->about_us }}" content="{{ $texts->about_us_body }}" :team="{{ $team }}"></about>

	<div id="projects">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ $titles->projects }}</span></h3>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-12 md-padding main-content">
					<div class="blog-posts small-image full">
						<div class="post-item">
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="{{secure_asset('assets/images/logo.jpg')}}" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">OMUVm</a></h4>
											<ul class="post-meta">
												<li class="main-bg"><i class="fa fa-bullhorn"></i></li>
												<li class="meta_date"><i class="fa fa-folder-o"></i>Yarışma</li>
												<li class="meta_date"><i class="fa fa-clock-o"></i>15 Ekim 2017</li>
												<li><i class="fa fa-info"></i><span class="activity-over">Planlanma Aşamasında</span></li>
											</ul>
										</div>
									</div>
									<p>Siber güvenlikte kendini geliştirmek isteyenler için zaafiyetli sanal makine çözmek çok eğlenceli ve bilgi vericidir. OMUVm, kendini geliştirmek isteyen öğrencilerin uğraşması gereken bir vulnerable machine(zaafiyetli makine) dir.<a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>

						<div class="xs-padding">
							<hr class="divider dev-style3">
						</div>
						<div class="post-item projects-right">
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="{{secure_asset('assets/images/logo.jpg')}}" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">Dökümantasyon</a></h4>
											<ul class="post-meta">
												<li class="main-bg"><i class="fa fa-file"></i></li>
												<li class="meta_date"><i class="fa fa-folder-o"></i>Eğitim</li>
												<li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2017</li>
												<li><i class="fa fa-info"></i><span class="activity-active">Devam Ediyor</span></li>
											</ul>
										</div>
									</div>
									<p>Günümüzde internetin yayılmasıyla devasa bir bilgi birikimine ulaşıldı. Fakat gerçekten yararlı bilgiler olduğu gibi, anlaşılmaz karmaşık bir dile sahip ve yanıltıcı bilgiler de mevcut. Amacımız en sade şekilde insanların konuyu kavrayacağı dökümanlar hazırlamak. <a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="activities">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ $titles->activities }}</span></h3>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-12 md-padding main-content">
					<div class="blog-posts timeline full">
						<div class="post-item">
							<div class="timeline_date">
									<span class="inner_date main-bg">
										<span class="day">21</span>
										<span class="month">Ekim</span>
									</span>
								<span class="year">2017</span>
							</div>
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="{{secure_asset('assets/images/activities/pwnlydays.jpg')}}" alt="Pwnlydays">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">Pwnlydays</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li><i class="fa fa-bolt"></i><a href="#">Eğitim</a></li>
												<li><i class="fa fa-user"></i><a href="#">Canyoupwnme</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Mühendislik Fakültesi</span></a></li>
											</ul>
										</div>
									</div>
									<p>Günümüzde yaşanan gelişmelerden sonra fiziksel olduğu kadar siber alanda da güvenliğin son derece önemli olduğu ortaya çıkmış ve bu konuda hassasiyet artmıştır. Malesef ki bu gelişim sürecinde Türkçe kaynak ve test ortamı gibi öğretici unsurlar oldukça azdır.  <a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>
						<div class="post-item">
							<div class="timeline_date">
									<span class="inner_date main-bg">
										<span class="day">16</span>
										<span class="month">Nisan</span>
									</span>
								<span class="year">2017</span>
							</div>
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="{{secure_asset('assets/images/activities/omuctf2.jpg')}}" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">OMUCTF-II</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li class="meta-user"><i class="fa fa-bolt"></i><a href="#">Yarışma</a></li>
												<li class="meta_date"><i class="fa fa-user"></i><a href="#">OmuSiber</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Online</span></a></li>
											</ul>
										</div>
									</div>
									<p>OMUCTF-II, üniversitemizin topluluğumuza Hacktrick Siber Güvenlik Konferansı için onayladığı 3 kişilik yol harçlığını kullanacak üyelerimizi belirlemek için düzenlediğimiz siber güvenlik bilgi yarışmasıdır.<a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>
						<div class="post-item">
							<div class="timeline_date">
									<span class="inner_date main-bg">
										<span class="day">5</span>
										<span class="month">Mart</span>
									</span>
								<span class="year">2017</span>
							</div>
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="#">
										<img src="{{secure_asset('assets/images/activities/omuctf17.jpg')}}" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="#">OMUCTF'17</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li class="meta-user"><i class="fa fa-bolt"></i><a href="#">Yarışma</a></li>
												<li class="meta_date"><i class="fa fa-user"></i><a href="#">OmuSiber</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Online</span></a></li>
											</ul>
										</div>
									</div>
									<p> OMUCTF’17, Siber Güvenlik Topluluğu olarak insanların düşünme ve araştırma becerilerini geliştirmelerini amaçlayarak gerçekleştirdiğimiz yarışmasıdır.<a class="more_btn main-color" href="#">Devamını oku..</a></p>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<site-gallery header="{{ $titles->gallery }}" :images="{{ $gallery }}"></site-gallery>

	<div id="subscribe">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ $titles->members }}</span></h3>
		</div>
		<div class="md-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="text-color">
							{!! $texts->subscribe_body !!}
						</p>
					</div>
				</div>
				<div class="row">
					<a class="bttn-unite bttn-lg bttn-primary" href="subscribe">Üye Ol</a>
				</div>
			</div>
		</div>
	</div>
	<contact header="{{ $titles->contact }}"></contact>
	</div>



@endsection
