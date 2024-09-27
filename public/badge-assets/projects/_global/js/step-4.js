$('.next-box').hide();

$( ".scenario-1 ul li" ).click(function() {
      $('.scenario-1 ul').fadeOut(10);
     dataValue = $(this).data('value');
     if(dataValue === 'correct') {
        $('.scenario-1 img.question-img').fadeOut(10);
         $('.scenario-1 .answer-correct').fadeIn();
        $('.scenario-1 .answer-incorrect').fadeOut(10);
         $('.scenario-1 img.question-img').fadeOut(10);

         $(".cta-next-scenario" ).click(function(){
              $('.scenario-1 ul').hide();
             $('.scenario-1 .answer-correct img').hide();
             $(this).hide();
             $('.scenario-2').slideDown(1500);
             $('.scenarios-steps li:nth-child(2)').addClass('completed');
         });
     } else {
        $('.scenario-1 img.question-img').fadeOut(10);
         $('.scenario-1 .answer-correct').fadeOut(10);
         $('.scenario-1 .answer-incorrect').fadeIn();
         $(".scenario-1 .cta-try-again" ).click(function(){
            $('.scenario-1 ul').slideDown(500);
             $('.scenario-1 .answer-incorrect').fadeOut(10);
             $('.scenario-1 img.question-img').fadeIn();
         });
     }
 });

 $( ".scenario-2 ul li" ).click(function() {
      $('.scenario-1 img.question-img').hide();
      $('.scenario-2 ul').fadeOut(10);
      dataValue = $(this).data('value');
      if(dataValue === 'correct') {
         $('.scenario-2 img.question-img').fadeOut(10);
          $('.scenario-2 .answer-correct').fadeIn();
         $('.scenario-2 .answer-incorrect').fadeOut(10);
          $('.scenario-2 img.question-img').fadeOut(10);
          $(".cta-next-scenario" ).click(function(){
              $('.scenario-2 .answer-correct img').hide();
              $(this).hide();
              $('.scenario-3').slideDown(1500);
              $('.scenarios-steps li:nth-child(3)').addClass('completed');
          });
      } else {
         $('.scenario-2 img.question-img').fadeOut(10);
          $('.scenario-2 .answer-correct').fadeOut(10);
          $('.scenario-2 .answer-incorrect').fadeIn();
          $(".scenario-2 .cta-try-again" ).click(function(){
              $('.scenario-2 .answer-incorrect').fadeOut(10);
              $('.scenario-2 img.question-img').fadeIn();
              $('.scenario-2 ul').slideDown(500);
          });
      }
  });

  $( ".scenario-3 ul li" ).click(function() {
      $('.scenario-2 img.question-img').hide();
      $('.scenario-3 ul').fadeOut(10);
       dataValue = $(this).data('value');
       if(dataValue === 'correct') {
          $('.scenario-3 img.question-img').fadeOut(10);
           $('.scenario-3 .answer-correct').fadeIn();
          $('.scenario-3 .answer-incorrect').fadeOut(10);
           $('.scenario-3 img.question-img').fadeOut(10);
           $(".cta-next-scenario" ).click(function(){
               $('.scenario-3 .answer-correct img').hide();
               $(this).hide();
               $('.scenario-4').slideDown(1500);
               $('.scenarios-steps li:nth-child(3)').addClass('completed');
           });
       } else {
          $('.scenario-3 img.question-img').fadeOut(10);
           $('.scenario-3 .answer-correct').fadeOut(10);
           $('.scenario-3 .answer-incorrect').fadeIn();
           $(".scenario-3 .cta-try-again" ).click(function(){
               $('.scenario-3 .answer-incorrect').fadeOut(10);
               $('.scenario-3 img.question-img').fadeIn();
              $('.scenario-3 ul').slideDown(500);
           });
       }
   });

   $( ".scenario-4 ul li" ).click(function() {
     $('.scenario-3 img.question-img').hide();
       $('.scenario-4 ul').fadeOut(10);
        dataValue = $(this).data('value');
        if(dataValue === 'correct') {
           $('.scenario-4 img.question-img').fadeOut(10);
            $('.scenario-4 .answer-correct').fadeIn();
           $('.scenario-4 .answer-incorrect').fadeOut(10);
            $('.scenario-4 img.question-img').fadeOut(10);
            $(".cta-next-scenario" ).click(function(){
                $('.scenario-4 .answer-correct img').hide();
                $(this).hide();
                $('.scenario-5').slideDown(1500);
                $('.scenarios-steps li:nth-child(4)').addClass('completed');
            });
        } else {
           $('.scenario-4 img.question-img').fadeOut(10);
            $('.scenario-4 .answer-correct').fadeOut(10);
            $('.scenario-4 .answer-incorrect').fadeIn();
            $(".scenario-4 .cta-try-again" ).click(function(){
                $('.scenario-4 .answer-incorrect').fadeOut(10);
                $('.scenario-4 img.question-img').fadeIn();
               $('.scenario-4 ul').slideDown(500);
            });
        }
    });

    $( ".scenario-5 ul li" ).click(function() {
      $('.scenario-4 img.question-img').hide();
        $('.scenario-5 ul').fadeOut(10);
         dataValue = $(this).data('value');
         if(dataValue === 'correct') {
            $('.scenario-5 img.question-img').fadeOut(10);
             $('.scenario-5 .answer-correct').fadeIn();
            $('.scenario-5 .answer-incorrect').fadeOut(10);
             $('.scenario-5 img.question-img').fadeOut(10);
             $(".cta-next-scenario" ).click(function(){
                 $('.scenario-5 .answer-correct img').hide();
                 $(this).hide();
                 $('.scenario-6').slideDown(1500);
                 $('.scenarios-steps li:nth-child(5)').addClass('completed');
             });
         } else {
            $('.scenario-5 img.question-img').fadeOut(10);
             $('.scenario-5 .answer-correct').fadeOut(10);
             $('.scenario-5 .answer-incorrect').fadeIn();
             $(".scenario-5 .cta-try-again" ).click(function(){
                 $('.scenario-5 .answer-incorrect').fadeOut(10);
                 $('.scenario-5 img.question-img').fadeIn();
                $('.scenario-5 ul').slideDown(500);
             });
         }
     });

     $( ".scenario-6 ul li" ).click(function() {
        $('.scenario-5 img.question-img').hide();
         $('.scenario-6 ul').fadeOut(10);
          dataValue = $(this).data('value');
          if(dataValue === 'correct') {
             $('.scenario-6 img.question-img').fadeOut(10);
              $('.scenario-6 .answer-correct').fadeIn();
             $('.scenario-6 .answer-incorrect').fadeOut(10);
              $('.scenario-6 img.question-img').fadeOut(10);
              $(".cta-next-scenario" ).click(function(){
                  $('.scenario-6 .answer-correct img').hide();
                  $(this).hide();
                  $('.next-box').slideDown(1500);
                    oBadges.stepCompleted();
                  $('.scenarios-steps li:nth-child(6)').addClass('completed');
              });
          } else {
             $('.scenario-6 img.question-img').fadeOut(10);
              $('.scenario-6 .answer-correct').fadeOut(10);
              $('.scenario-6 .answer-incorrect').fadeIn();
              $(".scenario-6 .cta-try-again" ).click(function(){
                  $('.scenario-6 .answer-incorrect').fadeOut(10);
                  $('.scenario-6 img.question-img').fadeIn();
                 $('.scenario-6 ul').slideDown();
              });
          }
      });
