const selectCodeBlock = (selectedBlock) => {
  $(`#code-block-2`).removeClass("code-sample--red");
  $(`#code-block-3`).removeClass("code-sample--red");
  $(".jsCodeIncorrect").addClass("hide");
  if (selectedBlock === "code-block-1") {
    $(`#${selectedBlock}`).addClass("code-sample--green");
    $(`#code-block-2`).addClass("code-sample--grey");
    $(`#code-block-3`).addClass("code-sample--grey");
    $(".jsCorrectModuleFeedback").removeClass("hide");
    $(".jsCorrectModuleFeedback .btn").removeClass("hide");
    $(".jsCorrectModuleFeedback p").text("Nice work!");
    updateIdeResponse();
  } else {
    $(`#${selectedBlock}`).addClass("code-sample--red");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text(
      "Oops, that’s not quite right. Look closely at the code to make sure you select the one that contains what you need."
    );
  }
};
