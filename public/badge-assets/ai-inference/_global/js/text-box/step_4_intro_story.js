text_content_step_4 = [
  {
    id: 1,
    text: `
            <h2 class="heading-three">The Challenge</h2>
            <p>
              The cameras that FutureCity have set up at the busy
              intersection provide real-time footage of everything
              that happens, 24 hours a day.
            </p>
        `,
  },
  {
    id: 2,
    text: `
        <h2 class="heading-three">The Challenge</h2>
        <p class="animate__animated animate__fadeIn animate__slow">
        Traffic density has been steadily increasing at this intersection over the last few years and as a result, traffic is often congested, which is increasing pollution and the rates of incidents.
        </p>
        `,
  },
  {
    id: 3,
    text: `
        <h2 class="heading-three">The Challenge</h2>
        <p class="animate__animated animate__fadeIn animate__slow">
        Perhaps you can use some pre-trained models to gain some more insight on the traffic conditions and see how we can improve it. You can do this by running the pre-trained models to perform certain computer vision tasks in the video stream extracted from the street cameras.
        </p>
        `,
  },
  {
    id: 3,
    text: `
        <h2 class="heading-three">The Challenge</h2>
        <p class="animate__animated animate__fadeIn animate__slow">
        Once we gather some more insight, we can start to brainstorm possible solutions. For example, should FutureCity add more lanes to the streets? Should they consider creating a new bus lane or bike lane? Do they need to improve the traffic control system?
        </p>
        `,
  },
  {
    id: 4,
    text: `
        <h2 class="heading-three">The Challenge</h2>
        <p class="animate__animated animate__fadeIn animate__slow">
        There are two parts to this challenge, let’s continue to begin part 1!</p>
        `,
  },
  {
    id: 5,
    text: `
        <h2 class="heading-three">The Challenge</h2>
        <p class="animate__animated animate__fadeIn animate__slow">
        Congratulations on completing your first task!
        </p>
        `,
  },
  {
    id: 6,
    text: `
        <h2 class="heading-three">The Challenge</h2>
        <p class="animate__animated animate__fadeIn animate__slow">
        You have successfully installed, coded and tested a pre-trained OpenVINO model that helped you detect vehicles in the street camera video footage. Now, we need to see if we can get the AI to help us differentiate between different types of vehicles that it’s been trained to detect.
        </p>
        `,
  },
  {
    id: 7,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Everyday, there are many buses that use this intersection, moving in all directions to different parts of town. The number of buses is even higher during rush hour when there are also many other vehicles on the road.
        </p>
        `,
  },
  {
    id: 8,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Buses stop approximately every one-quarter of a mile to pull over at a bus stop for riders to get on and off. They also continuously weave in and out of lanes to stop in the slow lanes or move forward through traffic in faster lanes.
        </p>
        `,
  },
  {
    id: 8,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        It appears that this is significantly slowing down all traffic and causing traffic jams. Cars behind the buses have to stop when the bus stops and other cars have to slow down when the buses are changing lanes. This problem is worsened by the sheer number of buses using this one intersection and going in every direction.
        </p>
        `,
  },
];

// updateTextIntroStory();

function updateTextIntroStory() {
  $(".jsChallenge  .bubble ").contents(":not(.Js-not-remove)").remove();

  $(".jsChallenge  .bubble  .Js-not-remove").before(`${text_content_step_4[intro_id].text}`);
  intro_id += 1;
  console.log(intro_id);
}

// $(".jsChallenge .jsStory .btn").click((e) => {
$(".jsChallenge  .btn").click((e) => {
  // console.log(intro_id);

  if (intro_id == 5 || intro_id == 10) {
    $(".jsChallenge").addClass("hide");

    setTimeout(() => {
      $(".jsStory2").removeClass("hide");
      intro_id == 9 ? updateTextStory_2() : null;
    }, 100);
  } else if (intro_id == 7) {
    // console.log("start challenge b");
    arrangeTheStepsInCorrectOrder();
  } else if (intro_id < text_content_step_4.length) updateTextIntroStory();
  else {
    // updateTextIntroStory();
  }
});
