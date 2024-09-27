var answers;
$(function () {
    answers = $(
        "#answer_1, #answer_2, #answer_3, #answer_4, #answer_5"
    ).draggable({
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
            $(ui.draggable).addClass(
                "answer drop-item box white flex flex--center"
            );

            $(ui.draggable).removeAttr("style");

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
            $(ui.draggable).addClass(
                "answer drop-item box white flex flex--center"
            );
            $(ui.draggable).removeAttr("style");

            // console.log($("#place_2").children.length);
            $("#place_2").children.length > 0
                ? ""
                : $("#place_2").append(ui.draggable);
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
            $(ui.draggable).addClass(
                "answer drop-item box white flex flex--center"
            );
            $(ui.draggable).removeAttr("style");

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
            $(ui.draggable).addClass(
                "answer drop-item box white flex flex--center"
            );
            $(ui.draggable).removeAttr("style");

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
            $(ui.draggable).addClass(
                "answer drop-item box white flex flex--center"
            );
            $(ui.draggable).removeAttr("style");

            $("#place_5").append(ui.draggable);
        },
    });

    $(".jsResetDragnDrop").click(() => {
        $(".answer").css("pointer-events", "auto");

        let wrong_answers = answers.filter($(".wrong"));

        wrong_answers.each((index, item) => {
            $(item).removeClass(); // To remove 'wrong' class
            $(item).addClass("answer drop-item box white flex flex--center");
        });
        wrong_answers.appendTo(".Js_container_answer");
        $(".jsFeedbackFail").slideUp();
        check_button.fadeIn();
    });

    $(".jsselectAll").click(() => {
        $(".answer").css("pointer-events", "auto");

        check_button.fadeIn();
        $(".jsselectAll").hide();
    });

    check_button = $(".Js_drag_and_drop-check");

    var correct_answer_order = [
        "answer_1",
        "answer_2",
        "answer_3",
        "answer_4",
        "answer_5",
    ];

    check_button.click(() => {
        $(".answer").css("pointer-events", "none");
        const answers = document.querySelectorAll(".place .answer");
        const answer = [];
        answers.forEach((ans) => answer.push(ans.id));
        if (answer.length !== 5) {
            $(".jsselectAll").slideDown();
        } else if (
            JSON.stringify(answer) === JSON.stringify(correct_answer_order)
        ) {
            console.log("correct");
            correct_answer_order.forEach((item) =>
                $(`#${item}`).addClass("correct")
            );
            $(".jsFeedbackSuccess").slideDown();
            // $("html, body").animate({ scrollTop: $(document).height() });
            // check_button.fadeOut();
        } else {
            var wrong_answers = [];
            var user_correct_answer = [];
            for (var x = 0; x < answers.length; x++) {
                if (answer[x] !== correct_answer_order[x]) {
                    wrong_answers.push(answer[x]);
                    $(`#${answer[x]}`).addClass("wrong");
                } else {
                    user_correct_answer.push(answer[x]);
                    $(`#${answer[x]}`).addClass("correct");
                }
            }
            $(".jsFeedbackFail").slideDown();
            console.log(wrong_answers);
            console.log(user_correct_answer);
        }
        $("html, body").animate({ scrollTop: $(document).height() });
        check_button.fadeOut();
    });
});
