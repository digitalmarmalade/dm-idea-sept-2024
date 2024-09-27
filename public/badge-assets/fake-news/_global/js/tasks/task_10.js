$(function () {
  const task_counter = $(`.task-10 .fake-news-detector__counter`);
  const task_headline = $(`.task-10 .fake-news-detector__task`);

  const fake_news_heading = $(".task-10 .jsHeading");

  const nextSlide = $(".task-10 .code-selector__next");
  const prevSlide = $(".task-10 .code-selector__previous");
  const restart = $(".task-10 .jsRestart");

  const tasks = [
    {
      id: 1,
      task: `
      Add base level imports
      <span class="fake-news-detector__task--example">
        To help you identify the correct block of code, look for the following:<br />

        <strong>NumPy:</strong> A numerical library for helping with arrays in Python<br />
        <strong>Pandas:</strong> A data analysis library that uses NumPy in Python<br />
        <strong>OS:</strong> A Python library used for interacting with the operating system<br />

      </span>`,
      // code: `jsSlide1`,
      code: `jsSlide4`,
    },
    {
      id: 2,
      task: `
      Add visualisation libraries
      <span class="fake-news-detector__task--example">
      To help you identify the correct block of code, look for the following:<br />
      
      Seaborn:</strong> A statistical graphics library that uses Pandas in Python<br />
      <strong>Matplotlib:</strong> A Python library used for creating visualisations <br />
      <strong>PyPlot:</strong> A 2D graphics library in Python<br />
      <strong>Python Image Library:</strong> An image manipulation library in Python<br />
      <strong>Word Cloud:</strong> A visualisation library using text size to represent the popularity of text <br />



      </span>`,
      // code: `jsSlide2`,
      code: `jsSlide6`,
    },
    {
      id: 3,
      task: `
      Add NLP libraries
      <span class="fake-news-detector__task--example">
      To help you identify the correct block of code, look for the following:<br />

      <strong>NLTK:</strong> A natural language processing toolkit for Python<br />
      <strong>Sklearn:</strong> A collection of machine learning and modelling libraries for Python<br />
      <strong>NLTK corpus:</strong> A library in Python that helps interact with text within a variety of files<br />
      
      </span>`,
      code: `jsSlide2`,
      // code: `jsSlide3`,
    },
    {
      id: 4,
      task: `
      Add Deep learning libraries
      <span class="fake-news-detector__task--example">
        To help you identify the correct block of code, look for the following:<br />
  
        <strong>Keras:</strong> A deep learning interface built on top of TensorFlow <br />
        <strong>TensorFlow:</strong> A library created by Google for fast numerical calculations <br />
    </span>`,
      // code: `jsSlide4`,
      code: `jsSlide1`,
    },
    {
      id: 5,
      task: `Add Activity 2 block coded pre-processing techniques into the corpus`,
      // code: `jsSlide5`,
      code: `jsSlide3`,
    },
    // {
    //   id: 6,
    //   task: `
    //   Add True/False (1/0) for Input/Output code (1=Real 0=Fake)`,
    //   // code: `jsSlide6`,
    //   code: `jsSlide5`,
    // },
  ];

  let taskId = 0;
  const nextTask = () => {
    task_counter.text(`${taskId + 1}/${tasks.length}`);
    task_headline.html(`${tasks[taskId].task}`);

    // console.log(lifelines, "life");
  };
  let remainingBlocks;

  let progress = 0;
  let lifelines = 2;
  $(".task-10 #fake-news-detector__progress").val(progress);

  const checkAnswer = (e) => {
    // add disabled class to remaining code blocks

    remainingBlocks = tasks.filter((task) => !$(e.currentTarget).hasClass(task.code));

    // remainingBlocks.map((codeBlock) => $(`.${codeBlock.code}`).addClass("disabled"));
    remainingBlocks.map((codeBlock) => $(`.task-10 .${codeBlock.code}`).addClass("disabled"));

    // $(e.currentTarget).addClass("disabled");

    $("html, body").animate(
      {
        scrollTop: $(".task-10 .code-selector").offset().top + $(".task-10 .code-selector").height(),
      },
      100
    );

    if ($(e.currentTarget).hasClass(tasks[taskId].code)) {
      // taskId += 1;
      fake_news_heading.removeClass("hide");
      $(".task-10 .jsResult").removeClass("hide");

      let difference = (tasks[taskId].id / 5) * 100 - $(".task-10 #fake-news-detector__progress").val();

      var progressTime = 20;
      var timer = setInterval(() => {
        progressTime -= 1;
        if (progressTime < 0) {
          clearInterval(timer);
        }
        // console.log($(".task-10 #fake-news-detector__progress").val());
        $(".task-10 #fake-news-detector__progress").val($(".task-10 #fake-news-detector__progress").val() + difference / 20);

        // if(taskId = tasks.length-1){}
      }, 100);

      setTimeout(() => {
        if (taskId < tasks.length - 1) {
          $(".task-10 .jsNextTask").removeClass("hide");
        } else {
          $(`.task-10 .jsSuccessImage`).removeClass("hide");
          $(`.task-10 .success-box`).removeClass("hide");

          $(`.task-10 label[for='fake-news-detector__progress']`).addClass("hide");

          $(`.task-11`).removeClass("hide");
        }
      }, 2200);
    } else {
      lifelines -= 1;

      // console.log(lifelines);
      $(`.task-10 .fail-box`).removeClass("hide");
      if (lifelines <= 0) {
        $(`.task-10 .fail-box`).text("Oops! You have no lives left. You have to start this game again.");
        // restart.removeClass("hide");

        fake_news_heading.addClass("hide");
        $(".task-10 .jsResult").addClass("hide");

        lifelines = 2;

        setTimeout(() => {
          $(`.task-10 .fail-box`).addClass("hide");
          restart.addClass("hide");

          $(".task-10 #fake-news-detector__progress").val(0);

          // $(".task-10 .disabled").removeClass("disabled");

          // $(e.currentTarget).removeClass("disabled");

          remainingBlocks.map((codeBlock) => $(`.task-10 .${codeBlock.code}`).removeClass("disabled"));

          taskId = 0;
          nextTask();

          $("html, body").animate(
            {
              scrollTop: $(".task-10 .code-selector").offset().top - $(".task-10 .code-selector").height() / 2,
            },
            800
          );
        }, 3000);
      } else {
        $(`.task-10 .fail-box`).text("Hmm... That does not seem like the correct code for this task. Please select another block.");
        // $(`.task-10 .fail-box`).removeClass("hide");
        setTimeout(() => {
          $(`.task-10 .fail-box`).addClass("hide");
          // $(e.currentTarget).removeClass("disabled");

          remainingBlocks.map((codeBlock) => $(`.task-10 .${codeBlock.code}`).removeClass("disabled"));
          // $(".task-11").removeClass("hide");
          $("html, body").animate(
            {
              scrollTop: $(".task-10 .code-selector").offset().top - $(".task-10 .code-selector").height() / 4,
            },
            800
          );
        }, 2000);
      }
    }
  };

  tasks.map((task) => $(`.task-10 .${task.code}`).click(checkAnswer));

  nextTask();

  restart.click(() => {
    $(`.task-10 .fail-box`).addClass("hide");
    restart.addClass("hide");

    $(".task-10 #fake-news-detector__progress").val(0);

    // $(".task-10 .disabled").removeClass("disabled");
    remainingBlocks.map((codeBlock) => $(`.task-10 .${codeBlock.code}`).removeClass("disabled"));

    taskId = 0;
    nextTask();

    $("html, body").animate(
      {
        scrollTop: $(".task-10 .code-selector").offset().top - $(".task-10 .code-selector").height() / 2,
      },
      800
    );
  });

  $(".task-10 .jsNextTask").click(() => {
    $(`.task-10 .success-box`).addClass("hide");
    // tasks[taskId].output.addClass("hide");
    $(".task-10 .jsNextTask").addClass("hide");
    // fake_news_heading.addClass("hide");

    remainingBlocks.map((codeBlock) => $(`.task-10 .${codeBlock.code}`).removeClass("disabled"));

    taskId += 1;
    nextTask();
  });

  let currentSlide = 1;

  nextSlide.click((e) => {
    var leftPos = $(".task-10 .code-selector").scrollLeft();
    $(".task-10 .code-selector").animate({ scrollLeft: leftPos + $(`.task-10 .jsSlide${currentSlide}`).width() }, 200);
    currentSlide < tasks.length ? (currentSlide += 1) : null;
  });
  prevSlide.click((e) => {
    var leftPos = $(".task-10 .code-selector").scrollLeft();
    $(".task-10 .code-selector").animate({ scrollLeft: leftPos - $(`.task-10 .jsSlide${currentSlide}`).width() }, 200);
    currentSlide > 1 ? (currentSlide -= 1) : null;
  });
});
