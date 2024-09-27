const loadLabels = (element, selectedObj) => {
  $(".jsLoadLabels .computer-file").attr("class", "computer-file load-label");
  $(".jsCodeIncorrect").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");
  if (selectedObj == "labelsTxt") {
    $(`.jsLoadLabels .holder--computer-files #${selectedObj}`).attr("class", "computer-file load-label success");

    $(".jsLoadLabels .computer-file")
      .filter((index, element) => {
        return !$(element).hasClass("success");
      })
      .attr("class", "computer-file load-label disabled");

    updateIdeResponse();

    setTimeout(() => {
      $(".jsCorrectModuleFeedback").removeClass("hide");

      $(".jsCorrectModuleFeedback p").text("Very well done! Now, let's run the code.");
    }, ide[8].response.length * 100 + 100);
  } else {
    $(`.jsLoadLabels .holder--computer-files #${selectedObj}`).attr("class", "computer-file load-label fail");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Oops! You should use the label mapping file.");
  }
};
