$(function () {

  $('.question-1 a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
            $('.question-1 ul').fadeOut(100);
      $('.question-1 .feedback').fadeIn();

      // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
            $('.question-2 ul').fadeOut(100);
      $('.question-2 .feedback').fadeIn();

      // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
            $('.question-3 ul').fadeOut(100);
      $('.question-3 .feedback').fadeIn();

      // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
                $('.question-4 ul').fadeOut(100);
        $('.question-4 .feedback').fadeIn();

        // $("html, body").animate({scrollTop: $(document).height()});
           $(".next" ).click(function(){
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
            $('.question-5 ul').fadeOut(100);
      $('.question-5 .feedback').fadeIn();

      // // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
            $('.question-6 ul').fadeOut(100);
      $('.question-6 .feedback').fadeIn();

      // // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
            $('.question-7 ul').fadeOut(100);
      $('.question-7 .feedback').fadeIn();

      // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
            $('.question-8 ul').fadeOut(100);
      $('.question-8 .feedback').fadeIn();

      // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
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
            $('.question-9 ul').fadeOut(100);
      $('.question-9 .feedback').fadeIn();

      // $("html, body").animate({scrollTop: $(document).height()});
         $(".next" ).click(function(){
           $('.question-9').hide();
           $('.question-10').fadeIn();
           $('.steps li:nth-child(10)').addClass('on');
       });
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

  $('.question-10 ul a').click(function(e) {
    e.preventDefault();
    dataValue = $(this).data('value');
    if(dataValue == true ){
      $(this).addClass('selected selected-right');
      $('.question-10 ul').fadeOut(100);
      $('.question-10 .feedback').fadeIn();
    }else{
      $(this).addClass('selected selected-wrong');
    }
  });

});
