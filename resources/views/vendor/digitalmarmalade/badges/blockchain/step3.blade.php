@extends($url['viewDir'] . $url['slug'] . '.master')
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/wordsearch.css">
@section('body-attributes')

@endsection

@section('page')

    @include('vendor.digitalmarmalade.badges.blockchain.header', ['title' => 'Header'])

    <main class="task-1">

      <section class="top grad-green feedback feedback-success">
        <div class="holder">
          <h1 data-aos="fade-right">Nice one!</h1>
          <p data-aos="fade-right" data-aos-delay="100">Can you now find your answers in this wordsearch?</p>

          <div class="playable-area">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-1.svg" />
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
        </section>
          <section id="overlayCompleted" class="complete overlay grad-blue feedback bottom hide">

            <div class="holder">
              <div class="feedback-box">
                <div>
                  <img data-aos="fade-down" src="/badge-assets/{{$url['slug']}}/_global/img/correct.png" />
                </div>
                <div>
                  <div>
                    <h1 data-aos="fade-right" data-aos-delay="100">Well done!</h1>
                    <a  onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" data-aos="zoom-in" data-aos-delay="200">Continue</a>
                  </div>
                </div>
              </div>
            </div>
      </section>
    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/task-1.js"></script>
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
@endsection
