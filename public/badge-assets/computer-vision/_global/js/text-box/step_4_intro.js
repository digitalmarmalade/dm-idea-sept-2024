text_content = [
    {
        id: 1,
        text: `<p class="animate__animated animate__fadeIn animate__slow">The secret agent appears to have been able to slip in and out of the building undetected but the intelligence agency has CCTV cameras set up in all areas surrounding the building and there is a chance that we will be able to find them with our new clue.</p>`,
    },

    {
        id: 2,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">Across all of the different CCTV cameras, there are hundreds of hours of video camera footage to go through and The Security Service have advised that we need to review footage from the past week (at least) to see if we can spot our clue in the video footage, or find someone who may have passed by the intelligence agency an unusual amount of times without valid reason.</p>`,
    },
    {
        id: 3,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">How can computer vision help us with this task?</p>`,
    },
    {
        id: 4,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">Next, let’s learn about something called a Convolutional Neural Network and how we can train it to help us perform computer vision tasks.</p>`,
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

$(".step-4-intro-text-next").click((e) => {
    console.log(id);
    id += 1;
    if (id < text_content.length) updateText();
    else {
        $(".step-4-intro-text-next").hide();
        $(".step-4").slideDown();
        console.log("move to next part...");
        $("html, body").animate({ scrollTop: $(document).height() });
    }
});
