@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')
@include('vendor.digitalmarmalade.badges.fake-news.header', ['title' => 'Header'])

<aside class="step-counter">
  <ol class="step-counter__list">
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
      <span class="jsTooltip" data-tooltip-content="#tooltip1_content">1</span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">
      <span class="jsTooltip" data-tooltip-content="#tooltip2_content">2</span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
      <span class="jsTooltip" data-tooltip-content="#tooltip3_content">3</span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
      <span class="jsTooltip" data-tooltip-content="#tooltip4_content">4</span>
    </li>
    <li class="step-counter__list-item" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
      <span class="jsTooltip" data-tooltip-content="#tooltip5_content">5</span>
    </li>
  </ol>
</aside>

<main class="main-content">
  <section class="container">
    <h1 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Fake News<br />
      Training Data
    </h1>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Based on what you have learned about supervised and unsupervised learning models, which one do you think might be more suitable for a fake news detector?
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      There are many different features and characteristics that can help us determine whether a piece of news is real or fake and how someone designs their fake news detector will depend on how they want to program their fake news detector to identify and assess certain features that fake news tend to have. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    In this badge, we will be providing the fake news detector with labelled training data and thus we will be using a supervised learning model. 
    </p>
    
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    Let’s get to work with preparing the training data!
    </p>
    
    @include('vendor.digitalmarmalade.badges.fake-news.task_7') 
    @include('vendor.digitalmarmalade.badges.fake-news.task_8')
    @include('vendor.digitalmarmalade.badges.fake-news.task_9') 
    @include('vendor.digitalmarmalade.badges.fake-news.task_10')
    @include('vendor.digitalmarmalade.badges.fake-news.task_11') 
    @include('vendor.digitalmarmalade.badges.fake-news.task_12')
  </section>
</main>

@include('vendor.digitalmarmalade.badges.fake-news.tooltips') @endsection @section('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_7.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_8.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_9.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_10.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_11.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_12.js"></script>

<script>
  $(document).ready(function () {
    var triggerMode = "hover";

    if ($("body").hasClass("touch")) {
      triggerMode = "click";
    }

    $(".jsTooltip").tooltipster({
      trigger: triggerMode,
      maxWidth: 350,
    });
  });
</script>

<script>
  const timer = document.getElementById("timer");

  timer.pauseAnimations();

  function runTimer() {
    timer.unpauseAnimations();
  }

  function stopTimer() {
    timer.pauseAnimations();
  }
</script>

<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
