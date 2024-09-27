$(function () {
    var filter_img = $(
        ".Js_filter-applied .filter-container .filtered-image-container img"
    );

    var filter_layer = $(".Js_filter-applied .filter-container .filter-layer ");

    filter_layer.css({
        height: filter_img.height(),
        width: filter_img.width(),
    });

    let prevX;

    const resizer = $(".Js_filter-applied .filter-container .resizer");

    let newWidth;

    $("#task-5-btn").click(() => {
        $("#task-5-btn").hide();
        if (newWidth > 10 || newWidth == null) {
            $(".jsSlideFilterFeedbackFail").slideDown();
        } else {
            $(".activity.task-6").slideDown();
        }
        $("html, body").animate({ scrollTop: $(document).height() });
    });

    $(".jsSlideFilterFeedbackFail-btn").click(() => {
        $(".jsSlideFilterFeedbackFail").hide();
        $("#task-5-btn").slideDown();
    });

    resizer.draggable({
        containment: "parent",
        axis: "x",

        cursorAt: { left: 121 / 2 },

        drag: function (e, ui) {
            const prevFilterLeft = filter_layer.offset().left;
            const rect = filter_layer[0].getBoundingClientRect();
            newWidth = rect.width + (prevX - e.clientX);
            let newLeft = rect.left - (prevX - e.clientX);
            if (e.clientX > filter_img.offset().left + filter_img.width()) {
                newLeft = filter_img.offset().left + filter_img.width();
                newWidth = 0;
            }

            if (e.clientX <= filter_img.offset().left) {
                newWidth = 200;
                newLeft = filter_img.offset().left;
            }

            filter_layer.css({
                width: newWidth,
                // left: newLeft,
            });
            filter_layer.offset({ left: newLeft });

            prevX = e.clientX;
        },
    });
});
