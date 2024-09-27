@extends($url['viewDir'] . $url['slug'] . '.master')

    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/wordsearch.css">

@section('page')


        <header>
            @include('vendor.digitalmarmalade.badges.ecommerce.header', ['title' => 'Header'])
            <img class="progress-bar" src="/badge-assets/{{$url['slug']}}/_global/img/progress-bar-2-2.svg" alt="Progress Bar Section One" />
        </header>

        <section class="top">
             <div class="main-content centre-col">


                <h2 class="fadeUp t-animated"><span>ELECTRONIC DATA INTERCHANGE (EDI)</span>PURCHASE ORDERS & INVOICES</h2>
                <img class="zoomOut t-animated" src="/badge-assets/{{$url['slug']}}/_global/img/edi-fullcircle.svg" alt="Illustration showing Purchase Order and Invoice cycle" />
                <p class="fadeUp t-animated">Purchase Orders and Invoices can also now be done electronically, using <span>Electronic Data Interchange (EDI)</span>. Payments can then be easily tracked and automated so companies can manage receipts and payments.</p>
            </div>
        </section>
        <section class="bottom">
            <div class="main-content centre-col">
               <p>Find below, the terms that are part of an <b>Electronic Data Interchange</b> system:</p>
                <div class="task task-6">
                  <div class="playable-area">
                    <div class="puzzle" id="puzzle">
                      <div class="table-holder" id="tableHolder">
                        <table cellpadding="0" cellspacing="0" id="wordSearchTable">
                          <tbody class="puzzleholder">

                          </tbody>
                        </table>
                        <div id="dragger" class="cell-drag-selection"></div>
                        <div id="viewer-tpl" class="viewer"></div>
                      </div>
                      <ul class="words clearfix"></ul>
                    </div>
                  </div><!--/playable-area-->

                </div>
                <article class="overlay complete next-section" id="overlayCompleted">
                  <p class="centred-text">Well done! Let's move on to the next topic.</p>
                  <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary">next section</a></p>
                </article>


            </div>

        </section>

        @endsection

        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 6);
            oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
        </script>

        <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/jquery-1.11.0.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/TweenMax.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/Draggable.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/idangerous.swiper.js"></script>


        <script src="/badge-assets/{{$url['slug']}}/_global/js/class.puzzlebase.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/class.wordsearch.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/puzzlebase-platform-specific-web.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/wordsearch-event-handlers-web.js"></script>

        <script>
          var utag_meta = {},
              utag_data = {},
              oApp = new Wordsearch();
              oApp.init();
        </script>
        <script>
          Tu.tScroll({
            't-element': '.zoomOut'
          })
          Tu.tScroll({
            't-element': '.fadeUp'
          })
          Tu.tScroll({
            't-element': '.slideLeft'
          })
          Tu.tScroll({
            't-element': '.slideRight'
          })

        </script>

        <script>
            $(".complete").animate({ scrollTop: $(document).height() }, "slow");
        </script>

        @endsection
