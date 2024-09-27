@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-4">
            <div class="step">
                <p>Step 4 of 7<span>Task 2 of 2</span></p>
            </div>
            <h1>Hosting</h1>
            <div class="holder">
                <div class="quiz-6">
                    <p>From the statements below, select only the ones you agree with:</p>
                    <ul>
                        <li>
                            <p>It is important to know the technical requirements from my website/blog before I can choose a web hosting company. </p>
                            <span>
                                <a href="#" data-value="1">Yes</a>
                                <a href="#" data-value="2">No</a>
                            </span>
                        </li>
                        <li>
                            <p>The amount of data I will be using to create my website or blog is not important so I don’t need to worry about hosting space.</p>
                            <span>
                                <a href="#" data-value="1">Yes</a>
                                <a href="#" data-value="2">No</a>
                            </span>
                        </li>
                        <li>
                            <p>I am not a tech-person so I don’t have to worry at all about tech issues since my hosting company will handle all the issues for me.</p>
                            <span>
                                <a href="#" data-value="1">Yes</a>
                                <a href="#" data-value="2">No</a>
                            </span>

                        </li>
                    </ul>

                    <a class="btn jsCheck" href="#">Check your answers</a>

                </div>

            </div>


        </main>
        <div class="feedback hide feedback-step-4">
            <img src="" alt="" />
            <p></p>
            <a class='btn btn-white' href='#'></a>
        </div>
        @endsection


        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 8);
        </script>

          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-4-task-2.js"></script>
        @endsection
