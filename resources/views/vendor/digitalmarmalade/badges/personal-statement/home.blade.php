@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="home">
  <img class="people-mobile" src="/badge-assets/{{$url['slug']}}/_global/img/people-mobile.png" alt=""/>
  <svg id="people" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="1600" height="900" viewBox="0 0 1600 900">
    <defs>
    <radialGradient id="maskGradient">
      <stop offset="50%" stop-color="#fff"/>
      <stop offset="100%" stop-color="#000"/>
    </radialGradient>
    <mask id="theMask">
     <circle id="masker" r="150" fill="url(#maskGradient)" cx="800" cy="450" />
    </mask>
    </defs>
      <image id="lines" xlink:href="/badge-assets/{{$url['slug']}}/_global/img/people-bw.png" x="0" y="0" width="1600" height="900" />
      <g id="maskReveal" mask="url(#theMask)" >
        <image id="regular" xlink:href="/badge-assets/{{$url['slug']}}/_global/img/people-colour.png" x="0" y="0" width="1600" height="900" />
      </g>
      <circle id="ring" r="20" fill="none" stroke="#ff9933" stroke-width="2" cx="800" cy="450" />
      <circle id="dot" r="10" fill="#ff9933" cx="800" cy="450" />
  </svg>
  <div id="instructions">
    <svg id="dial" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
    <path id="progressRing" d="M50,10A40,40,0,1,1,10,50,40,40,0,0,1,50,10Z" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="6"/>
    <circle r="43" fill="none" stroke="#fff" cx="50" cy="50" stroke-width="2" opacity="0.5" />
     <circle r="37" fill="none" stroke="#fff" cx="50" cy="50" stroke-width="2" opacity="0.5"/>
     <text transform="translate(55 56)" text-anchor="start" font-size="20" fill="#fff">%</text>
     <text id="counter" transform="translate(55 56)" text-anchor="end" font-size="20" fill="#fff">0</text>
    </svg>
  </div>
    <section class="blue">
      <div class="holder">
        <div class="home-copy">
          <div class="title">
            <ul class="personal">
              <li data-aos="fade-right" data-aos-delay="300"><span>P</span></li>
              <li data-aos="fade-right" data-aos-delay="400"><span>e</span></li>
              <li data-aos="fade-right" data-aos-delay="500"><span>r</span></li>
              <li data-aos="fade-right" data-aos-delay="600"><span>s</span></li>
              <li data-aos="fade-right" data-aos-delay="700"><span>o</span></li>
              <li data-aos="fade-right" data-aos-delay="800"><span>n</span></li>
              <li data-aos="fade-right" data-aos-delay="900"><span>a</span></li>
              <li data-aos="fade-right" data-aos-delay="1000"><span>l</span></li>
            </ul>
            <h1 data-aos="fade-up">Statements</h1>
          </div>
        </div>
        <p data-aos="fade-up">When applying for a job or a place at university or college, it is your personal statement that will mark you out from the crowd – your chance to shine. </p>
        <p data-aos="fade-up" data-aos-delay="200">It is an opportunity to fill in the blanks and build up a picture of who you are, so you can leave a lasting impression and make sure you get that coveted offer or invitation to meet. </p>

        <p data-aos="fade-up" data-aos-delay="300">Personal statements are a critical component of any application process. Give yourself the best chance of yours being read by researching and meeting all the application requirements.</p>
        <p data-aos="fade-up" data-aos-delay="400">Use your personal statement to help you show the 'real you' - highlighting your achievements, experiences, skills and aspirations.</p>
        <h2 data-aos="fade-in" data-aos-delay="400">Throughout this badge you will:</h2>
        <ul class="learning-outcomes">
          <li data-aos="fade-in" data-aos-delay="500">Find out what makes a personal statement shine</li>
          <li data-aos="fade-in" data-aos-delay="600">Learn techniques to help you stand out from the crowd</li>
          <li data-aos="fade-in" data-aos-delay="700">Discover how to identify your transferable skills</li>
          <li data-aos="fade-in" data-aos-delay="800">Learn how to craft your narrative and frame it to suit different situations</li>
        </ul>
      </div>

    </section>
      <a class="btn btn-primary" onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Start Badge</a>

</main>

@endsection

@section('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script>
  console.clear();
  var svg = document.querySelector("#people");
  var tl = new TimelineMax({onUpdate:onUpdate});
  var pt = svg.createSVGPoint();
  var data = document.querySelector(".tlProgress");
  var counter = document.querySelector("#counter");
  var ratio = 0.5625;

  TweenMax.set("#instructions, #dial", {xPercent: -50});
  TweenMax.set("#progressRing", {drawSVG:0});

  tl.to("#masker", 2, {attr:{r:2400}, ease:Power2.easeIn});
  tl.reversed(true);

  function mouseHandler() {
    tl.reversed(!tl.reversed());
  }

  function getPoint(evt){
    pt.x = evt.clientX;
    pt.y = evt.clientY;
    return pt.matrixTransform(svg.getScreenCTM().inverse());
  }

  function mouseMove(evt) {
    var newPoint = getPoint(evt);
    TweenMax.set("#dot", {attr:{cx:newPoint.x, cy:newPoint.y}});
    TweenMax.to("#ring, #masker", 0.88, {attr:{cx:newPoint.x, cy:newPoint.y}, ease:Power2.easeOut});
   }

  function onUpdate() {
    var prog = (tl.progress() * 100);
    TweenMax.set("#progressRing", {drawSVG:prog + "%"});
    counter.textContent = prog.toFixed();
  }

  function newSize() {
    var w = window.innerWidth ;
    var h = window.innerHeight;
    if (w > h * (16/9) ) {
      TweenMax.set("#people", { attr: { width: w, height: w * ratio } });
    } else {
      TweenMax.set("#people", { attr: { width: h / ratio, height: h } });
    }
    var data = svg.getBoundingClientRect();
    TweenMax.set("#people", {x:w/2 - data.width/2});
    TweenMax.set("#people", {y:h/2 - data.height/2});
  }

  window.addEventListener("mousedown", mouseHandler);
  window.addEventListener("mouseup", mouseHandler);
  window.addEventListener("mousemove", mouseMove);

  newSize();
  window.addEventListener("resize", newSize);
</script>


@endsection
