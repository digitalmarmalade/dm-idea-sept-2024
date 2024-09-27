@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
 class="step-3" onload="init();"
@endsection

@section('page')
<main>

<div class="page-header">

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li class="current"></li>
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
<h1>Who is involved in GDPR compliance?</h1>
<p>GDPR has created a number of new roles or new terms for existing roles.</p>
</div>
<div class="holder">
<div class="gdpr-role staggered">
    <img src="/badge-assets/{{$url['slug']}}/img/step-3/subjects.png" alt="" />
<h2>Data Subject</h2>
<p>The citizens of the EU using goods and services provided by the data controllers.</p>
</div>

<div class="gdpr-role staggered">
    <img src="/badge-assets/{{$url['slug']}}/img/step-3/controllers.png" alt="" />
<h2>Data Controller</h2>
<p>Decides the purpose and methods of processing personal data. They decide what should be collected and how it should be collected.</p>
</div>

<div class="gdpr-role staggered">
    <img src="/badge-assets/{{$url['slug']}}/img/step-3/processor.png" alt="" />
<h2>Data Processor</h2>
<p>Responsible for directly processing personal data based on the instructions of data controllers. This could include third parties or subcontractors. </p>
</div>

    <p>To take a chain of gymnasiums as an example. The members of the gym are Data Subjects. The company that owns the gymnasiums decides what data it needs to run its business and how this should be collected – they are the Data Controllers. The web developers who capture the data at the owners behest are the Data Processors.</p>
<p>In addition, some businesses have further requirements&hellip;</p>

    <div class="gdpr-role staggered">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/officer.png" alt="" class="officer" />
<h2>Data Protection Officers (DPO)</h2>
<p>GDPR introduces a duty for you to appoint a data protection officer (DPO) if your business carries out certain types of processing activities.</p>

<p>DPOs must be appointed If your business is any of the following:</p>
        <ol>

            <li>Public authorities</li>

            <li>Organisations that engage in large-scale systematic monitoring</li>

            <li>Organisations that engage in large scale processing of sensitive personal data</li>
        </ol>
<p>If your organisation doesn’t fall into one of these categories, then you do not need to appoint a DPO.</p>


</div>

    <h2 class="staggered">Who enforces GDPR?</h2>

    <div class="ico staggered">
    <img src="/badge-assets/{{$url['slug']}}/img/step-3/ico.png" alt="" />
<h2>The Information Commissioner’s Office (ICO)</h2>
<p>In the UK, the Information Commissioner's Office (ICO) is responsible for enforcing the GDPR laws. The ICO has the power to conduct criminal investigations and issue fines. It is also provides organisations guidance about how to comply with GDPR.</p>
</div>



</div>
    <div class="bottom-slant-2 bottom-slant-2--flipped"></div>

    <div class="roles-quiz-row question-row question-row--first">


<div class="holder">

    <p>Can you match the role with the description? </p>


    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>

<div class="role-question">

<p class="role-question-description">Decides what and how data should be collected. Responsible for ensuring only pertinent information is stored and associated with the individual.</p>

<p>Who is this describing?</p>
<ul class="role-question-options">
    <li><a href="#q1Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/subjects.png" alt="" />
        Data Subject</a></li>
    <li><a href="#q1Answer" data-answer="true">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/controllers.png" alt="" />
        Data Controller</a></li>
    <li><a href="#q1Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/processor.png" alt="" />
        Data Processor</a></li>
    <li><a href="#q1Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/officer.png" alt="" class="officer" />
        Data Protection Officer</a></li>
    <li><a href="#q1Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/ico.png" alt="" />
        The ICO</a></li>
</ul>

<div id="q1Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2"></div>
</div>


<div class="roles-quiz-row question-row hide">


<div class="holder">


<div class="role-question">

<p class="role-question-description">An individual, team or company, possibly subcontracted that's responsible for processing personal data based on the instructions of Data Controllers.</p>

<p>Who is this describing?</p>
<ul class="role-question-options">
    <li><a href="#q2Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/subjects.png" alt="" />
        Data Subject</a></li>
    <li><a href="#q2Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/controllers.png" alt="" />
        Data Controller</a></li>
    <li><a href="#q2Answer" data-answer="true">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/processor.png" alt="" />
        Data Processor</a></li>
    <li><a href="#q2Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/officer.png" alt="" class="officer" />
        Data Protection Officer</a></li>
    <li><a href="#q2Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/ico.png" alt="" />
        The ICO</a></li>
</ul>

<div id="q2Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2 bottom-slant-2--flipped"></div>
</div>


    <div class="roles-quiz-row question-row hide">


<div class="holder">


<div class="role-question">

<p class="role-question-description">A citizen of the EU using services that may collect data.</p>

<p>Who is this describing?</p>
<ul class="role-question-options">
    <li><a href="#q3Answer" data-answer="true">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/subjects.png" alt="" />
        Data Subject</a></li>
    <li><a href="#q3Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/controllers.png" alt="" />
        Data Controller</a></li>
    <li><a href="#q3Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/processor.png" alt="" />
        Data Processor</a></li>
    <li><a href="#q3Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/officer.png" alt="" class="officer" />
        Data Protection Officer</a></li>
    <li><a href="#q3Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/ico.png" alt="" />
        The ICO</a></li>
</ul>

<div id="q3Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2"></div>
</div>

    <div class="roles-quiz-row question-row hide">


<div class="holder">


<div class="role-question">

<p class="role-question-description">Facilitates the smooth handling of data protection in organisations that meet certain requirements.</p>

<p>Who is this describing?</p>
<ul class="role-question-options">
    <li><a href="#q4Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/subjects.png" alt="" />
        Data Subject</a></li>
    <li><a href="#q4Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/controllers.png" alt="" />
        Data Controller</a></li>
    <li><a href="#q4Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/processor.png" alt="" />
        Data Processor</a></li>
    <li><a href="#q4Answer" data-answer="true">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/officer.png" alt="" class="officer" />
        Data Protection Officer</a></li>
    <li><a href="#q4Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/ico.png" alt="" />
        The ICO</a></li>
</ul>

<div id="q4Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2 bottom-slant-2--flipped"></div>
</div>

        <div class="roles-quiz-row question-row hide">


<div class="holder">


<div class="role-question">

<p class="role-question-description">Responsible for GDPR laws.</p>

<p>Who is this describing?</p>
<ul class="role-question-options">
    <li><a href="#q5Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/subjects.png" alt="" />
        Data Subject</a></li>
    <li><a href="#q5Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/controllers.png" alt="" />
        Data Controller</a></li>
    <li><a href="#q5Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/processor.png" alt="" />
        Data Processor</a></li>
    <li><a href="#q5Answer" data-answer="false">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/officer.png" alt="" class="officer" />
        Data Protection Officer</a></li>
    <li><a href="#q5Answer" data-answer="true">
        <img src="/badge-assets/{{$url['slug']}}/img/step-3/ico.png" alt="" />
        The ICO</a></li>
</ul>

<div id="q5Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>Correct!</h3>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmmm. That's not right. If you get one more wrong, you’ll have to start again. If you need a recap, scroll to the top of the page to read again about different types of roles involved around GDPR.</p>
</div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2"></div>
</div>


<div class="success-row top-slant-1 hide" id="successRow">

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
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
    oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
</script>



<script>
    var correctQuiz = 0,
        wrongQuiz = 0;



    $( ".role-question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');


        if($(this).data('answer')===true) {
            $(this).closest('li').addClass('selected');
            $(this).closest('.role-question').addClass('disabled');
            $(this).closest('.role-question').find('.correct').removeClass('hide');
            $(this).closest('.role-question').find('.wrong').addClass('hide');
            $(this).closest('.question-row').next('.question-row').removeClass('hide');

            correctQuiz++;

            scrollTo(target);
        } else {
            $(this).closest('.role-question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.question-row').addClass('hide')
                $('.role-question').removeClass('disabled');
                $('.role-question .selected').removeClass('selected');
                $('.role-question .wrong').addClass('hide');
                $('.role-question .correct').addClass('hide');
                $('.question-row--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            }

        }
        if(correctQuiz === 5) {
            $('#successRow').removeClass('hide');
        }
    });

</script>
<script src="/badge-assets/{{$url['slug']}}/img/step-3/step-3.js?1528905494861"></script>
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
	exportRoot = new lib.step3();
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
