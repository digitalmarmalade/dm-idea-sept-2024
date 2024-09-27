@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
    onLoad="init()"
@endsection

@section('page')
<?php
if(isset($_GET['progress']))
{
  $_SESSION['progress'] = $_GET['progress'];
}
if(isset($_SESSION['progress']))
{
  header('Location: /'.$url['slug'].'/step-'.$_SESSION['progress'].'.php');
}
?>
<main class="home">

    <header class="lockup">
        <a href="http://www.idea.org.uk">
          <img src="/badge-assets/projects/_global/img/idea-logo.svg" class="lockup-badge-type" alt="iDEA Inspiring Digital Enterprise Awards">
        </a>
      </header>

        <section class="home-animation">
          <div id="animation_container" style="background-color:rgba(69, 69, 69, 0.00);">
        		<canvas id="canvas" style="position: absolute; display: block; background-color:rgba(69, 69, 69, 0.00);"></canvas>
        		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px; display: block;">
        		</div>
        	</div>
        </section>
        <section>
          <div class="holder">

            <h1 class="staggered-entry">Advertising</h1>
            <p class="staggered-entry">How do you find out about new releases from your favourite band or that there's a sale on at your favourite shop? Advertising is central to lots of our daily behaviours and has, like many things, changed in recent years in response to changes in technology. This badge will look at this change, and how advertising hoardings, flyers, magazines and newspapers are now competing with online advertising.</p>

            <ul>
              <li class="staggered-entry">In this badge you will learn about:</li>
              <li class="staggered-entry">The History of Advertising</li>
              <li class="staggered-entry">The Purpose of Advertising</li>
              <li class="staggered-entry">Different Advertising Approaches</li>
              <li class="staggered-entry">Benefits & Limitations of Online Advertising</li>
            </ul>

          </div>


        </section>
        <a class="btn btn--home" href="{{$links['next']}}">Start Badge</a>

    </main>

@endsection

@section('javascript')


<script src="/badge-assets/promotions/_global/js/jquery.staggered-entry.js"></script>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/promotions/_global/js/home-animation-2.js"></script>
    <script>
      var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
      function init() {
      	canvas = document.getElementById("canvas");
      	anim_container = document.getElementById("animation_container");
      	dom_overlay_container = document.getElementById("dom_overlay_container");
      	var comp=AdobeAn.getComposition("365D66A1A557574D9870A11522CB4C13");
      	var lib=comp.getLibrary();
      	handleComplete({},comp);
      }
      function handleComplete(evt,comp) {
      	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
      	var lib=comp.getLibrary();
      	var ss=comp.getSpriteSheet();
      	exportRoot = new lib.homeanimation2();
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
