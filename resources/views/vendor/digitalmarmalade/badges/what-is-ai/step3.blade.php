@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<style>
  /* main {
    overflow: visible;
  } */
</style>
<main>

  <section class='flex flex--center flex--column'>
    <div class='holder smart-city'>

      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">The Future of Technology</h1>
      <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">Over the next 10 years, we are going to witness rapid advancements in emerging technologies which hold the potential to change the shape and look of our future.</p>

      <h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">Smart city</h2>
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400"  data-aos-anchor=".smart-city">
        <div class="col" >
          <p>A Smart City is a future-focused city harnessing the power of Internet of Things (IoT) and smart technology to help manage sustainability challenges while creating clean economy jobs geared towards improving livability for citizens. </p>
        </div>
        <div class="col">
          <p>Through collecting massive amounts of data, we can identify urban problems and move from reactive to proactive decision making. </p>
          <p>By being more informed, we can improve the quality of life for city dwellers.</p>
        </div>
      </div>
    </div>

        <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
            <div class="holder--smart-city flex flex--center  hide-overflow">
               @include('vendor.digitalmarmalade.badges.what-is-ai.smart-city', ['title' => 'Smart city'])
          </div>
        </div>


  </section>

  <section class='activity activity--smart-home flex flex--center flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">

    <div class='holder hide-overflow flex flex--center full-width flex--column'>

      <h2>Smart home</h2>

      <div class="cols flex flex--column flex--justify-space-between full-width">
        <div class="col" >
          <p>A Smart Home is a perceptive and smart-living house with a responsive, sophisticated, and nearly invisible network easing the management of day-to-day life.</p>
        </div>
        <div class="col">
          <p>The Smart Home constantly collects and analyses real-time data – over time, it learns from the data to become our personal assistant, while also increasing security and privacy.</p>
        </div>
      </div>
      <p class="col-single text-center"><strong>Select which items you would like to use to build your Smart Home.</strong><br>When you are happy with the result, take a screenshot so you can revisit your Smart Home whenever you like.</p>
     </div>



   <div class='holder holder--activity flex--center flex flex--row'>

     <div class="flex flex--column">


      <ul class="list--smart-home flex flex--wrap display-desktop jsSmartHomeTriggers">
        @include('vendor.digitalmarmalade.badges.what-is-ai.smart-home-triggers', ['title' => 'Smart Home Triggers'])
      </ul>

    </div>

    <div class="flex flex--center flex--column">

      <div class="holder--smart-home flex ">
        @include('vendor.digitalmarmalade.badges.what-is-ai.smart-home', ['title' => 'Smart Home'])
      </div>

      <div class="flex flex--center flex--column">
        <a class="btn btn--white inline-flex flex--center flex--align-self-center btn-add-smart-items js-trigger--overlay-smart-home">Add smart items</a>

        <a class="btn btn--blue inline-flex flex--center btn--continue" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
      </div>
    </div>


  </div>


  </section>




</main>

<div class="overlay--smart-home-triggers flex hide jsOverlay">
  <div class="holder ">

    <a href="#" class="overlay__control close jsCloseOverlay">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="16" cy="16" r="16" fill="#01DFF4"/>
        <rect width="2" height="16" rx="1" transform="matrix(0.684559 0.728957 -0.684559 0.728957 21 9.45789)" fill="#051E58"/>
        <rect width="2" height="16" rx="1" transform="matrix(0.684559 -0.728957 0.684559 0.728957 10 10.4579)" fill="#051E58"/>
      </svg>

    </a>

    <a href="#" class="overlay__control scroll animate__animated animate__heartBeat animate__infinite animate__slow">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="16" cy="16" r="16" fill="#01DFF4"/>
      <path d="M15.2929 24.7071C15.6834 25.0976 16.3166 25.0976 16.7071 24.7071L23.0711 18.3431C23.4616 17.9526 23.4616 17.3195 23.0711 16.9289C22.6805 16.5384 22.0474 16.5384 21.6569 16.9289L16 22.5858L10.3431 16.9289C9.95262 16.5384 9.31946 16.5384 8.92893 16.9289C8.53841 17.3195 8.53841 17.9526 8.92893 18.3431L15.2929 24.7071ZM15 8L15 24H17L17 8H15Z" fill="#051E58"/>
      </svg>

    </a>

    <ul class="list--smart-home flex flex--wrap jsSmartHomeTriggers">
      @include('vendor.digitalmarmalade.badges.what-is-ai.smart-home-triggers', ['title' => 'Smart Home Triggers'])
    </ul>

  </div>
</div>

@endsection
@section('javascript')
<script src="/badge-assets/{{$url['slug']}}/_global/js/smart-city.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/smart-home.js"></script>
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>

@endsection
