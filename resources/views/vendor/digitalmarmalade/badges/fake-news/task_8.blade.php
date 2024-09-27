<article class="task-8 hide">
  <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    In this next section, you will be using code to build a model that will help us to detect fake news with natural language processing. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    To understand what natural language processing can help do and the speed in which it can achieve it, try the following activity. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    Below is a full article taken from one of your datasets. Click the START TIMER button and then scan through the article to see if you can find and select all of the “flu” words. 
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    A success message will automatically pop up below the article when you have selected all of the “flu” words. 

    </p>

    <div class="flu-words-timer" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <div class="countdown-animation">
        <!-- Hassan - call the functions in the buttons above. I've put the script
        at the bottom of step 4 blade just so it works in this example
        but just remove it when you've implemented it with the timer.
        -->
        <svg
          id="timer"
          class="countdown-animation__svg"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          style="margin: auto; background: none; display: block; shape-rendering: auto"
          width="199px"
          height="199px"
          viewBox="0 0 100 100"
          preserveAspectRatio="xMidYMid"
        >
          <g transform="rotate(0 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-29s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(12 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-28s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(24 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-27s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(36 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-26s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(48 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-25s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(60 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-24s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(72 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-23s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(84 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-22s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(96 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-21s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(108 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-20s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(120 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-19s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(132 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-18s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(144 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-17s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(156 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-16s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(168 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-15s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(180 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-14s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(192 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-13s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(204 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-12s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(216 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-11s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(228 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-10s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(240 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-9s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(252 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-8s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(264 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-7s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(276 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-6s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(288 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-5s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(300 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-4s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(312 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-3s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(324 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-2s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(336 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-1s" repeatCount="indefinite"></animate>
            </rect>
          </g>
          <g transform="rotate(348 50 50)">
            <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#311944">
              <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="0s" repeatCount="indefinite"></animate>
            </rect>
          </g>
        </svg>

        <span class="jsTime countdown-animation__time countdown-animation__time--dig"> 00:00 </span>
        <span class="countdown-animation__unit countdown-animation__unit--dig"> Min </span>
      </div>

      <div class="flu-words-timer__start">
        <button class="jsStartTime btn btn--orange">Start Timer</button>
      </div>
    </div>

    <div class="flu-words" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <header class="flu-words__header">
        <img
          class="flu-words__image"
          src="/badge-assets/fake-news/svg/illustration--flu.svg"
          width="224"
          height="183"
          loading="lazy"
          decoding="async"
        />

        <span class="flu-words__header--inner">
          <h2 class="flu-words__title"><span class="flu">FLU</span> VACCINATIONS CONTAINS TRACKING AND LISTENING NANITES</h2>

          <p class="flu-words__author">Medifactz</p>
        </span>
      </header>

      <!-- hide .flu -->

      <div class="flu-words__content">
        <span class="flu-words__content--first">
          <p>
            <strong> WOULD YOU GET VACCINATED IF YOU KNOW YOUR VACCINE IS SPYING ON YOU? </strong>
          </p>

          <p>
            A research team led by Dr. Grace Morgan at the Vaccine Research Center of BIOGENS National Institute of Infectious Disease HAVE FOUND THAT
            THE GOVERNEMNT ARE NOT JUST GIVING US A VACCINE. THEY HAVE INSERTED NANITES INTO OUR VACCINE THAT ALLOW SATELLITES TO TRACK OUR MOVEMENTS
            AND LISTEN TO OUR CONVERSATIONS.
          </p>

          <p>
            The study was also supported in part by THE MINISTRY OF HEALTH (MIH) Results appeared online at the governments www.health.mih.org
            thereafter have since been removed by the health minister.
          </p>

          <p>
            <strong>FACT:</strong> The <span class="flu">flu</span> virus changes, or mutates, quickly. Researchers try to predict which
            <span class="flu">flu</span> strains will be the most prevalent each year. These predictions are then used to develop that season's
            <span class="flu">flu</span> vaccine. If the predictions aren't correct, the resulting vaccine will be less effective. As a result,
            seasonal <span class="flu">flu</span>
            vaccines vary in their effectiveness, from as high as 60% to as low as 10%.
          </p>
        </span>

        <span class="flu-words__content--second">
          <p>A single vaccine that conferred protection against a wide variety of strains would provide a major boost to global health.</p>

          <p>
            <strong>FACT:</strong> Biogen have found nano technology particles as seen in the above image, that once injected within the vaccine,
            attack the <span class="flu">flu</span>
            virus but also provide government satellites the ability to track our movements and listen to the things we have to say.
          </p>

          <p>
            <strong>FACT:</strong> <span class="flu">Flu</span> vaccines use a viral protein called hemagglutinin (HA). To create their vaccine, the
            researchers fused HA proteins to protein based location receptors and auditory proteins found in the brain, to assemble into
            nanometer-sized particles (nanoparticles). The resulting nanoparticles force the immune system to react to
            <span class="flu">flu</span> but also listen to our conversations and trace our movements, sending data via our phones biometrics
            interface to satellites above earth.
          </p>

          <p>
            The question is should you get vaccinated if it allows the ministry of health and other government bodies to spy on where you go and the
            things you say.
          </p>

          <p class="flu-words__source">Source: Facebook</p>
        </span>
      </div>
    </div>

    <div class="success-box hide">
      <p>
        Well done! It took you <span class="jsTimeTook"></span> to find all of the flu words. <br /><br />
        Could you imagine if you had to manually find and count up each of the following words? Flu, vaccine, nanoparticles, nanites, audio, GPS,
        listening, tracking, spying... <br /><br />
        
        By incorporating natural language processing code in your fake news detector program, you will give your fake news detector machine learning capabilities, enabling it to process large amounts of data from news articles, quickly and accurately. 
      </p>
    </div>
  </div>
</article>
