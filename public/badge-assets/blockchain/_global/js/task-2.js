

  $( function() {
    $(".hint").hide();
	  var correctAnswers;
    $( "#sortable" ).sortable({
      placeholder: "placeholder",
      containment: '.sortable-wrapper',
      helper: 'clone',
      cursorAt: {
        left: 0,
        top:0
      },
      scroll: false,
      axis: 'y',
      create:function(){
        jQuery(this).height(jQuery(this).height() + 60);
      },

      start: function(e, ui){
        ui.placeholder.height(ui.item.height());
        $("#" + this.id).addClass('dragging');
      },

      stop: function(e, ui){
        $("#" + this.id).removeClass('dragging');
      },

      sort: function(event, ui) {
        ui.helper.css({ 'top': ui.position.top + $(window).scrollTop() + 'px' });
      }
    });

    $('body').on('click','.check-answers',function(event){
        $(".hint").fadeIn();
        correctAnswers = 0;
        event.preventDefault();
      $(".drag-option").each(function(index){
        if((index + 1) === $(this).data('answer')) {
          correctAnswers++;
        }
      });
      $('.jsCorrectGauge').removeClass('correct-gauge--1').removeClass('correct-gauge--2').removeClass('correct-gauge--3').removeClass('correct-gauge--4').removeClass('correct-gauge--5').removeClass('correct-gauge--6').removeClass('correct-gauge--7').addClass('correct-gauge--'+correctAnswers)
      $('.jsCorrectAnswers').text(correctAnswers).css('color','#00C28A');
      if(correctAnswers === 7) {
        $('.drag-option').addClass('correct-order');
        $('.check-answers').fadeOut('hide');
        $('.hint').fadeOut('hide');
        $('.jsNextStep').removeClass('hide');
        $("html, body").animate({scrollTop: $(document).height()});

      }
    });

        $('body').on("click",".hint",function(event){
          event.preventDefault();
          $( ".drag-option" ).each(function( index ) {
              if((index + 1) == $(this).data('answer')) {
                if($(this).hasClass('correct-order') === false){
                  $(this).addClass('correct-order');
                }
              }else {
                $(this).removeClass('correct-order');
              }
          });

         });
   });
