@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes') @endsection @section('page')

<main>
  @include('vendor.digitalmarmalade.badges.chatbots.header', ['title' => 'Header']) @include('vendor.digitalmarmalade.badges.chatbots.main-chat')

  <div class="jsStep hide">
    @include('vendor.digitalmarmalade.badges.chatbots.side-chat')

    <aside class="step__counter">
      <ol>
        <li class="step__counter--completed" class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
          <span class="jsTooltip" data-tooltip-content="#tooltip13_content"> 1 </span>
        </li>
        <li class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250">
          <span class="jsTooltip" data-tooltip-content="#tooltip14_content"> 2 </span>
        </li>
        <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
          <span class="jsTooltip" data-tooltip-content="#tooltip15_content"> 3 </span>
        </li>
        <li data-aos="fade-right" data-aos-duration="1500" data-aos-delay="450">
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

    <section>
      <div class="container__large">
        <div class="container__small">
          <h1 class="step__title--level-1 heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            Natural Language Processing
          </h1>
        </div>

        <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
          <strong>Natural Language Processing</strong> <strong>(NLP)</strong>  is a specific AI tool used by chatbots to help them better understand language and questions in order to provide human-sounding responses. It works by splitting the information a chatbot receives into individual sentences and words.
        </p>

        <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">There are special techniques that Natural Language Processing (NLP) uses to extract data from text or spoken language so that a chatbot can understand it. Here are some examples:</p>

        <div class="container__small">
          <div class="step-2__nlp-technique--container">
            <div class="step-2__nlp-technique--technique" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
              <div>
                <h2>Parsing</h2>
                <p>
                    This is the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip19_content">syntactic</span> analysis of a text.
                </p>
              </div>
            </div>

            <div class="step-2__nlp-technique--example" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="450">
              <p>This helps a chatbot identify different sentences and their meaning.</p>
            </div>
          </div>

          <div class="step-2__nlp-technique--container">
            <div class="step-2__nlp-technique--technique" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="550">
              <div>
                <h2>Tokenisation</h2>
                <p>Here the text or command is divided into tokens which can then be used for further analysis.</p>
              </div>
            </div>

            <div class="step-2__nlp-technique--example" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="650">
              <p>A token could be a word, phrase or sentence that the chatbot would analyse.</p>
            </div>
          </div>

          <div class="step-2__nlp-technique--container">
            <div class="step-2__nlp-technique--technique" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="750">
              <div>
                <h2>Named Entity Recognition</h2>
                <p>This is a basic but very useful NLP technique. It identifies different entities in the text or command.</p>
              </div>
            </div>

            <div class="step-2__nlp-technique--example" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="850">
              <p>This allows a chatbot to recognise different entities of texts and commands such as people, locations and dates.</p>
            </div>
          </div>

          <div class="step-2__nlp-technique--container">
            <div class="step-2__nlp-technique--technique" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="950">
              <div>
                <h2>Sentiment Analysis</h2>
                <p>This is one of the most widely used NLP techniques and means the chatbot can understand the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip20_content">sentiment</span> of a sentence.</p>
              </div>
            </div>

            <div class="step-2__nlp-technique--example" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1050">
              <p>This is a useful technique for customer service chatbots who can decipher if something is positive, negative or neutral.</p>
            </div>
          </div>

          <div class="step-2__nlp-technique--container">
            <div class="step-2__nlp-technique--technique" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1150">
              <div>
                <h2>Aspect Mining</h2>
                <p>This is how different aspects of text or language are identified.</p>
              </div>
            </div>

            <div class="step-2__nlp-technique--example" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="1250">
              <p>
                When used alongside sentiment analysis, the chatbot can fully understand the intent of the text or command.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container__large">
        <div class="container__small">
          <h2 class="heading-orange" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1350">
            How Artificial Intelligence Makes Chatbots Appear Human
          </h2>

          <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1450">
            Advances in artificial intelligence (AI) mean that chatbots can be developed to such a high standard that they appear to replicate human interactions.<br />
          </p>
          <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1450">
          AI chatbots can be programmed to:
          </p>

          <ul data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1450" style="margin-block-start: 1em; margin-block-end: 1em; margin-inline-start: 0px; margin-inline-end: 0px; padding-inline-start: 40px; list-style:disc;">
            <li>Show an intelligent understanding of language and questions</li>
            <li>Use their memory to store information</li>
            <li>Use <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip12_content">Sentiment Analysis</span> to better understand the user</li>
            <li>Express different personalities</li>
            <li>Conduct chat sessions across multiple pages or devices</li>
            <li>Seamlessly switch between topics</li>
          </ul>

        </div>

        <div class="step-2__activity container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1550">
          <h4>Each of the functions listed above have a specific name within NLP.<br /><br />Read the definition below, can you select the corresponding function name in the drop-down menu?</h4>

          <div class="step-2__activity--carousel-control">
            <!-- Add IDs to these to program
            <button id="previous-question">
              <img src="/badge-assets/chatbots/_global/svg/icon--previous.svg" alt="Previous slide" />
            </button> -->

            <span id="question-idx"> </span>

            <!-- 
            <button class="jsNextQuestion">
              <img src="/badge-assets/chatbots/_global/svg/icon--next.svg" alt="Next slide" />
            </button> -->
          </div>

          <div class="step-2__activity--activity">
            <div class="step-2__activity--option-1">
              <label class="jsQuestion" for="step-2__activity--option-1"></label>
              <div class="label-wrapper"></div>
              <div class="select-wrapper" style="margin-top:10px;"></div>
            </div>
          </div>
          <div class="success--box-container hide">
            <div class="success--box">
              <h4>Intelligent Understanding</h4>
              <p>
                The ability to collect, understand and remember important information and user preferences in order to deliver an accurate response.
              </p>
            </div>

            <div class="success--box-example">
              <h5>Well done!</h5>
              <p>
                An example of intelligent understanding in action is a chatbot like Siri on your phone knowing your relationships with your contacts. Once you’ve told Siri who your brother is, Siri will remember. You can say “Hey Siri, call my brother!” and Siri will know what to do.
              </p>
            </div>

            <button class="btn btn-orange jsNextQuestion">Next</button>
          </div>

          <div class="jsFailMessage jsFail fail--box hide">Sorry, that’s not quite right. Have another go. Think about what AI chatbots need to demonstrate in order to deliver more complete answers.</div>
          <button class="btn btn-white jsTryAgain jsFail hide">Try Again</button>
        </div>
      </div>
    </section>

    <section>
      <div class="jsContinueBtn container__large hide">
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
    </section>

    <div class="chatbot__toggle--icon">
      <button>
        <img src="/badge-assets/chatbots/_global/svg/chatbot__icon.svg" alt="Chatbot icon" />
      </button>
    </div>

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
        <p>Understanding the emotional tone behind a body of text. This helps to identify how the user may be feeling.</p>
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
      <span id="tooltip19_content">
        <p>Syntax is how words and phrases are arranged in language</p>
      </span>
      <span id="tooltip20_content">
        <p>The meaning or emotion</p>
      </span>
    </div>
  </div>
</main>

@endsection 
@section('javascript')

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

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/step_2.js"></script>

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/step_2_tasks.js"></script>

<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>

@endsection
