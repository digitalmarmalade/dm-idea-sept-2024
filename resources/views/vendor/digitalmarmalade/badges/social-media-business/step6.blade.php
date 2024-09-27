@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="the-supermarket">
  <section class="blue top">
      <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

      <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

      <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

      <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

      <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

      <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />

      <div class="holder">
        <div class="task-intro">
          <h1 data-aos="zoom-in" data-aos-delay="100">The Supermarket</h1>

          <p data-aos="zoom-in" data-aos-delay="200">Social Media can add an extra layer of complication to a crisis situation.</p>

        </div>
      </div>
      <div class="the-supermarket">
        <img class="fence" data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/fence.png" alt="" />
        <img class="building" data-aos="fade-up" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/the-supermarket.png" alt="" />
        <img class="people" data-aos="fade-up" data-aos-delay="400" src="/badge-assets/{{$url['slug']}}/_global/img/the-supermarket-people.png" alt="" />

      </div>

  </section>

  <section class="grey bottom">
    <div class="holder">
      <div class="panel" id="#task">
        <div class="task task-supermarket">

          <div class="question question-1">
            <span class="question-number">1/3</span>
            <p class="question-text">Let us say a supermarket has been accused of having horsemeat in their beef burgers and is suffering a Social Media backlash. Which are the best immediate courses of actions in this situation? Select two answers.</p>
            <ul>
              <li ><a href="#" data-value="true">Withdraw sales of the product.</a></li>
              <li><a href="#">Continue sales of the product until an investigation has taken place.</a></li>
              <li ><a href="#" data-value="true">Apologise.</a></li>
              <li><a href="#">Ignore the fact since Social Media has no impact on businesses.</a></li>
            </ul>
            <a href="#next-1" class="btn btn-check btn-check-1">Check</a>
            <div  id="next-1">
              <div class="feedback feedback-success">
                  <p>correct!</p>
                  <p><a href="#task" class="btn btn-next btn-next-1">Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-2">
            <span class="question-number">2/3</span>

            <p class="question-text">The best way to fight chaos is with clarity. Following the immediate actions, what else could the company do? Select three answers.</p>
            <ul>
              <li ><a href="#" data-value="true">Refund customers that purchased the product.</a></li>
              <li><a href="#">Put the products back on sale and ignore customers.</a></li>
              <li><a href="#" data-value="true">Investigate the matter.</a></li>
              <li><a href="#" data-value="true">Use Social Media to keep customers informed of the investigations proceedings.</a></li>
            </ul>
            <a href="#next-2" class="btn btn-check btn-check-2">Check</a>
            <div  id="next-2">
              <div class="feedback feedback-success">
                  <p>Correct!</p>
                  <p>It’s clear that a swift, honest, and measured response to any major issue via Social Media is always the best plan of action. Alongside this, it is important for brands to set up clear guidelines in relation to identifying and managing crises, determining who is responsible and for what, as well as how to manage approval processes and resourcing. </p>
                  <p><a href="#task" class="btn btn-next btn-next-1">Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-3">
            <span class="question-number">3/3</span>

            <p class="question-text">Are the statements below true <b>or</b> false?</p>
            <ul class="task-true-false">
                <li>
                    <p>It is OK to overlook new followers and community members.</p>
                    <span class="true-false-box">
                        <span data-value="1"><a href="#" >True</a></span>
                        <span data-value="2"><a href="#" >False</a></span>
                    </span>
                </li>
                <li>
                    <p>By offering any kind of assistance and/or facilitating problem solving via Social Media you are adding value to your business.</p>
                    <span class="true-false-box">
                        <span data-value="3"><a href="#">True</a></span>
                        <span data-value="4"><a href="#">False</a></span>
                    </span>
                </li>
                <li>
                    <p>The frequency and the quality of the content you produce is important to keep your audience invested.</p>
                    <span class="true-false-box">
                        <span data-value="5"><a href="#">True</a></span>
                        <span data-value="6"><a href="#">False</a></span>
                    </span>

                </li>
                <li>
                    <p>To keep your brand at the top of people’s minds, it is mandatory to produce and publish as many posts as possible.</p>
                    <span class="true-false-box">
                        <span data-value="7"><a href="#">True</a></span>
                        <span data-value="8"><a href="#">False</a></span>
                    </span>

                </li>
            </ul>
            <a href="#next-3" class="btn btn-check btn-check-3">Check</a>
            <div  id="next-3">
              <div class="feedback feedback-success">
                  <p>Correct!</p>
                  <p>Remember that the frequency with which you should publish new content will depend on the type of business you run as well as your audience. So before inundating customers with information it is best to understand the type and amount of information your audience is after. Also, don’t forget  that the level of attention given to new customers should be the same as the level of attention given to customers already familiar with your brand.</p>
                  <p><a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn-next">Continue</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-6.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 6);
  </script>


@endsection
