$(function () {
    var feedback = [
        ["<span>That is not quite right...</span> ", "icon-incorrect", "feedback-fail", "Try Again"],
        ["<span>Correct!</span>", "icon-correct", "feedback-success", "Continue"]
    ];
    var answer = "";
    $('.quiz-7 ul li a').click(function (e) {
        e.preventDefault();
        $(this).addClass('selected');
        $('.quiz-7 ul li a').css("pointer-events", "none");
    });


    $('.quiz-7 ul li a').click(function (e) {
            e.preventDefault();
            var dataValue = $(this).data('value');
            if (dataValue === 3) {
                answer = true;
            } else {
                answer = false;
            }
        });

    $('.jsCheck').click(function (e) {
        e.preventDefault();
        $(".quiz-7 ul li a").css("pointer-events", "none");
        $(".jsCheck").hide();
          $("html, body").animate({scrollTop: $(document).height()});
        $('li:nth-child(1) a.selected').toggleClass('selected-wrong');
        $('li:nth-child(2) a.selected').toggleClass('selected-wrong');
        $('li:nth-child(3) a.selected').toggleClass('selected-right');
        $('li:nth-child(4) a.selected').toggleClass('selected-wrong');

        if (answer) {
            var dataValue = 1;
            var path = window.location.href
            var pathArray = path.split( '/' );
            var btnLink = path.replace(pathArray[4],'step-8');

          oBadges.stepCompleted();

        } else {
            var dataValue = 0;
            var btnLink = "#";
        }
        var
                feedbackClass = feedback[ dataValue][2],
                imgSrc = "/badge-assets/website-blog-setup/_global/img/" + feedback[ dataValue][1] + ".svg",
                message = feedback[ dataValue][0],
                currentBtnClass = $('.feedback .btn').attr('class'),
                currentBtnClass = currentBtnClass.replace('btn', ''),
                btnClass = feedback[ dataValue][3].replace(' ', ''),
                btnContent = feedback[ dataValue][3];

        $('.feedback').show();
        $('.feedback').addClass(feedbackClass);
        $('.feedback img').attr("src", imgSrc);
        $('.feedback p').html(message);
        $('.feedback .btn').removeClass(currentBtnClass);
        $('.feedback .btn').html(btnContent).addClass('btn-white js' + btnClass);
        $('.feedback .btn').attr('href',btnLink);
    });

    $('body').on('click', '.jsTryAgain', function (e) {
        e.preventDefault();
        $('.feedback').hide();
        $('.quiz-7 ul li a').removeClass('selected');
        $('.quiz-7 ul li a').removeClass('selected-wrong');
        $('.quiz-7 ul li a').removeClass('selected-right');
        $(".quiz-7 ul li a").css("pointer-events", "auto");
        $(".jsCheck").show();
    });
});
