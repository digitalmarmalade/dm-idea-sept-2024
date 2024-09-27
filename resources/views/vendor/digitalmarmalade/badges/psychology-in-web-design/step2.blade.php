@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

<main>



    <div class="progress">
        <ol>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>


<div class="holder">
<h1>The use of colour</h1>

<div class="columns">

<div class="column">
<p>The colours you use on your website can have a dramatic impact on how your visitors perceive your website.</p>
<p>The colours you choose should reinforce your message and the image you want to portray.</p>
<p>Let’s have a look at some colours, and the psychological perceptions of them.</p>
</div>

<div class="column">
    <div class="engraving-image engraving-image--pen">
        <img src="/badge-assets/{{$url['slug']}}/img/step-2/pen-hand.svg" alt="" />
        <div class="circle"></div>
    </div>
</div>

</div><!--/columns-->

</div><!--holder-->

<div class="colour-block colour-block--red">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Red</h2>
       <p>Red has multiple meanings. It can represent danger, anger, or romance. It is a high energy colour that reflects urgency, which is why it is often used to symbolise sales and reductions in price. It is bold, brash, and catches the eye.</p>


       <div class="quiz" data-rightanswers="4">
        <p>Pick the four words from the list below that can be associated with red.</p>
           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="true">Danger</a></li>
           <li><a href="#" data-answer="false">Relaxing</a></li>
           <li><a href="#" data-answer="false">Up-market</a></li>
           <li><a href="#" data-answer="true">Vibrant</a></li>
           <li><a href="#" data-answer="true">Urgency</a></li>
           <li><a href="#" data-answer="false">Soft</a></li>
           <li><a href="#" data-answer="false">Sad</a></li>
           <li><a href="#" data-answer="true">Eye-catching</a></li>
       </ul>
           <p><a href="#orange" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>
    </div>
    <div id="orange"></div>
</div>

<div class="colour-block colour-block--orange hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Orange</h2>
       <p>Orange is another colour that can evoke different emotions depending on how it is used. It can be an energetic colour, symbolise happiness, or even vitality. It can also denote urgency, so is often used to create a 'Buy it Now' call to action.</p>

       <div class="quiz" data-rightanswers="4">
<p>Pick the four words from the list below that can be associated with orange.</p>
           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">

           <li><a href="#" data-answer="false">Relaxing</a></li>
           <li><a href="#" data-answer="false">Up-market</a></li>
           <li><a href="#" data-answer="true">Vibrant</a></li>
           <li><a href="#" data-answer="true">Eye-catching</a></li>
           <li><a href="#" data-answer="true">Happy</a></li>
           <li><a href="#" data-answer="true">Urgency</a></li>
           <li><a href="#" data-answer="false">Soft</a></li>
           <li><a href="#" data-answer="false">Sad</a></li>

       </ul>
           <p><a href="#yellow" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>


    </div>
<div id="yellow"></div>
   </div>

<div class="colour-block colour-block--yellow hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Yellow</h2>
       <p>Youthful and optimistic, vibrant tones of yellow can make your website look fresh and grab your audience's attention. The negative connotation of yellow is that it can sometimes be seen as a deceitful colour.</p>

       <div class="quiz" data-rightanswers="4">
         <p>Pick the four words from the list below that can be associated with yellow.</p>

           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="true">Eye-catching</a></li>
           <li><a href="#" data-answer="true">Bright</a></li>
           <li><a href="#" data-answer="false">Up-market</a></li>
           <li><a href="#" data-answer="true">Vibrant</a></li>
           <li><a href="#" data-answer="false">Serious</a></li>
           <li><a href="#" data-answer="false">Soft</a></li>
           <li><a href="#" data-answer="true">Happy</a></li>
           <li><a href="#" data-answer="false">Sad</a></li>
       </ul>
           <p><a href="#green" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
    <div id="green"></div>
</div>

<div class="colour-block colour-block--green hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Green</h2>
       <p>Green is a colour with many connotations. It can symbolise nature when used for beauty products, or can be a symbol of wealth and security. It is one of the easiest colours for the eye to process.</p>

       <div class="quiz" data-rightanswers="4">
         <p>Pick the four words from the list below that can be associated with green.</p>

           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="false">Danger</a></li>
           <li><a href="#" data-answer="true">Relaxing</a></li>
           <li><a href="#" data-answer="false">Up-market</a></li>
           <li><a href="#" data-answer="true">Safety</a></li>
           <li><a href="#" data-answer="false">Urgency</a></li>
           <li><a href="#" data-answer="true">Freshness</a></li>
           <li><a href="#" data-answer="true">Natural</a></li>
           <li><a href="#" data-answer="false">Sad</a></li>
       </ul>
           <p><a href="#blue" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
    <div id="blue"></div>
</div>

<div class="colour-block colour-block--blue hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Blue</h2>
       <p>Calm and cool, shades of blue are often used to create a sensation of knowledge, trust and brand loyalty. Many businesses and banks, for example, use blue in their web design to give an impression of solidity and gravitas.</p>

       <div class="quiz" data-rightanswers="4">
         <p>Pick the four words from the list below that can be associated with blue.</p>

           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="false">Anger</a></li>
           <li><a href="#" data-answer="true">Cold</a></li>
           <li><a href="#" data-answer="true">Safety</a></li>
           <li><a href="#" data-answer="true">Stability</a></li>
           <li><a href="#" data-answer="false">Vibrant</a></li>
           <li><a href="#" data-answer="true">Sky</a></li>
           <li><a href="#" data-answer="false">Urgency</a></li>
           <li><a href="#" data-answer="false">Happy</a></li>
       </ul>
           <p><a href="#purple" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>
    </div>
     <div id="purple"></div>
</div>

<div class="colour-block colour-block--purple hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Purple</h2>
       <p>Shades of purple are used to reflect different things in design. Purple is often associated with royalty and affluence, so is often used by websites to give the impression of luxury. It is also used in the world of retail and beauty to soothe and calm, which is often why it is featured on anti-aging products.</p>

       <div class="quiz" data-rightanswers="4">
         <p>Pick the four words from the list below that can be associated with purple.</p>

           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="true">Up-market</a></li>
           <li><a href="#" data-answer="true">Wealth</a></li>
           <li><a href="#" data-answer="false">Danger</a></li>
           <li><a href="#" data-answer="true">Relaxing</a></li>
           <li><a href="#" data-answer="false">Soft</a></li>
           <li><a href="#" data-answer="true">Luxury</a></li>
           <li><a href="#" data-answer="false">Sad</a></li>
           <li><a href="#" data-answer="false">Urgency</a></li>
       </ul>
           <p><a href="#pink" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
    <div id="pink"></div>
</div>

<div class="colour-block colour-block--pink hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Pink</h2>
       <p>Youthful, fun, and exciting; pink can symbolise a whole host of emotions. It is often used in websites aimed at young women and mothers. It is romantic and feminine so has a very clear target market in mind.</p>


       <div class="quiz" data-rightanswers="4">
<p>Pick the four words from the list below that can be associated with pink.</p>
           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="false">Death</a></li>
           <li><a href="#" data-answer="false">Sad</a></li>
           <li><a href="#" data-answer="true">Youth</a></li>
           <li><a href="#" data-answer="false">Relaxing</a></li>
           <li><a href="#" data-answer="true">Eye-catching</a></li>
           <li><a href="#" data-answer="false">Serious</a></li>
           <li><a href="#" data-answer="true">Vibrant</a></li>
           <li><a href="#" data-answer="true">Romance</a></li>
       </ul>
           <p><a href="#white" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
    <div id="white"></div>
</div>

<div class="colour-block colour-block--white hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>White</h2>
       <p>A neutral colour, white reflects purity and cleanliness. Designers talk of using 'white space' to enhance their work and guide the eye. This colour is fresh, open, and inviting, making it a great choice for an eCommerce website.</p>


       <div class="quiz" data-rightanswers="4">
  <p>Pick the four words from the list below that can be associated with white.</p>
           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="false">Danger</a></li>
           <li><a href="#" data-answer="true">Neutral</a></li>
           <li><a href="#" data-answer="true">Cleanliness</a></li>
           <li><a href="#" data-answer="false">Vibrant</a></li>
           <li><a href="#" data-answer="false">Urgency</a></li>
           <li><a href="#" data-answer="true">Space</a></li>
           <li><a href="#" data-answer="true">Relaxing</a></li>
           <li><a href="#" data-answer="false">Eye-catching</a></li>
       </ul>
           <p><a href="#black" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
    <div id="black"></div>
</div>

<div class="colour-block colour-block--black hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Black</h2>
       <p>Black is often seen as a powerful, strong colour; one that is frequently used for luxury products. On the negative side it can seem void of emotion and even symbolise death.</p>

       <div class="quiz" data-rightanswers="4">
         <p>Pick the four words from the list below that can be associated with black.</p>

           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="true">Cold</a></li>
           <li><a href="#" data-answer="true">Mystery</a></li>
           <li><a href="#" data-answer="true">Luxury</a></li>
           <li><a href="#" data-answer="true">Formal</a></li>
           <li><a href="#" data-answer="false">Danger</a></li>
           <li><a href="#" data-answer="false">Vibrant</a></li>
           <li><a href="#" data-answer="false">Urgency</a></li>
           <li><a href="#" data-answer="false">Warm</a></li>
       </ul>
           <p><a href="#grey" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
    <div id="grey"></div>
</div>

<div class="colour-block colour-block--grey hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Grey</h2>
       <p>Grey is a neutral colour, and one that can seem conservative and formal. Websites use this colour to show their authority and reflect the high quality of their products. It is mainly used as a background colour because it is devoid of any warmth.</p>


       <div class="quiz" data-rightanswers="4">
<p>Pick the four words from the list below that can be associated with grey.</p>
           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span><span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="false">Danger</a></li>
           <li><a href="#" data-answer="true">Cold</a></li>
           <li><a href="#" data-answer="true">Neutral</a></li>
           <li><a href="#" data-answer="false">Vibrant</a></li>
           <li><a href="#" data-answer="false">Urgency</a></li>
           <li><a href="#" data-answer="true">Safe</a></li>
           <li><a href="#" data-answer="true">Trustworthy</a></li>
           <li><a href="#" data-answer="false">Eye-catching</a></li>
       </ul>
           <p><a href="#brown" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
     <div id="brown"></div>
</div>

<div class="colour-block colour-block--brown hide">
    <svg width="1366" height="155" viewBox="0 0 1366 155" xmlns="http://www.w3.org/2000/svg" class="colour-block-triangle">
    <g>
    <path id="path0_fill" d="M 845.39 0L 1372 155L 0 155L 845.39 0Z"/>
    </g>
    <defs>

    </defs>
    </svg>
   <div class="holder">
        <h2>Brown</h2>
       <p>Dependable, natural and stable; brown is a colour that divides opinion. Some see it as a dull colour to be avoided while others will capitalize on the fact it can portray a website as wholesome and reliable.</p>


       <div class="quiz" data-rightanswers="4">
  <p>Pick the four words from the list below that can be associated with brown.</p>
           <p class="error hide">Not quite. You have <span class="error-correct-answers"></span> <span class="error-incorrect-answers"></span>.</p>

       <ul class="select-answers-quiz">
           <li><a href="#" data-answer="true">Trustworthy</a></li>
           <li><a href="#" data-answer="true">Warm</a></li>
           <li><a href="#" data-answer="false">Up-market</a></li>
           <li><a href="#" data-answer="false">Vibrant</a></li>
           <li><a href="#" data-answer="true">Earthy</a></li>
           <li><a href="#" data-answer="false">Soft</a></li>
           <li><a href="#" data-answer="false">Cold</a></li>
           <li><a href="#" data-answer="true">Natural</a></li>
       </ul>
           <p><a href="#nextQuestion" class="btn js-check-answers">Click to check your answers</a></p>
           <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
            </div>
                </div>
            </div>
       </div>

    </div>
</div>
    <div id="nextQuestion"></div>

<div id="selectColours" class="tint-section hide">


    <div class="holder">

        <div class="columns columns--text">

            <div class="column">
                  <p>So we know what these colours indicate, and from this we can decide what colours would be good choices to use for different sorts of designs.</p>
            </div>

            <div class="column">
                <p>Based on what you’ve just learnt, select the most appropriate colours for these websites.</p>
            </div>

        </div>


        <div class="colour-quiz">

            <h3 class="colour-quiz__title">What colour would you pick for</h3>

            <span class="question-divider"></span>

            <p class="colour-quiz__question">A magazine aimed at pre-teen/early teen girls?</p>

            <ul class="colour-list">
                <li><div><a href="#q1Answer" class="colour-list__red"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__orange" data-answer="true"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__yellow" data-answer="true"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__green"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__blue"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__purple" data-answer="true"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__pink" data-answer="true"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__white"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__black"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__grey"></a></div></li>
                <li><div><a href="#q1Answer" class="colour-list__brown"></a></div></li>
            </ul>
            <div id="q1Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>Pink, purple, yellow or orange would all be great colours for this website - they’re fun, youthful and vibrant.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Perhaps there is a better choice.</p>
                    <p>We're looking for a colour that is fun, youthful and vibrant. Try again. Don’t forget you can go back and look at the colours again.</p>
                </div>
                </div>
            </div>

        </div><!--/colour-quiz-->

        <div class="colour-quiz hide">

            <h3 class="colour-quiz__title">What colour would you pick for</h3>

            <span class="question-divider"></span>

            <p class="colour-quiz__question">A luxury, expensive boutique hotel?</p>

            <ul class="colour-list">
                <li><div><a href="#q2Answer" class="colour-list__red"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__orange"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__yellow"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__green"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__blue"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__purple" data-answer="true"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__pink"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__white"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__black" data-answer="true"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__grey"></a></div></li>
                <li><div><a href="#q2Answer" class="colour-list__brown"></a></div></li>
            </ul>
            <div id="q2Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>Black or purple would be perfect - they're luxurious and high end.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Perhaps there is a better choice.</p>
                    <p>We're looking for a colour that is luxurious and high end. Try again. Don’t forget you can go back and look at the colours again.</p>
                </div>
                </div>
            </div>

        </div><!--/colour-quiz-->

        <div class="colour-quiz hide">

            <h3 class="colour-quiz__title">What colour would you pick for</h3>

            <span class="question-divider"></span>

            <p class="colour-quiz__question">A price slashing auction website?</p>

            <ul class="colour-list">
                <li><div><a href="#q3Answer" class="colour-list__red" data-answer="true"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__orange" data-answer="true"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__yellow"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__green"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__blue"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__purple"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__pink"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__white"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__black"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__grey"></a></div></li>
                <li><div><a href="#q3Answer" class="colour-list__brown"></a></div></li>
            </ul>
            <div id="q3Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>Orange or Red are great choices - they represent the urgency associated with sales and auctions.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Perhaps there is a better choice.</p>
                    <p>We're looking for a colour that represents the urgency associated with sales and auctions. Try again. Don’t forget you can go back and look at the colours again.</p>
                </div>
                </div>
            </div>

        </div><!--/colour-quiz-->

        <div class="colour-quiz hide">

            <h3 class="colour-quiz__title">What colour would you pick for</h3>

            <span class="question-divider"></span>

            <p class="colour-quiz__question">A website for a minimalist piece of technology?</p>

            <ul class="colour-list">
                <li><div><a href="#q4Answer" class="colour-list__red"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__orange"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__yellow"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__green"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__blue"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__purple"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__pink"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__white" data-answer="true"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__black"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__grey" data-answer="true"></a></div></li>
                <li><div><a href="#q4Answer" class="colour-list__brown"></a></div></li>
            </ul>
            <div id="q4Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>White or grey are good choices for this - they're neutral and clinical.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Perhaps there is a better choice.</p>
                    <p>We're looking for a colour that is neutral and clinical. Try again. Don’t forget you can go back and look at the colours again.</p>
                </div>
                </div>
            </div>

        </div><!--/colour-quiz-->

        <div class="colour-quiz hide">

            <h3 class="colour-quiz__title">What colour would you pick for</h3>

            <span class="question-divider"></span>

            <p class="colour-quiz__question">A website for a firm of lawyers?</p>

            <ul class="colour-list">
                <li><div><a href="#q5Answer" class="colour-list__red"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__orange"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__yellow"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__green"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__blue" data-answer="true"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__purple"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__pink"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__white"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__black"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__grey"></a></div></li>
                <li><div><a href="#q5Answer" class="colour-list__brown"></a></div></li>
            </ul>
            <div id="q5Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>Blue is a good colour for this - it symbolises wisdom, authority and seriousness.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Perhaps there is a better choice.</p>
                    <p>We're looking for a colour that symbolises wisdom, authority and seriousness. Try again. Don’t forget you can go back and look at the colours again.</p>
                </div>
                </div>
            </div>

        </div><!--/colour-quiz-->

        <div class="colour-quiz hide">

            <h3 class="colour-quiz__title">What colour would you pick for</h3>

            <span class="question-divider"></span>

            <p class="colour-quiz__question">A website for an organic food company?</p>

            <ul class="colour-list">
                <li><div><a href="#q6Answer" class="colour-list__red"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__orange"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__yellow"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__green" data-answer="true"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__blue"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__purple"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__pink"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__white"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__black"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__grey"></a></div></li>
                <li><div><a href="#q6Answer" class="colour-list__brown" data-answer="true"></a></div></li>
            </ul>
            <div id="q6Answer"></div>
            <div class="correct hide">
                <span class="question-divider"></span>
                <div class="answer-content">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="answer-text">
                <p>Correct!</p>
                <p>Green or brown are good choices for this website - they represent nature and freshness or wholesomeness.</p>
            </div>
                </div>
            </div>

            <div class="wrong hide">

                <span class="question-divider"></span>
                <div class="answer-content">
                <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
                <div class="answer-text">
                    <p>Hmmm. Perhaps there is a better choice.</p>
                    <p>We're looking for a colour that represents nature and freshness. Try again. Don’t forget you can go back and look at the colours again.</p>
                </div>
                </div>
            </div>

        </div><!--/colour-quiz-->


    </div>

    <div class="success-row hide" id="successRow">
    <div class="holder holder--success">


        <div class="squares squares--success1"><span></span></div>
        <div class="squares squares--success2"><span></span></div>
        <div class="success-triangle"><span></span></div>
        <div class="barbell barbell--small"></div>


        <div class="page-summary" id="agree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="page-summary__text">
            <p>Well done!</p>
            <p>Of course, the combinations of colours you use along with their exact shade, hue or tone will also have an impact on their meaning.</p>
            <p>The use of colour is one way which may reassure the user they are in the right place. The use of typography is another.</p>
                <p><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Next Step</a></p>
            </div>
        </div>


    </div>

    </div>


</div>














</main>

@endsection

@section('javascript')

<script>

    var coloursDone = 0;

    $( ".select-answers-quiz a" ).on( "click", function(e) {
       $(this).toggleClass('selected');
        $(this).closest('.quiz').find('.error').addClass('hide');
        e.preventDefault();
    });
    $( ".js-check-answers" ).on( "click", function(e) {

        var rightAnswers = $(this).closest('.quiz').data('rightanswers'),
            quiz = $(this).closest('.quiz'),
            givenRightAnswers = 0;
			givenWrongAnswers = 0;

        $(this).closest('.quiz').find('a.selected').each(function() {
            var $this = $(this),
            answer = $this.attr('data-answer');
            if(answer === 'true') {
                givenRightAnswers++;
            } else {
				givenWrongAnswers++;
			}
        });
        if(givenRightAnswers === rightAnswers && givenWrongAnswers === 0) {
            $(this).closest('.colour-block').addClass('disabled');
            $(this).closest('.colour-block').next('.colour-block').removeClass('hide');
            $(this).closest('p').hide();
            $(this).closest('.colour-block').find('.correct').removeClass('hide');
            coloursDone++;
            if(coloursDone === 11) {
                $('#selectColours').removeClass('hide');
            }
        } else {
            $(this).closest('.quiz').find('.error').removeClass('hide');
            if(givenRightAnswers === 1) {
                $(this).closest('.quiz').find('.error-correct-answers').text(givenRightAnswers + ' right word');
            } else {
                $(this).closest('.quiz').find('.error-correct-answers').text(givenRightAnswers + ' right words');
            }
			if(givenWrongAnswers === 1) {
					$(this).closest('.quiz').find('.error-incorrect-answers').text(' and ' + givenWrongAnswers + ' wrong word');
            } else if(givenWrongAnswers > 1) {
                    $(this).closest('.quiz').find('.error-incorrect-answers').text(' and ' + givenWrongAnswers + ' wrong words');
			} else {
					$(this).closest('.quiz').find('.error-incorrect-answers').text('');
			}
            e.preventDefault();
        }


    });

    var correctColourQuiz = 0;

    $( ".colour-quiz a" ).on( "click", function(e) {
        if($(this).data('answer')===true) {
            $(this).closest('.colour-quiz').addClass('disabled');
            $(this).closest('.colour-quiz').find('.correct').removeClass('hide');
            $(this).closest('.colour-quiz').find('.wrong').addClass('hide');
            $(this).closest('.colour-quiz').next('.colour-quiz').removeClass('hide');
            correctColourQuiz++;
            if(correctColourQuiz === 6) {
                $('#successRow').removeClass('hide');
            }
        } else {
            $(this).closest('.colour-quiz').find('.wrong').removeClass('hide');
            e.preventDefault();
        }
    });







</script>

  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
  </script>
@endsection
