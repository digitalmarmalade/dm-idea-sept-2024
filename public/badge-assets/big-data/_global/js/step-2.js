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

          accept: "#answer_1_2",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable1 .before-drop").fadeOut(10);
              $("#droppable1").addClass("dropped");
              $(".after-drop-1").css('display','block');

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

          accept: "#answer_1_1",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable2 .before-drop").fadeOut(10);
              $("#droppable2").addClass("dropped");
              $(".after-drop-2").css('display','block');


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
              $(".after-drop-3").css('display','block');

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

          accept: "#answer_1_3",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable4 .before-drop").fadeOut(10);
              $("#droppable4").addClass("dropped");
              $(".after-drop-4").css('display','block');

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
