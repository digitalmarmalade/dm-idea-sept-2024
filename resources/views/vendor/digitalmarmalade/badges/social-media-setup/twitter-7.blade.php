@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-twitter.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

<main>
    <section class="last-section only-section">
        <div class="section-title">
            <p>Twitter</p>
        </div>
        <div class="holder">
            <p>Drag the below Twitter bios on to <b>the most appropriate</b> Twitter profile:</p>


            <div class="drop-wrapper drop-wrapper-twitter">

                <div class="droppable-zone">
                    <ul>
                        <li class="dropzone" id="droppable1">
                            <div class="before-drop">
                                <p><span>Young Professional</span></p>
                            </div>
                            <div class="after-drop">
                                <p><span>Young professional</span>I do Design. Trying to master the art of making cappuccino. Extrovert with funky hair.</p>
                            </div>
                        </li>

                        <li class="dropzone" id="droppable2">
                            <div class="before-drop">
                                <p><span>Marketing company</span></p>
                            </div>
                            <div class="after-drop">
                                <p><span>Marketing company</span>Econsultancy publishes independent research, analysis and advice on digital marketing, social media, ecommerce, SEO, mobile and tech for business.</p>
                            </div>
                        </li>

                        <li class="dropzone" id="droppable3">
                            <div class="before-drop">
                                <p><span>Actor</span></p>
                            </div>
                            <div class="after-drop">
                                <p><span>Actor</span>Former footballer now making a go at film and theatre.</p>
                            </div>
                        </li>

                        <li class="dropzone" id="droppable4">
                            <div class="before-drop">
                                <p><span>Mum at home</span></p>
                            </div>
                            <div class="after-drop">
                                <p><span>Mother</span>mother. sister. flat shoe advocate. sleep evangelist.</p>
                            </div>
                        </li>


                    </ul>
                </div>
                <div class="drag-options">
                    <ul>
                        <li class="drag-option draggable" id="answer_1_1"><p>mother. sister. flat shoe advocate. sleep evangelist</p></li>
                        <li class="drag-option draggable" id="answer_1_2"><p>Econsultancy publishes independent research, analysis and advice on digital marketing, social media, ecommerce, SEO, mobile and tech for business.</p></li>
                        <li class="drag-option draggable" id="answer_1_3"><p>I do Design. Trying to master the art of making cappuccino. Extrovert with funky hair..</p></li>
                        <li class="drag-option draggable" id="answer_1_4"><p>Former footballer now making a go at film and theatre.</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="section-1 feedback feedback-success hide">
        <div class="holder">
            <img data-aos="slide-up" src="/badge-assets/{{$url['slug']}}/_global/img/icon-success.svg" alt="#"/>
            <h2>Correct!</h2>
            <a class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
    </section>


</main>


@endsection

@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-18.js"></script>
@endsection
