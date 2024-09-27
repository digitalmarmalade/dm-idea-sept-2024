text_content = [
    {
        id: 1,
        text: `<p
        class="
            animate__animated
            animate__fadeIn
            animate__slow
        "
    >
        Investigators were able to pull one image from the CCTV
        cameras inside the building just as they were resuming
        normal function after being hacked.
    </p>`,
    },
    {
        id: 2,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">They have an image of the crime scene but it is really dark and pixelated. The Security Service needs your help with editing the photo to see if we can catch a glimpse of any evidence that may lead us to the secret agent!</p>
        `,
    },
];

var id = 0;
updateText();

function updateText() {
    $(".speech-bubble__holder .speech-bubble")
        .contents(":not(.Js-not-remove)")
        .remove();

    $(
        ".speech-bubble__holder .speech-bubble .flex--justify-end.Js-not-remove"
    ).before(`${text_content[id].text}`);
}

$(".step-2-intro-text-next").click((e) => {
    console.log(id);
    id += 1;
    if (id < text_content.length) updateText();
    else {
        $(".step-2-intro-text-next").fadeOut();
        $("#section-2").slideDown();
        $("html, body").animate({ scrollTop: $(document).height() });
        console.log("move to next part...");
    }
});
