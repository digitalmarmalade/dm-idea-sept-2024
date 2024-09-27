var answers_2;
const success_class = "correct";
const fail_class = "wrong";
var correctAnswer = 0;
const answer_positions = ["divSmart-1", "divDigital-1", "divNone-1", "divSchool-1", "divSmart-2", "divNone-2"];
$(function () {
  answers_2 = $("#divSmart-1, #divDigital-1, #divNone-1, #divSchool-1, #divSmart-2, #divNone-2").draggable({
    revert: "invalid",
    addClasses: "false",

    drag: function (event, ui) {
      $("body").addClass("dragging");
      $("#jsFeedbackSuccess1").hide();
      $("#jsFeedbackSuccess2").hide();
      $("#jsFeedbackSuccess3").hide();
      $("#jsFeedbackSuccess4").hide();
    },

    stop: function (event, ui) {
      $("body").removeClass("dragging");
    },
  });

  $("#divSchool").droppable({
    addClasses: false,

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("dropable-item jsAnswer");

      console.log(ui.draggable.prop("id"));

      $(ui.draggable).removeAttr("style");

      $("#divSchool").append(ui.draggable);

      if (ui.draggable.prop("id") == "divSchool-1") {
        $("#jsFeedbackSuccess1").show();
        $("#divSchool").addClass("correct");
        correctAnswer++;
        scrollToTask(document.getElementById("jsFeedbackSuccess1"));
      } else {
        $("#jsFeedbackFail1").show();
        document.getElementById(ui.draggable.prop("id")).className += " wrong";
        pauseActivity();
        scrollToTask(document.getElementById("jsFeedbackFail1"));
      }

      console.log(correctAnswer);

      showFinalSuccessMessage();
    },
  });
  $("#divDigital").droppable({
    addClasses: false,

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("dropable-item jsAnswer");
      $(ui.draggable).removeAttr("style");

      $("#divDigital").append(ui.draggable);

      console.log(ui.draggable.prop("id"));
      console.log(ui.draggable.prop("id") == "divDigital-1");

      if (ui.draggable.prop("id") == "divDigital-1") {
        $("#jsFeedbackSuccess2").show();
        $("#divDigital").addClass("correct");
        correctAnswer++;
        scrollToTask(document.getElementById("jsFeedbackSuccess2"));
      } else {
        $("#jsFeedbackFail2").show();
        document.getElementById(ui.draggable.prop("id")).className += " wrong";
        pauseActivity();
        scrollToTask(document.getElementById("jsFeedbackFail2"));
      }
      console.log(correctAnswer);

      showFinalSuccessMessage();
    },
  });
  $("#divSmart").droppable({
    addClasses: false,

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("dropable-item jsAnswer");
      $(ui.draggable).removeAttr("style");

      $("#divSmart").append(ui.draggable);

      if (ui.draggable.prop("id") == "divSmart-1") {
        $("#jsFeedbackSuccess4").show();
        $(`#${ui.draggable.prop("id")}`).addClass("correct");
        correctAnswer++;
        scrollToTask(document.getElementById("jsFeedbackSuccess4"));
      } else if (ui.draggable.prop("id") == "divSmart-2") {
        $("#jsFeedbackSuccess3").show();
        $(`#${ui.draggable.prop("id")}`).addClass("correct");
        correctAnswer++;
        scrollToTask(document.getElementById("jsFeedbackSuccess3"));
      } else {
        $("#jsFeedbackFail3").show();
        document.getElementById(ui.draggable.prop("id")).className += " wrong";
        pauseActivity();
        scrollToTask(document.getElementById("jsFeedbackFail3"));
      }

      console.log(correctAnswer);
      showFinalSuccessMessage();
    },
  });
});

function tryAgain() {
  console.log("tryAgain");
  $("#jsFeedbackFail1").hide();
  $("#jsFeedbackFail2").hide();
  $("#jsFeedbackFail3").hide();
  resumeActivity();
  let wrong_answers_2 = answers_2.filter($(`.${fail_class}`));
  wrong_answers_2.each((index, item) => {
    $(item).removeClass(fail_class); // To remove and 'wrong' class
    $(item).css("position", "relative"); // check if needed
  });

  console.log(wrong_answers_2);

  // Get reference to the container element
  const container = $("#divAnswer");

  // Get the index of the item
  const index = answer_positions.findIndex(function (element) {
    return element === wrong_answers_2.attr("id");
  });
  console.log("postions is ", index);

  // Insert the new div element at the index of the container
  if (index >= 0 && index < container.children().length) {
    container.children().eq(index).before(wrong_answers_2);
  } else {
    wrong_answers_2.appendTo(container);
  }
}

const pauseActivity = () => {
  // Pause the drag and drop activity
  $("#divSmart-1, #divDigital-1, #divNone-1, #divSchool-1, #divSmart-2, #divNone-2").draggable("disable");
  $("#divSchool, #divDigital, #divSmart").droppable("disable");
};
const resumeActivity = () => {
  // Resume the drag and drop activity
  $("#divSmart-1, #divDigital-1, #divNone-1, #divSchool-1, #divSmart-2, #divNone-2").draggable("enable");
  $("#divSchool, #divDigital, #divSmart").droppable("enable");
};

const showFinalSuccessMessage = () => {
  if (correctAnswer === 4) {
    $("#jsFeedbackSuccessAll").show();
    pauseActivity();
    scrollToTask(document.getElementById("jsFeedbackSuccessAll"));
  }
};
