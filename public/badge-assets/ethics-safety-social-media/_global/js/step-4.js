$(function () {

    var setUp = function () {
        $('.feedback').hide();
    },
            checkAnswers = function () {
                var rightAnswers = $('.selected[data-value="true"]').length;
                var allSelected = $('.selected').length;

                if (rightAnswers === 2 && rightAnswers === allSelected) {
                    $('.feedback-positive').show();
                    $('#staying-safe').show();
                    $('.btn-check').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-positive").offset().top
                    }, 2000);
                } else {
                    $('.feedback-negative').slideDown();
                    $('.btn-check').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-negative").offset().top
                    }, 2000);
                }
            };

    setUp();

    $('.btn-check').on('click', function () {
        checkAnswers();
    });

    $('.task li').find('a').on('click', function (e) {
        e.preventDefault();
        if ($(this).data('value') === true) {
            $(this).toggleClass('selected');
        } else {
            $(this).toggleClass('selected');
        }

    });

    $('.btn-try-again').on('click', function () {
        $('.feedback').hide();
        $('.task li').find('a').removeClass('selected');
        $('.btn-check').fadeIn();
        setUp();
    });




});
