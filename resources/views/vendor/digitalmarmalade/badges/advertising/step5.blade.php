@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<header class="step-lockup">
    <a target="_blank" href="https://idea.org.uk/">
     <img src="/badge-assets/promotions/_global/img/idea-logo.svg" alt="iDEA Inspiring Digital Enterprise Awards"/>
   </a>
   <p>Advertising Badge - Section 5 of 6</p>
</header>

<main class="step-5">


      <div class="holder">
      <h1>Actions tracking</h1>

      <div class="columns">

          <div class="column">

          <img src="/badge-assets/promotions/_global/img/step-5/geo.png" alt="" class="col__image" />

          <h2 class="actions-heading">Geo targeting</h2>

          <p>The method of determining the geolocation of a website visitor and delivering different content to that visitor based on his or her location, such as country, city, postcode, organization, IP address, ISP or other criteria.</p>

          </div>

          <div class="column">

          <img src="/badge-assets/promotions/_global/img/step-5/email.png" alt="" class="col__image" />

          <h2 class="actions-heading">Email advertising</h2>

          <p>Ad copy comprising an entire email or a portion of an email message. Email marketing may be unsolicited, in which case the sender may give the recipient an option to opt out of future emails, or it may be sent with the recipient's prior consent (opt-in).</p>

          </div>

      </div><!--/columns-->




      </div><!--/holder-->

      <div class="tint-strip">

      <div class="holder">

      <h2 class="actions-heading staggered-entry">Behavioural Targeting</h2>

      <div class="columns columns--align-left">

      <div class="column staggered-entry">

      <p>Behavioral targeting has emerged as one of the main technologies used to increase the efficiency and profits of digital advertisements, as media providers are able to provide individual users with highly relevant advertisements. </p>

      <p>Based on the theory that properly targeted ads will fetch more consumer interest, the publisher (or seller) can charge a premium for these ads over random advertising or ads based on the context of a site.</p>

      <p>When a consumer visits a website, the pages they visit, the amount of time they view each page, the links they click on, the searches they make, and the things that they interact with, allow sites to collect that data, and other factors, to create a 'profile' that links to that visitor's web browser. </p>

      <p>As a result, site publishers can use this data to create defined audience segments based upon visitors that have similar profiles.</p>

          </div>

          <div class="column staggered-entry">

      <p>When visitors return to a specific site or a network of sites using the same web browser, those profiles can be used to allow advertisers to position their online ads on the screen and in front of those visitors who exhibit a greater level of interest and intent for the products and services being offered. </p>

      <p>On the activity below, match the online behaviour with its most appropriate targeted advert.</p>

      <img src="/badge-assets/promotions/_global/img/step-5/behaviour.png" alt="" class="col__image col__image--bleed-bottom">

          </div>
          </div><!--/columns-->




      </div><!--/holder-->

      </div><!--/tint-strip-->

      <div class="holder staggered-entry">

          <div class="quiz quiz--order jsQuiz">
          <div class="quiz-intro">
              <h2>On the task below, click to select the target advert that best matches each of the online behaviours:</h2>

          </div>

          <div class="picture-quiz jsQuestion1">

            <div class="browser-window">
                <img src="/badge-assets/promotions/_global/img/step-5/behaviour-1.png" alt="" />
            </div>

            <ul class="picture-quiz-options">
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/scooter.png" alt="" /></a></li>
                <li><a href="#step2" data-answer="true"><img src="/badge-assets/promotions/_global/img/step-5/pizza.png" alt="" /></a></li>
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/trainers.png" alt="" /></a></li>
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/holiday.png" alt="" /></a></li>
            </ul>

          </div>
          <div class="picture-quiz jsQuestion2 hide" id="step2">

            <div class="browser-window">
                <img src="/badge-assets/promotions/_global/img/step-5/behaviour-2.png" alt="" />
            </div>

            <ul class="picture-quiz-options">
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/scooter.png" alt="" /></a></li>
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/trainers.png" alt="" /></a></li>
                <li><a href="#" ><img src="/badge-assets/promotions/_global/img/step-5/burger.png" alt="" /></a></li>
                <li><a href="#step3" data-answer="true"><img src="/badge-assets/promotions/_global/img/step-5/holiday.png" alt="" /></a></li>
            </ul>

          </div>

          <div class="picture-quiz jsQuestion3 hide" id="step3">

            <div class="browser-window">
                <img src="/badge-assets/promotions/_global/img/step-5/behaviour-3.png" alt="" />
            </div>

            <ul class="picture-quiz-options">
                <li><a href="#step4"  data-answer="true"><img src="/badge-assets/promotions/_global/img/step-5/scooter.png" alt="" /></a></li>
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/trainers.png" alt="" /></a></li>
                <li><a href="#" ><img src="/badge-assets/promotions/_global/img/step-5/burger.png" alt="" /></a></li>
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/cosmetics.png" alt="" /></a></li>
            </ul>

          </div>

          <div class="picture-quiz jsQuestion4 hide" id="step4">

            <div class="browser-window">
                <img src="/badge-assets/promotions/_global/img/step-5/behaviour-4.png" alt="" />
            </div>

            <ul class="picture-quiz-options">
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/scooter.png" alt="" /></a></li>
                <li><a href="#" ><img src="/badge-assets/promotions/_global/img/step-5/cosmetics.png" alt="" /></a></li>
                <li><a href="#complete" data-answer="true"><img src="/badge-assets/promotions/_global/img/step-5/trainers.png" alt="" /></a></li>
                <li><a href="#"><img src="/badge-assets/promotions/_global/img/step-5/burger.png" alt="" /></a></li>
            </ul>

          </div>

          </div><!--/quiz-->

      </div><!--/holder-->

      <a class="btn btn--home jsNextStep hide" id="complete" href="{{$links['next']}}">Let's move on</a>

  </main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
    oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
</script>

<script>


    var rightAnswers = 0,
        currentQuestion = 1;
$( ".picture-quiz-options a" ).click(function() {
    var answer = $(this).data('answer');
    if(answer === true) {
        rightAnswers++;
        $(this).addClass('selected-right');
        $('.jsQuestion'+currentQuestion).addClass('disabled');
        currentQuestion++;
        if(currentQuestion === 5) {
            $('.jsCorrectAnswers').text(rightAnswers);
            $('.jsNextStep, .jsQuizSummary').removeClass('hide');
                    oBadges.stepCompleted();
        } else {
            $('.jsQuestionNumber').text(currentQuestion);
            $('.jsQuestion'+currentQuestion).removeClass('hide');
            setTimeout(function(){
            typeWrite('jsText'+currentQuestion);
            },1000);
        }
    } else {
        $(this).addClass('selected-wrong');
        return false;
    }


});
</script>


@endsection
