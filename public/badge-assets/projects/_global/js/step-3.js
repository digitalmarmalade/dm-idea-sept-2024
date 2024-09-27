$('.next-box').hide();
$('.after-drop').hide();

$(function() {

                var rightAnswers = 0;

          $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5,#answer_1_6, #answer_1_7").draggable({

              revert: "invalid",

              drag: function(event, ui) {

                  $('body').addClass('dragging');

              },

              stop: function(event, ui) {

                  $('body').removeClass('dragging');

              }

          });

          $("#droppable1" ).droppable({

              accept: "#answer_1_7",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');

                    $("#droppable1 .before-drop").fadeOut(10);
                    $("#droppable1").addClass("dropped");
                    $("#droppable1 .after-drop").fadeIn();

                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                      $( ".next-box" ).slideDown();
                      $(".drag-options").css('display','none');
                      $(".droppable-zone").css('width','100%');
                      $(".droppable-zone p").css('width','100%');
                      $(".droppable-zone p").css('display','inline-flex');
                      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                      oBadges.stepCompleted();

                  }

              }

          });

          $("#droppable2" ).droppable({

              accept: "#answer_1_4",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');

                  $("#droppable2 .before-drop").fadeOut(10);
                  $("#droppable2").addClass("dropped");
                  $("#droppable2 .after-drop").fadeIn();


                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                       $( ".next-box" ).slideDown();
                       $(".drag-options").css('display','none');
                       $(".droppable-zone").css('width','100%');
                      $(".droppable-zone p").css('width','100%');
                                            $(".droppable-zone p").css('display','inline-flex');
                      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                      oBadges.stepCompleted();

                  }

              }

          });

         $("#droppable3" ).droppable({

              accept: "#answer_1_3",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');
                  $("#droppable3 .before-drop").fadeOut(10);
                  $("#droppable3").addClass("dropped");
                  $("#droppable3 .after-drop").fadeIn();

                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                       $( ".next-box" ).slideDown();
                       $(".drag-options").css('display','none');
                       $(".droppable-zone").css('width','100%');
                        $(".droppable-zone p").css('width','100%');
                                              $(".droppable-zone p").css('display','inline-flex');
                      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                       oBadges.stepCompleted();

                  }

              }

          });

          $("#droppable4" ).droppable({

              accept: "#answer_1_1",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');

                  $("#droppable4 .before-drop").fadeOut(10);
                  $("#droppable4").addClass("dropped");
                  $("#droppable4 .after-drop").fadeIn();

                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                       $( ".next-box" ).slideDown();
                       $(".drag-options").css('display','none');
                       $(".droppable-zone").css('width','100%');
                    $(".droppable-zone p").css('width','100%');
                                          $(".droppable-zone p").css('display','inline-flex');
                      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                        oBadges.stepCompleted();

                  }

              }

          });

          $("#droppable5" ).droppable({

              accept: "#answer_1_6",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');

                  $("#droppable5 .before-drop").fadeOut(10);
                  $("#droppable5").addClass("dropped");
                  $("#droppable5 .after-drop").fadeIn();

                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                       $( ".next-box" ).slideDown();
                       $(".drag-options").css('display','none');
                       $(".droppable-zone").css('width','100%');
                        $(".droppable-zone p").css('width','100%');
                                              $(".droppable-zone p").css('display','inline-flex');
                       $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                      oBadges.stepCompleted();

                  }

              }

          });

          $("#droppable6" ).droppable({

              accept: "#answer_1_2",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');

                  $("#droppable6 .before-drop").fadeOut(10);
                  $("#droppable6").addClass("dropped");
                  $("#droppable6 .after-drop").fadeIn();


                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                    $(".drag-options").css('display','none');
                    $(".droppable-zone").css('width','100%');
                  $(".droppable-zone p").css('width','100%');
                                        $(".droppable-zone p").css('display','inline-flex');
                      $( ".next-box" ).slideDown();
                      $("html, body").animate({ scrollTop: $(document).height() }, "slow");
                      oBadges.stepCompleted();

                  }

              }

          });

          $("#droppable7" ).droppable({

              accept: "#answer_1_5",

              drop: function(event, ui) {

                  var currentDraggable = 	$(ui.draggable).attr('id');

                  $("#droppable7 .before-drop").fadeOut(10);
                  $("#droppable7").addClass("dropped");
                  $("#droppable7 .after-drop").fadeIn();


                  ui.draggable.remove();

                  rightAnswers++;

                  if(rightAnswers === 7) {
                    $(".drag-options").css('display','none');
                    $(".droppable-zone").css('width','100%');
                                        $(".droppable-zone p").css('width','100%');
                                                              $(".droppable-zone p").css('display','inline-flex');
                       $( ".next-box" ).slideDown();
                      oBadges.stepCompleted();

                  }

              }

          });


      });
