@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

<main>



    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>

    
<div class="holder">
<h1>Choice anxiety</h1>

<div class="columns">

<div class="column">
<p>The original notion of Choice Anxiety was first written about in 1844 by Danish philosopher S&oslash;ren Kierkegaard in a work that translates into English as 'The Concept of Anxiety'.</p>
<p>Kierkegaard argued that choice induced anxiety. He cited the first anxiety experienced by man, as the choice Adam faced in whether or not to eat the fruit of the tree of knowledge. Before Adam knew that eating fruit from this tree was forbidden, there was no decision to be made - everything was allowed.</p>
</div>

<div class="column">
    <div class="engraving-image engraving-image--brain">
        <img src="/badge-assets/{{$url['slug']}}/img/step-5/brain.svg" alt="" />
        <div class="circle"></div>

        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

</div><!--/columns-->

<div class="columns columns--content-right">

<div class="column">
    <div class="engraving-image engraving-image--exercise">
        <img src="/badge-assets/{{$url['slug']}}/img/step-5/exercise.svg" alt="" />
        <div class="squares"><span></span></div>

        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="time-for-box">
            <p>On average, a person has made
                <span id="firstImpressions">0</span>
                decisions in the time since you loaded this page
            </p>
        </div>

    </div>
</div>

<div class="column">

<p>This extends to the notion of ‘Decision Fatigue’ which refers to the deteriorating quality of decisions made by an individual after a long session of decision making. </p>
<p>From the moment you wake up, your brain consciously or subconsciously starts making decisions. This can be anything from whether to stay in bed for another five minutes or get up, to whether to have a pudding or not or whether to do some exercise or finish this badge. It has been claimed that the average person makes 35,000 decisions a day. That’s roughly a decision every two and a half seconds.</p>
<p>Interestingly, major politicians and businessmen such as former US President Barack Obama, Steve Jobs and Mark Zuckerberg have been known to reduce their everyday clothing down to one or two outfits in order to limit the number of decisions they make in a day.</p>

</div>



</div><!--/columns-->

  <div class="columns">

<div class="column">
<p>The same applies to your web page.</p>
<p>Giving a visitor too many options, can lead to choice anxiety. Allied to decision fatigue this can lead to ‘Decision avoidance’, a phenomenon identified by Christopher Anderson in his 2003 psychological bulletin ‘The Psychology of Doing Nothing: Forms of Decision Avoidance Result from Reason and Emotion’.</p>
<p>Put simply, give people too much choice, and too many decisions will lead them to avoiding all of them and doing nothing. In the case of your web page this means they will leave it rather than continue.</p>

</div>

<div class="column">
    <div class="engraving-image engraving-image--point">
        <img src="/badge-assets/{{$url['slug']}}/img/step-5/point.svg" alt="" />
        <div class="circle"></div>
            <div class="squares"><span></span></div>
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

</div><!--/columns-->


</div><!--holder-->

    <div class="tint-section">

        <div class="holder">

            <div class="centre-text">
         <h2>Goals in Web Design</h2>
        <p>To make sure the user experience of your site is as smooth as possible, and that choice anxiety is kept to a minimum, every web page on your site should have a purpose and it is your job to make that purpose as clear to the visitor as possible.</p>
        <p>What do you think the primary purpose for each of the following pages is?</p>
            </div>

            <div class="purpose-quiz">

            <h3 class="purpose-quiz__title">What is the primary purpose of</h3>

            <span class="question-divider"></span>

            <p class="purpose-quiz__question">A news page?</p>

            <ul class="purpose-list">
                <li><a href="#q1Answer" data-answer="true">Read the news story and comment</a></li>
                <li><a href="#q1Answer">Click an advert</a></li>
                <li><a href="#q1Answer">Click a related article link</a></li>
            </ul>
            <div id="q1Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A news story is there to be read.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>

        </div><!--/purpose-quiz-->



            <div class="purpose-quiz hide">

            <h3 class="purpose-quiz__title">What is the primary purpose of</h3>

            <span class="question-divider"></span>

            <p class="purpose-quiz__question">A product page on an e-commerce website?</p>

            <ul class="purpose-list">
                <li><a href="#q2Answer">Leave a review of the product</a></li>
                <li><a href="#q2Answer" data-answer="true">Press the add to basket button</a></li>
                <li><a href="#q2Answer">Find a contact number</a></li>
            </ul>
            <div id="q2Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A product page should entice the user to want to buy the product.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>

        </div><!--/purpose-quiz-->

            <div class="purpose-quiz hide">

            <h3 class="purpose-quiz__title">What is the primary purpose of</h3>

            <span class="question-divider"></span>

            <p class="purpose-quiz__question">The homepage of a website?</p>

            <ul class="purpose-list">
                <li><a href="#q3Answer">Tell the visitor everything about everything</a></li>
                <li><a href="#q3Answer" data-answer="true">Direct people to the right area of the site</a></li>
                <li><a href="#q3Answer">Make the visitor fill in a contact form</a></li>
            </ul>
            <div id="q3Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>A website homepage should make it easy for the visitor to find the information they want.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>

        </div><!--/purpose-quiz-->

            <div class="purpose-quiz hide">

            <h3 class="purpose-quiz__title">What is the primary purpose of</h3>

            <span class="question-divider"></span>

            <p class="purpose-quiz__question">An about page on a company website?</p>

            <ul class="purpose-list">
                <li><a href="#q4Answer">Direct people to another part of the site</a></li>
                <li><a href="#q4Answer">Encourage people to fill in a contact form</a></li>
                <li><a href="#q4Answer" data-answer="true">Convey the important details of a company</a></li>
            </ul>
            <div id="q4Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>People visit an About page to find out more about a company.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>

        </div><!--/purpose-quiz-->





        </div>



    </div><!--/tint-section-->

    <div id="whiteSpace" class="white-space-holder hide">

    <div class="holder">
        <h2>White space</h2>
        <p>Press the Add to Basket button on this product page:</p>

        <div class="white-space-bad">
        <img src="/badge-assets/{{$url['slug']}}/img/step-5/white-space-bad.png" alt="" class="full-width-image" />
            <a href="#good" id="whiteSpaceBadClick"></a>
        </div>

        <div class="hide" id="whiteSpace2">
        <p id="good">Good. Now press the Add to Basket button on this product page:</p>

        <div class="full-width-image">
        <div class="white-space-good">
        <img src="/badge-assets/{{$url['slug']}}/img/step-5/white-space-good.png" alt=""  />
            <a href="#clearer" id="whiteSpaceGoodClick"></a>
        </div>
        </div>

        </div>

        <div class="hide" id="whiteSpace3">
        <p id="clearer">Excellent. Which one was clearer and easier to find?</p>

        <div class="columns js-cta-quiz">

            <div class="column">
                <a href="#cta" class="js-cta-no"><img src="/badge-assets/{{$url['slug']}}/img/step-5/white-space-bad.png" alt="" class="full-width-image" /></a>
            </div>

            <div class="column">
                <a href="#cta" class="js-cta-yes"><img src="/badge-assets/{{$url['slug']}}/img/step-5/white-space-good.png" alt="" class="full-width-image" /></a>
            </div>




        </div><!--/columns-->

        <div id="cta"></div>
            <div class="correct hide js-cta-correct">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>

            <div class="wrong hide js-cta-wrong">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Are you sure?</p>
                </div>
                </div>
            </div>

     </div>

      </div>


       <div class="hide" id="ctaReveal">
       <div class="holder">

        <div class="columns columns--text">

            <div class="column">
                <p>The use of white space helped direct your eye to the most important part of the page (although it is called white space, it really refers just to the space around items - it doesn’t matter what colour the background is).</p>
                <p>Cramming too much information in to a page can lead to the goals of your web page being overwhelmed or masked. Visitors won’t know where to start, and the danger is that they may do nothing and just leave the site.</p>
            </div>

            <div class="column">
                <p>Items can also be grouped together through the use of white space, by decreasing the space between them and increasing the space between them and other items on the page. This is important for showing the relationships between items. For example it was clear that the Buy Now button was associated with the product in the example above because it was grouped with it and the group was separated from the other content.</p>
            </div>


        </div><!--/columns-->

        </div>



    <div class="tint-section">


    <div class="success-row" id="successRow">
    <div class="holder holder--success">


        <div class="squares squares--success1"><span></span></div>
        <div class="squares squares--success2"><span></span></div>
        <div class="success-triangle"><span></span></div>
        <div class="barbell barbell--small"></div>


        <div class="page-summary" id="agree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="page-summary__text">
            <p>Well done!</p>
            <p>So, your user has formed their first impression of the site; you’ve successfully reassured them that your site is safe and that they are in the right place.</p>
            <p>Now you need to do everything you can to achieve the goals of your website or page, which hopefully mirror the needs of the visitor.</p>

                <p><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Next Step</a></p>
            </div>
        </div>


    </div>

    </div>


    </div><!--/tint-section-->


</div>




</main>

@endsection

@section('javascript')

<script>
    var correctTypefaceQuiz = 0;

    $( ".purpose-quiz a" ).on( "click", function(e) {
        if($(this).data('answer')===true) {
            $(this).closest('.purpose-quiz').addClass('disabled');
            $(this).closest('.purpose-quiz').find('.correct').removeClass('hide');
            $(this).closest('.purpose-quiz').find('.wrong').addClass('hide');
            $(this).closest('.purpose-quiz').next('.purpose-quiz').removeClass('hide');
            correctTypefaceQuiz++;
            if(correctTypefaceQuiz === 4) {
                $('#whiteSpace').removeClass('hide');
            }
            $(this).addClass('selected');
        } else {
            $(this).closest('.purpose-quiz').find('.wrong').removeClass('hide');
        }
    });

    $( ".js-cta-yes" ).on( "click", function(e) {
        $( ".js-cta-correct").removeClass('hide');
        $( ".js-cta-wrong").addClass('hide');
        $( ".js-cta-quiz").addClass('disabled');
        $( "#ctaReveal").removeClass('hide');
    });

    $( ".js-cta-no" ).on( "click", function(e) {
        $( ".js-cta-wrong").removeClass('hide');
    });


var firstImpressions = 0;
    var commaNum = numberWithCommas(firstImpressions);

    function timeout() {
        setTimeout(function () {
            firstImpressions++;
            commaNum = numberWithCommas(firstImpressions);
            $('#firstImpressions').text(commaNum);
            timeout();
        }, 2500);
    }
    timeout();

    function numberWithCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }


    $( "#whiteSpaceBadClick" ).on( "click", function(e) {
        $( "#whiteSpace2").removeClass('hide');
    });

    $( "#whiteSpaceGoodClick" ).on( "click", function(e) {
        $( "#whiteSpace3").removeClass('hide');
    });


</script>

  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
  </script>
@endsection
