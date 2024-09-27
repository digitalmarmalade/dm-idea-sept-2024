$(function () {
    $("#training-data, #input-data").draggable({
        revert: "invalid",
        addClasses: "false",

        drag: function (event, ui) {
            $("body").addClass("dragging");
        },

        stop: function (event, ui) {
            $("body").removeClass("dragging");
        },
    });

    $("#computer").droppable({
        addClasses: false,

        drop: function (event, ui) {
            $(ui.draggable).toggleClass("hide");

            nextChapter();
        },
    });

    $("#ErrorMargin").draggable({
        revert: "invalid",
        addClasses: "false",

        drag: function (event, ui) {
            $("body").addClass("dragging");
        },

        stop: function (event, ui) {
            $("body").removeClass("dragging");
        },
    });

    $("#firstPrediction").droppable({
        addClasses: false,

        drop: function (event, ui) {
            $(ui.draggable).toggleClass("hide");

            nextChapter();
        },
    });
});
