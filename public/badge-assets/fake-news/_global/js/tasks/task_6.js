$(function () {
  const successClass = "radio-button-activity__choice--success";
  const failClass = "radio-button-activity__choice--fail";

  $(".jsStep3 .jsCheck").on("click", (e) => {
    e.preventDefault();

    let results = $(".jsStep3 form").serializeArray();
    let questionPass = 0;

    const correct_options = [
      "supervised",
      "supervised",
      "unsupervised",
      "supervised",
      "supervised",
      "unsupervised",
      "supervised",
      "unsupervised",
      "supervised",
      "unsupervised",
    ];

    const wrong_options = [
      "unsupervised",
      "unsupervised",
      "supervised",
      "unsupervised",
      "unsupervised",
      "supervised",
      "unsupervised",
      "supervised",
      "unsupervised",
      "supervised",
    ];

    $(".jsStep3 .jsCheck").addClass("hide");
    $(".jsStep3 input").attr("disabled", true);

    if (results.length < 10) {
      $(".jsAnswerAll").removeClass("hide");

      return setTimeout(() => {
        $(".jsAnswerAll").addClass("hide");
        $(".jsStep3 .jsCheck").removeClass("hide");

        $(".jsStep3 input").attr("disabled", false);
      }, 3000);
    }

    for (x = 0; x < results.length; x++) {
      if (results[x].name === `choice-${x + 1}` && results[x].value === correct_options[x]) {
        $(`label[for='${wrong_options[x]}-${x + 1}']`).removeClass(failClass);
        $(`label[for='${correct_options[x]}-${x + 1}']`).addClass(successClass);

        questionPass += 1;
      } else {
        $(`label[for='${correct_options[x]}-${x + 1}']`).removeClass(successClass);
        $(`label[for='${wrong_options[x]}-${x + 1}']`).addClass(failClass);
      }
    }

    if (questionPass === 10) {
      $(".jsStep3 .success-box").removeClass("hide");
      $(".jsContinue").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".jsStep3 .success-box").offset().top - $(".jsStep3 .success-box").height() / 4,
        },
        800
      );
    } else {
      $(".jsStep3 .jsTryAgain").removeClass("hide");
      $(".jsStep3 .jsFail").removeClass("hide");
    }
  });

  $(".jsStep3 .jsTryAgain").on("click", (e) => {
    e.preventDefault();

    $("form")[0].reset();

    $(`.${failClass}`).removeClass(failClass);
    $(`.${successClass}`).removeClass(successClass);

    $(".jsStep3 input").attr("disabled", false);

    $(".jsAnswerAll").addClass("hide");
    $(".jsStep3 .jsFail").addClass("hide");
    $(".jsStep3 .jsTryAgain").addClass("hide");

    $(".jsStep3 .jsCheck").removeClass("hide");
  });
});
