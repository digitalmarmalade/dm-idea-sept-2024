@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

        <main class="step-1">
            <div class="step">
                <p>Step 1 of 7<span>Task 1 of 2</span></p>
            </div>
            <div class="holder">

                <div class="quiz">
                    <p>Select <b>all</b> the statements that <b>only</b> apply to a blog:</p>
                    <ul>
                        <li><a href="#" data-value="1">A contact page with a form for users to get in touch.</a></li>
                        <li><a href="#" data-value="2">A comment system that promotes interaction between the author and readers.</a></li>
                        <li><a href="#" data-value="3">A page containing testimonials and feedback from clients.</a></li>
                        <li><a href="#" data-value="4">A page with the description of products or services.</a></li>
                        <li><a href="#" data-value="5">Posts listed by dates, from newer to older.</a></li>
                        <li><a href="#" data-value="6">An archive of posts.</a></li>
                    </ul>

                    <a class="btn jsCheck" href="#">Check your answers</a>

                </div>

            </div><!--/holder-->
        </main>
        <div class="feedback feedback-fail hide">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-incorrect.svg" alt="" />
            <p><span>That is not quite right...</span> You haven't selected all the correct answers.</p>
            <a class="btn btn-white jsTryAgain" href="#">Try Again</a>
        </div>

        <div class="feedback feedback-success hide">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-correct.svg" alt="" />
            <p><span>Correct!</span></p>
            <a onclick="oBadges.stepCompleted();" class="btn btn-white" href="{{$links['next']}}">Next Task</a>
        </div>

    @endsection


    @section('javascript')
    <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 2);
    </script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
