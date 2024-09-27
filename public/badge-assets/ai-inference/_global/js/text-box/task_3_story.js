text_content_task_3 = [
  {
    id: 2,
    text: `
        <h3 class="bubble__title">Well done!</h3>
        <p class="animate__animated animate__fadeIn animate__slow">
          The percentage that you see next to the label represents how confident the AI model is that the object detected belongs to that label. 
        </p>

        <p class="animate__animated animate__fadeIn animate__slow">
          As you can see, your robot is sorting recyclable waste the way it is supposed to!
        </p>

        <p class="animate__animated animate__fadeIn animate__slow">
          You have just trained and inferenced your own object detection model.
        </p>
        `,
  },
  {
    id: 3,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        As you can see, your smart waste bin robot is sorting recyclable waste the way it is supposed to!
        </p>
        `,
  },
  {
    id: 4,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You have just trained and inferenced your own object detection model! Well done.
        </p>
        `,
  },
  {
    id: 5,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        This activity is a simple and illustrative example of how you can use a pre-defined AI algorithm (the object detection model) to help you create and complete an AI task. Just like this algorithm, 
        there are hundreds of AI models created and shared by people all over the world that are readily available online and free to use!
        </p>
        `,
  },
  {
    id: 6,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Now, let’s take this to the next level.
        </p>
        `,
  },
];

var id = 0;

updateTextTask3();

function updateTextTask3() {
  $(".jsTask3 .jsStory .bubble ").contents(":not(.Js-not-remove)").remove();

  $(".jsTask3 .jsStory .bubble  .Js-not-remove").before(`${text_content_task_3[id].text}`);
}

$(".jsTask3 .jsStory .btn").click((e) => {
  console.log(id);
  id += 1;
  if (id < text_content_task_3.length - 1) updateTextTask3();
  else {
    updateTextTask3();

    $(".jsTask3 .jsStory .btn").hide();

    setTimeout(() => {
      $(".jsTask3 .jsNextPage").removeClass("hide");
    }, 2000);
  }
});
