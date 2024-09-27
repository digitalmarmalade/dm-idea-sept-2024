@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar progress-bar-review" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-4.svg" alt="Progress Bar Section One" />
        </header>
        <div class="review">
       <section class="bottom bottom-review">
            <div class="main-content centre-col">
                         <p class="zoomOut fadeUp t-animated">Making use of all the information you’ve learned, pick the best terms to fill the gaps in the scenario below:</p>
                <div class="task task-8">


                        <div class="task-8-content zoomOut t-animated">
                            <div class="narrative">
                                <p>Star Electronics's massive summer sale has just finished. There were some amazing savings, which proved very popular with customers. The half price deal on tablet computers was so good that every last one was sold. Help John Smith, the Store Manager, order some more to re-stock and fill his empty shelves.</p>

                                <p>First, John needs to generate <select class="standard-form-control" id="review1"><option value="0">Pick One</option><option value="1">an invoice</option><option value="2">a purchase order</option></select> that gets automatically sent to Ed's Electronics Wholesale, the <select class="standard-form-control" id="review2"><option value="0">Pick One</option><option value="1">consumer</option><option value="2">supplier</option></select> . This process is known as Electronic Data Interchange (EDI).</p>

                                <p>Once Val at Ed's Electronic Wholesaler receives the  <select class="standard-form-control" id="review3"><option value="0">Pick One</option><option value="1">invoice</option><option value="2">purchase order</option></select> she will ask Harry in the warehouse to pack the order, and ask <select class="standard-form-control" id="review4"><option value="0">Pick One</option><option value="1">Sue the CEO</option><option value="2">Malcom in accounts</option></select> to generate <select class="standard-form-control" id="review5"><option value="0">Pick One</option><option value="1">a purchase order</option><option value="2">an invoice</option></select> that will be electronically sent to Star Electronics.</p>
                                <p>Harry in the warehouse will <select class="standard-form-control" id="review6"><option value="0">Pick One</option><option value="1">throw</option><option value="2">ship</option></select> the tablets to Star Electronics and, happy that he can now sell more tablet computers to his customers, John Smith will pay  <select class="standard-form-control" id="review7"><option value="0">Pick One</option><option value="1">the receipt</option><option value="2">the invoice</option></select> on or before the due date via <select class="standard-form-control" id="review8"><option value="0">Pick One</option><option value="1">Apple Pay</option><option value="2">Electronic Funds Transfer</option></select> .</p>

                            </div>
                        </div>
                        <p class="cta centre-cta zoomOut t-animated"><a href="#review" class="btn btn-primary btn-review animsition-link">check your answers</a></p>
                        <div class="feedback">
                            <div class="review-feedback-negative hidden">
                                <img src="/badge-assets/{{$url['slug']}}/_global/img/wrong.svg" alt="Icon for wrong answer" />
                                <p>That's not quite right... You've got one or more answers that are not correct.</p>
                                <p class="cta centre-cta"><a href="#" class="btn btn-primary btn-try-again xxxanimsition-link">try again</a></p>
                            </div>
                            <div class="review-feedback-positive hidden">
                                <img src="/badge-assets/{{$url['slug']}}/_global/img/correct.svg" alt="Icon for correct answer" />
                                <p>You've got all answers correct!</p>
                                <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary btn-next-question">next</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
      @endsection

      @section('javascript')

      <script>
          oBadges.setSlugAndStep('{{$url['slug']}}', 8);
          oBadges.redirectIfPreviousStepNotCompleted(7, '{{$links['last']}}');
      </script>

        <script type="text/javascript">
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })

            $( ".btn-review" ).click(function() {
                var r1 = $('#review1 option:selected').val(),
                    r2 = $('#review2 option:selected').val(),
                    r3 = $('#review3 option:selected').val(),
                    r4 = $('#review4 option:selected').val(),
                    r5 = $('#review5 option:selected').val(),
                    r6 = $('#review6 option:selected').val(),
                    r7 = $('#review7 option:selected').val(),
                    r8 = $('#review8 option:selected').val();
                if(r1 == 2) {
                    r1 = true;
                } else {
                    r1 = false;
                }

                if(r2 == 2) {
                    r2 = true;
                } else {
                    r2 = false;
                }

                if(r3 == 2) {
                    r3 = true;
                } else {
                    r3 = false;
                }

                if(r4 == 2) {
                    r4 = true;
                } else {
                    r4 = false;
                }

                if(r5 == 2) {
                    r5 = true;
                } else {
                    r5 = false;
                }

                if(r6 == 2) {
                    r6 = true;
                } else {
                    r6 = false;
                }

                if(r7 == 2) {
                    r7 = true;
                } else {
                    r7 = false;
                }

                if(r8 == 2) {
                    r8 = true;
                } else {
                    r8 = false;
                }

                if(r1 == true && r2 == true && r3 == true && r4 == true && r5 == true && r6 == true && r7 == true && r8 == true) {
                    $(this).fadeOut();
                    $('.narrative').hide();
                    $('.review-feedback-positive').fadeIn();
                    oBadges.stepCompleted();

                }

                else {
                    $(this).fadeOut();
                    $('.narrative').fadeOut();
                    $('.review-feedback-negative').fadeIn();
                    $( ".btn-try-again" ).click(function() {
                        $('.narrative').fadeIn();
                        $('.review-feedback-negative').fadeOut();
                        $('.btn-review').fadeIn();
                    });
                }
            });

            </script>

            @endsection
