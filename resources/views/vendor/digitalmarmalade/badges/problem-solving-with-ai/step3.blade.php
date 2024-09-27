@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.problem-solving-with-ai.steps', ['title' => 'Steps'])

<main class="overflow-visible">
  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">AI Solutions</h1>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Now, let&rsquo;s take a deeper look into how AI can be used to solve problems.</p>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">In this section, you will learn:</p>


    <ul class="list--2-cols flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>How to determine the factors contributing to a complicated problem</strong></li>
      <li class='box flex flex--center'><strong>About Systems Mapping</strong></li>
      <li class='box flex flex--center'><strong>How to identify where AI solutions<br>may be appropriate</strong></li>
      <li class='box flex flex--center'><strong>Which domain of AI can be used<br>to find the solution</strong></li>
    </ul>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">To understand and find out how AI was used to solve a real-life problem in 2010, we are going to learn about a case study known as the Kimchi Crisis in South Korea.</p>

    </div>
  </section>
  <div class="timeline--holder">
    <div class="timeline" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">

        <div class="slide flex flex--center">
          <div class="cols flex flex--column flex--center">
            <div class="col flex flex--center">
              <img class="no-margin" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--what-is-kimchi.svg" data-aos-duration="1500" data-aos-delay="300" />
            </div>
            <div class="col flex flex--justify-center flex--column">
              <h2>What is Kimchi?</h2>
              <p>Kimchi is an essential part of Korean cuisine that has been listed as a

              <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip1_content">UNESCO</span>

              intangible artefact of

              <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip2_content">cultural heritage</span>.</p>
              <p>Kimchi is a name for preserved vegetables, commonly made with napa cabbage, that is seasoned with sea salt, chilli peppers and fermented seafood and is a traditional side dish eaten with every meal.</p>
              <p>Research shows that 94% of Koreans eat Kimchi at least once a day!</p>
            </div>
          </div>
        </div>
        <div class="slide flex flex--center">

          <div class="cols flex flex--center flex--column">
            <div class="col">
              <h2>Kimchi Crisis</h2>
              <p>In 2010, South Korea experienced a Kimchi Crisis where the price of Kimchi increased drastically.</p>
              <p>There was a severe shortage of napa cabbage, the main vegetable used to make Kimchi, caused by a long stretch of bad weather.</p>
              <p>It rained too much, causing many napa cabbage crops to die and because there was less napa cabbage available, the price of napa cabbage went up.</p>
            </div>
            <div class="col col--negative-top-margin">

              <p >When this happens, the farmers&rsquo; income is affected as they do not have as much napa cabbage to sell.</p>
              <p>Consumers are unhappy because kimchi has become so expensive and even if they are willing to pay, there is not enough kimchi on the shelves in the supermarket.</p>
            </div>
          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectDropdown jsActivitySlide">
          <div class='holder flex flex--center'>

            <div class="question activity--fill-blanks activity--fill-blanks-history-computer-chips jsTimelimeQuestion">
              <p class="col-single"><strong>Can you fill in the blanks?</strong></p>
              <fieldset>
                <p>During the 2010 Kimchi Crisis in South Korea, there was a severe shortage of

                  <span class="custom-select">
                    <select class="jsOption">
                      <option value="0">Select one</option>
                      <option value="1" class="jsAnswer">lettuce</option>
                      <option value="2" class="jsAnswer jsCorrect">napa cabbage</option>
                      <option value="3" class="jsAnswer">beansprouts</option>
                    </select>
                  </span>

                    due to too much

                   <span class="custom-select">
                     <select class="jsOption">
                       <option value="0">Select one</option>
                       <option value="1" class="jsAnswer">sunshine</option>
                       <option value="2" class="jsAnswer jsCorrect">rainfall</option>
                       <option value="3" class="jsAnswer">fog</option>
                     </select>
                   </span>


                  . When this happens, the supply of the vegetable

                  <span class="custom-select">
                    <select class="jsOption">
                      <option value="0">Select one</option>
                      <option value="1" class="jsAnswer">increases</option>
                      <option value="2" class="jsAnswer jsCorrect">decreases</option>
                      <option value="3" class="jsAnswer">stays the same</option>
                    </select>
                  </span>

                  causing prices to

                   <span class="custom-select">
                     <select class="jsOption">
                       <option value="0">Select one</option>
                       <option value="1" class="jsAnswer jsCorrect">increase</option>
                       <option value="2" class="jsAnswer">decrease</option>
                       <option value="3" class="jsAnswer">stay the same</option>
                     </select>
                   </span>
                  .</p>

              </fieldset>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That&rsquo;s correct.</strong> Well done! Wouldn&rsquo;t it be great if we could find a solution to the Kimchi Crisis so that we can help the farmers, the supermarkets and the consumers? Do you think we can solve the rising prices of the Kimchi problem using AI?</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That&rsquo;s not quite right.</strong> Take a closer look at the text describing the Kimchi Crisis</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsTryAgain">Try again</button>
                 </div>
               </div>
             </div>


          </div>
        </div>
        <div class="slide flex flex--center">
          <div class="cols flex flex--column flex--center">
            <div class="col flex flex--justify-center flex--column">
              <h2>Project Vegita</h2>
              <p>In response to this Kimchi Crisis, a 16-year old boy named Kim Han Seo from Busan Computer High School built a project where he used AI to predict cabbage prices from weather data.</p>
              <p>Using a method called Systems Mapping, Kim Han Seo was able to first identify all of the factors that affected Kimchi prices.</p>
              <p>Systems Mapping is used to understand complex issues with multiple factors that affect each other.</p>

            </div>
            <div class="col flex flex--center flex--column">
              <img class="illustration--system-map" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--system-map.svg" data-aos-duration="1500" data-aos-delay="300" />
              <p>Factors are key points that affect a specific problem, result or situation. For example, one factor that affects kimchi prices is rainfall.</p>
            </div>
          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p><strong>Which of the following is the definition of <em>Systems Mapping</em>?</strong></p>

               <ul class="list--activity-answers flex flex--wrap">

                <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback1">Key points or components that affect a specific problem, result or situation.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback2">Multiple factors that affect an issue.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">A method used to understand complex issues with multiple factors that affect each other.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback3">The best opportunity to create a change within a system.</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That is correct!</strong> Well done!</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> Oops, that&rsquo;s the definition for a <strong>factor</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast">Oops, that&rsquo;s the definition for a <strong>elements</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback3'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast">Oops, that&rsquo;s the definition for a <strong>leverage</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

          </div>
        </div>
        <div class="slide flex flex--center">
          <div class="cols flex flex--column flex--center">

            <div class="col flex flex--justify-center flex--column">
              <h2>Creating a Systems Map</h2>
              <p>The first step in creating a systems map is to identify the factors involved.</p>
              <p>When multiple factors are affecting an issue, we call these factors <em>Elements</em>.</p>
              <p>Kim Han Seo determined that <strong>rainfall</strong>, <strong>temperature</strong> and <strong>cabbage prices</strong> were the elements that affected<br>Kimchi prices. </p>
            </div>
            <div class="col flex flex--center">
              <img class="no-margin systems-map" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--creating-a-systems-map.svg" data-aos-duration="1500" data-aos-delay="300" />
            </div>
          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>Which of the following is the definition of <em>Elements</em>?</strong></p>

               <ul class="list--activity-answers flex flex--wrap">

                <li class="box list--activity-answers__item flex flex--center jsAnswer">Key points or components that affect a specific problem, result or situation.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">Multiple factors that affect an issue.</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You are right!</strong> Well done!</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                   <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                 </div>
                </div>

             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> Oops, that&rsquo;s the definition for <strong>factors</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>What were the elements determined by Kim Han Seo that affected Kimchi prices?</strong></p>

               <ul class="list--activity-answers flex flex--wrap">

                <li class="box list--activity-answers__item flex flex--center jsAnswer">Snowfall, temperature, cabbage prices.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">Rainfall, temperature, cabbage prices.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer">Rainfall, cabbage prices, cost of labour.</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That is correct!</strong> Well done!</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>Not quite, but you&rsquo;re close.</strong> Read the options carefully.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

          </div>
        </div>
        <div class="slide flex flex--center">
          <div class="cols flex flex--column flex--center">
            <div class="col flex flex--center flex--column">
              <div class="box box--relationship box--relationship-positive flex flex--center flex--column">
                <p><strong>POSITIVE RELATIONSHIPS ARE REPRESENTED BY A &ldquo;+&rdquo; SIGN</strong></p>
                <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--relationship-positive.svg" />
                <span>An increase in element &ldquo;X&rdquo; leads to an increase in element &ldquo;Y&rdquo;</span>
              </div>
              <div class="box box--relationship box--relationship-negative flex flex--center flex--column">
                <p><strong>NEGATIVE RELATIONSHIPS ARE REPRESENTED BY A &ldquo;–&rdquo; SIGN</strong></p>
                <img src="/badge-assets/{{$url['slug']}}/_global/svg/icon--relationship-negative.svg" />
                <span>An increase in element &ldquo;X&rdquo; leads to a decrease in element &ldquo;Y&rdquo;</span>
              </div>
            </div>
            <div class="col flex flex--justify-center flex--column">
              <h2>Systems Mapping</h2>
              <p>The second step is to connect the elements with arrows to show how they affect each other.</p>
              <p>In a systems map, every element is interconnected. We try to represent that relationship through the use of arrows. Positive or negative relationships between elements can be represented by a &ldquo;+&rdquo; or &ldquo;-&rdquo; next to each arrow.</p>
            </div>

          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
          <div class='holder flex flex--center'>

            <div class="col-single question jsTimelimeQuestion">
              <p><strong>If elements x and y have a positive relationship, an increase in element x leads to  __________ in element y.</strong><br>Select the correct response:</p>

               <ul class="list--activity-answers flex flex--wrap">

                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">an increase</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer">a decrease</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That is correct!</strong> Well done!</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                   <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>Not quite.</strong> Take a closer look at the diagram.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

          </div>
        </div>
        <div class="slide flex flex--center">
          <div class="cols flex flex--column flex--center">
            <div class="col flex flex--center flex--column">
              <img class='illustration--cabbage-price' src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--cabbage-price.svg" />
            </div>
            <div class="col flex flex--justify-center flex--column">
              <h2>Leverage</h2>
              <p>To change the outcome of a system, we have two options: change the elements in a system or change the relationships between elements. It is usually more effective to change the relationship between elements in a system.</p>
              <p><em>Leverage</em> is the term used to describe the best opportunity to create a change in the system.</p>
              <p>Kim Han Seo identified his leverage as the prediction of cabbage prices because cabbage was the biggest cost component of making Kimchi.</p>
            </div>

          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>Which of the following is the correct definition of <em>Leverage</em>?</strong><br>Select the correct response:</p>

               <ul class="list--activity-answers flex flex--wrap">

                <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback1">Key points or components that affect a specific problem, result or situation.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback2">Multiple factors that affect an issue.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback3">A method used to understand complex issues with multiple factors that affect each other.</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">The best opportunity to create a change within a system.</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You are right!</strong> Well done!</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                   <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> Oops, that&rsquo;s the definition for <strong>factor</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> Oops, that&rsquo;s the definition for <strong>elements</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback3'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> Oops, that&rsquo;s the definition for <strong>systems mapping</strong>.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>

          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
          <div class='holder flex flex--center'>

            <div class=" question jsTimelimeQuestion">
              <p class="col-single"><strong>True or false? To change the outcome of a system, it is usually more effective to change the elements in a system rather than the relationship between elements. </strong></p>

               <ul class="list--activity-answers flex flex--wrap">

                <li class="box list--activity-answers__item flex flex--center jsAnswer">True</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">False</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That's correct!</strong> To change the outcome of a system, it is usually more effective to change the relationship between elements in a system, rather than the elements themselves.</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>Not quite, but you&rsquo;re close.</strong> Read the question carefully.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>Now that we know the biggest opportunity to create change in the system is by predicting the price of cabbage, let&rsquo;s think about how we can use AI to find this information.</p>

              <p>Out of the three domains of AI, which do you think would be most effective in <em>predicting</em> the price of cabbage?</strong></p>

               <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">
                <li class="box list--activity-answers__item flex flex--center jsAnswer">Natural Language Processing</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer">Computer Vision</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">Statistical Data</li>
               </ul>

               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

            </div>



             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You got it!</strong> Well done!</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>Not quite.</strong> Let&rsquo;s take another look at the definitions of the 3 domains of AI:
                        <ul>
                          <li class="animate__animated animate__fadeInLeft animate__fast"><strong>Natural Language Processing (NLP)</strong> is a branch of AI that helps computers understand, interpret and manipulate human language.</li>
                          <li class="animate__animated animate__fadeInLeft animate__fast"><strong>Computer Vision</strong> is a form of AI where computers can &ldquo;see&rdquo; the world, analyse visual data and then make decisions from it or gain understanding about the environment and situation.</li>
                          <li class="animate__animated animate__fadeInLeft animate__fast"><strong>Statistical Data for AI</strong> involves programming the computer to recognise patterns in a set of data to try to predict future behaviour.</li>
                        </ul>
                     </p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
        </div>
        <div class="slide flex flex--center">
          <div class="cols flex flex--column flex--center">
            <div class="col flex flex--column">
              <h2>Training the Model</h2>
              <p>Kim Han Seo collected over 3,000 daily temperatures, rainfall and cabbage prices from the Korea Meteorological Administration and the Ministry of Agriculture and Forestry sites over seven years.</p>
              <img class="no-margin collected-data" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--collected-data.svg" data-aos-duration="1500" data-aos-delay="300" />
            </div>
            <div class="col flex flex--justify-center flex--column">

              <p>Next, a

                <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip3_content">Linear Regression</span>

                <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip4_content">algorithm</span>

                was applied using

                <span class="tooltipster tooltip--blue jsTooltip" data-tooltip-content="#tooltip5_content">Python</span>

              and the model was trained 100,000 times to find patterns within the data and make a prediction on the price of cabbage-based on the day&rsquo;s temperature and rainfall.</p>

              <p>To Improve his model, Kim Han Seo set it to incorporate new weather and pricing information every single day.</p>
              <p>The more data an AI model has to work with and the more it is trained, the better it becomes.</p>

            </div>
          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>What algorithm did Kim Han Seo use to train his model?</strong></p>
               <ul class="list--activity-answers flex flex--wrap">
                <li class="box list--activity-answers__item flex flex--center jsAnswer">Statistical Data</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">Linear Regression</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer">Logistic Regression</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer">Decision Tree</li>
               </ul>
               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>
            </div>

             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You got it!</strong> Kim Han Seo used a Linear Regression algorithm which is commonly used to find patterns and make predictions in data.</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>Not quite.</strong> You can find the answer in Kim Han Seo&rsquo;s story.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>What did Kim Han Seo train his model to do?</strong></p>
               <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">Find patterns within the data that was collected to predict cabbage prices</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer ">Predict the weather based on the price of a cabbage</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer ">Predict the rainfall based on the temperature</li>

               </ul>
               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>
            </div>

             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Correct!</strong> Kim Han Seo trained his model 100,000 times to help it distinguish patterns.</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide" href="#" >Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>That&rsquo;s not quite right.</strong> You can find the answer in Kim Han Seo&rsquo;s story.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
        </div>
        <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
          <div class='holder flex flex--center'>

            <div class="question jsTimelimeQuestion">
              <p class="col-single"><strong>What did he do to continue improving his model?</strong></p>
               <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">
                <li class="box list--activity-answers__item flex flex--center jsAnswer">He built 100,000 more models</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">He incorporated new weather and pricing info every day</li>
                <li class="box list--activity-answers__item flex flex--center jsAnswer">He stopped training the model and let it run itself</li>
               </ul>
               <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>
            </div>

             <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder flex flex--end flex--column">
                   <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Correct!</strong> Kim Han Seo continued to update and add information so that his model had more data to work with.</p>
                   </div>
                   <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                   <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Continue</a>
                   </div>

               </div>
             </div>

             <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
               <div class="holder flex flex--center">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__fast"> <strong>That&rsquo;s not quite right.</strong> You can find the answer in Kim Han Seo&rsquo;s story.</p>
                   </div>
                   <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                   <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                 </div>
               </div>
             </div>


          </div>
        </div>
</div>
</div>

      <div class="tooltip_templates">
          <span id="tooltip1_content">
              <p>UNESCO is the United Nations Educational, Scientific and Cultural Organisation with a mission to contribute to &ldquo;the building of a culture of peace, eradication of poverty, sustainable development and intercultural dialogue through education, the sciences, culture, communication and information&rdquo;.</p>
          </span>

          <span id="tooltip2_content">
            <p>The legacy of artefacts and intangible attributes of a group or society that has been developed and passed on through generations.</p>
          </span>


          <span id="tooltip3_content">
            <p>A model that tries to predict the relationship between two variables using a straight line.</p>
          </span>

          <span id="tooltip4_content">
            <p>A process or set of rules that a computer follows to solve a problem.</p>
          </span>

          <span id="tooltip5_content">
            <p>A programming language.</p>
          </span>


      </div>

</main>



@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>

$(document).ready(function(  ) {

  var $timeline = $('.timeline'),
      $nextSlide = $('.jsNextSlide');

    $timeline.on('afterChange', function(event, slick, slideId){

        var current = $(this).find('.slick-current');

        //console.log(slideId + ' out of ' + (slick.$slides.length - 1));

        // It's an activity slide
        if(current.hasClass('jsActivitySlide')){

          // Has the activity been completed?
          if(current.hasClass('jsCompleted')){

            // Check it's not the last slide.
            if (slideId != slick.$slides.length - 1) {
              $timeline.find('.slick-next').removeClass('disabled');
            } else {
              $timeline.find('.slick-next').addClass('disabled');
            }

          } else {
            $timeline.find('.slick-next').addClass('disabled');
          }

        } else {
          // Text Slide - Do nothing
          $timeline.find('.slick-next').removeClass('disabled');
        }

          AOS.refreshHard();

    });

    // Slide continue button.
    $nextSlide.on("click", function(e){
        e.preventDefault();
        $timeline.slick('slickNext');
    });

    $timeline.slick({
      dots: true,
      infinite: false,
      speed: 300,
      draggable: false,
      swipe: false,
      swipeToSlide: false,
      touchMove: false
    });

    /* Callback when an activity on a slide has been completed, re-enable the next arrow. */
    $(document).on('activityComplete', function() {
      $timeline.find('.slick-next').removeClass('disabled');
    });

    $('.jsTooltip').tooltipster({
         trigger: 'hover',
         maxWidth: 350
    });
});
</script>

<script>

  var x, i, j, l, ll, selElmnt, a, b, c;
  /* Look for any elements with the class "custom-select": */
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("span");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("span");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /* For each option in the original select element,
      create a new DIV that will act as an option item: */
      c = document.createElement("span");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /* When an item is clicked, update the original select box,
          and the selected item: */
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /* When the select box is clicked, close any other select boxes,
      and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }

  function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }

  /* If the user clicks anywhere outside the select box,
  then close all select boxes: */
  document.addEventListener("click", closeAllSelect);
</script>


@endsection
