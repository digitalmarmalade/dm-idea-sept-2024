@extends($url['viewDir'] . $url['slug'] . '.master')
  <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/wordsearch.css">
@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-linkedin.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="last-section only-section">
        <div class="section-title only-section">
            <p>LinkedIn</p>
        </div>
        <div class="holder">
            <p>Find on the diagram below, <b>the names of the sections that you can edit </b>to make the most of your LinkedIn profile:</p>

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
    </section>


    <section class="section-1 feedback feedback-success" id="overlayCompleted">
        <div class="holder">
            <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
            <h2>Good work!</h2>
            <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
    </section>

</main>

@endsection


@section('javascript')

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

<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-6.js"></script>
@endsection
