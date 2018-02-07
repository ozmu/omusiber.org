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
	<div id="home">
	  <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#000000;padding:0px;">
		<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.6">
		  <ul>
			<li data-index="rs-972" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}" data-description="">

			  <img src="//revolutioncdn-themepunchgbr.netdna-ssl.com/wp-content/uploads/revslider/techco-header/Hello-World.jpg" alt="" title="TechCo One-Page WordPress Theme" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>

				<!-- Bg video -->
			  <div class="rs-background-video-layer"
				   data-forcerewind="on"
				   data-volume="mute"
				   data-videowidth="100%"
				   data-videoheight="100%"
				   data-videomp4="https://revolution.themepunch.com/wp-content/uploads/revslider/techco-header/Hello-World.mp4"
				   data-videopreload="auto"
				   data-videoloop="loop"
				   data-forceCover="1"
				   data-aspectratio="16:9"
				   data-autoplay="true"
				   data-autoplayonlyfirsttime="false">
			  </div>

				<!-- Gradient color -->
			  <div class="tp-caption tp-shape tp-shapewrapper"
				   id="slide-972-layer-7"
				   data-x="['center','center','center','center']"
				   data-hoffset="['0','0','0','0']"
				   data-y="['middle','middle','middle','middle']"
				   data-voffset="['0','0','0','0']"
				   data-width="full"
				   data-height="full"
				   data-whitespace="nowrap"
				   data-type="shape"
				   data-basealign="slide"
				   data-responsive_offset="off"
				   data-responsive="off"
				   data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]'
				   data-textAlign="['inherit','inherit','inherit','inherit']"
				   data-paddingtop="[0,0,0,0]"
				   data-paddingright="[0,0,0,0]"
				   data-paddingbottom="[0,0,0,0]"
				   data-paddingleft="[0,0,0,0]"
				   data-blendmode="hard-light"
				   style="z-index: 5;font-family:Open Sans;background:linear-gradient(90deg, rgba(48, 78, 140, 0.75) 0%, rgba(134, 144, 141, 0.75) 100%);">
			  </div>

				<!-- Parallax Logo -->
			  <div class="tp-caption tc-gradient"
				   id="slide-972-layer-10"
				   data-x="['left','left','left','left']"
				   data-hoffset="['0','0','0','0']"
				   data-y="['middle','middle','middle','middle']"
				   data-voffset="['-90','-90','-93','-122']"
				   data-fontsize="['80','70','60','50']"
				   data-lineheight="['80','70','60','50']"
				   data-width=""
				   data-height=""
				   data-whitespace="nowrap"
				   data-type="text"
				   data-responsive_offset="off"
				   data-responsive="off"
				   data-frames='[{"delay":490,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
				   data-textAlign="['inherit','inherit','inherit','inherit']"
				   data-paddingtop="[0,0,0,0]"
				   data-paddingright="[0,0,0,0]"
				   data-paddingbottom="[0,0,0,0]"
				   data-paddingleft="[0,0,0,0]"
				   style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Source Sans Pro;">
				  <img src="{{secure_asset('assets/images/logo.png')}}"/>
			  </div>

				<!-- Header -->
			  <div class="tp-caption"
				   id="slide-972-layer-1"
				   data-x="['left','left','left','left']"
				   data-hoffset="['120','120','100','80']"
				   data-y="['middle','middle','middle','middle']"
				   data-voffset="['-100','-100','-120','-150']"
				   data-fontsize="['90','80','70','60']"
				   data-lineheight="['90','80','70','60']"
				   data-fontweight="['900','600','600','600']"
				   data-letterspacing="['-5','-5','-5','-3']"
				   data-width="['415','none','320','260']"
				   data-height="none"
				   data-whitespace="['normal','nowrap','normal','normal']"
				   data-type="text"
				   data-responsive_offset="off"
				   data-responsive="off"
				   data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
				   data-textAlign="['left','left','left','left']"
				   data-paddingtop="[0,0,0,0]"
				   data-paddingright="[10,10,0,0]"
				   data-paddingbottom="[0,0,0,0]"
				   data-paddingleft="[0,0,0,0]"
				   style="z-index: 7; min-width: 415px; max-width: 415px; white-space: normal; font-size: 90px; line-height: 90px; font-weight: 900; color: rgba(255,255,255,1); letter-spacing: -5px;">
				  OMU<span style="font-weight:100;">Siber
				  </span>
			  </div>

				<!-- Club desc -->
			  <div class="tp-caption"
				   id="slide-972-layer-2"
				   data-x="['left','left','left','left']"
				   data-hoffset="['130','130','100','80']"
				   data-y="['middle','middle','middle','middle']"
				   data-voffset="['-50','-40','0','-60']"
				   data-fontsize="['26','23','20','17']"
				   data-lineheight="['35','30','25','22']"
				   data-width="['640','481','320','260']"
				   data-height="none"
				   data-whitespace="normal"
				   data-type="text"
				   data-responsive_offset="off"
				   data-responsive="off"
				   data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]'
				   data-textAlign="['left','left','left','left']"
				   data-paddingtop="[0,0,0,0]"
				   data-paddingright="[0,0,0,0]"
				   data-paddingbottom="[0,0,0,0]"
				   data-paddingleft="[0,0,0,0]"
				   style="z-index: 8; min-width: 640px; max-width: 640px; white-space: normal; font-size: 26px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: px;font-family:'Poiret One', cursive;">
				  Ondokuz Mayıs Üniversitesi | Siber Güvenlik Topluluğu
			  </div>

			  <!-- Button 1 -->
			  <a class="tp-caption rev-btn tc-btnshadow tp-rs-menulink"
				 href="/docs"
				 target="_self"
				 id="slide-972-layer-12"
				 data-x="['left','left','left','left']"
				 data-hoffset="['120','120','100','80']"
				 data-y="['middle','middle','middle','middle']"
				 data-voffset="['50','50','20','0']"
				 data-width="none"
				 data-height="none"
				 data-whitespace="nowrap"
				 data-type="button"
				 data-actions=''
				 data-responsive_offset="off"
				 data-responsive="off"
				 data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#ffffff;bg:#4c87b9;"}]'
				 data-textAlign="['inherit','inherit','inherit','inherit']"
				 data-paddingtop="[0,0,0,0]"
				 data-paddingright="[20,20,20,20]"
				 data-paddingbottom="[0,0,0,0]"
				 data-paddingleft="[20,20,20,20]"
				 style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 50px; font-weight: 600; color: #dfdfdf; letter-spacing: px;font-family:Source Sans Pro;background-color:rgb(41,112,255);border-radius:3px 3px 3px 3px;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">
				  <i class="fa-icon-file-text-o" style="font-size:17px;margin-right:5px;"></i>
				  Dökümanlar
			  </a>


			  <!-- Anon Man Layer -->
			  <div class="tp-caption tp-resizeme"
				   data-x="['right','right','center','center']" data-hoffset="['0','50','0','0']"
				   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
				   data-width="none"
				   data-height="none"
				   data-whitespace="nowrap"
				   data-transform_idle="o:1;"
				   data-transform_in="x:right;s:1500;e:Power4.easeOut;"
				   data-transform_out="x:right;s:1000;e:Power2.easeIn;s:1000;e:Power2.easeIn;"
				   data-start="1000"
				   data-responsive_offset="on"
				   style="z-index: 11;"><img src="" alt="" data-lazyload="{{secure_asset('assets/images/anonman.png')}}">
			  </div>
			</li>
		  </ul>
	  </div>
	</div>

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

	<div id="gallery">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">{{ $titles->gallery }}</span></h3>
		</div>
		<div class="md-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="camera_wrap camera-slider lg-slider-cam" data-hide-pagination data-hide-play-pause data-height="500px" data-fx="simpleFade">
							<div data-thumb="{{secure_asset('assets/images/gallery/thumb/pwnlydays.jpeg')}}" data-src="{{secure_asset('assets/images/gallery/pwnlydays.jpeg')}}">
								<div class="camera_caption fadeFromBottom">
									Pwnlydays 2017 açılış konferansı Eğitim Fakültesi A Blok Konferans Salonu'nda gerçekleşti.
								</div>
							</div>
							<div data-thumb="{{secure_asset('assets/images/gallery/thumb/ab2017.jpeg')}}" data-src="{{secure_asset('assets/images/gallery/ab2017.jpeg')}}">
								<div class="camera_caption fadeFromBottom">
									Akademik Bilişim 2017'ye katıldık.
								</div>
							</div>
							<div data-thumb="{{secure_asset('assets/images/gallery/thumb/ctfodul.jpeg')}}" data-src="{{secure_asset('assets/images/gallery/ctfodul.jpeg')}}">
								<div class="camera_caption fadeFromBottom">
									OMUCTF'17 kazananlarına ödülleri verildi.
								</div>
							</div>
							<div data-thumb="{{secure_asset('assets/images/gallery/thumb/denizparlak.jpeg')}}" data-src="{{secure_asset('assets/images/gallery/denizparlak.jpeg')}}">
								<div class="camera_caption fadeFromBottom">
									Deniz Parlak okulumuzda siber güvenlik üzerine konuşma yaptı.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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
