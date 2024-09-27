@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
 class="step-4" onload="init();"
@endsection

@section('page')

     <main>

<div class="page-header">

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
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
<h1>What are the rights of Data Subjects?</h1>
<p>GDPR grants people, in their capacities as consumers, citizens and so forth a range of specific data subject rights they can exercise under particular conditions.</p>

    <div class="dont-forget">
        <div class="dont-forget-bulb">
            <img src="/badge-assets/{{$url['slug']}}/img/step-4/bulb.png" alt="" />
        </div>
        <h2>Don't forget</h2>
        <p>Anyone using goods and services in the EU is a Data Subject.</p>
    </div>

</div>
   <div class="bottom-slant-2"></div>

    <div class="rights-row">
        <div class="holder">
        <h2>Right of Data Breach Notification</h2>
        <p>In case of any <span data-title="Definition: unauthorised people having access to restricted data" class="tooltip">data breach</span> that is likely to result in unauthorised use and distribution of data, the Data Controllers will have to notify Data Subjects about the breach within 72 hours of becoming aware of the same.</p>
        <p>Similarly, Data Processors will have to inform Data Controllers about the breach within the time frame.</p>
        </div>
    </div>

    <div class="rights-row">
        <div class="holder">
        <h2>Right to Access</h2>
        <p>GDPR gives Data Subjects the right to get information about how, where and for what purpose their personal data is being processed.</p>
        </div>
    </div>

    <div class="rights-row">
        <div class="holder">
        <h2>Right to be Forgotten</h2>
        <p>Also known as Data <span data-title="Definition: the removal of writing, recorded material, or data" class="tooltip">Erasure</span>, the right to be forgotten entitles the Data Subject to have his/her personal data deleted from the logs of Data Controllers. The right to be forgotten also enables them to halt or cease further distribution and use of the data by third parties.</p>
        </div>
    </div>

    <div class="rights-row">
        <div class="holder">
        <h2>Right to Data Portability</h2>
        <p>GDPR introduces data portability  —  the right for a Data Subject to receive the personal data concerning them, which they have previously provided in a commonly used and machine-readable format and have the right to transmit that data to another Controller.</p>
        <p>This essentially means that if you want to make a switch from one service provider to another, the former service provider should give you the complete data in a machine-readable format which can be used to integrate with the new service provider.</p>
        </div>
    </div>

    <div class="rights-row">
        <div class="holder">
        <h2>Right to Restrict Processing</h2>
        <p>Data subjects have the right to restrict the processing of personal data where:</p>
            <ul>
                <li>they have contested its accuracy;</li>
                <li>they have objected to the processing and you are considering whether you have a legitimate ground which overrides this;</li>
                <li>processing is unlawful;</li>
                <li>a business no longer needs the data but the data subject requires it to establish, exercise or defend a legal claim.</li>
            </ul>
<p>If a business has disclosed the personal data to third parties, then the business must inform them about the erasure of the personal data.</p>
        </div>
    </div>

    <div class="rights-row">
        <div class="holder">
        <h2>Right to Object</h2>
        <p>Data subjects have the right to object to:</p>
            <ul>
                <li>processing based on legitimate interests, the performance of a task in the public interest or the exercise of official authority (including profiling);</li>
                <li>direct marketing (including profiling); and processing for scientific/historic research or statistics.</li>
            </ul>
<p>Businesses must inform data subjects of their right to object as soon as possible. Where the data subject objects to direct marketing you must do so immediately. There are no exemptions or grounds to refuse. Where a data subject otherwise objects to you processing their personal data then you must comply with this request unless you can demonstrate compelling, legitimate grounds to continue processing or that the processing is for the establishment, exercise or defence of legal claims.</p>
        </div>
        <div class="bottom-slant-2"></div>
    </div>



    <div class="rights-quiz-darken top-slant-1 paroller" data-paroller-factor="-0.2" data-paroller-type="background">
   <div class="holder">
    <p>Look at the following statements and identify which right is being exercised.</p>

    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>

    <div class="rights-question rights-question--first">
        <h2 class="rights-question-title">The right to have your personal data removed from the Data Controllers list and from the list of any third parties to whom the data has been passed.</h2>
        <p>Which right is being exercised?</p>
        <ul class="right-question-options">
        <li><a href="#q1Answer" data-answer="false">Right of Data Breach Notification</a></li>
        <li><a href="#q1Answer" data-answer="false">Right to Access</a></li>
        <li><a href="#q1Answer" data-answer="true">Right to Be Forgotten</a></li>
        <li><a href="#q1Answer" data-answer="false">Right to Data Portability</a></li>
        <li><a href="#q1Answer" data-answer="false">Right to Restrict Processsing</a></li>
        <li><a href="#q1Answer" data-answer="false">Right to Object</a></li>
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

       <div class="rights-question hide">
        <h2 class="rights-question-title">The right to be informed about how, where and for what purpose your personal data is being processed.</h2>
        <p>Which right is being exercised?</p>
        <ul class="right-question-options">
        <li><a href="#q2Answer" data-answer="false">Right of Data Breach Notification</a></li>
        <li><a href="#q2Answer" data-answer="true">Right to Access</a></li>
        <li><a href="#q2Answer" data-answer="false">Right to Be Forgotten</a></li>
        <li><a href="#q2Answer" data-answer="false">Right to Data Portability</a></li>
        <li><a href="#q2Answer" data-answer="false">Right to Restrict Processsing</a></li>
        <li><a href="#q2Answer" data-answer="false">Right to Object</a></li>
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

       <div class="rights-question hide">
        <h2 class="rights-question-title">The right to be informed about unauthorised use and/or distribution of data.</h2>
        <p>Which right is being exercised?</p>
        <ul class="right-question-options">
        <li><a href="#q3Answer" data-answer="true">Right of Data Breach Notification</a></li>
        <li><a href="#q3Answer" data-answer="false">Right to Access</a></li>
        <li><a href="#q3Answer" data-answer="false">Right to Be Forgotten</a></li>
        <li><a href="#q3Answer" data-answer="false">Right to Data Portability</a></li>
        <li><a href="#q3Answer" data-answer="false">Right to Restrict Processsing</a></li>
        <li><a href="#q3Answer" data-answer="false">Right to Object</a></li>
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











    </div>
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
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
    oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');
</script>
 <script src="/badge-assets/{{$url['slug']}}/js/jquery.paroller.min.js"></script>

<script>
    var correctQuiz = 0,
        wrongQuiz = 0;
        $(function () {
        $('.paroller').paroller();
        });





    $( ".rights-question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');



        if($(this).data('answer')===true) {
            $(this).addClass('selected');
            $(this).closest('.rights-question').addClass('disabled');
            $(this).closest('.rights-question').find('.correct').removeClass('hide');
            $(this).closest('.rights-question').find('.wrong').addClass('hide');
            $(this).closest('.rights-question').next('.rights-question').removeClass('hide');

            correctQuiz++;

            scrollTo(target);
        } else {
            $(this).closest('.rights-question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.rights-question').addClass('hide').removeClass('disabled');
                $('.rights-question .selected').removeClass('selected');
                $('.rights-question .wrong').addClass('hide');
                $('.rights-question .correct').addClass('hide');
                $('.rights-question--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            }

        }
        if(correctQuiz === 3) {
            $('#successRow').removeClass('hide');
        }
    });

</script>
<script src="/badge-assets/{{$url['slug']}}/img/step-4/step-4.js"></script>
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
	exportRoot = new lib.step4();
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
