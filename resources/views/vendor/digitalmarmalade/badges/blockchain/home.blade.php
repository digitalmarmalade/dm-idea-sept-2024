@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="home">
      <section class="top grad-blue">

        <div id="animation_container">
          <canvas id="canvas" width="1366" height="800" style="position: absolute; display: block;"></canvas>
          <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1366px; height:800px; position: absolute; left: 0px; top: 0px; display: block;">
          </div>
        </div>

        <div class="holder">
          <h1 data-aos="fade-right"><span data-aos="fade-right" data-aos-delay="100" class="step">The secret world of the</span>Blockchain</h1>
        </div>
        <a href="#bottom" class="arrow-down">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/arrow-down.svg" />
        </a>
      </section>
      <section id="bottom" class="bottom grad-yellow">
        <div class="holder">
          <div>
            <p data-aos="fade-right">Suddenly, blockchain is everywhere, but what does it mean?</p>
            <p data-aos="fade-right" data-aos-delay="100">How does it work? What does it do?</p>
            <p data-aos="fade-right" data-aos-delay="200">Blockchain technology is best known for creating and supporting cryptocurrencies, most notably Bitcoin – but that is only the start!</p>
            <p data-aos="fade-right" data-aos-delay="300">As blockchain tech evolves it could end up changing all aspects of your life – from healthcare to politics.</p>
          </div>
          <div>
            <p data-aos="fade-right" data-aos-delay="400">With that in mind, in this badge you will:</p>
            <ul class="list">
              <li data-aos="fade-right" data-aos-delay="500">Find out what blockchains are and how they work</li>
              <li data-aos="fade-right" data-aos-delay="600">Learn about different cryptocurrencies</li>
              <li data-aos="fade-right" data-aos-delay="700">Discover the potential of blockchain technology</li>
              <li data-aos="fade-right" data-aos-delay="800">Get a downloadable blockchain and cryptocurrency Jargon Buster</li>
            </ul>
            <a class="button" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="fade-up" data-aos-delay="900" >
              <span >
                <img src="/badge-assets/{{$url['slug']}}/_global/img/btn-next.png" />
                <span class="btn btn-next-step">Start Badge</span>
              </span>
            </a>
          </div>
        </div>
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
	var comp=AdobeAn.getComposition("A3917B7931D3F04B9B4E8D36FC124581");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
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
	makeResponsive(true,'both',true,1);
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>
@endsection
