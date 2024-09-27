@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')

<main>
  @include('vendor.digitalmarmalade.badges.computer-vision.header', ['title' => 'Header'])
  @include('vendor.digitalmarmalade.badges.computer-vision.steps', ['title' => 'Steps'])

  <div class="group-1">
    <div class="holder holder--step-5 flex flex--center flex--column">
      <h1 class="section__title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">Training the CNN</h1>

      <div class="holder--instruction flex flex--center">
        <div class="js-holder-instruction-first">
          <div class="speech-bubble__holder flex flex--center flex--column hide-on-desktop">
            <div
              class="speech-bubble blue tip--bottom center animate__animated animate__fadeInDown animate__delay-1s animate__fast flex flex--column flex--align-end"
            >
              <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
                You now know what a convolutional neural network is!
              </p>

              <div class="flex flex--justify-end Js-not-remove">
                <a
                  class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn animate__delay-1s animate__faster step-5-intro-text-next"
                  >Continue</a
                >
              </div>
            </div>
            <img src="/badge-assets/computer-vision/_global/svg/icons/icon--instruction.svg" alt="" />
          </div>
          <div class="speech-bubble__holder hide-on-mobile flex flex--align-center">
            <img src="/badge-assets/computer-vision/_global/svg/icons/icon--instruction.svg" alt="" />
            <div
              class="speech-bubble blue tip--left animate__animated animate__fadeInRight animate__delay-1s animate__fast flex flex--column flex--align-end"
            >
              <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
                You now know what a convolutional neural network is!
              </p>

              <div class="flex flex--justify-end Js-not-remove">
                <a
                  class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn animate__delay-1s animate__faster step-5-intro-text-next"
                  >Continue</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('vendor.digitalmarmalade.badges.computer-vision.task_9') @include('vendor.digitalmarmalade.badges.computer-vision.task_10')

    <section class="hide" id="image-processing">
      <div class="holder bg--computer-zoomed-in">
        <div class="animation__holder--processing flex flex--center">
          <img src="/badge-assets/computer-vision/_global/imgs/tasks/task-11--helmet.png" alt="" class="width--auto helmet" />
          <img src="/badge-assets/computer-vision/_global/svg/animations/icon--processing.svg" alt="" class="width--auto icon--processing" />
          <table>
            <tbody>
              <tr>
                <td class="border--left">Motorcycle Helmet</td>
                <td class="border--right" id="motorcycle-initial">0%</td>
              </tr>
              <tr>
                <td class="border--left">Motocross Helmet</td>
                <td class="border--right" id="motocross-initial">0%</td>
              </tr>
              <tr>
                <td class="border--left">Car</td>
                <td class="border--right" id="car-initial">0%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    @include('vendor.digitalmarmalade.badges.computer-vision.task_11') @include('vendor.digitalmarmalade.badges.computer-vision.task_12')
  </div>

  <div class="group-2 flex flex--center hide">
    @include('vendor.digitalmarmalade.badges.computer-vision.task_13') @include('vendor.digitalmarmalade.badges.computer-vision.task_14')
  </div>

  <section class="flex flex--column flex--center full--screen hide" id="case-resolved" accesskey="">
    <div class="holder--instruction flex flex--center">
      <div class="speech-bubble__holder flex flex--center flex--column hide-on-desktop js-holder-instruction">
        <div
          class="speech-bubble yellow tip--bottom center animate__animated animate__fadeInDown animate__delay-1s animate__fast flex flex--column flex--align-end"
        >
          <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
            Video footage from a CCTV camera set up on the main road outside the Intelligence Agency has been run through the CNN that you have just
            trained to be processed.
          </p>

          <div class="flex flex--justify-end Js-not-remove">
            <a class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn animate__delay-1s animate__faster step-5-intro-text-next"
              >Continue</a
            >
          </div>
        </div>
        <img src="/badge-assets/computer-vision/_global/svg/icons/icon--android-yellow.svg" alt="" />
      </div>
      <div class="speech-bubble__holder hide-on-mobile flex flex--align-center js-holder-instruction">
        <img src="/badge-assets/computer-vision/_global/svg/icons/icon--android-yellow.svg" alt="" />
        <div
          class="speech-bubble yellow tip--left animate__animated animate__fadeInRight animate__delay-1s animate__fast flex flex--column flex--align-end"
        >
          <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
            Video footage from a CCTV camera set up on the main road outside the Intelligence Agency has been run through the CNN that you have just
            trained to be processed.
          </p>

          <div class="flex flex--justify-end Js-not-remove">
            <a class="btn btn--sm btn--blue inline-flex animate__animated animate__zoomIn animate__delay-1s animate__faster step-5-intro-text-next"
              >Continue</a
            >
          </div>
        </div>
      </div>
    </div>

    <div class="animation__holder">
      <div class="illustration--number-plate"></div>
      <div class="animation--case-resolved fake"></div>
      <div class="animation--case-resolved"></div>
    </div>
  </section>

  <div class="tooltip_templates">
    <span id="tooltip1_content">
      <p>The extent of something.</p>
    </span>
  </div>
</main>
@endsection @section('javascript')

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/text-box/step_5_intro.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_9.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_10.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_12.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_13.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_14.js"></script>

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
  oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>

@endsection
