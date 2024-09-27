@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
    onLoad="init()"
@endsection

@section('page')

    <div class="cols">
      <div class="col col-1-step-5">
        <p class="step">Step 5 - Cyberbullying</p>
        <div class="holder">
          <h1 data-aos="fade-right" data-aos-delay="100">Cyberbullying</h1>
          <p data-aos="fade-right" data-aos-delay="200">One of the most challenging and negative aspects of social media is <span class="tooltip tooltip-fake-news" ><span class="tooltiptext">The use of electronic communication to bully a person, typically by sending messages of an intimidating or threatening nature.</span>cyberbullying</span>. Unfortunately some people can be unkind, rude, disrespectful and deliberately disruptive. If you are on the receiving end, it can be extremely upsetting and in some cases devastating.</p>
        </div>
        <div class="animation-wrapper">
          <div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:560px; height:630px">
        		<canvas id="canvas" width="560" height="630" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
        		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:560px; height:630px; position: absolute; left: 0px; top: 0px; display: block;">
        		</div>
        	</div>
        </div>
      </div>
      <div class="col col-2-step-5">
        <div class="holder">
            <h2 data-aos="fade-right" data-aos-delay="200"><span class="small" data-aos="fade-right" data-aos-delay="100">What if someone I know is</span>being bullied<span class="small" data-aos="fade-right" data-aos-delay="300">on Social Media</span></h2>
            <p data-aos="fade-right" data-aos-delay="200" style="margin-top: 20px; position: relative; z-index: 3;">Look out for the warning signs of <span class="tooltip" ><span class="tooltiptext tooltiptext-trolling">Posting inflammatory, extraneous, or off-topic messages in an online community with the purpose of provoking an emotional response or disrupting the normal on-topic discussion.</span>trolling</span> and <span class="tooltip" ><span class="tooltiptext tooltiptext-cyberbullying" style="left:50%;">The use of electronic communication to bully a person, typically by sending messages of an intimidating or threatening nature.</span>cyberbullying</span> so you can help yourself, your friends and family if you spot bad behaviour. If someone who is being bullied asks you to help them, reassure them that you are there to support them so they do not feel alone. It's also really important to help them document what is happening and report it.</p>

            <p data-aos="fade-right" data-aos-delay="200">These guidelines will help you if someone tries to bully you or anyone close to you.
            </p>
            <ul class="list-with-titles">
              <li>
                <p data-aos="fade-right" data-aos-delay="300" class="title">Don’t keep it a secret</p>
                <p data-aos="fade-right" data-aos-delay="400" class="description">If your friend needs additional support, encourage them to reach out to someone they trust to talk about the situation. If you’re worried about your friend’s safety, tell someone immediately.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="500" class="title">Reassure your friend they are not ALONE</p>
                <p data-aos="fade-right" data-aos-delay="600" class="description">Let your friend know that you want to help them handle this. Bullying can happen to anyone. It's easy to worry that somehow you are to blame if someone starts being mean, so it is important to share anxieties with people you trust. </p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="800" class="title">Look after YOURSELF so you can do a good job of looking after those you care about</p>
                <p data-aos="fade-right" data-aos-delay="900" class="description">It's the oxygen mask principle – if you were in an aeroplane in an emergency situation, the oxygen masks would come down from the ceiling. It would be important to put your own oxygen mask on before you help anyone else. It's the same thing supporting friends or family on social networks, make sure you are safe and model good behaviours online so that you can better help those around you.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="1000" class="title">Offer SUPPORt</p>
                <p data-aos="fade-right" data-aos-delay="1100" class="description">Ask your friend what you can do to support them, but don’t speak for your friend unless they ask you to.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="1200" class="title">Inform AUTHORITIES</p>
                <p data-aos="fade-right" data-aos-delay="1300" class="description">If you are worried anyone is in immediate danger, make sure you report what is happening to someone in authority.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="1400" class="title">FIND a way to avoid conflict</p>
                <p data-aos="fade-right" data-aos-delay="1500" class="description">Try to help your friend avoid <span class="tooltip" ><span class="tooltiptext" style="left:-55%;">Make or become more intense or serious.</span>escalating</span> the situation or acting aggressively.  Sometimes it is better to defuse a situation by choosing not to react or engage. Bullies are often just looking for a reaction, so not giving them one may discourage them. It is wise to avoid conflict online, and ensure you never post anything while feeling angry or emotionally fragile.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="1600" class="title">END the connection</p>
                <p data-aos="fade-right" data-aos-delay="1700" class="description">Remember whoever is being bullied can unfriend or block someone on social media if they are being unkind or aggressive. They might still try to tag you in their posts, but you have broken the direct link so they cannot directly message into your inbox.</p>
              </li>
            </ul>
            <p class="description">Let’s consider some key words from the tips above. Observing the first letter of each of these words in the list below, rearrange the order of the words to create an acronym to help you to remember how you can help yourself or others in a <span class="tooltip" ><span class="tooltiptext">The use of electronic communication to bully a person, typically by sending messages of an intimidating or threatening nature.</span>cyberbullying</span> situation.</p>
            <p class="hint"><b>Tip:</b> Think about protecting your safety, or staying safe.</p>
            <div class="quiz quiz--order jsQuiz">
                <ul id="sortable" class="quiz-reorder">
                  <li class="drag-option"  data-answer="T"><span>T</span><span>ake</span></li>
                  <li class="drag-option" data-answer="Y"><span>Y</span><span>ourself</span></li>
                  <li class="drag-option"  data-answer="A"><span>A</span><span>uthorities</span></li>
                  <li class="drag-option" data-answer="A"><span>A</span><span>lone</span></li>
                  <li class="drag-option" data-answer="E"><span>E</span><span>nd</span></li>
                  <li class="drag-option" data-answer="S"  ><span>S</span><span>upport</span></li>
                  <li class="drag-option" data-answer="S"  ><span>S</span><span>ecret</span></li>
                  <li  class="drag-option" data-answer="F"><span>F</span><span>ind</span></li>
                </ul>

                <div class="check-answers-wrapper">

                  <p><a href="#" class="btn check-answers">Check </a></p>
                  <p class="correct-answers"> Items in correct order: <span class="circle"><span class="jsCorrectAnswers"> 0</span>/8 </span></p>

                </div>

            </div>

            <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn jsNextStep hide">Continue</a>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
    console.log("completed");
</script>

<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-5-animation.js"></script>


<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("8949CAB1DAE76749B463F9FC7C8E9098");
	var lib=comp.getLibrary();
	handleComplete({},comp);
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	exportRoot = new lib.animation2();
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
<script
     src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
     integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
     crossorigin="anonymous">

</script>

<script>
/*!
 * jQuery UI Touch Punch 0.2.3
 *
 * Copyright 2011–2014, Dave Furfero
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * Depends:
 *  jquery.ui.widget.js
 *  jquery.ui.mouse.js
 */
!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
</script>

<script>


  $( function() {
	  var correctAnswers = 0;
    $( "#sortable" ).sortable({
      placeholder: "placeholder",
        stop: function() {
        correctAnswers = 0;
        $( ".drag-option" ).each(function( index ) {

            if('STAYSAFE'[index] === $(this).data('answer')) {
                correctAnswers++;
            }
        });

        $(".check-answers").click(function(event){
            event.preventDefault();
          $('.jsCorrectGauge').removeClass('correct-gauge--1').removeClass('correct-gauge--2').removeClass('correct-gauge--3').removeClass('correct-gauge--4').removeClass('correct-gauge--5').removeClass('correct-gauge--6').removeClass('correct-gauge--7').removeClass('correct-gauge--8').addClass('correct-gauge--'+correctAnswers)
          $('.jsCorrectAnswers').text(correctAnswers);
          if(correctAnswers === 8) {
            $('.jsNextStep').removeClass('hide');
            $('.check-answers').hide();
              $('.jsQuiz').addClass('correct');
              setTimeout(function(event){
                event.preventDefault();
                  oBadges.stepCompleted();
              }, 1000);

          }
        });
      }
    });

  $( "ul, li" ).disableSelection();
  });
</script>


@endsection
