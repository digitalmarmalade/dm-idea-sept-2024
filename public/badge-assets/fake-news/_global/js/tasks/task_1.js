$(function () {
  const failMessageDsiplayTime = 2000;

  // question 1
  $(".jsHumanIntervention .jsCheck").on("click", (e) => {
    e.preventDefault();
    let results = $(".jsHumanIntervention form").serializeArray();

    $(".jsHumanIntervention input").attr("disabled", true);

    if (results.length !== 2) {
      $(".jsHumanIntervention .jsCheck").addClass("hide");
      $(".fail-box").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $(".fail-box").offset().top,
        },
        800
      );
      return setTimeout(() => {
        $(".fail-box").addClass("hide");
        $(".jsHumanIntervention .jsCheck").removeClass("hide");
        $(".jsHumanIntervention input").attr("disabled", false);
      }, failMessageDsiplayTime);
    }

    let questionPass = 0;

    if (results[0].value === "ML") {
      $("label[for='dl-1']").removeClass("radio-button-activity__choice--fail");
      $("label[for='ml-1']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='ml-1']").removeClass("radio-button-activity__choice--success");
      $("label[for='dl-1']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    if (results[1].value === "DL") {
      $("label[for='ml-2']").removeClass("radio-button-activity__choice--fail");
      $("label[for='dl-2']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='dl-2']").removeClass("radio-button-activity__choice--success");
      $("label[for='ml-2']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    $(".jsHumanIntervention .jsCheck").addClass("hide");
    $(".jsHumanIntervention form")[0].reset();
    if (questionPass === 2) {
      // next question
      $(".jsHardware").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".jsHardware").offset().top,
        },
        800
      );
    } else {
      $(".jsHumanIntervention .jsTryAgain").removeClass("hide");
    }
  });

  $(".jsHumanIntervention .jsTryAgain").on("click", (e) => {
    e.preventDefault();

    $("label[for='ml-1']").removeClass("radio-button-activity__choice--success");
    $("label[for='dl-1']").removeClass("radio-button-activity__choice--fail");
    $("label[for='dl-2']").removeClass("radio-button-activity__choice--success");
    $("label[for='ml-2']").removeClass("radio-button-activity__choice--fail");

    $(".jsHumanIntervention input").attr("disabled", false);

    $(".jsHumanIntervention .jsTryAgain").addClass("hide");
    $(".jsHumanIntervention .jsCheck").removeClass("hide");
  });

  // question 2
  $(".jsHardware .jsCheck").on("click", (e) => {
    e.preventDefault();
    let results = $(".jsHardware form").serializeArray();

    $(".jsHardware input").attr("disabled", true);

    if (results.length !== 2) {
      $(".jsHardware .jsCheck").addClass("hide");
      $(".fail-box").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $(".fail-box").offset().top,
        },
        800
      );
      return setTimeout(() => {
        $(".fail-box").addClass("hide");
        $(".jsHardware .jsCheck").removeClass("hide");
        $(".jsHardware input").attr("disabled", false);
      }, failMessageDsiplayTime);
    }

    let questionPass = 0;

    if (results[0].value === "DL") {
      $("label[for='ml-4']").removeClass("radio-button-activity__choice--fail");
      $("label[for='dl-4']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='dl-4']").removeClass("radio-button-activity__choice--success");
      $("label[for='ml-4']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    if (results[1].value === "ML") {
      $("label[for='dl-3']").removeClass("radio-button-activity__choice--fail");
      $("label[for='ml-3']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='ml-3']").removeClass("radio-button-activity__choice--success");
      $("label[for='dl-3']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    $(".jsHardware .jsCheck").addClass("hide");
    $(".jsHardware form")[0].reset();

    if (questionPass === 2) {
      // next question
      $(".jsTime").removeClass("hide");
      $(".jsHardware input").attr("disabled", true);

      $("html, body").animate(
        {
          scrollTop: $(".jsTime").offset().top,
        },
        800
      );
    } else {
      $(".jsHardware .jsTryAgain").removeClass("hide");
    }
  });

  $(".jsHardware .jsTryAgain").on("click", (e) => {
    e.preventDefault();

    $("label[for='ml-3']").removeClass("radio-button-activity__choice--success");
    $("label[for='dl-3']").removeClass("radio-button-activity__choice--fail");
    $("label[for='dl-4']").removeClass("radio-button-activity__choice--success");
    $("label[for='ml-4']").removeClass("radio-button-activity__choice--fail");

    $(".jsHardware input").attr("disabled", false);

    $(".jsHardware .jsTryAgain").addClass("hide");
    $(".jsHardware .jsCheck").removeClass("hide");
  });

  // question 3
  $(".jsTime .jsCheck").on("click", (e) => {
    e.preventDefault();
    let results = $(".jsTime form").serializeArray();

    $(".jsTime input").attr("disabled", true);

    if (results.length !== 2) {
      $(".jsTime .jsCheck").addClass("hide");
      $(".fail-box").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $(".fail-box").offset().top,
        },
        800
      );
      return setTimeout(() => {
        $(".fail-box").addClass("hide");
        $(".jsTime .jsCheck").removeClass("hide");

        $(".jsTime input").attr("disabled", false);
      }, failMessageDsiplayTime);
    }

    let questionPass = 0;

    if (results[0].value === "ML") {
      $("label[for='dl-5']").removeClass("radio-button-activity__choice--fail");
      $("label[for='ml-5']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='ml-5']").removeClass("radio-button-activity__choice--success");
      $("label[for='dl-5']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    if (results[1].value === "DL") {
      $("label[for='ml-6']").removeClass("radio-button-activity__choice--fail");
      $("label[for='dl-6']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='dl-6']").removeClass("radio-button-activity__choice--success");
      $("label[for='ml-6']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    $(".jsTime .jsCheck").addClass("hide");
    $(".jsTime form")[0].reset();

    if (questionPass === 2) {
      // next question
      $(".jsApproach").removeClass("hide");
      $(".jsTime input").attr("disabled", true);

      $("html, body").animate(
        {
          scrollTop: $(".jsApproach").offset().top,
        },
        800
      );
    } else {
      $(".jsTime .jsTryAgain").removeClass("hide");
    }
  });

  $(".jsTime .jsTryAgain").on("click", (e) => {
    e.preventDefault();

    $("label[for='ml-5']").removeClass("radio-button-activity__choice--success");
    $("label[for='dl-5']").removeClass("radio-button-activity__choice--fail");
    $("label[for='dl-6']").removeClass("radio-button-activity__choice--success");
    $("label[for='ml-6']").removeClass("radio-button-activity__choice--fail");

    $(".jsTime input").attr("disabled", false);

    $(".jsTime .jsTryAgain").addClass("hide");
    $(".jsTime .jsCheck").removeClass("hide");
  });

  // question 4
  $(".jsApproach .jsCheck").on("click", (e) => {
    e.preventDefault();
    let results = $(".jsApproach form").serializeArray();

    $(".jsApproach input").attr("disabled", true);

    if (results.length !== 2) {
      $(".jsApproach .jsCheck").addClass("hide");
      $(".fail-box").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $(".fail-box").offset().top,
        },
        800
      );
      return setTimeout(() => {
        $(".fail-box").addClass("hide");
        $(".jsApproach .jsCheck").removeClass("hide");

        $(".jsApproach input").attr("disabled", false);
      }, failMessageDsiplayTime);
    }

    let questionPass = 0;

    if (results[0].value === "ML") {
      $("label[for='dl-7']").removeClass("radio-button-activity__choice--fail");
      $("label[for='ml-7']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='ml-7']").removeClass("radio-button-activity__choice--success");
      $("label[for='dl-7']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    if (results[1].value === "DL") {
      $("label[for='ml-8']").removeClass("radio-button-activity__choice--fail");
      $("label[for='dl-8']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='dl-8']").removeClass("radio-button-activity__choice--success");
      $("label[for='ml-8']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    $(".jsApproach .jsCheck").addClass("hide");
    $(".jsApproach form")[0].reset();

    if (questionPass === 2) {
      // next question
      $(".jsApplication").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".jsApplication").offset().top,
        },
        800
      );
    } else {
      $(".jsApproach .jsTryAgain").removeClass("hide");
    }
  });

  $(".jsApproach .jsTryAgain").on("click", (e) => {
    e.preventDefault();

    $("label[for='ml-7']").removeClass("radio-button-activity__choice--success");
    $("label[for='dl-7']").removeClass("radio-button-activity__choice--fail");
    $("label[for='dl-8']").removeClass("radio-button-activity__choice--success");
    $("label[for='ml-8']").removeClass("radio-button-activity__choice--fail");

    $(".jsApproach input").attr("disabled", false);

    $(".jsApproach .jsTryAgain").addClass("hide");
    $(".jsApproach .jsCheck").removeClass("hide");
  });

  // question 5
  $(".jsApplication .jsCheck").on("click", (e) => {
    e.preventDefault();
    let results = $(".jsApplication form").serializeArray();

    $(".jsApplication input").attr("disabled", true);

    if (results.length !== 2) {
      $(".jsApplication .jsCheck").addClass("hide");
      $(".fail-box").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $(".fail-box").offset().top,
        },
        800
      );
      return setTimeout(() => {
        $(".fail-box").addClass("hide");
        $(".jsApplication .jsCheck").removeClass("hide");

        $(".jsApplication input").attr("disabled", false);
      }, failMessageDsiplayTime);
    }

    let questionPass = 0;

    if (results[1].value === "ML") {
      $("label[for='dl-9']").removeClass("radio-button-activity__choice--fail");
      $("label[for='ml-9']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='ml-9']").removeClass("radio-button-activity__choice--success");
      $("label[for='dl-9']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    if (results[0].value === "DL") {
      $("label[for='ml-10']").removeClass("radio-button-activity__choice--fail");
      $("label[for='dl-10']").addClass("radio-button-activity__choice--success");

      questionPass += 1;
    } else {
      $("label[for='dl-10']").removeClass("radio-button-activity__choice--success");
      $("label[for='ml-10']").addClass("radio-button-activity__choice--fail");

      questionPass -= 1;
    }

    $(".jsApplication .jsCheck").addClass("hide");
    $(".jsApplication form")[0].reset();

    if (questionPass === 2) {
      // next question

      $(".success-box").removeClass("hide");
      $(".jsContinue").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".success-box").offset().top,
        },
        800
      );
    } else {
      $(".jsApplication .jsTryAgain").removeClass("hide");
    }
  });

  $(".jsApplication .jsTryAgain").on("click", (e) => {
    e.preventDefault();

    $("label[for='ml-9']").removeClass("radio-button-activity__choice--success");
    $("label[for='dl-9']").removeClass("radio-button-activity__choice--fail");
    $("label[for='dl-10']").removeClass("radio-button-activity__choice--success");
    $("label[for='ml-10']").removeClass("radio-button-activity__choice--fail");

    $(".jsApplication input").attr("disabled", false);

    $(".jsApplication .jsTryAgain").addClass("hide");
    $(".jsApplication .jsCheck").removeClass("hide");
  });
});
