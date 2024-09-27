text_content = [
    {
        id: 1,
        text: `
        <strong
            class="
                title
                animate__animated
                animate__fadeIn
                animate__delay-1s
                animate__slow"
            >
                ALERT! ALERT!
        </strong>
        <p
        class="
            animate__animated
            animate__fadeIn
            animate__delay-2s
            animate__slow
        "
    >
        A secret agent has broken into an intelligence agency and 
        stolen a file containing classified information!
    </p>`,
    },
    {
        id: 2,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">They were very careful at getting in and out of the building, seemingly leaving no trace! CCTV cameras inside the building mysteriously blurred out for 5 minutes late in the evening, around the suspected time of the crime. The secret agent must have hacked into the control of the cameras to ensure they couldn’t be seen while inside the building.</p>
        `,
    },
    {
        id: 3,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">But all is not lost! There are lots of CCTV cameras surrounding the area. They must have captured some evidence that we can use. </p>
        `,
    },
    {
        id: 4,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">Computer vision can help! </p>
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

$(".step-1-intro-text-next").click((e) => {
    console.log(id);
    id += 1;
    if (id < text_content.length) updateText();
    else {
        $(".step-1-intro-text-next").fadeOut(); // to remove continue button
        $(".jsScrollAnchor1").slideDown();
        $("html, body").animate({ scrollTop: $(document).height() });
    }
});
