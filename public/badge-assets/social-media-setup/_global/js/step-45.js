
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

          accept: "#answer_1_1",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable1 .before-drop").fadeOut(10);
              $("#droppable1").addClass("dropped");
              $("#droppable1 .after-drop").fadeIn();

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                $(".feedback").slideDown();
                $(".drop-wrapper-snapchat").css('float', 'none');
                $(".drag-options").css('display', 'none');
                $(".droppable-zone").css('width', '100%');
                $(".dropzone").css('width', 'calc(100% - 48px)');
                $(".dropzone").css('height', '100px');
                $(".dropzone .after-drop").css('font-size', '1em');
                $(".dropzone").css('padding', '20px');

                $(".nice-one").slideDown();

              }

          }

      });

      $("#droppable2").droppable({

          accept: "#answer_1_3",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable2 .before-drop").fadeOut(10);
              $("#droppable2").addClass("dropped");
              $("#droppable2 .after-drop").fadeIn();


              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                $(".feedback").slideDown();
                $(".drop-wrapper-snapchat").css('float', 'none');
                $(".drag-options").css('display', 'none');
                $(".droppable-zone").css('width', '100%');
                $(".dropzone").css('width', 'calc(100% - 48px)');
                $(".dropzone").css('height', '100px');
                $(".dropzone .after-drop").css('font-size', '1em');
                $(".dropzone").css('padding', '20px');

                $(".nice-one").slideDown();
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
                $(".drop-wrapper-snapchat").css('float', 'none');
                $(".drag-options").css('display', 'none');
                $(".droppable-zone").css('width', '100%');
                $(".dropzone").css('width', 'calc(100% - 48px)');
                $(".dropzone").css('height', '100px');
                $(".dropzone .after-drop").css('font-size', '1em');
                $(".dropzone").css('padding', '20px');

                $(".nice-one").slideDown();
              }

          }

      });

      $("#droppable4").droppable({

          accept: "#answer_1_2",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable4 .before-drop").fadeOut(10);
              $("#droppable4").addClass("dropped");
              $("#droppable4 .after-drop").fadeIn();

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 4) {
                $(".feedback").slideDown();
                $(".drop-wrapper-snapchat").css('float', 'none');
                $(".drag-options").css('display', 'none');
                $(".droppable-zone").css('width', '100%');
                $(".dropzone").css('width', 'calc(100% - 48px)');
                $(".dropzone").css('height', '100px');
                $(".dropzone .after-drop").css('font-size', '1em');
                $(".dropzone").css('padding', '20px');

                $(".nice-one").slideDown();


              }

          }

      });

  });
