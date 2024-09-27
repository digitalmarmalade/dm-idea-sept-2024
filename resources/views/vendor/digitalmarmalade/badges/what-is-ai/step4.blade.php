@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.what-is-ai.steps', ['title' => 'Steps'])

<main>

  <section class='flex flex--center flex--column'>
   <div class='holder '>

    <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">What is AI?</h1>

    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
      <div class="col" >
        <p>AI is short for Artificial intelligence.</p>
        <p>AI is the ability of machines to learn from experience, without explicit programming, to perform cognitive functions associated with the human mind.</p>
      </div>
      <div class="col">
        <p>Think of Artificial Intelligence as computing power that can perform particularly complex tasks that would otherwise require a human brain to perform.</p>
      </div>
    </div>


    <img data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/svg/illustration--what-is-ai.svg" />


    <h2 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="400">How does AI work?</h2>
    <div class="cols flex flex--column flex--justify-space-between" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600">
      <div class="col" >
        <p>AI works by combining large amounts of data with fast, iterative processing and intelligent

        <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">algorithms</span>

        allowing the software to learn automatically from patterns or features in the data.</p>
      </div>
      <div class="col">
        <p>Cognitive computing is a subfield of AI that strives for a natural, human-like interaction with machines.</p>
      </div>
    </div>

   </div>
  </section>

  <section class='activity activity--fill-blanks activity--fill-blanks-what-is-ai flex flex--center flex--column jsSelectDropdown' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" data-scroll-anchor="jsScrollAnchor1">
   <div class='holder flex flex--column flex--center'>
      <p><strong>Can you fill in the blanks?</strong></p>
      <fieldset>
        <p>Artificial intelligence, or

          <span class="custom-select">
            <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer jsCorrect">AI</option>
              <option value="2" class="jsAnswer">VR</option>
            </select>
          </span>

           for short, is technology that enables a

           <span class="custom-select">
             <select class="jsOption">
               <option value="0">Select one</option>
               <option value="1" class="jsAnswer">plant</option>
               <option value="2" class="jsAnswer jsCorrect">computer</option>
             </select>
           </span>


          to think or act in a more &quot;human&quot; way. It does this by taking in

          <span class="custom-select">
            <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer jsCorrect">information</option>
              <option value="2" class="jsAnswer">sounds</option>
            </select>
          </span>


          from its surroundings, and

          <span class="custom-select">
            <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer">randomly choosing</option>
              <option value="2" class="jsAnswer jsCorrect">deciding</option>
            </select>
          </span>


           its response based on what it

           <span class="custom-select xselected">
             <select class="jsOption">
               <option value="0">Select one</option>
               <option value="1" class="jsAnswer jsCorrect">learns</option>
               <option value="2" class="jsAnswer">imagines</option>
             </select>
           </span>

          or

          <span class="custom-select">
            <select class="jsOption">
              <option value="0">Select one</option>
              <option value="1" class="jsAnswer">thinks</option>
              <option value="2" class="jsAnswer jsCorrect">senses</option>
            </select>
          </span>

          .</p>

      </fieldset>

      <button class="btn btn--blue inline-flex flex--center jsCheck" href="#">Check</button>
    </div>


    <div class='activity--feedback activity--feedback-success hide jsFeedbackSuccess'>
      <div class="holder ">
        <div class="speech-bubble--holder flex flex--end flex--column">
          <div class="speech-bubble green animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Nicely done!</strong></p>
          </div>
          <img class="flex flex--align-self-end animate__animated animate__zoomIn animate__delay-1s animate__faster" src="/badge-assets/{{$url['slug']}}/_global/svg/icon--feedback-success.svg" />
                  <a class="btn btn--blue inline-flex flex--center animate__animated animate__zoomIn animate__delay-1s animate__faster" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >Continue</a>
          </div>

      </div>
    </div>


    <div class='activity--feedback activity--feedback-fail hide jsFeedbackFail'>
      <div class="holder ">
        <div class="speech-bubble--holder">
          <div class="speech-bubble red animate__animated animate__fadeInUp animate__delay-1s animate__fast">
            <p class="animate__animated animate__fadeInLeft animate__delay-1s animate__fast"><strong>Oops, that&rsquo;s not quite right...</strong></p>
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


  <div class="tooltip_templates">
      <span id="tooltip1_content">
          <p>A process or set of rules that a computer follows to solve a problem.</p>
      </span>
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
  $(document).ready(function(  ) {
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
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

@endsection
