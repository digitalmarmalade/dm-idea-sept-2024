$(function () {
  const epochs_input = $(".task-12 #epochs");
  const accuracy_input = $(".task-12 #accuracy");
  const test_data_input = $(".task-12 #test-data");
  const question = $(".jsQuestion");
  const timerValue = $(".task-12 .countdown-animation__time");

  const trainModelBtn = $(".task-12 .jsTrainModel.btn");
  const addDataBtn = $(".task-12 .jsAddData.btn");
  const tryAgainBtn = $(".task-12 .jsTryAgain.btn");
  const startBtn = $(".task-12 .jsStartActivity.btn");
  const task_12_progress = $(".task-12 #fake-news-detector__progress");

  let task_12_chart = $(".task-12 #graph")[0].getContext("2d");

  let accuracy = [0];
  let number_of_points = [0];

  $(".task-12 #timer")[0].pauseAnimations();

  epochs_input.val(number_of_points[number_of_points.length - 1]);
  accuracy_input.val(accuracy[accuracy.length - 1]);
  test_data_input.val(0);
  task_12_progress.val(0);

  let activityTime = 60;

  let time = activityTime;

  let testDataAdded = 0;
  let epochsAdded = 0;

  var timer;

  const passed = () => {
    $(".task-12 #timer")[0].pauseAnimations();

    addDataBtn.addClass("disabled");
    trainModelBtn.addClass("disabled");

    clearInterval(timer);
    $(".task-12 .success-box").removeClass("hide");
    $(".task-12 .jsContinue").removeClass("hide");

    $("html, body").animate(
      {
        scrollTop: $(".task-12 .success-box").offset().top,
      },
      800
    );
  };

  const result = () => {
    if (isActivityCompleted()) passed();
    else {
      if (testDataAdded === 0) return failedActivity("You have not added any training data to the model.");
      else if (testDataAdded <= 7) return failedActivity("It doesn't look like you have used enough training data. Try adding more.");
      else if (testDataAdded > 8)
        return failedActivity("You have added an inefficient amount of training data to your fake news detector, try using less.");
      else if (epochsAdded === 0) return failedActivity("You will need to click TRAIN MODEL to generate epochs.");
      else if (epochsAdded <= 5) return failedActivity("You have not run enough epochs. Please try training your model more.");
      else if (epochsAdded > 6) return failedActivity("Please try training your model more efficiently.");
      else return failedActivity("Oops, time is up! You haven't achieved the 98% accuracy that we are looking for....");
    }
  };

  const startActivity = () => {
    $(".task-12 #timer")[0].unpauseAnimations();

    startBtn.addClass("hide");

    trainModelBtn.removeClass("hide");
    addDataBtn.removeClass("hide");

    trainModelBtn.removeClass("disabled");
    addDataBtn.removeClass("disabled");

    timer = setInterval(() => {
      time -= 1;
      if (time < 0) result();
      else timerValue.text(`${time}`);
    }, 1000);
  };

  startBtn.click(() => {
    startActivity();
  });

  $(".task-12 .jsTryAgain").click(() => {
    testDataAdded = 0;
    epochsAdded = 0;
    $(".task-12 .jsTryAgain").addClass("hide");
    $(".task-12 .fail-box").addClass("hide");

    addDataBtn.removeClass("hide");
    trainModelBtn.removeClass("hide");

    time = activityTime;
    timerValue.text(`${time}`);

    accuracy = [0];
    number_of_points = [0];

    accuracy_data_epoch_chart.destroy();

    epochs_input.val(number_of_points[number_of_points.length - 1]);
    accuracy_input.val(accuracy[accuracy.length - 1]);
    test_data_input.val(0);
    task_12_progress.val(0);

    accuracy_data_epoch_chart = chartInit();

    startActivity();
  });

  const isActivityCompleted = () => {
    return testDataAdded === 8 && epochsAdded === 6 && accuracy[accuracy.length - 1] >= 98;
  };

  const failedActivity = (message) => {
    clearInterval(timer);

    addDataBtn.addClass("disabled");
    trainModelBtn.addClass("disabled");

    $(".task-12 .fail-box").removeClass("hide");
    $(".task-12 .fail-box").text(message);

    $(".task-12 .jsTryAgain").removeClass("hide");

    $(".task-12 #timer")[0].pauseAnimations();

    addDataBtn.addClass("hide");
    trainModelBtn.addClass("hide");
  };

  trainModelBtn.click(() => {
    if (testDataAdded === 0) {
      return failedActivity("You have not added any training data to the model.");
    }

    task_12_progress.val(0);
    accuracy[accuracy.length - 1] + 0.25 > 98.1 ? accuracy.push(accuracy[accuracy.length - 1]) : accuracy.push(accuracy[accuracy.length - 1] + 0.25);
    number_of_points.push(number_of_points[number_of_points.length - 1] + 1);

    epochsAdded += 1;

    addDataBtn.addClass("disabled");
    trainModelBtn.addClass("disabled");

    var progressTime = 10;
    var timer = setInterval(() => {
      progressTime -= 1;
      if (progressTime < 0) {
        clearInterval(timer);
      }
      task_12_progress.val(task_12_progress.val() + 10);
    }, 100);

    setTimeout(() => {
      addDataBtn.removeClass("disabled");
      trainModelBtn.removeClass("disabled");
      accuracy_data_epoch_chart.update();

      epochs_input.val(epochsAdded);

      accuracy_input.val(accuracy[accuracy.length - 1]);

      isActivityCompleted() ? passed() : null;
    }, 1000);
  });

  addDataBtn.click(() => {
    task_12_progress.val(0);
    accuracy[accuracy.length - 1] + 12.0625 > 98.1
      ? accuracy.push(accuracy[accuracy.length - 1])
      : accuracy.push(accuracy[accuracy.length - 1] + 12.0625);
    number_of_points.push(number_of_points[number_of_points.length - 1] + 1);

    testDataAdded += 1;

    addDataBtn.addClass("disabled");
    trainModelBtn.addClass("disabled");

    var progressTime = 30;
    var timer = setInterval(() => {
      progressTime -= 1;
      if (progressTime < 0) {
        clearInterval(timer);
      }
      task_12_progress.val(task_12_progress.val() + 3.33);
    }, 100);

    setTimeout(() => {
      addDataBtn.removeClass("disabled");
      trainModelBtn.removeClass("disabled");
      accuracy_data_epoch_chart.update();

      test_data_input.val(testDataAdded);

      accuracy_input.val(accuracy[accuracy.length - 1]);
      isActivityCompleted() ? passed() : null;
    }, 3000);
  });

  const chartInit = () => {
    return new Chart(task_12_chart, {
      type: "line",
      data: {
        labels: number_of_points,
        datasets: [
          {
            data: accuracy,
            fill: false,
            label: "Prediction Accuracy",
            borderColor: "rgb(41, 163, 102)",
            backgroundColor: "rgb(41, 163, 102)",
            color: "rgb(255, 255, 255)",
            tension: 0.1,
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
  };

  let accuracy_data_epoch_chart = chartInit();
});
