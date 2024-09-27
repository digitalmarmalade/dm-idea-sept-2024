@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.maths-tools-for-ai.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

	   	<div class="holder">
	    		<h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Matrices</h1>
          <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
            <div class="col" >
              <p>Matrices are used a lot when simulating things or when you are constructing things in computer science, especially in computer graphics.</p>
              <p>At the most fundamental level, matrices are a compact representation of a bunch of numbers – a way of representing information. </p>
            </div>
            <div class="col">
              <p>Matrices are very valuable in computer graphics because these numbers could represent features like the colour intensity on a specific screen or, whether an object is visible at a certain point.</p>
            </div>
          </div>	          
	    </div>
      
      <img class="illustration--matrices" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="0"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/matrices.svg"  />

    <div class="holder">
      <h2 class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">What do matrices look like in mathematical terms?</h2>
      
      <div class="box box--transparent flex flex--center flex--column col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
        <img class="graph--matrices" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/graph-matrices.svg" />
        <p><strong>A matrix is a 2-dimensional array of numbers that represent transformations.</strong></p>
      </div>    
      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">
        <div class="col" >
          <p>The numbers are written into a fixed number of rows and columns between square brackets.</p>
          <p>Matrices can be described by their dimensions, which is represented by the number of rows followed by the number of columns.</p>
          <p>Learning how to do algebra with matrices is useful if you are trying to write a computer graphics programme or conduct an economic or probability simulation. </p>
        </div>
        <div class="col">
          <p>You may have a matrix that represents where different particles are in space, and with the knowledge of how to do algebra with matrices, and ways of doing it very efficiently, you will be able to run simulations to test your theories and come up with results.</p>

          <p>If you are interested in how matrices can be transformed using algebra, you can access a series of tutorial videos linked at the end of this badge.</p>
        </div>
      </div>	
    </div>
    
  </section>



<section class='activity flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
     <div class='holder flex flex--column flex--center'>

        <div class="holder--questions flex--column jsQuestions flex flex--center width-full" data-question-type="">

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='active jsQuestion'>
              <p>1 of 4</p>
              <p class="col-single"><strong>What is a matrix?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>A 2-dimensional array of numbers that represent transformations</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">An array of numbers that represent direction and magnitude</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2">A famous action film</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>You got it!</strong></p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Take a look at the text and try again.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
             
             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> (The movie is called The Matrix).</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">


            <div class='jsQuestion hide'>
              <p>2 of 4</p>
              <p class="col-single"><strong>Why are matrices valuable in computer graphics?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Because matrices could represent the meaning of a word, for example, how it is spelled and the context in which the word is used</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Because matrices could represent features like colour intensity or whether an object is visible at a certain point</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Matrices are not valuable in computer graphics</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>


            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s correct!</strong></p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Take a look at the text and try again.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='jsQuestion hide'>
              <p>3 of 4</p>
              <p class="col-single"><strong>Matrices can be described by their dimensions, which is represented by the number of _____ followed by the number of ______.</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>dimensions, transformations</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>columns, rows</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>rows, columns</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s correct!</strong></p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong> Take a look at the text and try again.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

		<div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='jsQuestion hide'>
              <p>4 of 4</p>
              <p class="col-single"><strong>Can you guess, in which domain of AI matrices will be very important?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--2-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'><span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip1_content">Computer Vision</span></li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1"> <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip2_content">Natural Language Processing</span></li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2"><span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip3_content">Statistical Data</span></li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Correct!</strong> Matrices will be very important in Computer Vision, where pictures are represented in the computer’s memory as an array of numbers.</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>

                <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Next</a>
              </div>
            </div>

            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite.</strong></p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Not quite,</strong> think about how matrices are used and the examples provided in the text.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>
          </div>

      </div>
    </div>
    
    <div class="tooltip_templates">
        <span id="tooltip1_content">
            <p>The field of AI that trains computers to &ldquo;see&rdquo; by interpreting and understanding the visual world.</p>
        </span>
        <span id="tooltip2_content">
            <p>The method of communicating with computers using natural (or human) language, such as English.</p>
        </span>
        <span id="tooltip3_content">
            <p>Programming the computer to recognise patterns in a set of data to try to predict future behaviour.</p>
        </span>
      
    </div>

  </section>

  <div class="scrollAnchor1"></div>

</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 7);
</script>

@endsection
