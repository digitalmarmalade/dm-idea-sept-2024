end_story_text = [
    {
        id: 1,
        text: `<p
        class="
        animate__animated
        animate__fadeIn
        animate__slow
        "
        >
            You now know what a convolutional neural network is!
        </p>
        `,
    },
    {
        id: 2,
        text: `
        <p class="aanimate__animated animate__fadeIn animate__slow">
            But how do we train the CNN to be able to perform tasks that we want it to do, such as classify images?
        </p>
        `,
    },
    {
        id: 3,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            To solve the final puzzle piece in our mystery, we need to train our CNN to be able to identify the clue found at the crime scene in the CCTV footage that we will run through it.
        </p>`,
    },
    {
        id: 4,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            The following activity is a simulation exercise designed to help you gain a basic understanding of CNNs. In real-life applications, CNNs are likely to have more layers and be more complicated. The CNN training process has been simplified so you can try training one yourself in this badge!
        </p>`,
    },
    {
        id: 5,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            <strong>Let’s train the CNN!</strong>
        </p>
        <p
        class="
        animate__animated
        animate__fadeIn
        animate__slow
        "
        >
            Find the most appropriate label from the word menu and type them in the yellow box below each image.
        </p>
        `,
    },
    {
        id: 6,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            First, we need to provide the machine with training data that is labelled accurately. This is the ‘correct’ data. Please drag and drop the training data into the computer.
        </p>`,
    },
    {
        id: 7,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">Next, we need to provide the input data for the CNN to process. <strong>
        Feed the clue that you uncovered earlier into the machine.</strong></p>`,
    },
    {
        id: 8,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            The CNN trains itself, using the process we have learned about earlier, to recognise patterns in the training data provided.
        </p>`,
    },
    {
        id: 9,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            These features are used to compare the training data with the input data. The CNN then makes a prediction and assigns a probability that the input image may be identified as a specific object.
        </p>`,
    },
    {
        id: 10,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            However, this prediction may be wrong. How does the CNN figure this out?
        </p>`,
    },
    {
        id: 11,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            During this training process, along with the input, the CNN also has the output fed to it..
        </p>`,
    },
    {
        id: 12,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            The predicted output is compared against the actual output to realise the error in prediction.
            The <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">magnitude</span> of the error indicates how wrong the CNN
            was and an indication is also given for whether the predicted values were higher or lower than expected.
        </p>`,
    },
    {
        id: 13,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            The direction and magnitude of the error is transferred back through the network for the weights to be adjusted.
        </p>`,
    },
    {
        id: 14,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            Drag and drop the magnitude of error back into the model.
        </p>`,
    },
    {
        id: 15,
        text: `
        <p class="animate__animated animate__fadeIn animate__slow">
            Hit <strong>Stop training</strong> when you think that the model has hit a good point in training.
        </p>`,
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

function revealNumberPlate() {
    console.log("train the cnn");
    $(".speech-bubble__holder .speech-bubble")
        .contents(":not(.Js-not-remove)")
        .remove();

    $(".step-5-intro-text-next").parent().fadeOut();
    $(
        ".speech-bubble__holder .speech-bubble .flex--justify-end.Js-not-remove"
    ).before(`${text_content[id].text}`);

    // $("#task9Anchor").slideDown();
    $(".task-9").removeClass("disabled"); // caludio remove the class for opacity you added
    // $("html, body").animate({ scrollTop: $(document).height() });
}

function nextEndChapter() {
    id += 1;
    console.log(id);
    if (id === 4) revealNumberPlate();
    else if (id === end_story_text.length) showSuccessPage();
    else updateEndText();
}

$(".step-5-intro-text-next").click((e) => {
    console.log("next clicked");
    nextEndChapter();
});
