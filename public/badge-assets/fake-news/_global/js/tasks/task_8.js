$(function () {
  const selectedClass = "flu-selected";
  const hideClass = "hide";

  const timerValue = $(".task-8 .jsTime");
  const timerStart = $(".task-8 .jsStartTime");
  const timeTook = $(".task-8 .jsTimeTook");

  var time = 0;

  var activity_started = false;

  $(".task-8 #timer")[0].pauseAnimations();

  $(".task-8 .flu").click((e) => {
    activity_started ? null : startSelectingWords();
    $(e.currentTarget).hasClass(selectedClass) ? null : $(e.currentTarget).addClass(selectedClass);
  });

  const startSelectingWords = () => {
    activity_started = true;
    timerStart.addClass("hide");
    $(".task-8 #timer")[0].unpauseAnimations();
    var timer = setInterval(() => {
      time += 1;

      timerValue.text(`${timerDisplay()}`);

      if ($(`.task-8 .${selectedClass}`).length === $(".task-8 .flu").length) {
        $(".task-8 .success-box").removeClass(hideClass);
        $(".task-9").removeClass(hideClass);

        timeTook.text(
          `${
            days > 0
              ? days + " days and " + hours + " hours"
              : hours > 0
              ? hours + " hours and " + minutes + " minutes"
              : minutes > 0
              ? minutes > 1
                ? minutes + " minutes and " + (seconds > 1 ? seconds + " seconds" : seconds + " second")
                : minutes + " minute and " + (seconds > 1 ? seconds + " seconds" : seconds + " second")
              : seconds > 1
              ? seconds + " seconds"
              : seconds + " second"
          }`
        );

        $(".task-8 #timer")[0].pauseAnimations();

        clearInterval(timer);
        $("html, body").animate({
          scrollTop: $(".task-8 .success-box").offset().top - $(".task-8 .success-box").height() / 2,
        });
      }
    }, 1000);
  };

  timerStart.click(() => {
    startSelectingWords();
  });

  var minutes, hours, seconds, days;

  const timerDisplay = function () {
    var duration = time;

    days = Math.floor(duration / (60 * 60 * 24));
    duration -= days * (60 * 60 * 24);

    hours = Math.floor(duration / (60 * 60));
    duration -= hours * (60 * 60);

    minutes = Math.floor(duration / 60);
    duration -= minutes * 60;

    seconds = duration;

    var s = seconds < 10 ? "0" + seconds : seconds;
    var m = minutes < 10 ? "0" + minutes : minutes;
    var h = hours < 10 ? "0" + hours : hours;
    var d = days < 10 ? "0" + days : days;

    var formatted = m + ":" + s;
    var formatted = days == 0 && hours == 0 ? formatted : h + ":" + formatted;
    var formatted = days == 0 ? formatted : d + ":" + formatted;

    return formatted;
  };
});
