@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="start-page" onload="init();"     
@endsection
        
@section('page')

<main class="start-page">   

<div class="splash-screen">
    <div class="start-copy start-copy--full-screen">    
    <h1><span class="small-words">Getting to grips with</span> <span class="big-letters">GDPR</span></h1>
    <a href="#badgeIntro" class="scroll-down"><svg><use xlink:href="#iconDownArrow"></use></svg></a>
    </div>
    <div class="start-graphic">
        <div id="animation_container">
		<canvas id="canvas" width="1000" height="800" style="position: absolute; display: block;"></canvas>
		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px; display: block;">
		</div>
	    </div>
    </div>
    <div class="bottom-slant-1"></div>
</div>
<div class="top-slant-2">
<div class="start-copy" id="badgeIntro">
<p class="staggered">Nearly all organisations deal with information that is described as 'personal data'. Many of us have heard of something called 'GDPR'. But how many of us understand what it is, and feel confident about <span data-title="Definition: meet specified standards" class="tooltip">complying</span> with it? 'GDPR' stands for 'General Data Protection Regulation'. </p>
<p class="staggered">In this badge you will:</p>
<div class="in-this-badge staggered">
<ul>
    <li>Get to grips with this critical piece of data protection legislation</li>
    <li>Understand what it is and why it is important</li>
    <li>Learn the main principles and how to apply them</li>
    <li>Discover how to tackle your data <span data-title="Definition: the action or fact of complying with a wish or command." class="tooltip">compliance</span> with confidence</li>
</ul>
</div>

<p class="start-page__cta staggered">
<a href="{{$links['next']}}" class="btn"><span class="btn__text">Let's get started</span>
   <svg><use xlink:href="#iconRightArrow"></use></svg>
   </a>
</p>

</div>
</div>

<div class="bottom-slant-2">

</div>

</main>

@endsection

@section('javascript')

<script src="/badge-assets/{{$url['slug']}}/img/start/Start.js?1528790213813"></script>

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
	exportRoot = new lib.Start();
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
	makeResponsive(true,'width',true,1);	
	fnStartAnimation();
}
</script>

@endsection