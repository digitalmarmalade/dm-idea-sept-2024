text_content = [
    {
        id: 1,
        text: `
        <p class='title animate__animated animate__fadeIn animate__faster animate__delay-1s'>Well done!</p>
        <p class="animate__animated animate__fadeIn animate__slow animate__delay-2s">
        Now let’s apply this same process to edit the image from
        the crime scene and see if you can enhance the features
        of the photo. This will help us try to see what objects
        are present and identify clues that might lead us to the
        suspect. </p>`,
    },
    {
        id: 2,
        text: `<p class="animate__animated animate__fadeIn animate__slow">The dark and blurry photo that you see here is the input image.</p>`,
    },
    {
        id: 3,
        text: `<p class="animate__animated animate__fadeIn animate__slow">You will need to apply two different filters to the image to be able to see what is in the photo more clearly. </p>`,
    },
    {
        id: 4,
        text: `<p class="animate__animated animate__fadeIn animate__slow">Here is a portion of the same input image shown as a matrix. As you learnt earlier in this badge, the matrix contains numbers between 0 and 255 which correspond to the brightness of each pixel that make up the input image. We have placed the kernel over one spot on the matrix to give you the pixel values that you will use to do your calculations with.</p>`,
    },
    {
        id: 5,
        text: `<p class="animate__animated animate__fadeIn animate__slow">
        When you select a filter, you will only have to do the calculation for one pixel and we will automatically apply the filter to the rest of the image so that you can see the full effect.
        </p>`,
    },
    {
        id: 6,
        text: `<p class="animate__animated animate__fadeIn animate__slow">
        First, select a filter from the dropdown menu. When you select a filter, the corresponding convolution kernel for that filter will appear.</p>`,
    },
    {
        id: 7,
        text: `<p class="animate__animated animate__fadeIn animate__slow">Now, perform the convolution calculation using the filter that you have selected with the pixel values given from the input image.</p>`,
    },
    {
        id: 8,
        text: `<p class="animate__animated animate__fadeIn animate__slow">Click “Check” to check if you have used the correct filter and completed the calculation for one pixel of the image correctly.</p>`,
    },
];

var id = 0;
updateText();

function updateText() {
    $(".jsTwoFilter .speech-bubble").contents(":not(.Js-not-remove)").remove();

    $(".jsTwoFilter .speech-bubble .flex--justify-end.Js-not-remove").before(
        `${text_content[id].text}`
    );
}

function displayIndexFilter() {
    $(".jsTwoFilter .speech-bubble").contents(":not(.Js-not-remove)").remove();

    $(".jsTwoFilter .speech-bubble .flex--justify-end.Js-not-remove").before(
        `${text_content[id].text}`
    );

    $("#input-img-1").hide();
    $("#filter-index").fadeIn();
    // $("html, body").animate({ scrollTop: $(document).height() });
}
function displayActivity() {
    console.log("activity displayed");
    $(".jsTwoFilter .speech-bubble").contents(":not(.Js-not-remove)").remove();

    $(".jsTwoFilter .speech-bubble .flex--justify-end.Js-not-remove").before(
        `${text_content[id].text}`
    );

    // $(".two-filter-text-next").hide();

    $("#filter-index").hide();
    $("#crime-scene__holder").hide();

    $("#task-7-activity").fadeIn();
    // $("html, body").animate({ scrollTop: $(document).height() });
}
function continueButtonRemoved() {
    $(".jsTwoFilter .speech-bubble").contents(":not(.Js-not-remove)").remove();

    $(".jsTwoFilter .speech-bubble .flex--justify-end.Js-not-remove").before(
        `${text_content[id].text}`
    );

    $(".two-filter-text-next").hide();

    $("#task-7-select").attr("disabled", false);
    $(".js_multiple-filter-selector-check").attr("disabled", false);

    // $("html, body").animate({ scrollTop: $(document).height() });
}

$(".two-filter-text-next").click((e) => {
    id += 1;
    // if (id < 3) updateText();
    if (id === 3) displayIndexFilter();
    else if (id === 4) displayActivity();
    else if (id === 5) continueButtonRemoved();
    else if (id < text_content.length) updateText();
    else console.log("move to next part...");
});
