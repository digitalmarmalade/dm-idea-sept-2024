@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.the-art-of-selling.header', ['title' => 'Header'])

    <main class="home">
      <section class="pink">
        <div class="cols-wrapper">

          <div>
            <section id="animation_container" style="background-color:rgba(255, 255, 255, 0); width:300px; height:300px">
          		<canvas id="canvas" width="300" height="300" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0);"></canvas>
          		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:300px; height:300px; position: absolute; left: 0px; top: 0px; display: block;">
          		</section>
          </div>

          <div>
            <h1 data-aos="fade-down"><span data-aos="fade-right" data-aos-delay="100">The Art of</span>Selling</h1>
            <p data-aos="fade-up" data-aos-delay="200">People sell to others constantly, often without even realising that they’re selling.</p>

            <p data-aos="fadeup" data-aos-delay="300">Perhaps you have persuaded someone to buy something for you, or influenced your friends to do what you’ve wanted. Maybe you enlisted a colleague to help you with a task or swayed an argument in your favour.</p>
            <p data-aos="fadeup" data-aos-delay="400">In all of these instances, you’ve sold. You have sold the idea that you wanted to.</p>
          </div>

        </div>
        <a data-aos="zoom-in" data-aos-delay="500" href="#bottom" class="scroll">Scroll</a>

      </section>
      <section id="bottom" class="blue-3">
        <div class="holder">
            <p data-aos="fade-up">This badge is selling to you right now. We’re trying to convince you to complete this badge. You should. It will make your life much better. Honest.</p>
            <p data-aos="fade-up" data-aos-delay="100">Selling a product or service is no different to any of these scenarios. In this badge you will:</p>
            <ul class="list">
              <li data-aos="fade-up" data-aos-delay="200">Find out what selling is and why it’s important</li>
              <li data-aos="fade-up" data-aos-delay="300">Learn the key concepts needed to understand the sales process</li>
              <li data-aos="fade-up" data-aos-delay="400">Discover a range of different sales methods</li>
              <li data-aos="fade-up" data-aos-delay="500">Get to grips with how to close a sale</li>
            </ul>
            <a class="btn btn-next-step" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="zoom-in" data-aos-delay="900" >Let's go!</a>
      </section>

    </main>
@endsection
@section('javascript')

<!-- <style>
  #animation_container {
	position:absolute;
	margin:auto;
	left:0;right:0;
	top:0;bottom:0;
  }
</style> -->

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
