@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
  class="step-1"
@endsection @section('page')

<ol class="progress">
  <li class="progress__item">
    <span class="progress__counter progress__counter--current"></span>
    <span class="sr-only">
      Step 1 - current
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 2
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 3
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 4
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 5
    </span>
  </li>
</ol>

@include('vendor.digitalmarmalade.badges.ai-inference.header',
  ['title' => 'Header'])

<main class="main-content n-pb">
  <section class="container">
    <h1
      class="t-centre"
      data-aos="fade-up" data-aos-duration="1500"
      data-aos-delay="150"
    >
      Key AI Terms
    </h1>

    <div
      class="double-col"
      data-aos="fade-up"
      data-aos-duration="1500"
      data-aos-delay="150"
    >
      <div class="col">
        <p>
          Before we get started, it may be helpful to go through
          the terms <strong>artificial intelligence (AI)</strong>,
          <strong>machine learning (ML)</strong> and <strong>deep
            learning (DL)</strong> and how to distinguish between
            them.
        </p>
      </div>

      <div class="col">
        <p>
          If you have completed one of the other Intel
          AI Bronze or Gold badges, you may have come across
          these terms already. If not, no need to worry.
          If you have, let's refresh!
        </p>
      </div>
    </div>

    <div class="circle-animation" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <div class="circle-animation__large">
        <h3>Artifical Intelligence</h3>
      </div>

      <div class="circle-animation__medium">
        <h3>Machine Learning</h3>
      </div>

      <div class="circle-animation__small">
        <h3>Deep<br /> Learning</h3>
      </div>
    </div>
  </section>

  @include('vendor.digitalmarmalade.badges.ai-inference.task_1')

  <section class="jsScrollAnchor1"></section>
</main>
@endsection

@section('javascript')
<script src="/badge-assets/{{
      $url['slug']
  }}/_global/js/tasks/task_1.js"></script>

<script src="/badge-assets/{{
      $url['slug']
  }}/_global/js/text-box/task_1_story.js"></script>
<script>
  $(document).ready(function () {
      var triggerMode = "hover";

      if ($("body").hasClass("touch")) {
          triggerMode = "click";
      }
  });
</script>

<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>

@endsection
