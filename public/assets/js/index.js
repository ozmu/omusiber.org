$(window).load(function(){
    $('.one-page').onePageNav();
});

var homeSlider,
    jq=jQuery;

jq(document).ready(function() {
    if(jq("#welcome").revolution == undefined){
        revslider_showDoubleJqueryError("#welcome");
    }else{
        homeSlider = jq("#welcome").show().revolution({
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
    RsParticlesAddOn(homeSlider);

    RsTypewriterAddOn(jq, homeSlider);
    try {initSocialSharing("262");} catch(err){}
});	/*ready*/