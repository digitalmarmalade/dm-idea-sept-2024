/**
 * step 0 => from the begining
 * step 1 => load python modules
 * step 2 => download pretrained model
 * step 3 => insert configuration parameters settings
 * step 4 => create inference engine object
 * step 5 => verify and load ir files
 * step 6 => load the model
 * step 7 => load labels
 * step 8 => load single image
 * step 9 => run inference
 * step 10 => process inference output results
 * step 11 => visualize results
 * step 12 => part 2 start
 * step 13 => sorting activity
 * step 14 => parse through the training and testing dataset,
 * select correct code block
 * step 15 => insert class names
 * step 16 => printing the confusion matrix
 * step 17 => plot confusion matrix
 * step 18 => plot to image
 * step 19 => confustion matrix log
 * step 20 => process results of confusion matrix
 * step 21 => Visualize results
 * step 22 => Graph Activity
 */
var step = 0;
var ide_id = 0;
var ide_output_id = 0;
var story_2_id = 0;
var story_activity_id = 0;
var intro_id = 0;

if (step == 0) {
  updateTextIntroStory();
} else if (step == 1) {
  story_activity_id = 5;
  $(".jsImportModules").removeClass("hide");
} else if (step == 2) {
  story_activity_id = 6;
  ide_id = 1;
  ide_output_id = 1;
  story_2_id = 4;

  // updateActivityText();
} else if (step == 3) {
  story_activity_id = 8;
  ide_id = 3;
  ide_output_id = 3;
  $(".jsStory").addClass("hide");
  $(".jsConfigurationParameters").removeClass("hide");
  updateActivityText();
} else if (step == 4) {
  story_activity_id = 11;
  ide_id = 4;
  ide_output_id = 4;
  $(".jsCorrectModuleFeedback .btn").addClass("hide");

  $(".jsInferenceEngineParameters").removeClass("hide");
} else if (step == 5) {
  story_activity_id = 12;
  ide_id = 5;
  ide_output_id = 5;
  $(".jsCorrectModuleFeedback .btn").addClass("hide");

  $(".jsIRLoadVerified").removeClass("hide");
} else if (step == 6) {
  story_activity_id = 13;
  ide_id = 7;
  ide_output_id = 6;
  $(".jsCorrectModuleFeedback .btn").addClass("hide");
} else if (step == 7) {
  story_activity_id = 15;
  ide_id = 8;
  ide_output_id = 7;

  story_2_id = 5;

  $(".jsCorrectModuleFeedback .btn").addClass("hide");

  $(".jsLoadLabels").removeClass("hide");
} else if (step == 8) {
  story_activity_id = 17;
  ide_id = 9;
  ide_output_id = 8;

  story_2_id = 6;

  $(".jsCorrectModuleFeedback .btn").addClass("hide");

  $(".jsLoadPreTrainedModel").removeClass("hide");
} else if (step == 9) {
  story_activity_id = 18;
  ide_id = 10;
  ide_output_id = 9;

  story_2_id = 6;

  intro_id = 5;
  updateTextIntroStory();

  $(".jsCorrectModuleFeedback .btn").addClass("hide");
} else if (step == 10) {
  story_activity_id = 20;
  ide_id = 11;
  ide_output_id = 10;
  updateActivityText();
} else if (step == 11) {
  intro_id = 5;

  story_activity_id = 23;
  ide_id = 12;
  ide_output_id = 11;
  story_2_id = 7;
  updateActivityText();
} else if (step == 12) {
  $(".jsIDE").addClass("hide");
  $(".jsChallenge").addClass("hide");
  $(".jsChallengeB").removeClass("hide");

  $("body").removeClass("traffic-animation");

  $(".jsStory2").addClass("hide");
  intro_id = 5;
  $(".jsChallengeB .jsChallenge").removeClass("hide");
  updateTextIntroStory();
} else if (step == 13) {
  $(".jsActivity").addClass("hide");

  $(".jsChallenge").addClass("hide");
  $(".jsChallengeB").addClass("hide");
  $(".jsActivity2").removeClass("hide");

  $(".jsArrangeInOrder").removeClass("hide");
} else if (step == 14) {
  story_activity_id = 25;
  ide_id = 13;
  $(".jsActivity2").addClass("hide");
  $(".jsArrangeInOrder").addClass("hide");

  // $(".jsChallenge").removeClass("hide");
  $(".jsActivity").removeClass("hide");
  $(".jsIDE").removeClass("hide");
  $(".jsSelectCodeBlock").removeClass("hide");
  updateActivityText();
  updateActivityHeading();
} else if (step == 15) {
  story_activity_id = 26;
  ide_id = 14;
  story_2_id = 13;
  updateActivityText();
  updateActivityHeading();
} else if (step == 16) {
  story_activity_id = 27;
  ide_id = 15;
  story_2_id = 13;
  updateActivityText();
  updateActivityHeading();
} else if (step == 17) {
  story_activity_id = 32;
  ide_id = 15;
  story_2_id = 13;
  updateActivityText();
  updateActivityHeading();
} else if (step == 18) {
  story_activity_id = 34;
  ide_id = 16;
  story_2_id = 13;
  updateActivityText();
  updateActivityHeading();
} else if (step == 19) {
  story_activity_id = 36;
  ide_id = 17;
  ide_output_id = 11;
  story_2_id = 13;
  updateActivityText();
  updateActivityHeading();
} else if (step == 20) {
  story_activity_id = 38;
  ide_id = 18;
  ide_output_id = 12;
  story_2_id = 13;
  updateActivityText();
  updateActivityHeading();
} else if (step == 21) {
  story_activity_id = 40;
  ide_id = 19;
  ide_output_id = 13;
  story_2_id = 15;
  updateActivityText();
  updateActivityHeading();
} else if (step == 22) {
  $(".jsChallenge").addClass("hide");
  story_activity_id = 42;
  ide_id = 20;
  intro_id = 7;
  story_2_id = 18;

  $(".jsGitInstallInstruction").hide();

  plottingResults();

  updateActivityText();
}

if (step !== 0 && step !== 12 && step !== 13 && step !== 22) {
  $(".jsChallenge").addClass("hide");

  $(".jsInfoBox").addClass("hide");
  $(".jsStory2").addClass("hide");

  $("body").removeClass("traffic-animation");

  $(".jsActivity").removeClass("hide");

  $(".jsGitInstallInstruction").hide();
  $(".jsIDE").removeClass("hide");

  updateActivityText();
}
