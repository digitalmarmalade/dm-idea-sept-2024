var progressEveryMilliSecond = 4;

const nextStep = (e) => {
  console.log(`next step; story activity id: ${story_activity_id} && ide id : ${ide_id}`);
  // hide continue button
  // if (story_activity_id < 7) {
  $(e.currentTarget).parent().hasClass("jsContinue")
    ? $(e.currentTarget).parent().addClass("hide")
    : $(".jsCorrectModuleFeedback").hasClass("hide")
    ? null
    : $(".jsCorrectModuleFeedback").addClass("hide");
  // }

  // git installtion
  if (story_activity_id == 0 && ide_id == 0) {
    updateActivityText();
    updateActivityHeading();
    $(".jsGitInstallInstruction").addClass("hide");
  } else if (0 < story_activity_id && story_activity_id < 6 && ide_id == 0) {
    // command prompt
    console.log("command_id is", command_id);
    $(".jsStep1").removeClass("code-sample--green");
    command_id += 1;
    $(`.jsContent_${command_id}`).prop("contenteditable", "true");
    if (command_id >= solution.length) {
      $(".jsActivity").addClass("hide");

      setTimeout(() => {
        $("body").addClass("traffic-animation");
        $(".jsStory2").removeClass("hide");
        $(".jsInfoBox").addClass("hide");

        updateTextStory_2();
      }, 100);
    } else {
      updateActivityText();
      updateClueText();
    }
  } else if (story_activity_id == 7 && ide_id == 1) {
    // after user has import modules
    $(".jsImportModules").addClass("hide");
    updateActivityText();
    updateActivityHeading();
  } else if (story_activity_id == 9 && ide_id == 2) {
    // after downloading pre trained model step
    $(".jsPreTrainedInstallInstruction").addClass("hide");
    // clearIdeOutput();
    updateActivityText();
  } else if (story_activity_id == 11 && ide_id == 3) {
    // after converter.py has been installed
    clearIdeInput();
    clearIdeOutput();
    $(".jsIDEOutput").addClass("hide");
    $(".jsActivity .jsStory").addClass("hide");

    $(".jsConfigurationParameters").removeClass("hide");
  } else if (story_activity_id == 11 && ide_id == 4) {
    // after clicked on configuration parameters settings missing
    closeLookAtCode();
  } else if (story_activity_id == 12 && ide_id == 4) {
    // after user enters the configuration parameters settings
    $(".jsFillMissingCodeInstructions").addClass("hide");
    $(".jsInferenceEngineParameters").removeClass("hide");

    clearIdeInput();
    clearIdeOutput();
    updateActivityText();
  } else if (story_activity_id == 13 && ide_id == 5) {
    // after selecting inference engine object
    $(".jsInferenceEngineParameters").addClass("hide");

    clearIdeInput();
    clearIdeOutput();

    updateActivityText();
    $(".jsIRLoadVerified").removeClass("hide");
  }
  // ide_id == 6 => load ir_files
  // ide_id == 7 => verify ir_files
  else if (story_activity_id == 14 && ide_id == 7) {
    // after ir files have been loaded and verified
    $(".jsIRLoadVerified").addClass("hide");

    clearIdeInput();
    clearIdeOutput();

    updateActivityText();
    updateActivityHeading();
  } else if (story_activity_id == 16 && ide_id == 8) {
    // after the model has been loaded
    console.log("load labels");
    $(".jsLoadLabels").removeClass("hide");

    clearIdeInput();
    clearIdeOutput();
    updateActivityText();
  } else if (story_activity_id == 18 && ide_id == 9) {
    // after the labels has been loaded
    $(".jsActivity").addClass("hide");
    clearIdeInput();
    clearIdeOutput();
    // ?
    updateActivityText();

    $("body").addClass("traffic-animation");
    $(".jsStory2").removeClass("hide");

    updateTextStory_2();
  } else if (story_activity_id == 19 && ide_id == 10) {
    // after single image frame has been loaded
    clearIdeInput();
    clearIdeOutput();
    updateActivityText();
    updateActivityHeading();
  } else if (story_activity_id == 21 && ide_id == 11) {
    // after running inference
    $(".jsActivity").addClass("hide");
    clearIdeInput();
    clearIdeOutput();
    // ?
    updateActivityText();
    updateActivityHeading();

    $("body").addClass("traffic-animation");
    $(".jsStory2").removeClass("hide");

    updateTextStory_2();
  } else if (story_activity_id == 25 && ide_id == 12) {
    // after processing inference output results
    clearIdeInput();
    clearIdeOutput();
    updateActivityText();
    updateActivityHeading();
  }
  // ide_id == 13 => visualize results
  // clear ide input at this point
  // part 2, challenge b start from here
  // ide_id == 14 => show continue button in the success message
  else if (story_activity_id == 28 && ide_id == 14) {
    // after user has selected the correct code block
    $(".jsSelectCodeBlock").addClass("hide");
    updateActivityText();
  } else if (story_activity_id == 29 && ide_id == 15) {
    // after the user has entered the class names
    clearIdeInput();
    $(".jsCodeSamples").addClass("hide");

    $(".jsActivity").addClass("hide");
    $("body").addClass("traffic-animation--red-boxes");
    $(".jsStory2").removeClass("hide");

    updateTextStory_2();
  } else if (story_activity_id == 36 && ide_id == 16) {
    // after the user has entered the confusion matrix parameters correctly
    // i.e., title, x label, y label
    $(".jsPlotConfustionMatrix").addClass("hide");
    clearIdeInput();
    updateActivityText();
  } else if (story_activity_id == 37 && ide_id == 17) {
    // after user has completed the step "plot to image"
    clearIdeInput();
    updateActivityText();
  } else if (story_activity_id == 40 && ide_id == 18) {
    // after user has entered the "confusion matrix log" parameter
    $(".jsConfusionMatrixLog").addClass("hide");
    $(".jsIDEOutput").addClass("hide");

    clearIdeInput();
    clearIdeOutput();
    updateActivityText();
    updateActivityHeading();
  } else if (story_activity_id == 42 && ide_id == 19) {
    // after the user has processed the results
    clearIdeInput();
    clearIdeOutput();
    updateActivityText();
    updateActivityHeading();
  } else if (story_activity_id == 44 && ide_id == 20) {
    // to visualize the results
    console.log("to visualize the results");
    $(".jsActivity").addClass("hide");

    clearIdeInput();
    clearIdeOutput();
    // ?
    // updateActivityText();

    $("body").addClass("traffic-animation--labled");
    $(".jsStory2").removeClass("hide");

    updateTextStory_2();
  } else if (story_activity_id == 48 && ide_id == 20 && $(e.currentTarget).parent().hasClass("jsContinue")) {
    // to go to the graph related question
    console.log("hitttin it");
    $(".jsStory").addClass("hide");
    $(".jsGraphQuestions").addClass("hide");
    $(".jsVehicletypes").removeClass("hide");
  } else if (story_activity_id == 48 && ide_id == 20 && !$(e.currentTarget).parent().hasClass("jsContinue")) {
    // end of activity
    $(".jsActivity").addClass("hide");
    $("body").addClass("traffic-animation--labled");
    $(".jsInfoBox").addClass("hide");
    $(".jsContainerBlue").removeClass("hide");
    $(".jsStory").removeClass("hide");
    // updateTextStory_2();
    updateTextIntroStory();
  } else {
    console.log(`story activity id : ${story_activity_id}, ide id :  ${ide_id}`);
  }
};

/**
 * Animates the progress bar
 * @param  {HTMLElement} progressBarElement
 * @param  {number} progressEveryMilliSecond how much it should progress every milli-second
 * @param  {Function} onCompletion function to be executed when progress has been completed
 */
const progressBarAnimation = (progressBarElement, progressEveryMilliSecond, onCompletion) => {
  var progressTime = 100 / progressEveryMilliSecond;
  $(progressBarElement).val(0);
  var timer = setInterval(() => {
    progressTime -= 1;
    $(progressBarElement).val($(progressBarElement).val() + progressEveryMilliSecond);
    if (progressTime < 0) {
      onCompletion();
      clearInterval(timer);
    }
  }, 100);
};

const gitInstalledSuccessfully = () => {
  $(".jsGitProgress").fadeOut().remove();
  $(".jsGitInstalled").attr("class", "jsGitInstalled");

  $(".jsContinue").removeClass("hide");
};

const installGit = (e) => {
  $(e.currentTarget).fadeOut().remove();

  $(".jsGitInstallInstruction").removeClass("hide");

  progressBarAnimation("#install-git", progressEveryMilliSecond, gitInstalledSuccessfully);
};

const openCommandPrompt = (e) => {
  updateActivityText();

  $(".jsCMDWindow").removeClass("hide");
  $(".jsGitCloneInstruction").removeClass("hide");
  $(".jsGitCloneInstruction .jsStep1").removeClass("hide");
};
