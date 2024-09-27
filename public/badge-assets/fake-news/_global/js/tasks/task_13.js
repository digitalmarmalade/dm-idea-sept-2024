$(function () {
  const counter = $(".task-13 .reflection__counter");
  const lives = $(".task-13 .jsLives");
  const statement = $(".task-13 .reflection__statements");

  const limitation_option = $(".task-13 #limitation");
  const benefit_option = $(".task-13 #benefit");
  const improvement_option = $(".task-13 #improvement");

  const success_box = $(".task-13 .success-box");

  const statement_success = "reflection__statements--success";
  const statement_fail = "reflection__statements--fail";

  const option_fail = "reflection__options__choice--fail";
  const option_success = "reflection__options__choice--success";

  const disabled = "reflection__options__choice--disabled";

  const next_slide = $(`.task-13 .reflection__control--next`);
  const previous_slide = $(`.task-13 .reflection__control--previous`);

  const statements = [
    {
      id: 1,
      statement: `They can be programmed with a wide range of criteria for determining whether something is considered fake news.`,
      answer: `Benefit`,
      answered: false,
    },
    {
      id: 2,
      statement: `They can only identify fake news based on the criteria they have been programmed to look for.`,
      answer: `Limitation`,
      answered: false,
    },
    {
      id: 3,
      statement: `They cannot achieve 100% accuracy and ultimately require a human to verify the type, tone, and source of the news.`,
      answer: `Limitation`,
      answered: false,
    },
    {
      id: 4,
      statement: `They can flag news they identify as fake and alert the reader before it is spread to the masses.`,
      answer: `Benefit`,
      answered: false,
    },
    {
      id: 5,
      statement: `They require continuous training to increase their accuracy rate and stay up-to-date with evolving forms of fake news.`,
      answer: `Limitation`,
      answered: false,
    },
    {
      id: 6,
      statement: `They can be programmed to analyse many different forms of fake news, from web articles to Tweets.`,
      answer: `Benefit`,
      answered: false,
    },
    {
      id: 7,
      statement: `They may not be able to detect the full context, tone or manner in which someone is writing the news article.`,
      answer: `Limitation`,
      answered: false,
    },
    {
      id: 8,
      statement: `They can be continuously trained with more data and updated with enhanced algorithms to keep up with evolving forms of fake news.`,
      answer: `Benefit`,
      answered: false,
    },
    { id: 9, statement: `They can analyse and sort massive amounts of data in a short amount of time.`, answer: `Benefit`, answered: false },
  ];
  // const statements = [
  //   { id: 1, statement: `2% tolerance`, answer: `Limitation`, answered: false },
  //   { id: 2, statement: `Agent 101 completed his tasks`, answer: `Success`, answered: false },
  //   { id: 3, statement: `Block coding is restrictive`, answer: `Limitation`, answered: false },
  //   { id: 4, statement: `Look at pre-mde models to see if they could be applied`, answer: `Improvement`, answered: false },
  //   { id: 5, statement: `Research Python 3 to find more efficient code`, answer: `Improvement`, answered: false },
  //   { id: 6, statement: `Uses both NLP and ML`, answer: `Success`, answered: false },
  //   { id: 7, statement: `Simulated environment`, answer: `Limitation`, answered: false },
  //   { id: 8, statement: `98% fake news detection rate`, answer: `Success`, answered: false },
  //   { id: 9, statement: `Look at other models to see if you can improve on the 98% accuracy rating`, answer: `Improvement`, answered: false },
  // ];

  // const labels = ["improvement", "success", "limitation"];
  const labels = ["benefit", "limitation"];

  let lifelines = 3;
  lives.text(lifelines);

  let statementIdx = 0;
  const nextQuestion = () => {
    if (statementIdx !== 0) {
      previous_slide.removeClass("hide");
    } else {
      previous_slide.addClass("hide");
    }

    counter.text(`${statements[statementIdx].id} / ${statements.length}`);
    statement.text(statements[statementIdx].statement);

    statement.removeClass(statement_success);

    $(`label`).removeClass(option_success);
    $(`label`).removeClass(disabled);
    $(`label`).removeClass(option_fail);

    $("input").prop("checked", false);

    if (statements[statementIdx].answered) {
      statementIdx !== statements.length - 1 ? next_slide.removeClass("hide") : next_slide.addClass("hide");

      statement.addClass(statement_success);
      $(`label[for="${statements[statementIdx].answer.toLowerCase()}"]`).addClass(option_success);

      labels.filter((label) => label !== statements[statementIdx].answer.toLowerCase()).map((label) => $(`label[for="${label}"]`).addClass(disabled));
    } else {
      next_slide.addClass("hide");
    }

    $(limitation_option).off("click");
    $(benefit_option).off("click");
    $(improvement_option).off("click");

    limitation_option.click(() => {
      $(`label`).removeClass(option_fail);
      $("input").prop("checked", false);

      if (statements[statementIdx].answer === limitation_option.val()) {
        statementIdx !== statements.length - 1 ? next_slide.removeClass("hide") : null;

        statements[statementIdx].answered = true;
        statement.addClass(statement_success);

        $(`label[for="${statements[statementIdx].answer.toLowerCase()}"]`).addClass(option_success);

        labels
          .filter((label) => label !== statements[statementIdx].answer.toLowerCase())
          .map((label) => $(`label[for="${label}"]`).addClass(disabled));

        allAnswered();
      } else {
        statement.addClass(statement_fail);
        $(`label[for="limitation"]`).addClass(option_fail);

        lifeloss();
      }
    });

    benefit_option.click(() => {
      $(`label`).removeClass(option_fail);
      $("input").prop("checked", false);

      if (statements[statementIdx].answer === benefit_option.val()) {
        statementIdx !== statements.length - 1 ? next_slide.removeClass("hide") : null;

        statements[statementIdx].answered = true;
        statement.addClass(statement_success);

        $(`label[for="${statements[statementIdx].answer.toLowerCase()}"]`).addClass(option_success);

        labels
          .filter((label) => label !== statements[statementIdx].answer.toLowerCase())
          .map((label) => $(`label[for="${label}"]`).addClass(disabled));

        allAnswered();
      } else {
        statement.addClass(statement_fail);
        $(`label[for="benefit"]`).addClass(option_fail);

        lifeloss();
      }
    });

    improvement_option.click(() => {
      $(`label`).removeClass(option_fail);
      $("input").prop("checked", false);

      if (statements[statementIdx].answer === improvement_option.val()) {
        statementIdx !== statements.length - 1 ? next_slide.removeClass("hide") : null;

        statements[statementIdx].answered = true;
        statement.addClass(statement_success);

        $(`label[for="${statements[statementIdx].answer.toLowerCase()}"]`).addClass(option_success);

        labels
          .filter((label) => label !== statements[statementIdx].answer.toLowerCase())
          .map((label) => $(`label[for="${label}"]`).addClass(disabled));

        allAnswered();
      } else {
        statement.addClass(statement_fail);
        $(`label[for="improvement"]`).addClass(option_fail);

        lifeloss();
      }
    });
  };

  const allAnswered = () => {
    if (statements.filter((statement) => statement.answered).length === statements.length) {
      success_box.removeClass("hide");
      $(".jsContinue").removeClass("hide");
    }
  };

  const lifeloss = () => {
    lifelines -= 1;
    // console.log("reduce life", lifelines);
    lives.text(lifelines);
    return lifelines < 1 ? restartActivity() : null;
  };

  const restartActivity = () => {
    // console.log("restart activity");
    // display no lives left message
    $(".task-13 .fail-box").removeClass("hide");
    setTimeout(() => {
      // hide no lives message
      $(".task-13 .fail-box").addClass("hide");

      lifelines = 3;
      statementIdx = 0;

      lives.text(lifelines);

      // $(`label`).removeClass(statement_fail);

      statements.map((statement) => (statement.answered = false));

      nextQuestion();
    }, 3000);
  };

  next_slide.click(() => {
    statementIdx !== statements.length - 1 ? (statementIdx += 1) : null;
    nextQuestion();
  });
  previous_slide.click(() => {
    statementIdx > 0 ? (statementIdx -= 1) : null;
    nextQuestion();
  });

  nextQuestion();
});
