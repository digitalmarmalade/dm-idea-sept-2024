@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
    onLoad="init()"      
@endsection
        
@section('page')

<style>
	html { overflow-x: hidden; }
</style>

<main>
    <div class="animation-container">
        <div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:1024px; height:500px">
            <canvas id="canvas" width="1024" height="500" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
            <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1024px; height:500px; position: absolute; left: 0px; top: 0px; display: block;">
            </div>
        </div>
    </div>
    <div class="home-pattern">    
        <div class="home-intro-text">
            <h1>Teamwork</h1>
            <p class="home-intro-text-p staggered-entry">How do teams work effectively? How do you work well in a team? In this badge we explore how teamwork works.</p>
            <p class="home-intro-text-p staggered-entry">In this badge you will learn about:</p>
            <ul class="home-intro-learning reset-list">
                <li class="staggered-entry">Team roles</li>
                <li class="staggered-entry">Team dynamics</li>
                <li class="staggered-entry">Teamwork</li>
            </ul>
            <p class="home-cta staggered-entry"><a href="{{$links['next']}}" class="btn">Get started</a></p>
        </div>
    </div>
</main>      

@endsection

@section('javascript')

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/teamwork-animation.js?1500454658979"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/jquery.staggered-entry.js"></script>
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
	exportRoot = new lib.TeamworkAnimation();
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