@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-11">
    <section class="grey grey-no-border-top">
      <div class="holder">
        <div class="cols">
          <span class="step-number" data-aos="zoom-in" data-aos-delay="100">Step 5/5</span>

          <div class="col">
            <div class="step-title" data-aos="fade-down" data-aos-delay="300">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-title.svg" alt="" />
              <h1>How to measure success</h1>
            </div>
          </div>
          <div class="col">
            <p class="step-intro step-intro" data-aos="fade-right" data-aos-delay="400">
              Each social network has their own analytics platform that displays Social Media data, such as advert performance and user behaviour, in charts and graphs. Let’s take, for example,  <b>Facebook Insights</b>, a  Facebook product that display Social Media data.
            </p>
          </div>
        </div>
        <div class="panel" data-aos="fade-up" data-aos-delay="100">
          <h1 data-aos="fade-in" data-aos-delay="100">Facebook Insights</h1>
          <p data-aos="fade-in" data-aos-delay="200">Facebook Insights is a tool that provides a wealth of data to help businesses understand their audiences and the performance of their activities on Facebook. Below are a few examples of the many questions Facebook Insights can help answer:</p>
          <ul>
            <li data-aos="fade-in" data-aos-delay="100">How many Facebook users like your Facebook Page?</li>
            <li data-aos="fade-in" data-aos-delay="200">How many unique Facebook users were shown your Facebook Page or posts?</li>
            <li data-aos="fade-in" data-aos-delay="300">How many unique Facebook users engaged with your Facebook Page?</li>
            <li data-aos="fade-in" data-aos-delay="400">How many new Facebook users liked your Facebook Page each day, or over a 28-day period?</li>
            <li data-aos="fade-in" data-aos-delay="500">How many Facebook users unliked (unsubscribed / chose to unfollow) your Facebook Page?</li>
            <li data-aos="fade-in" data-aos-delay="600">How many Facebook users watched your video for 3 seconds or 30 seconds?</li>
            <li data-aos="fade-in" data-aos-delay="700">What’s the demographic of your users? Are they mostly male or female? Are they older or younger? </li>
            <li data-aos="fade-in" data-aos-delay="800">Who are your most engaged Facebook fans?</li>
          </ul>
          <p data-aos="fade-in" data-aos-delay="900">The sheer wealth of data that Facebook Insights provides can help you compare posts over time and answer strategic questions such as “What type of content resonates most with your audience? Is it a video, picture, GIF, or an infographic?”. It can provide focus and direction for future Facebook posts and marketing activity.
          </p>

      </div>
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>
    <section>
</main>
@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}',11);
  </script>




@endsection
