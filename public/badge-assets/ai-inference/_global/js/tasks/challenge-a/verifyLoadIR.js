var orderId = 0;
const verifyLoad = (element, selectedOption) => {
  console.log("selectedOption");
  console.log(selectedOption);
  const order = ["verifyIrFiles2", "loadIrFiles2"];
  if (selectedOption == "verifyIrFiles2" && orderId == 0) {
    $(`.jsIRLoadVerified .holder--computer-folders #${selectedOption}`).attr("class", "computer-folder fail");

    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("You need to load the IR files before they can be verified.");
  } else if (selectedOption == "loadIrFiles2" && orderId == 0) {
    $(`.jsIRLoadVerified .holder--computer-folders .fail`).attr("class", "computer-folder");
    $(`.jsIRLoadVerified .holder--computer-folders #${selectedOption}`).attr("class", "computer-folder success");
    orderId += 1;
    $(".jsCodeIncorrect").addClass("hide");

    updateIdeResponse();
    setTimeout(() => {
      $(".jsCorrectModuleFeedback").removeClass("hide");

      $(".jsCorrectModuleFeedback p").text("Very well done! Now, let's verify it has been loaded correctly.");
    }, ide[5].response.length * 100 + 100);
  } else if (selectedOption == "verifyIrFiles2" && orderId == 1) {
    $(`.jsIRLoadVerified #${selectedOption}`).attr("class", "computer-folder success");

    updateIdeResponse();
    setTimeout(() => {
      $(".jsCorrectModuleFeedback p").text("Very well done! Now, let's run the code.");
      enableRunButton();
    }, ide[6].response.length * 100 + 100);
  } else {
    $(`#${selectedOption}`).attr("class", "computer-folder fail");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Oops, that’s not quite right. Please try again!");
  }
};

const loadModel = (event) => {
  $(event.currentTarget).fadeOut();
  updateIdeResponse();
  setTimeout(() => {
    updateActivityText();
  }, ide[7].response.length * 100 + 100);
};
