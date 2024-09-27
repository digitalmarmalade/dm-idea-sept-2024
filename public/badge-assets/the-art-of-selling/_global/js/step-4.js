



$(function () {

      var rightAnswers = 0;

      $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5, #answer_1_6, #answer_1_7").draggable({

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
              $(".after-drop-1").css('display','block');

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide')
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

          accept: "#answer_1_5",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable2 .before-drop").fadeOut(10);
              $("#droppable2").addClass("dropped");
              $(".after-drop-2").css('display','block');


              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide')
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");


              }

          }

      });

      $("#droppable3").droppable({

          accept: "#answer_1_7",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');
              $("#droppable3 .before-drop").fadeOut(10);
              $("#droppable3").addClass("dropped");
              $(".after-drop-3").css('display','block');

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide')
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");


              }

          }

      });

      $("#droppable4").droppable({

          accept: "#answer_1_6",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable4 .before-drop").fadeOut(10);
              $("#droppable4").addClass("dropped");
              $(".after-drop-4").css('display','block');

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide')
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");

              }

          }

      });

      $("#droppable5").droppable({

          accept: "#answer_1_2",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable5 .before-drop").fadeOut(10);
              $("#droppable5").addClass("dropped");
              $(".after-drop-5").css('display','block');

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide')
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");

              }

          }

      });

      $("#droppable6").droppable({

          accept: "#answer_1_1",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable6 .before-drop").fadeOut(10);
              $("#droppable6").addClass("dropped");
              $(".after-drop-6").css('display','block');

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide')
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");

              }

          }

      });

      $("#droppable7").droppable({

          accept:"#answer_1_4",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable7 .before-drop").fadeOut(10);
              $("#droppable7").addClass("dropped");
              $(".after-drop-7").css('display','block');

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 7) {
                  $(".feedback").removeClass('hide');
                  $(".drag-options").css('display', 'none');
                  $(".droppable-zone").css('width', '100%');
                  $(".droppable-zone p").css('width', '100%');
                  $(".droppable-zone p").css('display', 'block');
                  $("html, body").animate({scrollTop: $(document).height()}, "slow");

              }

          }

      });


  });
