const fail_class = "reorder__item--fail";
const success_class = "reorder__item--success";
const initial_class = "reorder__item--initial";

$(".reorder").sortable({}); //applied to the parent component of sortable items

var correct_order = ["sortAnswer-4", "sortAnswer-2", "sortAnswer-1", "sortAnswer-3"];
var correct_order = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];

$(".jsInCorrectFeedback .btn").click(() => {
  $(`.${fail_class}`).addClass(initial_class).removeClass(fail_class);
  $(".jsArrangeInOrder .btn").removeClass("hide");

  $(".jsInCorrectFeedback").addClass("hide");
});
$(".jsCorrectFeedback .btn").click(() => {
  // nextChapter();
  $(".jsActivity2").addClass("hide");
  $(".jsArrangeInOrder").addClass("hide");

  // $(".jsChallenge").removeClass("hide");
  $(".jsActivity").removeClass("hide");
  $(".jsIDE").removeClass("hide");
  disableRunButton();
  $(".jsSelectCodeBlock").removeClass("hide");
  updateActivityText();
  updateActivityHeading();
});

$(".jsArrangeInOrder .btn").click((e) => {
  $(".jsArrangeInOrder .btn").addClass("hide");

  $(".reorder__item").removeClass(fail_class);
  $(".reorder__item").removeClass(success_class);

  var user_answer = [];
  [...document.querySelectorAll(".reorder__item")].map((item) => user_answer.push(item.id));

  if (JSON.stringify(user_answer) === JSON.stringify(correct_order)) {
    console.log("that's correct");
    $(".reorder__item").removeClass(initial_class).addClass(success_class);
    $(".jsCorrectFeedback").removeClass("hide");
    correct_order.map((item) => $(`#${item} .reorder__item__identifier`).text(""));
  } else {
    var wrong_answers = [];
    var user_correct_answer = [];
    for (var x = 0; x < user_answer.length; x++) {
      if (user_answer[x] !== correct_order[x]) {
        wrong_answers.push(user_answer[x]);
        $(`#${user_answer[x]}`).removeClass(initial_class).addClass(fail_class);
        $(`#${user_answer[x]} .reorder__item__identifier`).text("?");
      } else {
        user_correct_answer.push(user_answer[x]);
        $(`#${user_answer[x]}`).removeClass(initial_class).addClass(success_class);
        // $(`#${user_answer[x]} .reorder__item__identifier`).text(user_answer[x]);
        $(`#${user_answer[x]} .reorder__item__identifier`).text("");
      }
    }
    console.log("object");
    $(".jsInCorrectFeedback").removeClass("hide");
  }
});
