const selectInferenceEngine = (element, selectedObj) => {
  $(".computer-folder").attr("class", "computer-folder");
  $(".jsCodeIncorrect").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");
  if (selectedObj == "inferenceEngineObject2") {
    $(`.holder--computer-folders #${selectedObj}`).attr("class", "computer-folder success");

    $(".jsInferenceEngineParameters .computer-folder")
      .filter((index, element) => {
        console.log(index, element);
        return !$(element).hasClass("success");
      })
      .attr("class", "computer-folder  disabled");

    updateIdeResponse();

    setTimeout(() => {
      $(".jsCorrectModuleFeedback").removeClass("hide");

      $(".jsCorrectModuleFeedback p").text("Very well done! Now, let's run the code.");
      // $(".jsCorrectModuleFeedback .btn").off("click");
      // $(".jsCorrectModuleFeedback .btn").click(closeLookAtCode);
    }, ide[4].response.length * 100 + 100);
  } else {
    $(`.holder--computer-folders #${selectedObj}`).attr("class", "computer-folder  fail");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Oops, that’s not quite right. Please try again!");
  }
};
