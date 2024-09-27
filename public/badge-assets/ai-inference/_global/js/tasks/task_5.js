let fieldsEmpty;
let failedAttempts = 0;
let bodyText;

const send = () => {
  fieldsEmpty = 0;

  //const requiredWords = ["bus", "lane", "traffic", "car", "stop"];
  const requiredWords = ["bus", "traffic", "car"];

  $(".letter-input--fail").removeClass("letter-input--fail");

  // if ($(".jsIntro").val() == "" || $(".jsIntro").val().split(" ").length < 1) isEmpty(".jsIntro");
  // if ($(".jsBody").val() == "" || $(".jsBody").val().split(" ").length < 15) isEmpty(".jsBody");
  if ($(".jsBody").val() == "" ) isEmpty(".jsBody");
  // if ($(".jsClosing").val() == "" || $(".jsClosing").val().split(" ").length < 1) isEmpty(".jsClosing");
  // if ($(".jsSign").val() == "" || $(".jsSign").val().split(" ").length < 1) isEmpty(".jsSign");

  bodyText = $(".jsBody").val();

  if (fieldsEmpty == 0) {
    for (const word of requiredWords) {
      // console.log(!bodyText.includes(word), word);

      if (!bodyText.includes(word) && failedAttempts == 0) {
        $(".jsBody").addClass("letter-input--fail");
        $(".jsIncorrect p").text("Hmm... please explain your ideas further.");
        $(".jsIncorrect").removeClass("hide");
        return (failedAttempts += 1);
      } else if (failedAttempts == 1) {
        $(".jsBody").addClass("letter-input--fail");
        $(".jsIncorrect p").text("I like where you are going with this, can you please provide more details?");
        $(".jsIncorrect").removeClass("hide");
        return (failedAttempts += 1);
      } else if (failedAttempts == 2) {
        $(".jsBody").addClass("letter-input--fail");
        $(".jsIncorrect p").text("The City Planning Team is excited to read your ideas, is there anything else you want to add?");
        $(".jsIncorrect").removeClass("hide");
        return (failedAttempts += 1);
      }
    }

    $(".jsActivityInstructions").addClass("hide");
    $(".jsLetter").addClass("hide");
    return $(".jsCorrect").removeClass("hide");
  } else {
    $(".jsIncorrect p").text("You cannot leave body of the letter empty.");
    return $(".jsIncorrect").removeClass("hide");
  }
};

const isEmpty = (section) => {
  fieldsEmpty += 1;
  $(`${section}`).addClass("letter-input--fail");
};

$(".jsCorrect .btn").click(() => {
  $(".jsActivity1").addClass("hide");
  $(".jsActivity2").removeClass("hide");

  let data = {};
  $('textarea').each(function(i) {
    data[i] = $(this).val();
  });
  $.post(
    '/ai-inference/save-data',
    {
      "_token": $('meta[name="csrf-token"]').attr('content'),
      'letter': data
    }
  );
});

oBadges.getStepAnswers = function () {
    return {
        'answer': $('.jsBody').val(),
    };
};
