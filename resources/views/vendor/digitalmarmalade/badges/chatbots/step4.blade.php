@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')

<main>
  @include('vendor.digitalmarmalade.badges.chatbots.header', ['title' => 'Header']) @include('vendor.digitalmarmalade.badges.chatbots.main-chat')-

  <div id="vue-container" class="jsStep">
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
        <li class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
          <span class="jsTooltip" data-tooltip-content="#tooltip16_content"> 4 </span>
        </li>
        <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
          <span class="jsTooltip" data-tooltip-content="#tooltip17_content"> 5 </span>
        </li>
        <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
          <span class="jsTooltip" data-tooltip-content="#tooltip18_content"> 6 </span>
        </li>
      </ol>
    </aside>

    <!-- letter -->
    <section>
      <div class="container__large">
        <div class="container__small">
          <div class="activity__brief" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="150">
            <p id="name">Dear Simone Cabras,</p>
            <p>
              As our newest chatbot developer, you have been tasked with creating your own chatbot.
            </p>
            <p>
              Your new chatbot must help inspire users to live more sustainably. It needs to respond to user questions with pre-programmed eco-friendly suggestions. Questions and answers will be categorised under the following six headings:
            </p>
            <ul class="list__triple-col">
              <li>Energy</li>
              <li>Water</li>
              <li>Food</li>
              <li>Travel</li>
              <li>Fashion</li>
              <li>Waste</li>
            </ul>
            <p>
              Thank you and good luck,<br /><br />
              iDEA Team
            </p>
          </div>
        </div>
      </div>

      <!-- /letter -->
      <!-- step 1 -->
      <div class="jsStep1">
        <div class="container__large">
          <div class="container__small">
            <div class="activity__grey--container" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
              <div class="activity__grey--counter">Step 1</div>
              <h3 class="heading-orange">
                Chatbot<br />
                Selection
              </h3>
              <p>First you need to choose which type of chatbot you think will be most suitable:</p>
              <ul class="step-4__activity--step-1-option-container">
                <li class="step-4__activity--step-1-option-success">
                  <button class="jsRuleBasedIcon">
                    <figure>
                      <span class="">
                        <img src="/badge-assets/chatbots/_global/svg/icon--chatbot-rule-based.svg" alt="Rule-based chatbot" />
                      </span>
                      <figcaption>
                        Rule-based<br />
                        Chatbot
                      </figcaption>
                    </figure>
                  </button>
                </li>
                <li>
                  <button class="jsAIIcon">
                    <figure>
                      <span>
                        <img src="/badge-assets/chatbots/_global/svg/icon--chatbot-ai.svg" alt="Artifical intelligence chatbot" />
                      </span>
                      <figcaption>
                        AI<br />
                        Chatbot
                      </figcaption>
                    </figure>
                  </button>
                </li>
                <li>
                  <button class="jsHybridIcon">
                    <figure>
                      <span class="">
                        <img src="/badge-assets/chatbots/_global/svg/icon--chatbot-hybrid.svg" alt="Hybrid chatbot" />
                      </span>
                      <figcaption>
                        Hybrid<br />
                        Chatbot
                      </figcaption>
                    </figure>
                  </button>
                </li>
              </ul>

              <p class="jsRuleBased success--box hide">Well done! A rule-based chatbot is the best choice as your chatbot’s main function will be to answer questions with pre-programmed responses.</p>
              <p class="jsAI fail--box hide">
                Oops, that’s not quite right. Your chatbot does not need to be an AI chatbot as it does not need to learn from user responses, it only needs to answer questions with pre-programmed responses. Please have another go. 
              </p>
              <p class="jsHybrid fail--box hide">
                Sorry, a Hybrid chatbot is not the right answer here as your chatbot will not require any human interaction. It just needs to respond to questions with pre-programmed responses. Please try again.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- /step 1 -->

      <!-- step 2 -->
      <div id="activity2_module" class="jsStep2 hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <activity2></activity2>
      </div>
      <!-- /step 2 -->

      <!-- step 3 -->
      <div id="activity3_module" class="jsStep3 hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <activity3></activity3>
      </div>
      <!-- /step 3 -->

      <!-- step 4 -->
      <div class="jsStep4 hide" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <div id="activity4_1_module" class="">
          <activity4_1></activity4_1>
        </div>

        <div id="activity4_2_module" class="hide">
          <activity4_2></activity4_2>
        </div>

        <div id="activity4_3_module" class="hide">
          <activity4_3></activity4_3>
        </div>

        <div id="activity4_4_module" class="hide">
          <activity4_4></activity4_4>
        </div>

        <div id="activity4_5_module" class="hide">
          <activity4_5></activity4_5>
        </div>

        <div id="activity4_6_module" class="hide">
          <activity4_6></activity4_6>
        </div>

        <div id="activity4_7_module" class="hide">
          <activity4_7></activity4_7>
        </div>

        <div id="activity4_8_module" class="hide">
          <activity4_8></activity4_8>
        </div>

        <!-- <button class="jsCompleteCode btn btn-orange hide">
                    Show Complete Code
                </button> -->

        <!--- this will replace the middle playground from the previous part (the dropdown remains the same) -->
        <div class="jsCompleteCode container__large hide">
          <div class="container__small">
            <div class="activity__grey--container">
              <div class="step-4__activity--step-4-code-example-container">
                <div class="activity__grey--speech-bubble">
                  <img src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg" alt="Chatbot icon" />
                  <p>
                    You have just programmed your chatbot to say hello, respond to questions that it recognises as being about waste and food, and to provide a response to let the user know if it is not confident enough to provide a useful answer. Great stuff!
                    <br /><br />
                    The rest of the blocks have been assembled for you. The chatbot can now provide responses to questions about waste, food, energy, water, travel and fashion.
                    <br /><br />
                    Take a look at all the assembled blocks below.
                    <br /><br />
                    You will see that the program repeats itself for each question and answer.                 
                    <br /><br />
                    Nesting (by placing blocks within other blocks) makes it more computationally efficient because the program can just repeat itself and requires less code blocks.                  
                    <br /><br />
                    Let’s move on.</p>
                </div>

                <div class="step-4__activity--step-4-code-playground-bottom" id="playground-blockcode--complete">
                  <img src="/badge-assets/chatbots/_global/svg/blockcode/blockcode--completed-updated2.svg" width="350" alt="" />
                </div>
              </div>

              <div class="container__large">
                <p class="step__completed">
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
            </div>
          </div>
        </div>
        <!-- /step 4 -->
      </div>
    </section>

    <div class="chatbot__toggle--icon">
      <button>
        <img src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg" alt="Chatbot icon" />
      </button>
    </div>
  </div>
</main>

<div class="tooltip_templates">
  <span id="tooltip1_content">
    <p>
      A word of phrase that means exactly or nearly the same as another word. For example, in the English language the words begin, commence, start
      and initiate are all synonyms of one another.
    </p>
  </span>

  <span id="tooltip2_content">
    <p>
      In computer science, rule-based refers to a system used to store and manipulate knowledge to interpret information in a useful way. It is often
      used in artifical intelligence operations and intelligence.
    </p>
  </span>

  <span id="tooltip3_content">
    <p>
      Frequently Asked Questions (FAQs) is often used in articles, websites, email lists and online forums where common questions tend to recur, for
      example through posts or queries by new users related to common knowledge gaps.
    </p>
  </span>

  <span id="tooltip4_content">
    <p>
      An AI chatbot (Artificial Intelligence chatbot) is a chatbot that's powered by artifical intelligence. Unlike regular chatbots, AI chatbots are
      able to understand user queries through natural language processing (NLP) and give intelligent answers to them.
    </p>
  </span>

  <span id="tooltip5_content">
    <p>
      Is the study of computer algorithms that can improve automatically through experience and by the use of data. It is seen as part of artificial
      intelligence.
    </p>
  </span>

  <span id="tooltip6_content">
    <p>
      Refers to something made by combining two different elements. In terms of chatbots, it refers to a chatbot that is developed using a combination
      of rule-based, AI and/or live agent services.
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

@endsection @section('javascript')
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script>
  $(function () {
    new Vue({
      el: "#vue-container",
      mounted: function () {
        AOS.init({ once: true });
      },
    });
  });
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
<script>
  $(function () {
    $(".jsCompleteCode.btn").on("click", () => {
      $(".jsCompleteCode").removeClass("hide");
      $(".jsContinueBtn").removeClass("hide");
    });

    $("#name").text(`Dear ${localStorage.userName},`);
  });
</script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/main_chatbot.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/step_4.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/step_4_task_1.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity2.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity3.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_1.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_2.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_3.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_4.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_5.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_6.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_7.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/Activity4_8.js"></script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>
@endsection
