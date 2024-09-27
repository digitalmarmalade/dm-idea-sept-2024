@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

	   	<div class="holder no-padding-bottom">    
        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Probability</h1>
        <div class="col-single">
  				<div class="box box--transparent box--probability inline-flex flex--center width-auto" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
  				  <div><p>P(A) = </p></div>
            <div class="flex flex--column">
              <p class="flex border-bottom">Number of favorable outcomes to A</p>
              <p>Total number of outcomes</p>
            </div>
  				</div>
        </div>
      
        <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
          <div class="col" >
            <p>There are a lot of abstract problems in AI and <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">probability theory</span> offers tools to help you deal with uncertainty.</p>
            <p>For example, machine learning is about developing predictive models from uncertain data. Uncertainty means working with imperfect or incomplete information. Understanding probability allows you to manage the uncertainty you see in a specific scenario.</p>
          </div>
          <div class="col">
            <p>Probability is an indication of how likely an event takes place, for example, the chances of England winning the FIFA world cup semi-finals.</p>
            <p>In mathematics, probability, which is represented by <strong>P(A)</strong> is calculated by dividing the number of possibilities of <strong>A</strong> occurring by the total number of possible outcomes. It is important to note that probability always lies between 0 and 1 (or 0% and 100%).</p>
          </div>
        </div>	
        
        
        <div class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400"><p><strong>Let’s take a look at a classic example of a coin.</strong></p></div>
        
          <div class="cols flex flex--column flex--justify-space-between no-padding-bottom" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
            <div class="col" >
              <p>What is the probability of getting heads if you flip a coin?</p>
              <p>First, determine how many times heads can show up if you flip a coin. The answer is 1. Then, determine how many total possible outcomes there are when flipping a coin. The answer is 2, either heads or tails.</p>
              <div class="box box--transparent box--probability inline-flex flex--center width-full" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      				  <div><p>P(Heads)&nbsp;&nbsp;=&nbsp;</p></div>
                <div class="flex flex--column flex--center">
                  <p class="flex border-bottom fraction flex--center">1</p>
                  <p>2</p>
                </div>
                <div><p>&nbsp;=&nbsp;&nbsp;0.5</p></div>
      				</div>
            </div>
            <div class="col flex flex--column">
              <p>Therefore, to calculate the probability of getting heads, divide 1 by 2 and you will get 0.5, or 50%.</p>
              <img data-aos="fade-up"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/probability.svg" data-aos-duration="1500" data-aos-delay="600" />
            </div>
          </div>	
        </div>
        
        
      </div>
      
      
      
  </section>

<section class='activity flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
     <div class='holder flex flex--column flex--center'>
        <div class="holder--questions flex--column jsQuestions flex flex--center">

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='active jsQuestion'>
              <p>1 of 3</p>
              <p class="col-single">You roll a standard six-sided die and want to calculate the probability of getting an even number. </p>
              <p class="col-single"><strong>How many possible outcomes are there for getting an even number?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>3</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>5</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>6</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Correct!</strong> You can get a 2, 4 or a 6.</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite right.</strong> How many numbers between 1 and 6 are even numbers?</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='jsQuestion hide'>
              <p>2 of 3</p>
              <p class="col-single">You roll a standard six-sided die and want to calculate the probability of getting an even number. </p>
              <p class="col-single"><strong>What is the total number of possible outcomes when rolling the die?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>1</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>3</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>6</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>


            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Correct!</strong> The total number of possible outcomes is 6 since it is a six-sided die.</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a href="#" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsNextQuestion">Let&rsquo;s keep going!</a>
              </div>
            </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> How many sides does the die have?</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">
            <div class='jsQuestion hide'>
              <p>3 of 3</p>
              <p class="col-single">You roll a standard six-sided die and want to calculate the probability of getting an even number. </p>
              <p class="col-single"><strong>What is the probability of getting an even number?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>0.25</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>0.5</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>0.75</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Correct!</strong> 3 divided by 6 is 0.5 or 50%.</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>

                <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Next</a>
              </div>
            </div>


            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Try dividing the number of possible outcomes for getting an even number by the number of total possible outcomes.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

      </div>
    </div>

  </section>

  <section class="scrollAnchor1"></section>

  <div class="tooltip_templates">
      <span id="tooltip1_content">
          <p>A branch of mathematics concerned with predicting how likely an event takes place.</p>
      </span>
  </div>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection