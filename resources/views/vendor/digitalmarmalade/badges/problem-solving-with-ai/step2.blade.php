@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.problem-solving-with-ai.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Domains of AI</h1>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">There are 3 domains of AI:</p>

    <ul class="list--3-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
      <li class='box flex flex--center'><strong>Natural Language Processing (NLP)</strong></li>
      <li class='box flex flex--center'><strong>Computer Vision </strong></li>
      <li class='box flex flex--center'><strong>Statistical Data </strong></li>
    </ul>
    </div>
  </section>
  <section class='flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
     <div class='holder '>
      <div class="cols flex flex--column flex--justify-space-between" >
        <div class="col" >
          <h2>Natural language processing</h2>
          <p><strong>Natural language processing</strong>, commonly abbreviated as NLP, is a method of communicating with computers using natural (or human) language, such as English.</p>
          <p>Computers are programmed to process and analyse large amounts of human language data to be able to read, listen, and understand the information that it is given.</p>
          <p>The input and output of an NLP system can be speech or written text.</p>
          <p>Did you know that we use Natural Language Processing every day? How many of these examples do you use in your day-to-day activities?</p>
        </div>
        <div class="col flex flex--center flex--column">
          <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--digital-voice-assistant.svg" />
        </div>
      </div>

      <ul class="list--3-cols flex flex--wrap">
        <li class='box flex flex--center'><strong>Spell check</strong></li>
        <li class='box flex flex--center'><strong>Voice text messaging</strong></li>
        <li class='box flex flex--center'><strong>Google Translate</strong></li>
        <li class='box flex flex--center'><strong>Autocomplete</strong></li>
        <li class='box flex flex--center'><strong>Spam filters</strong></li>
        <li class='box flex flex--center'><strong>Virtual assistants</strong></li>
      </ul>
    </div>
  </section>
  <section class='flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
     <div class='holder '>
      <div class="cols flex flex--column flex--justify-space-between">
        <div class="col" >
          <h2>Computer Vision</h2>
          <p><strong>Computer vision</strong> is the field of AI that trains computers to &ldquo;see&rdquo; by interpreting and understanding the visual world.</p>
          <p>This teaches the computer to accurately identify objects when processing digital images and videos to then carry out a programmed response.</p>
          <p>These are some ways that Computer Vision is used every day:</p>

        </div>
        <div class="col flex flex--center flex--column">
          <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--face-id.svg" />
        </div>
      </div>

      <ul class="list--2-cols flex flex--wrap">
        <li class='box flex flex--center'><strong>Couriers scanning parcel barcodes at point of delivery</strong></li>
        <li class='box flex flex--center'><strong>Home outdoor surveillance cameras that alert the homeowner when someone is on their property</strong></li>
        <li class='box flex flex--center'><strong>Using Face ID to unlock your mobile phone</strong></li>
        <li class='box flex flex--center'><strong>Depositing a cheque by taking a photo of it and submitting it via a banking app</strong></li>
      </strong></li>
      </ul>
    </div>
  </section>
  <section class='flex flex--center flex--column'data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
     <div class='holder '>
      <div class="cols flex flex--column flex--justify-space-between">
        <div class="col" >
          <h2>Statistical Data<br>for AI</h2>
          <p><strong>Statistical Data for AI</strong> involves programming the computer to recognise patterns in a set of data to try to predict future behaviour.</p>
          <p>This process is a form of machine learning and the more data the computer has to learn from, the more &ldquo;intelligent&rdquo; or accurate its predictions become.</p>
          <p>The following are ways you may be using statistical data AI every day without realising it:</p>

        </div>
        <div class="col flex flex--center flex--column">
          <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--netflix.svg" />
        </div>
      </div>

      <ul class="list--2-cols flex flex--wrap">
        <li class='box flex flex--center'><strong>Netflix movie recommendations on your homepage</strong></li>
        <li class='box flex flex--center'><strong>Credit card fraud detection</strong></li>
        <li class='box flex flex--center'><strong>Online shopping product recommendations based on your purchase history</strong></li>
        <li class='box flex flex--center'><strong>GPS systems that predict traffic congestion and takes you on the fastest route possible</strong></li>
      </strong></li>
      </ul>
    </div>
  </section>

  <section class='activity flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
     <div class='holder flex flex--column flex--center'>

        <div class="holder--questions flex--column jsQuestions flex flex--center">

          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1">

            <div class='active jsQuestion'>
              <p>1 of 4</p>
              <p class="col-single"><strong>What are the three domains of AI?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Natural linguistics production, computing data, statistical vision</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Natural language processing, computer vision, statistical data</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Real-language processing, X-ray vision, AI statistics</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That is correct,</strong> well done!</p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That&rsquo;s not quite right,</strong>look carefully at the names of each domain.</p>
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
              <p class="col-single"><strong>Which of the following examples correspond to the AI domain Natural Language Processing?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">Playing chess with a computer where it tries to predict your next move and beat you</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Asking Siri or Alexa what the weather's like today</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2">Google photos automatically sorting and tagging photos based on people that it recognises</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>


            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That is correct,</strong> well done!</p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops,</strong> that is Statistical Data.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, </strong> that is Computer Vision.</p>
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
              <p class="col-single"><strong>Which of the following examples correspond to the AI domain Computer Vision?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">Playing chess with a computer where it tries to predict your next move and beat you</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2">Asking Siri or Alexa what the weather's like today</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Google photos automatically sorting and tagging photos based on people that it recognises </li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That is correct,</strong> well done!</p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops,</strong> that is Statistical Data.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, </strong> Natural Language Processing.</p>
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
              <p class="col-single"><strong>Which of the following examples correspond to the AI domain Statistical Data?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Playing chess with a computer where it tries to predict your next move and beat you</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">Asking Siri or Alexa what the weather's like today</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback2">Google photos automatically sorting and tagging photos based on people that it recognises</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
            <div class="holder">
              <div class="speech-bubble--holder flex flex--end flex--column">
                <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                  <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That is correct,</strong> well done!</p>
                </div>
                <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                </div>
              <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster ">Continue</a>
            </div>
          </div>


           <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
             <div class="holder ">
               <div class="speech-bubble--holder">
                 <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                   <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops,</strong> that is Natural Language Processing.</p>
                 </div>
                 <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                 <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
               </div>
             </div>
           </div>

           <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
             <div class="holder ">
               <div class="speech-bubble--holder">
                 <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                   <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, </strong>that is Computer Vision.</p>
                 </div>
                 <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                 <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
               </div>
             </div>
           </div>

          </div>
      </div>
    </div>

  </section>

  <section class="scrollAnchor1"></section>


</main>



@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>

@endsection
