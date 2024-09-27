$(function () {

    var setUp = function () {
        $('.feedback-fail').hide();
        $('.feedback-success').hide();
        $('.btn-check-answers').show();
    },
            checkAnswers = function () {
                $('.btn-check-answers').hide();
                var rightAnswers = $('.selected[data-value="true"]').length;
                var allSelected = $('.selected').length;
                if (rightAnswers === 4 && rightAnswers === allSelected) {
                    $('.feedback-success').show();
                    $('.feedback-fail').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-success").offset().top
                    }, 2000);
                } else {
                    $('.feedback-success').hide();
                    $('.feedback-fail').show();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                }
            };

    setUp();

    $('.btn-check-answers').on('click', function () {
              $(".task li a").css("pointer-events", "none");
        checkAnswers();

    });

    $('.task li').find('a').on('click', function (e) {
        e.preventDefault();
        if ($(this).data('value') === true) {
            $(this).toggleClass('selected selected-right');
        } else {
            $(this).toggleClass('selected selected-wrong');
        }

    });

    $('.btn-try-again').on('click', function () {
        $('.task li').find('a').removeClass('selected');
                $(".task li a").css("pointer-events", "auto");
        setUp();
    });




});
