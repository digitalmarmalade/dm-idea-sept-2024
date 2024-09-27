$(function () {
    // $("Js_training-questions-sort .sortable-wrapper ").sortable({}); //applied to the parent component of sortable items

    $(".answers").sortable({}); //applied to the parent component of sortable items

    var correct_order = [
        "sortAnswer-4",
        "sortAnswer-2",
        "sortAnswer-1",
        "sortAnswer-3",
    ];

    $(".jsSortableReCheck").click(() => {
        $(".correct").removeClass("correct");
        $(".wrong").removeClass("wrong");
        $("#task-15-btn").fadeIn();

        $(".jsSortableFail").hide();
    });
    $(".jsSortableSuccess-btn").click(() => {
        console.log(id);
        // $(".jsSortableSuccess").hide();
        // $(".group-2").hide();
        // $("#case-resolved").slideDown();
        nextChapter();
        // $(".step-5-intro-text-next").parent().fadeIn();
    });

    $("#task-15-btn").click((e) => {
        $("#task-15-btn").fadeOut();

        var user_answer = [];
        [...document.querySelectorAll(".jsSortableAnswer")].map((item) =>
            user_answer.push(item.id)
        );

        console.log(user_answer);

        if (JSON.stringify(user_answer) === JSON.stringify(correct_order)) {
            console.log("that's correct");
            $(".jsSortableAnswer").addClass("correct");
            $(".jsSortableSuccess").slideDown();
        } else {
            var wrong_answers = [];
            var user_correct_answer = [];
            for (var x = 0; x < user_answer.length; x++) {
                if (user_answer[x] !== correct_order[x]) {
                    wrong_answers.push(user_answer[x]);
                    $(`#${user_answer[x]}`).addClass("wrong");
                } else {
                    user_correct_answer.push(user_answer[x]);
                    $(`#${user_answer[x]}`).addClass("correct");
                }
            }
            console.log("object");
            $(".jsSortableFail").slideDown();
        }
    });
});
