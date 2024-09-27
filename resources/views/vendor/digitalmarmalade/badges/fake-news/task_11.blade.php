<article class="task-11 hide">
  <div class="activity-box" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
    <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">You will now begin the process of training your model. Click the TRAIN MODEL button and see what happens to the graph each time you click it. 
</p>

<p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Continue clicking and observing the graph until you receive the next set of instructions.
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

          <p class="jsQuestion fake-news-detector__task un-b mb-s hide">
            <span class="hide tooltipster jsTooltip" data-tooltip-content="#tooltip11_content">EPOCHs</span> 
            You have run the current batch of training data through the fake news detector twelve times, and it is getting better at distinguishing between real and fake news.<br /><br />

            Every time you run the data through the fake news detector, you complete one <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip11_content">epoch</span>. How many epochs do you think it would take to reach an accuracy level of 100%?<br /><br />

            Enter estimates in the 100, 200, 300, 400 & 500's in the box next to EPOCHS below and see what happens to the graph.
          </p>

          <ul class="fake-news-detector__inputs">
            <li class="fake-news-detector__inputs__item">
              <label class="fake-news-detector__inputs__label" for="epochs"> Epochs </label>
              <input class="fake-news-detector__inputs__input fake-news-detector__inputs__input--active" id="epochs" name="epochs" />
            </li>

            <li class="fake-news-detector__inputs__item">
              <label class="fake-news-detector__inputs__label" for="accuracy"> % Accuracy </label>
              <input class="fake-news-detector__inputs__input fake-news-detector__inputs__input--disabled" id="accuracy" name="accuracy" disabled />
            </li>
          </ul>

          <button class="jsTrainModel btn--orange btn btn--blue-bg force-centre">Train Model</button>

          <img class="mt-s mb-s" src="/badge-assets/fake-news/svg/icon--arrow-white-down.svg" alt="Continue down" width="27.61" height="40" />

          <div class="fake-news-detector__graph"><canvas id="graph"></canvas></div>

          <p class="success-box mb-s hide">
            No matter how much we train the fake news detector, our model plateaus at 273 epochs, therefore the closest we can achieve is 98% accuracy.
            There is a 2% tolerance to how much the machine can be inaccurate which is deemed acceptable in the AI community.
          </p>
          <p class="fail-box mb-s hide">Try to keep Epochs between 0 and 1000</p>

          <button class="jsContinue btn--orange btn btn--blue-bg force-centre mb-s hide">Continue</button>
        </div>
      </div>
    </div>
  </div>
</article>
