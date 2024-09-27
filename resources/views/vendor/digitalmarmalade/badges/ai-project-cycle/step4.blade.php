@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

    <div class='holder '>
      <div class="section__icon" data-aos="zoom-in" duration="1500" data-aos-delay="100" >
        <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/data-acquisition.svg" />
      </div>
      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Data Acquisition</h1>
       
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
         <div class="col" >
           <p>Now that you have finished Problem Scoping, you have reached the stage of Data Acquisition.</p>
         </div>
         <div class="col">
           <p>Data Acquisition is the process of gathering data. You can get data from:</p>
         </div>
      </div>
              
      <ul class="cards flex flex--wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/surveys.svg" />
          <h2 class="card__title">Surveys</h2>
          <p>A survey is a research method that uses a list of questions to collect specific information from a designated group of people.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/api.svg" />
          <h2 class="card__title">API</h2>
          <p>An Application Programming Interface (API) is a set of procedures that enable you to access data you require on the web.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/sensors.svg" />
          <h2 class="card__title">Sensors</h2>
          <p>A sensor is a device that detects or measures something and converts the measurement into electric signals.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/observations.svg" />
          <h2 class="card__title">Observations</h2>
          <p>The action of monitoring something carefully in order to get information, e.g. a behavioural observation study.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/government-open-source-data.svg" />
          <h2 class="card__title">Government open source data</h2>
          <p>Government open source data is data that is published by central government, local authorities and public bodies, for example, on data.gov.uk.</p>
        </li>
        
        <li class="card">
          <img class="card__icon" src="/badge-assets/{{$url['slug']}}/_global/images/icons/web-scrapping.svg" />
          <h2 class="card__title">Web scraping</h2>
          <p>Web scraping is a technique used to extract large amounts of information from websites and storing it on your computer.</p>
        </li>
        
      </ul>

	  </div>


  </section>
  
  <section class='activity flex flex--center flex--column jsSelectItems' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" data-scroll-anchor="jsScrollAnchor1" data-max-selected="1">
   <div class='holder flex flex--column flex--center'>
      <p class="col-single"><strong>What is Data Acquisition?</strong></p>
      <ul class="list--activity-answers list--activity-answers-3-cols ">
        <li class='list--activity-answers__item flex flex--column flex--center flex--grow-1 jsAnswer'>
          Making a graph
        </li>
        <li class='list--activity-answers__item flex flex--column flex--center flex--grow-1 jsAnswer'>
          Taking part in a survey
        </li>
        <li class='list--activity-answers__item flex flex--column flex--center flex--grow-1 jsAnswer jsCorrect'>
          The process of gathering data
        </li>
      
      </ul>
      <a class="btn btn--blue jsCheck flex flex--center"  href="{{$links['next']}}">Check</a>
    </div>

    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Well done!</strong> That’s right.</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Continue</a>
          </div>

      </div>
    </div>


    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"> <strong>Oops!</strong> Try again.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
        </div>
      </div>
    </div>

  </section>

  <div class="jsScrollAnchor1"></div>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
