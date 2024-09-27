
$(function () {

      var rightAnswers = 0;

      $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5").draggable({

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

              if (rightAnswers === 5) {
                $(".feedback").slideDown();
                $(".drop-wrapper").css('float', 'none');
                $(".drag-options").css('display', 'none');

                $(".drop-wrapper .droppable-zone").css('float', 'none');
                $(".feedback").slideDown();

              }

          }

      });

      $("#droppable2").droppable({

          accept: "#answer_1_5",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');

              $("#droppable2 .before-drop").fadeOut(10);
              $("#droppable2").addClass("dropped");
              $("#droppable2 .after-drop").fadeIn();


              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 5) {
                $(".feedback").slideDown();
              $(".drop-wrapper .droppable-zone").css('float', 'none');
                $(".drag-options").css('display', 'none');

                $(".feedback").slideDown();
              }

          }

      });

      $("#droppable3").droppable({

          accept: "#answer_1_2",

          drop: function (event, ui) {

              var currentDraggable = $(ui.draggable).attr('id');
              $("#droppable3 .before-drop").fadeOut(10);
              $("#droppable3").addClass("dropped");
              $("#droppable3 .after-drop").fadeIn();

              ui.draggable.remove();

              rightAnswers++;

              if (rightAnswers === 5) {
                $(".feedback").slideDown();
                $(".drop-wrapper .droppable-zone").css('float', 'none');
                $(".drag-options").css('display', 'none');


                $(".feedback").slideDown();
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

              if (rightAnswers === 5) {
                $(".feedback").slideDown();
                $(".drop-wrapper .droppable-zone").css('float', 'none');
                $(".drag-options").css('display', 'none');


                $(".feedback").slideDown();


              }

          }

      });


            $("#droppable5").droppable({

                accept: "#answer_1_4",

                drop: function (event, ui) {

                    var currentDraggable = $(ui.draggable).attr('id');

                    $("#droppable5 .before-drop").fadeOut(10);
                    $("#droppable5").addClass("dropped");
                    $("#droppable5 .after-drop").fadeIn();

                    ui.draggable.remove();

                    rightAnswers++;

                    if (rightAnswers === 5) {
                      $(".feedback").slideDown();
                      $(".drop-wrapper .droppable-zone").css('float', 'none');
                      $(".drag-options").css('display', 'none');

                      $(".feedback").slideDown();


                    }

                }

            });

  });
