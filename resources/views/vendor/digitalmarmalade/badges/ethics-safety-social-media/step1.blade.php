@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <div class="cols">
      <div class="col col-1-step-1">
        <p class="step">Step 1 - Ethics</p>
        <div class="holder">
          <h1 data-aos="fade-right" data-aos-delay="100">Using Social Media</h1>
          <p data-aos="fade-right" data-aos-delay="200">Protecting ourselves and safeguarding our privacy, our reputation and our data are critical. All of this is even more vital than ever in a fast-paced, conversational environment where anything you publish acts like a digital tattoo and stays somewhere in cyberspace forever.</p>
          <p data-aos="fade-right" data-aos-delay="300">In this badge, we will not be covering in detail the responsibility companies have with respect to our data. Instead, we are focussing on how we as individuals need to act responsibly whenever we interact with anyone on social media, and whenever we publish anything on social media.</p>
        </div>
        <img class="step-1" src="/badge-assets/{{$url['slug']}}/_global/img/step-1.svg" alt=""/>
      </div>
      <div class="col">
        <div class="holder">
          <div class="three-ethic-principles" data-aos="fade-right" data-aos-delay="100">
            <span class="three" data-aos="fade-right" data-aos-delay="100">3</span>
            <h2 data-aos="fade-right" data-aos-delay="200"><span>things to</span></h2>
            <h2>remember</h2>

            <p data-aos="fade-right" data-aos-delay="300">How to behave on social media:</p>
            <ul class="list-with-titles">
              <li style="position:relative;z-index:3;">
                <p data-aos="fade-right" data-aos-delay="400" class="title">Authenticity</p>
                <p data-aos="fade-right" data-aos-delay="500" class="description">Sincerity counts for a lot – be true to yourself and act with <span class="tooltip">integrity<span class="tooltiptext tooltip-text-integrity">The quality of being honest and having strong moral principles.</span></span>.</p>
              </li>
              <li style="position:relative;z-index:1;">
                <p data-aos="fade-right" data-aos-delay="600" class="title">Transparency</p>
                <p data-aos="fade-right" data-aos-delay="700" class="description">Be open and honest while responsibly staying safe.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="800" class="title">Respect</p>
                <p data-aos="fade-right" data-aos-delay="900" class="description">Be respectful and kind – treat others how you would expect to be treated yourself.</p>
              </li>
            </ul>
            <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue </a>
          </div>
        </div>
      </div>
    </div>





@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
</script>
@endsection
