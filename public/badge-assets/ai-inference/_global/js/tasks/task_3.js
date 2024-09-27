$(function () {
  const plastic_items_confidence = ".jsPlasticItem";
  const glass_items_confidence = ".jsGlassItem";
  const metal_items_confidence = ".jsMetalItem";
  const paper_items_confidence = ".jsPaperItem";

  const items = [
    metal_items_confidence, //80
    paper_items_confidence, //83
    glass_items_confidence, //82
    paper_items_confidence, //87
    glass_items_confidence, //85
    paper_items_confidence, //93
    metal_items_confidence, //86
  ];

  const confidence_level = ["80%", "83%", "82%", "87%", "85%", "93%", "86%"];

  $(`.inference-animation__list-item--active`).removeClass("inference-animation__list-item--active");

  $(".jsInference .btn").click(() => {
    $(".jsInference .btn").addClass("hide");
    // resuming animation
    $("#robot-1__head").attr("class", "");
    $("#robot-1__complete").attr("class", "");
    $("#robot-1__shadow").attr("class", "");

    $("#robot-arm__light").attr("class", "");
    $("#animated-belt-and-light__recycling").attr("class", "");

    $("#metal-2").attr("class", "animated-computer-2__screen-item animate");
    $("#paper-3").attr("class", "animated-computer-2__screen-item animate");
    $("#glass-2").attr("class", "animated-computer-2__screen-item animate");
    $("#paper-2").attr("class", "animated-computer-2__screen-item animate");
    $("#glass-1").attr("class", "animated-computer-2__screen-item animate");
    $("#paper-1").attr("class", "animated-computer-2__screen-item animate");
    $("#metal-1").attr("class", "animated-computer-2__screen-item animate");

    setTimeout(() => {
      let i = 0;
      var interval = setInterval(() => {
        $(`${items[i]} span`).text(confidence_level[i]);
        $(`.inference-animation__list-item--active`).removeClass("inference-animation__list-item--active");
        $(`${items[i]}`).addClass("inference-animation__list-item--active");
        i !== items.length - 1 ? i++ : nextTask();
      }, 3.1 * 1000);

      const nextTask = () => {
        clearInterval(interval);
        setTimeout(() => {
          $("#robot-1__head").attr("class", "factory-animation--paused");
          $("#robot-1__complete").attr("class", "factory-animation--paused");
          $("#robot-1__shadow").attr("class", "factory-animation--paused");

          $("#robot-arm__light").attr("class", "factory-animation--paused");
          $("#animated-belt-and-light__recycling").attr("class", "factory-animation--paused");

          $("#metal-2").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
          $("#paper-3").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
          $("#glass-2").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
          $("#paper-2").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
          $("#glass-1").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
          $("#paper-1").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
          $("#metal-1").attr("class", "animated-computer-2__screen-item animate factory-animation--paused");
        }, 13.5 * 1000);

        setTimeout(() => {
          $(".jsTask3 .jsComplete").removeClass("hide");
          // scroll
          $("html, body").animate(
            {
              scrollTop: $(".jsTask3 .jsComplete").offset().top,
            },
            800
          );
        }, 3 * 1000);
      };
    }, 10.3 * 1000);
  });
});
