$(function () {
  const epochs_input = $(".task-11 #epochs");
  const accuracy_input = $(".task-11 #accuracy");
  const question = $(".jsQuestion");

  const trainModelBtn = $(".task-11 .jsTrainModel.btn");

  let task_11_chart = $(".task-11 #graph")[0].getContext("2d");

  let accuracy = [0];
  let epochs = [0];

  const default_accuracy = [8, 6, 5, 4, 3, 2.5, 2, 2, 1.5, 1, 0.5, 0.5];

  let btnClicked = 0;

  epochs_input.val(epochs[epochs.length - 1]);
  accuracy_input.val(accuracy[accuracy.length - 1]);

  let userEnteredValues = 0;

  const user_Input = (e) => {
    if (+epochs_input.val() === 0) {
      epochs_input.val(epochs[epochs.length - 1]);
    }
    if (+epochs_input.val() > 999 || +epochs_input.val() < 0) {
      epochs_input.val(epochs[epochs.length - 1]);

      $(".task-11 .fail-box").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".task-11 .fail-box").offset().top - $(".task-11 .fail-box").height(),
        },
        100
      );

      setTimeout(() => {
        $(".task-11 .fail-box").addClass("hide");
        $("html, body").animate(
          {
            scrollTop: epochs_input.offset().top - epochs_input.height(),
          },
          100
        );
      }, 2000);
    }

    if (+epochs_input.val() >= 273) {
      userEnteredValues += 1;
    }

    if (userEnteredValues > 2) {
      $(".task-11 .success-box").removeClass("hide");
      $(".task-11 .jsContinue").removeClass("hide");

      $("html, body").animate(
        {
          scrollTop: $(".task-11 .success-box").offset().top - $(".task-11 .success-box").height(),
        },
        100
      );
    }

    let difference = +epochs_input.val() - epochs[epochs.length - 1];

    if (+epochs_input.val() > 12) {
      for (x = 0; x < difference; x++) {
        accuracy[accuracy.length - 1] + 0.238 > 98.00001 ? accuracy.push(98) : accuracy.push(accuracy[accuracy.length - 1] + 0.238);
        epochs.push(epochs[epochs.length - 1] + 1);
        epochs_input.val(epochs[epochs.length - 1]);
        accuracy_input.val(accuracy[accuracy.length - 1]);
      }
    }
    accuracy_epoch_chart.update();
  };

  epochs_input.keyup((e) => {
    if (e.keyCode == 13) {
      user_Input(e);
    }
  });

  epochs_input.focusout(user_Input);
  epochs_input.focusin((e) => {
    e.target.value = "";
  });

  trainModelBtn.click(() => {
    btnClicked < 12
      ? accuracy.push(accuracy[accuracy.length - 1] + default_accuracy[btnClicked])
      : accuracy[accuracy.length - 1] < 98
      ? accuracy.push(accuracy[accuracy.length - 1] + 0.237)
      : accuracy.push(98);

    epochs.push(epochs[epochs.length - 1] + 1);

    epochs_input.val(epochs[epochs.length - 1]);
    accuracy_input.val(accuracy[accuracy.length - 1]);

    accuracy_epoch_chart.update();
    btnClicked += 1;

    if (btnClicked === 12) {
      question.removeClass("hide");
      trainModelBtn.addClass("hide");

      $("html, body").animate(
        {
          scrollTop: question.offset().top - question.height() / 4,
        },
        200
      );
    }
  });

  $(".task-11 .jsContinue").click(() => {
    $(".task-11 .jsContinue").addClass("hide");
    $(".task-12").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".task-12 .activity-box").offset().top,
      },
      800
    );
  });

  Chart.defaults.color = "white";
  let accuracy_epoch_chart = new Chart(task_11_chart, {
    type: "line",
    data: {
      labels: epochs,
      datasets: [
        {
          data: accuracy,
          fill: false,
          label: "Prediction Accuracy",
          borderColor: "rgb(41, 163, 102)",
          backgroundColor: "rgb(41, 163, 102)",
          color: "rgb(255, 255, 255)",
          tension: 0.5,
        },
      ],
    },
    options: {
      scales: {
        y: {
          grid: {
            backgroundColor: "white",
            color: "white",
            backdropColor: "white",
          },
        },
        x: {
          grid: {
            color: "white",
          },
        },
      },
    },
  });
});
