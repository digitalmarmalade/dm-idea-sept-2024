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

      <div class="holder">
        <div class="task-intro">
        <h1>The Restaurant</h1>

        <p>Remember, <b>S.M.A.R.T. goals</b> are only smart if they exhibit all five characteristics <b>specific</b>, <b>measurable</b>, <b>attainable<b>, <b>relevant</b>, and <b>timely</b>.</p>
      </div>
      </div>
      <div class="the-restaurant">
        <img class="fence" data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/fence.png" alt="" />
        <img class="building" data-aos="fade-up" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/the-restaurant.png" alt="" />
        <img class="people" data-aos="fade-up" data-aos-delay="400" src="/badge-assets/{{$url['slug']}}/_global/img/the-restaurant-people.png" alt="" />

      </div>

  </section>

  <section class="grey bottom">
    <div class="holder">
      <div class="panel" id="#task">
        <div class="task the-restaurant-task">

          <div class="question">
            <p>A chain of restaurants has been using Social Media strategies to engage with their customers. Can you spot below <b>only the goals</b> that can be classified as S.M.A.R.T. goals? Select two answers.</p>
            <ul>
              <li data-value="true">Increase email list sign-ups through Social Media channels by 500 names in 5 months.</li>
              <li  data-value="true">Identify top 25 influencers on Twitter to  build relationships to help blog, repost, and spread the word about the exclusive restaurant menu by the end of the year.</li>
              <li>Increase restaurants visits in 3 months.</li>
              <li>Increase the number of female Facebook fans of the restaurant page by 20%.</li>
            </ul>
            <a href="#" class="btn btn-check">Check your answers</a>
            <div class="feedback feedback-success">
                <p>Great Choices!</p>
                <p><a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn btn-next">Continue</a></p>
            </div>
            <div class="feedback feedback-fail">
                <p>Not quite right...</p>
                <p>Remember, <b>S.M.A.R.T. goals</b> are only smart if they exhibit all five characteristics <b>specific</b>, <b>measurable</b>, <b>attainable<b>, <b>relevant</b>, and <b>timely</b>.</p>
                <p><a href="#task" class="btn btn-try-again">Try again</a></p>
            </div>
          </div>
      </div>
    </div>
  </section>
</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-8.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}',8);
  </script>


@endsection
