@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')

<main>
  @include('vendor.digitalmarmalade.badges.chatbots.header', ['title' => 'Header']) @include('vendor.digitalmarmalade.badges.chatbots.main-chat')

  <div class="jsStep hide">
    @include('vendor.digitalmarmalade.badges.chatbots.side-chat') @include('vendor.digitalmarmalade.badges.chatbots.side-chat-ecobot')

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
        <li class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="550">
          <span class="jsTooltip" data-tooltip-content="#tooltip17_content"> 5 </span>
        </li>
        <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="600">
          <span class="jsTooltip" data-tooltip-content="#tooltip18_content"> 6 </span>
        </li>
      </ol>
    </aside>

    <section>
      <div class="container__large">
        <div class="container__small">
          <div class="activity__brief" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="150">
            <p id="name">Dear Simone Cabras,</p>
            <p>
              You must now test your chatbot to see if it can recognise the category of user questions and respond to them with the correct pre-programmed eco-friendly suggestions. Remember, questions and answers are categorised under the following six headings:
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
              Your chatbot also needs to be able to let users know if it is unable to provide an appropriate answer to their question. 
            </p>
            <p>
              Thank you,<br /><br />
              iDEA Team
            </p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <article id="train-chatbot">
        <div class="container__large">
          <div class="container__small">
            <div class="activity__grey--container" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
              <div class="activity__grey--counter">Step 1</div>
              <h3 class="heading-orange">
                Chatbot<br />
                Testing
              </h3>
              <p>
                To run a full test you need to ask your chatbot at least seven questions.</p>
              <p> Six questions should be about either Energy, Travel, Water, Food, Fashion or Waste.</p>
              <p>
                One question should not be related to any of the categories. This is to test the chatbot's response for when it is unable to provide a helpful answer.
              </p>

              <div class="step-5__activity--step-1-container">
                <div class="chatbot__container">
                  <div class="chatbot__top"></div>

                  <div class="chatbot__middle">
                    <!-- Content here -->
                  </div>

                  <div class="chatbot__bottom">
                    <label for="chatbot__bottom--input"></label>
                    <textarea id="user-input" placeholder="Type here..."></textarea>
                    <button id="send">
                      <img src="/badge-assets/chatbots/_global/svg/icon--send.svg" alt="Send message" />
                    </button>
                  </div>
                </div>

                <ul class="step-5__activity--step-1-eco-areas">
                  <li id="energy">Energy</li>
                  <li id="travel">Travel</li>
                  <li id="water">Water</li>
                  <li id="food">Food</li>
                  <li id="fashion">Fashion</li>
                  <!-- <li id="waste" class="step-5__activity--step-1-eco-area-success">Waste</li> -->
                  <li id="waste">Waste</li>
                  <li id="unknown">Unknown</li>
                </ul>
              </div>
              <p class="jsSuccessMessage success--box hide">
                <strong>Great!</strong> You finished testing your chatbot. Let's now move on to the next step.
              </p>
            </div>
          </div>
        </div>
      </article>

      <article class="jsDeployment hide">
        <div class="container__large">
          <div class="container__small">
            <div class="activity__grey--container" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="150">
              <div class="activity__grey--counter">Step 2</div>
              <h3 class="heading-orange">
                Deployment<br />
                and<br />
                Maintenance
              </h3>

              <p>Now that the chatbot is tested, let's deploy the code.</p>

              <!-- User clicks once - then hide -->
              <div class="flex">
                <button class="jsDeployCode btn btn-orange">Deploy Your Code</button>
              </div>
              <div class="jsDeployingAnim step-5__activity--step-2-deploying hide">
                <div class="step-5__loader"></div>

                <p>Deploying</p>
              </div>

              <div class="jsErrorEncountered step-5__activity--step-2-error hide">
                <h3>Error encountered</h3>
                <p>An error was encountered performing the requested operation.</p>
              </div>

              <section class="jsCodePreview hide">
                <p>Oh no! The server crashed partway through the deployment and has corrupted the chatbot code!<br /><br /></p>

                <div class="activity__grey--speech-bubble">
                  <span>
                    <img src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg" alt="Chatbot icon" />
                  </span>
                  <p>
                    Hello <span id="spanName">Simone Cabras</span>!<br /><br />
                    There are six errors in the code below that need fixing.<br /><br />
                    If you look carefully, you will spot some of the errors and you can edit the code to correct them right away.<br /><br />
                    When you’re ready, click the button to run the code and see your progress.
                  </p>
                </div>

                <section class="jsFailSection">

                  <p class="first_error_msg fail--box hide">
                    Oops! You will see that lines in the code editor have been highlighted.<br /><br />
                    The lines highlighted in blue still have errors in them and need work. They will be highlighted in green when the errors are resolved. <br /><br />
                    Inspect the blue highlighted lines for semantic, syntax and logic errors. To help, you can find more information about these types of errors under the headings below.<br /><br />
                  </p>
                  <p class="second_error_msg fail--box hide">There are still some errors to fix. You can check how many errors of each type remain by looking at the numbers next to the headings of “Semantics”, “Syntax” and “Logic”. </p>

                  <p class="jsUnresolvedIssues fail--box hide">
                    Oops, it looks like the code still contains unresolved issues. Click on the errors below for assistance.
                  </p>

                  <ul class="jsFailErrorList step-5__activity--step-2-errors hide">
                    <li class="step-5__activity--step-2-error-fail">
                      <button class="jsSemanticError">
                        <span class="dropdown">
                          <img src="/badge-assets/chatbots/_global/svg/dropdown-arrow.svg" width="15" height="18" />
                        </span>
                        <span>Semantic</span>
                        <span class="jsNumber counter">1</span>
                      </button>
                    </li>
                    <li class="step-5__activity--step-2-error-fail">
                      <button class="jsSyntaxError">
                        <span class="dropdown">
                          <img src="/badge-assets/chatbots/_global/svg/dropdown-arrow.svg" width="15" height="18" />
                        </span>
                        <span>Syntax</span>
                        <span class="jsNumber counter">2</span>
                      </button>
                    </li>
                    <!-- <li> -->
                    <li class="step-5__activity--step-2-error-fail">
                      <button class="jsLogicError">
                        <span class="dropdown">
                          <img src="/badge-assets/chatbots/_global/svg/dropdown-arrow.svg" width="15" height="18" />
                        </span>
                        <span>Logic</span>
                        <span class="jsNumber counter">2</span>
                      </button>
                    </li>
                  </ul>

                  <div class="jsErrorMsg step-5__activity--step-2-errors-dropdown hide"></div>
                </section>

                <!-- <p class="jsErrorMsg step-5__activity--step-2-errors-dropdown hide">
                In looks like the operator sign and the confidence value are missing on the line of code highlighted.
              </p> -->

                <div class="step-5__activity--step-2-container">
                  <code>Def answer_question( ):</code>
                  <span>
                    <code> <span class="code--green">question</span> <span class="code--orange">=</span> aw_input(">") </code>
                    <code> <span class="code--green">answer</span> <span class="code--orange">=</span> classify(question) </code>
                    <code> <span class="code--green">answerclass</span> <span class="code--orange">=</span> answer["class_name"] </code>
                    <code> <span class="code--green">confidence</span> <span class="code--orange">=</span> answer["confidence"] </code>
                  </span>
                  <!-- if confidence -->
                  <code>
                    <!-- <span class="jsConfidence step-5__activity--step-2-code-complete" contenteditable="true"> -->
                    <span class="jsConfidence" contenteditable="true">
                      <!-- <span class="code--gold">if</span> <span class="code--green">confidence</span> <span class="code-orange">&#62;</span> 70:</code> -->
                      <span class="code--gold">if</span> <span class="code--green">confidence</span>
                    </span>
                  </code>
                  <span>
                    <code>
                      <span class="code--gold">print</span> "Sorry, I don't understand. I am an eco-chatbot, please can you ask me something to do
                      with waste, food, energy, travel or fashion."
                    </code>
                  </span>
                  <!-- /if confidence -->

                  <!-- waste -->

                  <code>
                    <!-- <span class="step-5__activity--step-2-code-highlighted" contenteditable="true"> -->
                    <span class="jsWaste" contenteditable="true">
                      <span class="code--gold">elif</span> <span class="code--green">answerclass</span> <span class="code--orange">==</span> "Wate":
                    </span>
                  </code>
                  <span>
                    <code>
                      <span class="code--gold">print</span> "Use glass jars. Use a bag for life. Bring your own cup. Compost your food waste. Use metal or bamboo straws. Avoid single-use food and drink containers."
                    </code>
                  </span>
                  <!-- /waste -->

                  <code
                    ><span class="code--gold">elif</span> <span class="code--green">answerclass</span>
                    <span class="code--orange">==</span> "Food":</code
                  >
                  <span>
                    <code>
                      <span class="code--gold">print</span> "Adopt a plant based diet. Buy unpackaged food where possible. Support local shops. Reduce the amount you waste. Buy organic produce. Check labels to make sure they meet credible standards."
                    </code>
                  </span>
                  <!-- energy -->
                  <code
                    ><span class="code--gold">elif</span> <span class="code--green">answerclass</span>
                    <span class="code--orange">==</span> "Energy":</code
                  >
                  <span>
                    <code>
                      <span class="code--gold">print</span> "Set a goal to reduce consumption. Purchase energy A rated products. Turn technology off at the plug overnight. Use solar powered devices. Wash clothes at a low temperature. Use LED lights."
                    </code>
                  </span>
                  <!-- /energy -->
                  <!-- water -->
                  <code>
                    <span class="jsWater" contenteditable="true">
                      <span class="code--gold">elif</span> <span class="code--green">answerclass</span> <span class="code--orange">==</span> "Wate":
                    </span>
                  </code>
                  <span>
                    <code>
                      <span class="code--gold">print</span> "Shower instead of bathing. Drink from tap water instead of bottled water. Fix water leaks promptly. Only use the washing machine or dishwasher with a full load. Use a water can in the garden instead of a hose. Don’t waste water by leaving the tap on when you brush your teeth."
                    </code>
                  </span>
                  <!-- /water -->
                  <!-- travel -->
                  <code
                    ><span class="code--gold">elif</span> <span class="code--green">answerclass</span>
                    <span class="code--orange">==</span> "Travel":</code
                  >
                  <span>
                    <code>
                      <span class="jsTravel" contenteditable="true"> <span class="code--gold">print</span> "Carpool with people you work with." </span>
                    </code>
                  </span>
                  <!-- /travel -->
                  <!-- fashion -->
                  <code>
                    <span class="jsFashionCondition" contenteditable="true">
                      <!-- <span class="code--gold">elif</span> <span class="code--green">answerclass</span> <span class="code--orange">==</span> "Fashion": -->
                    </span>
                  </code>
                  <span>
                    <code>
                      <span class="jsFashionStatement" contenteditable="true">
                        <!-- <span class="code--gold">print</span> "Shop less. Have a clothes swap party. Sell old clothes on eBay and Gumtree. Give old clothes to charity.
                      Buy second-hand clothes. Fix tears with stitching or patch over holes." -->
                      </span>
                    </code>
                  </span>
                  <!-- /fashion -->
                </div>

                <ul class="jsSuccessErrorList step-5__activity--step-2-errors hide">
                  <li class="step-5__activity--step-2-error-success">Semantic errors</li>
                  <li class="step-5__activity--step-2-error-success">Syntax errors</li>
                  <li class="step-5__activity--step-2-error-success">Logic errors</li>
                </ul>

                <p class="success--box hide"><strong>Nice work!</strong> You have maintained your chatbot post deployment.</p>

                <button class="jsRunCode btn btn-orange centered">Run code</button>
                <!-- <button class="jsContinue btn btn-orange centered hide">Continue</button> -->
              </section>
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

    $("#name").text(`Dear ${localStorage.userName},`);
    $("#spanName").text(`${localStorage.userName}`);
  });
</script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/main_chatbot.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/step_5.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/testing_chatbot.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/chatbot_deployment.js"></script>
<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>
@endsection
