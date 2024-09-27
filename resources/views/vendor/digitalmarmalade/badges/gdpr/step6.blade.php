@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
  class="step-6" onload="init();"
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
            <li></li>
            <li class="current"></li>
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
<h1>Creating an online Privacy Policy</h1>
<p>Privacy Polices are a legal requirement of any organisation handling data. For most companies, the most efficient way to notify data subjects of your policy is through your company website but privacy policies may also be provided by email or hard copy. </p>
    <p>Under GDPR, business are obliged to notify individuals of what, how and why their personal data will be used and processed before collecting any personal data. If your organisation collects personal data on individuals, it needs a privacy policy on the company website. </p>


</div>

<div class="privacy-policy-holder">

    <div class="privacy-policy-tips">
    <h2 class="">How should I write my Privacy Policy?</h2>
    <p class="">Your policy needs to written using clear and plain language. It has to cover all the data collection aspects of your website, including analytics and tracking for example.</p>

    <h2 class="">What are the key points to ensure my Privacy Policy is GDPR compliant? </h2>
    <p class="">Before collecting any personal data, the following points should be covered in your Privacy Policy:</p>

    <ul class="">

        <li>Your company information, including full name, registered office details and business address</li>
        <li>Identity and contact details of the data controller and, where applicable, of the controller’s representative</li>
        <li>What information you are collecting and why</li>
        <li>How consent will be obtained</li>
        <li>How you will be using the information collected</li>
        <li>How long the personal data will be kept for</li>
        <li>Explanation for how complaints can be made and to whom</li>
        <li>The contact details of the Data Protection Officer, where applicable</li>
        <li>Information about export of the collected data</li>
    </ul>

    <h2 class="">Where must the Privacy Policy be displayed?</h2>
    <p class="">Your policy needs to be displayed in a prominent position on your website on every page - it should not be hidden away in sections such as ‘Contact Us’, for example.</p>
    </div>

    <div class="privacy-policy-quote paroller" data-paroller-factor="0.3" data-paroller-type="foreground">
        <p>your privacy policy has to cover all the data collection aspects of your website</p>
    </div>


</div>
 <div class="bottom-slant-2 bottom-slant-2--volcano"></div>
    <div class="volcano-row">




        <div class="privacy-policy-holder">

            <div class="privacy-policy-text">
            <h2 class="">What happens if my company’s policy is not compliant?</h2>
            <p class="">Regulatory authorities can take enforcement action against organisations whose privacy policy is not compliant. This might be conducting an audit or accessing your premises to ascertain how you are using individual’s personal data. </p>
<p>Where your policy is found to be non-compliant, the ICO, or your relevant authority, can make an order for you to bring your policy in line with GDPR. Lastly, proportionate fines can be issued.</p>
<p>Make sure you document any decisions you make on what to include and not include in your privacy policy so you can show your policy has carefully considered the personal data your business collects.</p>

        </div>

        <div class="privacy-policy-quote paroller" data-paroller-factor="0.3" data-paroller-type="foreground">
        <p>regulatory authorities can take enforcement action against organisations whose privacy policy is not compliant</p>
        </div>

        </div>


    </div>


<div class="privacy-quiz-row top-slant-1 top-slant-1--volcano">
   <div class="holder">
   <p>Take a look at the Privacy Policy examples below taken from <a href="https://ico.org.uk" target="_blank">ico.org.uk</a>.  For each of them, decide whether they are a good example or a bad example of a Privacy Policy</p>

    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>


    <div class="privacy-question privacy-question--first">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/q1.png" alt="" class="privacy-question-image" />
        <p>Is this a good or bad example of a Privacy Policy?</p>
        <ul class="privacy-question-options">
        <li><a class="privacy-question-good" href="#q1Answer" data-answer="true">Good</a></li>
        <li><a class="privacy-question-bad" href="#q1Answer" data-answer="false">Bad</a></li>
        </ul>
        <div id="q1Answer"></div>
        <div class="privacy-question-answer privacy-question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3 class="question-example-good">This is a good example!</h3>
            <p>It has simple language, and is well presented. There is a clear opportunity for the subject to agree to marketing and a space to give consensus for postal marketing by other companies. </p>
        </div>

        <div class="privacy-question-answer privacy-question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <h3 class="question-example-good">That's not right. This is a good example.</h3>
            <p>It has simple language, and is well presented. There is a clear opportunity for the subject to agree to marketing and a space to give consensus for postal marketing by other companies.</p>
            <p>If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/privacy-question-->

    <div class="privacy-question hide">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/q2.png" alt="" class="privacy-question-image" />
        <p>Is this a good or bad example of a Privacy Policy?</p>
        <ul class="privacy-question-options">
        <li><a class="privacy-question-good" href="#q2Answer" data-answer="false">Good</a></li>
        <li><a class="privacy-question-bad" href="#q2Answer" data-answer="true">Bad</a></li>
        </ul>
        <div id="q2Answer"></div>
        <div class="privacy-question-answer privacy-question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3 class="question-example-bad">This is a bad example!</h3>
            <p>The language is confusing  and the size of the font makes it difficult to read. The parts about asking for consent are generalised and it is bad practice to seek one consent for several type of processing; e-marketing, for example requires a specific opt-in consent, for example. </p>
        </div>

        <div class="privacy-question-answer privacy-question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <h3 class="question-example-bad">That's not right. This is a bad example.</h3>
            <p>The language is confusing  and the size of the font makes it difficult to read. The parts about asking for consent are generalised and it is bad practice to seek one consent for several type of processing; e-marketing, for example requires a specific opt-in consent, for example.</p>
            <p>If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/privacy-question-->

    <div class="privacy-question hide">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/q3.png" alt="" class="privacy-question-image" />
        <p>Is this a good or bad example of a Privacy Policy?</p>
        <ul class="privacy-question-options">
        <li><a class="privacy-question-good" href="#q3Answer" data-answer="false">Good</a></li>
        <li><a class="privacy-question-bad" href="#q3Answer" data-answer="true">Bad</a></li>
        </ul>
        <div id="q3Answer"></div>
        <div class="privacy-question-answer privacy-question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3 class="question-example-bad">This is a bad example!</h3>
            <p>It implies that is mandatory to give this information when in this case it is voluntary.</p>
        </div>

        <div class="privacy-question-answer privacy-question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <h3 class="question-example-bad">That's not right. This is a bad example.</h3>
            <p>It implies that is mandatory to give this information when in this case it is voluntary.</p>
            <p>If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/privacy-question-->

    <div class="privacy-question hide">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/q4.png" alt="" class="privacy-question-image" />
        <p>Is this a good or bad example of a Privacy Policy?</p>
        <ul class="privacy-question-options">
        <li><a class="privacy-question-good" href="#q4Answer" data-answer="true">Good</a></li>
        <li><a class="privacy-question-bad" href="#q4Answer" data-answer="false">Bad</a></li>
        </ul>
        <div id="q4Answer"></div>
        <div class="privacy-question-answer privacy-question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3 class="question-example-good">This is a good example!</h3>
            <p>It gives a clear explanation of the outcome of choosing not to provide the requested information.</p>
        </div>

        <div class="privacy-question-answer privacy-question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <h3 class="question-example-good">That's not right. This is a good example.</h3>
            <p>It gives a clear explanation of the outcome of choosing not to provide the requested information.</p>
            <p>If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/privacy-question-->

    <div class="privacy-question hide">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/q5.png" alt="" class="privacy-question-image" />
        <p>Is this a good or bad example of a Privacy Policy?</p>
        <ul class="privacy-question-options">
        <li><a class="privacy-question-good" href="#q5Answer" data-answer="false">Good</a></li>
        <li><a class="privacy-question-bad" href="#q5Answer" data-answer="true">Bad</a></li>
        </ul>
        <div id="q5Answer"></div>
        <div class="privacy-question-answer privacy-question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3 class="question-example-bad">This is a bad example!</h3>
            <p>It uses unnecessarily complicated language and the title uses an acronym that may not be familiar to the user.</p>
        </div>

        <div class="privacy-question-answer privacy-question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <h3 class="question-example-bad">That's not right. This is a bad example.</h3>
            <p>It uses unnecessarily complicated language and the title uses an acronym that may not be familiar to the user.</p>
            <p>If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/privacy-question-->

    <div class="privacy-question hide">
        <img src="/badge-assets/{{$url['slug']}}/img/step-6/q6.png" alt="" class="privacy-question-image" />
        <p>Is this a good or bad example of a Privacy Policy?</p>
        <ul class="privacy-question-options">
        <li><a class="privacy-question-good" href="#q6Answer" data-answer="true">Good</a></li>
        <li><a class="privacy-question-bad" href="#q6Answer" data-answer="false">Bad</a></li>
        </ul>
        <div id="q6Answer"></div>
        <div class="privacy-question-answer privacy-question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3 class="question-example-good">This is a good example!</h3>
            <p>It contains clear information about the identity of the organisation and clear links to relevant additional information. It also contains clear straight-forward guidance on how to access personal information with helpful privacy advice. </p>
        </div>

        <div class="privacy-question-answer privacy-question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <h3 class="question-example-good">That's not right. This is a good example.</h3>
            <p>It contains clear information about the identity of the organisation and clear links to relevant additional information. It also contains clear straight-forward guidance on how to access personal information with helpful privacy advice. </p>
        </div>

    </div><!--/privacy-question-->









    </div>
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
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
    oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
</script>

 <script src="/badge-assets/{{$url['slug']}}/js/jquery.paroller.min.js"></script>
<script>
    var correctQuiz = 0,
        wrongQuiz = 0;

        $(function () {
        $('.paroller').paroller();
        });

    $( ".privacy-question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');
        $(this).addClass('selected');
        $(this).closest('.privacy-question').addClass('disabled');

        if($(this).data('answer')===true) {

            $(this).closest('.privacy-question').find('.correct').removeClass('hide');
            $(this).closest('.privacy-question').find('.wrong').addClass('hide');
            $(this).closest('.privacy-question').next('.privacy-question').removeClass('hide');

            correctQuiz++;

            scrollTo(target);
        } else {
            $(this).closest('.privacy-question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.privacy-question').addClass('hide').removeClass('disabled');
                $('.privacy-question .selected').removeClass('selected');
                $('.privacy-question .wrong').addClass('hide');
                $('.privacy-question .correct').addClass('hide');
                $('.privacy-question--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            } else {
                scrollTo(target);
                $(this).closest('.privacy-question').next('.privacy-question').removeClass('hide');
            }

        }
        if(correctQuiz + wrongQuiz === 6) {
            $('#successRow').removeClass('hide');
        }
    });

</script>

<script src="/badge-assets/{{$url['slug']}}/img/step-6/step-6.js"></script>
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
	exportRoot = new lib.step6();
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
	makeResponsive(false,'both',false,1);
	fnStartAnimation();
}
</script>
@endsection
