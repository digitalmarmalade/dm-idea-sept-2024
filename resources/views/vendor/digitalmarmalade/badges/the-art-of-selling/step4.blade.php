@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

  <header class="lockup">
    <p class="step" data-aos="fade-down"><span class="step">3/6</span></p>
    <a target="_blank" href="http://www.idea.org.uk">
      <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="lockup-badge-type" alt="iDEA Inspiring Digital Enterprise Awards" />
    </a>
  </header>

    <main class="step-3">


      <section class="blue-4 section-slide ">
        <div class="holder">
          <h1 data-aos="fade-up">The Sales Process</h1>
          <p data-aos="fade-up" data-aos-delay="100">Let’s have a look at each of the sales phases in more detail:</p>
        </div>
          <div class="slides">

            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cycle-1.png" />
              </div>
              <span class="figure">1</span>
              <h3>Prepare</h3>
              <p>You will need to prepare by fully understanding what it is you are selling, whether that is a product or service.</p>
              <p>Preparation means having a plan, complete with a script or idea of key features and benefits, so you can respond to anything thrown at you when in the meeting phase.</p>
            </div>

            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cycle-2.png" />
              </div>
              <span class="figure">2</span>
              <h3>Research</h3>
              <p>Once you know your product or service, then it is time to research. You will need to research the competition, the opportunity, potential markets; apply your preparation to help understand why your product is better or more relevant than the others.</p>
            </div>

            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cycle-3.png" />
              </div>
              <span class="figure">3</span>
              <h3>Target</h3>
              <p>This is a key step: to identify the prospects that will buy your product or service. This means not only the companies, but the actual decision makers.</p>
              <p>These are the people that you, as a salesperson, wants to get in front of.</p>
            </div>

            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cycle-4.png" />
              </div>
              <span class="figure">4</span>
              <h3>Contact</h3>
              <p>You’ve done the preparation, now you’ve made contact. This can take many forms: from face to face, to over the phone or by email. The meeting could be as part of a networking opportunity, a formal meeting, a pitch or even just when socialising.</p>
              <p>There are many ideas and processes all designed to help with this phase of the sales cycle – we will investigate those later in this badge.</p>
            </div>

            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cycle-5.png" />
              </div>
              <span class="figure">5</span>
              <h3>Follow Up & Close</h3>
              <p>You’ve had the meeting, you did well! Now it is time to push for the sale, which is often the bit people worry about most. This is the one element that makes all the effort worthwhile. You will need to follow up and get a decision one way or another.</p>
            </div>

            <div class="box">
              <div class="icon-box">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/cycle-6.png" />
              </div>
              <span class="figure">6</span>
              <h3>Deliver</h3>
              <p>You’ve done your bit, now time to hand over to the rest of your team to deliver what you promised.</p>
              <p>Does the sale end there? The answer is no! Keep an eye out to make sure things are progressing as they should. Be on hand for the customer to speak with – it is the best chance of a follow-on sale.</p>
            </div>

          </div>
          <a class="btn btn-continue-1" data-aos="zoom-in" data-aos-delay="200">Let's continue</a>



      </section>

      <section class="blue-3 hide" id="sales-cycle">
        <div class="holder">
          <h1  data-aos="fade-up">The Sales Cycle</h1>

          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/prepare.png" />
            </div>
            <div class="copy">
              <span class="cycle-figure">1</span>
              <h2 data-aos="fade-right">Prepare</h2>
              <p data-aos="fade-right" data-aos-delay="100">Like most things, success will depend on your preparation. Most sales are closed before the meeting even starts, so make sure that you can say yes to the following statements:</p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="200">Do you know your product?</li>
                <li data-aos="fade-right" data-aos-delay="300">Do you know the sort of customer that will benefit from your product or service?</li>
                <li data-aos="fade-right" data-aos-delay="400">Do you fully understand your benefits over features?</li>
                <li data-aos="fade-right" data-aos-delay="500">Have you thought about how you will overcome any objections?</li>
              </ul>
            </div>
          </div>

          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/research.png" />
            </div>
            <div class="copy">
              <span class="cycle-figure">2</span>
              <h2 data-aos="fade-right">Research</h2>
              <p data-aos="fade-right" data-aos-delay="100">Once you are certain you know your product or service inside out, it’s time to research. Look into:</p>
              <ul>
                <li data-aos="fade-right" data-aos-delay="200">Your potential customers</li>
                <li data-aos="fade-right" data-aos-delay="300">Other products</li>
                <li data-aos="fade-right" data-aos-delay="400"><span class="tooltip">Your competition<span class="tooltiptext">Who are your competitors? What is their offer and how does your product or service better them?</span></span></li>
                <li data-aos="fade-right" data-aos-delay="500">
                  <span class="tooltip">The marketplace
                    <span class="tooltiptext">A Gap analysis is critical to help identify your USP – in other words, what is not being served by the current market in the way your product or service will?</span>
                  </span>
                </li>
                <li data-aos="fade-right" data-aos-delay="600">Customer demands or needs</li>
              </ul>
              <p data-aos="fade-right" data-aos-delay="700">This will allow you to make an informed decision as to how much effort to put in to pursuing each sale. Is it a realistic sale opportunity? Does your product really suit the prospect?</p>
              <p data-aos="fade-right" data-aos-delay="800">Over time, you should come to be able to instinctively determine the quality of a sales lead.</p>
            </div>
          </div>

          <div class="cols-wrapper">
            <div>
              <img src="/badge-assets/{{$url['slug']}}/_global/img/target.png" />
            </div>
            <div class="copy">
              <span class="cycle-figure">3</span>
              <h2 data-aos="fade-right">Target</h2>
              <p data-aos="fade-right" data-aos-delay="100">Seek out introductions, but once that is exhausted then look at tools like:</p>

              <ul>

                <li data-aos="fade-right" data-aos-delay="200">
                  <span class="tooltip">
                    <span class="tooltip">Lead Generation
                      <span class="tooltiptext">
                        <ul>
                          <li><a href="https://headreach.com/" target="_blank">HeadReach</a></li>
                          <li><a href="https://www.leadmine.net/"  target="_blank">LeadMine</a></li>
                        </ul>
                      </span>
                    </span>
                  </span>
                </li>

                <li data-aos="fade-right" data-aos-delay="300">
                  <span class="tooltip">
                    <span class="tooltip">Sourcing Email Addresses<span class="tooltiptext">
                      <ul>
                        <li><a href="https://findthatlead.com/" target="_blank">FindThatLead</a></li>
                        <li><a href="https://findthat.email/" target="_blank">FindThat.Email</a></li>
                        <li><a href="https://www.voilanorbert.com/" target="_blank">VoilaNorbert</a></li>
                      </ul>
                    </span>
                  </span>
                </li>

                <li data-aos="fade-right" data-aos-delay="400">
                  <span class="tooltip">
                    <span class="tooltip">Prospect Research
                      <span class="tooltiptext">
                        <ul>
                          <li><a href="https://www.detective.io/" target="_blank">CharlieApp</a></li>
                          <li><a href="https://www.fullcontact.com/" target="_blank">FullContact</a></li>
                        </ul>
                      </span>
                    </span>
                  </span>
                </li>

                <li data-aos="fade-right" data-aos-delay="500"><span class="tooltip"><span class="tooltip">Company Data <span class="tooltiptext">
                  <ul>
                    <li><a href="https://www.duedil.com/" target="_blank">Duedil</a></li>
                    <li><a href="https://datafox.com/cb-insights" target="_blank">CB Insights</a></li>
                    <li><a href="https://datafox.com/bloomberg" target="_blank">Bloomberg</a></li>
                  </ul>
                </span>
              </span>
            </span></li>

              </ul>

              <p data-aos="fade-right" data-aos-delay="600">Now, armed with a proper understanding of your product, how it fits within the market place and a list of qualified prospects, it is time to make contact and begin the sales process in earnest.</p>

            </div>

          </div>
          <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}"  data-aos="zoom-in" data-aos-delay="200" >
            Let's continue</a>
        </div>
      </section>

    </main>
@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>

<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/slick.min.js"></script>
<script>

var sliderInit = function(){
  $('.slides').slick({
    arrows:true,
    centerMode: true,
    dots: true,
    centerPadding: '30px',
    infinite: false,
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 1367,
        settings: {
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 1023,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 375,
        settings: {
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1
        }
      }
    ]
  });
}

sliderInit();




</script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
     integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
     crossorigin="anonymous">
</script>
@endsection
