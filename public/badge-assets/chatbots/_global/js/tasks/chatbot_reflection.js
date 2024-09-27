$(function () {
  const continueBtn = $(".jsContinue");
  const revealBtn = $(".jsReveal");
  const checkBtn = $(".jsCheck");

  const question_1_Success = $(".jsQuestion1 .step-5__activity--step-3-option-strength");
  const question_1_Weakness = $(".jsQuestion1 .step-5__activity--step-3-option-weakness");

  const question_2_Success = $(".jsQuestion2 .step-5__activity--step-3-option-strength");
  const question_2_Weakness = $(".jsQuestion2 .step-5__activity--step-3-option-weakness");

  const question_3_Success = $(".jsQuestion3 .step-5__activity--step-3-option-strength");
  const question_3_Weakness = $(".jsQuestion4 .step-5__activity--step-3-option-weakness");

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

  let weakness_btn, strength_btn;

  let lifelines = 3;

  let questionId = 1;
  const next_question = () => {
    $(`.jsQuestion${questionId}`).removeClass("hide");
    $(`#question-progress`).text(`${questionId}/10`);

    weakness_btn ? weakness_btn.off("click") : null;
    strength_btn ? strength_btn.off("click") : null;

    strength_btn = $(`.jsQuestion${questionId} .step-5__activity--step-3-option-strength`);
    weakness_btn = $(`.jsQuestion${questionId} .step-5__activity--step-3-option-weakness`);

    strength_btn.click(() => {
      weakness_btn.removeClass("selected");
      strength_btn.addClass("selected");
    });

    weakness_btn.click(() => {
      strength_btn.removeClass("selected");
      weakness_btn.addClass("selected");
    });

    $("html, body").animate(
      {
        scrollTop: $(`.jsQuestion${questionId}`).offset().top - $(`.jsQuestion${questionId}`).height(),
      },
      800
    );
  };

  const correct_answers = ["strength", "weakness", "weakness", "strength", "strength", "strength", "weakness", "strength", "weakness", "weakness"];
  const wrong_answers = ["weakness", "strength", "strength", "weakness", "weakness", "weakness", "strength", "weakness", "strength", "strength"];

  checkBtn.click(() => {
    // correct
    if ($(`.jsQuestion${questionId} .step-5__activity--step-3-option-${correct_answers[questionId - 1]}`).hasClass("selected")) {
      correct_answers[questionId - 1] === "strength"
        ? $(`.jsQuestion${questionId}`).addClass("step-5__activity--step-3-container-success")
        : $(`.jsQuestion${questionId}`).addClass("step-5__activity--step-3-container-weakness");

      $(`.jsQuestion${questionId} .step-5__activity--step-3-option-${wrong_answers[questionId - 1]}`).addClass("hidden");

      strength_btn.addClass("pe-none");
      weakness_btn.addClass("pe-none");

      $(`.jsQuestion${questionId} .step-5__activity--step-3-option-strength button`).text("strength");
      $(`.jsQuestion${questionId} .step-5__activity--step-3-option-weakness button`).text("weakness");

      questionId += 1;
      questionId < 11 ? next_question() : completed();
    }
    // wrong
    else if ($(`.jsQuestion${questionId} .step-5__activity--step-3-option-${wrong_answers[questionId - 1]}`).hasClass("selected")) {
      $(`.jsQuestion${questionId}`).addClass("step-5__activity--step-3-container-fail");
      $(`.jsQuestion${questionId} .step-5__activity--step-3-option-${correct_answers[questionId - 1]}`).addClass("hidden");
      checkBtn.addClass("hide");

      lifelines > 1 ? wrong_answered() : resetActivity();
    }
    // not selected
    else {
      // alert("please seleted");
      checkBtn.addClass("hide");
      $(".jsSelect").removeClass("hide");
      setTimeout(() => {
        $(".jsSelect").addClass("hide");
        checkBtn.removeClass("hide");
      }, 5000);
    }
  });

  next_question();

  const wrong_answered = () => {
    lifelines -= 1;
    $(".jsFail").removeClass("hide");
    lifelines > 1 ? $(".jsLives").text(`${lifelines} lives`) : $(".jsLives").text(`${lifelines} life`);
    $("#lives").text(`${lifelines}`);

    setTimeout(() => {
      checkBtn.removeClass("hide");
      $(".jsFail").addClass("hide");

      $(".selected").removeClass("selected");

      $(`.jsQuestion${questionId}`).removeClass("step-5__activity--step-3-container-fail");
      $(`.jsQuestion${questionId} .step-5__activity--step-3-option-${correct_answers[questionId - 1]}`).removeClass("hidden");
    }, 5000);
  };

  const resetActivity = () => {
    $(".jsZeroLife").removeClass("hide");
    $("#lives").text(0);

    setTimeout(() => {
      $(".jsZeroLife").addClass("hide");

      questionId = 1;
      lifelines = 3;

      $("#lives").text(`${lifelines}`);

      $(".pe-none").removeClass("pe-none");

      $(".step-5__activity--step-3-container-success").removeClass("step-5__activity--step-3-container-success");
      $(".step-5__activity--step-3-container-weakness").removeClass("step-5__activity--step-3-container-weakness");

      $(".step-5__activity--step-3-container-fail").removeClass("step-5__activity--step-3-container-fail");

      $(`.hidden`).removeClass("hidden");
      checkBtn.removeClass("hide");
      $(".selected").removeClass("selected");

      $(".step-5__activity--step-3-container").addClass("hide");

      next_question();
    }, 5000);
  };

  const completed = () => {
    checkBtn.addClass("hide");
    $("li.step__counter--current").removeClass("step__counter--current").addClass("step__counter--completed");

    $(".success--box").removeClass("hide");
    continueBtn.removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: continueBtn.offset().top - continueBtn.height(),
      },
      800
    );
  };
});
