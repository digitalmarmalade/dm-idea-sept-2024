const image_element = $(".Js_select-object-image img");

function isInsideBoundary(element, parent) {
    return (
        element.clientX > parent.left &&
        element.clientX < parent.right &&
        element.clientY > parent.top &&
        element.clientY < parent.bottom
    );
}

$(".jsSelectObjectReset").click(() => {
    $(".jsSelectObjectFeedbackFail").slideUp();
    $(".correct").removeClass("correct");
    $(".wrong").removeClass("wrong");
});

document.addEventListener("click", (e) => {
    if (isInsideBoundary(e, image_element[0].getBoundingClientRect())) {
        $(".jsSelectObjectFeedbackFail").hide();

        $(".correct").removeClass("correct");
        $(".wrong").removeClass("wrong");

        if (e.target.id === "helmet") {
            e.target.classList.add("correct");

            $(".jsSelectObjectFeedbackSuccess").slideDown();
            $("html, body").animate({ scrollTop: $(document).height() });

            return console.log("You have identified the item correctly");
        } else {
            e.target.classList.add("wrong");
            $(".jsSelectObjectFeedbackFail").slideDown();
            $("html, body").animate({ scrollTop: $(document).height() });
            return console.log("not correct");
        }
    }
});
