/**
 * Task 1 Requirmenets
 * four select boxes each with same options
 * 1 - Artifical Intelligence
 * 2 - Machine Learning
 * 3 - Deep learning
 * 4 - Neural Network
 * A user is shown a text and asked to select which one of the above mentioned categores does it belongs to
 * There are 4 such different task for each of the option avialable.
 * User gets everyone correct
 * -> Feedback message
 * -> Green border around text box
 * -> white border around select box with green color filled inside
 * -> drop down icon changes to a tick
 * The option user gets it wrong
 * -> Feedback message
 * -> red border around text box
 * -> white border around select box with red color filled inside
 * -> drop down icon changes to a cross
 */

/**
 **** CSS NEEDED ****
 * margin 10px
 */

$(function () {
  const dropDownOptions = ["Deep Learning", "Artificial Intelligence", "Neural Network", "Machine Learning"];
  const dropDownIds = ["ArtificialIntelligence", "MachineLearning", "DeepLearning", "NeuralNetwork"];

  const textOptions = [
    {
      id: 1,
      domain: "Artifical Intelligence",
      text: "An umbrella term that encompasses both machine learning and deep learning and covers all intelligent models related to making a machine smarter and enabling it to think like a human.",
      feedback: {
        positive: "Correct!",
        negative: "That’s not quite right… try again!",
      },
    },
    {
      id: 2,
      domain: "Machine Learning",
      text: "A subset of artificial intelligence that can be described as any AI model that can learn and improve from experience to imitate intelligent human behaviour without being explicitly programmed.",
      feedback: {
        positive: "Correct!",
        negative: "That’s not quite right… try again!",
      },
    },
    {
      id: 3,
      domain: "Deep Learning",
      text: "A branch of machine learning that is inspired by the way a human brain processes information. This type of model uses a neural network to train and improve itself to perform tasks by processing huge amounts of data within seconds.",
      feedback: {
        positive: "Correct!",
        negative: "That’s not quite right… try again!",
      },
    },
    {
      id: 4,
      domain: "Neural Network",
      text: "A computing system consisting of a collection of connected units called neurons that are modeled after the human brain.",
      feedback: {
        positive: "Correct!",
        negative: "That’s not quite right… try again!",
      },
    },
  ];

  var options_element = ["<option value='' disabled selected >Select one</option>"];
  options_element.push(
    dropDownOptions.map((option, idx) => {
      return `<option value=${idx}> ${option}</option>`;
    })
  );

  var selectBoxes = [];

  selectBoxes.push(
    dropDownIds.map((option, idx) => {
      return `<select id="${option}" class="definition-terms__option__select">
            ${options_element}
        </select>`;
    })
  );

  for (let x = 0; x < dropDownOptions.length; x++) {
    var contianer = `<div class="definition-terms__option">
            <p id="${dropDownIds[x]}-text" class="definition-terms__option__question"> ${textOptions[x].text}</p>
            ${selectBoxes[0][x]}
        </div>`;

    $("#task-1-activity").append(contianer);
  }

  const allNotSelected = () => {
    return (
      $("#ArtificialIntelligence option:selected").val() === "" ||
      $("#MachineLearning option:selected").val() === "" ||
      $("#DeepLearning option:selected").val() === "" ||
      $("#NeuralNetwork option:selected").val() === ""
    );
  };

  $("#task-1-check").click(() => {
    $(".correct").removeClass("correct");
    $(".wrong").removeClass("wrong");

    var correct_answers = 0;

    $("#task-1-check").addClass("hide");

    if (allNotSelected()) {
      $(".jsSelectOption").removeClass("hide");

      return $("html, body").animate(
        {
          scrollTop: $(".jsSelectOption").offset().top,
        },
        800
      );
    }

    if ($("#ArtificialIntelligence option:selected").val() === "1") {
      correct_answers += 1;

      $("#ArtificialIntelligence-text").addClass("correct");
      $("#ArtificialIntelligence").addClass("correct");
    } else {
      $("#ArtificialIntelligence-text").addClass("wrong");
      $("#ArtificialIntelligence").addClass("wrong");
    }
    if ($("#MachineLearning option:selected").val() === "3") {
      correct_answers += 1;

      $("#MachineLearning-text").addClass("correct");
      $("#MachineLearning").addClass("correct");
    } else {
      $("#MachineLearning-text").addClass("wrong");
      $("#MachineLearning").addClass("wrong");
    }
    if ($("#DeepLearning option:selected").val() === "0") {
      correct_answers += 1;

      $("#DeepLearning-text").addClass("correct");
      $("#DeepLearning").addClass("correct");
    } else {
      $("#DeepLearning-text").addClass("wrong");
      $("#DeepLearning").addClass("wrong");
    }
    if ($("#NeuralNetwork option:selected").val() === "2") {
      correct_answers += 1;

      $("#NeuralNetwork-text").addClass("correct");
      $("#NeuralNetwork").addClass("correct");
    } else {
      $("#NeuralNetwork-text").addClass("wrong");
      $("#NeuralNetwork").addClass("wrong");
    }

    if (correct_answers === dropDownIds.length) {
      $("#task-1-positive").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $("#task-1-positive").offset().top,
        },
        800
      );
    } else {
      $("#task-1-negative").removeClass("hide");
      $("html, body").animate(
        {
          scrollTop: $("#task-1-negative").offset().top,
        },
        800
      );
    }
  });

  $(".jsFeedBack").click(() => {
    $("#task-1-positive").addClass("hide");
    $("html, body").animate(
      {
        scrollTop: $(".definition-terms__option").offset().top,
      },
      800
    );
  });

  $("#task-1-negative button").click(() => {
    $(".task-1 select.wrong").val("");
    $(".task-1 .wrong").removeClass("wrong");

    $("#task-1-negative").addClass("hide");
    $("#task-1-check").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".definition-terms__option").offset().top,
      },
      800
    );
  });

  $(".jsSelectOption button").click(() => {
    $(".jsSelectOption").addClass("hide");
    $("#task-1-check").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".definition-terms__option").offset().top,
      },
      800
    );
  });
});
