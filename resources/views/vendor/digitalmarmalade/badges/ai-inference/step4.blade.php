@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
  class="step-4 traffic-animation"
@endsection @section('page')

@include('vendor.digitalmarmalade.badges.ai-inference.header',
    ['title' => 'Header'])

<div class="traffic-animation--overlay"></div>

<ol class="progress">
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only">
      Step 1 - completed
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only">
      Step 2 - completed
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only">
      Step 3 - completed
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--current"></span>
    <span class="sr-only">
      Step 4 - current
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 5
    </span>
  </li>
</ol>
<main class="main-content">
  <div class="jsChallengeB width--full hide">

    <div class="jsChallenge container feedback feedback--large">
      <div class="feedback__bottom feedback__bottom--x-large">
        <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/animations/animation--alert.svg" width="227" height="227" />
      </div>


      <div class="jsStory feedback__top">
        <div class="bubble bubble--yellow bubble--tip-middle-left" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
          <h2 class="heading-three">The Challenge</h2>
          <p>
            The cameras that FutureCity have set up at the busy
            intersection provide real-time footage of everything
            that happens, 24 hours a day.
          </p>
          <div class="Js-not-remove bubble__btn">
            <button class="btn btn--blue btn--sm">Continue</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jsChallenge jsContainerYellow  container feedback feedback--large">
    <div class="feedback__bottom feedback__bottom--x-large">
      <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/animations/animation--alert.svg" width="227" height="227" />
    </div>

    <div class="jsStory feedback__top">
      <div class="bubble bubble--yellow bubble--tip-middle-left" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
        <h2 class="heading-three">The Challenge</h2>
        <p>
          The cameras that FutureCity have set up at the busy
          intersection provide real-time footage of everything
          that happens, 24 hours a day.
        </p>
        <div class="Js-not-remove bubble__btn">
          <button class="btn btn--blue btn--sm">Continue</button>
        </div>
      </div>
    </div>

  </div>

  <div class="jsChallenge jsContainerBlue hide feedback feedback--one-line no-mt container--sm">
    <div class="feedback__top bubble bubble--blue bubble--tip-left-top">
      <p>
        Hello again! Think back to the steps you just ran through
        in the first part of the challenge.
      </p>
      <div class="Js-not-remove bubble__btn">
        <button class="btn btn--blue btn--sm">Continue</button>
      </div>
    </div>
    <div class="feedback__bottom">
      <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--android.svg" width="60" height="60" />
    </div>
  </div>

  <section class="jsStory2 hide">
    <div class="jsInfoBox info-box container info-box--yellow" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="150">
    <button class="icon-btn">
      <svg class="icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#a)">
          <path d="M12.496 24A11.984 11.984 0 0 1 .5 12v-.24A12 12 0 1 1 12.496 24Zm0-10.307 3.107 3.107 1.692-1.692-3.107-3.107 3.107-3.108L15.603 7.2l-3.107 3.108L9.39 7.2 7.698 8.893 10.805 12l-3.107 3.107L9.389 16.8l3.107-3.106v-.001Z" fill="#00285A"/>
        </g>
        <defs>
          <clipPath id="a">
            <path fill="#fff" transform="translate(.5)" d="M0 0h24v24H0z"/>
          </clipPath>
        </defs>
      </svg>
    </button>

    <p>
      The following activity is a simulation exercise designed to help
      you gain a high-level understanding of how to use an
      OpenVINO pre-trained model for a specified application.
      In real-life applications, the process may vary when used with
      different programming languages, platforms or software. The
      code and process used have been simplified for conceptual
      learning purposes.
    </p>
  </div>

    <div class="container feedback feedback--small feedback--absolute-bottom-right">
    <div class="jsStory feedback__bottom">
      <div class="bubble bubble--white bubble--tip-bottom-right" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <p>
          Welcome to the team, we are excited for you to start your first assignment! Your task is to find out what is slowing down traffic and causing congestion. Let’s start by figuring out who the main users of this intersection are.
        </p>
        <div class="Js-not-remove bubble__btn">
          <button class="btn btn--blue btn--sm">Continue</button>
        </div>
      </div>
    </div>

    <div class="feedback__bottom feedback__person">
      <img
        class="feedback__icon"
        src="/badge-assets/ai-inference/_global/svg/speech-person-1.svg"
        width="100"
        height="100"
        loading="lazy" />
    </div>
  </div>
  </section>
  <section class="jsActivity activity hide">
    <div class="container">
      <header class="activity-dual-view-header">
        <h1 class="jsHeading heading-three no-tt">Download and Install Git</h1>
        <span class="jsStepCounter hide activity-dual-view-counter">
          Step x / 7
        <span>
      </header>

      <div class="activity-dual-view activity-dual-view--e">
        <div>
          <div class="jsPreTrainedInstallInstruction boxed-small boxed--white box--install-download boxed--full-and-centre hide">
            <div class="jsPreTrainProgress progress-bar-container">
              <progress value="0" max="100" class="progress-bar" id="install-trained-model"></progress>
              <label class="progress-bar-label" for="install-trained-model">Downloading pre-trained model...</label>
            </div>

              <svg class="jsPreTrainedInstalled hide" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#a)">
                  <path d="M12.501 24.502C5.876 24.495.507 19.126.5 12.502v-.24C.632 5.665 6.062.413 12.658.501 19.254.588 24.543 5.982 24.5 12.58 24.457 19.176 19.098 24.5 12.5 24.502ZM6.993 12.01 5.3 13.701l4.801 4.8 9.6-9.6-1.691-1.704-7.909 7.908-3.108-3.096Z" fill="#00CB74"/>
                </g>
                <defs>
                  <clipPath id="a">
                    <path fill="#fff" transform="translate(.5 .5)" d="M0 0h24v24H0z"/>
                  </clipPath>
                </defs>
              </svg>
              <p class="jsPreTrainedInstalled hide progress-bar-label">Pre-trained model successfully downloaded</p>
          </div>

          <div class="jsStory feedback feedback--one-line no-m">
            <div class="feedback__top bubble bubble--blue bubble--tip-left-top">
              <p>
                Hello! I'm here to help you install OpenVINO.
                But before we dive in, we will first need to download
                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip5_content">Git</span>.
                This gives us access to a git clone command we need,
                meaning that it will allow us to download a copy of an existing Git repository onto our own computer for use.
              </p>
              <!-- <button class="jsInstallGit btn btn--sm btn--blue mt-xs">Install Git</button> -->
              <button class="btn btn--sm btn--yellow mt-xs flex--align-self-start" onclick="installGit(event)">Install Git</button>
              <!-- <button class="btn btn--sm btn--yellow mt-xs">Open Command Prompt</button> -->
            </div>
            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--android.svg" width="60" height="60" />
            </div>
          </div>

          <div class="jsGitCloneInstruction boxed-small boxed--white margin-left mt-s hide">
            <div class="code-samples code-samples--column">
              <div class="jsStep1 hide code-sample code-sample--yellow">
                git clone https://github.com/openvinotoolkit/openvino_notebooks.git
              </div>
              <div class="jsStep2 hide code-sample code-sample--green">
                git clone  https://github.com/openvinotoolkit/openvino_notebooks.git
              </div>
              <div class="jsStep3 hide code-sample code-sample--red">
                git clone https://github.com/openvinotoolkit/openvino_notebooks.git
              </div>
              <div class="jsStep4 hide code-sample code-sample--grey">
                git clone https://github.com/openvinotoolkit/openvino_notebooks.git
              </div>
            </div>

          </div>
          <div class="jsCodeSamples hide boxed-small boxed--white mt-s margin-left hide">

          <div class="  code-samples code-samples--row">
            <div class="jsSampleCar code-sample code-sample--yellow">
              Car
            </div>
            <div class="jsSampleVan code-sample code-sample--yellow">
              Van
            </div>
            <div class="jsSampleTruck code-sample code-sample--yellow">
              Truck
            </div>
            <div class="jsSampleBus code-sample code-sample--yellow">
              Bus
            </div>
          </div>
          <button class="jsClassesName btn btn--blue mt-xs btn--sm" onclick="checkClassesName(event)">Submit</button>
          </div>

          <div class="jsPlotConfustionMatrix hide boxed-small boxed--white mt-s hide margin-left">
            <p>Please do the following:</p>
            <ol class="code-samples code-samples--column">
              <li>
                For the <strong>plt.title</strong>,enter:
                <div class="jsSampleTitle code-sample code-sample--yellow">
                  Confusion Matrix
                </div>
              </li>

              <li>
                For the <strong>plt.ylabel</strong> (this is to label the y-axis), enter:
                <div class="jsSampleYLabel code-sample code-sample--yellow">
                  True label
                </div>
              </li>

              <li>
                For the <strong>plt.xlabel</strong> (this is to label the x-axis), enter:
                <div class="jsSampleXLabel code-sample code-sample--yellow">
                  Predicted label
                </div>
              </li>
            </ol>
          <button class="jsPlotConfusionMatrix btn btn--blue mt-xs btn--sm" onclick="checkPlotConfusionMatrix(event)">Submit</button>

          </div>
          <div class="jsConfusionMatrixLog hide boxed-small boxed--white mt-s margin-left hide">

          <div class="code-samples code-samples--column">
            <div class="jsSummarySample code-sample code-sample--yellow">
              Confusion Matrix
            </div>
          </div>

          <button class="jsConfusionMatrixCheck btn btn--blue mt-xs btn--sm" onclick="checkConfusionMatrixLog(event)">Submit</button>

          </div>

          <div class="jsImportModules boxed-small boxed--white margin-left mt-s hide">
            <p>
              <strong>
                Please select the correct modules that need to be imported:
              </strong>
            </p>

            @include('vendor.digitalmarmalade.badges.ai-inference.import-modules')
          </div>
          <div class="jsConfigurationParameters boxed-small margin-left boxed--white mt-s hide">
            <p>
              <strong>
                Now, you need to insert the configuration parameter settings. Please select the correct option below.
              </strong>
            </p>

            @include('vendor.digitalmarmalade.badges.ai-inference.configuration-parameters-settings')
          </div>
          <div class="jsInferenceEngineParameters boxed-small boxed--white margin-left mt-s hide">
            <p>
              <strong>
                Select the correct option:
              </strong>
            </p>

            @include('vendor.digitalmarmalade.badges.ai-inference.inference-engine-parameters')
          </div>
          <div class="jsIRLoadVerified boxed-small boxed--white mt-s margin-left hide">
            <p>
              <strong>
                Select the objects below in the correct order:
              </strong>
            </p>

            @include('vendor.digitalmarmalade.badges.ai-inference.ir-load-verified')
          </div>
          <div class="jsLoadLabels boxed-small boxed--white mt-s margin-left hide">
            <p>
              <strong>
                Select the correct file:
              </strong>
            </p>

            @include('vendor.digitalmarmalade.badges.ai-inference.load-labels')
          </div>
          <div class="jsLoadPreTrainedModel boxed-small boxed--white mt-s hide margin-left">
            <p>
              <strong>
                Select the item below that you would like to load:
              </strong>
            </p>

            @include('vendor.digitalmarmalade.badges.ai-inference.load-pre-trained-models')
          </div>
          <div class="jsFillMissingCodeInstructions boxed-small boxed--white mt-s margin-left hide">
            <p>
              Make sure the following configuration parameters settings are all entered. You may find it helpful to look at the developer tags next to the hash mark to understand different sections in the code.
              <br>
              <br>
              Compare the pieces of code below to the code in the IDE. Identify the missing code and fill in the blanks by typing or copying and pasting the correct code into the IDE.
            </p>
            <div class="code-samples code-samples--column">
              <div class="jsSampleHint  code-sample code-sample--yellow">
                model_xml = 'model/public/mobilenet-ssd/FP32/mobilenet-ssd.xml'
              </div>
              <div class="jsSampleHint  code-sample code-sample--yellow">
                model_bin = 'model/public/mobilenet-ssd/FP32/mobilenet-ssd.bin'
              </div>
              <div class="jsInputPathHint  code-sample code-sample--yellow">
                input_path = 'car.bmp'
              </div>
              <div class="jsDeviceToUseHint  code-sample code-sample--yellow">
                device = 'CPU'
              </div>
              <div class="jsOutputPathHint  code-sample code-sample--yellow">
                labels_path = 'labels.txt'
              </div>
              <div class="jsSampleHint code-sample code-sample--yellow">
                prob_threshold= 0.5
              </div>
            </div>
            <button class="jsCheckAnswer btn btn--blue mt-xs btn--sm" onclick="checkAnswers(event)">Submit</button>
          </div>

          <div class="jsSelectCodeBlock boxed-small boxed--white mt-s margin-left hide">
            <p>
              Can you identify and select the block of code that loads the training and testing datasets into the IDE?
            </p>
            <div class="code-samples code-samples--column">
              <div id="code-block-1" class="code-sample code-sample--yellow" onclick="selectCodeBlock('code-block-1')">
                <span class="t-comment"># Load the data</span>
                <br>
                train_images <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/train_images</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                train_labels <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/train_labels</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                test_images <span class="t-gold">=</span>  np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/test_images</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                test_labels <span class="t-gold">=</span>  np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/test_labels</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
              </div>
              <div id="code-block-2" class="code-sample code-sample--yellow" onclick="selectCodeBlock('code-block-2')">
                <span class="t-comment"># Load the data</span>
                <br>
                final_images <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/final_images</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                final_labels <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/final_labels</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                extra_images <span class="t-gold">=</span>  np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/extra_images</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                extra_labels <span class="t-gold">=</span>  np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/extra_labels</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
              </div>
              <div id="code-block-3" class="code-sample code-sample--yellow" onclick="selectCodeBlock('code-block-3')">
                <span class="t-comment"># Load the data</span>
                <br>
                old_images <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/old_images</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                old_labels <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/old_labels</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                new_images <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/new_images</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
                new_labels <span class="t-gold">=</span> np<span class="t-blue">.</span>load<span class="t-blue">(</span><span class="t-gold">"dataset/new_labels</span><span class="t-blue">.</span><span class="t-gold">npy"</span><span class="t-blue">)</span>
              </div>
            </div>
          </div>

          <div class="jsGraphQuestions hide ">

            <div class="boxed-small boxed--white margin-left mt-s ">
              Observe the trends for each vehicle type. How do they compare?
            </div>
            <div class="boxed-small boxed--white margin-left mt-xs ">
              Traffic reports have shown that there are multiple points during the day when congestion at this intersection is heaviest. During these peak hours, gridlock may occur if there are more than 60 buses or more than 30 trucks using the intersection
              per hour.
            </div>
            <div class="boxed-small boxed--white margin-left mt-xs ">
              What are the peak hours when there are the highest number of vehicles using the intersection?
            </div>
            <div class="boxed-small boxed--white margin-left mt-xs ">
              Do different vehicle types peak at different times during the day?
            </div>
            <div class="boxed-small boxed--white margin-left mt-xs ">
              What relationship could there be between the vehicle count trends and the hours of the day with the most congestion?
            </div>
          </div>

          <div class="jsVehicletypes  boxed-small boxed--white mt-s hide">
            <p>
              Based on your observations and insights from the graph,
              which vehicle type do you think is the key contributor
              and cause of congestion?
            </p>
            <div class="graph-icons graph-icons--white graph-icons--large">
              @include('vendor.digitalmarmalade.badges.ai-inference.graph-icons')
            </div>
          </div>


          <div class="jsCodeIncorrect feedback feedback--one-line no-mb feedback--pushed hide">



            <div class="feedback__top bubble bubble--red bubble--tip-left-bottom" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
              <p>
                Oops, that's not quite right... input the code carefully and check that there are no typos.
              </p>
              <button class="jsCodeTryAgain btn btn--blue mt-xs btn--sm" onclick="tryAgain(event)">Try Again!</button>
            </div>

            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="60" height="60" />
            </div>
          </div>
          <div class="jsPlotConfusionMatrixIncorrect feedback feedback--one-line no-mb feedback--pushed hide">



            <div class="feedback__top bubble bubble--red bubble--tip-left-bottom" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
              <p>
                Oops, that's not quite right... input the code carefully and check that there are no typos.
              </p>
              <button class="jsCodeTryAgain btn btn--blue mt-xs btn--sm" onclick="tryAgainPlotConfusionMatrix(event)">Try Again!</button>
            </div>

            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="60" height="60" />
            </div>
          </div>
       
          <div class="jsFilledIncorrect feedback feedback--one-line no-mb feedback--pushed hide">



            <div class="feedback__top bubble bubble--red bubble--tip-left-bottom" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
              <p>
                Oops, that's not quite right... input the code carefully and check that there are no typos.
              </p>
              <button class="jsCodeTryAgain btn btn--blue mt-xs btn--sm" onclick="fillAgain(event)">Try Again!</button>
            </div>

            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="60" height="60" />
            </div>
          </div>
          <div class="jsFilledIncorrectClasses feedback feedback--one-line no-mb feedback--pushed hide">



            <div class="feedback__top bubble bubble--red bubble--tip-left-bottom" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
              <p>
                Oops, that's not quite right... input the code carefully and check that there are no typos.
              </p>
              <button class="jsCodeTryAgain btn btn--blue mt-xs btn--sm" onclick="fillAgainClasses(event)">Try Again!</button>
            </div>

            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="60" height="60" />
            </div>
          </div>
          <div class="jsFilledIncorrectImageSummary feedback feedback--one-line no-mb feedback--pushed hide">



            <div class="feedback__top bubble bubble--red bubble--tip-left-bottom" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
              <p>
                Oops, that's not quite right... input the code carefully and check that there are no typos.
              </p>
              <button class="jsCodeTryAgain btn btn--blue mt-xs btn--sm" onclick="fillAgainImageSummary(event)">Try Again!</button>
            </div>

            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="60" height="60" />
            </div>
          </div>

          <div class="jsCorrectModuleFeedback hide feedback feedback--one-line no-mb feedback--pushed">
            <div class="feedback__top bubble bubble--green bubble--tip-left-bottom">
              <p>
                That's correct, well done! Let's continue and see what
                happens in the two new steps that you've correctly placed
                in the process.
              </p>
              <button class="btn btn--blue mt-xs btn--sm" onclick="nextStep(event)">Continue</button>
            </div>
            <div class="feedback__bottom">
              <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-success.svg" width="60" height="60" />
            </div>
          </div>
        </div>

        <div>
          <div class="jsGitInstallInstruction boxed-small boxed--white boxed--full-and-centre box--install-download hide">
            <div class="jsGitProgress progress-bar-container">
              <progress value="0" max="100" class="progress-bar" id="install-git"></progress>
              <label class="progress-bar-label" for="install-git">Installing Git...</label>
            </div>

              <svg class="jsGitInstalled hide" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#a)">
                  <path d="M12.501 24.502C5.876 24.495.507 19.126.5 12.502v-.24C.632 5.665 6.062.413 12.658.501 19.254.588 24.543 5.982 24.5 12.58 24.457 19.176 19.098 24.5 12.5 24.502ZM6.993 12.01 5.3 13.701l4.801 4.8 9.6-9.6-1.691-1.704-7.909 7.908-3.108-3.096Z" fill="#00CB74"/>
                </g>
                <defs>
                  <clipPath id="a">
                    <path fill="#fff" transform="translate(.5 .5)" d="M0 0h24v24H0z"/>
                  </clipPath>
                </defs>
              </svg>
              <p class="jsGitInstalled hide progress-bar-label progress-bar__message">Git successfully installed</p>
          </div>



          <div class="jsCMDWindow command-prompt-container hide">
            <div class="command-prompt">
              <header class="command-prompt__top">
                Command Prompt
              </header>

              <div class="command-prompt__content">
                <div class="command-prompt__content__top">
                  <span>C:\Users\yourdirectory></span>
                  <!-- <span class="jsContent content-to-edit" contenteditable>This is content editable, and will start a new line</span> -->
                  <span class="jsContent_0 content-to-edit" contenteditable></span>
                </div>
              </div>
                <!-- <div></div> -->
            </div>
          </div>


          <div class="jsIDE ide hide">
            <div class="ide__top">
              Integrated Development Environment
            </div>
            <div class="ide__body">
              <div class="ide-toolbar">
                <button class="jsRunButton ide-toolbar__run">
                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <title>Send input</title>
                  <path d="M15 7.268c1.333.77 1.333 2.694 0 3.464L3 17.66c-1.333.77-3-.192-3-1.732V2.072C0 .532 1.667-.43 3 .34l12 6.928Z" fill="#00CB74"/>
                </svg>
                </button>
                <div class="ide-toolbar__placeholder"></div>
              </div>
              <div class="ide-content-container">
                <div class="ide-input-container">
                  <div class="ide-input" >

                  </div>
                </div>
                <div class="jsIDEOutput ide-output-container hide">
                  <span class="ide-output-title">
                    Output
                  </span>
                  <div class="ide-output">
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="jsGraphContainer hide graph-container ">
            <div id="vehicle-type-count" class="graph">
              <div class="graph__caption">
                <span>
                  <span class="graph__title">Vehicle Type Count</span>
                  <span class="graph__definition">By Hour</span>
                </span>
                <span class="graph-icons graph-icons--colour">
                  @include('vendor.digitalmarmalade.badges.ai-inference.graph-icons-2')
                </span>
              </div>
              <div style="position: relative; height: 257px">
                <canvas id="graph"></canvas>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="jsContinue hide container m-s">
      <button class="btn btn--sm btn--white btn--right" onclick="nextStep(event)">Continue</button>
    </div>
  </section>
  <section class="jsActivity2 activity hide">
    <div class="container">
      <div class="feedback feedback--one-line no-mt container--sm">
        <div class="feedback__top bubble bubble--blue bubble--tip-left-top">
          <p>
            Hello again! Think back to the steps you just ran through
            in the first part of the challenge.
          </p>

          <p>
            In the second part, two new steps are added into the
            process, you will see that these are labelled as “new step” below. 
            The additional steps will help us with
            getting the AI to classify the different types of
            vehicles.
          </p>
        </div>
        <div class="feedback__bottom">
          <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--android.svg" width="60" height="60" />
        </div>
      </div>

      @include('vendor.digitalmarmalade.badges.ai-inference.arrange-in-order-activity')


      <div class="jsCorrectFeedback hide feedback feedback--one-line no-mb feedback--pushed">
        <div class="feedback__top bubble bubble--green bubble--tip-left-bottom">
          <p>
            That's correct, well done! Let's continue and see what
            happens in the two new steps that you've correctly placed
            in the process.
          </p>
          <button class="btn btn--blue mt-xs btn--sm">Continue</button>
        </div>
        <div class="feedback__bottom">
          <img class="feedback__icon" src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--feedback-success.svg" width="60" height="60" />
        </div>
      </div>

      <div class="jsInCorrectFeedback feedback feedback--switched hide">
        <div class="feedback__bottom">
          <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/icon--feedback-fail.svg" width="102" height="102" />
        </div>

        <div class="feedback__top mb-s">
          <div class="bubble bubble--red bubble--tip-bottom-centre-right" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
            <p>
              Oops, that's not quite right... read the steps carefully and try again.
            </p>
          <button class="btn btn--blue mt-xs btn--sm">Try Again</button>
          </div>
        </div>
    </div>
  </section>
</main>






@include('vendor.digitalmarmalade.badges.ai-inference.tooltips')

@endsection @section('javascript')

  <script src="/badge-assets/{{
    $url['slug']
  }}/_global/js/text-box/step_4_intro_story.js"></script>
  <script src="/badge-assets/{{
    $url['slug']
  }}/_global/js/text-box/step_4_story_2.js"></script>
  <script src="/badge-assets/{{
    $url['slug']
  }}/_global/js/text-box/step_4_activity.js"></script>
  <script src="/badge-assets/{{
    $url['slug']
  }}/_global/js/tasks/step-4-activity.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/ide.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/step-4-milestones.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/downloadPreTrainedModels.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/fillConfigurationParameters.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/importModule.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/insertConfigurationSettings.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/selectInferenceEngine.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/verifyLoadIR.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/loadLabels.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/command-prompt.js"></script>
  <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-a/loadPreTrainedModels.js"></script>

    <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-b/functions.js"></script>
    <script src="/badge-assets/{{
      $url['slug']
    }}/_global/js/tasks/challenge-b/sortInOrder.js"></script>
    <script src="/badge-assets/{{
      $url['slug']
    }}/_global/js/tasks/challenge-b/selectCodeBLock.js"></script>
    <script src="/badge-assets/{{
      $url['slug']
    }}/_global/js/tasks/prettyCode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="/badge-assets/{{
        $url['slug']
    }}/_global/js/tasks/challenge-b/chart.js"></script>

<script>
  oBadges.setSlugAndStep('{{$url["slug"]}}', 4);
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
