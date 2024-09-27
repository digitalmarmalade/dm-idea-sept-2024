@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
    onLoad="init()"
@endsection

@section('page')
        <main class="home success">
          <div class="holder">
            <h1 data-aos="fade-right" data-aos-delay="100">Well</h1>
            <h1 data-aos="fade-right" data-aos-delay="200">Done!</h1>
            <h3 data-aos="fade-right" data-aos-delay="600"><span>You've completed the Ethics & Safety on Social Media badge.</h1>
            <p data-aos="fade-right" data-aos-delay="300" class="intro">Social media is helping bring the world closer together; helping customers hold companies to account; and enabling us to stay in touch with friends and family all over the globe. With that extraordinary connectedness comes the need for responsibility. </p>
            <p data-aos="fade-right" data-aos-delay="400" class="intro">You have learned how to keep your account safe and what to do if you spot bad behaviour, as well as some tips on how to use social media responsibly. As the technology that powers social networks becomes more and more powerful, and more and more innovative, we will have to evolve our thinking to tackle new challenges. In the meantime, you have succeeded in developing an understanding of social media etiquette that will hopefully help you and the people you care about stay safe.</p>
            <a data-aos="fade-right" data-aos-delay="500" onclick="oBadges.stepCompleted();"  href="{{$links['submit']}}" class="btn">Claim your points and go back to <span class="i">i</span>dea</a>
          </div>
            <div id="animation_container" style="width:1172px; height:740px">
              <canvas id="canvas" width="1172" height="740" style="position: absolute; display: block;"></canvas>
              <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1172px; height:740px; position: absolute; left: 0px; top: 0px; display: block;">
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
