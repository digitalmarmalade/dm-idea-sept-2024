$(function () {
    $(".quiz-3 ul li a").click(function (e) {
        e.preventDefault();
        $(".quiz-3 ul li a").css("pointer-events", "none");

        dataValue = $(this).data('value');
        if (dataValue === 1) {
            $('.feedback-fail').removeClass('hide');
            $(this).addClass('selected selected-wrong');
            $("html, body").animate({scrollTop: $(document).height()});
        } else if (dataValue === 2) {
            $(this).addClass('selected selected-right');
            $('.feedback-success').removeClass('hide');
            $("html, body").animate({scrollTop: $(document).height()});
        }
    });

    $('.jsContinueFail').click(function (e) {
        e.preventDefault();

        $('.feedback-fail').addClass('hide');
        $('.website-methods').removeClass('hide');
        $("html, body").animate({scrollTop: $(document).height()});
    });

    $('.jsContinueSuccess').click(function (e) {
        e.preventDefault();
        $('.feedback-success').addClass('hide');
        $('.website-methods').removeClass('hide');
        $("html, body").animate({scrollTop: $(document).height()});
    });

    $('.quiz-4 ul li').click(function (e) {
              $(".quiz-4 ul li a").css("pointer-events", "none");
        e.preventDefault();
        $("html, body").animate({scrollTop: $(document).height()});
        if ($(this).find('a').data('value') == 1) {
            $('.quiz-4 ul li:first-child a').addClass('selected');
            $('.bottom').removeClass('hide');
            $('#builder').removeClass('hide');
            $('.jsContinueMoreMethods').removeClass('hide');
            $('.jsContinueMoreMethods').click(function (e) {
                e.preventDefault();
                $('.jsContinueMoreMethods').addClass('hide');
                $('#moreMethodsBuilder').removeClass('hide');
                $('.jsContinueNextStep').removeClass('hide');
            });
        }
        if ($(this).find('a').data('value') == 2) {
            $('.quiz-4 ul li:nth-child(2) a').addClass('selected');
            $('.bottom').removeClass('hide');
            $('#CMS').removeClass('hide');
            $('.jsContinueMoreMethods').removeClass('hide');
            $('.jsContinueMoreMethods').click(function (e) {
                e.preventDefault();
                $('.jsContinueMoreMethods').addClass('hide');
                $('#moreMethodsCMS').removeClass('hide');
                $('.jsContinueNextStep').removeClass('hide');
            });
        }
        if ($(this).find('a').data('value') == 3) {
            $('.quiz-4 ul li:nth-child(3) a').addClass('selected');
            $("html, body").animate({scrollTop: $(document).height()});
            $('.bottom').removeClass('hide');
            $('#yourself').removeClass('hide');
            $('.jsContinueMoreMethods').removeClass('hide');
            $('.jsContinueMoreMethods').click(function (e) {
                e.preventDefault();
                $('.jsContinueMoreMethods').addClass('hide');
                $('#moreMethodsYourself').removeClass('hide');
                $('.jsContinueNextStep').removeClass('hide');
            });
        }

    });
});
