@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-5">
    <section class="step">
      <div class="step-number green" data-aos="fade-down">5</div>
      <div class="step-copy-wrapper grad-green" data-aos="fade-right" data-aos-delay="100">
        <div class="step-copy">
          <h1 data-aos="fade-right" data-aos-delay="400">How to learn from big data</h1>
          <p data-aos="fade-right" data-aos-delay="500">Storing and processing Big Data is expensive, so why should we store and process such large sets of data?</p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue">
      <div class="holder">
        <div class="cols">
          <div>
            <p data-aos="fade-right" data-aos-delay="600">One of the main reasons for storing and processing Big Data is so that businesses can understand what their customers need and want. This can be done by analysing website use, looking for trends in customer behaviour, checking customer satisfaction on social media, and monitoring how different devices are being used. Once they've analysed the data, businesses are able to make better-informed decisions.</p>
          </div>
          <div>
            <p data-aos="fade-right" data-aos-delay="700">One simple example showing Big Data's power is its use in recommendation systems for customers, such as film, music, shopping, contacts and jobs, where users' behaviours can be compared with a community of other users to decide what they might like; or where preferences are used to identify what other people might like.</p>
          </div>
        </div>
      </div>
        <img data-aos="zoom-in" src="/badge-assets/{{$url['slug']}}/_global/img/step-5-1.svg" />
    </section>

  </main>

  <main class="step-5 task-5" id="#task">
    <section class="step task-header grad-green">
      <div class="step-task green" data-aos="fade-up">Task</div>
      <div class="step-copy-wrapper">
        <div class="step-copy">
          <p data-aos="fade-right" data-aos-delay="400">Companies are striving to display data in a way that is more engaging and easier to understand to make it more helpful when they are communicating with clients or internal stakeholders. You will be shown a series of data visualisations derived from Big Data. For each of the visualisations, <b>select the option that best represents what the data is conveying</b>:</p>
        </div>
      </div>
    </section>

    <section class="grad-green task">

        <div class="question question-1">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" data-aos="fade-left" />
          <div class="holder" id="task">
            <div class="question-number" data-aos="zoom-in">1<span>/</span>4</div>
            <img data-aos="zoom-in" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/task-5-2.png"/>
            <p data-aos="fade-up" data-aos-delay="200">The image above shows a live visual and musical representation of Wikipedia data. </p>
            <ul>
              <li data-aos="zoom-in" data-aos-delay="300" data-value="true">Wikipedia edits</li>
              <li data-aos="zoom-in" data-aos-delay="400">Wikipedia musical articles entries</li>
              <li data-aos="zoom-in" data-aos-delay="500">Wikipedia users around the world</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>This graphic denotes the number of Wikipedia article entries! When you have sound activated on your browser and computer, bells indicate additions and string plucks indicate subtractions, and the pitch changes according to the size of the edit (the larger the edit, the deeper the note). Green circles show edits from unregistered contributors and purple circles mark edits performed by automated bots.</p>
              <p><a href="http://listen.hatnote.com/" target="_blank">Visit visualisation website</a></p>
              <a class="btn-next btn-next-1" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-1" href="#task">Try again</a>
            </div>
          </div>
        </div>


        <div class="question question-2">
        <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">2<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-5-3.png"/>
            <p>The image above shows a live visualisation of a geological phenomenon.</p>
            <ul>
              <li>Heat waves</li>
              <li data-value="true">Winds</li>
              <li>Earthquakes</li>

            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>This is a live visualization of wind actions around the world: direction, speed, and so on that enables you to drag the globe around and zoom in on specific points for greater detail.</p>

              <p><a href="https://earth.nullschool.net/" target="_blank">Visit visualisation website</a></p>
              <a class="btn-next btn-next-2" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-2" href="#task">Try again</a>
            </div>
          </div>
        </div>


        <div class="question question-3">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">3<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-5-1.png"/>
            <p>The image above shows Twitter trends for the result of a keyword search (‘Big Data’, in this case).</p>
            <ul>
              <li data-value="true">Tweets by geographic location</li>
              <li>Tweets by gender</li>
              <li>Twitter access by device</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>This is a good one for checking out geographical data for Twitter. It uses a clustering engine to visualize how people are tweeting about specific topics around the world.</p>
              <p><a href="https://onemilliontweetmap.com/?center=25.48295117535531,0&zoom=2&search=&timeStep=0&timeSelector=0&hashtag1=&hashtag2=&hashtagBattle=0&timeRange=0&timeRange=25&heatmap=0&sun=0&cluster=1" target="_blank">Visit visualisation website</a></p>

              <a class="btn-next btn-next-3" href="#task">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-3" href="#task">Try again</a>
            </div>
          </div>
        </div>

        <div class="question question-4">
          <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" />
          <div class="holder">
            <div class="question-number">4<span>/</span>4</div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/task-5-4.png"/>
            <p>The image above is produced from Google data.</p>
            <ul>
              <li>Colour trends</li>
              <li>Celebrity appearances on TV  shows</li>
              <li data-value="true">Search trends by country</li>
            </ul>
          </div>
          <div class="feedback feedback-success grad-dark-blue">
            <div class="holder">
              <h2>Correct!</h2>
              <p>This is a Google live visualization that fills the screen with live search trends by country.</p>
              <p><a href="https://trends.google.com/trends/hottrends/visualize?pn=p9" target="_blank">Visit visualisation website</a></p>
              <p class="tip"><b>Tip</b>If you have not tried it already, why not have a go at the <a href="https://idea.org.uk/badge/data-visualisation" target="_blank">iDEA Data
              Visualisation Badge</a> after you finish this one?</p>
              <a class="btn-next btn-next-4"  onclick="oBadges.stepCompleted();" href="{{$links['next']}}">Next</a>
            </div>
          </div>
          <div class="feedback feedback-fail grad-dark-blue">
            <div class="holder">
              <p>Not quite right...</p>
              <a class="btn-try-again btn-try-again-4" href="#task">Try again</a>
            </div>
          </div>
        </div>

</section>

  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 9);
      </script>


      <script src="/badge-assets/{{$url['slug']}}/_global/js/step-9.js"></script>
    @endsection
