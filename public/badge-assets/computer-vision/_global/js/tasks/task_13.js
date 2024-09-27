var questionElement = $(".Js_training-questions  .question");
var answerElement = $(".Js_training-questions  .answers");
var pagignationElement = $(".Js_training-questions .jsPagignation");

const question_1 = {
  question: "How does the CNN figure out if it has made a wrong prediction?",
  answers: [
    {
      id: "answer-0",
      text: "The predicted input is compared against the actual input to realise the error in prediction.",
      feedback: `
            <p
                class="
                    animate__animated
                    animate__fadeInLeft
                    animate__delay-1s
                    animate__fast
                ">
                    <strong class="title">That’s not quite right.</strong>
             </p>

            <p>
                Read the answers carefully and try again.
            </p>
            `,
      correct: false,
    },
    {
      id: "answer-1",
      text: "The predicted output is compared against the actual output to realise the error in prediction.",
      feedback: `
            <p
                            class="
                                animate__animated
                                animate__fadeInLeft
                                animate__delay-1s
                                animate__fast
                            "
                        >
                            <strong class="title"> That’s correct!</strong>
                        </p>

                        <p>
                            During the training process, the CNN has the input and the output fed to it.
                            The predicted output is compared against the actual output to realise the error in prediction. Well done!
                        </p>

            `,
      correct: true,
    },
    {
      id: "answer-2",
      text: "The training data is compared against the input data to realise the error in prediction.",
      feedback: `
            <p
                class="
                    animate__animated
                    animate__fadeInLeft
                    animate__delay-1s
                    animate__fast
                ">
                    <strong class="title">That’s not quite right.</strong>
             </p>

            <p>
                Read the question and the answers carefully and try again.
            </p>
            `,
      correct: false,
    },
    {
      id: "answer-3",
      text: "The CNN doesn’t make wrong predictions.",
      feedback: `
            <p
                class="
                    animate__animated
                    animate__fadeInLeft
                    animate__delay-1s
                    animate__fast
                ">
                    <strong class="title">That’s not quite right.</strong>
             </p>

            <p>
                You can refer to the text in this section to refresh your memory.
            </p>
            `,
      correct: false,
    },
  ],
};

const question_2 = {
  question: "What is the “magnitude of error” in the CNN training process?",
  answers: [
    {
      id: "answer-0",
      text: "How wrong the training data is",
      feedback: `
            <p
                class="
                    animate__animated
                    animate__fadeInLeft
                    animate__delay-1s
                    animate__fast
                ">
                    <strong class="title">That’s not quite right.</strong>
             </p>

            <p>
                Read the question and answers carefully and try again.
            </p>
            `,
      correct: false,
    },
    {
      id: "answer-1",
      text: "The training data that a CNN uses",
      feedback: `
            <p
                class="
                    animate__animated
                    animate__fadeInLeft
                    animate__delay-1s
                    animate__fast
                ">
                    <strong class="title">That’s not quite right.</strong>
             </p>

            <p>
                You can refer to the text in this section to find the correct answer.
            </p>
            `,

      correct: false,
    },
    {
      id: "answer-2",
      text: "How wrong the CNN was in its prediction",
      feedback: `            <p
            class="
                animate__animated
                animate__fadeInLeft
                animate__delay-1s
                animate__fast
            "
        >
            <strong class="title"> That’s correct!</strong>
        </p>
        <p>Well done!</p>`,
      correct: true,
    },
    {
      id: "answer-3",
      text: "How accurate the CNN was in its prediction",
      feedback: `
            <p
                class="
                    animate__animated
                    animate__fadeInLeft
                    animate__delay-1s
                    animate__fast
                ">
                    <strong class="title">Hmm that’s not quite right.</strong>
             </p>

            <p>
            Read the question carefully.
            </p>
            `,
      correct: false,
    },
  ],
};

var questions = [question_1, question_2];

var questionId = 0;

function getQuestionAnswer() {
  questionElement.empty();
  answerElement.empty();
  pagignationElement.empty();
  var pagignation = `<h2><strong>${questionId + 1} of 3</strong></h2>`;
  var question = `<p>${questions[questionId].question}</p>`;
  var answer = questions[questionId].answers.map((answer) => {
    return `<div class="answer box white" id ="${answer.id}">${answer.text}</div>`;
  });
  pagignationElement.append(pagignation);
  questionElement.append(question);
  answerElement.append(answer);

  user_answer = "";

  $("#answer-0,#answer-1,#answer-2,#answer-3").click((e) => {
    user_answer = e.target.id;
    $(".selected").removeClass("selected");
    $(`#${user_answer}`).addClass("selected");
  });
}
var user_answer = "";

getQuestionAnswer();

$(".jsQuestionAnswerFail-btn").click(() => {
  $(".selected").removeClass("selected");

  $(".wrong").removeClass("wrong");

  $(".Js_training-questions-check").fadeIn();

  $(".jsQuestionAnswerFail").hide();
});

$(".jsSelectOption-btn").click(() => {
  $(".Js_training-questions-check").fadeIn();

  $(".jsSelectOption").hide();
});

//next question
$(".jsQuestionAnswerSuccess-btn").click(() => {
  $(".jsQuestionAnswerSuccess").hide();
  // $(".selected")?.removeCLass("selected");
  // $(".correct")?.removeClass("correct");
  if (questionId != 1) {
    $(".Js_training-questions-check").fadeIn();

    questionId += 1;

    getQuestionAnswer();
  } else {
    $("#task-13").hide();
    $("#task-14").slideDown();
  }
});

$(".Js_training-questions-check").click((e) => {
  $(".Js_training-questions-check").fadeOut();

  if (user_answer === "") return $(".jsSelectOption").slideDown();

  let user_answer_index = user_answer.substring(user_answer.length - 1);
  if (questions[questionId].answers[user_answer_index].correct) {
    $(`#${user_answer}`).addClass("correct");

    $(".jsQuestionAnswerSuccess").slideDown();
    $(".jsQuestionAnswerSuccess .speech-bubble--holder .speech-bubble").empty();
    $(".jsQuestionAnswerSuccess .speech-bubble--holder .speech-bubble").append(questions[questionId].answers[user_answer_index].feedback);
  } else {
    $(`#${user_answer}`).addClass("wrong");

    $(".jsQuestionAnswerFail").slideDown();
    $(".jsQuestionAnswerFail .speech-bubble--holder .speech-bubble").empty();
    $(".jsQuestionAnswerFail .speech-bubble--holder .speech-bubble").append(questions[questionId].answers[user_answer_index].feedback);
  }
});
