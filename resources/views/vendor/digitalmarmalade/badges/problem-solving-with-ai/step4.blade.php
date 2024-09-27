@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.problem-solving-with-ai.steps', ['title' => 'Steps'])

<main>

  <section class='flex flex--center flex--column'>


   <div class='holder flex flex--center flex--column'>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">How can AI be used to help a business or activity?</h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>We have just learned, through a real-life case study, how AI can be used to train a model to distinguish patterns and make predictions based on a set of data.</p>
        <p>The more times you train a model and the more data you give to the model, the smarter the model will become.</p>
        <p>You too can develop projects like this using your AI skills!</p>
        <p>Project Vegita is a good example of a social impact project that uses AI. </p>
        <p>It uses AI to predict cabbage prices and improves outcomes for both consumers and farmers in Korea.</p>
      </div>
      <div class="col" >
        <img src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--ai-helping-business.svg" />
      </div>
    </div>

    <p class="col-single" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300"><strong>Project Vegita helped:</strong></p>

    <ul class="flex flex--column list--1-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">
      <li class='box flex flex--center'><strong>To stabilise the price of Kimchi by predicting the cost of cabbage (Kimchi&rsquo;s main ingredient) in advance.</strong></li>
      <li class='box flex flex--center'><strong>Koreans who buy a lot of cabbage to make Kimchi save money. For example, consumers can decide when it is the best time to buy Kimchi ingredients in bulk.</strong></li>
      <li class='box flex flex--center'><strong>Farmers estimate their potential income better and to be able to plan ahead.</strong></li>
    </ul>

   </div>
  </section>

  <section class='activity activity--fill-blanks activity--fill-blanks-what-is-ai flex flex--center flex--column jsSelectDropdown' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" data-scroll-anchor="jsScrollAnchor1">
   <div class='holder flex flex--column flex--center'>
      <p><strong>Can you fill in the blanks?</strong></p>
      <fieldset>
        <p>Project Vegita helped consumers

          <span class="custom-select">
            <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer jsCorrect">save money</option>
              <option value="2" class="jsAnswer">spend more money</option>
              <option value="3" class="jsAnswer">grow cabbage</option>
            </select>
          </span>

          , farmers to be able to

           <span class="custom-select">
             <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer jsCorrect">plan for the future</option>
              <option value="2" class="jsAnswer">make kimchi</option>
              <option value="3" class="jsAnswer">build AI models</option>
             </select>
           </span>

           and

           <span class="custom-select">
             <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer">increase</option>
              <option value="2" class="jsAnswer">decrease</option>
              <option value="3" class="jsAnswer jsCorrect">stabilise</option>
             </select>
           </span>

           cabbage prices.</p>

      </fieldset>

      <button class="btn btn--blue inline-flex flex--center jsCheck" href="#">Check</button>
    </div>


    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That&rsquo;s right!</strong> Project Vegita created a solution that helped improve the outcomes for both consumers and farmers!</p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
          </div>
        <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
      </div>
    </div>


    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>That&rsquo;s not quite right...</strong> Take another look at the text to see how Project Vegita helped everyone in the community.</p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTryAgain">Try again</button>
        </div>
      </div>
    </div>

    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFailMaxAttempts'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Keep trying!</strong></p>
          </div>
          <img class="flex flex--align-self-start animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-fail.svg" />
          <button class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster jsTryAgain">Try again</button>
        </div>
      </div>
    </div>

  </section>

  <section class="jsScrollAnchor1"></section>

</main>



@endsection
@section('javascript')

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

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
