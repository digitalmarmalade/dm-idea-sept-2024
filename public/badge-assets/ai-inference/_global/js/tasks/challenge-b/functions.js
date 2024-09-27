arrangeTheStepsInCorrectOrder = () => {
  $("body").removeClass("office-bg");
  $(".jsChallengeB").addClass("hide");
  $(".jsActivity2").removeClass("hide");

  $(".jsArrangeInOrder").removeClass("hide");
};

const insertClassNames = (event) => {
  $(event.currentTarget).hide();

  updateIdeResponse();
  $(".jsCodeSamples").removeClass("hide");
};

const turnGreen = (hintElement, codeElement) => {
  $(`.${codeElement}`).removeClass("fail");

  $(`.${hintElement}`).removeClass("code-sample--yellow");
  $(`.${hintElement}`).removeClass("code-sample--red");

  $(`.${hintElement}`).addClass("code-sample--green");
  $(`.${codeElement}`).addClass("success");
};

const turnRed = (hintElement, codeElement) => {
  $(`.${codeElement}`).removeClass("success");

  $(hintElement).removeClass("code-sample--green");
  $(hintElement).removeClass("code-sample--yellow");
  $(hintElement).addClass("code-sample--red");

  $(`.${codeElement}`).addClass("fail");
};

const checkClassesName = (e) => {
  $(e.target).addClass("hide");

  var answers = [];
  answers.push($(".jsCar").val().trim());
  answers.push($(".jsVan").val().trim());
  answers.push($(".jsTruck").val().trim());
  answers.push($(".jsBus").val().trim());

  if (answers.includes("Car")) turnGreen("jsSampleCar", "jsCar");
  else turnRed("jsSampleCar", "jsCar");
  if (answers.includes("Van")) turnGreen("jsSampleVan", "jsVan");
  else turnRed("jsSampleVan", "jsVan");
  if (answers.includes("Truck")) turnGreen("jsSampleTruck", "jsTruck");
  else turnRed("jsSampleTruck", "jsTruck");
  if (answers.includes("Bus")) turnGreen("jsSampleBus", "jsBus");
  else turnRed("jsSampleBus", "jsBus");

  if ($(`.jsCodeSamples .code-sample--green`).length == 4) {
    classNamesCorrectlyEnteredResponse();
  } else if ($(`.jsCodeSamples .code-sample--red`).length > 0) {
    InCorrectlyEnteredResponse();
  } else if ($(`.jsCodeSamples .code-sample--red`).length == 0) {
    InCorrectlyEnteredResponse();
  }
};

const classNamesCorrectlyEnteredResponse = () => {
  $(".jsCorrectModuleFeedback").removeClass("hide");
  $(".jsCorrectModuleFeedback p").text("Nicely done!");
};
const InCorrectlyEnteredResponse = () => {
  $(".jsFilledIncorrectClasses").removeClass("hide");

  $(".jsFilledIncorrectClasses p").text(
    "Oops, that’s not it. Pay close attention to how the words are written and look out for spelling mistakes or typos!"
  );
};

const fillAgainClasses = (e) => {
  $(".jsClassesName").removeClass("hide");
  $(".jsFilledIncorrectClasses").addClass("hide");
};

const fillAgainImageSummary = (e) => {
  $(".jsConfusionMatrixCheck").removeClass("hide");
  $(".jsFilledIncorrectImageSummary").addClass("hide");
};

const tryAgainPlotConfusionMatrix = (e) => {
  $(".jsPlotConfusionMatrix").removeClass("hide");
  $(".jsPlotConfusionMatrixIncorrect").addClass("hide");
};

const confustionMatrixParametersResponse = () => {
  $(".jsCorrectModuleFeedback").removeClass("hide");
  $(".jsCorrectModuleFeedback p").text("It looks good! Let’s move on.");
};

const plotConfusionMatrix = (event) => {
  $(event.currentTarget).hide();

  updateActivityText();
  updateIdeResponse();
  $(".jsPlotConfustionMatrix").removeClass("hide");

  setTimeout(() => {
    // $(".jsTitle").focusout((e) =>
    //   filledCorrectly(
    //     e,
    //     `"Confusion Matrix"`,
    //     ".jsSampleTitle",
    //     3,
    //     "jsPlotConfustionMatrix",
    //     confustionMatrixParametersResponse,
    //     InCorrectlyEnteredResponse
    //   )
    // );
    // $(".jsYLabel").focusout((e) =>
    //   filledCorrectly(
    //     e,
    //     `"True label"`,
    //     ".jsSampleYLabel",
    //     3,
    //     "jsPlotConfustionMatrix",
    //     confustionMatrixParametersResponse,
    //     InCorrectlyEnteredResponse
    //   )
    // );
    // $(".jsXLabel").focusout((e) =>
    //   filledCorrectly(
    //     e,
    //     `"Predicted label"`,
    //     ".jsSampleXLabel",
    //     3,
    //     "jsPlotConfustionMatrix",
    //     confustionMatrixParametersResponse,
    //     InCorrectlyEnteredResponse
    //   )
    // );
  }, ide[15].response.length * 100 + 100);
};

const checkPlotConfusionMatrix = (e) => {
  $(e.target).addClass("hide");

  var sampleTitleElement = $(".jsTitle");
  var yLabelElement = $(".jsYLabel");
  var xLabelElement = $(".jsXLabel");

  enteredCorrectly("Confusion Matrix", sampleTitleElement, "jsSampleTitle");
  enteredCorrectly("True label", yLabelElement, "jsSampleYLabel");
  enteredCorrectly("Predicted label", xLabelElement, "jsSampleXLabel");

  if ($(`.jsPlotConfustionMatrix .code-sample--green`).length == 3) {
    confustionMatrixParametersResponse();
  } else if ($(`.jsPlotConfustionMatrix .code-sample--red`).length > 0) {
    // closeLookAtCodeNegativeFeedBack();
    confustionMatrixParametersFailResponse();
  } else if ($(`.jsPlotConfustionMatrix .code-sample--red`).length == 0) {
    // closeLookAtCodeNegativeFeedBack();
    confustionMatrixParametersFailResponse();
  }
};

const confustionMatrixParametersFailResponse = () => {
  $(".jsPlotConfusionMatrixIncorrect").removeClass("hide");
};

const plotToImage = (event) => {
  $(event.currentTarget).hide();

  updateIdeResponse();
  setTimeout(() => {
    $(".jsContinue").removeClass("hide");
    // $(".jsContinue").off("click");
    // $(".jsContinue").click(nextPreTrainedModelStep);
  }, ide[16].response.length * 100 + 100);
};

const summaryCorrectlyEnteredResponse = () => {
  $(".jsCorrectModuleFeedback").removeClass("hide");
  $(".jsCorrectModuleFeedback .btn").addClass("hide");
  $(".jsCorrectModuleFeedback p").text("Well done! Now run the code.");
  enableRunButton();
};

const confusionMatrixLog = (event) => {
  $(event.currentTarget).hide();

  updateActivityText();
  $(".jsConfusionMatrixLog").removeClass("hide");
  updateIdeResponse();

  // setTimeout(() => {
  //   $(".jsImageSummary").focusout((e) =>
  //     filledCorrectly(
  //       e,
  //       `"Confusion Matrix"`,
  //       ".jsSummarySample",
  //       1,
  //       "jsConfusionMatrixLog",
  //       summaryCorrectlyEnteredResponse,
  //       InCorrectlyEnteredResponse
  //     )
  //   );
  // }, ide[17].response.length * 100 + 100);
};

const checkConfusionMatrixLog = (e) => {
  $(e.target).addClass("hide");

  if ($(".jsImageSummary").val() == "Confusion Matrix") {
    turnGreen("jsSummarySample", "jsImageSummary");
    summaryCorrectlyEnteredResponse();
  } else {
    turnRed("jsSummarySample", "jsImageSummary");
    $(".jsFilledIncorrectImageSummary").removeClass("hide");
  }
};

const processResults = (event) => {
  $(event.currentTarget).hide();

  updateIdeResponse();

  setTimeout(() => {
    updateActivityText();
  }, ide[18].response.length * 100 + 100);
};

const graphQuestions = () => {
  updateActivityText();
  $(".jsGraphQuestions").removeClass("hide");
  $(".jsContinue").removeClass("hide");
  // $(".jsContinue").off("click");

  // $(".jsContinue").click(nextPreTrainedModelStep);
};

const selectVehicle = (element, vehicleType) => {
  $(".jsCodeIncorrect").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");

  $(".jsVehicletypes .graph-icon").attr("class", "graph-icon");

  if (vehicleType == "graph-icon-bus") {
    $(`.jsVehicletypes #${vehicleType}`).attr("class", `graph-icon graph-icon--correct`);
    $(".jsVehicletypes .graph-icon").css("pointer-events", "none");

    setTimeout(() => {
      $(".jsCorrectModuleFeedback").removeClass("hide");

      $(".jsCorrectModuleFeedback p").text(
        "That’s correct! The graph shows that during the peak hours when there are the highest number of vehicles using the intersection, bus counts also spike and exceed the threshold of 60 buses per hour, which causes gridlock."
      );

      $(".jsCorrectModuleFeedback .btn").removeClass("hide");
    }, 0);
  } else {
    $(`.jsVehicletypes #${vehicleType}`).attr("class", `graph-icon graph-icon--incorrect`);
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Hmm… that’s not quite right. Study the graph and consideration points carefully and try again.");
  }
};
