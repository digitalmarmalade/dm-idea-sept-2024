text_content = [
  {
    id: 1,
    text: `<p class="animate__animated animate__fadeIn animate__slow">
    Well done! In short, artificial intelligence is a broad field that includes machine learning and deep learning. Machine learning is an AI system that can self-learn based on an algorithm, and deep learning takes machine learning to the next level by using neural networks to mimic the learning process of a human brain.
    </p>`,
  },
  {
    id: 2,
    text: `<p class="animate__animated animate__fadeIn animate__slow">
    Great, now let’s dive into inferencing!
    </p>`,
  },
];

var id = 0;
updateText();

function updateText() {
  $("#task-1-positive .feedback__top ").contents(":not(.Js-not-remove)").remove();

  $("#task-1-positive .feedback__top  .Js-not-remove").before(`${text_content[id].text}`);
}

$(".jsTask1TextNext").click(() => {
  id += 1;
  if (id < text_content.length - 1) updateText();
  else {
    updateText();
    $(".jsTask1TextNext").hide();

    setTimeout(() => {
      $(".jsContinue").removeClass("hide");
    }, 500);
  }
});
