@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection

@section('page')

  <header class="lockup">
    <a href="http://www.idea.org.uk">
    	<img src="/badge-assets/{{$url['slug']}}/_global/img/idea.png" class="lockup-badge-type" />
    </a>
  </header>

    <main class="home success">
      <section class="pink">
        <div class="cols-wrapper">

          <div>
            <h1 data-aos="fade-up">Well done!</h1>
            <p data-aos="fade-up" data-aos-delay="200">You’re well on your way to becoming a sales legend!</p>
            <p data-aos="fade-up" data-aos-delay="300">In this badge you:</p>
            <ul class="list">
              <li data-aos="fade-up" data-aos-delay="400">Found out what selling is and why it’s important</li>
              <li data-aos="fade-up" data-aos-delay="500">Learnt the key concepts needed to understand the sales process</li>
              <li data-aos="fade-up" data-aos-delay="600">Discovered a range of different sales methods</li>
              <li data-aos="fade-up" data-aos-delay="700">Got to grips with how to close a sale</li>
            </ul>
          </div>

          <div>
            <div>
              <section id="animation_container" style="background-color:rgba(255, 255, 255, 0); width:300px; height:300px">
            		<canvas id="canvas" width="300" height="300" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0);"></canvas>
            		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:300px; height:300px; position: absolute; left: 0px; top: 0px; display: block;">
            		</section>
            </div>
          </div>

        </div>

        <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}"  data-aos="zoom-in" data-aos-delay="900" >
          Claim your points and return to iDEA
        </a>


      </section>

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
	var comp=AdobeAn.getComposition("38895A1C784F0A4792EEB71476E857ED");
	var lib=comp.getLibrary();
	handleComplete({},comp);
}
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
	makeResponsive(true,'both',false,1);
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>
@endsection
