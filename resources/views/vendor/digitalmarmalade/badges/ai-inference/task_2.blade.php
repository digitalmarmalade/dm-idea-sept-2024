<section class="container keywords" id="task-2-activity" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
  <div class="jsStory feedback feedback--large">
    <div class="feedback__bottom feedback__bottom--large">
      <img
        class="feedback__icon"
        src="/badge-assets/ai-inference/_global/svg/icon--android.svg"
        width="109"
        height="108"
        loading="lazy"
        decoding="async"
      />
    </div>

    <div class="feedback__top">
      <div class="bubble bubble--blue bubble--tip-middle-left">
        <h2 class="bubble__title">
          Let's Give it a Try!
        </h2>

        <p>
          For this task, we are going to use an object detection model. An object
          detection model first detects that an object is present and then determines
          what type of object it is.
        </p>

        <p>
          To begin this process, you will need to give the model lots of training data -
          in this case, images of recyclable waste and labels for each dataset.
        </p>

        <p>
          Find the correct label from the word menu and type it in the yellow box below each image.
        </p>

        <div class="Js-not-remove bubble__btn">
            <button
              class="btn btn--sm btn--blue"
            >
              Continue
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="keywords disabled">
    <ul class="keywords__labels">
      <li class="keywords__keyword">Glass</li>
      <li class="keywords__keyword">Metal</li>
      <li class="keywords__keyword">Paper</li>
      <li class="keywords__keyword">Plastic</li>
    </ul>

    <div class="Js_image-name keywords__options"></div>
    <div class="c-b" style="margin-bottom: 200px">
      <button
        class="
          Js_image-name-check
          btn
          btn--yellow
        "
        data-aos="zoom-in"
        data-aos-duration="1500"
        data-aos-delay="400"
        data-aos-anchor-placement="bottom-bottom"
        data-scroll-anchor="jsScrollAnchor1"
      >
        Check
      </button>
    </div>

    <div class="jsAnnotationFeedbackFail feedback feedback--small hide">
      <div class="feedback__top bubble bubble--red bubble--tip-bottom-left">
        <h3 class="bubble__title">
          Oops...
        </h3>
        <p>It looks like you haven't labelled all the images correctly.</p>
      </div>

      <div class="feedback__bottom feedback__bottom--small">
          <img
            class="feedback__icon"
            src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg"
            width="60"
            height="60"
          />

          <button class="jsAnnotationReset btn btn--white feedback__btn">
            Try Again
          </button>
        </div>
      </div>
    </div>

    <div class="jsAnnotationFeedbackSuccess feedback feedback--small hide">
      <div class="feedback__top bubble bubble--green bubble--tip-bottom-left">
        <h3 class="bubble__title">
          Well done!
        </h3>
        <p>You have correctly labelled each image. Now let’s process this training data to move on.</p>
      </div>

      <div class="feedback__bottom feedback__bottom--small feedback--small">
          <img
            class="feedback__icon"
            src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg"
            width="60"
            height="60"
          />

          <button id="task-2-btn" class="btn btn--yellow feedback__btn">
            Process Images
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="processing">
    <div class="processing__top">
      <div class="processing__images">
        <img
          class="processing__image processing__image--1"
          src="/badge-assets/ai-inference/_global/svg/bottle--5.svg"
          width="262"
          height="161"
          loading="lazy"
          decoding="async"
        />

        <img
          class="processing__image processing__image--2"
          src="/badge-assets/ai-inference/_global/svg/paper--1.svg"
          width="262"
          height="161"
          loading="lazy"
          decoding="async"
        />

        <img
          class="processing__image processing__image--3"
          src="/badge-assets/ai-inference/_global/svg/can--1.svg"
          width="262"
          height="161"
          loading="lazy"
          decoding="async"
        />
      </div>

      <img
        src="/badge-assets/ai-inference/_global/svg/spinner.svg"
        width="199"
        height="199"
        loading="lazy"
        decoding="async"
      />
    </div>

    <div class="processing__bottom">
      <p class="processing__item processing__item--1">
        Processing pictures of plastic...
      </p>
      <p class="processing__item processing__item--2">
        Processing pictures of paper...
      </p>
      <p class="processing__item processing__item--3">
        Processing pictures of metal...
      </p>
    </div>
  </div>

<div class="overlay"></div>
