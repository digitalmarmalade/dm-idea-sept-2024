@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

    <main class="home success grad-dark-blue-2-success">
      <section class="animation">
        <div id="animation_container" style=" width:980px; height:1000px;">
          <canvas id="canvas" width="980" height="1000" style="position: absolute; display: block; "></canvas>
          <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:980px; height:1000px; position: absolute; left: 0px; top: 0px; display: block;"></div>
        </div>
        <a href='#scrollTo' class='scroll-to'>&#8595;</a>
      </section>
      <section class="top dark-blue" id="scrollTo">
        <h1>
          <ul>
            <li data-aos="fade-down">w</li>
            <li data-aos="fade-down">e</li>
            <li data-aos="fade-down">l</li>
            <li data-aos="fade-down">l</li>
            <li>&nbsp;</li>
            <li data-aos="fade-down">d</li>
            <li data-aos="fade-down">o</li>
            <li data-aos="fade-down">n</li>
            <li data-aos="fade-down">e</li>
          </ul>
        </h1>
        <div class="holder">
          <p data-aos="fade-up">In this badge you've learnt about Big Data, including:</p>

        </div>
        <ul class="learning-outcomes">
          <li class="grad-pink">What is Big Data?</li>
          <li class="grad-red">The history of Big Data</li>
          <li class="grad-orange">How Big Data is handled</li>
          <li class="grad-yellow">The challenges of Big Data</li>
          <li class="grad-green">How to learn from Big Data</li>
          <li class="grad-blue">How Big Data is being used</li>
        </ul>
      </section>
      <section>
        <a onclick="oBadges.stepCompleted();" href="{{$links['submit']}}" class="btn-next-step">Claim your points and go back to <span>i</span>dea</a>
      </section>

    </main>
@endsection
<style>
  #animation_container {
	position:relative;
	margin:auto;
	left:0;right:0;
	top:0;bottom:0;
  }
</style>
@section('javascript')


<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/home.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("270CA3137B7C934AA34D8FD0EE66CD9E");
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
