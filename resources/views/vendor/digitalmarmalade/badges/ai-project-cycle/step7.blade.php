@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])
<main>
  <section class='flex flex--center flex--column'>

    <div class='holder '>
      <div class="section__icon" data-aos="zoom-in" duration="1500" data-aos-delay="100" >
        <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/evaluation.svg" />
      </div>
      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Evaluation</h1>
       
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
         <div class="col" >
           <p>In the Evaluation stage, you want to test the performance of your selected model. Is it able to provide you with an accurate solution?</p>
           <p>Testing the performance of a model is very similar to performing a scientific test, or an experiment.</p>
         </div>
         <div class="col">
           <p>To carry out a good experiment, it is important to first identify which variables you are testing for, and what the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">control variables</span> are.</p>
           <p>Next, you will need to give your data some structure. You can do this by identifying patterns in your data. Three methods to do this are: </p>
         </div>
      </div>
      
    
  
      <div class="col-single flex flex--column flex--center">
        
        
        <ul class="cards--with-examples col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
          
          <li class="card">
            <div class="card__top ">
              <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/classification.svg" />
              <div class="flex flex--column flex--grow-1">
                <h2 class="card__title">Classification</h2>
                <p>Placing data into different categories using labels.</p>
              </div>
            </div>      
            <div class="card__bottom">
              <span><strong>Example</strong></span>
              <p>Your email uses a classification algorithm to label whether an email is spam or safe.</p>
            </div>
            
            <li class="card">
              <div class="card__top ">
                <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/regression.svg" />
                <div class="flex flex--column flex--grow-1">
                  <h2 class="card__title">Regression</h2>
                  <p>Finding a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">probabilistic relationship</span>  between variables to make a prediction.</p>
                  
                  
                </div>
              </div>      
              <div class="card__bottom">
                <span><strong>Example</strong></span>
                <p>Using a regression algorithm to predict the price of Kimchi given variables like rainfall, temperature and cabbage prices.</p>
              </div>
          
          <li class="card">
            <div class="card__top ">
              <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/clustering.svg" />
              <div class="flex flex--column flex--grow-1">
                <h2 class="card__title">Clustering</h2>
                <p>Grouping data into different clusters that share similar characteristics. </p>
              </div>
            </div>      
            <div class="card__bottom">
              <span><strong>Example</strong></span>
              <p>Netflix uses clustering algorithms to group together people who like similar types of movies.</p>
            </div>
          </li>
          
        </ul>
      
        <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
          Once your data is structured, you are ready to use a performance measure. Take a look at the examples in the table below:
        </p>
        


      </div>
      
      <table data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" >
        
        <thead>
          <tr>
            <th class="text-left text-no-wrap">Data Structure</th>
            <th class="text-left">Performance Measure Example</th>
          </tr>
        </thead>
        
        <tbody>
          <tr>
            <td class="text-left"><strong>Classification</strong></td>
            <td class="text-left">Classification Accuracy: the rate of accurate predictions made</td>
          </tr>
          <tr>
            <td class="text-left"><strong>Regression</strong></td>
            <td class="text-left">Mean Absolute Error: the measure of the difference between the actual values and predicted values</td>
          </tr>
          <tr>
            <td class="text-left"><strong>Clustering</strong></td>
            <td class="text-left">Internal Evaluation: the use of internal information of the clustering process to evaluate the goodness of the clustering structure without using any external information</td>
          </tr>
        </tbody>
          
      </table>
      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
         <div class="col" >
           <p>When you are testing, you want to carefully check your model’s ability to provide you with an accurate solution.</p>
           <p>AI projects revolve around data and data is the one thing in testing that is guaranteed to continuously grow and change. Because of this, you will find that your AI projects are also continuously growing and changing.</p>
         </div>
         <div class="col">
           <p>The more data you work with, the more meaningful the test results will be.</p>
           <p>You should meet a level of accuracy that you or your team deem acceptable before moving on to the deployment stage.</p>
         </div>
      </div>
    
    </div>

  </section>
  
  <div class="tooltip_templates">
    <span id="tooltip1_content">
        <p>The variables that will remain consistent between tests.</p>
    </span>
    <span id="tooltip2_content">
        <p>A connection that two variables are likely to have.</p>
    </span>
  </div>
  
  <section class='activity flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
     <div class='holder flex flex--column flex--center'>
        <div class="holder--questions flex--column jsQuestions flex flex--center">
          <div class="jsSelectItems" data-scroll-anchor="scrollAnchor1" data-max-selected="1">

            <div class='active jsQuestion'>
              <p>1 of 3</p>
              <p class="col-single"><strong>Why do you want to test your model?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>To see how hard it is to break your model</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>To see if your model is better than your friend’s model</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>To check your model’s ability to provide you with an accurate solution</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Yes!</strong> Testing is essential to make sure your AI projects work.</p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s not the right answer.</strong></p>
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
              <p class="col-single"><strong>Mean Absolute Error is a performance measure for which type of algorithm?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Classification</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect'>Regression</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer'>Clustering</li>
              </ul>
              <a href="#"  class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>


            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That’s right!</strong> Well done!</p>
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
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops! That’s not it.</strong> Read the information above carefully.</p>
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
              <p class="col-single"><strong>What is the one thing in testing that is guaranteed to continuously grow and change?</strong></p>
              <ul class="flex flex--wrap flex--justify-center list--activity-answers list--3-cols">
                <li class='list--activity-answers__item flex flex--center jsAnswer' data-show-feedback="jsFeedback1">Accuracy rates</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer jsCorrect' data-show-feedback="jsFeedback2">Data</li>
                <li class='list--activity-answers__item flex flex--center jsAnswer '>The solution</li>
              </ul>
              <a href="#" class="btn btn--blue inline-flex flex--center jsCheck">Check</a>
            </div>

            <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
              <div class="holder">
                <div class="speech-bubble--holder flex flex--end flex--column">
                  <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                    <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>You got it! </strong> Now you’re ready to learn about the final stage of the AI Project Cycle...</p>
                  </div>
                  <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  </div>
                <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Let&rsquo;s keep going!</a>
              </div>
            </div>


            <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
               <div class="holder ">
                 <div class="speech-bubble--holder">
                   <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                     <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong> Oops! That’s not it.</strong> Read the information above carefully.</p>
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
  <div class="scrollAnchor1"></div>

</main>
@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 7);
</script>

@endsection
