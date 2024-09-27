const loadPreTrainedModel = (element, selectedObj) => {
  $(".jsLoadPreTrainedModel .computer-file").attr("class", "computer-file load-pretrained-model");
  $(".jsCodeIncorrect").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");
  if (selectedObj == "carBmp") {
    $(`.jsLoadPreTrainedModel .holder--computer-files #${selectedObj}`).attr("class", "computer-file success");

    $(".jsLoadPreTrainedModel .computer-file")
      .filter((index, element) => {
        return !$(element).hasClass("success");
      })
      .attr("class", "computer-file load-label disabled");

    updateIdeResponse();

    setTimeout(() => {
      $(".jsCorrectModuleFeedback").removeClass("hide");

      $(".jsCorrectModuleFeedback p").text("Great! Now, run the code.");
    }, ide[9].response.length * 100 + 100);
  } else {
    $(`.jsLoadPreTrainedModel .holder--computer-files #${selectedObj}`).attr("class", "computer-file fail");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Oops! That’s not quite right.");
  }
};

const runInference = (event) => {
  $(event.currentTarget).hide();
  updateIdeResponse();
  setTimeout(() => {
    updateActivityText();
    console.log("ifer her", ide_id);
  }, ide[10].response.length * 100 + 100);
};

const processInferenceResults = (event) => {
  $(event.currentTarget).hide();
  updateIdeResponse();
  setTimeout(() => {
    updateActivityText();
    console.log("ifer her", ide_id);
  }, ide[11].response.length * 100 + 100);
};

const visualiseResults = (event) => {
  $(event.currentTarget).hide();

  updateIdeResponse();

  setTimeout(() => {
    updateActivityText();
    console.log("ifer her", ide_id);
  }, ide[12].response.length * 100 + 100);
};
