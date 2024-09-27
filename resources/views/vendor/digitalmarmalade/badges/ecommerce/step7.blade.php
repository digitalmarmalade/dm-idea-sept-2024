@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-3.svg" alt="Progress Bar Section One" />
        </header>
        <div class="supply-chain-management">
        <section class="top">
            <div class="main-content centre-col">

                <h2 class="supply-chain fadeUp t-animated">SUPPLY CHAIN MANAGEMENT</h2>
                <img class="desktop zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/supply-management-chain.svg" alt="Illustration showing a supply chain management system" />
                <img class="mobile zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/supply-management-chain-mobile.svg" alt="Illustration showing a supply chain management system" />
                <p>As well as speeding up buying and selling through EDI, companies need to be very responsive in producing and delivering their goods to customers, otherwise competitors will take their place. The process of managing everything from ordering raw materials to delivering the goods is known as <span>Supply Chain Management</span>.</p>
                <p>Using <span>Electronic Data Interchange</span> and <span>Electronic Funds Transfer</span>, companies are able to automatically pay for new raw materials. An example would be so that they can respond quickly to customer orders.</p>
                <p class="cta centre-cta zoomOut t-animated"><a href="#" class="btn btn-primary animsition-link">next</a></p>
            </div>

       </section>
       <section class="bottom">
            <div class="main-content centre-col">
                <p class="fadeUp t-animated">Drag and drop each of the five elements to the correct order in the chain:</p>
                <div class="task-9">
                    <div class="row">
                          <ul class="reset-list">
                            <li class="zoomOut t-animated"><a href="#" class="drag-option draggable" id="answer_1_2">manufacturer</a></li>
                            <li class="zoomOut t-animated"><a href="#" class="drag-option draggable" id="answer_1_4">retailer</a></li>
                            <li class="zoomOut t-animated"><a href="#" class="drag-option draggable" id="answer_1_3">wholesaler</a></li>
                            <li class="zoomOut t-animated"><a href="#" class="drag-option draggable" id="answer_1_5">consumer</a></li>
                            <li class="zoomOut t-animated"><a href="#" class="drag-option draggable" id="answer_1_1">raw-material</a></li>
                         </ul>
                    </div>
                    <div class="row dropzone">
                        <div class="md-col-1-5" id="droppable1">
                            <div class="chain-link zoomOut t-animated">
                                <p class="dropped-answers">
                                    <span>1</span>
                                </p>
                            </div>
                        </div>

                        <div class="md-col-1-5" id="droppable2">
                            <div class="chain-link zoomOut t-animated">
                               <p class="dropped-answers"><span>2</span></p>
                            </div>
                        </div>
                         <div class="md-col-1-5" id="droppable3">
                            <div class="chain-link zoomOut t-animated">
                               <p class="dropped-answers"><span>3</span></p>
                            </div>
                        </div>
                          <div class="md-col-1-5" id="droppable4">
                            <div class="chain-link zoomOut t-animated">
                              <p class="dropped-answers"><span>4</span></p>
                            </div>
                        </div>
                        <div class="md-col-1-5" id="droppable5">
                            <div class="chain-link zoomOut t-animated">
                               <p class="dropped-answers" ><span>5</span></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="next-section" class="next-section hidden">
                    <p class="lead centred-text">Well done! Let's move on to the next topic.</p>
                    <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                </div>
            </div>

        </section>

      </div>

        @endsection
        @section('javascript')

        <script>
          oBadges.setSlugAndStep('{{$url['slug']}}', 7);
          oBadges.redirectIfPreviousStepNotCompleted(6, '{{$links['last']}}');

        </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })

          $(".bottom").hide();
          $( ".cta" ).click(function() {
          $(".top").fadeOut();
          $(".bottom").fadeIn();
          });

              var config = { vFactor: 0.20, mobile: false, delay: 'once' }
              window.sr = new scrollReveal();

              $(function() {

                  var rightAnswers = 0;

            $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5").draggable({

                revert: "invalid",

                drag: function(event, ui) {

                    $('body').addClass('dragging');

                },

                stop: function(event, ui) {

                    $('body').removeClass('dragging');

                }

            });

            $("#droppable1" ).droppable({

                accept: "#answer_1_1",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');

                    $("#droppable1 .dropped-answers span").fadeOut();
                    $("#droppable1 .chain-link").addClass('chain-link-1');

                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 5) {
                        $( "#next-section" ).slideDown();
                        oBadges.stepCompleted();

                    }

                }

            });

            $("#droppable2" ).droppable({

                accept: "#answer_1_2",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');

                    $("#droppable2 .dropped-answers span").fadeOut();
                    $("#droppable2 .chain-link").addClass('chain-link-2');


                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 5) {
                         $( "#next-section" ).slideDown();
                        oBadges.stepCompleted();

                    }

                }

            });

           $("#droppable3" ).droppable({

                accept: "#answer_1_3",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');

                    $("#droppable3 .dropped-answers span").fadeOut();
                    $("#droppable3 .chain-link").addClass('chain-link-3');


                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 5) {
                         $( "#next-section" ).slideDown();
                         oBadges.stepCompleted();

                    }

                }

            });

            $("#droppable4" ).droppable({

                accept: "#answer_1_4",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');

                    $("#droppable4 .dropped-answers span").fadeOut();
                    $("#droppable4 .chain-link").addClass('chain-link-4');

                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 5) {
                         $( "#next-section" ).slideDown();
                          oBadges.stepCompleted();

                    }

                }

            });

            $("#droppable5" ).droppable({

                accept: "#answer_1_5",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');

                    $("#droppable5 .dropped-answers span").fadeOut();
                    $("#droppable5 .chain-link").addClass('chain-link-5');

                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 5) {
                         $( "#next-section" ).slideDown();
                        oBadges.stepCompleted();

                    }

                }

            });


        });

        </script>

        @endsection
