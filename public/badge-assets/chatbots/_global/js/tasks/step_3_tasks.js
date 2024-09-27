$(function () {
    let slideIdx = 1;
    const previousSlide = $(".step-3__carousel--previous");
    const nextSlide = $(".step-3__carousel--next");

    slideIdx === 1 ? previousSlide.addClass("hide") : null;

    nextSlide.click(() => {
        $(`#step-3__carousel--slide-${slideIdx}`).addClass("hide");
        slideIdx += 1;

        $(`#step-3__carousel--slide-${slideIdx}`).removeClass("hide");
        previousSlide.removeClass("hide");
        slideIdx === 4 ? nextSlide.addClass("hide") : null;
    });

    previousSlide.click(() => {
        $(`#step-3__carousel--slide-${slideIdx}`).addClass("hide");
        slideIdx -= 1;

        $(`#step-3__carousel--slide-${slideIdx}`).removeClass("hide");
        slideIdx === 1 ? previousSlide.addClass("hide") : null;
        slideIdx !== 4 ? nextSlide.removeClass("hide") : null;
    });
});
