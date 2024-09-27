$(function() {
var feedback = [
["<span>That is not quite right...</span> This layout is heavily text based and lack of use of images make it not engaging.", "icon-incorrect", "feedback-fail", "Try Again"],

["<span>That is not quite right...</span> This layout is causing issues on the speed with the page is loading.", "icon-incorrect", "feedback-fail", "Try Again"],

["<span>Correct!</span> This is the most balanced layout with good use of imagery, cleary hierarchy of copywriting and call to action buttons.", "icon-correct", "feedback-success", "Continue"],

["<span>That is not quite right...</span> This layout has very little contrast between the colour of the copywriting and the background colour. It is important that your users are able to clearly read the information on your website.", "icon-incorrect", "feedback-fail", "Try Again"]

];
        $('.quiz-6 ul li').click(function(e) {
        e.preventDefault();
        $("html, body").animate({scrollTop: $(document).height()});
        // $(this).css("pointer-events", "none");
        var dataValue = $(this).find('a').data('value');
        if(dataValue == 3 ){
          $(this).addClass('selected selected-right');
          var path = window.location.href
          var pathArray = path.split( '/' );
          var btnLink = path.replace(pathArray[4],'step-10');
          oBadges.stepCompleted();
          $('.feedback .btn').removeClass('jsTryAgain');
          $(".quiz-6 ul li a").css("pointer-events", "none");
        }else{
          $(this).addClass('selected selected-wrong');
            var btnLink = "#";
        }
        var feedbackClass = feedback[ dataValue - 1 ][2],
        imgSrc = "/badge-assets/website-blog-setup/_global/img/" + feedback[ dataValue - 1 ][1] + ".svg",
        message = feedback[ dataValue - 1 ][0],
        btnContent = feedback[ dataValue - 1 ][3],
        btnClass = feedback[ dataValue - 1 ][3].replace(' ', '');
        $('.feedback').toggleClass("hide");
        $('.feedback').addClass(feedbackClass);
        $('.feedback img').attr("src", imgSrc);
        $('.feedback p').html(message);
        $('.feedback .btn').html(btnContent).addClass('js' + btnClass);
        $('.feedback .btn').attr('href',btnLink);
        });

        $('body').on('click','.jsTryAgain',function(e) {
          e.preventDefault();
          $('.feedback').addClass("hide");
          $('.quiz-6 ul li').removeClass("selected");
          $('.quiz-6 ul li').removeClass("selected-right");
          $('.quiz-6 ul li').removeClass("selected-wrong");
          $(".quiz-6 ul li a").css("pointer-events", "auto");
        });

        $('body').on('click','.jsContinue',function(e) {
          $('.feedback').addClass("hide");
        });


});
