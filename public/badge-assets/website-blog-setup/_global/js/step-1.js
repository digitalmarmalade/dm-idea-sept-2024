$(function () {
    var answers = [];
    var success = ['2', '5', '6'];
    var fail = ['1', '3', '4'];
    var wrongAnswers = 0;

    $('li a').click(function (e) {
        $(this).toggleClass('selected');
        e.preventDefault();
    });

    $(".jsCheck").click(function () {



        //pussh all the selected boxes values into the answer array
        dataValue = $('a.selected').each(function () {
            answers.push($(this).attr('data-value'));
        });

        //if selected boxes are less then 3 you fail
        if (answers.length < 3) {
            wrongAnswers = 1;
        }

        //if you already failed don't run
        if (wrongAnswers != 1) {
            //if selected boxes dont match the scopes you fail
            $.each(answers, function (index, value) {
                if ($.inArray(value, success) < 0) {
                    wrongAnswers = 1;
                }
            });
        }

        //if you already failed don't run
        if (wrongAnswers != 1) {
            //if selected boxes contain a creep you fail
            $.each(fail, function (index, value) {
                //console.log(value, answers[index], $.inArray(value,answers));
                if ($.inArray(value, fail) < 0) {
                    wrongAnswers = 1;
                }
            });
        }

        //if you fail show fail-box
        if (wrongAnswers > 0) {
            $('.jsCheck').hide();

            $('li:nth-child(1) .selected').toggleClass('selected-wrong');
            $('li:nth-child(2) .selected').toggleClass('selected-right');
            $('li:nth-child(3) .selected').toggleClass('selected-wrong');
            $('li:nth-child(4) .selected').toggleClass('selected-wrong');
            $('li:nth-child(5) .selected').toggleClass('selected-right');
            $('li:nth-child(6) .selected').toggleClass('selected-right');
            $('.feedback-fail').slideDown();
            $("html, body").animate({scrollTop: $(document).height()});
            $("li a").css("pointer-events", "none");
            $(".jsTryAgain").click(function () {
                answers = [];
                wrongAnswers = 0;
                $('.jsCheck').show();
                $('li a').removeClass('selected');
                $('li a').removeClass('selected-wrong');
                $('li a').removeClass('selected-right');
                $('.feedback-fail').slideUp();
                $("li a").css("pointer-events", "auto");

            });
        } else {
            answers = [];
            wrongAnswers = 0;
            $('li:nth-child(1) .selected').toggleClass('selected-disabled');
            $('li:nth-child(2) .selected').toggleClass('selected-right');
            $('li:nth-child(3) .selected').toggleClass('selected-disabled');
            $('li:nth-child(4) .selected').toggleClass('selected-disabled');
            $('li:nth-child(5) .selected').toggleClass('selected-right');
            $('li:nth-child(6) .selected').toggleClass('selected-right');
            $('.feedback-success').slideDown();

            // oBadges.stepCompleted();
            $('.jsCheck').hide();
            $("html, body").animate({scrollTop: $(document).height()});
        }
    });
});

$(function () {

      var rightAnswers = 0;

      $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4").draggable({

          revert: "invalid",

          drag: function (event, ui) {

              $('body').addClass('dragging');

          },

          stop: function (event, ui) {

              $('body').removeClass('dragging');

          }

      });

      $("#droppable1").droppable({

          accept: "#answer_1_3",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable1 .before-drop").fadeOut(10);
              $("#droppable1").addClass("dropped");
              $("#droppable1 .after-drop").fadeIn();

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                  $(".feedback").slideDown();
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");
                  oBadges.stepCompleted();

              }

          }

      });

      $("#droppable2").droppable({

          accept: "#answer_1_2",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable2 .before-drop").fadeOut(10);
              $("#droppable2").addClass("dropped");
              $("#droppable2 .after-drop").fadeIn();


              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                  $(".feedback").slideDown();
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");


              }

          }

      });

      $("#droppable3").droppable({

          accept: "#answer_1_4",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');
              $("#droppable3 .before-drop").fadeOut(10);
              $("#droppable3").addClass("dropped");
              $("#droppable3 .after-drop").fadeIn();

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                  $(".feedback").slideDown();
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");


              }

          }

      });

      $("#droppable4").droppable({

          accept: "#answer_1_1",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable4 .before-drop").fadeOut(10);
              $("#droppable4").addClass("dropped");
              $("#droppable4 .after-drop").fadeIn();

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                  $(".feedback").slideDown();
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");

              }

          }

      });

  });
