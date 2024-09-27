@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="homepage"
@endsection

@section('page')
        <main class="home section-1">
          <div class="section-title" data-aos="fade-down">
              <p>How To Set Up On</p>
          </div>
          <div class="home-cols">
            <div class="col col-1">
              <div id="animation_container" >
                <canvas id="canvas" width="485" height="1080" style="position: absolute; display: block;"></canvas>
                <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:485px; height:1080px; position: absolute; left: 0px; top: 0px; display: block;">
                </div>
              </div>
            </div>
            <div class="col col-2">
              <h1 class="visuallyhidden">Social Media</h1>
              <img data-aos="zoom-in" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/homepage.svg" alt="How to set up on Social Media"/>
              <p class="intro" data-aos="fade-up" data-aos-delay="300">Setting up on social media can be daunting – it can be hard knowing where to begin. In this badge, iDEA will help you learn how to set up the six main social media channels.</p>
              <a class="btn btn-primary" href="/{{$url['slug']}}/intro"><span>Start Badge</span></a>
            </div>

          </div>

        </main>

        @endsection
        @section('javascript')

          <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/home-1.js"></script>
          <script>
          var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
          function init() {
          	canvas = document.getElementById("canvas");
          	anim_container = document.getElementById("animation_container");
          	dom_overlay_container = document.getElementById("dom_overlay_container");
          	var comp=AdobeAn.getComposition("E47B4597A93F2148942F42E792DD295E");
          	var lib=comp.getLibrary();
          	handleComplete({},comp);
          }
          $(function() {
            init();
          });
          function handleComplete(evt,comp) {
          	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
          	var lib=comp.getLibrary();
          	var ss=comp.getSpriteSheet();
          	exportRoot = new lib.home();
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
          	makeResponsive(false,'both',false,1);
          	AdobeAn.compositionLoaded(lib.properties.id);
          	fnStartAnimation();
          }
          </script>
        @endsection
