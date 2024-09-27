@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
    onLoad="init()"
@endsection

@section('page')
<div class="home-wrapper">
        <main class="home">
          <div class="holder">
            <h1 data-aos="fade-right">Ethics</h1>
            <h1 data-aos="fade-right" data-aos-delay="100">& Safety</h1>
            <h1 data-aos="fade-right" data-aos-delay="200"><span>On Social</span></h1>
            <h1 data-aos="fade-right" data-aos-delay="300"><span>Media</span></h1>
            <p data-aos="fade-right" data-aos-delay="700" class="intro">Social Media channels are powering an <span class="tooltip">unprecedented<span class="tooltiptext tooltiptext-unprecedented">Something that was never done or known before.</span></span> global connection and immediacy. Conversations can take place in real time around the world bringing customers close to companies; fans close to celebrities, and all of us closer to each other.
            </p>
            <p data-aos="fade-right" data-aos-delay="800">With that connectedness comes responsibility, to ourselves and each other. This badge will introduce you to some tips to help you stay safe on social media.</p>
            <ul>
                <li data-aos="fade-left" data-aos-delay="400"><p>Exercise good judgment when using Social Media</p></li>
                <li style="z-index:3; position:relative;" data-aos="fade-left" data-aos-delay="500"><p>Understand what constitutes <span class="tooltip">ethical<span class="tooltiptext tooltiptext-ethical">Relating to moral principles or the branch of knowledge dealing with these.</span></span>, respectful behaviour on Social Media</p></li>
                <li style="z-index:1;position:relative;"  data-aos="fade-left" data-aos-delay="600"><p>Understand how to keep yourself and your account safe</p></li>
            </ul>
            <a data-aos="fade-right" data-aos-delay="900" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Start Badge </a>
          </div>
            <div id="animation_container" style="width:1172px; height:740px">
              <canvas id="canvas" width="1172" height="740" style="position: absolute; display: block;"></canvas>
              <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1172px; height:740px; position: absolute; left: 0px; top: 0px; display: block;">
              </div>
          </div>
        </div>
        </main>

        @endsection
        @section('javascript')
          <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script>

          <script>
          var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
          function init() {
          	canvas = document.getElementById("canvas");
          	anim_container = document.getElementById("animation_container");
          	dom_overlay_container = document.getElementById("dom_overlay_container");
          	var comp=AdobeAn.getComposition("43A4B50EC0540743A5E7600A350D84E1");
          	var lib=comp.getLibrary();
          	handleComplete({},comp);
          }
          function handleComplete(evt,comp) {
          	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
          	var lib=comp.getLibrary();
          	var ss=comp.getSpriteSheet();
          	exportRoot = new lib.animation1();
          	stage = new lib.Stage(canvas);
          	//Registers the "tick" event listener.
          	fnStartAnimation = function() {
          		stage.addChild(exportRoot);
          		createjs.Ticker.setFPS(lib.properties.fps);
          		createjs.Ticker.addEventListener("tick", stage);
          	}
          	//Code to support hidpi screens and responsive scaling.
          	function makeResponsive(isResp, respDim, isScale, scaleType) {
          		var lastW, lastH, lastS=1;
          		window.addEventListener('resize', resizeCanvas);
          		resizeCanvas();
          		function resizeCanvas() {
          			var w = lib.properties.width, h = lib.properties.height;
          			var iw = window.innerWidth, ih=window.innerHeight;
          			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
          			if(isResp) {
          				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
          					sRatio = lastS;
          				}
          				else if(!isScale) {
          					if(iw<w || ih<h)
          						sRatio = Math.min(xRatio, yRatio);
          				}
          				else if(scaleType==1) {
          					sRatio = Math.min(xRatio, yRatio);
          				}
          				else if(scaleType==2) {
          					sRatio = Math.max(xRatio, yRatio);
          				}
          			}
          			canvas.width = w*pRatio*sRatio;
          			canvas.height = h*pRatio*sRatio;
          			canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
          			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
          			stage.scaleX = pRatio*sRatio;
          			stage.scaleY = pRatio*sRatio;
          			lastW = iw; lastH = ih; lastS = sRatio;
          			stage.tickOnUpdate = false;
          			stage.update();
          			stage.tickOnUpdate = true;
          		}
          	}
          	makeResponsive(true,'both',false,1);
          	AdobeAn.compositionLoaded(lib.properties.id);
          	fnStartAnimation();
          }
          </script>

        @endsection
