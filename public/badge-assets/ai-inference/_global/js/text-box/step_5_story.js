text_content = [
  {
    id: 0,
    text: `
        <p class="animate__animated animate__fadeIn animate__slow">
        You may find that some of your ideas appear on this list or you may have come up with other ideas that are not on this list. Not to worry! Brainstorming and applying design thinking skills to come up with creative solutions is a very important and useful process that will help you think critically and creatively. As long as you have the end goal in mind for reducing congestion caused by buses at this intersection, there is no wrong answer!
        </p>
        `,
  },
];

var id = 0;

function updateText() {
  $(".jsActivity2 .jsStory .bubble ").contents(":not(.Js-not-remove)").remove();

  $(".jsActivity2 .jsStory .bubble  .Js-not-remove").before(`${text_content[id].text}`);

  id += 1;
}

$(".jsActivity2 .jsStory .btn").click((e) => {
  if (id < text_content.length) updateText();
  else {
    oBadges.stepCompleted();
    window.location.href = "/ai-inference/success";
  }
});
