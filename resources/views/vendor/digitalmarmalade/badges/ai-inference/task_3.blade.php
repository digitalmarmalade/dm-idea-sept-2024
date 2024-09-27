<section class="jsTask3 activity--factory activity hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
  <div class="inference-animation">
    <div class="container">
      <div class="inference-animation__top">
        <div class="feedback feedback--small inference-animation__bubble">
          <div class="feedback__top">
            <div class="bubble bubble--blue bubble--tip-bottom-left">
              <p>Now that the robot has been trained with all of that data, let's check if it is working the way it is supposed to. <br /><br />
                Click the inference button then watch the conveyor belt below and see what happens on the robot's screen as each item is scanned. <br /><br />
                Please wait a moment as the items are being loaded.
              </p>

              <!-- <div class="bubble__btn Js-not-remove">
                <button class="btn btn--blue btn--sm">Continue</button>
              </div> -->
            </div>
          </div>

          <div class="jsInference feedback__bottom feedback__bottom--large">
            <img
              class="feedback__icon"
              src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--android.svg"
              width="109"
              height="108"
              loading="lazy"
              decoding="async"
            />

            <button class="btn btn--yellow feedback__btn">Inference</button>
          </div>
        </div>

        <ul class="inference-animation__list list">
          <li class="jsPlasticItem list__item list__item--white list__item--small inference-animation__list-item">
            Plastic
            <span class="inference-animation__list-item__p"> 0% </span>
          </li>

          <li
            class="jsGlassItem list__item list__item--white list__item--small inference-animation__list-item inference-animation__list-item--active"
          >
            Glass
            <span class="inference-animation__list-item__p"> 0% </span>
          </li>

          <li class="jsMetalItem list__item list__item--white list__item--small inference-animation__list-item">
            Metal
            <span class="inference-animation__list-item__p"> 0% </span>
          </li>

          <li class="jsPaperItem list__item list__item--white list__item--small inference-animation__list-item">
            Paper
            <span class="inference-animation__list-item__p"> 0% </span>
          </li>
        </ul>
      </div>
    </div>

    <div class="inference-animation__bottom">@include('vendor.digitalmarmalade.badges.ai-inference.factory-animation--paused')</div>
  </div>

  <div class="jsComplete hide">
    <div class="jsStory feedback feedback--small container">
      <div class="feedback__top bubble bubble--green bubble--tip-bottom-left">
        <h3 class="bubble__title">Well done!</h3>

        <p>
          The percentage that you see next to the label represents how confident the AI model is that the object detected belongs to that label. As
          you can see, your smart waste bin robot is sorting recyclable waste the way it is supposed to! You have just trained and inferenced your own
          object detection model! Well done.
        </p>
        <div class="bubble__btn Js-not-remove">
          <button class="btn btn--blue btn--sm">Continue</button>
        </div>
      </div>

      <div class="feedback__bottom feedback__bottom--small">
        <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-success.svg" width="60" height="60" />
      </div>
    </div>

    <!-- <p class="container--sm t-centre" style="margin-top: 10rem">
      This activity is a simple and illustrative example of how you can use a pre-defined AI algorithm (the object detection model) to help you create
      and complete an AI task. Just like this algorithm, there are hundreds of AI models created and shared by people all over the world that are
      readily available online and free to use!
    </p> -->

    <div class="jsNextPage container c-b hide">
      <a
        class="btn btn--yellow force-centre"
        onclick="oBadges.stepCompleted();"
        href="{{ $links['next'] }}"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="400"
      >
        Continue
      </a>
    </div>
  </div>
</section>
