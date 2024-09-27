const insertConfigurationParametersSettings = (element, selectedObj) => {
  $(".jsConfigurationParameters .computer-folder").attr("class", "computer-folder configuration-parameter");
  $(".jsCodeIncorrect").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");
  if (selectedObj == "configurationParametersSettings") {
    $(`.jsConfigurationParameters .holder--computer-folders #${selectedObj}`).attr("class", "computer-folder success");

    $(".jsConfigurationParameters .computer-folder")
      .filter((index, element) => {
        return !$(element).hasClass("success");
      })
      .attr("class", "computer-folder disabled");

    updateIdeResponse();

    setTimeout(() => {
      $(".jsCorrectModuleFeedback").removeClass("hide");

      $(".jsCorrectModuleFeedback p").text("Nice work! Next, we will take a closer look at the code.");
      // $(".jsCorrectModuleFeedback .btn").off("click");
      // $(".jsCorrectModuleFeedback .btn").click(closeLookAtCode);
    }, ide[3].response.length * 100 + 100);
  } else {
    $(`.jsConfigurationParameters .holder--computer-folders #${selectedObj}`).attr("class", "computer-folder fail");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Oops, that’s not quite right. Please try again!");
  }
};

const closeLookAtCode = () => {
  $(".jsConfigurationParameters").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");
  $(".jsStory").removeClass("hide");
  $(".jsFillMissingCodeInstructions").removeClass("hide");

  // $(".jsInputPath").keyup((e) =>
  //   filledCorrectly(e, `"car.bmp"`, ".jsInputPathHint", 3, "jsFillMissingCodeInstructions", closeLookAtCodeFeedBack, closeLookAtCodeNegativeFeedBack)
  // );
  // $(".jsDeviceToUse").keyup((e) =>
  //   filledCorrectly(e, `"CPU"`, ".jsDeviceToUseHint", 3, "jsFillMissingCodeInstructions", closeLookAtCodeFeedBack, closeLookAtCodeNegativeFeedBack)
  // );
  // $(".jsOutputPath").keyup((e) =>
  //   filledCorrectly(
  //     e,
  //     `"labels.txt"`,
  //     ".jsOutputPathHint",
  //     3,
  //     "jsFillMissingCodeInstructions",
  //     closeLookAtCodeFeedBack,
  //     closeLookAtCodeNegativeFeedBack
  //   )
  // );

  updateActivityText();
};

const closeLookAtCodeFeedBack = () => {
  $(".jsFillMissingCodeInstructions .jsSampleHint").removeClass("code-sample--yellow");
  $(".jsFillMissingCodeInstructions .jsSampleHint").addClass("code-sample--grey");

  $(".jsCorrectModuleFeedback").removeClass("hide");

  $(".jsCorrectModuleFeedback p").text("Very well done! Now, let's run the code.");
  $(".jsCorrectModuleFeedback .btn").addClass("hide");

  enableRunButton();
};

const closeLookAtCodeNegativeFeedBack = () => {
  $(".jsFilledIncorrect").removeClass("hide");

  $(".jsFilledIncorrect p").text("Oops! That’s not quite right. Take a closer look and please try again.");
  // $(".jsCorrectModuleFeedback .btn").addClass("hide");
};

const enteredCorrectly = (givenAnswer, userAnswered, hintElement) => {
  userAnswered.removeClass("success");
  userAnswered.removeClass("fail");

  console.log(givenAnswer, userAnswered, givenAnswer == userAnswered);

  if (givenAnswer == userAnswered.val()) {
    $(`.${hintElement}`).removeClass("code-sample--yellow");
    $(`.${hintElement}`).removeClass("code-sample--red");

    $(`.${hintElement}`).addClass("code-sample--green");
    userAnswered.addClass("success");
    // userAnswered.prop("disabled", true);
    return true;
  }
  $(`.${hintElement}`).addClass("code-sample--red");
  userAnswered.addClass("fail");

  return false;
};

const checkAnswers = (e) => {
  $(e.target).addClass("hide");

  var inputPathElement = $(".jsInputPath");
  var deviceToUseElement = $(".jsDeviceToUse");
  var outputPathElement = $(".jsOutputPath");

  enteredCorrectly("car.bmp", inputPathElement, "jsInputPathHint");
  enteredCorrectly("CPU", deviceToUseElement, "jsDeviceToUseHint");
  enteredCorrectly("labels.txt", outputPathElement, "jsOutputPathHint");

  if ($(`.jsFillMissingCodeInstructions .code-sample--green`).length == 3) {
    closeLookAtCodeFeedBack();
  } else if ($(`.jsFillMissingCodeInstructions .code-sample--red`).length > 0) {
    closeLookAtCodeNegativeFeedBack();
  } else if ($(`.jsFillMissingCodeInstructions .code-sample--red`).length == 0) {
    closeLookAtCodeNegativeFeedBack();
  }
};

const fillAgain = (e) => {
  $(".jsCheckAnswer").removeClass("hide");
  $(".jsFilledIncorrect").addClass("hide");
};
