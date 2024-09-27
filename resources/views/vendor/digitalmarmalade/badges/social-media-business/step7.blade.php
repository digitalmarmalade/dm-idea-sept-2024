@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="step-7">
    <section class="grey grey-no-border-top">
      <div class="holder">
        <div class="cols">
          <span class="step-number" data-aos="zoom-in" data-aos-delay="100">Step 4/5</span>

          <div class="col">
            <div class="step-title" data-aos="fade-down" data-aos-delay="300">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-title.png" alt="" />
              <h1>The basics of Social Media marketing</h1>
            </div>
          </div>
          <div class="col">
            <p class="step-intro step-intro" data-aos="fade-right" data-aos-delay="400">
            Social Media marketing (SMM) is a form of Internet marketing that utilises social networking websites as a marketing tool. The goal of SMM is to produce content that users will share with their social network to help a company increase brand exposure and broaden customer reach.
            <br><br>
            SMM helps a company get direct feedback from customers (and potential customers) while making the company seem more personable. The interactive parts of Social Media give customers the opportunity to ask questions or voice complaints. This aspect of SMM is called social customer relationship management (social CRM).
            </p>
          </div>
        </div>
        <div class="panel">
          <h1 data-aos="fade-in" data-aos-delay="100">S.M.A.R.T. Goals</h1>
            <p data-aos="fade-in" data-aos-delay="200">When it comes to setting Social Media goals, one way you can do this is to use the <b>S.M.A.R.T. goal</b> framework. For example, if one of your business goals is increase brand awareness — and you are using Instagram to showcase the products you sell — then a simple, <b>S.M.A.R.T. goal</b> for Social Media might look like this:</p>

            <div class="smart-goal-framework">
              <div class="hide-desktop">
                <p data-aos="fade-right" data-aos-delay="300">In on month, we will have increased our following by 100 followers.</p>
              </div>
              <div class="hide-mobile">
                <p data-aos="fade-up" data-aos-delay="400" class="mark mark-attainable">attainable</p>
                <p data-aos="fade-up" data-aos-delay="500"class="mark mark-specific">specific</p>
                <p data-aos="fade-down" data-aos-delay="600" class="mark mark-timely">timely</p>
                <p data-aos="fade-down" data-aos-delay="700" class="mark mark-relevant">relevant</p>
                <p data-aos="fade-down" data-aos-delay="800"class="mark mark-measureable">measureable</p>
                <p>
                  <span>In on month,</span>
                  <span>we will have</span>
                  <span>increased</span>
                  <span>our following</span>
                  <span>by 100 followers.</span>
                </p>
              </div>
              <p data-aos="fade-in" data-aos-delay="100">The goal above is <b>specific</b>, <b>measurable</b>, <b>attainable</b>, <b>relevant</b>, and <b>timely</b>. Remember, <b>S.M.A.R.T. goals</b> are only smart if they exhibit all 5 characteristics. If you’re missing the timeliness factor, for example, it’s impossible to determine how successful a social campaign or strategy really was. Let’s take a look at each of the five qualities and how they build on one another:</p>
          <ul class="smart">
            <li><div data-aos="fade-right" data-aos-delay="100"><span>s</span>specific</div><p data-aos="fade-right" data-aos-delay="200">Increasing your Social Media following, for example, is a great goal. But what does that mean, exactly? Do you want 50 followers, 500, or 5,000? And on which social network? If the goal is too vague, you’ll never really know what you’re working towards. By having goals that are clear, specific, and not open to interpretation, you’ll save on time and effort, and get closer to your ultimate destination.</p></li>

            <li><div data-aos="fade-right" data-aos-delay="300"><span>m</span>measureable</div><p data-aos="fade-right" data-aos-delay="400">If you can’t measure what you’re hoping to achieve, your goal isn’t specific enough and it likely isn’t really contributing to your business. You need to be able to concretely identify your progress and see whether your efforts are working or not. When it comes to success, the numbers matter. Don’t just know you were successful — know how successful you were.</p></li>

            <li><div data-aos="fade-right" data-aos-delay="500"><span>a</span>attainable</div><p  data-aos="fade-right" data-aos-delay="600">Have your social accounts contributed to this particular metric in the past? Use that information to set goals that are within your reach. If you’ve been able to reach a previously stated goal on, say, Facebook, you know it can be done. By using previously attained goals, you’ll be able to put your best foot forward and be comfortable. Keep your goals challenging, but realistic.</p></li>

            <li><div data-aos="fade-right" data-aos-delay="700"><span>r</span>relevant</div><p  data-aos="fade-right" data-aos-delay="800">Want to use Social Media to build your mailing list? Then social channels are a tremendous way to accumulate qualified leads. But if that’s your goal, it makes more sense to focus on using Social Media to drive traffic to your website than, say, staying on top of your Instagram mentions. Make sure your goal is relevant to your business’s success. And remember to ensure you are GDPR compliant.</p></li>

            <li><div data-aos="fade-right" data-aos-delay="900"><span>t</span>timely</div><p  data-aos="fade-right" data-aos-delay="1000">Commit to a time frame to reach your goals. By giving yourself a deadline, you’ll be less inclined to procrastinate. It will keep you accountable.</p></li>
          </ul>
          <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>
        </div>
      </div>
    <section>
</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}',7);
  </script>

@endsection
