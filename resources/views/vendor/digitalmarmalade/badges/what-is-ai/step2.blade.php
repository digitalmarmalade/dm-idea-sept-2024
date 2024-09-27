@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])
<main class="overflow-visible">

  <section class="">
    <div class='holder'>

      <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">The history of computer chips</h1>
    </div>
      <div class="timeline--holder jsTimeline">
        <div class="timeline" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">

          <div class="slide flex flex--center jsTextSlide">
            <div class="cols flex flex--column flex--center">
              <div class="col flex flex--center">
                <img class="no-margin" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--timeline-first-digital-computer.png" data-aos-duration="1500" data-aos-delay="300" />
              </div>
              <div class="col flex flex--justify-center flex--column">
                <h2>The First Digital Computer</h2>
                <p>The first digital computer, ENIAC, was built in 1946. ENIAC was huge and had to have its own room! It weighed more than 30 tons and had approximately 100,000 parts, which included 18,000

                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">vacuum tubes.</span>

                </p>
                <p>The problem with vacuum tubes was that they consumed an enormous amount of power and failed often. Unfortunately for ENIAC, a vacuum tube would fail every couple of days or so and would have to be replaced.</p>
              </div>
            </div>
          </div>

          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="2">
            <div class='holder flex flex--center'>

              <div class="question jsTimelimeQuestion">
                <p><strong>What was the problem with vacuum tubes?</strong><br>Select 2 answers:</p>

                 <ul class="list--activity-answers list--2-cols flex flex--wrap">

                  <li class="box list--activity-answers__item flex flex--center jsAnswer">They were too big</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">They failed often</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer">They were too heavy</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">They used a lot of power </li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer">Things would get stuck in them</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer">They used a lot of water</li>
                 </ul>

                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

              </div>



               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>You&rsquo;re right!</strong> Vacuum tubes often failed and they used a huge amount of power so scientists started working to find a replacement.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>

                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Oops!</strong> Not quite...</p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>


            </div>
          </div>

          <div class="slide flex flex--center jsTextSlide">
            <div class="cols flex flex--column flex--center">
              <div class="col flex flex--center">
                <img class="no-margin" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--timeline-transistor.svg" data-aos-duration="1500" data-aos-delay="300" />
              </div>
              <div class="col flex flex--justify-center flex--column">
                <h2>Transistors</h2>
                <p>The first working

                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">transistors</span> were invented in 1947.
                  Transistors significantly reduced the amount of power that was needed to run electronic circuits however, a circuit still needed to be assembled from individual transistors <strong>and</strong> other components, for example,

                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip3_content">resistors</span>

                   and

                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip4_content">capacitors</span>

                    that had to be connected with wires and solder.</p>

                <p>A circuit built like this will not work if there is even just one faulty connection.</p>
              </div>
            </div>
          </div>

          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide" data-max-selected="1">
            <div class='holder flex flex--center'>

              <div class="question jsTimelimeQuestion">
                <p><strong>What is a transistor?</strong></p>

                 <ul class="list--activity-answers list--activity-answers-3-cols flex flex--wrap">

                   <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback1">An electronic device that stores electric energy.</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">A device that regulates current or voltage flow and acts as a switch or gate for electronic signals.</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer" data-show-feedback="jsFeedback2">An electrical component that limits or regulates the flow of electrical current in an electronic circuit.</li>

                 </ul>

                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

              </div>



               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Great!</strong> A transistor is a device that regulates current or voltage flow and acts as a switch or gate for electronic signals.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                      <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>

                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback1'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Oops, that&rsquo;s a capacitor.</strong></p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail jsFeedback2'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Oops, that&rsquo;s a resistor.</strong></p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>


            </div>
          </div>

          <div class="slide flex flex--center jsTextSlide">
            <div class="cols flex flex--column flex--center">
              <div class="col flex flex--center">
                <img class="no-margin" data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--timeline-integrated-circuits.svg" data-aos-duration="1500" data-aos-delay="300" />
              </div>
              <div class="col flex flex--justify-center flex--column">
                <h2>Integrated Circuits, or Chips!</h2>
                <p>In 1958, Jack Kilby invented the

                  <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip5_content">integrated circuit</span>

                , otherwise known as a chip.</p>
                <p>The integrated circuit got rid of wires, prevented faulty connections and made the entire circuit much smaller.</p>
                <p>Robert Noyce came up with the idea of making an integrated circuit out of silicon which was better suited to large scale manufacturing, and soon he was part of a young company called Intel.</p>
              </div>
            </div>
          </div>

          <div class="slide flex flex--center">
            <div class="cols flex flex--column flex--center">

              <div class="col col--no-pading flex flex--justify-center flex--column">
                <h2>Moore&rsquo;s Law</h2>
                <p>In 1965, Intel&rsquo;s co-founder, Gordon Moore predicted that the increasing complexity of chips will result in a reduction in the cost of transistors at a steady, increasing rate.</p>
                <p>This prediction is commonly known as <strong>Moore&rsquo;s Law.</strong></p>
                <p>Moore&rsquo;s Law states that the number of transistors in integrated circuits doubles every two years. Simply put, it suggests that the speed of computing doubles every two years while the cost halves.</p>

              </div>
              <div class="col col--no-pading flex flex--justify-center flex--column">
                <p>Smaller and faster computers improve transport, health care, education, and energy production.</p>
                <p>People have often speculated that Moore&rsquo;s Law would eventually fail, but for more than four decades, Moore's Law has held, driving incredible growth and

                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip6_content">miniaturisation</span>.</p>

                <p>According to Stanford University&rsquo;s &ldquo;AI Index 2019 Annual Report&rdquo;, before 2012, computing doubled every two years. Since 2012, computing has been doubling every 3.4 months! </p>
              </div>
            </div>
          </div>

          <div class="slide slide--activity flex flex--center jsSelectItems jsActivitySlide">
            <div class='holder flex flex--center'>

              <div class="question jsTimelimeQuestion">
                <p><strong>What is Moore&rsquo;s Law?</strong></p>

                 <ul class="list--activity-answers flex flex--wrap">

                   <li class="box list--activity-answers__item flex flex--center jsAnswer">A law that protects you from crime on the internet.</li>
                   <li class="box list--activity-answers__item flex flex--center jsAnswer jsCorrect">An observation of the speed at which industry can deliver better computing at lower costs.</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer">A prediction about the speed and cost of transport.</li>
                  <li class="box list--activity-answers__item flex flex--center jsAnswer">A scientific principle.</li>

                 </ul>

                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

              </div>



               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--center flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Well done!</strong></p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                    <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>

                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Hmm that&rsquo;s not quite right.</strong></p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>

            </div>
          </div>

          <div class="slide slide--activity flex flex--center jsSelectDropdown jsActivitySlide">
            <div class='holder flex flex--center'>

              <div class="question activity--fill-blanks activity--fill-blanks-history-computer-chips jsTimelimeQuestion">
                <p><strong>Can you fill in the blanks?</strong></p>
                <fieldset>
                  <p>Moore&rsquo;s law, first put forward by the Intel co-founder

                    <span class="custom-select">
                      <select class="jsOption">
                        <option value="0">Select one</option>
                        <option value="1" class="jsAnswer jsCorrect">Gordon Moore</option>
                        <option value="2" class="jsAnswer">Henry Moore</option>
                        <option value="2" class="jsAnswer">Jessica Moore</option>
                      </select>
                    </span>

                      states that the processing power of a chip

                     <span class="custom-select">
                       <select class="jsOption">
                         <option value="0">Select one</option>
                         <option value="1" class="jsAnswer jsCorrect">doubles </option>
                         <option value="2" class="jsAnswer ">halves</option>
                         <option value="2" class="jsAnswer">triples</option>
                       </select>
                     </span>


                    every

                    <span class="custom-select">
                      <select class="jsOption">
                        <option value="0">Select one</option>
                        <option value="1" class="jsAnswer">ten</option>
                        <option value="2" class="jsAnswer jsCorrect">two</option>
                        <option value="2" class="jsAnswer">four</option>
                      </select>
                    </span>


                    years, while the price

                    <span class="custom-select">
                      <select class="jsOption">
                        <option value="0">Select one</option>
                        <option value="1" class="jsAnswer jsCorrect">falls</option>
                        <option value="2" class="jsAnswe">increases</option>
                        <option value="2" class="jsAnswer">doubles</option>
                      </select>
                    </span>


                     by

                     <span class="custom-select xselected">
                       <select class="jsOption">
                         <option value="0">Select one</option>
                         <option value="1" class="jsAnswer jsCorrect">half</option>
                         <option value="2" class="jsAnswer">quarter</option>
                         <option value="2" class="jsAnswer">30%</option>
                       </select>
                     </span>


                    .</p>

                </fieldset>

                 <button id="trigger" class="btn btn--blue inline-flex flex--center flex--align-self-center jsCheck">Check</button>

              </div>



               <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder flex flex--end flex--column">
                     <div class="speech-bubble green animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Nice work!</strong> Remember, Moore&rsquo;s Law is not a scientific principle. It is an observation of the pace at which the industry can deliver better computing at lower costs.</p>
                     </div>
                     <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                        <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsNextSlide">Continue</a>
                     </div>

                 </div>
               </div>

               <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>That&rsquo;s not it.</strong> Moore&rsquo;s Law states that the processing power of a chip doubles every two years, while the price halves. </p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>

              <div class='activity--feedback activity--feedback-fail hide jsFeedbackFailMaxAttempts'>
                 <div class="holder flex flex--center ">
                   <div class="speech-bubble--holder">
                     <div class="speech-bubble red animate__animated animate__fadeInUp animate__fast">
                       <p class="animate__animated animate__fadeInLeft animate__fast"><strong>Almost!</strong> Have another go.</p>
                     </div>
                     <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
                     <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__faster jsReset">Try again</button>
                   </div>
                 </div>
               </div>
            </div>
          </div>

          <div class="slide flex flex--center jsTextSlide">
            <div class="cols flex flex--column flex--center">

              <div class="col flex flex--justify-center flex--column">
                <h2>High Processing Computing Devices</h2>
                <p>By the 2010&rsquo;s we saw the mass deployment of

                <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip7_content">high processing computing devices</span>

                , in every aspect of our lives.</p>
                <p>Each digital era requires different chips. Previously, manufacturers tended toward maximizing processing speed with less regard for power consumption. Now the demand has moved toward more efficient uses of power.</p>

              </div>
              <div class="col flex flex--center flex--column">
                <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--timeline-high-processing-computing-devices.svg" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300" data-aos-anchor-placement="bottom-bottom" />
                <p>Today, a state-of-the-art chip contains more than a billion components packed into an area the size of a human fingernail!</p>

                <a class="btn btn--blue inline-flex flex--center" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
              </div>
            </div>
          </div>


      </div>

    </div>
  </section>

  <div class="tooltip_templates">
      <span id="tooltip1_content">
          <p>An electronic device that controls the flow of <strong>electrons</strong> in a <strong>vacuum</strong>.</p>
          <p>An <strong>electron</strong> is small piece of metal or other substance by which electrical currents can travel.</p>
          <p>A <strong>vacuum</strong> is a space without air or matter.</p>
      </span>

      <span id="tooltip2_content">
        <p>A device that regulates current or voltage flow and acts as a switch or gate for electronic signals.</p>
      </span>

      <span id="tooltip3_content">
        <p>An electrical component that limits or regulates the flow of electrical current in an electronic circuit.</p>
      </span>

      <span id="tooltip4_content">
        <p>An electronic device that stores electric energy.</p>
      </span>

      <span id="tooltip5_content">
        <p>An electronic circuit formed on a small piece of semiconducting material, usually silicon, which performs the same function as a larger circuit made from discrete components.</p>
      </span>

      <span id="tooltip6_content">
        <p>The process of using technology to make something smaller and smaller in size.</p>
      </span>

      <span id="tooltip7_content">
        <p>Computers with the ability to manipulate large amounts of data at high speed.</p>
      </span>


  </div>

</main>



@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>

$(document).ready(function(  ) {

  var $timeline = $('.timeline'),
      $nextSlide = $('.jsNextSlide');

    $timeline.on('afterChange', function(event, slick, slideId){

        var current = $(this).find('.slick-current');

        // It's an activity slide
        if(current.hasClass('jsActivitySlide')){

          // Has the activity been completed?
          if(current.hasClass('jsCompleted')){
            $timeline.find('.slick-next').removeClass('disabled');
          } else {
            $timeline.find('.slick-next').addClass('disabled');
          }

        } else {
          // Text Slide - Do nothing
          $timeline.find('.slick-next').removeClass('disabled');
        }

          AOS.refreshHard();

    });

    // Slide continue button.
    $nextSlide.on("click", function(e){
        e.preventDefault();
        $timeline.slick('slickNext');
    });

    $timeline.slick({
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
      $timeline.find('.slick-next').removeClass('disabled');
    });

	  var triggerMode = 'hover';

	  if($('body').hasClass('touch')){
		  triggerMode = 'click';
	  }

    $('.jsTooltip').tooltipster({
         trigger: triggerMode,
         maxWidth: 350
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
