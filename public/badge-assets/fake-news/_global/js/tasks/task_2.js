$(function () {
  const successClass = "radio-button-activity__choice--success";
  const failClass = "radio-button-activity__choice--fail";

  let corrrect_guessed = [];

  $(".jsReal-Fake .jsCheck").on("click", (e) => {
    e.preventDefault();

    let results = $(".jsReal-Fake").serializeArray();
    let questionPass = 0;

    const correct_options = ["real", "fake", "fake", "real", "fake", "real", "real", "fake", "fake", "real"];

    const wrong_options = ["fake", "real", "real", "fake", "real", "fake", "fake", "real", "real", "fake"];

    $(".jsReal-Fake .jsCheck").addClass("hide");

    $(".jsReal-Fake input").attr("disabled", true);

    if (results.length < 10) {
      // $(".jsReal-Fake .jsTryAgain").removeClass("hide");
      $(".jsAnswerAll").removeClass("hide");

      return setTimeout(() => {
        $(".jsAnswerAll").addClass("hide");
        $(".jsReal-Fake .jsCheck").removeClass("hide");

        $(".jsReal-Fake input").attr("disabled", false);
      }, 3000);
    }

    for (x = 0; x < results.length; x++) {
      if (results[x].name === `choice-${x + 1}` && results[x].value === correct_options[x]) {
        $(`label[for='${wrong_options[x]}-${x + 1}']`).removeClass(failClass);
        $(`label[for='${correct_options[x]}-${x + 1}']`).addClass(successClass);

        corrrect_guessed.push(`${correct_options[x]}-${x + 1}`);

        questionPass += 1;
      } else {
        $(`label[for='${correct_options[x]}-${x + 1}']`).removeClass(successClass);
        $(`label[for='${wrong_options[x]}-${x + 1}']`).addClass(failClass);
      }
    }

    if (questionPass === 10) {
      $(".jsReal-Fake .success-box").removeClass("hide");
      $(".jsNLP").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".jsReal-Fake .success-box").offset().top - $(".jsReal-Fake .success-box").height() / 4,
        },
        800
      );
    } else {
      $(".jsReal-Fake .jsTryAgain").removeClass("hide");
      $(".jsReal-Fake .jsFail").removeClass("hide");
    }
  });

  $(".jsReal-Fake .jsTryAgain").on("click", (e) => {
    e.preventDefault();
    $("form")[0].reset();

    $(`.${failClass}`).removeClass(failClass);
    $(`.${successClass}`).removeClass(successClass);

    // corrrect_guessed.map((item) => $(`#${item}`).attr("checked", true));

    $(".jsReal-Fake input").attr("disabled", false);

    $(".jsAnswerAll").addClass("hide");
    $(".jsReal-Fake .jsFail").addClass("hide");
    $(".jsReal-Fake .jsTryAgain").addClass("hide");

    $(".jsReal-Fake .jsCheck").removeClass("hide");
  });
});
