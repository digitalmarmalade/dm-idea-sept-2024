@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-1-3.svg" alt="Progress Bar Section One" />
        </header>

        <section class="top">
            <div class="main-content centre-col">


                <h2 class="fadeUp t-animated"><span>ELECTRONIC FUNDS TRANSFER</span>DIRECT DEBIT AND STANDING ORDER</h2>
                <p class="fadeUp t-animated">Not all online purchases require you to pay immediately or in full. For example, if you were buying pet insurance you wouldn't necessarily pay with a credit/debit card or payment service. You may want to set up monthly payments.</p>
                <p class="fadeUp t-animated">To do this, you could give permission to the insurance company to take the money straight out of your account. This is known as a <span>Direct Debit</span>. A different method would be a <span>Standing Order</span>, which is when you set up a payment to the company directly.</p>
                <div class="row centred-text">
                    <div class="md-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/logo-directdebit.png" alt="Direct Debit Logo" />
                            <h3 class="fadeUp t-animated">Direct Debit</h3>
                            <p class="fadeUp t-animated">Direct Debits are useful when the amount varies (such as paying a phone bill).</p>
                        </div>
                    </div>
                    <div class="md-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/logo-standingorder.png" alt="Standing Order Logo" />
                            <h3 class="fadeUp t-animated">Standing Order</h3>
                            <p class="fadeUp t-animated">Standing Orders are useful when you know how much you want to pay each month (such as a charity donation).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <section class="bottom">
           <div class="main-content centre-col">
               <p class="fadeUp">Drag and drop the payments below to the correct payment system column:</p>
               <div class="task task-3">

                   <div class="row drag-options">
                        <div class="sm-col-1-1 md-col-1-1">
                            <ul class="reset-list">
                                <li><a href="#" class="drag-option draggable" id="answer_1_1">Magazine Subscription</a></li>
                                <li><a href="#" class="drag-option draggable" id="answer_1_2">Pet Insurance</a></li>
                                <li><a href="#" class="drag-option draggable" id="answer_1_3">Gym Membership</a></li>
                                <li><a href="#" class="drag-option draggable" id="answer_1_4">Rent</a></li>
                                <li><a href="#" class="drag-option draggable" id="answer_1_5">Charity Donation</a></li>
                                <li><a href="#" class="drag-option draggable" id="answer_1_6">Savings Account</a></li>
                                <li><a href="#" class="drag-option draggable" id="answer_1_7">Gas Bill</a></li>
                             </ul>
                        </div>
                   </div>

                   <div class="row">
                        <div class="xs-col-1-2">
                            <div class="column-content">
                                <div class="dropzone" id="droppable1">
                                    <div class="dropzone-header"><img src="/badge-assets/{{$url['slug']}}/_global/img/logo-directdebit-small.svg" alt="Direct Debit Logo" /></div>
                                    <p class="dropped-answers"></p>
                                </div>
                            </div>
                       </div>
                        <div class="xs-col-1-2">
                            <div class="column-content">
                                <div class="dropzone" id="droppable2">
                                    <div class="dropzone-header"><img src="/badge-assets/{{$url['slug']}}/_global/img/logo-standingorder-small.jpg" alt="Standing Order Logo" /></div>
                                    <p class="dropped-answers"></p>
                                </div>
                            </div>
                       </div>
                    </div>


               </div>
                <div id="next-section" class="next-section hidden" >
                    <p class="centred-text">Well done! Let's move on to the next topic.</p>
                    <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                </div>

           </div>

        </section>

      @endsection
      @section('javascript')

      <script>
          oBadges.setSlugAndStep('{{$url['slug']}}', 3);
          oBadges.redirectIfPreviousStepNotCompleted(2, '{{$links['last']}}');
      </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })

          var config = { vFactor: 0.20, mobile: true, delay: 'once' }
              window.sr = new scrollReveal();

              $(function() {

                  var rightAnswers = 0;

            $("#answer_1_1, #answer_1_2, #answer_1_3, #answer_1_4, #answer_1_5, #answer_1_6, #answer_1_7").draggable({

                revert: "invalid",

                drag: function(event, ui) {

                    $('body').addClass('dragging');

                },

                stop: function(event, ui) {

                    $('body').removeClass('dragging');

                }

            });

            $("#droppable1" ).droppable({

                accept: "#answer_1_2, #answer_1_7",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');
                    var currentText = 	$(ui.draggable).text();

                    $(this).find("p.dropped-answers").append("<p class='answer'>" + currentText + "</p>");



                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 7) {
                        $( "#next-section" ).slideDown();
                        oBadges.stepCompleted();
                    }

                }

            });

            $("#droppable2" ).droppable({

                accept: "#answer_1_1, #answer_1_3, #answer_1_4, #answer_1_5, #answer_1_6",

                drop: function(event, ui) {

                    var currentDraggable = 	$(ui.draggable).attr('id');
                    var currentText = 	$(ui.draggable).text();

                   $(this).find("p.dropped-answers").append("<p class='answer'>" + currentText + "</p>");


                    ui.draggable.remove();

                    rightAnswers++;

                    if(rightAnswers === 7) {
                        $( "#next-section" ).slideDown();
                        oBadges.stepCompleted();
                    }

                }

            });

        });
      </script>
        @endsection
