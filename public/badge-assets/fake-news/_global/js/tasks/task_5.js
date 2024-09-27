var answers_2;
$(function () {
  const success_class = "drag-n-drop__item--success";
  const fail_class = "drag-n-drop__item--fail";
  answers_2 = $("#item-6, #item-7, #item-8, #item-9, #item-10").draggable({
    revert: "invalid",
    addClasses: "false",

    drag: function (event, ui) {
      $("body").addClass("dragging");
    },

    stop: function (event, ui) {
      $("body").removeClass("dragging");
    },
  });

  $("#place_6").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer drag-n-drop__item--condensed");

      $(ui.draggable).removeAttr("style");

      $("#place_6").empty();
      $("#place_6").append(ui.draggable);
    },
  });
  $("#place_7").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer drag-n-drop__item--condensed");
      $(ui.draggable).removeAttr("style");

      $("#place_7").empty();

      $("#place_7").append(ui.draggable);
    },
  });
  $("#place_8").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer drag-n-drop__item--condensed");
      $(ui.draggable).removeAttr("style");

      $("#place_8").empty();
      $("#place_8").append(ui.draggable);
    },
  });
  $("#place_9").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer drag-n-drop__item--condensed");
      $(ui.draggable).removeAttr("style");

      $("#place_9").empty();
      $("#place_9").append(ui.draggable);
    },
  });
  $("#place_10").droppable({
    addClasses: false,

    accept: function (d) {
      if ($(this).children().length < 1) return true;
    },

    drop: function (event, ui) {
      $(ui.draggable).removeClass();
      $(ui.draggable).addClass("drag-n-drop__item jsAnswer drag-n-drop__item--condensed");
      $(ui.draggable).removeAttr("style");

      $("#place_10").empty();
      $("#place_10").append(ui.draggable);
    },
  });

  const check_button = $(".jsStep2 .jsCheck");
  const try_again = $(".jsStep2 .jsTryAgain");

  try_again.click(() => {
    let wrong_answers_2 = answers_2.filter($(`.${fail_class}`));
    wrong_answers_2.each((index, item) => {
      $(item).removeClass(); // To remove 'right' and 'wrong' class
      $(item).addClass("drag-n-drop__item drag-n-drop__item--condensed");
      $(item).css("position", "relative");
    });
    wrong_answers_2.appendTo(".jsStep2 .jsAnswerHolder");

    let empty_places = $(".jsStep2 .drag-n-drop__target");

    empty_places.each((index, item) => {
      $(item).children().length < 1 ? $(item).text("?") : null;
    });

    $(".jsStep2 .fail-box").addClass("hide");
    try_again.addClass("hide");
    check_button.removeClass("hide");
  });

  var correct_answer_order = ["item-9", "item-7", "item-8", "item-10", "item-6"];

  check_button.click(() => {
    const answers_2 = document.querySelectorAll(".jsStep2 .jsPlaceHolder .jsAnswer");
    const answer = [];
    answers_2.forEach((ans) => answer.push(ans.id));
    check_button.addClass("hide");

    if (answers_2.length < 5) {
      $(".jsStep2 .jsSelectAll").removeClass("hide");
      return try_again.removeClass("hide");
    }
    if (JSON.stringify(answer) === JSON.stringify(correct_answer_order)) {
      correct_answer_order.forEach((item) => $(`#${item}`).addClass(success_class));
      $(".jsStep2 .success-box").removeClass("hide");
      $(".jsStep2 .jsSummary").removeClass("hide");
      $(".jsStep3").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".jsStep2 .success-box").offset().top - $(".jsStep2 .success-box").height() / 4,
        },
        800
      );

      // $("html, body").animate({ scrollTop: $(document).height() });
    } else {
      var wrong_answers_2 = [];
      var user_correct_answer = [];
      for (var x = 0; x < answers_2.length; x++) {
        if (answer[x] !== correct_answer_order[x]) {
          wrong_answers_2.push(answer[x]);
          $(`#${answer[x]}`).addClass(fail_class);
        } else {
          user_correct_answer.push(answer[x]);
          $(`#${answer[x]}`).addClass(success_class);
        }
      }
      $(".jsStep2 .jsWrong").removeClass("hide");
      // $("html, body").animate({ scrollTop: $(document).height() });
      check_button.addClass("hide");
      try_again.removeClass("hide");
    }
  });
});
