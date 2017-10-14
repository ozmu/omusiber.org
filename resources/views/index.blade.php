@extends('layouts.app')
@push('styles')
  <link href="https://fonts.googleapis.com/css?family=Poiret+One|Source+Sans+Pro" rel="stylesheet">
  <!-- Slider Revolution CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/settings.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/layers.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/revolution/css/navigation.css')}}">
  <!-- Particles CSS-->
  <link rel='stylesheet' id='rs-particles-front-css' href='{{asset('assets/css/particles.css')}}' type='text/css' media='all'/>
@endpush
@push('poststyles')
	<link rel="stylesheet" type="text/css" href="{{asset('assets//css/index.css')}}">
@endpush
@push('scripts')
  <!-- SLIDER REVOLUTION  -->
  <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
	  (Load Extensions only on Local File Systems !  +
	  The following part can be removed on Server for On Demand Loading) -->
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.j')}}s"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/revolution/js/extensions/source/revolution.extension.video.js')}}"></script>
  <!-- END SLIDER REVOLUTION 5.0 EXTENSIONS -->
  <!-- Particles Js -->
  <script type='text/javascript' src="{{asset('assets/js/particles.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/onepage-nav.js')}}"></script>
	<script type="text/javascript">
	var revapi262,
		tpj=jQuery;

	tpj(document).ready(function() {
		if(tpj("#welcome").revolution == undefined){
			revslider_showDoubleJqueryError("#welcome");
		}else{
			revapi262 = tpj("#welcome").show().revolution({
				sliderType:"hero",
				jsFileLocation:"{{asset('assets/revolution/js/')}}",
				sliderLayout:"fullscreen",
				dottedOverlay:"none",
				delay:9000,
							particles: {startSlide: "first", endSlide: "last", zIndex: "1",
								particles: {
									number: {value: 200}, color: {value: "#ffffff"},
									shape: {
										type: "circle", stroke: {width: 0, color: "#ffffff", opacity: 1},
										image: {src: ""}
									},
									opacity: {value: 0.2, random: true, min: 0.1, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
									size: {value: 2, random: false, min: 30, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
									line_linked: {enable: true, distance: 150, color: "#ffffff", opacity: 0.2, width: 1},
									move: {enable: true, speed: 6, direction: "none", random: true, min_speed: 6, straight: false, out_mode: "out"}},
								interactivity: {
									events: {onhover: {enable: true, mode: "repulse"}, onclick: {enable: false, mode: "repulse"}},
									modes: {grab: {distance: 400, line_linked: {opacity: 0.1}}, bubble: {distance: 400, size: 40, opacity: 0.4}, repulse: {distance: 100}}
								}
							},
				viewPort: {
					enable:true,
					outof:"wait",
					visible_area:"80%",
					presize:true
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[868,768,960,720],
				lazyType:"none",
				parallax: {
					type:"scroll",
					origo:"slidercenter",
					speed:400,
					speedbg:0,
					speedls:0,
					levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
				},
				shadow:0,
				spinner:"spinner3",
				autoHeight:"off",
				fullScreenAutoWidth:"off",
				fullScreenAlignForce:"off",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "",
				disableProgressBar:"on",
				hideThumbsOnMobile:"off",
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				debugMode:false,
				fallbacks: {
					simplifyAll:"off",
					disableFocusListener:false,
				}
			});
		}
	  RsParticlesAddOn(revapi262);

						RsTypewriterAddOn(tpj, revapi262);
		try {initSocialSharing("262");} catch(err){}
		});	/*ready*/

	  </script>
<script type="text/javascript">
    $(window).load(function(){
        $('.one-page').onePageNav();
    });
</script>

@endpush
@section('content')
	<div id="home">
	  <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#000000;padding:0px;">
		<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.6">
		  <ul>
			<li data-index="rs-972" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}" data-description="">

			  <img src="//revolutioncdn-themepunchgbr.netdna-ssl.com/wp-content/uploads/revslider/techco-header/Hello-World.jpg" alt="" title="TechCo One-Page WordPress Theme" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>


			  <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="https://revolution.themepunch.com/wp-content/uploads/revslider/techco-header/Hello-World.mp4" data-videopreload="auto" data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>

			  <div class="tp-caption tp-shape tp-shapewrapper " id="slide-972-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="hard-light" style="z-index: 5;font-family:Open Sans;background:linear-gradient(90deg, rgba(48, 78, 140, 0.75) 0%, rgba(134, 144, 141, 0.75) 100%);"> </div>

			  <div class="tp-caption    tc-gradient" id="slide-972-layer-10" data-x="['left','left','left','left']" data-hoffset="['40','40','30','25']" data-y="['middle','middle','middle','middle']" data-voffset="['-103','-102','-123','-152']" data-fontsize="['80','70','60','50']" data-lineheight="['80','70','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":490,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Source Sans Pro;"><img src="{{asset('assets/images/logoo.jpg')}}"/> </div>

			  <div class="tp-caption  " id="slide-972-layer-1" data-x="['left','left','left','left']" data-hoffset="['120','120','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-120','-150']" data-fontsize="['90','80','70','60']" data-lineheight="['90','80','70','60']" data-fontweight="['900','600','600','600']" data-letterspacing="['-5','-5','-5','-3']" data-width="['380','none','320','260']" data-height="none" data-whitespace="['normal','nowrap','normal','normal']" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[10,10,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 260px; max-width: 380px; white-space: normal; font-size: 90px; line-height: 90px; font-weight: 900; color: rgba(255,255,255,1); letter-spacing: -5px;font-family: "Source Sans Pro"">OMU<span style="font-weight:100;">Siber</span></div>

			  <div class="tp-caption  " id="slide-972-layer-2" data-x="['left','left','left','left']" data-hoffset="['120','120','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['50','40','0','-60']" data-fontsize="['26','23','20','17']" data-lineheight="['35','30','25','22']" data-width="['640','481','320','260']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 640px; max-width: 640px; white-space: normal; font-size: 26px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: px;font-family:'Poiret One', cursive;">Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu <br> resmi websitesine hoşgeldiniz. </div>

			  <a class="tp-caption rev-btn   tc-btnshadow tp-rs-menulink" href="#about" target="_self" id="slide-972-layer-12" data-x="['left','left','left','left']" data-hoffset="['120','120','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['150','140','90','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(41,194,146);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: px;font-family:Source Sans Pro;background-color:rgb(46,216,163);border-radius:3px 3px 3px 3px;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><i class="fa-icon-file-text-o" style="font-size:17px;margin-right:5px;"></i> About this Template </a>

			  <a class="tp-caption rev-btn   tc-btnshadow" href="https://revolution.themepunch.com/" target="_blank" id="slide-972-layer-13" data-x="['left','left','left','left']" data-hoffset="['350','350','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['150','140','150','80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(37,101,229);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]" style="z-index: 11; white-space: nowrap; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: px;font-family:Source Sans Pro;background-color:rgb(41,112,255);border-radius:3px 3px 3px 3px;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><i class="fa-icon-cloud-download" style="font-size:17px;margin-right:5px;"></i> Get a License </a>
			</li>
		  </ul>
	  </div>
	</div>

	<div id="about-us">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">Hakkımızda</span></h3>
			<p class="text-color">OMUSiber, 2015 tarihinde Ondokuz Mayıs Üniversitesi öğrencileri ve eğitim görevlilerince Samsun
				ve çevresinde bilgi güvenliği üzerine farkındalığı artırmak için ve ilgili insanları tek bir çatı altında
				toplamak için kurulmuştur.</p>
		</div>
		<div class="container">
			<div class="row teammates">
				<div class="col-md-3 col-md-offset-3">
					<div class="team-box box-1">
						<div class="team-img">
							<img alt="" src="{{asset('assets/images/team/emre.png')}}">
							<span></span>
						</div>
						<div class="team-details t-center">
							<div class="chairman">
								<h4 class="team-name">Emre Engin</h4>
								<h5 class="uppercase main-color">Kurucu</h5>
							</div>
							<div class="person-info">
								<h5 class="uppercase main-color">Python,Linux,PHP</h5>
							</div>
						</div>
						<div class="team-socials">
							<div class="social-list tbl">
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 ">
					<div class="team-box box-1">
						<div class="team-img">
							<img alt="" src="{{asset('assets/images/team/muhammet.jpg')}}">
							<span></span>
						</div>
						<div class="team-details t-center">
							<div class="chairman">
								<h4 class="team-name">Muhammet Öztürk</h4>
								<h5 class="uppercase main-color">Başkan</h5>
							</div>
							<div class="person-info">
								<h5 class="uppercase main-color">Python,Linux,PHP</h5>
							</div>
						</div>
						<div class="team-socials">
							<div class="social-list tbl">
								<a href="https://twitter.com/ozturkmuhammeet" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
								<a href="https://www.linkedin.com/in/muhammet-ozturk-49a425111/" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
								<a href="https://www.github.com/ozmu/" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="github"><i class="fa fa-github ic-github"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row teammates">
				<div class="col-md-3 ">
					<div class="team-box box-1">
						<div class="team-img">
							<img alt="" src="{{asset('assets/images/team/emre.png')}}">
							<span></span>
						</div>
						<div class="team-details t-center">
							<div class="chairman">
								<h4 class="team-name">Emre Engin</h4>
								<h5 class="uppercase main-color">1. Başkan</h5>
							</div>
							<div class="person-info">
								<h5 class="uppercase main-color">Python,Linux,PHP</h5>
							</div>
						</div>
						<div class="team-socials">
							<div class="social-list tbl">
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-box box-1">
						<div class="team-img">
							<img alt="" src="{{asset('assets/images/team/salihcan.jpg')}}">
							<span></span>
						</div>
						<div class="team-details t-center">
							<div class="chairman">
								<h4 class="team-name">Salih Can Özel</h4>
								<h5 class="uppercase main-color">2. Başkan</h5>
							</div>
							<div class="person-info">
								<h5 class="uppercase main-color">Python,Linux,PHP</h5>
							</div>
						</div>
						<div class="team-socials">
							<div class="social-list tbl">
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-box box-1">
						<div class="team-img">
							<img alt="" src="{{asset('assets/images/team/sinan.jpg')}}">
							<span></span>
						</div>
						<div class="team-details t-center">
							<div class="chairman">
								<h4 class="team-name">Sinan Şahin</h4>
								<h5 class="uppercase main-color">3. Başkan</h5>
							</div>
							<div class="person-info">
								<h5 class="uppercase main-color">Sysadmin, Ruby on rails, Linux</h5>
							</div>
						</div>
						<div class="team-socials">
							<div class="social-list tbl">
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team-box box-1">
						<div class="team-img">
							<img alt="" src="{{asset('assets/images/team/umutcan.jpeg')}}">
							<span></span>
						</div>
						<div class="team-details t-center">
							<div class="chairman">
								<h4 class="team-name">Umut Can Purtul</h4>
								<h5 class="uppercase main-color">4. Başkan</h5>
							</div>
							<div class="person-info">
								<h5 class="uppercase main-color">Python,Linux,PHP</h5>
							</div>
						</div>
						<div class="team-socials">
							<div class="social-list tbl">
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
								<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="projects">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">Projelerimiz</span></h3>
		</div>
		<div class="container">
			<div class="row row-eq-height">
				<div class="col-md-12 md-padding main-content">
					<div class="blog-posts small-image full">
						<div class="post-item">
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="blog-single.html">
										<img src="http://it-rays.org/bookra/assets/images/blog/large/1.jpg" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="blog-single.html">Mauris mauris ante, blandit et, ultrices a, suscipit eget.</a></h4>
											<ul class="post-meta">
												<li class="main-bg"><i class="fa fa-video-camera"></i></li>
												<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
												<li class="meta_date"><i class="fa fa-folder-o"></i>in: <a href="#">Entertainment</a></li>
												<li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2016</li>
												<li><a href="#"><i class="fa fa-comments"></i><span>35</span></a></li>
												<li><a href="#"><i class="fa fa-heart"></i><span>20</span></a></li>
											</ul>
										</div>
									</div>
									<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. <a class="more_btn main-color" href="blog-single.html">Read More</a></p>
								</div>
							</article>
						</div>

						<div class="xs-padding">
							<hr class="divider dev-style3">
						</div>
						<div class="post-item projects-right">
							<article class="post-content">
								<div class="post-image main-border bot-4-border">
									<a href="blog-single.html">
										<img src="http://it-rays.org/bookra/assets/images/blog/large/1.jpg" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="blog-single.html">Mauris mauris ante, blandit et, ultrices a, suscipit eget.</a></h4>
											<ul class="post-meta">
												<li class="main-bg"><i class="fa fa-video-camera"></i></li>
												<li class="meta-user"><i class="fa fa-user"></i>By: <a href="#">John Martin</a></li>
												<li class="meta_date"><i class="fa fa-folder-o"></i>in: <a href="#">Entertainment</a></li>
												<li class="meta_date"><i class="fa fa-clock-o"></i>15 May 2016</li>
												<li><a href="#"><i class="fa fa-comments"></i><span>35</span></a></li>
												<li><a href="#"><i class="fa fa-heart"></i><span>20</span></a></li>
											</ul>
										</div>
									</div>
									<p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. <a class="more_btn main-color" href="blog-single.html">Read More</a></p>
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
			<h3 class="uppercase lg-title"><span class="titles">Etkinliklerimiz</span></h3>
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
									<a href="blog-single.html">
										<img src="http://it-rays.org/bookra/assets/images/blog/large/1.jpg" alt="Pwnlydays">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="blog-single.html">Pwnlydays</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-active">Aktif</span></li>
												<li><i class="fa fa-bolt"></i><a href="#">Eğitim</a></li>
												<li><i class="fa fa-user"></i><a href="#">Canyoupwnme</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Mühendislik Fakültesi</span></a></li>
											</ul>
										</div>
									</div>
									<p>Günümüzde yaşanan gelişmelerden sonra fiziksel olduğu kadar siber alanda da güvenliğin son derece önemli olduğu ortaya çıkmış ve bu konuda hassasiyet artmıştır. Malesef ki bu gelişim sürecinde Türkçe kaynak ve test ortamı gibi öğretici unsurlar oldukça azdır.  <a class="more_btn main-color" href="blog-single.html">Read More</a></p>
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
									<a href="blog-single.html">
										<img src="{{asset('assets/images/activities/omuctf2.jpg')}}" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="blog-single.html">OMUCTF-II</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li class="meta-user"><i class="fa fa-bolt"></i><a href="#">Yarışma</a></li>
												<li class="meta_date"><i class="fa fa-user"></i><a href="#">OmuSiber</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Online</span></a></li>
											</ul>
										</div>
									</div>
									<p>OMUCTF-II, üniversitemizin topluluğumuza Hacktrick Siber Güvenlik Konferansı için onayladığı 3 kişilik yol harçlığını kullanacak üyelerimizi belirlemek için düzenlediğimiz siber güvenlik bilgi yarışmasıdır.<a class="more_btn main-color" href="blog-single.html">Read More</a></p>
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
									<a href="blog-single.html">
										<img src="{{asset('assets/images/activities/omuctf17.jpg')}}" alt="Our Blog post image goes here">
									</a>
								</div>
								<div class="post-item-rit">
									<div class="post-info-container">
										<div class="post-info">
											<h4><a href="blog-single.html">OMUCTF'17</a></h4>
											<ul class="post-meta">
												<li><i class="fa fa-info"></i><span class="activity-over">Bitti</span></li>
												<li class="meta-user"><i class="fa fa-bolt"></i><a href="#">Yarışma</a></li>
												<li class="meta_date"><i class="fa fa-user"></i><a href="#">OmuSiber</a></li>
												<li><a href="#"><i class="fa fa-map-signs"></i><span>Online</span></a></li>
											</ul>
										</div>
									</div>
									<p> OMUCTF’17, Siber Güvenlik Topluluğu olarak insanların düşünme ve araştırma becerilerini geliştirmelerini amaçlayarak gerçekleştirdiğimiz yarışmasıdır.<a class="more_btn main-color" href="blog-single.html">Read More</a></p>
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
			<h3 class="uppercase lg-title"><span class="titles">Galeri</span></h3>
		</div>
		<div class="md-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="camera_wrap camera-slider lg-slider-cam" data-hide-pagination data-hide-play-pause data-height="500px" data-fx="simpleFade">
							<div data-thumb="{{asset('assets/images/gallery/thumb/ab2017.jpeg')}}" data-src="{{asset('assets/images/gallery/ab2017.jpeg')}}">
								<div class="camera_caption fadeFromBottom">
									Akademik Bilişim 2017'ye katıldık.
								</div>
							</div>
							<div data-thumb="{{asset('assets/images/gallery/thumb/ctfodul.jpeg')}}" data-src="{{asset('assets/images/gallery/ctfodul.jpeg')}}">
								<div class="camera_caption fadeFromBottom">
									OMUCTF'17 kazananlarına ödülleri verildi.
								</div>
							</div>
							<div data-thumb="{{asset('assets/images/gallery/thumb/denizparlak.jpeg')}}" data-src="{{asset('assets/images/gallery/denizparlak.jpeg')}}">
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

	<div id="contact">
		<div class="heading main centered">
			<h3 class="uppercase lg-title"><span class="titles">İletişim</span></h3>
		</div>
		<div class="md-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="heading style2">
							<h3 class="uppercase"><span class="main-color">Bize </span> Ulaşın</h3>
						</div>
						<p>Etkinliklerimiz hakkında bilgi almak, projelerimize katılım sağlamak, bize yardım etmek için bize aşağıdan ulaşabilirsiniz.</p>

						<hr class="dev-style2" />

						<form id="contact-form" class="ajax-form" name="contact" action="assets/php/sendemail.php" method="post" novalidate="novalidate">
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
									<label for="contact-name">İsim <small>*</small></label>
									<input type="text" id="contact-name" name="contact-name" class="form-control required" maxlength="30">
								</div>

								<div class="col-md-6">
									<label for="contact-email">Soyisim <small>*</small></label>
									<input type="text" id="contact-surname" name="contact-surname" class="form-control required" maxlength="30">
								</div>
							</div>
							<div class="row form-group over-hidden">
								<div class="col-md-12">
									<label for="contact-email">Email<small>*</small></label>
									<input type="email" id="contact-email" name="contact-email" placeholder="E-Postanızı Girin" class="form-control required">
								</div>
							</div>
							<div class="row form-group over-hidden">
								<div class="col-md-12">
									<label for="contact-subject">Konu <small>*</small></label>
									<input type="text" id="contact-subject" name="contact-subject" class="form-control required" maxlength="100">
								</div>
							</div>
							<div class="form-group over-hidden">
								<label for="contact-message">Mesaj <small>*</small></label>
								<textarea id="contact-message" name="contact-message" rows="6" cols="30" class="form-control required" maxlength="500"></textarea>
							</div>
							<div class="form-group m-t-2">
								<button class="btn rect-angles btn-gry-border btn-lg" type="submit" id="contact-submit" name="contact-submit" value="submit"><i class="fa fa-crop"></i></span></span></span>Send Message</button>
							</div>

						</form>

					</div>
					<div class="col-md-5">
						<iframe class="gmap full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d890.2432706851665!2d36.18579058594846!3d41.36518700831311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af82af892bd3a7c!2zT03DnCBZYcWfYW0gTWVya2V6aQ!5e0!3m2!1str!2str!4v1507065968116" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<div class="p-a-3 gry-bg">
							<h4 class="main-color uppercase">Merkez:</h4>
							<ul class="details">
								<li>Ondokuz Mayıs Üniversitesi Yaşam Merkezi 2. Kat Kulüp Odası 3<br>55270 Atakum/Samsun, Türkiye</li>
								<li><i class="fa fa-envelope main-color"></i><span><strong>Email:</strong> siber@omu.edu.tr </span></li>
								<li><i class="fa fa-telegram main-color"></i><span><strong>Telegram Kanalı:</strong> https://t.me/omusiber</span></li>
							</ul>
						</div>
						<div class="tbl social-list">
							<a href="https://www.facebook.com/omusiber" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="fa fa-facebook ic-facebook"></i></a>
							<a href="https://twitter.com/omusiber" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="fa fa-twitter ic-twitter"></i></a>
							<a href="https://github.com/omusiber" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Github"><i class="fa fa-github ic-github"></i></a>
							<a href="https://www.linkedin.com/company/13185144/" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Linkedin"><i class="fa fa-linkedin ic-linkedin"></i></a>
							<a href="https://plus.google.com/u/0/104261041898918397635" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Google Plus"><i class="fa fa-google-plus ic-gplus"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection
