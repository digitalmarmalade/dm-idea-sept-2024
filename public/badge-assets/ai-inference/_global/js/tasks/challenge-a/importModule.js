const selectModule = (element, module) => {
  $(".jsImportModules .computer-folder").attr("class", "computer-folder");
  $(".jsCodeIncorrect").addClass("hide");
  $(".jsCorrectModuleFeedback").addClass("hide");
  if (module == "pythonModule") {
    $(`.jsImportModules #${module}`).attr("class", "computer-folder success");

    $(".jsImportModules .computer-folder")
      .filter((index, element) => {
        console.log(index, element);
        return !$(element).hasClass("success");
      })
      .attr("class", "computer-folder  disabled");

    updateIdeResponse();

    setTimeout(() => {
      $(".jsIDEOutput").removeClass("hide");

      updateIdeOutput(false);

      setTimeout(() => {
        $(".jsContinue").addClass("hide");
        $(".jsCorrectModuleFeedback").removeClass("hide");

        $(".jsCorrectModuleFeedback p").text(
          "Great job! Now that you have successfully imported the Python modules, the next step is to download and prepare the pre-trained models."
        );
      }, ide_output[0].response * 100 + 300);
    }, ide[0].response.length * 100 + 100 + 1000);
  } else {
    $(`.jsImportModules #${module}`).attr("class", "computer-folder fail");
    $(".jsCodeIncorrect").removeClass("hide");
    $(".jsCodeIncorrect p").text("Oops, that’s not quite right. Please try again!");
  }
};
