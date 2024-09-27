@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-1-2.svg" alt="Progress Bar Section One" />
        </header>

        <section class="top">
            <div class="main-content centre-col">


                <h2 class="fadeUp t-animated"><span>ELECTRONIC FUNDS TRANSFER</span>PAYMENT SERVICES & DIGITAL WALLETS</h2>
                <p class="fadeUp t-animated">Another online option is to use a <span>payment service</span> and <span>digital wallet</span> such as PayPal or Apple Pay, which is linked to a credit or debit card. Payment services and digital wallets make it easier to pay online because you don’t have to type in card details or store them on every website. In shops, contactless technology makes it easier to pay.</p>
                <div class="row centred-text">
                    <div class="md-col-1-2 lg-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/logo-paypal.svg" alt="PayPal Logo" />
                        </div>
                    </div>
                    <div class="md-col-1-2 lg-col-1-2">
                        <div class="column-content">
                            <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/logo-applepay.svg" alt="Apple Pay Logo" />
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <section class="bottom">
            <div class="main-content centre-col">
                <p class="">Select the most appropriate electronic payment type for each of the transactions:</p>

                <div class="task task-2 ">
                    <div class="task-2-content clearfix">

                        <div id="#scenario-1" class="scenario scenario-1">

                            <div class="scenario-question scenario-1-question">

                                <div class="row">
                                      <p class="centred-text ">You need to pay for a coffee, but have just realised that you left your wallet at home.</p>
                                </div>
                                <div class="row options options-scenario-1 centred-text">
                                    <div class="md-col-1-2">
                                        <p class=""><a href="#scenario-1" data-value="credit-card" class="btn btn-tertiary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class=""><a href="#scenario-1" data-value="debit-card" class="btn btn-tertiary">DEBIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                        <p class=""><a href="#scenario-1" data-value="paypal" class="btn btn-tertiary">PayPal</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class=""><a href="#scenario-1" data-value="apple-pay" class="btn btn-tertiary">Apple Pay</a></p>
                                    </div>
                                </div>
                            </div>


                            <div class="feedback feedback-scenario-1">
                                <div class="scenario-1-feedback-negative hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class="" >That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta "><a href="#scenario-1" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-1-feedback-positive hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="" >That's correct! Mobile payment systems such as Apple Pay are great for when you need to quickly buy something on the go.</p>
                                    <p class="cta centre-cta "><a href="#scenario-2" class="btn btn-primary btn-next-question animsition-link">next</a></p>
                                </div>
                            </div>

                        </div>


                        <div id="#scenario-2" class="scenario scenario-2 hidden ">

                            <div class="scenario-question scenario-2-question">

                                <div class="row">
                                  <p class="" class="centred-text">You need to buy a new TV online, but it's quite expensive.</p>
                                </div>
                                <div class="row options options-scenario-2 centred-text">
                                    <div class="md-col-1-2">
                                        <p class=""><a href="#scenario-2" data-value="credit-card" class="btn btn-tertiary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class=""><a href="#scenario-2" data-value="debit-card" class="btn btn-tertiary">DEBIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                        <p class=""><a href="#scenario-2" data-value="paypal" class="btn btn-tertiary">PayPal</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class=""><a href="#scenario-2" data-value="apple-pay" class="btn btn-tertiary">Apple Pay</a></p>
                                    </div>
                                </div>
                            </div>


                            <div class="feedback feedback-scenario-2">
                                <div class="scenario-2-feedback-negative hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class=""  >That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta "><a href="#scenario-1" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-2-feedback-positive hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="" >Credit cards often offer their own warranty protection and can further protect you against a problem with purchases, such as a faulty TV.</p>
                                    <p class="cta centre-cta "><a href="#scenario-2" class="btn btn-primary btn-next-question animsition-link">next</a></p>
                                </div>
                            </div>

                        </div>

                        <div id="#scenario-3" class="scenario scenario-3 hidden">
                            <div class="scenario-question scenario-3-question">

                                <div class="row">
                                  <p class="centred-text ">Your friend just bought a cinema ticket for the latest Star Wars film and told you to pay them back later.</p>
                                </div>
                                <div class="row options options-scenario-3 centred-text">
                                    <div class="md-col-1-2">
                                      <p class=""><a href="#scenario-3" data-value="credit-card" class="btn btn-tertiary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                      <p class=""><a href="#scenario-3" data-value="debit-card" class="btn btn-tertiary">DEBIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                      <p class=""><a href="#scenario-3" data-value="paypal" class="btn btn-tertiary">PayPal</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                      <p class=""><a href="#scenario-3" data-value="apple-pay" class="btn btn-tertiary">Apple Pay</a></p>
                                    </div>
                               </div>

                            </div>
                            <div class="feedback feedback-scenario-3">
                                <div class="scenario-3-feedback-negative hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class="">That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta "><a href="#scenario-3" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-3-feedback-positive hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="">Sending money through Paypal or an alternative online payments system can be a quick and safe method for small transfers to friends.</p>
                                    <p class="cta centre-cta "><a href="#scenario-3" class="btn btn-primary btn-next-question animsition-link">next</a></p>
                                </div>
                            </div>

                        </div>

                        <div id="#scenario-4" class="scenario scenario-4 hidden">
                            <div class="scenario-question scenario-4-question">

                                <div class="row">
                                  <p class="centred-text ">You need to quickly withdraw some cash from an ATM.</p>
                                </div>
                                <div class="row options options-scenario-4 centred-text">
                                    <div class="md-col-1-2">
                                        <p class=""><a href="#scenario-4" data-value="credit-card" class="btn btn-tertiary">CREDIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class=""><a href="#next-section" data-value="debit-card" class="btn btn-tertiary">DEBIT CARD</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                        <p class=""><a href="#scenario-4" data-value="paypal" class="btn btn-tertiary">PayPal</a></p>
                                    </div>
                                    <div class="md-col-1-2">
                                         <p class=""><a href="#scenario-4" data-value="apple-pay" class="btn btn-tertiary">Apple Pay</a></p>
                                    </div>
                               </div>

                            </div>
                            <div class="feedback feedback-scenario-4 ">
                                <div class="scenario-4-feedback-negative hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                    <p class="" >That's not quite right... Read the proposed scenario again.</p>
                                    <p class="cta centre-cta "><a href="#scenario-4" class="btn btn-primary btn-try-again animsition-link">try again</a></p>
                                </div>
                                <div class="scenario-4-feedback-positive hidden">
                                    <img class="" src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                    <p class="">You usually will not have to pay additional fees (such as handling and interest fees) when using a debit card, so they are usually best for withdrawing cash from ATMs.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                 <div id="next-section" class="next-section hidden ">
                    <p class="centred-text ">Well done! Let's move on to the next topic.</p>
                    <p class="cta centre-cta "><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                </div>
            </div>
           </div>

        </section>
        @endsection

        @section('javascript')

        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 2);
            oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
        </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })

           $( ".options-scenario-1 a" ).click(function() {
                dataValue = $(this).data('value');
                if(dataValue==='apple-pay') {
                    $('.scenario-1-feedback-positive').fadeIn();
                    $('.scenario-1-question').fadeOut();
                    $(".btn-next-question" ).click(function(){
                        $('.scenario-1').fadeOut();
                        $('.scenario-1-feedback-positive').fadeOut();
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
                        $('.scenario-2-feedback-positive').fadeOut();
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
                if(dataValue==='paypal') {
                    $('.scenario-3-feedback-positive').fadeIn();
                    $('.scenario-3-question').fadeOut();
                    $(".btn-next-question" ).click(function(){
                        $('.scenario-3').fadeOut();
                        $('.scenario-3-feedback-positive').fadeOut();
                        $('.scenario-4').fadeIn();
                    });
                } else {
                    $('.scenario-3-question').fadeOut();
                    $('.scenario-3-feedback-negative').fadeIn();
                    $(".btn-try-again" ).click(function(){
                        $('.scenario-3-feedback-negative').fadeOut();
                        $('.scenario-3-question').fadeIn();
                    });
                }
            });


           $( ".options-scenario-4 a" ).click(function() {
                dataValue = $(this).data('value');
                if(dataValue==='debit-card') {
                    $('.scenario-4-feedback-positive').fadeIn();
                    $('.scenario-4-question').fadeOut();
                    $('.next-section').slideDown();
                    oBadges.stepCompleted();
                } else {
                    $('.scenario-4-feedback-negative').fadeIn();
                    $('.scenario-4-question').fadeOut();
                    $(".btn-try-again" ).click(function(){
                      $('.scenario-4-feedback-negative').fadeOut();
                      $('.scenario-4-question').fadeIn();
                    });
                }
            });

            </script>

            @endsection
