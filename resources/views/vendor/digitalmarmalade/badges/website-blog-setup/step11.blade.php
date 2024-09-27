@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-7">
            <div class="step">
                <p>Step 7 of 7<span>Review</span></p>
            </div>
            <h1>Quiz</h1>
            <div class="holder">
                <p>You are now aware of what it takes to get your website or blog live! Let’s remind ourselves of the very important points:</p>

                <div class="quiz quiz--order quiz--final jsQuiz">
                    <!-- <div class="quiz-intro">
                        <h2>Question <span class="jsQuestionNumber">1</span> of 6</h2>
                    </div> -->
                    <p class="js-whoops quiz-fail hide">Whoops, two wrong answers... start again!</p>

                    <div class="quiz-question jsQuestion1 quiz-question-1" id="question1">

                        <p class="quiz-the-question"><span>Question 1 of 6</span>Which one is a characteristic of a blog?</p>
                        <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                        <ul class="quiz-options" style="list-style:none;">
                            <li><a href="#">An online space with different sections and pages</a></li>
                            <li><a href="#" data-answer="true">An online space with engaging content periodically updated</a></li>
                            <li><a href="#">An online portfolio of your products</a></li>
                            <li><a href="#">An online encyclopaedia where users learn more about different subjects</a></li>
                        </ul>
                    </div>

                    <div class="quiz-question jsQuestion2 hide" id="question2">
                        <p class="quiz-the-question"><span>Question 2 of 6</span>What is the quickest way of getting your website or blog up and running?</p>
                        <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                        <ul class="quiz-options" style="list-style:none;">
                            <li><a href="#">Setting it up yourself</a></li>
                            <li><a href="#">Using a Content Management System</a></li>
                            <li><a href="#" data-answer="true">Using a Website Builder Service</a></li>
                        </ul>
                    </div>

                    <div class="quiz-question jsQuestion3 hide" id="question3" data-requiredRightAnswers="4">
                        <p class="quiz-the-question"><span>Question 3 of 6</span>Select below <b>only</b> the advantages of setting up a website or blog using a CMS:</p>
                        <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                        <ul class="quiz-options" style="list-style:none;">
                            <li><a href="#" data-answer="true">Relative flexibility</a></li>
                            <li><a href="#">More accessible to hackers</a></li>
                            <li><a href="#" data-answer="true">User Friendly</a></li>
                            <li><a href="#" data-answer="true">Free for basic websites</a></li>
                            <li><a href="#">Loading of the pages can be slow</a></li>
                            <li><a href="#" data-answer="true">Content can be updated with ease</a></li>
                        </ul>

                    </div>

                    <div class="quiz-question jsQuestion4 hide" id="question4" data-requiredRightAnswers="3">
                        <p class="quiz-the-question"><span>Question 4 of 6</span>Select below <b>only</b> the points that are good practice when choosing a domain name:</p>
                        <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                        <ul class="quiz-options" style="list-style:none;">
                            <li><a href="#" data-answer="true">Make it short and memorable</a></li>
                            <li><a href="#">Make it long and add as much information as possible so users know what your website is about</a></li>
                            <li><a href="#">Include different characters to make it original</a></li>
                            <li><a href="#" data-answer="true">Watch out for copyright infringement</a></li>
                            <li><a href="#" data-answer="true">Use a word that is related to the business or services you are promoting</a></li>
                        </ul>

                    </div>
                    <div class="quiz-question jsQuestion5 quiz-question-5 hide" id="question5" data-requiredRightAnswers="3">
                        <p class="quiz-the-question"><span>Question 5 of 6</span>In relation to hosting, which of the statements below should be considered?</p>
                        <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                        <ul class="quiz-options" style="list-style:none;">
                            <li><a href="#" data-answer="true">The type of website you will be creating</a></li>
                            <li><a href="#">The colour scheme of the branding for the products you are promoting</a></li>
                            <li><a href="#" data-answer="true">The level of security needed for your website</a></li>
                            <li><a href="#" data-answer="true">The volume of traffic your website will generate</a></li>
                        </ul>

                    </div>
                    <div class="quiz-question jsQuestion6 quiz-question-6 hide" id="question6">

                        <p class="quiz-the-question"><span>Question 6 of 6</span>The design of your website or blog should (select only one):</p>
                        <p class="js-error quiz-fail hide">That's not right. Careful, one more wrong answer and you'll have to start the quiz again!</p>
                        <ul class="quiz-options" style="list-style:none;">
                            <li><a href="#">Pack as much information as possible: the more elements you add, the easier is for users to find what they are looking for.</a></li>
                            <li><a href="#">Consider how the target market prefers to get their information about new products</a></li>
                            <li><a href="#" data-answer="true">Be minimal, with clear and defined constraint colour scheme, and clear call to actions and navigation system</a></li>
                            <li><a href="#">Have a different look and feel for each page or section to showcase your creativity</a></li>
                        </ul>

                    </div>



                </div><!--/quiz-->



            </div><!--/holder-->

            <div id="nextStep" class="feedback feedback-success feedback-step-7 jsNextStep hide">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-correct.svg" alt="" />
                <p><span>Well done!</span></p>
                <a onclick="oBadges.stepCompleted();" class="btn btn-white" href="success">Continue</a>
            </div>


        </main>
        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 11);
        </script>

          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-7.js"></script>
        @endsection
