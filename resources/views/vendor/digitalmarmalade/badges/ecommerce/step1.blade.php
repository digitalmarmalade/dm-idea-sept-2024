@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-1-1.svg" alt="Progress Bar Section One" />
        </header>

        <section class="top">
            <div class="main-content centre-col">

                <h2 class="fadeUp t-animated"><span>ELECTRONIC FUNDS TRANSFER</span>CREDIT & DEBIT CARDS</h2>
                <p class="fadeUp t-animated">In order for eCommerce to work effectively it requires quick, secure payment methods so the goods that customers purchase can be sent to them straightaway. Online payments are often done using a <span>Credit Card</span> or <span>Debit Card</span>.</p>
                <div class="row">
                    <div class="md-col-1-2 centred-text">
                        <div class="column-content">
                           <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/credit-card.svg" alt="Credit Card illustration" />
                            <h3 class="fadeUp t-animated">Credit Cards</h3>
                            <p class="fadeUp t-animated">Credit Cards enable you to buy items and pay for them later. Credit Cards also usually provide protection so if the goods don’t arrive you can get your money back.</p>
                        </div>
                    </div>
                    <div class="md-col-1-2 centred-text">
                         <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/debit-card.svg" alt="Debit Card illustration" />
                            <h3 class="fadeUp t-animated">Debit Cards</h3>
                            <p class="fadeUp t-animated">Debit Cards take the money straight out of your bank account.</p>
                        </div>
                    </div>
                </div>
            </div>
         </section>

        <section class="bottom">
            <div class="main-content centre-col">
                <p>Select the correct electronic payment type for each of the transactions:</p>
                <div class="task task-1">
                    <div class="task-1-content clearfix">

                        <div id="#scenario-1" class="scenario scenario-1">
                            <div class="scenario-question scenario-1-question">
                                <div class="row">
                                   <div class="md-col-1-2 centred-text">
                                      <p>Pay for a pair of trainers with funds immediately taken from your bank account</p>
                                    </div>
                                    <div class="md-col-1-2 centred-text">
                                      <img src="/badge-assets/{{$url['slug']}}/_global/img/trainers.svg" alt="Illustration of a pair of trainers" />
                                    </div>
                                </div>
                                <div class="row options-scenario-1 centred-text">
                                    <div class="md-col-1-2">
                                      <p><a href="#scenario-1" data-value="credit-card" class="btn btn-secondary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                      <p><a href="#scenario-1" data-value="debit-card" class="btn btn-secondary">DEBIT CARD</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback feedback-scenario-1">
                                <div class="scenario-1-feedback-negative hidden ">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class="centred-text ">That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta "><a href="#scenario-1" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-1-feedback-positive hidden ">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="centred-text ">That's correct! If you pay with a debit card the value of the purchase will be immediately debited from your account.</p>
                                    <p class="cta centre-cta "><a href="#scenario-2" class="btn btn-primary btn-next-question animsition-link">next</a></p>
                                </div>
                            </div>
                        </div>


                        <div id="#scenario-2" class="scenario scenario-2 hidden">
                            <div class="scenario-question scenario-2-question">
                                <div class="row">
                                   <div class="md-col-1-2 centred-text">
                                      <p>Purchase groceries online to pay at a later date</p>
                                    </div>
                                    <div class="md-col-1-2 centred-text">
                                      <img src="/badge-assets/{{$url['slug']}}/_global/img/groceries.svg" alt="Illustration of a bag of groceries" />
                                    </div>
                                </div>
                                <div class="row options-scenario-2 centred-text">
                                    <div class="md-col-1-2">
                                        <p><a href="#scenario-2" data-value="credit-card" class="btn btn-secondary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p><a href="#scenario-2" data-value="debit-card" class="btn btn-secondary">DEBIT CARD</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback feedback-scenario-2">
                                <div class="scenario-2-feedback-negative hidden">
                                    <img src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class="centred-text">That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta"><a href="#scenario-1" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-2-feedback-positive hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="centred-text ">That's correct! If you pay with a credit card you will be able to pay for the products at a later date.</p>
                                    <p class="cta centre-cta "><a href="#scenario-2" class="btn btn-primary btn-next-question animsition-link">next</a></p>
                                </div>
                            </div>
                        </div>

                        <div id="#scenario-3" class="scenario scenario-3 hidden">
                            <div class="scenario-question scenario-3-question">
                                <div class="row">
                                   <div class="md-col-1-2 centred-text">
                                      <p class="">If you use this card to pay for your flight you will be insured in the case of a flight cancellation.</p>
                                    </div>
                                    <div class="md-col-1-2 centred-text">
                                         <img class=""  src="/badge-assets/{{$url['slug']}}/_global/img/flight.svg" alt="Illustration of an airplane" />
                                    </div>
                                </div>
                                <div class="row options-scenario-3 centred-text">
                                    <div class="md-col-1-2">
                                        <p class="" ><a href="#next-section" data-value="credit-card" class="btn btn-secondary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class="" ><a href="#scenario-3" data-value="debit-card" class="btn btn-secondary">DEBIT CARD</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback feedback-scenario-3">
                                <div class="scenario-3-feedback-negative hidden">
                                    <img class=""  src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class="centred-text ">That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta "><a href="#scenario-1" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-3-feedback-positive hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="centred-text ">That's correct! Credit Cards offer financial protection on your purchases.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                 <div id="next-section" class="next-section hidden ">
                    <p class="centred-text lead ">Well done! Let's move on to the next topic.</p>
                    <p class=""  class="cta centre-cta "><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                </div>
            </div>

        </section>


        @endsection

        @section('javascript')

        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 1);
        </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })
          Tu.tScroll({
            't-element': '.slideLeft'
          })

           $( ".options-scenario-1 a" ).click(function() {
                dataValue = $(this).data('value');
                if(dataValue==='debit-card') {
                    $('.scenario-1-feedback-positive').fadeIn();
                    $('.scenario-1-question').fadeOut();
                    $(".btn-next-question" ).click(function(){
                        $('.scenario-1').fadeOut();
                        $('.scenario-2').fadeIn();
                    });
                } else {
                    $('.scenario-1-feedback-negative').fadeIn();
                    $('.scenario-1-question').fadeOut();
                    $(".btn-try-again" ).click(function(){
                        $('.scenario-1-feedback-negative').fadeOut();
                        $('.scenario-1-question').fadeIn();
                    });
                }
            });

            $( ".options-scenario-2 a" ).click(function() {
                dataValue = $(this).data('value');
                if(dataValue==='credit-card') {
                    $('.scenario-2-feedback-positive').fadeIn();
                    $('.scenario-2-question').fadeOut();
                    $(".btn-next-question" ).click(function(){
                        $('.scenario-2').fadeOut();
                        $('.scenario-3').fadeIn();
                    });
                } else {
                    $('.scenario-2-feedback-negative').fadeIn();
                    $('.scenario-2-question').fadeOut();
                    $(".btn-try-again" ).click(function(){
                        $('.scenario-2-feedback-negative').fadeOut();
                        $('.scenario-2-question').fadeIn();
                    });
                }
            });

           $( ".options-scenario-3 a" ).click(function() {
                dataValue = $(this).data('value');
                if(dataValue==='credit-card') {
                    $('.scenario-3-feedback-positive').fadeIn();
                    $('.scenario-3-question').fadeOut();
                    $('.next-section').slideDown();
                    oBadges.stepCompleted();
                    $(".btn-next-question" ).click(function(){
                      $('.scenario-3-feedback-positive').fadeOut();
                    });
                } else {
                    $('.scenario-3-feedback-negative').fadeIn();
                    $('.scenario-3-question').fadeOut();
                    $(".btn-try-again" ).click(function(){
                        $('.scenario-3-feedback-negative').fadeOut();
                        $('.scenario-3-question').fadeIn();
                    });
                }
            });


        </script>

        @endsection
