@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
  class="step-5" onload="init();"
@endsection

@section('page')

    <main>

<div class="page-header">

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
        </ol>
    </div>

    <div class="animation-holder" id="animationHolder">
        <div id="animation_container" class="animation-container" >
		<canvas id="canvas" style="position: absolute; display: block;"></canvas>
		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; position: absolute; left: 0px; top: 0px; display: block;">
		</div>
	</div>
    </div>
    <div class="page-header-triangles"></div>
</div><!--/page-header-->

<div class="holder intro-holder">
<h1>GDPR Principles</h1>
<p>The way you handle personal information must follow these 7 principles:</p>


</div>

<div class="principle-row">

    <div class="holder">
    <h2 class="staggered">Transparency</h2>
        <p class="staggered">Personal data must be processed in a lawful and transparent manner, ensuring fairness towards the individuals whose personal data you are processing.</p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">1</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">1</span>
    </div>

</div>
    <div class="principle-row">

    <div class="holder">
        <h2 class="staggered">Purpose Limitation</h2>
        <p class="staggered">You must have specific reasons for processing the data and you must highlight those purposes to individuals when collecting their personal data. The act of simply collecting data for no purpose is no longer permitted. </p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">2</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">2</span>
    </div>

</div>
    <div class="principle-row">

    <div class="holder">
        <h2 class="staggered">Data Minimisation</h2>
        <p class="staggered">You must only collect data related to fulfilling your specific reasons.</p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">3</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">3</span>
    </div>

</div>
    <div class="principle-row">

    <div class="holder">
        <h2 class="staggered">Accuracy</h2>
        <p class="staggered">You must ensure the accuracy of the data, and directly relate that to your specific reasons.</p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">4</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">4</span>
    </div>

</div>
    <div class="principle-row">

    <div class="holder">
        <h2 class="staggered">Storage Limitation</h2>
        <p class="staggered">The collected data should be stored for not longer than necessary to fulfil the purposes for which it was collected.</p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">5</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">5</span>
    </div>

</div>
    <div class="principle-row">

    <div class="holder">
        <h2 class="staggered">Integrity and Confidentiality</h2>
        <p class="staggered">Appropriate technical and organisational safeguards must be in place to ensure the security of the personal data, including protection against unauthorised or unlawful processing and against accidental loss, damage or destruction.</p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">6</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">6</span>
    </div>

</div>
    <div class="principle-row">

    <div class="holder">
        <h2 class="staggered">Accountability</h2>
        <p class="staggered">All organisations who process personal data must demonstrate <span data-title="Definition: the action or fact of complying with a wish or command."  class="tooltip">compliance</span> with each of the above Principles.</p>
        <span class="principle-number paroller" data-paroller-factor="0.3" data-paroller-type="foreground">7</span>
        <span class="principle-number-big paroller" data-paroller-factor="0.1" data-paroller-type="foreground">7</span>
    </div>

</div>




      <div class="principle-darken top-slant-1">
   <div class="holder">
    <p>ABC Limited has been audited to see how compliant it is with GDPR regulations. Below are a few of the steps the company has been advised to take. Which of the GDPR principles do these steps meet?</p>

    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>

    <div class="principle-question principle-question--first">
        <h2 class="principle-question-title">After gathering all information about the data that ABC holds and having prepared a data map, the organisation will have to undertake the formal process of confirming, documenting and filing the legal basis on which they collect personal data. </h2>
        <p>Select the two principles that apply</p>
        <ul class="principle-question-options">
            <li><a href="#q1Answer" data-answer="true">Transparency</a></li>
            <li><a href="#q1Answer" data-answer="true">Purpose Limitation</a></li>
            <li><a href="#q1Answer" data-answer="false">Data Minimisation</a></li>
            <li><a href="#q1Answer" data-answer="false">Accuracy</a></li>
            <li><a href="#q1Answer" data-answer="false">Storage Limitation</a></li>
            <li><a href="#q1Answer" data-answer="false">Integrity and Confidentiality</a></li>
            <li><a href="#q1Answer" data-answer="false">Accountability</a></li>
        </ul>
        <div id="q1Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>Correct</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

       <div class="principle-question hide">
        <h2 class="principle-question-title">ABC should only collect data it needs for a specific purpose. </h2>
        <p>Select the principle that applies</p>
        <ul class="principle-question-options">
            <li><a href="#q2Answer" data-answer="false">Transparency</a></li>
            <li><a href="#q2Answer" data-answer="false">Purpose Limitation</a></li>
            <li><a href="#q2Answer" data-answer="true">Data Minimisation</a></li>
            <li><a href="#q2Answer" data-answer="false">Accuracy</a></li>
            <li><a href="#q2Answer" data-answer="false">Storage Limitation</a></li>
            <li><a href="#q2Answer" data-answer="false">Integrity and Confidentiality</a></li>
            <li><a href="#q2Answer" data-answer="false">Accountability</a></li>
        </ul>
        <div id="q2Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>Correct</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

       <div class="principle-question hide">
        <h2 class="principle-question-title">ABC is required to ensure the process of capturing the data is robust and precludes a situation where data is corrupted or incorrectly recorded.</h2>
        <p>Select the two principles that apply</p>
        <ul class="principle-question-options">
            <li><a href="#q3Answer" data-answer="false">Transparency</a></li>
            <li><a href="#q3Answer" data-answer="false">Purpose Limitation</a></li>
            <li><a href="#q3Answer" data-answer="false">Data Minimisation</a></li>
            <li><a href="#q3Answer" data-answer="true">Accuracy</a></li>
            <li><a href="#q3Answer" data-answer="false">Storage Limitation</a></li>
            <li><a href="#q3Answer" data-answer="true">Integrity and Confidentiality</a></li>
            <li><a href="#q3Answer" data-answer="false">Accountability</a></li>
        </ul>
        <div id="q3Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>Correct</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

       <div class="principle-question hide">
        <h2 class="principle-question-title">ABC needs to specify the period of time that the organisation intends to hold specific elements of personal data, and the reasons behind those periods.</h2>
        <p>Select the principle that applies</p>
        <ul class="principle-question-options">
            <li><a href="#q4Answer" data-answer="false">Transparency</a></li>
            <li><a href="#q4Answer" data-answer="false">Purpose Limitation</a></li>
            <li><a href="#q4Answer" data-answer="false">Data Minimisation</a></li>
            <li><a href="#q4Answer" data-answer="false">Accuracy</a></li>
            <li><a href="#q4Answer" data-answer="true">Storage Limitation</a></li>
            <li><a href="#q4Answer" data-answer="false">Integrity and Confidentiality</a></li>
            <li><a href="#q4Answer" data-answer="false">Accountability</a></li>
        </ul>
        <div id="q4Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>Correct</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->













    </div>
    <div class="bottom-slant-2"></div>
</div>



<div class="success-row hide top-slant-1" id="successRow">

<div class="confirmation-tick">
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
</div>

<p>Well done!</p>


<p class="next-step-cta">
    <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn"><span class="btn__text">Next Step</span>
       <svg><use xlink:href="#iconRightArrow"></use></svg>
    </a>
</p>

</div>

</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
    oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
</script>

 <script src="/badge-assets/{{$url['slug']}}/js/jquery.paroller.min.js"></script>

<script>
    var correctQuiz = 0,
        wrongQuiz = 0;

        $(function () {
        $('.paroller').paroller();
        });



    $( ".principle-question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');



        if($(this).data('answer')===true) {

            var requiredRight = $(this).closest('.principle-question').find('a[data-answer="true"]').length,
                selectedRight = 0;

            $(this).addClass('selected');

            $(this).closest('.principle-question').find('a[data-answer="true"]').each(function( index ) {
                if($(this).hasClass('selected')) {
                    selectedRight++;
                }
            });

            console.log(selectedRight,requiredRight);

            if(selectedRight === requiredRight) {
            $(this).closest('.principle-question').addClass('disabled');
            $(this).closest('.principle-question').find('.correct').removeClass('hide');
            $(this).closest('.principle-question').find('.wrong').addClass('hide');
            $(this).closest('.principle-question').next('.principle-question').removeClass('hide');
            correctQuiz++;

            scrollTo(target);

            } else {
                return false;
            }


        } else {
            $(this).closest('.principle-question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.principle-question').addClass('hide').removeClass('disabled');
                $('.principle-question .selected').removeClass('selected');
                $('.principle-question .wrong').addClass('hide');
                $('.principle-question .correct').addClass('hide');
                $('.principle-question--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            }

        }
        if(correctQuiz === 4) {
            $('#successRow').removeClass('hide');
        }
    });

</script>
<script src="/badge-assets/{{$url['slug']}}/img/step-5/step-5.js?1528910729932"></script>
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
	exportRoot = new lib.step5();
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
	makeResponsive(true,'both',false,1);
	fnStartAnimation();
}
</script>
@endsection
