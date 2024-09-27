@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])

<main>
  <section class='flex flex--center flex--column'>

    <div class='holder '>
      <div class="section__icon" data-aos="zoom-in" duration="1500" data-aos-delay="100" >
        <img src="/badge-assets/{{$url['slug']}}/_global/images/icons/data-exploration.svg" />
      </div>
      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Data Exploration</h1>
       
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
         <div class="col" >
           <p>Once you’ve collected the data you need, you will need to explore and visualise it before you can make an <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">AI model</span>.</p>
           <p>When you pick up a book, you probably tend to look at the book cover, read the back cover and skim through the content of the book before choosing it. This helps you understand if the book is appropriate for your needs and interests.</p>
         </div>
         <div class="col">
           <p>Similarly, when you get a set of data, you need to spend time exploring it to help you get a sense of the trends, relationships and patterns present in the data.</p>
          <p>Exploring the data in this way will help you decide on which AI model, or AI models to use in the next stage of the project cycle – Modelling!</p>
         </div>
      </div>
      
      <img class="col-single" src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/data-exploration.svg" data-aos="zoom-in" duration="1500" data-aos-delay="400"  />
      
      
    </div>


  </section>
  

  
  <section class='flex flex--center flex--column'>

    <div class='holder '>      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">
         <div class="col" >
        
           <p>We use data visualisation as a method because it is much easier to understand information quickly and communicate the story to others.</p>
         </div>
         <div class="col">
          
           <p>You can learn more about the concepts of data visualisation in the iDEA Bronze level Data Visualisation badge. You’ll find a link to it at the end!</p>
         </div>
      </div>
    
	  </div>


  </section>
  
  <section class='activity flex flex--center flex--column jsSelectItems' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" data-scroll-anchor="jsScrollAnchor1" data-max-selected="1">
   <div class='holder flex flex--column flex--center'>
      <p class="col-single"><strong>Which would be more useful for quickly exploring data? </strong></p>
      <ul class="list--activity-answers flex">
        <li class='transparent list--activity-answers__item flex flex--column flex--start flex--grow-1 jsAnswer'>
          <img alt="Example of data table" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/activity-data-exploration--table.svg"   />
          <span class="selection-overlay"><strong>Select Table</strong></span>
        </li>

        <li class='transparent list--activity-answers__item flex flex--column flex--start flex--grow-1 jsAnswer jsCorrect'>
          <img alt="Example of data graph" src="/badge-assets/{{$url['slug']}}/_global/images/graphs/activity-data-exploration--graph.svg"   />
          <span class="selection-overlay"><strong>Select Graph</strong></span>
        </li>
      
      </ul>
      <a class="btn btn--blue jsCheck flex flex--center"  href="{{$links['next']}}">Check</a>
    </div>

    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Spot on!</strong></p>
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
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"> <strong>Oops!</strong></p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsReset">Try again</button>
        </div>
      </div>
    </div>
    
    
    <div class="tooltip_templates">
      <span id="tooltip1_content">
          <p>A system designed to replicate a decision process to enable understanding and automation.</p>
      </span>
  </div>

  </section>

  <div class="jsScrollAnchor1"></div>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection
