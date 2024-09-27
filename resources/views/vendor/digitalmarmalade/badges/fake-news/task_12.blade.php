<article class="task-12 hide">
  <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    You are now going to complete a timed activity where you will be training your fake news detector to reach an accuracy level of 98%.</p>
    
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      You need to do this by finding the most efficient balance of adding batches of training data vs. running additional rounds of training. Batches of training data are expensive and will take longer to load into the fake news detector than increasing the number of epochs so be careful you don’t add too many batches!
    </p>

    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      Hint: Observe how the accuracy level changes when you add training data vs. training the model. Don’t worry if it takes you several attempts to get the right balance - keep trying and you will get it!
    </p>

    <div class="fake-news-detector" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <div class="fake-news-detector__g-container">
        <div class="fake-news-detector__sign">Fake News Detector</div>
      </div>

      <div class="fake-news-detector__g-container">
        <div class="fake-news-detector__result">
          <div class="fake-news-detector__drop">
            <div class="fake-news-detector__drop-zone">
              <div class="fake-news-detector__drop-zone__target fake-news-detector__drop-zone__target--real">
                <span> ? </span>
              </div>

              <span class="fake-news-detector__drop-zone__label"> Real News </span>
            </div>

            <div class="fake-news-detector__drop-zone">
              <div class="fake-news-detector__drop-zone__target fake-news-detector__drop-zone__target--fake">
                <span> ? </span>
              </div>

              <span class="fake-news-detector__drop-zone__label"> Fake News </span>
            </div>
          </div>

          <img class="mt-s mb-s" src="/badge-assets/fake-news/svg/icon--arrow-white-down.svg" alt="Continue down" width="27.61" height="40" />

          <div class="fake-news-detector__t12-ani-container">
            <div class="countdown-animation">
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
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-29s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(12 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-28s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(24 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-27s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(36 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-26s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(48 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-25s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(60 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-24s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(72 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-23s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(84 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-22s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(96 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-21s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(108 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-20s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(120 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-19s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(132 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-18s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(144 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-17s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(156 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-16s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(168 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-15s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(180 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-14s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(192 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-13s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(204 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-12s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(216 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-11s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(228 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-10s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(240 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-9s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(252 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-8s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(264 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-7s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(276 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-6s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(288 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-5s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(300 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-4s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(312 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-3s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(324 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-2s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(336 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="-1s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
                <g transform="rotate(348 50 50)">
                  <rect x="47.5" y="3" rx="2" ry="2" width="5" height="10" fill="#f68352">
                    <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="30s" begin="0s" repeatCount="indefinite"></animate>
                  </rect>
                </g>
              </svg>

              <span class="countdown-animation__time countdown-animation__time--sm"> 60 </span>
              <span class="countdown-animation__unit countdown-animation__unit--sm"> Secs </span>
            </div>

            <ul class="fake-news-detector__inputs fake-news-detector__inputs--col">
              <li class="fake-news-detector__inputs__item">
                <label class="fake-news-detector__inputs__label" for="epochs"> Epochs </label>
                <input class="fake-news-detector__inputs__input fake-news-detector__inputs__input--disabled" id="epochs" name="epochs" disabled />
              </li>

              <li class="fake-news-detector__inputs__item">
                <label class="fake-news-detector__inputs__label" for="accuracy"> % Accuracy </label>
                <input class="fake-news-detector__inputs__input fake-news-detector__inputs__input--disabled" id="accuracy" name="accuracy" disabled />
              </li>

              <li class="fake-news-detector__inputs__item">
                <label class="fake-news-detector__inputs__label" for="test-data"> Training Data </label>
                <input class="fake-news-detector__inputs__input fake-news-detector__inputs__input--active" id="test-data" name="test-data" disabled />
              </li>
            </ul>
          </div>

          <button class="jsStartActivity btn--orange btn btn--blue-bg mb-s force-centre">Let's Begin</button>
          <div class="fake-news-detector__t12-btn-container">
            <button class="jsAddData btn--orange btn btn--blue-bg hide">Add Training Data</button>

            <button class="jsTrainModel btn--orange btn btn--blue-bg hide">Train Model</button>
          </div>

          <p class="fail-box hide">Oops, time is up! You haven't achieved the 98% accuracy that we are looking for....</p>

          <button class="jsTryAgain btn--orange btn btn--blue-bg force-centre hide">Try Again</button>

          <img class="mt-s mb-s" src="/badge-assets/fake-news/svg/icon--arrow-white-down.svg" alt="Continue down" width="27.61" height="40" />

          <div class="fake-news-detector__graph"><canvas id="graph"></canvas></div>

          <div class="fake-news-detector__progress-container fake-news-detector__progress-container--small">
            <progress
              id="fake-news-detector__progress"
              class="fake-news-detector__progress fake-news-detector__progress--small"
              value="10"
              max="100"
            ></progress>
          </div>
          <label class="fake-news-detector__progress__label fake-news-detector__progress__label--small" for="fake-news-detector__progress">
            Loading...
          </label>
        </div>
      </div>
    </div>

    <p class="success-box hide">You have successfully trained your fake news detector to detect fake news with a 98% accuracy level.<br /><br />You have now designed, programmed and trained your own fake news detector, well done!</p>

    <a class="jsContinue btn btn--orange force-centre hide" onclick="oBadges.stepCompleted();" href="{{ $links['next'] }}">
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
  </div>
</article>
