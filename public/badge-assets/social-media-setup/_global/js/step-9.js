$(function () {

    var setUp = function () {
        $('.feedback-fail').hide();
        $('.feedback-fail .holder .feedback').hide();
        $('.feedback-success').hide();
    },
            checkAnswers = function () {

                var answer = $('.selected').data('value');

                if (answer === 1) {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('.feedback-fail .holder .feedback-1').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                } else if (answer === 2) {
                    $('.feedback-success').show();
                    $('.feedback-fail').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-success").offset().top
                    }, 2000);
                } else if (answer === 3) {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('.feedback-fail .holder .feedback-3').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                } else if (answer === 4) {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('.feedback-fail .holder .feedback-4').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                } else if (answer === 5) {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('.feedback-fail .holder .feedback-5').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                } else if (answer === 6) {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('.feedback-fail .holder .feedback-6').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                }
            };

    setUp();

    $('.task-profile-facebook li').on('click', function () {
        checkAnswers();
    });

    $('.task-profile-facebook li').find('a').on('click', function (e) {
        e.preventDefault();
        $(".task-profile-facebook li a").css("pointer-events", "none");
        if ($(this).data('value') === 2) {
            $(this).toggleClass('selected selected-right');
        } else {
            $(this).toggleClass('selected selected-wrong');
        }
    });

    $('.btn-try-again').on('click', function () {
        $('.task-profile-facebook li').find('a').removeClass('selected');
        setUp();
        $(".task-profile-facebook li a").css("pointer-events", "auto");
    });




});
