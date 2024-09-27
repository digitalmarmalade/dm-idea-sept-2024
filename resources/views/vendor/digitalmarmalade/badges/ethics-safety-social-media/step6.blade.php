@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <div class="cols">
      <div class="col">
        <p class="step">Step 6 - Fake News</p>
        <div class="holder">
          <h1 data-aos="fade-right" data-aos-delay="100">Fake News</h1>
          <p data-aos="fade-right" data-aos-delay="200">Another negative aspect of social media is how rumours and mistruths can be spread quickly and misleadingly. People see posts and tweets and instantly share them if they relate to a topic they care about it. People often also engage in conversations across social media networks expressing opinions relating to things they do not know to be definitely true.</p>
        </div>
      </div>
      <div class="col">
        <div class="holder">
          <div id="task">
            <h2 data-aos="fade-right" data-aos-delay="200"><span data-aos="fade-right" data-aos-delay="100">Substantiating</span></h2>
            <h2 data-aos="fade-right" data-aos-delay="200">the truth</h2>
            <p data-aos="fade-right" data-aos-delay="300" style="margin-top: 20px; position:relative; z-index:3;">If you see something on a social media network that you would like to comment on or share, what are the questions you might need to consider before you post anything relating specifically to whether it might be <span class="tooltip tooltip-fake-news" style="border-bottom: 1px dotted #FFF;"><span class="tooltiptext">Is a type of journalism or propaganda that consists of deliberate misinformation or hoaxes spread via traditional print and broadcast news media or online social media.</span>fake news</span> or not?</p>
          <div class="task task-danger task-fake-news-1">
            <p data-aos="fade-right" data-aos-delay="400">Select below <b>all the questions</b> you have to consider before commenting or sharing a post on Social Media:</p>
            <ul class="fake-news" style="position:relative; z-index:1;">
              <li data-aos="fade-in" data-aos-delay="400">
                <a href="#" data-value="true">Do I trust the person or the organisation that is sharing the news?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="500">
                <a href="#" data-value="true">Do I know the source of the news?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="600">
              <a href="#" data-value="true">Is the news genuine?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="700">
                <a href="#">Do I think the news is funny?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="800">
                <a href="#">Do I think the news is shocking?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="900">
                <a href="#" data-value="true">Do I have a strong opinion about the news?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="1000">
                <a href="#" data-value="true">Has someone in authority, or an authoritative source, confirmed the news?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="1100">
                <a href="#" data-value="true">Do I believe the news is accurate because my friend has said something about it?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="1200">
                <a href="#" data-value="true">Have I seen serious people I trust in public life commenting on the news?</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="1300">
                <a href="#" data-value="true">Are other, reputable news channels carrying the story? Eg BBC News.</a>
              </li>
              <li data-aos="fade-in" data-aos-delay="1400">
                <a href="#" data-value="true">Have I checked the date of the post about the news?</a>
              </li>

            </ul>
            <a data-aos="fade-in" data-aos-delay="1500" class="btn btn-check" href="#">Check</a>
            <div class="feedback feedback-negative hide">
              <div class="feedback-wrapper">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt=""/>
                <p>That's not quite correct...</p>
                <p class="hint"><b>Hint</b></p>
                <p>9 of the 11 are questions you should consider relating to fake news. Two of the questions relate to how amusing or surprising you might think something is.</p>
              </div>
              <a class="btn btn-try-again" href="#task" data-value="4">Try again</a>
            </div>
            <div class="feedback feedback-positive hide ">
              <p class="well-done">Well done!</p>
              <p class="description">When thinking about which questions you might need to consider before you post anything (relating specifically to whether it might be fake news or not) – the answer is all of the above, apart from whether the news is funny or shocking. Neither of these considerations will have a material impact on whether you post - because whether something is funny or shocking does not relate to how true it is. Separately, you should consider whether something is funny or shocking relating to whether it might harm someone and if it might, think twice about posting.</p>
              <a class="btn btn-continue" href="#">Continue</a>
            </div>

          </div>
          </div>
          <div class="hide" id="task-2">
            <p class="description" style="positon:relative; z-index:4;"><span class="tooltip tooltip-fake-news" style="border-bottom: 1px dotted #FFF;"><span class="tooltiptext">Is a type of journalism or propaganda that consists of deliberate misinformation or hoaxes spread via traditional print and broadcast news media or online social media.</span>Fake news</span> is very serious because rumours and falsehoods can exacerbate situations and cause distress, heartache and even international incidents. Be vigilant before you post or share anything just in case you accidentally contribute to a problematic situation.</p>

            <p class="description" style="positon:relative; z-index:2;">To demonstrate how hard it is to evaluate whether a story is real or not, take a look at some of these stories that were all genuinely published. Try to guess which ones were fake news and which ones were real.</p>
            <p><b>Top tip: </b>Many of these were published on <span class="tooltip" ><span class="tooltiptext">April Fools' Day (sometimes called All Fools' Day) is an annual celebration in some European and Western countries commemorated on April 1 by playing practical jokes and spreading hoaxes.</span>April Fool's Day</span>...</p>
            <div class="task task-fake-news" style="position: relative; z-index:1;" >

              <ul class="steps" id="steps">
                <li class="on"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>

              </ul>
              <div class="question question-1" data-aos="fade-in" data-aos-delay="300">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/bee.svg" alt=""/>

                  <p class="news"  >A truck overturned and spilled its cargo of 1m bees.</p>

                  <div class="feedback hide">
                    <p><span>True!</span></p>
                    <p>It happened in Idaho, USA. Due to a bee shortage, a truck was transporting bees. Drivers were told to keep their windows rolled up.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
                  <ul>
                    <li data-aos="fade-in" data-aos-delay="400"><a href="#" data-value="true">Real</a></li>
                    <li data-aos="fade-in" data-aos-delay="500"><a href="#" data-value="false">Fake News!</a></li>
                  </ul>
              </div>

              <div class="question question-2 hide">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/dog.svg" alt=""/>
                  <p class="news" data-aos-delay="300" >Barbra Streisand has cloned her dog after it died.</p>
                  <ul>
                    <li><a href="#" data-value="true">Real</a></li>
                    <li><a href="#" data-value="false">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>True!</span></p>
                    <p>Barbra cloned her 14 year old dog after she died in 2017 and now has 2 new pups.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-3 hide">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/fragance.svg" alt=""/>
                  <p class="news">Burger King Japan have launched a new fragrance inspired by The Whopper called Flame-Grilled – it will cost £27 and comes with a free Whopper.</p>
                  <ul>
                    <li><a href="#">Real</a></li>
                    <li><a href="#" data-value="true">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>Fake news!</span></p>
                    <p>Despite having a professionally designed bottle and ads, it was actually an April Fool from 2015.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-4 hide">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/email.svg" alt=""/>
                  <p class="news">Google is introducing self-destructing emails.</p>
                  <ul>
                    <li><a href="#" data-value="true">Real</a></li>
                    <li><a href="#" data-value="false">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>True!</span></p>
                    <p>Much like Snapchat, Gmail is going to introduce a feature which will allow you to set an expiry date.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-5 hide">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/mayo.svg" alt=""/>
                  <p class="news">Heinz are launching a Chocolate Mayonnaise – ideal for spreading on toast or lamb – called Seriously Good.</p>
                  <ul>
                    <li><a href="#">Real</a></li>
                    <li><a href="#" data-value="true">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>Fake news!</span></p>
                    <p>Another April Fool’s joke – this time by Heinz.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-6 hide">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/hotel.svg" alt=""/>
                  <p class="news">The first ever luxury hotel in Space has just been announced.</p>
                  <ul>
                    <li><a href="#" data-value="true">Real</a></li>
                    <li><a href="#" data-value="false">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>True!</span></p>
                    <p>For only £6.7m together with 5 other people you can spend 12 days in a hotel called Aurora Station – ready for its first visitors in 2021.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-7 hide">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/scrabble.svg" alt=""/>
                  <p class="news">The winner of the 2015 French Scrabble Championship didn’t even speak French.</p>
                  <ul>
                    <li><a href="#" data-value="true">Real</a></li>
                    <li><a href="#" data-value="false">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>True!</span></p>
                    <p>Nigel Richards from New Zealand won the tournament in Louvain, Belgium, he just memorised a French dictionary.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-8 hide">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/spaguetti.svg" alt=""/>
                  <p class="news">There is a family in Switzerland who have managed to grow a spaghetti Tree.</p>
                  <ul>
                    <li><a href="#" >Real</a></li>
                    <li><a href="#" data-value="true">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>Fake news!</span></p>
                    <p>This was actually a famous hoax from April Fools Day in 1957 when the BBC ran a report on Panorama where they told viewers to “place a sprig of spaghetti in a tin of tomato sauce and hope for the best”.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-9 hide">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/ufo.svg" alt=""/>
                  <p class="news">The US government ran a $22m UFO investigation programme – as recently as 2012.</p>
                  <ul>
                    <li><a href="#" data-value="true">Real</a></li>
                    <li><a href="#">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>True!</span></p>
                    <p>From 2007 – 2012 the Pentagon investigated whether UFOs existed and what threat they might pose to the USA.</p>

                    <a href="#steps" class="btn next">Next</a>
                  </div>
              </div>

              <div class="question question-10 hide">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/fake-news/fake-news.svg" alt=""/>
                  <p class="news">According to research - real news travels faster than fake news.</p>
                  <ul>
                    <li><a href="#" >Real</a></li>
                    <li><a href="#" data-value="true">Fake News!</a></li>
                  </ul>
                  <div class="feedback hide">
                    <p><span>Fake news!</span></p>
                    <p>According to a survey of 126,000 false stories over a period of 11 years, researchers from Massachusetts Institute of Technology found that they travelled faster and reached more people than the truth. In fact, they were 70% more likely to be re-tweeted than true stories. So bear that in mind – and always question the source and check the facts before you decide to share with your followers and friends.</p>

                    <a onclick="oBadges.stepCompleted();" href="success" class="btn">Continue </a>

                  </div>
              </div>



            </div><!--end of task-->
          </div>
          </div>
        </div>
      </div>
    </div>





@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 5);
</script>
<script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-6-1.js"></script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-6.js"></script>


</script>
@endsection
