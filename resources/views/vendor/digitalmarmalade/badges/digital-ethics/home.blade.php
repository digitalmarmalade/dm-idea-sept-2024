@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>
  @include('vendor.digitalmarmalade.badges.digital-ethics.header',
  ['title' => 'Header'])

  <section>
    <div class="container text-align--center">
      <img data-aos="fade-up" data-aos-duration="300" data-aos-delay="100" class="animation--intro" src="/badge-assets/digital-ethics/_global/svg/animation--intro.svg" alt="" />
      <div class="flex flex--column flex--center gap">
        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" class="intro">Digital Ethics</h1>
        <div class="flex flex--column gap col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" >
          <p>Digital innovation has the potential to transform our lives in many positive ways but inevitably, there are trade-offs and unintended consequences that we all need to look out for.</p>

          <p>Digital technology has advanced more quickly than any other innovation in our history and so, in an increasingly digital world, we should reflect, not just on what we <i>can</i> do, but on whether we <i>should</i> do it.</p>

          <p>We must all consider the moral question of how data and new digital technologies should be handled responsibly, and this is where digital ethics comes in.</p>

          <p>In this badge, you will:</p>
        
        </div>
        
      </div>
      <ul class="flex flex--wrap gap" >
        <li class='box box--intro bg--yellow flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Learn about the ethical impact that digital innovation can have on individuals, society, and the world as a whole</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--ethical-impact.svg" alt="" />
        </li>
        <li class='box box--intro bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Apply a Digital Ethics Guide that you can take away with you</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--digital-ethicist.svg" alt="" />
        </li>
        <li class='box box--intro bg--green flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Connect digital ethics to values and translate them into actions </span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--connect.svg" alt="" />
        </li>
        <li class='box box--intro bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Discover the role of a digital ethicist and learn how to think like one</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--framework.svg" alt="" />
        </li>
        <li class='box box--intro bg--green flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1800">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Explore some ethical dilemmas as you take on the role of a digital ethicist at a start-up</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--dilemmas.svg" alt="" />
        </li>
        <li class='box box--intro bg--yellow flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2000">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Reflect on how you can be a responsible digital citizen</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--responsible-citzen.svg" alt="" />
        </li> 
      </ul>
      <div class="holder--homepage-ctas" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2400" data-aos-anchor-placement="bottom-bottom">

        <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" >
            Let&rsquo;s begin!
        </a>

        <a class="btn sm secondary" href="/badge-assets/digital-ethics/_global/downloads/digital-ethics-text-version.pdf" target="_blank" download >
          Download text version – PDF
        </a>
      </div>
    </div>
  </section>
</main>

@endsection
@section('javascript')


@endsection
