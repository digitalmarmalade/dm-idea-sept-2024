@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="bg-cream"
@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.sustainable-development-goals.header', ['title' => 'Header'])


<ul class="steps">
  <li class="steps--active">1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
</ul>

  <main class="step-1 red">


    <section class="bg-cream">

      <div class="slider-holder slider-step-1 wrapper relative">


      <div class="slider-image-top-wrapper">
         <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/slide__illustration.png" alt="" class="slider-image-top" data-aos="fade-up" data-aos-delay="200" />
      </div>
     

        <div class="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>

          <div class="slide slide-1">
            <div class="slide-content">
               <div class="slider-text" data-aos="fade-left" data-aos-delay="300">
                    <h3>Millennium Declaration</h3>
                    <p>In September 2000, leaders of 189 countries gathered at the United Nations headquarters and signed the historic <strong>Millennium Declaration</strong>.</p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--millenium-declaration.png'); " > 
                    
               </div>
            </div>
          </div>

          <div class="slide slide-2">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>MDGs </h3>
                    <p>Together, they committed to achieving a set of eight goals ranging from halving extreme poverty and hunger, to promoting gender equality and reducing child mortality, by the target date of 2015. These became known as the <strong>Millennium Development Goals (MDGs)</strong>.</p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--mdgs.png'); "> 
               </div>
            </div>
          </div>

          <div class="slide slide-3">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Tackling poverty</h3>
                    <p>The MDGs established <strong>measurable, universally-agreed objectives</strong> for tackling extreme poverty and hunger, preventing deadly diseases, and expanding primary education to all children, among other development priorities.</p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--tackling-poverty.png'); "> 
               </div>
            </div>
          </div>


          <div class="slide slide-4">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>15 years</h3>
                    <p>For 15 years, the MDGs drove <strong>progress in several important areas</strong>: reducing income poverty, providing much needed access to water and sanitation, driving down child mortality and drastically improving maternal health. </p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--15-years.png'); ">                    
               </div>
            </div>
          </div>

          <div class="slide slide-5">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Global movement</h3>
                    <p>They also kick-started a global movement for free primary education, inspiring countries to 
                      <strong>invest in their future generations</strong>. Most significantly, the MDGs made huge strides in combatting HIV/AIDS and other treatable diseases such as malaria and tuberculosis.</p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--global-movent.png'); ">                  
               </div>
            </div>
          </div>


          <div class="slide slide-6">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>New plan</h3>
                    <p>However, by 2012 it was clear that there was a long way to go before the goals could be fully achieved. A <strong>new plan</strong> was needed to ensure the momentum that had begun with the MDGs would sustain into the future.
                    </p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--new-plan.png'); ">                 
               </div>

            </div>
          </div>


          <div class="slide slide-7">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>SDGs</h3>
                    <p><strong>The Sustainable Development Goals (SDGs)</strong> were conceived at the United Nations Conference on Sustainable Development in Rio de Janeiro in 2012. 
                    </p>
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--SDGs.png'); "> 
               </div>
            </div>
          </div>


          <div class="slide slide-8">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Universal Goals</h3>
                    <p>The objective was to produce a set of universal goals that meet the urgent environmental, political and economic challenges facing our world. A new set of 17 goals would be created to replace the MDGs. These were set in 2015, agreed by 193 nations, and have a delivery target by the year 2030.</p>
                    <p class="slider-continue-desktop">
                      <a href="#" class="btn btn--continue jsLetsContinue">Let's continue</a>
                    </p>        
               </div><!--/slider-text-->
               <div class="slider-image" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--universal-goals.png'); "> 
               </div>
               <div class="slider-continue slider-continue-mobile"><a href="#" class="btn btn--continue jsLetsContinue">Let's continue</a></div>
            </div>
          </div>

      </div>

      </div>
    </section>

<!-- 


    <section class="bg-cream">

      <div class="slider-holder slider-step-1 wrapper relative">


      <div class="slider-image-top-wrapper">
         <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/slide__illustration.png" alt="" class="slider-image-top" />
      </div>
     

        <div class="slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>

          <div class="slide slide-1" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--millenium-declaration.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Millennium Declaration</h3>
                    <p>In September 2000, leaders of 189 countries gathered at the United Nations headquarters and signed the historic <strong>Millennium Declaration</strong>.</p>
               </div>
            </div>
          </div>

          <div class="slide slide-2"  style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--mdgs.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>MDGs </h3>
                    <p>Together, they committed to achieving a set of eight goals ranging from halving extreme poverty and hunger, to promoting gender equality and reducing child mortality, by the target date of 2015. These became known as the <strong>Millennium Development Goals (MDGs)</strong>.</p>
               </div>
            </div>
          </div>

          <div class="slide slide-3" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--tackling-poverty.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Tackling poverty</h3>
                    <p>The MDGs established <strong>measurable, universally-agreed objectives</strong> for tackling extreme poverty and hunger, preventing deadly diseases, and expanding primary education to all children, among other development priorities.</p>
               </div>
            </div>
          </div>


          <div class="slide slide-4" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--15-years.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>15 years</h3>
                    <p>For 15 years, the MDGs drove <strong>progress in several important areas</strong>: reducing income poverty, providing much needed access to water and sanitation, driving down child mortality and drastically improving maternal health. </p>
               </div>
            </div>
          </div>

          <div class="slide slide-5" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--global-movent.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Global movement</h3>
                    <p>They also kick-started a global movement for free primary education, inspiring countries to 
                      <strong>invest in their future generations</strong>. Most significantly, the MDGs made huge strides in combatting HIV/AIDS and other treatable diseases such as malaria and tuberculosis.</p>
               </div>
            </div>
          </div>


          <div class="slide slide-6" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--new-plan.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>New plan</h3>
                    <p>However, by 2012 it was clear that there was a long way to go before the goals could be fully achieved. A <strong>new plan</strong> was needed to ensure the momentum that had begun with the MDGs would sustain into the future.
                    </p>
               </div>

            </div>
          </div>


          <div class="slide slide-7" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--SDGs.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>SDGs</h3>
                    <p><strong>The Sustainable Development Goals (SDGs)</strong> were conceived at the United Nations Conference on Sustainable Development in Rio de Janeiro in 2012. 
                    </p>
               </div>                
            </div>
          </div>


          <div class="slide slide-8" style="background-image: url('/badge-assets/{{$url['slug']}}/_global/img/step-1/slider/illustration--universal-goals.png'); ">
            <div class="slide-content">
               <div class="slider-text">
                    <h3>Universal Goals</h3>
                    <p>The objective was to produce a set of universal goals that meet the urgent environmental, political and economic challenges facing our world. A new set of 17 goals would be created to replace the MDGs. These were set in 2015, agreed by 193 nations, and have a delivery target by the year 2030.</p>
                    <p>
                      <a href="#" class="btn btn--continue jsLetsContinue">Let's continue</a>
                    </p>
               </div>
            </div>
          </div>

      </div>

      </div>
    </section>
-->
    

    </section>

    <section class=" bg-purple next-step red center-task hide">

        <div class="quiz-holder">

          <div class="quiz quiz--order quiz--final jsQuiz">

              <div class="quiz-image">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/step-1/task__illustration.png" alt="" />
              </div>

                <div class="quiz-questions">
                  
                  <div class="quiz-question active">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">When was the Millennium Declaration signed?</p>
                     
                      <ul class="quiz-options">
                          <li><a href="#">1990</a></li>
                          <li><a href="#" data-answer="true">2000</a></li>
                          <li><a href="#">2010</a></li>
                          <li><a href="#">2015</a></li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">What does MDGs stand for?</p>
                     
                      <ul class="quiz-options">
                          <li><a href="#">Mankind Development Goals</a></li>
                          <li><a href="#">Mercy Derived Goals</a></li>
                          <li><a href="#" data-answer="true">Millennium Development Goals</a></li>
                          <li><a href="#">Mankinds Delivery Goals</a></li>
                      </ul>
                  </div>
                  
                  <div class="quiz-question hide">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">What are the Millennium Development Goals?</p>
                    
                      <ul class="quiz-options">
                        <li><a href="#">Objectives decided by UNICEF</a></li>
                        <li><a href="#" data-answer="true">Objectives agreed by 189 countries</a></li>
                        <li><a href="#">Objectives agreed by the member states of EU</a></li>
                        <li><a href="#">Objectives agreed by the G8</a></li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">Which of these was a goal for the Millennium Development Goals?</p>
                      <ul class="quiz-options">
                        <li><a href="#">Expand swimming education for all children</a></li>
                        <li><a href="#" data-answer="true">Expand primary education to all children</a></li>
                        <li><a href="#">Increase the number of children in work</a></li>
                        <li><a href="#">Expand the number of people attaining a degree</a></li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">How many Universal Goals were set in 2015?</p>
                      <ul class="quiz-options">
                          <li><a href="#">12</a></li>
                          <li><a href="#">15</a></li>
                          <li><a href="#">20</a></li>
                          <li><a href="#" data-answer="true">17</a></li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">How many countries agreed to the Universal Goals?</p>
                      <ul class="quiz-options">
                          <li><a href="#" data-answer="true">193</a></li>
                          <li><a href="#">8</a></li>
                          <li><a href="#">124</a></li>
                          <li><a href="#">189</a></li>
                      </ul>
                  </div>

                  <div class="quiz-question hide">
                      <p class="quiz-step"></p>
                      <p class="quiz-the-question">When is the delivery target for the Universal Goals?</p>
                      <ul class="quiz-options">
                          <li><a href="#">2020</a></li>
                          <li><a href="#">2025</a></li>
                          <li><a href="#" data-answer="true">2030</a></li>
                          <li><a href="#">2040</a></li>
                      </ul>
                  </div>


                </div>


                <div class="quiz-feedback hidden">

                  <div class="quiz-incorrect hide">
                    <span class="quiz-feedback-title">Oops...<br>Not quite right.</span>
                    <p>Try a different answer</p>
                  </div>

                  <div class="quiz-correct hide">
                    <span class="quiz-feedback-title">Correct</span>
                    <p>Let's move on</p>
                    <p class="no-margin"><a href="#" class="btn btn--small jsQuizNext">Next</a></p>
                  </div>

                  <div class="quiz-correct-next hide">
                    <span class="quiz-feedback-title">Correct</span>
                    <p>Well done! Let’s now discover why the SDGs matter to the world</p>
                    <p><a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn--small jsQuizContinue">Continue</a></p>
                  </div>
                 
                </div>

                
            </div><!--/quiz-->

        </div><!--/holder-->

      <!--
        <div id="nextStep" class="feedback feedback-success feedback-step-7 jsNextStep hide">
            <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-correct.svg" alt="" />
            <p><span>Well done!</span></p>
            <a onclick="oBadges.stepCompleted();" class="btn btn-white" href="success">Continue</a>
        </div>-->

     </section>

  <!--
    <section class="next-step red hide">
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
    </section>-->

  </main>
    @endsection


    @section('javascript')


      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 1);
      </script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1-quiz.js"></script>
        
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
        <script>
        var item_length = $('.slider > div').length - 1,
        	wrongAnswers = 0;

        $('.slider').slick({
            infinite: false,
            dots: true,
        //    adaptiveHeight: true
        }).on('afterChange', function(event, slick, currentSlide, nextSlide){
        	if(currentSlide == item_length) {
        	//	$('.next-step').removeClass('hide');
          //  $("html, body").animate({scrollTop: $(document).height()});
        	}
        });
      </script>


    @endsection
