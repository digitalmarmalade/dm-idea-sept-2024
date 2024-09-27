@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<header class="step-lockup">
    <a target="_blank" href="https://idea.org.uk/">
     <img src="/badge-assets/promotions/_global/img/idea-logo.svg" alt="iDEA Inspiring Digital Enterprise Awards"/>
   </a>
   <p>Advertising Badge - Section 6 of 6</p>
</header>

<main>

    <div class="holder">
    <h1>Advertising quiz</h1>


        <p>Let's have a final advertising quiz.</p>

    <div class="quiz quiz--order quiz--final jsQuiz">
        <div class="quiz-intro">
            <h2>Question <span class="jsQuestionNumber">1</span> of 6</h2>
        </div>

        <div class="quiz-question jsQuestion1">
            <p class="js-whoops hide timeline-error" style="margin: 0 0 2rem;">Whoops, two wrong - start again!</p>

        <p class="quiz-the-question">Which of the following BEST defines advertising?</p>
        <p class="js-error hide timeline-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
        <ul class="quiz-options">
        <li><a href="#question2">The strategy of promoting goods and services on social media</a></li>
        <li><a href="#question2">The strategy of using television commercials and coupons to make people buy things</a></li>
        <li><a href="#question2" data-answer="true">The strategy of using a medium to gain public attention to a product or business</a></li>
        <li><a href="#question2">Any strategy that a company uses to get more people to buy their product</a></li>
        </ul>

        </div>
        <div class="quiz-question hide jsQuestion2" id="question2">

        <p class="quiz-the-question">Which of the following is a primary benefit of advertising online?</p>
            <p class="js-error hide timeline-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
        <ul class="quiz-options">
        <li><a href="#question3" data-answer="true" >Search engines and social media sites can analyze users' behaviors to put the most relevant advertisements in front of them</a></li>
        <li><a href="#question3">Advertising online is free to businesses</a></li>
        <li><a href="#question3">It is more cost effective to change ads online compared to ads in print or on television</a></li>
        <li><a href="#question3">Online advertisement is much more effective than advertising through any other medium because most consumers shop online</a></li>
        </ul>

        </div>
        <div class="quiz-question hide jsQuestion3" id="question3">

        <p class="quiz-the-question">Which of the following statements about television advertising is TRUE:</p>
        <p class="js-error hide timeline-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
        <ul class="quiz-options">
        <li><a href="#question4">Television advertising is no longer expensive because consumers now record their shows and skip commercials</a></li>
        <li><a href="#question4">Television has the dual benefits of offering companies a large audience at a low cost</a></li>
        <li><a href="#question4">Television advertising does not attract new customers but must be utilized to communicate with existing customers</a></li>
        <li><a href="#question4" data-answer="true">Television advertising is expensive but offers companies a large audience</a></li>
        </ul>

        </div>
        <div class="quiz-question hide jsQuestion4" id="question4">

        <p class="quiz-the-question">Which of the following is an example of digital advertising?</p>
            <p class="js-error hide timeline-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
        <ul class="quiz-options">
        <li><a href="#question5">Glossy magazine ads</a></li>
        <li><a href="#question5" data-answer="true">Embedded videos</a></li>
        <li><a href="#question5">Flyers distributed to the target market</a></li>
        <li><a href="#question5">Published directories, such as the Yellow Pages</a></li>
        </ul>

        </div>
        <div class="quiz-question hide jsQuestion5" id="question5">

        <p class="quiz-the-question">Which of the following is a reason to use newspapers for a media advertising campaign?</p>
            <p class="js-error hide timeline-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
        <ul class="quiz-options">
        <li><a href="#question6">Long time life of advertisement</a></li>
        <li><a href="#question6" data-answer="true">It's inexpensive</a></li>
        <li><a href="#question6">It's nationally targeted</a></li>
        <li><a href="#question6">Able to conduct ad stories</a></li>
        </ul>

        </div>

        <div class="quiz-question hide jsQuestion6" id="question6">

        <p class="quiz-the-question">Which of the following is a prime consideration when you are determining the best types of media to promote your product?</p>
        <p class="js-error hide timeline-error">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
        <ul class="quiz-options">
        <li><a href="#complete">The location of your business</a></li>
        <li><a href="#complete" data-answer="true">How the target market prefers to get their information about new products</a></li>
        <li><a href="#complete">The price of the product</a></li>
        <li><a href="#complete">The number of years you have been in business</a></li>
        </ul>

        </div>



    </div><!--/quiz-->



    </div><!--/holder-->

    <!-- <a class="btn btn--home jsNextStep hide" id="complete" href="success.php">Well done. Let's move on.</a> -->

    <a class="btn btn--home jsNextStep hide" id="complete" href="{{$links['next']}}">Well done. Let's move on.</a>

</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 6);
    oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
</script>

<script>

    var rightAnswers = 0,
        wrongAnswers = 0,
        currentQuestion = 1;
$( ".quiz-options:not('.disabled') a" ).click(function() {
    var answer = $(this).data('answer');
    $('.js-whoops').addClass('hide');
    if(answer === true) {
        rightAnswers++;
        wrongAnswers = 0;
        $(this).closest('.quiz-question').find('.js-error').addClass('hide');
        $(this).addClass('selected-right');
        $('.jsQuestion'+currentQuestion).addClass('disabled');
        currentQuestion++;
        if(currentQuestion === 7) {
            $('.jsCorrectAnswers').text(rightAnswers);
            $('.jsNextStep, .jsQuizSummary').removeClass('hide');
              oBadges.stepCompleted();
        } else {
            $('.jsQuestionNumber').text(currentQuestion);
            $('.jsQuestion'+currentQuestion).removeClass('hide');
            
        }
    } else {
        $(this).addClass('selected-wrong');
        $(this).closest('.quiz-question').find('.js-error').removeClass('hide');
        wrongAnswers++;
            if(wrongAnswers == 2) {
                rightAnswers = 0;
                wrongAnswers = 0;
                currentQuestion = 1;
                $('.js-error').addClass('hide');
                $('.quiz-question').removeClass('disabled').addClass('hide');
                $('.jsQuestion1').removeClass('hide');
                $('.selected-right').removeClass('selected-right');
                $('.selected-wrong').removeClass('selected-wrong');
                $('.js-whoops').removeClass('hide');
            }
        return false;
    }


});
</script>


@endsection
