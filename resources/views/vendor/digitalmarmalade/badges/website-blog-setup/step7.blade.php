@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-4">
            <div class="step">
                <p>Step 4 of 7<span>Task 1 of 2</span></p>
            </div>
            <h1>Hosting</h1>
            <div class="holder quiz-7">
                <p>We are almost there, and you now need to find the best option for hosting your ‘Organic Life’ website. Let’s remind ourselves of some of the important points on choosing a web hosting company.</p>
                <div class="quiz">
                    <p>What is a web hosting company?</p>
                    <ul>
                        <li><a href="#" data-value="1">It is a company that helps you to design your website or blog.</a></li>
                        <li><a href="#" data-value="2">It is a company specialised in helping you to code your website or blog.</a></li>
                        <li><a href="#" data-value="3">It is company that rents you space on one of their servers so they can ‘store’ the files from your website to enable public access online.</a></li>
                        <li><a href="#" data-value="4">It is a company that sells you ready made website templates, since you don’t know anything about design.</a></li>
                    </ul>

                    <a class="btn jsCheck" href="#">Check your answer</a>

                </div>

            </div>


        </main>
        <div class="feedback hide feedback-step-3">
            <img src="" alt="" />
            <p></p>
            <a class='btn btn-white' href='#'></a>
        </div>

        @endsection


        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 7);
        </script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-4-task-1.js"></script>
        @endsection
