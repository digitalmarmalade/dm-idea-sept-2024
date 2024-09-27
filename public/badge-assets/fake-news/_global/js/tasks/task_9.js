$(function () {
  const task_counter = $(`.task-9 .fake-news-detector__counter`);
  const task_headline = $(`.task-9 .fake-news-detector__task`);

  const fake_news_heading = $(".task-9 .jsHeading");
  const fake_news_final_result = $(".task-9 .jsFinalResult");
  const fake_news_result_1 = $(".task-9 .jsResult1");
  const fake_news_result_2 = $(".task-9 .jsResult2");
  const fake_news_result_3 = $(".task-9 .jsResult3");
  const fake_news_result_4 = $(".task-9 .jsResult4");
  const fake_news_result_5 = $(".task-9 .jsResult5");
  const fake_news_result_6 = $(".task-9 .jsResult6");

  const nextSlide = $(".task-9 .code-selector__next");
  const prevSlide = $(".task-9 .code-selector__previous");
  const tasks = [
    {
      id: 1,
      task: `Apply basic reading, exploring and cleaning`,
      // code: `jsSlide1`,
      code: `jsSlide4`,
      output: fake_news_result_1,
    },
    {
      id: 2,
      task: `Apply removing punctuation code`,
      // code: `jsSlide2`,
      code: `jsSlide5`,
      output: fake_news_result_2,
    },
    {
      id: 3,
      task: `Apply tokenisation code`,
      // code: `jsSlide3`,
      code: `jsSlide1`,
      output: fake_news_result_3,
    },
    {
      id: 4,
      task: `Apply removing stop words code`,
      // code: `jsSlide4`,
      code: `jsSlide2`,
      output: fake_news_result_4,
    },
    {
      id: 5,
      task: `Apply stemming code`,
      // code: `jsSlide5`,
      code: `jsSlide3`,
      output: fake_news_result_5,
    },
    {
      id: 6,
      task: `Apply 'count vectoriser' vectorising to code`,
      code: `jsSlide6`,
      output: fake_news_result_6,
    },
  ];

  let taskId = 0;
  const nextTask = () => {
    task_counter.text(`${taskId + 1}/${tasks.length}`);
    task_headline.text(`${tasks[taskId].task}`);
  };
  let remainingBlocks;
  let selectedBlock;
  const checkAnswer = (e) => {
    // add disabled class to remaining code blocks

    remainingBlocks = tasks.filter((task) => !$(e.currentTarget).hasClass(task.code));

    remainingBlocks.map((codeBlock) => $(`.task-9 .${codeBlock.code}`).addClass("disabled"));
    // selectedBlock = tasks.filter((task) => $(e.currentTarget).hasClass(task.code));
    // $(`.task-9 .${selectedBlock.code}`).addClass("disabled");
    // $(`.task-9 .${.code}`).addClass("disabled");

    // $(e.currentTarget).addClass("disabled");

    $("html, body").animate(
      {
        scrollTop: $(".task-9 .code-selector").offset().top + $(".task-9 .code-selector").height(),
      },
      800
    );

    if ($(e.currentTarget).hasClass(tasks[taskId].code)) {
      // taskId += 1;
      fake_news_heading.removeClass("hide");
      tasks[taskId].output.removeClass("hide");
      $(`.task-9 .success-box`).removeClass("hide");
      if (taskId < tasks.length - 1) {
        $(".task-9 .jsNextTask").removeClass("hide");
      } else {
        $(`.task-9 .success-box`).html(`<p>
        Congratulations, you have successfully compiled the NLP code for your fake news detector.
        <br></br>
        Check the changes that this block of code applied to the text below:
      </p>`);

        fake_news_final_result.removeClass("hide");

        $(".task-10").removeClass("hide");
      }
    } else {
      $(`.task-9 .fail-box`).removeClass("hide");
      setTimeout(() => {
        $(`.task-9 .fail-box`).addClass("hide");
        remainingBlocks.map((codeBlock) => $(`.task-9 .${codeBlock.code}`).removeClass("disabled"));
        // $(`.task-9 .${selectedBlock.code}`).removeClass("disabled");
        // $(e.currentTarget).removeClass("disabled");

        $("html, body").animate(
          {
            scrollTop: $(".task-9 .code-selector").offset().top - $(".task-9 .code-selector").height() / 4,
          },
          800
        );
      }, 2000);
    }
  };

  tasks.map((task) => $(`.task-9 .${task.code}`).click(checkAnswer));

  nextTask();

  $(".task-9 .jsNextTask").click(() => {
    $(`.task-9 .success-box`).addClass("hide");
    tasks[taskId].output.addClass("hide");
    $(".task-9 .jsNextTask").addClass("hide");
    fake_news_heading.addClass("hide");

    remainingBlocks.map((codeBlock) => $(`.task-9 .${codeBlock.code}`).removeClass("disabled"));

    taskId += 1;
    nextTask();
  });

  let currentSlide = 1;

  nextSlide.click((e) => {
    var leftPos = $(".task-9 .code-selector").scrollLeft();
    $(".task-9 .code-selector").animate({ scrollLeft: leftPos + $(`.task-9 .jsSlide${currentSlide}`).width() }, 200);
    currentSlide < tasks.length ? (currentSlide += 1) : null;
  });
  prevSlide.click((e) => {
    var leftPos = $(".task-9 .code-selector").scrollLeft();
    $(".task-9 .code-selector").animate({ scrollLeft: leftPos - $(`.task-9 .jsSlide${currentSlide}`).width() }, 200);
    currentSlide > 1 ? (currentSlide -= 1) : null;
  });
});
