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
  <script type='text/javascript' src='{{asset('assets/js/particles.js')}}'></script>
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
@endpush
@section('content')

<div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#000000;padding:0px;">

<div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.6">
<ul>
<li data-index="rs-972" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="{&quot;revslider-weather-addon&quot; : { &quot;type&quot; : &quot;&quot; ,&quot;name&quot; : &quot;&quot; ,&quot;woeid&quot; : &quot;&quot; ,&quot;unit&quot; : &quot;&quot; }}" data-description="">

<img src="//revolutioncdn-themepunchgbr.netdna-ssl.com/wp-content/uploads/revslider/techco-header/Hello-World.jpg" alt="" title="TechCo One-Page WordPress Theme" data-bgposition="center center" data-bgfit="cover" data-bgparallax="4" class="rev-slidebg" data-no-retina>


<div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="https://revolution.themepunch.com/wp-content/uploads/revslider/techco-header/Hello-World.mp4" data-videopreload="auto" data-videoloop="loop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>

<div class="tp-caption tp-shape tp-shapewrapper " id="slide-972-layer-7" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="full" data-height="full" data-whitespace="nowrap" data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;","ease":"Power4.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" data-blendmode="hard-light" style="z-index: 5;font-family:Open Sans;background:linear-gradient(90deg, rgba(41,112,255,0.75) 0%, rgba(46,216,163,0.75) 100%);"> </div>

<div class="tp-caption    tc-gradient" id="slide-972-layer-10" data-x="['left','left','left','left']" data-hoffset="['40','40','30','25']" data-y="['middle','middle','middle','middle']" data-voffset="['-103','-102','-123','-152']" data-fontsize="['80','70','60','50']" data-lineheight="['80','70','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":490,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space: nowrap; font-size: 80px; line-height: 80px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Source Sans Pro;"><img src="{{asset('assets/images/logoo.jpg')}}"/> </div>

<div class="tp-caption  " id="slide-972-layer-1" data-x="['left','left','left','left']" data-hoffset="['120','120','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-120','-150']" data-fontsize="['90','80','70','60']" data-lineheight="['90','80','70','60']" data-fontweight="['900','600','600','600']" data-letterspacing="['-5','-5','-5','-3']" data-width="['380','none','320','260']" data-height="none" data-whitespace="['normal','nowrap','normal','normal']" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[10,10,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7; min-width: 260px; max-width: 380px; white-space: normal; font-size: 90px; line-height: 90px; font-weight: 900; color: rgba(255,255,255,1); letter-spacing: -5px;font-family:'Source Sans Pro', sans-serif;">OMU<span style="font-weight:100;">Siber</span></div>

<div class="tp-caption  " id="slide-972-layer-2" data-x="['left','left','left','left']" data-hoffset="['120','120','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['50','40','0','-60']" data-fontsize="['26','23','20','17']" data-lineheight="['35','30','25','22']" data-width="['640','481','320','260']" data-height="none" data-whitespace="normal" data-type="text" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":800,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8; min-width: 640px; max-width: 640px; white-space: normal; font-size: 26px; line-height: 35px; font-weight: 400; color: #ffffff; letter-spacing: px;font-family:'Poiret One', cursive;">Ondokuz Mayıs Üniversitesi Siber Güvenlik Topluluğu <br> resmi websitesine hoşgeldiniz. </div>

<a class="tp-caption rev-btn   tc-btnshadow tp-rs-menulink" href="#about" target="_self" id="slide-972-layer-12" data-x="['left','left','left','left']" data-hoffset="['120','120','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['150','140','90','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(41,194,146);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]" style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: px;font-family:Source Sans Pro;background-color:rgb(46,216,163);border-radius:3px 3px 3px 3px;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><i class="fa-icon-file-text-o" style="font-size:17px;margin-right:5px;"></i> About this Template </a>

<div class="tp-caption   tp-svg-layer" id="slide-972-layer-4" data-x="['center','center','right','right']" data-hoffset="['0','0','40','30']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['40','40','30','30']" data-width="50" data-height="50" data-whitespace="nowrap" data-type="svg" data-actions='[{"event":"click","action":"scrollbelow","offset":"px","delay":"","speed":"1000","ease":"Power1.easeInOut"}]' data-svg_src="https://revolution.themepunch.com/wp-content/plugins/revslider/public/assets/assets/svg/hardware/ic_keyboard_arrow_down_24px.svg" data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;" data-svg_hover="sc:transparent;sw:0;sda:0;sdo:0;" data-basealign="slide" data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(46,216,163);bc:rgb(46,216,163);"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[7,7,7,7]" data-paddingright="[5,5,5,5]" data-paddingbottom="[5,5,5,5]" data-paddingleft="[5,5,5,5]" style="z-index: 10; min-width: 50px; max-width: 50px; max-width: 50px; max-width: 50px; color: #ffffff;font-family:Open Sans;border-color:rgb(255,255,255);border-style:solid;border-width:2px 2px 2px 2px;border-radius:40px 40px 40px 40px;cursor:pointer;"> </div>

<a class="tp-caption rev-btn   tc-btnshadow" href="https://revolution.themepunch.com/" target="_blank" id="slide-972-layer-13" data-x="['left','left','left','left']" data-hoffset="['350','350','100','80']" data-y="['middle','middle','middle','middle']" data-voffset="['150','140','150','80']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-actions='' data-responsive_offset="off" data-responsive="off" data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"150","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(37,101,229);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]" data-paddingright="[20,20,20,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[20,20,20,20]" style="z-index: 11; white-space: nowrap; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255,255,255,1); letter-spacing: px;font-family:Source Sans Pro;background-color:rgb(41,112,255);border-radius:3px 3px 3px 3px;outline:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;"><i class="fa-icon-cloud-download" style="font-size:17px;margin-right:5px;"></i> Get a License </a>
</li>
</ul>
</div>
</div>


@endsection
