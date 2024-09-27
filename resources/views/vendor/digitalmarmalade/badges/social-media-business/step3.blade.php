@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-2">
    <section class="grey grey-no-border-top">
      <div class="holder">
        <div class="cols">
          <span class="step-number" data-aos="zoom-in" data-aos-delay="100">Step 2/5</span>
          <div class="col">
            <div class="step-title" data-aos="fade-down" data-aos-delay="300">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-title.png" alt="" />
              <h1>What types of content businesses publish and share on social media</h1>
            </div>
          </div>
          <div class="col">

            <p class="step-intro" data-aos="fade-right" data-aos-delay="400">
              Social Media Marketing is about more than just promotional updates. In Social Media, marketing efforts are built on  <b>trust</b>, <b>engagement</b> and <b>community</b>. There is space for promotional messages, but by broadening your scope a bit, your content will be more engaging. Content options may include:</p>
          </div>
        </div>

        <div class="cols">
          <div class="col">
            <div class="panel" data-aos="fade-up" data-aos-delay="500">
              <h2>Adjacent Content</h2>
              <p>It's likely that if someone is following you, then they're interested in what you’re offering but their interests probably don't stop there. Share content that's tangentially relevant to your business or something involving common interests of your audience. For example, if you are a fitness-clothing brand, you could post tips for maximising the benefits of your work out. In this situation, you’re demonstrating your expertise and your followers will benefit from reading your content.</p>
            </div>
            <div class="panel" data-aos="fade-up" data-aos-delay="600">
              <h2>Response</h2>
              <p>Social Media relies on conversations, so join in! This is a really good way to make your account and brand more visible. Look for conversations and posts that are relevant to your business and then reply, comment, like and share!</p>
            </div>
          </div>

          <div class="col">
            <div class="panel" data-aos="fade-up" data-aos-delay="700">
              <h2>Recruitment</h2>
              <p>Many businesses use Social Media to promote job openings and find new talent. Job seekers are increasingly using Social Media as a way of learning about businesses and their open positions - it's a perfect match!</p>
            </div>
            <div class="panel" data-aos="fade-up" data-aos-delay="800">
              <h2>Non-promotional company information</h2>
              <p>Give your audience a backstage insight into the culture and community within your organisation. If you do something special for a team member’s birthday you could consider sharing it with your followers? This helps to humanise your brand.</p>
            </div>
          </div>

        </div>

        <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" >Continue</a>
      </div>
    </section>
</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}',3);
  </script>

@endsection
