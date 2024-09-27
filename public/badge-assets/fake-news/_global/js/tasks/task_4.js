var answers_1;
$(function () {
  const success_class = "drag-n-drop__item--success";
  const fail_class = "drag-n-drop__item--fail";
  answers_1 = $("#item-1, #item-2, #item-3, #item-4, #item-5").draggable({
    revert: "invalid",
    addClasses: "false",

    drag: function (event, ui) {
      $("body").addClass("dragging");
    },

    stop: function (event, ui) {
      $("body").removeClass("dragging");
    },
  });

  $("#place_1").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer");

      $(ui.draggable).removeAttr("style");

      $("#place_1").empty();
      $("#place_1").append(ui.draggable);
    },
  });
  $("#place_2").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer");
      $(ui.draggable).removeAttr("style");

      $("#place_2").empty();

      $("#place_2").append(ui.draggable);
    },
  });
  $("#place_3").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer");
      $(ui.draggable).removeAttr("style");

      $("#place_3").empty();
      $("#place_3").append(ui.draggable);
    },
  });
  $("#place_4").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer");
      $(ui.draggable).removeAttr("style");

      $("#place_4").empty();
      $("#place_4").append(ui.draggable);
    },
  });
  $("#place_5").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer");
      $(ui.draggable).removeAttr("style");

      $("#place_5").empty();
      $("#place_5").append(ui.draggable);
    },
  });

  const check_button = $(".jsStep1 .jsCheck");
  const try_again = $(".jsStep1 .jsTryAgain");

  try_again.click(() => {
    let wrong_answers_1 = answers_1.filter($(`.${fail_class}`));

    wrong_answers_1.each((index, item) => {
      $(item).removeClass(); // To remove 'right' and 'wrong' class
      $(item).addClass("drag-n-drop__item");
      $(item).css("position", "relative");
    });
    wrong_answers_1.appendTo(".jsStep1 .jsAnswerHolder");

    let empty_places = $(".jsStep1 .drag-n-drop__target");

    empty_places.each((index, item) => {
      $(item).children().length < 1 ? $(item).text("?") : null;
    });

    $(".jsStep1 .fail-box").addClass("hide");
    try_again.addClass("hide");
    check_button.removeClass("hide");
  });

  var correct_answer_order = ["item-2", "item-4", "item-3", "item-5", "item-1"];

  check_button.click(() => {
    const answers_1 = document.querySelectorAll(".jsStep1 .jsPlaceHolder .jsAnswer");
    const answer = [];
    answers_1.forEach((ans) => answer.push(ans.id));

    check_button.addClass("hide");

    if (answers_1.length < 5) {
      $(".jsStep1 .jsSelectAll").removeClass("hide");
      return try_again.removeClass("hide");
    }
    if (JSON.stringify(answer) === JSON.stringify(correct_answer_order)) {
      correct_answer_order.forEach((item) => $(`#${item}`).addClass(success_class));
      $(".jsStep1 .success-box").removeClass("hide");
      $(".jsStep1 .jsSummary").removeClass("hide");
      $(".jsStep2").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".jsStep1 .success-box").offset().top - $(".jsStep1 .success-box").height() / 4,
        },
        800
      );
    } else {
      var wrong_answers_1 = [];
      var user_correct_answer = [];
      for (var x = 0; x < answers_1.length; x++) {
        if (answer[x] !== correct_answer_order[x]) {
          wrong_answers_1.push(answer[x]);
          $(`#${answer[x]}`).addClass(fail_class);
        } else {
          user_correct_answer.push(answer[x]);
          $(`#${answer[x]}`).addClass(success_class);
        }
      }
      $(".jsStep1 .jsWrong").removeClass("hide");
      // $("html, body").animate({ scrollTop: $(document).height() });
      check_button.addClass("hide");
      try_again.removeClass("hide");
    }
  });
});
