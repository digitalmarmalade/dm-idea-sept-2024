text_content_step_4_story_2 = [
  {
    id: 1,
    text: `
            <p>
            Welcome to the team, we are excited for you to start your first assignment! Your task is to find out what is slowing down traffic and causing congestion. Let’s start by figuring out who the main users of this intersection are.
            </p>
        `,
  },
  {
    id: 2,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You will be guided through this challenge step-by-step. Follow the instructions carefully and you’ll become an expert in no time!
        </p>
        `,
  },
  {
    id: 3,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        In the first part of this assignment, you are going to learn how to use an object detection model (like the one you used earlier to train a robotic arm to sort recyclable waste!) in a Python coding environment to detect vehicles in video footage.
        </p>
        `,
  },
  {
    id: 4,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        I’ve instructed my virtual support assistant to guide you through the steps to get set up. Have fun and good luck!</p>
        `,
  },
  {
    id: 5,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        I have just been informed that you have successfully installed OpenVINO. Well done, you’re off to a great start!
        </p>
        `,
  },
  {
    id: 6,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You have successfully loaded the model into the inference engine. Well done!
        </p>
        `,
  },
  {
    id: 7,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        I am looking forward to seeing the results.
        </p>
        `,
  },
  {
    id: 8,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        The seven steps you have just completed has enabled AI to detect vehicles in the video footage and this is shown by the bounding box that has been drawn around
        each one.
        </p>
        `,
  },
  {
    id: 9,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You have successfully applied an OpenVINO pre-trained model to the street camera video footage to detect vehicles!
        </p>
        `,
  },
  {
    id: 10,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        In general, vehicle detection models can be really useful for assisting real-life tasks like vehicle counting, vehicle speed measurement, identification of traffic accidents, or traffic flow prediction, just to name a few.
        </p>
        `,
  },
  {
    id: 11,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Your employer has requested a detailed analysis of the traffic conditions at this intersection in hopes of identifying the root cause of the congestion.
        </p>
        `,
  },
  {
    id: 12,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now that we’ve learned how to use a vehicle detection model, let’s see how we can add another layer of code and use something called a <strong>confusion matrix</strong> to help us extract even more useful data from the video footage.
        </p>
        `,
  },
  {
    id: 13,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Are you ready for part two?
        </p>
        `,
  },
  {
    id: 14,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You have successfully parsed through the training and testing dataset!
        </p>
        `,
  },
  {
    id: 15,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, you need to produce results from the inference <span class="tooltipster jsTooltip on-white" data-tooltip-content="#tooltip8_content">confusion matrix</span> .
        </p>
        `,
  },
  {
    id: 16,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You have successfully completed the second part of this challenge and the results look great!
        </p>
        `,
  },
  {
    id: 16,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        As you can see here in the video footage, vehicles detected not only have a bounding box around them, they have also been classified with a label and percentage of what the AI predicts the vehicle type to be.
        </p>
        `,
  },
  {
    id: 16,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        I’m impressed!
        </p>
        `,
  },
  {
    id: 16,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Thanks to your insightful research, together, we have been able to identify that buses are the root cause of the heavy congestion at this intersection.
        </p>
        `,
  },
  {
    id: 16,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        With all your recent experience we think that you could help come up with a good solution to the problem.
        </p>
        `,
  },
  {
    id: 16,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Please spend a bit of time brainstorming and then send me and the City Planning Team an email recommending at least three possible solutions that we could implement to help reduce the heavy congestion at peak hours of the day caused by the influx of buses.
        </p>
        `,
  },
];

var story_2_id = 0;

// updateTextStory_2();

function updateTextStory_2() {
  console.log(story_2_id);
  $(".jsStory2 .jsStory .bubble").contents(":not(.Js-not-remove)").remove();

  $(".jsStory2 .jsStory .bubble  .Js-not-remove").before(`${text_content_step_4_story_2[story_2_id].text}`);

  $(".jsTooltip").tooltipster({
    trigger: "hover",
    theme: "",
  });
  // story_2_id += 1;
}

const firstChallenge = () => {
  $(".jsStory2").addClass("hide");

  setTimeout(() => {
    $("body").removeClass("traffic-animation");

    $(".jsActivity").removeClass("hide");

    updateActivityHeading();
  }, 100);
};
const secondChallenge = () => {
  $(".jsStory2").addClass("hide");

  setTimeout(() => {
    $("body").removeClass("traffic-animation");

    $(".jsActivity").removeClass("hide");
    $(".jsStep1").addClass("hide");
    $(".jsCMDWindow").addClass("hide");
    $(".jsGitCloneInstruction").addClass("hide");
    $(".jsHeading").addClass("hide");

    updateActivityText();
    // $(".jsIDE").removeClass("hide");
    disableRunButton();
    // $(".jsStepCounter").removeClass("hide");
    // updateActivityHeading();
  }, 100);
};
const thirdChallenge = () => {
  $(".jsStory2").addClass("hide");

  setTimeout(() => {
    $("body").removeClass("traffic-animation");

    $(".jsActivity").removeClass("hide");

    $(".jsLoadPreTrainedModel").removeClass("hide");
    updateActivityHeading();
    console.log("load pre trained models");
  }, 100);
};
const fourthChallenge = () => {
  $(".jsStory2").addClass("hide");

  setTimeout(() => {
    $("body").removeClass("traffic-animation");
    updateActivityText();

    $(".jsActivity").removeClass("hide");
  }, 100);
};

const challengeB = () => {
  console.log("challengeB");
  $("body").removeClass("traffic-animation--red-boxes");
  $("body").addClass("office-bg");

  $(".jsStory2").addClass("hide");

  $(".jsChallengeB").removeClass("hide");
  $(".jsChallengeB .jsChallenge").removeClass("hide");
  updateTextIntroStory();

  $(".jsIDEOutput").removeClass("hide");
};

const confusionMatrix = () => {
  $("body").removeClass("traffic-animation--red-boxes");
  $(".jsStory2").addClass("hide");
  $(".jsActivity").removeClass("hide");
  updateActivityText();
  updateActivityHeading();
};

const plottingResults = () => {
  $("body").removeClass("traffic-animation--labled");
  $(".jsStory2").addClass("hide");
  $(".jsIDE").addClass("hide");
  $(".jsActivity").removeClass("hide");
  $(".jsGraphContainer").removeClass("hide");
  updateActivityHeading();
  $(".jsStepCounter").addClass("hide");
  updateActivityText();
};

const goToNextPage = () => {
  console.log("go to step 5");
  console.log("Show Success page");

  oBadges.stepCompleted();
  window.location.href = "/ai-inference/step-5";
};

$(".jsInfoBox .icon-btn").click((e) => {
  $(".jsInfoBox").addClass("hide");
});

$(".jsStory2 .jsStory .btn").click((e) => {
  // console.log(id);
  story_2_id += 1;
  console.log(story_2_id);
  if (story_2_id == 4) firstChallenge();
  if (story_2_id == 5) secondChallenge();
  if (story_2_id == 6) thirdChallenge();
  if (story_2_id == 7) fourthChallenge();
  if (story_2_id == 13) challengeB();
  if (story_2_id == 15) confusionMatrix();
  if (story_2_id == 18) plottingResults();
  if (story_2_id == 21) goToNextPage();
  else if (story_2_id < text_content_step_4_story_2.length) updateTextStory_2();
  else {
    // updateTextStory_2();

    $(".jsInfoBox").addClass("hide");
    $(".jsStory2").addClass("hide");

    setTimeout(() => {
      $("body").removeClass("traffic-animation");

      $(".jsActivity").removeClass("hide");
    }, 100);
  }
});
