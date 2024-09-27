text_content = [
  {
    id: 1,
    text: `
        <h2 class="animate__animated animate__fadeIn animate__slow bubble__title">
          Let's Give it a Try!
        </h2>

        <p>
          For this task, we are going to use an object detection model. An object detection model first detects that an object is present and then determines what type of object it is.
        </p>`,
  },
  {
    id: 2,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        To begin this process, you will need to give the model lots of training data &#8212 in this case, images of recyclable waste and labels for each dataset.
        </p>
        `,
  },
  {
    id: 2,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        Find the correct label from the word menu and type it in the yellow box below each image. 
        </p>
        `,
  },
];

var id = 0;

updateText();

function updateText() {
  $("#task-2-activity .jsStory .bubble ").contents(":not(.Js-not-remove)").remove();

  $("#task-2-activity .jsStory .bubble  .Js-not-remove").before(`${text_content[id].text}`);
}

$("#task-2-activity .jsStory .btn").click((e) => {
  id += 1;
  if (id < text_content.length) updateText();
  else {
    $("#task-2-activity .jsStory .btn").hide();

    $(".keywords.disabled").removeClass("disabled");
  }
});
