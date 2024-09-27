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
        <li class="step__counter--current" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="350">
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
            Real<br />
            World Chatbot Solutions
          </h1>
        </div>

        <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
          Multiple businesses, communities and charities across the globe regularly use chatbots to support them in the running of their operations in many different ways.
        </p>
        <p class="container__small" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="250">
          Let’s take a look at some examples.
        </p>

        <div class="container__small">
          <div class="step-3__carousel--buttons-container" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="350">
            <button class="step-3__carousel--previous">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="48.83" height="48.83" viewBox="36.71 36.09 48.83 48.83">
                <g filter="url(#filter0_d_1202_29403)">
                  <g clip-path="url(#clip0_1202_29403)">
                    <path
                      d="M61.1275 84.9153C47.6437 84.9153 36.7129 73.9845 36.7129 60.5006C36.7129 47.0168 47.6437 36.0859 61.1275 36.0859C74.6114 36.0859 85.5422 47.0168 85.5422 60.5006C85.5274 73.9783 74.6053 84.9005 61.1275 84.9153ZM61.1275 40.9689C50.3983 40.9716 41.6799 49.6284 41.6013 60.3574C41.5226 71.0864 50.1131 79.8701 60.8411 80.0302C71.5692 80.1902 80.4179 71.6666 80.6593 60.9401V65.2932V60.5006C80.6472 49.7185 71.9096 40.981 61.1275 40.9689ZM61.1275 72.7079L48.9202 60.5006L61.1275 48.2933L64.57 51.7357L58.271 58.0591H73.3349V62.9421H58.271L64.57 69.2655L61.1275 72.7079Z"
                      fill="url(#paint0_linear_1202_29403)"
                    />
                  </g>
                </g>
                <defs>
                  <filter
                    id="filter0_d_1202_29403"
                    x="0.712891"
                    y="0.0859375"
                    width="128.829"
                    height="128.829"
                    filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB"
                  >
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                    <feOffset dx="4" dy="4" />
                    <feGaussianBlur stdDeviation="20" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1202_29403" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1202_29403" result="shape" />
                  </filter>
                  <linearGradient id="paint0_linear_1202_29403" x1="36.7129" y1="61.3786" x2="97.2837" y2="61.3786" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFC444" />
                    <stop offset="0.996403" stop-color="#F36F56" />
                    <stop offset="1" stop-color="#F36F56" />
                  </linearGradient>
                  <clipPath id="clip0_1202_29403">
                    <path
                      d="M36.7129 60.5006C36.7129 47.0168 47.6437 36.0859 61.1276 36.0859C74.6114 36.0859 85.5422 47.0168 85.5422 60.5006C85.5422 73.9845 74.6114 84.9153 61.1276 84.9153C47.6437 84.9153 36.7129 73.9845 36.7129 60.5006Z"
                      fill="white"
                    />
                  </clipPath>
                </defs>
              </svg>
            </button>

            <!-- above and below will auto scroll to next slide - target slide id -->
            <button class="step-3__carousel--next">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="48.83" height="48.83" viewBox="36.46 36.09 48.83 48.83">
                <g id="icon" filter="url(#filter0_d_1202_29404)">
                  <g clip-path="url(#clip0_1202_29404)">
                    <path
                      id="arrow / circle_right"
                      d="M60.8748 84.9153C47.3958 84.9005 36.4725 73.9783 36.4577 60.5006V60.0123C36.7261 46.5953 47.774 35.9101 61.1939 36.0881C74.6137 36.2662 85.3742 47.2408 85.2865 60.6602C85.1988 74.0795 74.2958 84.9126 60.8748 84.9153ZM60.8748 40.9689C50.0867 40.9689 41.3411 49.7136 41.3411 60.5006C41.3411 71.2877 50.0867 80.0324 60.8748 80.0324C71.663 80.0324 80.4085 71.2877 80.4085 60.5006C80.3964 49.7186 71.658 40.981 60.8748 40.9689ZM60.8748 72.708L57.432 69.2655L63.7316 62.9421H48.6663V58.0592H63.7316L57.432 51.7358L60.8748 48.2933L73.0834 60.5006L60.8748 72.708Z"
                      fill="url(#paint0_linear_1202_29404)"
                    />
                  </g>
                </g>
                <defs>
                  <filter
                    id="filter0_d_1202_29404"
                    x="0.457764"
                    y="0.0859375"
                    width="128.829"
                    height="128.829"
                    filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB"
                  >
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                    <feOffset dx="4" dy="4" />
                    <feGaussianBlur stdDeviation="20" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1202_29404" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1202_29404" result="shape" />
                  </filter>
                  <linearGradient id="paint0_linear_1202_29404" x1="36.4577" y1="61.3786" x2="97.0285" y2="61.3786" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFC444" />
                    <stop offset="0.996403" stop-color="#F36F56" />
                    <stop offset="1" stop-color="#F36F56" />
                  </linearGradient>
                  <clipPath id="clip0_1202_29404">
                    <path
                      d="M36.4578 60.5006C36.4578 47.0168 47.3886 36.0859 60.8724 36.0859V36.0859C74.3563 36.0859 85.2871 47.0168 85.2871 60.5006V60.5006C85.2871 73.9845 74.3563 84.9153 60.8724 84.9153V84.9153C47.3886 84.9153 36.4578 73.9845 36.4578 60.5006V60.5006Z"
                      fill="white"
                    />
                  </clipPath>
                </defs>
              </svg>
            </button>
            <div class="step-3__carousel--container">
              <div id="step-3__carousel--slide-1" class="step-3__carousel--slide">
                <div class="step-3__carousel--counter">1/4</div>

                <h3 class="heading-orange">Skoda Digital Assistant Chatbot: "Okay Laura"</h3>

                <div class="step-3__carousel--image-container step-3__carousel--image-container-1">
                  <picture>
                    <source type="image/avif" srcset="/badge-assets/chatbots/_global/img/converted/Laura-1.avif" />
                    <source type="image/webp" srcset="/badge-assets/chatbots/_global/img/converted/Laura-1.webp" />

                    <img src="/badge-assets/chatbots/_global/img/Laura-1.jpg" width="237" height="133" alt="Okay Laura" />
                  </picture>
                </div>

                <div class="step-3__carousel--text">
                  <p>
                    Car manufacturer ŠKODA has a digital assistant chatbot to help their customers, called Laura. Laura will greet visitors when they come to the company website, will help them with any questions they may have about the company’s cars and can even book a test drive.
                  </p>
                  <p>
                    Laura also comes as a digital assistant feature within all new cars. Laura can speak five languages and help drivers with a number of tasks when they’re behind the wheel. Laura can type out and send messages, play music as well as give directions to a destination all through voice command.<br /><br />
                    <a
                      target="_blank"
                      rel="noopener"
                      href="https://www.skoda-storyboard.com/en/press-releases/skoda-presents-new-digital-assistant-okay-laura/"
                      >Learn more about Laura</a
                    >
                  </p>
                </div>
              </div>

              <div id="step-3__carousel--slide-2" class="step-3__carousel--slide hide">
                <div class="step-3__carousel--counter">2/4</div>

                <h3 class="heading-orange">
                  United Nations<br />ActNow Chatbot
                </h3>

                <div class="step-3__carousel--image-container step-3__carousel--image-container-2">
                  <picture>
                    <source type="image/avif" srcset="/badge-assets/chatbots/_global/img/converted/ActNow-1.avif" />
                    <source type="image/webp" srcset="/badge-assets/chatbots/_global/img/converted/ActNow-1.webp" />

                    <img src="/badge-assets/chatbots/_global/img/ActNow-1.jpeg" width="200" height="113" alt="ActNow" />
                  </picture>
                </div>

                <div class="step-3__carousel--text">
                  <p>
                    Global peace organisation United Nations operates a chatbot called ActNow which offers users daily suggestions on how they can reduce their carbon footprint to help the environment. Suggestions may include environmentally friendly ways of travelling, how to save energy at home or at work, ways to recycle and reuse items as well as how to eat more plant-based foods.
                  </p>
                  <p>
                    ActNow is a rule-based chatbot which you can talk to on the ActNow website. The chatbot forms an important part of the United Nations’ efforts to reduce greenhouse gas emissions to net zero by 2050.<br /><br />
                    <a target="_blank" rel="noopener" href="https://www.un.org/en/actnow"> Talk with the ActNow chatbot</a>. The chatbot can be located at the bottom right of the webpage.
                  </p>
                </div>
              </div>

              <div id="step-3__carousel--slide-3" class="step-3__carousel--slide hide">
                <div class="step-3__carousel--counter">3/4</div>

                <h3 class="heading-orange">
                  Walk With<br />
                  Yeshi<br />
                  Chatbot
                </h3>

                <div class="step-3__carousel--image-container step-3__carousel--image-container-3">
                  <picture>
                    <source type="image/avif" srcset="/badge-assets/chatbots/_global/img/converted/Yeshi.avif" />
                    <source type="image/webp" srcset="/badge-assets/chatbots/_global/img/converted/Yeshi.webp" />

                    <img src="/badge-assets/chatbots/_global/img/Yeshi.jpg" width="149" height="185" alt="Yeshi" />
                  </picture>
                </div>

                <div class="step-3__carousel--text">
                  <p>
                    Design agency AKQA, responsible lifestyle brand Lokai and <br />charity: water teamed up to create Walk With Yeshi – a chatbot designed to help raise awareness of the water crisis in Ethiopia. The chatbot uses Facebook Messenger to simulate a conversation with Yeshi as she journeys over two-and-a-half-hour hours to access clean water.
                  </p>
                  <p>Yeshi is not a real person but whilst interacting with the Yeshi chatbot, users are educated about the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip19_content">perilous</span> journey that many real people must make every day just to access clean water.<br /><br />
                    <a target="_blank" rel="noopener" href="https://www.akqa.com/work/lokai/walk-with-yeshi/"> Learn more about the Walk With Yeshi Chatbot</a>
                  </p>
                </div>
              </div>

              <div id="step-3__carousel--slide-4" class="step-3__carousel--slide hide">
                <div class="step-3__carousel--counter">4/4</div>

                <h3 class="heading-orange">
                  Chalmers <br />
                  Chatbot
                </h3>

                <div class="step-3__carousel--image-container step-3__carousel--image-container-4">
                  <img src="/badge-assets/chatbots/_global/img/Chalmers-1.png" width="344" height="193" alt="Chalmers" />
                </div>

                <div class="step-3__carousel--text">
                  <p>
                    Chalmers is an AI chatbot developed by Toronto-based start-up Ample Labs and Community Development Council Durham which uses a simple chat interface to connect vulnerable people to services like food and shelter.
                  </p>
                  <p>
                    In its first six months alone, the Chalmers chatbot supported 700 users each month, providing a total of 6,500 recommendations which included 4,000 meals and 800 overnight shelters.<br /><br />
                    <a target="_blank" rel="noopener" href="https://chalmers.amplelabs.co/"> Talk with Chalmers</a>
                  </p>
                </div>

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

      <span id="tooltip19_content">
        <p>Dangerous</p>
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

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/chatbots/step_3.js"></script>
<script src="/badge-assets/{{ $url['slug'] }}/_global/js/tasks/step_3_tasks.js"></script>

<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>
@endsection
