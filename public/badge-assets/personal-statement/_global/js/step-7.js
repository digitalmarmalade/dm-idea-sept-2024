$(function () {

  $('.application-sheet-tennie a').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('selected');
    if ($('.tennie-submit-1').hasClass('selected')){
      $(".interview-tennie-success").fadeIn();
      $('.application-sheet-tennie-2').addClass('selected');
      $("html, body").animate({scrollTop: $(document).height()});
      $(".tennie-submit").fadeOut();
    }
    else {
      $(".interview-tennie-fail").fadeIn();
      $('.application-sheet-tennie-2').addClass('selected');
      $("html, body").animate({scrollTop: $(document).height()});
      $(".tennie-submit").fadeOut();
    }

  });

  $('.btn-continue-tennie').on('click', function (e) {
        e.preventDefault();
      $(".interview-tennie-success").fadeOut();
      $(".interview-tennie-fail").fadeOut();
      $(".application-sharon").fadeIn();
  });


  $('.application-sheet-sharon a').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('selected');
    if ($('.sharon-submit-1').hasClass('selected')){
      $(".interview-sharon-success").fadeIn();
      $('.application-sheet-sharon-2').addClass('selected');
      $("html, body").animate({scrollTop: $(document).height()});
      $(".sharon-submit").fadeOut();
    }
    else {
      $(".interview-sharon-fail").fadeIn();
      $('.application-sheet-sharon-2').addClass('selected');
      $("html, body").animate({scrollTop: $(document).height()});
      $(".sharon-submit").fadeOut();
    }

  });

  $('.btn-continue-sharon').on('click', function (e) {
        e.preventDefault();
      $(".interview-sharon-success").fadeOut();
      $(".interview-sharon-fail").fadeOut();
      $("#interview").fadeIn();
  });

    // var setUp = function () {
    //   $('.answer').hide();
    //   $('.answer-sharon').hide();
    //   $('.task-5 .question').hide();
    //   $('.task-7 .question').hide();
    //   $('.btn-submit-tennie').hide();
    //   $('.btn-submit-sharon').hide();
    //   $('.task-5 .question-1').show();
    //   $('.task-7 .question-1-2').show();
    //
    // },
    // checkAnswersTennie = function () {
    //     var rightAnswers = $('.application-sheet-tennie  .answer[data-value="true"]:visible');
    //     var allSelected = $('.application-sheet-tennie .answer:visible');
    //     if (rightAnswers.length == 12 && rightAnswers.length == allSelected.length) {
    //         $('.interview-tennie-success').slideDown();
    //         $('.btn-submit-tennie').hide();
    //         $('.btn-continue-tennie').on('click', function (e) {
    //           e.preventDefault();
    //           $('.interview-tennie-success').fadeOut('fast');
    //           $('.application-sharon').slideDown();
    //         });
    //     } else if (rightAnswers.length != 12) {
    //        var wrongAnswers = 0;
    //        $.each(allSelected,function(index,value){
    //          if($(value).hasClass('answer-wrong')){
    //            wrongAnswers++;
    //          }
    //        });
    //        if(wrongAnswers == 0){
    //          $('.interview-tennie-incomplete').slideDown();
    //          $('.btn-submit-tennie').hide();
    //        } else {
    //           $('.interview-tennie-fail').slideDown();
    //           $('.answer-wrong').addClass('wrong-answer');
    //           $('.btn-submit-tennie').hide();
    //        }
    //     }
    // };
    //
    // checkAnswersSharon = function () {
    //     var rightAnswers = $('.application-sheet-sharon .answer-sharon[data-value="true"]:visible');
    //     var allSelected = $('.application-sheet-sharon .answer-sharon:visible');
    //
    //     if (rightAnswers.length == 4 && rightAnswers.length == allSelected.length) {
    //         $('.interview-sharon-success').slideDown();
    //         $('.btn-submit-sharon').hide();
    //         $('.btn-continue-sharon').on('click', function (e) {
    //           e.preventDefault();
    //           $('.interview-sharon-success').fadeOut('fast');
    //           $('.interview').slideDown();
    //         });
    //       } else if (rightAnswers.length != 4) {
    //          var wrongAnswers = 0;
    //          $.each(allSelected,function(index,value){
    //            if($(value).hasClass('answer-wrong')){
    //              wrongAnswers++;
    //            }
    //          });
    //          if(wrongAnswers == 0){
    //            $('.interview-sharon-incomplete').slideDown();
    //            $('.btn-submit-sharon').hide();
    //          } else {
    //         $('.interview-sharon-fail').slideDown();
    //         $('.answer-wrong').addClass('wrong-answer');
    //         $('.btn-submit-sharon').hide();
    //       }
    //     }
    //   };
    //
    // setUp();
    //
    // $('.task-5 .question-1 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-1').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-1').fadeOut('fast');
    //     $(".task-5 .question-2").fadeIn();
    //     if ($('.task-5 .question-1 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-1A").fadeIn();
    //     }
    //     if ($('.task-5 .question-1 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-1B").fadeIn();
    //     }
    //     if ($('.task-5 .question-1 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-2B").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-2 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-2').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-2').fadeOut('fast');
    //     $(".task-5 .question-3").fadeIn();
    //     if ($('.question-2 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-3B").fadeIn();
    //     }
    //     if ($('.task-5 .question-2 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-2A").fadeIn();
    //     }
    //     if ($('.task-5 .question-2 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-4B").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-3 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-3').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-3').fadeOut('fast');
    //     $(".task-5 .question-4").fadeIn();
    //     if ($('.task-5 .question-3 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-5B").fadeIn();
    //     }
    //     if ($('.task-5 .question-3 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-6B").fadeIn();
    //     }
    //     if ($('.task-5 .question-3 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-3A").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-4 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-4').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-4').fadeOut('fast');
    //     $(".task-5 .question-5").fadeIn();
    //     if ($('.task-5 .question-4 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-4A").fadeIn();
    //     }
    //     if ($('.task-5 .question-4 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-7B").fadeIn();
    //     }
    //     if ($('.task-5 .question-4 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-8B").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-5 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-5').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-5').fadeOut('fast');
    //     $(".task-5 .question-6").fadeIn();
    //     if ($('.task-5 .question-5 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-5A").fadeIn();
    //     }
    //     if ($('.task-5 .question-5 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-9B").fadeIn();
    //     }
    //     if ($('.task-5 .question-5 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-10B").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-6 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-6').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-6').fadeOut('fast');
    //     $(".task-5 .question-7").fadeIn();
    //     if ($('.task-5 .question-6 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-6A").fadeIn();
    //     }
    //     if ($('.task-5 .question-6 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-11B").fadeIn();
    //     }
    //     if ($('.task-5 .question-6 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-12B").fadeIn();
    //     }
    //     if ($('.task-5 .question-6 li:nth-child(4)').hasClass('selected')){
    //       $("#answer-7A").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-7 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-7').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-7').fadeOut('fast');
    //     $(".task-5 .question-8").fadeIn();
    //     if ($('.task-5 .question-7 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-8A").fadeIn();
    //     }
    //     if ($('.task-5 .question-7 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-13B").fadeIn();
    //     }
    //     if ($('.task-5 .question-7 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-14B").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-8 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-5 .btn-add-8').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-5 .question-8').fadeOut('fast');
    //     $(".task-5 .question-9").fadeIn();
    //     if ($('.task-5 .question-8 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-9A").fadeIn();
    //     }
    //     if ($('.task-5 .question-8 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-15B").fadeIn();
    //     }
    //     if ($('.task-5 .question-8 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-10A").fadeIn();
    //     }
    //   });
    // });
    //
    // $('.task-5 .question-9 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //   $('.task-5 .btn-add-9').on('click', function (e) {
    //     e.preventDefault();
    //     if ($('.task-5 .question-9 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-11A").fadeIn();
    //     }
    //     if ($('.task-5 .question-9 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-16B").fadeIn();
    //     }
    //     if ($('.task-5 .question-9 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-17B").fadeIn();
    //     }
    //     $(this).fadeOut(100);
    //     $('.btn-submit-tennie').fadeIn();
    //   });
    // });
    //
    // $('.task-7 .question-1-2 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //
    //   $('.task-7 .btn-add-1-2').on('click', function (e) {
    //     e.preventDefault();
    //     $('.task-7 .question-1-2').fadeOut('fast');
    //     $(".task-7 .question-2-2").fadeIn();
    //     if ($('.task-7 .question-1-2 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-1C").fadeIn();
    //     }
    //     if ($('.task-7 .question-1-2 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-1D").fadeIn();
    //     }
    //     if ($('.task-7 .question-1-2 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-2D").fadeIn();
    //     }
    //     // $(this).fadeOut(100);
    //     // $('.btn-submit-tennie').fadeIn();
    //   });
    // });
    //
    // $('.task-7 .question-2-2 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-7 .btn-add-2-2').on('click', function (e) {
    //
    //     $('.task-7 .question-2-2').fadeOut('fast');
    //     $(".task-7 .question-3-2").fadeIn();
    //
    //     e.preventDefault();
    //     if ($('.task-7 .question-2-2 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-3D").fadeIn();
    //     }
    //     if ($('.task-7 .question-2-2 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-2C").fadeIn();
    //     }
    //     if ($('.task-7 .question-2-2 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-4D").fadeIn();
    //     }
    //     // $(this).fadeOut(100);
    //     // $('.btn-submit-tennie').fadeIn();
    //   });
    // });
    //
    // $('.task-7 .question-3-2 li').on('click', function (e) {
    //   e.preventDefault();
    //   $(this).toggleClass('selected');
    //
    //   $('.task-7 .btn-add-3-2').on('click', function (e) {
    //     e.preventDefault();
    //     if ($('.task-7 .question-3-2 li:nth-child(1)').hasClass('selected')){
    //       $("#answer-5D").fadeIn();
    //     }
    //     if ($('.task-7 .question-3-2 li:nth-child(2)').hasClass('selected')){
    //       $("#answer-3C").fadeIn();
    //     }
    //     if ($('.task-7 .question-3-2 li:nth-child(3)').hasClass('selected')){
    //       $("#answer-6D").fadeIn();
    //     }
    //     $(this).fadeOut(100);
    //     $('.btn-submit-sharon').fadeIn();
    //   });
    // });
    //
    // $('.btn-submit-tennie').on('click', function (e) {
    //     e.preventDefault();
    //     checkAnswersTennie();
    //     $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    //     $('.col-tennie:first-child').fadeOut('fast');
    //     $('.step-5 .application .col-tennie:last-child').addClass('centred-col');
    // });
    //
    // $('.btn-submit-sharon').on('click', function (e) {
    //     e.preventDefault();
    //     checkAnswersSharon();
    //     $("html, body").animate({ scrollTop: $(document).height() }, "slow");
    //     $('.col-sharon:first-child').fadeOut('fast');
    //     $('.step-5 .application .col-sharon:last-child').addClass('centred-col');
    // });
    //
    // $('.btn-try-again-tennie').on('click', function (e) {
    //     e.preventDefault();
    //     $('.interview-tennie-fail').hide();
    //     $('.interview-tennie-incomplete').hide();
    //     $('.col-tennie:first-child').fadeIn();
    //     $('.step-5 .application .col-tennie:last-child').removeClass('centred-col');
    //     $('.step-5 btn-add-9').fadeIn();
    //     $('.answer-wrong').removeClass('wrong-answer');
    //     $('.question li').removeClass('selected');
    //     $('.btn-add-9').fadeIn();
    //     setUp();
    // });
    //
    // $('.btn-try-again-sharon').on('click', function (e) {
    //     e.preventDefault();
    //
    //     $('.interview-sharon-fail').hide();
    //     $('.interview-sharon-incomplete').hide();
    //     $('.col-sharon:first-child').fadeIn();
    //     $('.step-5 .application .col-sharon:last-child').removeClass('centred-col');
    //     $('.step-5 btn-add-3').fadeIn();
    //     $('.answer-wrong').removeClass('wrong-answer');
    //     $('.btn-add-3-2').fadeIn();
    //     $('.question li').removeClass('selected');
    //     setUp();
    // });


  $('.task-6 .question').hide();
  $('.task-6 .question-1').show();
  $('.task-6 .task-3-feedback').hide();

  $('.task-6 .question-1 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
    $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-1 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-1').on('click', function () {
        $('.task-6 .question-1').fadeOut('fast');
        $(".task-6 .question-2").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-1 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-1').on('click', function () {
        $('.task-6 .question-1 .feedback-fail').slideUp();
        $('.task-6 .question-1 li').removeClass("wrong-answer");
          $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-2 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
      $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-2 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-2').on('click', function () {
        $('.task-6 .question-2').fadeOut('fast');
        $(".task-6 .question-3").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-2 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-2').on('click', function () {
        $('.task-6 .question-2 .feedback-fail').slideUp();
        $('.task-6 .question-2 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-3 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-3 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-3').on('click', function () {
        $('.task-6 .question-3').fadeOut('fast');
        $(".task-6 .question-4").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-3 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-3').on('click', function () {
        $('.task-6 .question-3 .feedback-fail').slideUp();
        $('.task-6 .question-3 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-4 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-4 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-4').on('click', function () {
        $('.task-6 .question-4').fadeOut('fast');
        $(".task-6 .question-5").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-4 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-4').on('click', function () {
        $('.task-6 .question-4 .feedback-fail').slideUp();
        $('.task-6 .question-4 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });


  $('.task-6 .question-5 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-5 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-5').on('click', function () {
        $('.task-6 .question-5').fadeOut('fast');
        $(".task-6 .question-6").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-5 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-5').on('click', function () {
        $('.task-6 .question-5 .feedback-fail').slideUp();
        $('.task-6 .question-5 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-6 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-6 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-6').on('click', function () {
        $('.task-6 .question-6').fadeOut('fast');
        $(".task-6 .question-7").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-6 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-6').on('click', function () {
        $('.task-6 .question-6 .feedback-fail').slideUp();
        $('.task-6 .question-6 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-7 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-7 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-7').on('click', function () {
        $('.task-6 .question-7').fadeOut('fast');
        $(".task-6 .question-8").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-7 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-7').on('click', function () {
        $('.task-6 .question-7 .feedback-fail').slideUp();
        $('.task-6 .question-7 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-8 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-8 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-8').on('click', function () {
        $('.task-6 .question-8').fadeOut('fast');
        $(".task-6 .question-9").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-8 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-8').on('click', function () {
        $('.task-6 .question-8 .feedback-fail').slideUp();
        $('.task-6 .question-8 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-9 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-9 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-9').on('click', function () {
        $('.task-6 .question-9').fadeOut('fast');
        $(".task-6 .question-10").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-9 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-9').on('click', function () {
        $('.task-6 .question-9 .feedback-fail').slideUp();
        $('.task-6 .question-9 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-10 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-10 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-10').on('click', function () {
        $('.task-6 .question-10').fadeOut('fast');
        $(".task-6 .question-11").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-10 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-10').on('click', function () {
        $('.task-6 .question-10 .feedback-fail').slideUp();
        $('.task-6 .question-10 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-11 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-11 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-11').on('click', function () {
        $('.task-6 .question-11').fadeOut('fast');
        $(".task-6 .question-12").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-11 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-11').on('click', function () {
        $('.task-6 .question-11 .feedback-fail').slideUp();
        $('.task-6 .question-11 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-12 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-12 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-12').on('click', function () {
        $('.task-6 .question-12').fadeOut('fast');
        $(".task-6 .question-13").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-12 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-12').on('click', function () {
        $('.task-6 .question-12 .feedback-fail').slideUp();
        $('.task-6 .question-12 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-13 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-13 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-13').on('click', function () {
        $('.task-6 .question-13').fadeOut('fast');
        $(".task-6 .question-14").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-13 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-13').on('click', function () {
        $('.task-6 .question-13 .feedback-fail').slideUp();
        $('.task-6 .question-13 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-14 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-14 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-14').on('click', function () {
        $('.task-6 .question-14').fadeOut('fast');
        $(".task-6 .question-15").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-14 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-14').on('click', function () {
        $('.task-6 .question-14 .feedback-fail').slideUp();
        $('.task-6 .question-14 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-15 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-15 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-15').on('click', function () {
        $('.task-6 .question-15').fadeOut('fast');
        $(".task-6 .question-16").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-15 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-15').on('click', function () {
        $('.task-6 .question-15 .feedback-fail').slideUp();
        $('.task-6 .question-15 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-16 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-16 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-next-16').on('click', function () {
        $('.task-6 .question-16').fadeOut('fast');
        $(".task-6 .question-17").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-16 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-16').on('click', function () {
        $('.task-6 .question-16 .feedback-fail').slideUp();
        $('.task-6 .question-16 li').removeClass("wrong-answer");
                $('.question li').removeClass('avoid-clicks');
      });
    }
  });

  $('.task-6 .question-17 li').on('click', function () {
    $(this).addClass('selected').siblings('.task-6 .question li').removeClass('selected');
        $(this).siblings('.question li').addClass('avoid-clicks');
    if($(this).data("value") == true){
      $(this).addClass("correct-answer");
      $('.task-6 .question-17 .feedback-success').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.interview-tennie .task-6 .btn-next-17').on('click', function () {
        $('.interview-tennie').fadeOut('fast');
        $(".application-sharon").fadeIn();
      });
    }
    else {
      $(this).addClass("wrong-answer");
      $('.task-6 .question-17 .feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
      $('.task-6 .btn-try-again-17').on('click', function () {
        $('.task-6 .question-17 .feedback-fail').slideUp();
        $('.task-6 .question-17 li').removeClass("wrong-answer");
          $('.question li').removeClass('avoid-clicks');
      });
    }
  });


});
