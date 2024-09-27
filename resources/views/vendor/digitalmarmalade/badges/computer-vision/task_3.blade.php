<section class="activity task-3" data-aos="fade-up" data-aos-duration="1500" data-scroll-anchor="jsScrollAnchor1">
  <div class="holder flex flex--column flex--align-center">
    <div class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200" data-scroll-anchor="jsScrollAnchor1">
      <p>
        <strong>Now let's try this with a coloured image!</strong><br />
        Hover your cursor over (or click) the image of the flower to find the RGB values for each colour. Then, enter the correct RGB values in the
        grid to colour in the 9 empty pixels on the incomplete image. Can you make the images look the same?
      </p>
    </div>

    <!-- Hassan, make sure the input range goes from 0 to 255 -->
    <div class="Js_color-image container">
      <div class="reference_container"></div>
      <div class="input_container"></div>
      <div class="output_container">
        <div class="manipulated-area"></div>
      </div>
    </div>

    <button
      id="colorImageCheck"
      class="js_color-image-check btn btn--yellow inline-flex flex--center flex--align-self-center"
      data-aos="zoom-in"
      data-aos-duration="1500"
      data-aos-delay="300"
      data-scroll-anchor="jsScrollAnchor1"
    >
      Check
    </button>

    <div class="activity--feedback activity--feedback-fail jsColorFeedbackFail hide">
      <div class="holder">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
              <strong class="title">Oops...</strong>
            </p>

            <p>
              The two images don’t quite look the same. The pixels that were incorrect have been reset. Please try them again. You can hover your
              cursor over (or click) the image of the flower to reveal the RGB values of each pixel.
            </p>
          </div>
          <img
            class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster"
            src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-fail.svg"
          />
          <a class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsColorReset"
            >Try again</a
          >
        </div>
      </div>
    </div>

    <div class="activity--feedback activity--feedback-success jsColorFeedbackSuccess hide">
      <div class="speech-bubble--holder flex flex--end flex--column">
        <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
          <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
            <strong class="title">That’s correct!</strong>
          </p>

          <p>Well done.</p>
        </div>
        <img
          class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster"
          src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-success.svg"
        />
        <a
          class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster"
          onclick="oBadges.stepCompleted();"
          href="{{ $links['next'] }}"
          >Continue</a
        >
      </div>
    </div>

    <!-- Between 0 to 255 message -->
    <div class="activity--feedback activity--feedback-fail jsFeedbackLimit hide" id="color-limit">
      <div class="speech-bubble--holder">
        <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
          <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast">
            <strong class="title">Oops...</strong>
          </p>

          <p>Limit your input within 0 to 255</p>
        </div>
        <img
          class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster"
          src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-fail.svg"
        />
        <a class="btn btn--white inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsColorOK">OK</a>
      </div>
    </div>
  </div>
</section>

<section class="jsScrollAnchor1"></section>
