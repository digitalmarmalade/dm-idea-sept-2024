$(function () {
    var feedback = [
        ["<span>That is not quite right...</span> ", "icon-incorrect", "feedback-fail", "Try Again", "#"],
        ["<span>Correct!</span>", "icon-correct", "feedback-success", "Continue", "step5.php"]
    ];
    var rightAnswers = [1, 2, 2];

    $('.quiz-6 ul li span a').click(function (e) {
        e.preventDefault();
        $(this).addClass('on').siblings('a').removeClass('on');
        var dataValue = $(this).data('value');
    });

    $('.jsCheck').click(function (e) {
        e.preventDefault();

        $(this).hide();

        $(".quiz-6 ul li span a").css("pointer-events", "none");

        var answers = [];

        $('.quiz-6 ul li').each(function () {
            answers.push($(this).find('span a.on').data('value'));

        });

        var is_same = answers.length == rightAnswers.length && answers.every(function (element, index) {
            return element === rightAnswers[index];
        });

        if (is_same) {
            var dataValue = 1;
            var path = window.location.href
            var pathArray = path.split( '/' );
            var btnLink = path.replace(pathArray[4],'step-9');
            oBadges.stepCompleted();

        } else {
            var dataValue = 0;
        }
        var feedbackClass = feedback[ dataValue][2],
                imgSrc = "/badge-assets/website-blog-setup/_global/img/" + feedback[ dataValue][1] + ".svg",
                message = feedback[ dataValue][0],
                currentBtnClass = $('.feedback .btn').attr('class'),
                currentBtnClass = currentBtnClass.replace('btn', ''),
                btnClass = feedback[ dataValue][3].replace(' ', ''),
                btnContent = feedback[ dataValue][3],
                btnHref = feedback[ dataValue][4];
        $('.feedback').show();
        $('.feedback').addClass(feedbackClass);
        $('.feedback img').attr("src", imgSrc);
        $('.feedback p').html(message);
        $('.feedback .btn').removeClass(currentBtnClass);
        $('.feedback .btn').html(btnContent).addClass('btn-white js' + btnClass);
        $('.feedback .btn').attr('href', btnLink);
    });

    $('body').on('click', '.jsTryAgain', function (e) {
        e.preventDefault();
        $('.feedback').hide();
        $('.jsCheck').show();
        $(".quiz-6 ul li span a").css("pointer-events", "auto");
    });
});
