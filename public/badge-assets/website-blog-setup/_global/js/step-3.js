
var feedback = [
["<span>That is not quite right...</span> This domain name does not represent the goal you set up for your website and does not describe your business. Think of about 10 keywords or terms that describe your website in the best way possible. When you have a good bunch of them you can then start to put them together, mix them up, add prefixes & suffixes to create some really cool domain name ideas.", "icon-incorrect", "feedback-fail", "Try Again"],
["<span>That is not quite right...</span> Don’t buy a name that will be confused with another website. Be unique, otherwise it could mean your website falls flat before it's even started. Never buy domains that are simply the plural, hyphenated or misspelled version of an already established domain.", "icon-incorrect", "feedback-fail", "Try Again"],

["<span>That is not quite right...</span> Although people tend to find your site through a branded search in Google, it’s still important to make your domain easy to spell/type out. If it requires a lot of effort to type correctly, due to trying to spell it, the length or the use of un-memorable words or sounds, you’ve probably kissed goodbye to a good portion of your branding and marketing value.", "icon-incorrect", "feedback-fail", "Try Again"],
["<span>Correct!</span> Keep your domain name snappy and memorable. Word-of-mouth and search engine prominence are both reliant on easy to remember domain names. You don’t want to have an amazing website that no one can ever remember to tell their friends about because they can’t remember the name of your website!", "icon-correct", "feedback-success", "Continue"],
["<span>That is not quite right...</span> Avoid using hyphens or numbers, it makes it really difficult to give your domain name verbally and it fails the easy to remember or type test.", "icon-incorrect", "feedback-fail", "Try Again"],
["<span>That is not quite right...</span> It’s a great name, so great that someone’s already got a business with this name! Check that you’re not infringing on anyone’s copyright with the name of your website. To do this, head over to <a href='http://copyright.gov'>copyright.gov</a> and search before you buy your URL name.", "icon-incorrect", "feedback-fail", "Try Again"]

];

        $('.quiz-5 ul li').click(function(e) {
        // e.preventDefault();
        $(".quiz-5 ul li a").css("pointer-events", "none");
        $("html, body").animate({scrollTop: $(document).height()});
        var dataValue = $(this).find('a').data('value');
        if(dataValue == 4 ){
          $(this).addClass('selected selected-right');
          $('.feedback .btn').removeClass('jsTryAgain');
          $(".quiz-5 ul li a").css("pointer-events", "none");
          var path = window.location.href
          var pathArray = path.split( '/' );
          var btnLink = path.replace(pathArray[4],'step-6');

          oBadges.stepCompleted();
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
          $('.quiz-5 ul li').removeClass('selected');
          $('.quiz-5 ul li').removeClass('selected-right');
          $('.quiz-5 ul li').removeClass('selected-wrong');
          $(".quiz-5 ul li a").css("pointer-events", "auto");
        });
