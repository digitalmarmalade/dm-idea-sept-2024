@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')

<main>
  @include('vendor.digitalmarmalade.badges.chatbots.header', ['title' => 'Header']) @include('vendor.digitalmarmalade.badges.chatbots.main-chat')

  <div class="jsStep hide">
    @include('vendor.digitalmarmalade.badges.chatbots.side-chat')

    <aside class="step__counter">
      <ol>
        <li class="step__counter--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
          <span class="jsTooltip" data-tooltip-content="#tooltip13_content"> 1 </span>
        </li>
        <li class="step__counter--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">
          <span class="jsTooltip" data-tooltip-content="#tooltip14_content"> 2 </span>
        </li>
        <li class="step__counter--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
          <span class="jsTooltip" data-tooltip-content="#tooltip15_content"> 3 </span>
        </li>
        <li class="step__counter--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
          <span class="jsTooltip" data-tooltip-content="#tooltip16_content"> 4 </span>
        </li>
        <li class="step__counter--completed" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
          <span class="jsTooltip" data-tooltip-content="#tooltip17_content"> 5 </span>
        </li>
        <li class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
          <span class="jsTooltip" data-tooltip-content="#tooltip18_content"> 6 </span>
        </li>
      </ol>
    </aside>

    <section>
      <article class="jsReflection">
        <div class="container__large">
          <div class="container__small">
            <div class="activity__grey--container" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
              <h1 class="heading-orange heading-two">
                Strengths<br />
                and<br />
                Weaknesses
              </h1>
              <p>
                Throughout this badge, you have learnt about the features of different types of chatbots and created your own chatbot, which
                encourages users to be more eco-friendly.
              </p>

              <p>
                <strong>
                  Can you identify which of the following statements are considered as strengths or weaknesses of the chatbot you created?
                </strong>
              </p>

              <p class="example">
                You will start this game with three lives, if you run out of lives before you finish the game, you will have to start over.
              </p>

              <div class="step-5__activity--step-3-progress">
                <p id="question-progress" class="step-5__activity--step-3-progress__progress">1/10</p>
                <p class="step-5__activity--step-3-progress__lives">
                  <strong> Lives remaining: <span id="lives">3</span> </strong>
                </p>
              </div>

              <div class="holder--reflection">
                <div class="jsQuestion1 step-5__activity--step-3-container">
                  <p class="step-5__activity--step-3-statement">
                    The chatbot’s questions and answers are all pre-defined, so the developer has control of the conversation.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion2 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    If a user accidentally inserts a typo into the chatbot dialogue, they will not be understood.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion3 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    Users must remain on topic and finish the dialogue for one question before switching to another question.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion4 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    The chatbot holds intelligence across six different eco areas and can tell users how to be more eco-friendly.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion5 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    The chatbot uses rule-based logic and can produce an appropriate response to a user’s query on a set topic.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion6 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    The logic and implementation of the chatbot is simpler than AI alternatives, so the development costs would be more affordable.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion7 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    The chatbot cannot learn on its own and will need to be re-programmed if you need to update it or add new eco-friendly tips.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion8 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    It isn’t possible for the chatbot to learn incorrect information, whereas AI chatbots can and do.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion9 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    The interactions that this chatbot can produce can feel robotic rather than conversational.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>

                <div class="jsQuestion10 step-5__activity--step-3-container hide">
                  <p class="step-5__activity--step-3-statement">
                    If someone wanted to learn more ways to be eco-friendly outside of what the chatbot has been programmed to say, the chatbot can't
                    help because its responses are pre-defined.
                  </p>

                  <ul class="step-5__activity--step-3-options">
                    <li class="step-5__activity--step-3-option-strength">
                      <button>Strength</button>
                    </li>

                    <li class="step-5__activity--step-3-option-weakness">
                      <button>Weakness</button>
                    </li>
                  </ul>
                </div>
              </div>

              <button class="jsCheck btn btn-white centered">check</button>
              <p class="success--box hide">
                Excellent work! <br /><br />
                You have correctly identified some of the strengths of the chatbot, as well as some of its weaknesses.<br /><br />
              </p>
              <p class="jsFail fail--box hide">
                This is incorrect! Please try again. Be cautious, you have only <span class="jsLives"></span> remaining.
              </p>
              <p class="jsSelect fail--box hide">Please identify either it's a weaknesses or a strength!</p>
              <p class="jsZeroLife fail--box hide">Oops! You have no lives left. You have to start this game again.</p>
              <!-- <button class="jsReveal btn btn-white centered">Reveal</button> -->
            </div>
          </div>
        </div>
      </article>
    </section>

    <section class="jsContinue complete hide">
      <div class="container__large">
        <p class="step__completed" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
          <a class="btn btn-orange" onclick="oBadges.stepCompleted();" href="{{ $links['next'] }}">
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
        </p>
      </div>
    </section>

    <div class="tooltip_templates">
      <span id="tooltip1_content">
        <p>
          A word of phrase that means exactly or nearly the same as another word. For example, in the English language the words begin, commence,
          start and initiate are all synonyms of one another.
        </p>
      </span>

      <span id="tooltip2_content">
        <p>
          In computer science, rule-based refers to a system used to store and manipulate knowledge to interpret information in a useful way. It is
          often used in artifical intelligence operations and intelligence.
        </p>
      </span>

      <span id="tooltip3_content">
        <p>
          Frequently Asked Questions (FAQs) is often used in articles, websites, email lists and online forums where common questions tend to recur,
          for example through posts or queries by new users related to common knowledge gaps.
        </p>
      </span>

      <span id="tooltip4_content">
        <p>
          An AI chatbot (Artificial Intelligence chatbot) is a chatbot that's powered by artifical intelligence. Unlike regular chatbots, AI chatbots
          are able to understand user queries through natural language processing (NLP) and give intelligent answers to them.
        </p>
      </span>

      <span id="tooltip5_content">
        <p>
          Is the study of computer algorithms that can improve automatically through experience and by the use of data. It is seen as part of
          artificial intelligence.
        </p>
      </span>

      <span id="tooltip6_content">
        <p>
          Refers to something made by combining two different elements. In terms of chatbots, it refers to a chatbot that is developed using a
          combination of rule-based, AI and/or live agent services.
        </p>
      </span>

      <span id="tooltip7_content">
        <p>
          The scientific study of language. It encompasses the analysis of every aspect of language, as well as the methods for studying and modelling
          them.
        </p>
      </span>

      <span id="tooltip8_content">
        <p>A conclusion reached on the basis of evidence and reasoning.</p>
      </span>

      <span id="tooltip9_content">
        <p>A statistical model of input data represented as a tree structure.</p>
      </span>

      <span id="tooltip10_content">
        <p>The process of training or accustoming a chatbot to behave in a certain way or to accept certain circumstances.</p>
      </span>

      <span id="tooltip11_content">
        <p>A form of user interface that allows users to interact with electronic technology through graphical icons and audio indicators.</p>
      </span>

      <span id="tooltip12_content">
        <p>A combination of beliefs and emotions that explains an action based mainly on emotion instead of reason.</p>
      </span>

      <span id="tooltip13_content">
        <p>Understand different types of Chatbot</p>
      </span>

      <span id="tooltip14_content">
        <p>Chatbot design process, NPL and AI</p>
      </span>

      <span id="tooltip15_content">
        <p>Research a range of chatbot case studies</p>
      </span>

      <span id="tooltip16_content">
        <p>Make a chatbot</p>
      </span>

      <span id="tooltip17_content">
        <p>Test and deploy a chatbot</p>
      </span>

      <span id="tooltip18_content">
        <p>Reflection</p>
      </span>
    </div>

    <div class="chatbot__toggle--icon" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
      <button>
        <img src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg" alt="Chatbot icon" />
      </button>
    </div>
  </div>
</main>

@endsection @section('javascript')

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
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/main_chatbot.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/step_6.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/chatbot_reflection.js"></script>
<!-- <script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/chatbot_reflection copy.js"></script> -->
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 6);
</script>
@endsection
