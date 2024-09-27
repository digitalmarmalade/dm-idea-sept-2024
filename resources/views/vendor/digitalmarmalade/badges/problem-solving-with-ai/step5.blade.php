@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.problem-solving-with-ai.steps', ['title' => 'Steps'])

<main>

  <section class='flex flex--center flex--column'>


   <div class='holder flex flex--center flex--column'>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">AI Solutions for Social Impact</h1>

    <img class='social-impact' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--social-impact.svg" />

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
      <div class="col" >
        <p>Now that you have learned how to find solutions using AI, where can you find problems in your community, city, or country for social impact?</p>
        <p>A good way to start is to be observant to our surroundings - where we live, where we go to school, where we go to work and so on.</p>

      </div>
      <div class="col" >
        <p>Take a look at news articles or clips that cover some of the more pressing issues in your local area.</p>
        <p>You can talk to your local community leader about the issues that are affecting your community.</p>
      </div>
    </div>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400"><strong>Social issues may include:</strong></p>

    <ul class="flex flex--column list--2-cols flex--wrap flex--row" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>An increase in traffic accidents</strong></li>
      <li class='box flex flex--center'><strong>Food shortages</strong></li>
      <li class='box flex flex--center'><strong>Mental health issues</strong></li>
      <li class='box flex flex--center'><strong>Homelessness</strong></li>
      <li class='box flex flex--center'><strong>Bullying</strong></li>
      <li class='box flex flex--center'><strong>Unemployment</strong></li>
    </ul>
   </div>
  </section>

  <section>
    <div class="holder">
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <div class="col" >
          <p>Another option is to look for inspiration in the Sustainable Development Goals or SDGs for short.</p>
          <p>Sustainable Development Goals are a collection of global goals designed to be a

          <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">blueprint</span>

          to achieve a better and more sustainable future for all.</p>

        </div>
        <div class="col" >
          <p>The SDGs are made up of 17 goals that have been agreed to by all countries that are part of the

            <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">United Nations</span>

             (that&rsquo;s most of the world!) to be achieved by 2030.</p>
          <p>Each of these goals has specific targets. The 17 Sustainable Development Goals are:</p>
        </div>
      </div>

      <div class="illustration--global-goals" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
        <img  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--global-goals.svg" />
        <p class="img-source">Source: United Nations</p>
      </div>


     <div class="box flex flex--center flex--column col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
       <p><strong>Did you know?</strong><br> There is an iDEA badge on the Sustainable Development Goals called &ldquo;Global Goals&rdquo;. You will find a link to it at the end of this badge.</p>
     </div>
    </div>


  </section>

  <section class='activity flex flex--center flex--column ' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">
     <div class='holder flex flex--column flex--center'>

        <div class="holder--questions flex--column flex flex--center">

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1">

            <div class='active jsQuestion'>
              <p>1 of 4</p>
              <p class="col-single"><strong>Where could you look to find problems for social impact?</strong><br>(Please select all that apply)</p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>At your school or workplace</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>In a fiction novel</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>In the newspaper or news channel on TV</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>In your favourite sci-fi TV show</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>By talking to your local community leader</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>You got it, well done!</strong></p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That&rsquo;s not quite right. Hint: </strong>there are 3 correct answers.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1">
            <div class='jsQuestion hide'>
              <p>2 of 4</p>
              <p class="col-single"><strong>What does SDG stand for?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Sustainable Dependency Goals</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Sustainable Development Goals</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Social Development Gains</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That's right! </strong> SDG stands for Sustainable Development Goals.</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong></strong> That&rsquo;s not quite right, try again.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1">
            <div class='jsQuestion hide'>
              <p>3 of 4</p>
              <p class="col-single"><strong>Define SDG </strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>SDGs are a set of 17 global goals designed to achieve a better future for all</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>SDGs stand for the name of the three places you can look to find an AI solution</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer '>SDGs are the three domains of AI</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>You got it, well done!</strong></p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not quite right.</strong> You will find the answer in the text.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1">
            <div class='jsQuestion hide'>
                <p>4 of 4</p>
                <p class="col-single"><strong>Which of the following are Sustainable Development Goals?</strong><br>(Please select all correct answers)</p>
                <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                  <li class='list--activity-answers__item flex flex--center jsAnswer'>Reduced rainfall and more sunshine</li>
                  <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Reduced inequalities</li>
                  <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>No poverty</li>
                  <li class='list--activity-answers__item flex flex--center jsAnswer'>More Kimchi for all</li>

                  <li class='list--activity-answers__item flex flex--center jsAnswer'>Travel to Outerspace</li>
                  <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Affordable and clean energy</li>
                </ul>
                <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
              </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>You got it, well done!</strong> Think about which social issues or SDGs are closest to your heart. Why are they important to you and how could you use AI to address them?</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  </div>
                <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster">Next</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That&rsquo;s not quite right. </strong> Hint: There are 3 correct answers!</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

      </div>


      <div class="tooltip_templates">
        <span id="tooltip1_content">
            <p>A design plan, model or template to be followed to create something.</p>
        </span>

        <span id="tooltip2_content">
          <p>The United Nations, commonly referred to as The UN, is an international organisation formed in 1945 that aims to increase political and economic cooperation among its 193 member countries.</p>
        </span>
      </div>

    </div>


  </section>

  <section class="scrollAnchor1"></section>

</main>

@endsection
@section('javascript')
<script>
    $(document).ready(function() {
      var triggerMode = 'hover';

      if($('body').hasClass('touch')){
        triggerMode = 'click';
      }

      $('.jsTooltip').tooltipster({
           trigger: triggerMode,
           maxWidth: 350
      });
    });
</script>
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection
