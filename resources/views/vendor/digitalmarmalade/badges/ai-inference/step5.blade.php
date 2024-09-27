@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') class="step-5" @endsection @section('page')

<ol class="progress">
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only"> Step 1 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only"> Step 2 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only"> Step 3 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only"> Step 4 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--current"></span>
    <span class="sr-only"> Step 5 - current </span>
  </li>
</ol>

@include('vendor.digitalmarmalade.badges.ai-inference.header', ['title' => 'Header'])

<main class="main-content">
  <section class="jsActivity1">
    <div class="container">
      <div class="activity-dual-view activity-dual-view--mr">
        <div class="jsActivityInstructions">
          <div class="feedback feedback--switched no-mt">
            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/animations/animation--alert.svg" width="227" height="227" />
            </div>

            <div class="feedback__top">
              <div
                style="max-width: 100%; margin-left: auto"
                class="bubble bubble--yellow bubble--tip-bottom-centre-right"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="150"
              >
                <p>
                  Please use this email template to draft your recommendations. Carefully read through the instructions for each section of the email
                  before you start to write. If you need to read the instructions again once you've started typing, click on the little information
                  icon.
                </p>
              </div>
            </div>
          </div>

          <div class="jsIncorrect hide feedback feedback--switched">
            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="102" height="102" />
            </div>

            <div class="feedback__top mb-s">
              <div class="bubble bubble--red bubble--tip-bottom-centre" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                <p>Hmm... please explain your ideas further.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="jsLetter">
          <div class="letter">
            <div class="letter__header">
              <p><strong>To:</strong> City Planning Team</p>
              <p><strong>Subject:</strong> Proposed Solutions for Intersection Congestion</p>
            </div>

            <div class="letter__body">
              <p>Dear FutureCity Manager,</p>
              <div class="letter-inputs">
                <!-- This all has to be on one line unfortunately -->
                <div class="holder--text-area">

                  <textarea
                    style="min-height: 13.7rem"
                    class="jsIntro letter-input letter-input--default"
                    placeholder="Write a brief introduction to explain why you are sending this email and what this email will contain. It doesn't need to be long, this is to give your reader context about what is to come."
                  ></textarea>
                  <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip9_content">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.0928 24.3293C5.46536 24.3293 0.0927734 18.9568 0.0927734 12.3293C0.0927734 5.70193 5.46536 0.329346 12.0928 0.329346C18.7202 0.329346 24.0928 5.70193 24.0928 12.3293C24.0855 18.9537 18.7172 24.3221 12.0928 24.3293ZM9.68077 11.1173V13.5293H10.8808V18.3293H14.5048V15.9293H13.2928L13.3048 11.1185L9.68077 11.1173ZM10.8808 6.32935V8.75215H13.3048V6.32935H10.8808Z" />
                    </svg>
                  </span>
                </div>
                <div class="holder--text-area">

                  <textarea
                    style="min-height: 24rem"
                    class="jsBody letter-input letter-input--default"
                    placeholder="Brainstorm some possible solutions that could help to reduce congestion at this intersection. You have identified that a lot of buses use this intersection and when there are even more buses present during the busiest hours of the day, they are slowing down traffic. What could you propose to the City Planning Team at FutureCity to help solve this problem? Don't be afraid to get creative! Describe at least 3 ideas."
                  ></textarea>
                  <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip10_content">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.0928 24.3293C5.46536 24.3293 0.0927734 18.9568 0.0927734 12.3293C0.0927734 5.70193 5.46536 0.329346 12.0928 0.329346C18.7202 0.329346 24.0928 5.70193 24.0928 12.3293C24.0855 18.9537 18.7172 24.3221 12.0928 24.3293ZM9.68077 11.1173V13.5293H10.8808V18.3293H14.5048V15.9293H13.2928L13.3048 11.1185L9.68077 11.1173ZM10.8808 6.32935V8.75215H13.3048V6.32935H10.8808Z" />
                    </svg>
                  </span>

                </div>
                <div class="holder--text-area">

                  <textarea
                    style="min-height: 11.1rem"
                    class="jsClosing letter-input letter-input--default"
                    placeholder="When finished with your proposed ideas, don't forget to add a closing to your message. It is important to end the message off in a polite and professional way."
                  ></textarea>
                  <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip11_content">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.0928 24.3293C5.46536 24.3293 0.0927734 18.9568 0.0927734 12.3293C0.0927734 5.70193 5.46536 0.329346 12.0928 0.329346C18.7202 0.329346 24.0928 5.70193 24.0928 12.3293C24.0855 18.9537 18.7172 24.3221 12.0928 24.3293ZM9.68077 11.1173V13.5293H10.8808V18.3293H14.5048V15.9293H13.2928L13.3048 11.1185L9.68077 11.1173ZM10.8808 6.32935V8.75215H13.3048V6.32935H10.8808Z" />
                    </svg>
                  </span>
                </div>
                <div class="holder--text-area">

                  <textarea class="jsSign letter-input letter-input--default" placeholder="Lastly, don't forget to sign off on your email!"></textarea>
                  <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip12_content">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.0928 24.3293C5.46536 24.3293 0.0927734 18.9568 0.0927734 12.3293C0.0927734 5.70193 5.46536 0.329346 12.0928 0.329346C18.7202 0.329346 24.0928 5.70193 24.0928 12.3293C24.0855 18.9537 18.7172 24.3221 12.0928 24.3293ZM9.68077 11.1173V13.5293H10.8808V18.3293H14.5048V15.9293H13.2928L13.3048 11.1185L9.68077 11.1173ZM10.8808 6.32935V8.75215H13.3048V6.32935H10.8808Z" />
                    </svg>
                  </span>
                </div>
              </div>
            </div>
            <button onclick="send()" class="btn btn--sm btn--blue mt-s btn--right">Send</button>
          </div>
        </div>
      </div>

      <div class="jsCorrect hide feedback feedback--switched container--sm">
        <div class="feedback__bottom">
          <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-success.svg" width="102" height="102" />
        </div>

        <div class="feedback__top mb-s">
          <div class="bubble bubble--green bubble--tip-bottom-centre-right" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            <p>Well done and congratulations on sending your proposal off!</p>

            <p>
              I hope you enjoyed this assignment and getting to brainstorm some of your own solutions after all of the research that you have done!
            </p>

            <button class="btn btn--blue mt-s btn--sm btn--sm btn--right">Continue</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="jsActivity2 hide activity">
    <div class="container flex flex--align-start">
      <div class="activity-dual-view activity-dual-view--mr">
        <div>
          <div class="feedback feedback--switched no-mt">
            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/animations/animation--alert.svg" width="227" height="227" />
            </div>

            <div class="jsStory feedback__top">
              <div
                style="max-width: 100%; margin-left: auto"
                class="bubble bubble--yellow bubble--tip-bottom-centre-right"
                data-aos="fade-up"
                data-aos-duration="1500"
                data-aos-delay="150"
              >
                <p>I heard some great feedback from FutureCity Manager and the City Planning Team about what you proposed.</p>

                <p>
                  The following is a shortlist of ideas that FutureCity would like to explore for solving congestion at this intersection. Take a look
                  through… did any of these match what you wrote in your proposal?
                </p>

                <button class="Js-not-remove btn btn--blue btn--sm btn--right">Continue</button>
              </div>
            </div>
          </div>
        </div>

        <div>
          <h2 class="heading-three no-tt">Possible solutions to the intersection congestion problem:</h2>
          <ul class="list list--one-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            <li class="list__item list__item--white bold">Building a new bus lane</li>

            <li class="list__item list__item--white bold">Rerouting some of the buses so they do not all go through this same intersection</li>

            <li class="list__item list__item--white bold">
              Implementing a number of “express” buses that don't stop at every single bus stop to help move traffic along faster
            </li>

            <li class="list__item list__item--white bold">
              Conducting a study on bus ridership for these routes to reduce buses where they do not need to run as frequently
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>

@include('vendor.digitalmarmalade.badges.ai-inference.tooltips') @endsection @section('javascript')
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_2.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/task_5.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/text-box/step_5_story.js"></script>

<script>
  oBadges.setSlugAndStep('{{$url["slug"]}}', 5);
</script>

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

@endsection
