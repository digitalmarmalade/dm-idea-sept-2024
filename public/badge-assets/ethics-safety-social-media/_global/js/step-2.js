$(function () {

  $('.question-1 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-1 .feedback').fadeIn();

         $(".btn-next-1" ).click(function(){
           $('.question-1').hide();
           $('.question-2').fadeIn();
           $('.steps li:nth-child(2)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-2 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-2 .feedback').fadeIn();

         $(".btn-next-2" ).click(function(){
           $('.question-2').hide();
           $('.question-3').fadeIn();
          $('.steps li:nth-child(3)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-3 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-3 .feedback').fadeIn();
         $(".btn-next-3" ).click(function(){
           $('.question-3').hide();
           $('.question-4').fadeIn();
          $('.steps li:nth-child(4)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });


    $('.question-4 a').click(function(e) {
      e.preventDefault();
      dataValue = $(this).data('value');
      if(dataValue == true ){
        $(this).addClass('selected selected-right');
        $('.question-4 .feedback').fadeIn();

           $(".btn-next-4" ).click(function(){
             $('.question-4').hide();
             $('.question-5').fadeIn();
            $('.steps li:nth-child(5)').addClass('on');
         });
      }else{
        $(this).addClass('selected selected-wrong');
      }
    });


  $('.question-5 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-5 .feedback').fadeIn();

         $(".btn-next-5" ).click(function(){
           $('.question-5').hide();
           $('.question-6').fadeIn();
          $('.steps li:nth-child(6)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-6 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-6 .feedback').fadeIn();

         $(".btn-next-6" ).click(function(){
           $('.question-6').hide();
           $('.question-7').fadeIn();
          $('.steps li:nth-child(7)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-7 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-7 .feedback').fadeIn();

         $(".btn-next-7" ).click(function(){
           $('.question-7').hide();
           $('.question-8').fadeIn();
          $('.steps li:nth-child(8)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-8 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-8 .feedback').fadeIn();

         $(".btn-next-8" ).click(function(){
           $('.question-8').hide();
           $('.question-9').fadeIn();
           $('.steps li:nth-child(9)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-9 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-9 .feedback').fadeIn();

         $(".btn-next-9" ).click(function(){
           $('.question-9').hide();
           $('.question-10').fadeIn();
           $('.steps li:nth-child(10)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-10 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-10 .feedback').fadeIn();
         $(".btn-next-10" ).click(function(){
           $('.question-10').hide();
           $('.question-11').fadeIn();
           $('.steps li:nth-child(11)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-11 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-11 .feedback').fadeIn();

         $(".btn-next-11" ).click(function(){
          oBadges.stepCompleted();
           $('.task').hide();
           $('#general-guidelines').fadeIn();
          $("html, body").animate({scrollBottom: $(document).height()});
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

});
