<section
  class="activity--light-blue activity task-1"
  data-aos="fade-up"
  data-aos-duration="1500"
  data-aos-delay="150"
  data-scroll-anchor="jsScrollAnchor1"
>
  <div class="container">
    <p class="t-centre">Read through the definitions below and select the corresponding term in the drop down menu.</p>

    <div id="task-1-activity" class="definition-terms"></div>

    <div class="c-b">
      <button class="btn btn--yellow" id="task-1-check">Check</button>
    </div>

    <div id="task-1-negative" class="hide feedback feedback--small">
      <div class="feedback__top bubble bubble--red bubble--tip-bottom-left">
        <h3 class="bubble__title">Oops...</h3>
        <p>That's not quite right. Please read all of the definitions carefully and try again.</p>
      </div>

      <div class="feedback__bottom feedback__bottom--small">
        <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-fail.svg" width="60" height="60" />

        <button class="jsAnnotationReset btn btn--white feedback__btn">Try Again</button>
      </div>
    </div>

    <div class="jsSelectOption hide feedback feedback--small">
      <div class="feedback__top bubble bubble--red bubble--tip-bottom-left">
        <h3 class="bubble__title">Oops...</h3>
        <p>Please select an answer for each of the definitions.</p>
      </div>

      <div class="feedback__bottom feedback__bottom--small">
        <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-fail.svg" width="60" height="60" />

        <button class="jsAnnotationReset btn btn--white feedback__btn">OK</button>
      </div>
    </div>

    <div id="task-1-positive" class="feedback feedback--small hide">
      <div class="feedback__top bubble bubble--green bubble--tip-bottom-left">
        <h3 class="bubble__title">Well done!</h3>
        <p>Content</p>
        <div class="bubble__btn Js-not-remove">
          <button class="btn btn--sm btn--blue jsTask1TextNext">Continue</button>
        </div>
      </div>

      <div class="feedback__bottom feedback__bottom--small">
        <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-success.svg" width="60" height="60" />

        <div class="jsContinue container c-b hide">
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
    </div>
  </div>
</section>
