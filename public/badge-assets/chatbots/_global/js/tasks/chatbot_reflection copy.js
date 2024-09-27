$(function () {
  const continueBtn = $(".jsContinue");
  const revealBtn = $(".jsReveal");

  const question_1_Success = $(".jsQuestion1 .step-5__activity--step-3-option-strength");
  const question_1_Weakness = $(".jsQuestion1 .step-5__activity--step-3-option-weakness");

  const question_2_Success = $(".jsQuestion2 .step-5__activity--step-3-option-strength");
  const question_2_Weakness = $(".jsQuestion2 .step-5__activity--step-3-option-weakness");

  const question_3_Success = $(".jsQuestion3 .step-5__activity--step-3-option-strength");
  const question_3_Weakness = $(".jsQuestion3 .step-5__activity--step-3-option-weakness");

  const question_4_Success = $(".jsQuestion4 .step-5__activity--step-3-option-strength");
  const question_4_Weakness = $(".jsQuestion4 .step-5__activity--step-3-option-weakness");

  const question_5_Success = $(".jsQuestion5 .step-5__activity--step-3-option-strength");
  const question_5_Weakness = $(".jsQuestion5 .step-5__activity--step-3-option-weakness");

  const question_6_Success = $(".jsQuestion6 .step-5__activity--step-3-option-strength");
  const question_6_Weakness = $(".jsQuestion6 .step-5__activity--step-3-option-weakness");

  const question_7_Success = $(".jsQuestion7 .step-5__activity--step-3-option-strength");
  const question_7_Weakness = $(".jsQuestion7 .step-5__activity--step-3-option-weakness");

  const question_8_Success = $(".jsQuestion8 .step-5__activity--step-3-option-strength");
  const question_8_Weakness = $(".jsQuestion8 .step-5__activity--step-3-option-weakness");

  const question_9_Success = $(".jsQuestion9 .step-5__activity--step-3-option-strength");
  const question_9_Weakness = $(".jsQuestion9 .step-5__activity--step-3-option-weakness");

  const question_10_Success = $(".jsQuestion10 .step-5__activity--step-3-option-strength");
  const question_10_Weakness = $(".jsQuestion10 .step-5__activity--step-3-option-weakness");

  // button 1 click
  question_1_Success.click(() => {
    question_1_Success.addClass("selected");
    question_1_Weakness.removeClass("selected");
  });
  question_1_Weakness.click(() => {
    question_1_Success.removeClass("selected");
    question_1_Weakness.addClass("selected");
  });

  // button 2 click
  question_2_Success.click(() => {
    question_2_Success.addClass("selected");
    question_2_Weakness.removeClass("selected");
  });
  question_2_Weakness.click(() => {
    question_2_Success.removeClass("selected");
    question_2_Weakness.addClass("selected");
  });

  // button 3 click
  question_3_Success.click(() => {
    question_3_Success.addClass("selected");
    question_3_Weakness.removeClass("selected");
  });
  question_3_Weakness.click(() => {
    question_3_Success.removeClass("selected");
    question_3_Weakness.addClass("selected");
  });

  // button 4 click
  question_4_Success.click(() => {
    question_4_Success.addClass("selected");
    question_4_Weakness.removeClass("selected");
  });
  question_4_Weakness.click(() => {
    question_4_Success.removeClass("selected");
    question_4_Weakness.addClass("selected");
  });

  // button 5 click
  question_5_Success.click(() => {
    question_5_Success.addClass("selected");
    question_5_Weakness.removeClass("selected");
  });
  question_5_Weakness.click(() => {
    question_5_Success.removeClass("selected");
    question_5_Weakness.addClass("selected");
  });

  // button 6 click
  question_6_Success.click(() => {
    question_6_Success.addClass("selected");
    question_6_Weakness.removeClass("selected");
  });
  question_6_Weakness.click(() => {
    question_6_Success.removeClass("selected");
    question_6_Weakness.addClass("selected");
  });

  // button 7 click
  question_7_Success.click(() => {
    question_7_Success.addClass("selected");
    question_7_Weakness.removeClass("selected");
  });
  question_7_Weakness.click(() => {
    question_7_Success.removeClass("selected");
    question_7_Weakness.addClass("selected");
  });

  // button 8 click
  question_8_Success.click(() => {
    question_8_Success.addClass("selected");
    question_8_Weakness.removeClass("selected");
  });
  question_8_Weakness.click(() => {
    question_8_Success.removeClass("selected");
    question_8_Weakness.addClass("selected");
  });

  // button 9 click
  question_9_Success.click(() => {
    question_9_Success.addClass("selected");
    question_9_Weakness.removeClass("selected");
  });
  question_9_Weakness.click(() => {
    question_9_Success.removeClass("selected");
    question_9_Weakness.addClass("selected");
  });

  // button 10 click
  question_10_Success.click(() => {
    question_10_Success.addClass("selected");
    question_10_Weakness.removeClass("selected");
  });
  question_10_Weakness.click(() => {
    question_10_Success.removeClass("selected");
    question_10_Weakness.addClass("selected");
  });

  revealBtn.click(() => {
    $("li.step__counter--current").removeClass("step__counter--current").addClass("step__counter--completed");
    $(".jsQuestion1").addClass("step-5__activity--step-3-container-fail");
    question_1_Success.addClass("hidden");

    $(".jsQuestion2").addClass("step-5__activity--step-3-container-success");
    question_2_Weakness.addClass("hidden");

    $(".jsQuestion3").addClass("step-5__activity--step-3-container-fail");
    question_3_Success.addClass("hidden");

    $(".jsQuestion4").addClass("step-5__activity--step-3-container-success");
    question_4_Weakness.addClass("hidden");

    $(".jsQuestion5").addClass("step-5__activity--step-3-container-success");
    question_5_Weakness.addClass("hidden");

    $(".jsQuestion6").addClass("step-5__activity--step-3-container-fail");
    question_6_Success.addClass("hidden");

    $(".jsQuestion7").addClass("step-5__activity--step-3-container-fail");
    question_7_Success.addClass("hidden");

    $(".jsQuestion8").addClass("step-5__activity--step-3-container-fail");
    question_8_Success.addClass("hidden");

    $(".jsQuestion9").addClass("step-5__activity--step-3-container-success");
    question_9_Weakness.addClass("hidden");

    $(".jsQuestion10").addClass("step-5__activity--step-3-container-success");
    question_10_Weakness.addClass("hidden");

    revealBtn.addClass("hide");
    continueBtn.removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: continueBtn.offset().top - continueBtn.height(),
      },
      800
    );
  });
});
