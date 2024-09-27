@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-1-task">
            <div class="step">
                <p>Step 1 of 7<span>Task 2 of 2</span></p>
            </div>
            <div class="holder">
                <p>Drag the descriptions on to the correct website sections/pages:</p>

                <div class="drop-wrapper">

                    <div class="droppable-zone">
                        <ul>
                            <li class="dropzone" id="droppable1">
                                <div class="before-drop">
                                    <p><span>Homepage</span></p>
                                </div>
                                <div class="after-drop">
                                    <p><span>Homepage</span>Display means for people dropping you a line, paying you a visit or contact you via social media.</p>
                                </div>
                            </li>

                            <li class="dropzone" id="droppable2">
                                <div class="before-drop">
                                    <p><span>About Us</span></p>
                                </div>
                                <div class="after-drop">
                                    <p><span>About Us</span>Display positive testimonials from clients endorsing your products or services.</p>
                                </div>
                            </li>

                            <li class="dropzone" id="droppable3">
                                <div class="before-drop">
                                    <p><span>Our Products</span></p>
                                </div>
                                <div class="after-drop">
                                    <p><span>Our Products</span>Display detailed description of the products you are offering.</p>
                                </div>
                            </li>

                            <li class="dropzone" id="droppable4">
                                <div class="before-drop">
                                    <p><span>Contact Us</span></p>
                                </div>
                                <div class="after-drop">
                                    <p><span>Contact Us</span>Display means for people dropping you a line, paying you a visit or contact you via social media.</p>
                                </div>
                            </li>


                        </ul>
                    </div>
                    <div class="drag-options">
                        <ul>
                            <li class="drag-option draggable" id="answer_1_1"><p>Display means for people dropping you a line, paying you a visit or contact you via social media.</p></li>
                            <li class="drag-option draggable" id="answer_1_2"><p>Display positive testimonials from clients endorsing your products or services.</p></li>
                            <li class="drag-option draggable" id="answer_1_3"><p>Display the name of your business and your most unique selling point.</p></li>
                            <li class="drag-option draggable" id="answer_1_4"><p>Display detailed description of the products you are offering.</p></li>
                        </ul>
                    </div>
                </div>
            </div><!--/holder-->





        </main>

        <div class="feedback feedback-success hide">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-correct.svg" alt="" />
            <p><span>Correct!</span></p>
            <a onclick="oBadges.stepCompleted();" class="btn btn-white" href="{{$links['next']}}">Continue</a>
        </div>

        @endsection


        @section('javascript')
        <script>
            oBadges.setSlugAndStep('{{$url['slug']}}', 3);
        </script>
          <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
        @endsection
