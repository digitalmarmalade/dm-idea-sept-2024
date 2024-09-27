$(function () {

    var setUp = function () {
        $('.feedback').hide();
    },
            checkTrueFalse = function () {
                $('.btn-check').hide();
                var rightAnswers = $('.selected[data-value="1"], .selected[data-value="4"], .selected[data-value="5"], .selected[data-value="8"], .selected[data-value="10"]').length;
                var allSelected = $('.selected').length;
                if (rightAnswers === 5 && rightAnswers === allSelected) {
                    $('.feedback-success').slideDown();
                    // $('.feedback-fail').slideDown();
                    $('html, body').animate({
                        scrollTop: $(".feedback-success").offset().top
                    }, 2000);
                } else {
                    // $('.feedback-success').hide();
                    $('.feedback-fail').slideDown();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                }
            };

    setUp();

    $('.btn-check').on('click', function () {
        checkTrueFalse();
    });

    $('.task-true-false li span').find('span').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('selected').siblings('span').removeClass('selected');
        if (
                $(this).data('value') === 1
                ||
                $(this).data('value') === 4
                ||
                $(this).data('value') === 5
                ||
                $(this).data('value') === 8
                ||
                $(this).data('value') === 10
                ) {
            $(this).toggleClass('selected-right');
        } else {
            $(this).toggleClass('selected-wrong');
        }

    });
    $('.btn-try-again').on('click', function () {
        $('.btn-check').show();
        $('.feedback').hide();
        $('.task-true-false li span').find('span').removeClass('selected');
        $('.task-true-false li span').find('span').removeClass('selected-right');
        $('.task-true-false li span').find('span').removeClass('selected-wrong');
        setUp();
    });
});
