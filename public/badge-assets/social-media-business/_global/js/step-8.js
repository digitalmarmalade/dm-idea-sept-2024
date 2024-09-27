$(function () {

    var setUp = function () {
        $('.feedback').hide();
    },
            checkAnswers = function () {
                var rightAnswers = $('.selected[data-value="true"]').length;
                var allSelected = $('.selected').length;

                if (rightAnswers === 2 && rightAnswers === allSelected) {
                    $('.feedback-success').show();
                    $('.btn-check').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-success").offset().top
                    }, 2000);
                } else {
                    $('.feedback-fail').slideDown();
                    $('.btn-check').hide();
                    $('html, body').animate({
                        scrollTop: $(".feedback-fail").offset().top
                    }, 2000);
                }
            };

    setUp();

    $('.btn-check').on('click', function () {
        checkAnswers();
    });

    $('.task li').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('selected');
        if ($('.task li.selected').length === 2) {
          $('.task li').css("pointer-events", "none");
        } else {
            $('.task li').css("pointer-events", "auto");
        }

    });

    $('.btn-try-again').on('click', function () {
        $('.feedback').hide();
        $('.task li').removeClass('selected');
        $('.btn-check').fadeIn();
        $('.task li').css("pointer-events", "auto");
        setUp();

    });




});
