@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
onload="init();"
@endsection

<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/animation--intro.js"></script>
<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("4F6713264CA7409E916950E057010066");
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
	exportRoot = new lib.Untitled1();
	stage = new lib.Stage(canvas);
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.framerate = lib.properties.fps;
		createjs.Ticker.addEventListener("tick", stage);
	}
	//Code to support hidpi screens and responsive scaling.
	AdobeAn.makeResponsive(false,'both',false,1,[canvas,anim_container,dom_overlay_container]);
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>


@section('page')

	<div class="holder holder--animation" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="100">
	  <div id="animation_container" >
	    <canvas id="canvas"></canvas>
	    <div id="dom_overlay_container"></div>
	  </div>
	</div>
  <main>

  <section class='flex flex--center flex--column'>
   <div class='holder'>

    <h1>
      <span class="visuallyhidden">Problem solving with AI</span>
    </h1>





    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <div class="col" >
        <p>Artificial Intelligence is a powerful technology that generates both excitement and concern, made famous in books and movies with robots that take over the world and driverless cars flying through futuristic cities. But what is AI, exactly, and could AI already be a part of your everyday life without you realising it?</p>
      </div>
      <div class="col">
        <p>What kind of problems can we solve with AI and where are AI solutions appropriate? Can we find and use AI solutions ourselves to solve problems within our communities, cities, countries and in the world? The answer is yes and we will take you through a fascinating real-life case study in Korea that demonstrates just that!</p>

      </div>
    </div>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">In this badge you will:</p>


    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
      <li class='box flex flex--center'><strong>Learn about Artificial Intelligence (AI) and the 3 domains of AI</strong></li>
      <li class='box flex flex--center'><strong>Explore how AI is used in our daily lives</strong></li>
      <li class='box flex flex--center'><strong>Learn how to identify where AI solutions would be appropriate</strong></li>
      <li class='box flex flex--center'><strong>Determine how AI can be used with a particular business or activity</strong></li>
      <li class='box flex flex--center'><strong>Discover ways to identify problems you could solve with AI</strong></li>
    </ul>

    <a class="btn btn--yellow inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400" data-aos-anchor-placement="bottom-bottom">Let&rsquo;s begin!</a>


  </div>
	</section>
	<section>
	  <div class="holder">

	    @include('vendor.digitalmarmalade.badges.what-is-ai.disclaimer')

	  </div>
	</section>
</main>



@endsection
@section('javascript')

@endsection
