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
    <li class="step-counter__list-item step-counter__list-item--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
      <span class="jsTooltip" data-tooltip-content="#tooltip4_content">4</span>
    </li>
    <li class="step-counter__list-item step-counter__list-item--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
      <span class="jsTooltip" data-tooltip-content="#tooltip5_content">5</span>
    </li>
  </ol>
</aside>

<main class="main-content">
  @include('vendor.digitalmarmalade.badges.fake-news.task_13')
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

@endsection @section('javascript')
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_13.js"></script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection
