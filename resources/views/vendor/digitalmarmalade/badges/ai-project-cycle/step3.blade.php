@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-project-cycle.steps', ['title' => 'Steps'])

<main>

<section>
    <div class='holder'>

      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">The 4Ws Problem Scoping Canvas</h1>
      
      <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <div class="col" >
          <p>You can use the framework of the 4Ws Problem Canvas to look into the <strong>Who, What, Where</strong> and <strong>Why</strong> of a problem; this helps you to understand the key elements of the problem that your project is trying to solve.</p>
        </div>
        <div class="col">
          <p>You will be able to download a template to fill in for your own projects after finishing this badge but first, let’s work through the 4Ws Problem Canvas together.</p>
        </div>
      </div>

      <div class="slides__holder jsslides">

        <div class="slides" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300" >

          <div class="slide flex flex--center jsTextSlide">
            <div class="cols flex flex--column flex--center">
              <div class="col flex flex--center">
                <img class="no-margin" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/who.svg" data-aos-duration="1500" data-aos-delay="300" />
              </div>
              <div class="col flex flex--justify-center flex--column">
                <h2>Who</h2>
                <p>In this step we are looking at the person <strong>who</strong> is having the problem. They are also known as the stakeholders of the problem.</p>
                <p>Let’s use the Kimchi Crisis as an example, who is having the problem? There are:</p>
                <ul>
                  <li class="highlighted">The people who buy napa cabbage to make Kimchi</li>
                  <li class="highlighted">The farmers who plant napa cabbage for a living</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
            <div class='holder flex flex--center'>
              <div class="question jsTimelimeQuestion">
                <p>Let’s identify the stakeholders.</p>
                <p><strong>Who is having the problem?</strong></p>

                 <ul class="list--activity-answers list--2-cols flex flex--wrap">

                  <li class="box list--activity-answers__item flex flex--center jsAnswer">People who buy napa cabbage to make Kimchi</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer">Farmers who plant napa cabbage</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">People who buy napa cabbage and farmers who plant napa cabbage.</li>
                 </ul>

                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

              </div>
              <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You&rsquo;re right!</strong> The answer is both…. Next up, we have the <strong>What</strong>.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>

                 </div>
              </div>
              <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Almost!</strong> Actually both the farmers, and the people who buy napa cabbage are the stakeholders. Next up, we have the <strong>What</strong>.</p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                      <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</button>
                   </div>
                 </div>
               </div>
            </div>
          </div>
          <div class="slide flex flex--start jsTextSlide">
            <div class="cols flex flex--column flex--start">
              <div class="col flex flex--column">
                <h2>What</h2>
                <p>In this step, you consider the nature of the problem.</p>
                <p>Ask yourself 3 questions:</p>
                <ol class="highlighted">
                  <li>What is the problem?</li>
                  <li>How do you know that it is a problem?</li>
                  <li>Is there <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">evidence</span> that it is a problem?</li>
                </ol>

              </div>
              <div class="col flex flex--column ">            
                  <p>Think back to the Kimchi Crisis, now let’s apply the <strong>what</strong>.</p>
               <p>Ask yourself 3 questions:</p>
                <ol class="highlighted">
                  <li>The problem that the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">stakeholders</span> face is: the increase in cabbage prices and the unpredictability of cabbage prices.</li>
                  <li>You know that this is a problem because there are many news articles published about the soaring prices of napa cabbage near Kimchi making season.</li>
                  <li>There is evidence for the problem.</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
            <div class='holder flex flex--center'>
              <div class="question jsTimelimeQuestion">
                <p>Consider the nature of the problem.</p>
                <p><strong>What problem do the <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">stakeholders</span> face?</strong></p>

                 <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">

                   <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback1">People are making less Kimchi</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">The increase in cabbage prices and the unpredictability of cabbage prices</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback2">A poor harvest means farmers earn less money</li>

                 </ul>

                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

              </div>
   
               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You’ve got it!</strong> Importantly, there is also evidence of the problem. Next we will look at the <strong>Where</strong>.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>
                 </div>
               </div>

              <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast">People making less Kimchi is not the problem. Maybe, people are making less Kimchi as a result of the problem?</p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
  
                     
                     <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</a> 
                   </div>
                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast">The farmers aren’t the only stakeholders.</p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>
            </div>
          </div>
          <div class="slide flex flex--center jsTextSlide">
            <div class="cols flex flex--column flex--center">
              <div class="col flex flex--center flex--column">
                <img class="illustration--where" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/where.svg" data-aos-duration="1500" data-aos-delay="300" />
                <p class="highlighted">This is a <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip4_content">Systems Map</span>. To learn more about Systems Mapping, try the Problem Solving with AI badge linked at the end of this badge. </p>
              </div>
              <div class="col flex flex--justify-center flex--column">
                <h2>Where</h2>
                <p>In this step, we ask: <strong>where</strong> does the problem arise?</p>
                <p>This is where you describe the context or situation of the problem. Here, <strong>where</strong> doesn’t mean the location of the problem, instead it’s the context or situation in which the problem is arising.</p>
              </div>
            </div>
          </div>          
          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
            <div class='holder flex flex--center'>
              <div class="question jsTimelimeQuestion">
                <p>Let’s identify the context or situation in which the farmers, and the people buying the napa cabbage to make Kimchi experience the problem of the increase and unpredictability of napa cabbage prices.</p>
                <p><strong>What is the context or situation in which the problem is arising?</strong></p>
                 <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">
                   <li class="box list--activity-answers__item flex flex--center jsAnswer">During the Kimchi making seasons</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer">During the cabbage harvest seasons</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">Both</li>
                 </ul>
                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>
              </div>



               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--center flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Correct!</strong>  Last but not least, we ask <strong>Why</strong>.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>

                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Almost.</strong></p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>

            </div>
          </div>
          <div class="slide flex flex--start flex-center">
          
          
            
            <div class="cols flex flex--column flex--start">

              <div class="col flex flex--start flex--column">
                <h2>Why</h2>
                <p><strong>Why</strong> is the problem worth solving? This is important because it is what gives you the motivation to solve the problem.</p>
                <p>Ask yourself:</p>
                <ol class="highlighted">
                  <li>What would be most important to the stakeholders?</li>
                  <li>How would solving the problem improve their situation?</li>
                </ol>
              </div>
              <div class="col flex flex--justify-start flex--column">
                <p>Let’s apply the <strong>why</strong> to the Kimchi problem:</p>
                <ol class="highlighted">
                  <li>For people who buy napa cabbage, buying it at its lowest price instead of at its highest price is most important.</li>
                  <li>Solving the problem can improve their situation by allowing them to make more Kimchi and save money.</li>
                </ol>
                <img class="illustration--why"  src="/badge-assets/{{$url['slug']}}/_global/images/illustrations/why.svg"  />
              </div>
            </div>
          </div>
          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
            <div class='holder flex flex--center'>

              <div class="question jsTimelimeQuestion">
                <p>Now, what about the farmers?</p>
                <p><strong>What would be of key value to them, and how would solving the problem improve their situation?</strong></p>
                 <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">
                   <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">If the farmers could estimate their income better, it would allow them to plan ahead</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer">If the farmers have access to social media, then they can communicate with other farmers to plan their harvest</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer ">The farmers need Wikipedia in order to learn more about farming techniques</li>
                 </ul>
                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>
              </div>

               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--center flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You’re right!</strong> Well done.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                  </div>

                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That’s not the right answer.</strong></p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>

            </div>
          </div>
          <div class="slide slide--activity flex flex--center jsActivitySlide">
          
          <div class="cols cols--wordsearch flex flex--column">

            <div class="col flex flex--column flex--justify-center">
              <div>
                <h2>Find the 4Ws!</h2>
                <p>Can you find the 4Ws from the 4Ws Problem Scoping Canvas in the wordsearch below?</p>
              </div>
            </div>
            <div class="col">
              @include('vendor.digitalmarmalade.badges.ai-project-cycle.wordsearch')
              
              <div class="wordsearch-continue jsWordsearchNext">
                <a class="btn btn--blue inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Next</a>
              </div>


              <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                <div class="holder ">
                  <div class="speech-bubble--holder flex flex--end flex--column">
                    <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
                      <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Spot on!</strong></p>
                    </div>
                    <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/images/icons/icon--feedback-success.svg" />
                            <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Continue</a>
                    </div>

                </div>
              </div>

              
            </div>

    
            </div>

    
          </div>
            
        </div>
      </div>
      
      
      <div class="tooltip_templates">
        <span id="tooltip1_content">
            <p>Information that proves something is true.</p>
        </span>
        <span id="tooltip2_content">
            <p>The farmers and the people buying the napa cabbage to make Kimchi.</p>
        </span>
        <span id="tooltip3_content">
            <p>The farmers and the people buying the napa cabbage to make Kimchi.</p>
        </span>
        <span id="tooltip4_content">
            <p>A method used to understand complex issues with multiple factors that affect each other.</p>
        </span>
    </div>
    </div>
</section>

</main>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

$(document).ready(function(  ) {

  var $slides = $('.slides'),
      $nextSlide = $('.jsNextSlide');

    $slides.on('afterChange', function(event, slick, slideId){

        var current = $(this).find('.slick-current');

        // It's an activity slide
        if(current.hasClass('jsActivitySlide')){

          // Has the activity been completed?
          if(current.hasClass('jsCompleted')){
            $slides.find('.slick-next').removeClass('disabled');
          } else {
            $slides.find('.slick-next').addClass('disabled');
          }

        } else {
          // Text Slide - Do nothing
          $slides.find('.slick-next').removeClass('disabled');
        }

          AOS.refreshHard();

    });

    // Slide continue button.
    $nextSlide.on("click", function(e){
        e.preventDefault();
        $slides.slick('slickNext');
    });

    $slides.slick({
      dots: true,
      infinite: false,
      speed: 300,
      draggable: false,
      swipe: false,
      swipeToSlide: false,
      touchMove: false
    });

    /* Callback when an activity on a slide has been completed, re-enable the next arrow. */
    $(document).on('activityComplete', function() {
      $slides.find('.slick-next').removeClass('disabled');
    });
});
</script>

<script>

  var x, i, j, l, ll, selElmnt, a, b, c;
  /* Look for any elements with the class "custom-select": */
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("span");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("span");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      /* For each option in the original select element,
      create a new DIV that will act as an option item: */
      c = document.createElement("span");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /* When an item is clicked, update the original select box,
          and the selected item: */
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /* When the select box is clicked, close any other select boxes,
      and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }

  function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }

  /* If the user clicks anywhere outside the select box,
  then close all select boxes: */
  document.addEventListener("click", closeAllSelect);
</script>


@endsection