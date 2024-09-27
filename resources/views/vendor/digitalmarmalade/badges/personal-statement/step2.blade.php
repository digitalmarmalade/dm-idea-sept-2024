@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="task-2">
  <section class="yellow top">

      <div class="holder" id="task">
        <p>Are the statements below true <b>or</b> false?</p>
        <ul class="task-true-false">
            <li class="question">
                <p>A personal statement is a written description of one's achievements and interests - included as part of an application for a job or a place at university/college.</p>
                <span class="true-false-box">
                    <span data-value="1"><a href="#" >True</a></span>
                    <span data-value="2"><a href="#" >False</a></span>
                </span>
            </li>
            <li>
                <p>It is important that your personal statement helps you to blend in the crowd and not stand out too much. </p>
                <span class="true-false-box">
                    <span data-value="3"><a href="#">True</a></span>
                    <span data-value="4"><a href="#">False</a></span>
                </span>
            </li>
            <li>
                <p>When writing your personal statement, you should highlight strengths, focus on your enthusiasm for the course or job and talk positively about yourself.</p>
                <span class="true-false-box">
                    <span data-value="5"><a href="#">True</a></span>
                    <span data-value="6"><a href="#">False</a></span>
                </span>

            </li>
            <li>
                <p>The best statements can be found on the web and then copied and amended to suit me, no-one will ever know.</p>
                <span class="true-false-box">
                    <span data-value="7"><a href="#">True</a></span>
                    <span data-value="8"><a href="#">False</a></span>
                </span>

            </li>

            <li>
                <p>Talking about winning sports day at primary school should be included, as it shows I am a born winner.</p>
                <span class="true-false-box">
                    <span data-value="9"><a href="#">True</a></span>
                    <span data-value="10"><a href="#">False</a></span>
                </span>

            </li>
        </ul>


      </div>

  </section>
  <a class="btn btn-check">Check your answers</a>
    <section class="feedback feedback-success">
        <p>Great work!</p>
        <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn-next">Continue</a></p>
    </section>
    <section class="feedback feedback-fail">
        <p>Not quite right...</p>
        <a href="#task" class=" btn btn-try-again">Click here to try again</a>
    </section>

</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 2);
  </script>


@endsection
