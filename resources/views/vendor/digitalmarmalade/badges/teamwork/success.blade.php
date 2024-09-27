@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
onload="init()"
@endsection


@section('page')

<div class="points-banner">
    <div id="animation_container" style="width:550px; height:300px">
        <canvas id="canvas" width="550" height="300" style="position: absolute; display: block;"></canvas>
        <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:550px; height:300px; position: absolute; left: 0px; top: 0px; display: block;"></div>
    </div>
</div>

<main class="task-background">
    <article class="success-text">
        <h1 class="task-title">Well done!</h1>
        <div class="home-intro-text">
            <p class="home-intro-text-p staggered-entry">In this badge we explored how teamwork works and you've learnt about:</p>
            <ul class="home-intro-learning reset-list">
                <li class="staggered-entry">Team roles</li>
                <li class="staggered-entry">Team dynamics</li>
                <li class="staggered-entry">Teamwork</li>
            </ul>
            <p class="staggered-entry"><a href="{{$links['submit']}}"  class="btn">Claim your points and go back to iDEA.</a></p>
        </div>
    </article>
</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
    oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
</script>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/points-animation.js"></script>
  
  <script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	handleComplete();
}
function handleComplete() {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	exportRoot = new lib._10points();
	stage = new createjs.Stage(canvas);
	stage.addChild(exportRoot);	
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
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
		}
	}
	makeResponsive(true,'both',false,2);	
	fnStartAnimation();
}
</script>


@endsection