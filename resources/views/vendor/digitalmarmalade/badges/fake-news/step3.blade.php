@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')
@include('vendor.digitalmarmalade.badges.fake-news.header', ['title' => 'Header'])

<aside class="step-counter">
  <ol class="step-counter__list">
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
      <span class="jsTooltip" data-tooltip-content="#tooltip1_content"> 1 </span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">
      <span class="jsTooltip" data-tooltip-content="#tooltip2_content"> 2 </span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
      <span class="jsTooltip" data-tooltip-content="#tooltip3_content"> 3 </span>
    </li>
    <li class="step-counter__list-item" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
      <span class="jsTooltip" data-tooltip-content="#tooltip4_content"> 4 </span>
    </li>
    <li class="step-counter__list-item" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
      <span class="jsTooltip" data-tooltip-content="#tooltip5_content"> 5 </span>
    </li>
  </ol>
</aside>

<main class="main-content">
  <section class="container">
    <h1 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">AI Learning Models</h1>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Let’s learn about different AI learning models that you could use to design your fake news detector!
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Within artificial intelligence (AI) and machine learning (ML), there are two main types of learning models:</p>
    </p>

    <div style="padding:20px;">
    <ol>
      <li style="margin-bottom:20px; font-weight:bold;">
        <div style="font-weight:normal;">
          <strong>The supervised learning model</strong><br /><br />

          Supervised learning is when we train a machine using data that has already been labelled.<br /><br />

          This means that we technically already know what the results should be and we will need to have some data that has been labelled correctly already to get us started. For example, we have to know already, that an image of a cat should be labelled as “cat”. To give an NLP example, an email subject line with the word “WINNER” might be labelled as Junk Mail, and this is used as training data. 
        </div>
      </li>
      <li style="font-weight:bold;">
        <div style="font-weight:normal;">
          <strong>The unsupervised learning model</strong><br /><br />
          Unsupervised learning, on the other hand, is when we train a machine without any labelled data, so the model has to find patterns from the input data and make a prediction without any guidance, or supervision.
        </div>
      </li>
    </ol>
    </div>

    @include('vendor.digitalmarmalade.badges.fake-news.task_4') 
    @include('vendor.digitalmarmalade.badges.fake-news.task_5')
    @include('vendor.digitalmarmalade.badges.fake-news.task_6')
  </section>

  <a class="jsContinue btn btn--orange force-centre hide" onclick="oBadges.stepCompleted();" href="{{ $links['next'] }}">
    Continue
    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g id="icon" clip-path="url(#clip0_1585_16111)">
        <path
          id="arrow / circle_right"
          d="M12.4011 24.7544C5.77604 24.7471 0.407178 19.3788 0.399902 12.7544V12.5144C0.531833 5.91985 5.96196 0.667964 12.5579 0.755472C19.1539 0.842981 24.4427 6.23707 24.3996 12.8328C24.3565 19.4285 18.9976 24.7531 12.4011 24.7544ZM12.4011 3.15441C7.09864 3.15441 2.80014 7.45248 2.80014 12.7544C2.80014 18.0563 7.09864 22.3544 12.4011 22.3544C17.7036 22.3544 22.0021 18.0563 22.0021 12.7544C21.9961 7.45494 17.7011 3.16037 12.4011 3.15441ZM12.4011 18.7544L10.7089 17.0624L13.8052 13.9544H6.4005V11.5544H13.8052L10.7089 8.44641L12.4011 6.75441L18.4017 12.7544L12.4011 18.7544Z"
        />
      </g>
      <defs>
        <clipPath id="clip0_1585_16111">
          <rect width="24" height="24" fill="white" transform="translate(0.399902 0.754395)" />
        </clipPath>
      </defs>
    </svg>
  </a>
</main>

@include('vendor.digitalmarmalade.badges.fake-news.tooltips') @endsection @section('javascript')
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_4.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_5.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_6.js"></script>

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
  oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>
@endsection
