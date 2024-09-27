@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="the-coffee-shop-task">
  <section class="blue top">
      <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

      <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

      <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

      <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

      <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

      <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />

      <div class="holder task-flower-shop" id="task">
        <div class="cols">
          <div class="col">
            <div class="task-intro">
              <h1 data-aos="zoom-in" data-aos-delay="100">The Flower Shop</h1>
              <p data-aos="zoom-in" data-aos-delay="200">You’ve learned that in Social Media, marketing efforts are built on trust, engagement and community.</p>

            </div>
          </div>

          <div class="col">
            <div class="panel" data-aos="fade-down" data-aos-delay="400">

              <p>Which of the actions below show examples of how a flower business can use Social Media to engage with their audience <b>that goes beyond promotional messages?</b> Select four answers.</p>
              <ul class="task" >
                <li data-value="true">A tutorial video on how to make a flower arrangement.</li>
                <li data-value="true">A poll asking your audience about their favourite flowers.</li>
                <li>A sale offer related to Valentine’s day.</li>
                <li data-value="true">A caption writing contest.</li>
                <li>Information on the spring sale offers  in your stores.</li>
                <li data-value="true">An advert to recruit delivery drivers.</li>
              </ul>
              <a href="#" class="btn btn-check">Check</a>
              <div class="feedback feedback-success">
                  <p>Great Choices!</p>
                  <p>These are good examples of engagement actions for this type of business.</h3>
                  <p><a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" >Continue</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p>Have you considered all the actions that are not directly selling or promoting products?</p>
                  <p><a href="#task" class="btn btn-try-again btn-try-again">Try again</a></p>
              </div>
            </div>

          </div>

        </div>
      </div>

      <div class="the-flower-shop">
        <img class="fence" data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/fence.png" alt="" />
        <img class="building" data-aos="fade-up" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/the-flower-shop.png" alt="" />
        <img class="people" data-aos="fade-up" data-aos-delay="400" src="/badge-assets/{{$url['slug']}}/_global/img/the-flower-shop-people.png" alt="" />

      </div>

  </section>

  <section class="grey bottom">
  </section>
</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-4.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 4);
  </script>


@endsection
