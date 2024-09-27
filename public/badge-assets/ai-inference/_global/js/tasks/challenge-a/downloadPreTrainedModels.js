const downloadPreTrainedModels = () => {
  $(".jsStory").addClass("hide");
  $(".jsPreTrainedInstallInstruction").removeClass("hide");

  progressBarAnimation("#install-trained-model", 4, modelsDownloaded);
};

/**
 * Steps to do when pre-trained models have been successfully downloaded
 */
const modelsDownloaded = () => {
  $(".jsPreTrainProgress").fadeOut().remove();
  $(".jsPreTrainedInstalled").attr("class", "jsGitInstalled");

  $(".jsStory").removeClass("hide");

  updateIdeResponse();
  updateActivityText();
};

const converter = (event) => {
  $(event.currentTarget).hide();
  updateIdeResponse();
  updateActivityText();
};
