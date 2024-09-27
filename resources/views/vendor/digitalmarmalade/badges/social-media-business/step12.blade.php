@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="the-airline-task">
  <section class="blue">
      <img class="airplane-title" src="/badge-assets/{{$url['slug']}}/_global/img/the-airline.svg" alt="Social Media in Business" />

    <div class="clouds">
      <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

      <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

      <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

      <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

      <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

      <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />
    </div>
        <div class="holder">
        <div class="task-intro">
          <h1 data-aos="zoom-in" data-aos-delay="100">THE Airline</h1>

          <p data-aos="zoom-in" data-aos-delay="200">Below is a list of take-aways from an airline's Facebook Insights:</p>
        </div>
        <div class="dashboard dashboard-1">
          <div class="col">
            <div class="box box-pink" data-aos="zoom-in" data-aos-delay="100">
              <p>The airline has a total of <span>333,492 page likes</span> (1.4% up from last week)</p>
            </div>
            <div class="box box-green" class="box box-pink" data-aos="zoom-in" data-aos-delay="200">
              <p><span class="larger">65<span>%</span></span> of the airline's fans are female</p>
            </div>
          </div>
          <div class="col col-2-4">
            <div class="box" class="box box-pink" data-aos="zoom-in" data-aos-delay="300">
              <p><span>11,824</span> people engaged with the airline's Facebook page in the past 7 days:</p>
              <ul class="box-list">
                <li>501 likes</li>
                <li>3,178 comments</li>
                <li>1,157 shares</li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="box box-light-yellow" class="box box-pink" data-aos="zoom-in" data-aos-delay="400">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook-videos.svg" alt="" />
              <p>Videos have an average reach of <span>2,536 fans</span> and an average engagement of <span>1,569 post clicks</span></p>
            </div>
          </div>
        </div>
        <div class="dashboard dashboard-2">
          <div class="col col-2-4">
            <div class="box" class="box box-pink" data-aos="zoom-in" data-aos-delay="500">
              <p><span>Fan Base Location</span></p>
              <img class="graph" src="/badge-assets/{{$url['slug']}}/_global/img/the-airline-graph.svg" alt="" />
            </div>
          </div>
          <div class="col">
            <div class="box box-green" class="box box-pink" data-aos="zoom-in" data-aos-delay="600">
              <p><span class="larger">70<span class="large">%</span></span> of the airline's fans are <span>under 25 years old</span></p>
            </div>
            <div class="box box-pink" data-aos="zoom-in" data-aos-delay="300">
              <p>The airline's fans are online mostly <span>in the mornings</span> with peaks between 8:30am and 9:30am</p>
            </div>
          </div>
          <div class="col">
            <div class="box box-pink" class="box box-pink" data-aos="zoom-in" data-aos-delay="700">
              <p><span>4,604 new Page Likes</span> in the last 7 days</p>
            </div>
            <div class="box box-light-yellow" class="box box-pink" data-aos="zoom-in" data-aos-delay="900">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-high-res-photos.svg" alt="" />
              <p>Photos have an average reach of <span>796 fans</span> and an average engagement of <span>189 post clicks</span></p>
            </div>
          </div>
        </div>

        <div class="panel" id="#task" data-aos="fade-up" data-aos-delay="100">
          <div class="task task-airline">
            <p>You've been set a target:</p>
            <p class="goal">You need to increase the airline's Facebook fan base by 5% by the end of the next quarter.</p>
            <p>We will explore some things that you'll need to consider when creating content and publishing it on the airline's Facebook page to help you reach your target.</p>
            <p>Use the analytics above to inform your answers to the following questions.</p>


            <div class="question question-1">
              <span class="question-number">1/3</span>
              <p class="question-text"><b>To make sure a post reaches a large audience and generates the most engagement for the airline, what would it be best to include?</b> Select one answer.</p>
              <ul>
                <li data-value="true">A video</li>
                <li>A photo</li>
                <li>A photo album</li>
                <li>A comment</a>
              </ul>
              <a href="#next-1" class="btn btn-check btn-check-1">Check</a>
              <div  id="next-1">
                <div class="feedback feedback-success">
                    <p>Correct!</p>
                    <p><a href="#task" class="btn btn-next">Next</a></p>
                </div>
                <div class="feedback feedback-fail">
                    <p>Not quite right...</p>
                    <p><a href="#task" class="btn btn-try-again">Try again</a></p>
                </div>
              </div>
            </div>

            <div class="question question-2">
              <span class="question-number">2/3</span>
              <p class="question-text"><b>What time would it be best to publish a post on the airline's Facebook Page?</b> Select one answer.</p>
              <ul>
                <li>At night</li>
                <li data-value="true">In the early morning</li>
                <li>At lunch time</li>
                <li>In the evening</li>
              </ul>
              <a href="#next-2" class="btn btn-check btn-check-2">Check</a>
              <div  id="next-2">
                <div class="feedback feedback-success">
                    <p>Nice one!</p>
                    <p><a href="#task" class="btn btn-next">Next</a></p>
                </div>
                <div class="feedback feedback-fail">
                    <p>Not quite right...</p>
                    <p><a href="#task" class="btn btn-try-again">Try again</a></p>
                </div>
              </div>
            </div>

            <div class="question question-3">
              <span class="question-number">3/3</span>
              <p class="question-text"><b>Your recent posts have been generating a lot of engagement, and the airline's fan base on Facebook is growing. Now you'd like to try to reach a new audience. What age groups might you like to target with a paid ad?</b>  Select five answers.</p>
              <ul>
                <li>13-17</li>
                <li>18-24</li>
                <li data-value="true">25-34</li>
                <li data-value="true">35-44</li>
                <li data-value="true">45-54</li>
                <li data-value="true">55-64</li>
                <li data-value="true">65+</li>
                <li>Any of above</li>
              </ul>
              <a href="#next-3" class="btn btn-check btn-check-3">Check</a>
              <div  id="next-3">
                <div class="feedback feedback-success">
                    <p>Well done!</p>
                    <p><a onclick="oBadges.stepCompleted();" class="btn btn-next" href="success">Continue</a></p>
                </div>
                <div class="feedback feedback-fail">
                    <p>Not quite right...</p>
                    <p><a href="#task" class="btn btn-try-again">Try again</a></p>
                </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </section>
</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-12.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 12);
  </script>


@endsection
