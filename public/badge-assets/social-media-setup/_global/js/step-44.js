$(function () {

    var setUp = function () {
        $('.feedback-fail').hide();
        $('.feedback-success').hide();
        $('.btn-check-answers').show();
    },
            checkAnswers = function () {
                $('.btn-check-answers').hide();
                var rightAnswers = $('.selected[data-value="2"], .selected[data-value="3"], .selected[data-value="6"], .selected[data-value="7"]').length;
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
        checkAnswers();
    });

    $('.task-true-false li span').find('span').on('click', function(e) {
        e.preventDefault();
        $(this).addClass('selected').siblings('span').removeClass('selected');
        if (
                $(this).data('value') === 2
                ||
                $(this).data('value') === 3
                ||
                $(this).data('value') === 6
                ||
                $(this).data('value') === 7
                ) {
            $(this).toggleClass('selected-right');
        } else {
            $(this).toggleClass('selected-wrong');
        }

    });
    $('.btn-try-again').on('click', function () {
        $('.task-true-false li span').find('span').removeClass('selected');
        $('.task-true-false li span').find('span').removeClass('selected-right');
        $('.task-true-false li span').find('span').removeClass('selected-wrong');
        setUp();
    });
});
