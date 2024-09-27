@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="step-1" onload="init();"
@endsection

@section('page')

<main>

<div class="page-header">

    <div class="progress">
        <ol>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
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
<h1>What constitutes personal data?</h1>
<p>GDPR protects the personal data of EU residents. Personal data is data that can be used to identify living individuals.</p>

</div>

<div class="bottom-slant-2"></div>

<div class="personal-data-list-holder top-slant-1 paroller" data-paroller-factor="-0.1" data-paroller-type="background">
<div class="personal-data-list">
    <ul>
        <li class="personal-data-left staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/passport.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">Basic identity information such as name, email, address, and ID numbers.</span></li>
        <li class="personal-data-right staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/laptop.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">Web data such as location, IP address, cookies data, and RFID (radio-frequency identification) tags</span></li>
        <li class="personal-data-left staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/medical.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">Health, genetic, and biometric data</span></li>
        <li class="personal-data-right staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/earth.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">Racial or ethnic data</span></li>
        <li class="personal-data-left staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/speech.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">Political opinions</span></li>
        <li class="personal-data-right staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/dna.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">Sexual orientation</span></li>
        <li class="personal-data-left staggered"><span class="personal-data-icon"><img src="/badge-assets/{{$url['slug']}}/img/step-1/hall.svg" alt="" class="pop-in" /></span>
        <span class="personal-data-text">The commission or alleged commission of offences</span></li>
    </ul>


</div><!--/personal-data-list-->
<div class="bottom-slant-2 bottom-slant-2--flipped"></div>
</div>
<div class="personal-data-darken paroller top-slant-2" data-paroller-factor="-0.2" data-paroller-type="background">
   <div class="holder">
    <p>There are a few steps to go through to determine whether the data your company holds (digitally or in hard copy format) is personal data.</p>
    <p>Look at the following questions and identify whether the data described constitutes personal data. </p>

    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>

    <div class="question question--first personal-data-question">
        <h2 class="question-title">A living individual can be identified from the data, or, from the data and other information in your possession, or likely to come into your possession.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q1Answer" data-answer="true">Yes</a></li>
        <li><a href="#q1Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q1Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
            <p>An individual is 'identified' if you have distinguished that individual from other members of a group. In most cases an individual’s name together with some other information will be sufficient to identify them. Simply because you do not know the name of an individual does not mean you cannot identify that individual. The starting point might be to look at what means are available to identify an individual and the extent to which such means are readily available to you. </p>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
        <h2 class="question-title">The data ‘relates to’ an identifiable living individual, whether in personal or family life, business or profession. This data identifies an individual, even without a name associated with it, or is processed to learn or record something about that individual, or the processing of that information has an impact upon that individual.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q2Answer" data-answer="true">Yes</a></li>
        <li><a href="#q2Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q2Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
        <h2 class="question-title">The data is ‘obviously about’ a particular individual. Data ‘obviously about’ an individual will include their medical history, criminal record, record of their work or their achievements in a sporting activity. Data that is not ‘obviously about’ a particular individual may include information about their activities.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q3Answer" data-answer="true">Yes</a></li>
        <li><a href="#q3Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q3Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
        <h2 class="question-title">The data is ‘linked to’ an individual so that it provides particular information about that individual.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q4Answer" data-answer="true">Yes</a></li>
        <li><a href="#q4Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q4Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
        <h2 class="question-title">The data is used, or is to be used, to inform or influence actions or decisions affecting an identifiable individual.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q5Answer" data-answer="true">Yes</a></li>
        <li><a href="#q5Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q5Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
    <h2 class="question-title">The data has <span class="tooltip" data-title="Definition: (of data or a written work) dealing with a particular person's life">biographical</span> significance in relation to the individual. When considering ‘biographical significance’, what is important is whether the data goes beyond recording the individual’s casual connection with a matter or event which has no personal connotations for him.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q6Answer" data-answer="true">Yes</a></li>
        <li><a href="#q6Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q6Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
        <h2 class="question-title">The data focuses or concentrates on the individual as its central theme rather than on some other person, or some object, transaction or event.  For Example: information as to the number of products produced by a machine in a week could be used, either to access the efficiency of the machine, or it could be used to access the productivity of the individual operating the machine.</h2>
        <p>Is this personal data?</p>
        <ul class="question-options">
        <li><a href="#q7Answer" data-answer="true">Yes</a></li>
        <li><a href="#q7Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q7Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->

    <div class="question personal-data-question hide">
        <h2 class="question-title">The data impacts or has the potential to impact on an individual, whether in a personal, family, business or professional capacity.</h2>
        <ul class="question-options">
        <li><a href="#q8Answer" data-answer="true">Yes</a></li>
        <li><a href="#q8Answer" data-answer="false">No</a></li>
        </ul>
        <div id="q8Answer"></div>
        <div class="question-answer question-answer--right correct hide">
            <div class="confirmation-tick">
                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
            </div>
            <h3>This is considered personal data.</h3>
        </div>

        <div class="question-answer question-answer--wrong wrong hide">
            <div class="failed">
            <svg><use xlink:href="#iconCross"></use></svg>
            </div>
            <p>Hmmm. That's not right. This <i>is</i> considered personal data. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
        </div>

    </div><!--/question-->







    </div>
    <div class="bottom-slant-2"></div>
</div>

<div class="success-row top-slant-1 hide" id="successRow">

<div class="confirmation-tick">
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
</div>

<p>Well done.</p>
<p>From this you can see that any data that can be used, in any way, to identify an individual is considered personal data.</p>
<p>Even if the data is not usually processed to provide information about an individual, if there is a reasonable chance that the data will be processed for that purpose, the data will be considered personal data.</p>


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
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

<script src="/badge-assets/{{$url['slug']}}/js/jquery.paroller.min.js"></script>

<script>
    var correctQuiz = 0,
        wrongQuiz = 0;
        $(function () {
        $('.paroller').paroller();
        });


    $( ".question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');
        $(this).addClass('selected');
        $(this).closest('.question').addClass('disabled');

        if($(this).data('answer')===true) {

            $(this).closest('.question').find('.correct').removeClass('hide');
            $(this).closest('.question').find('.wrong').addClass('hide');
            $(this).closest('.question').next('.question').removeClass('hide');

            correctQuiz++;

            scrollTo(target);
        } else {
            $(this).closest('.question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.question').addClass('hide').removeClass('disabled');
                $('.question .selected').removeClass('selected');
                $('.question .wrong').addClass('hide');
                $('.question .correct').addClass('hide');
                $('.question--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            } else {
                scrollTo(target);
                $(this).closest('.question').next('.question').removeClass('hide');
            }

        }
        if(correctQuiz + wrongQuiz === 8) {
            $('#successRow').removeClass('hide');
        }
    });

</script>

<script src="/badge-assets/{{$url['slug']}}/img/step-1/Step-1.js"></script>
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
	exportRoot = new lib.Step1();
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
