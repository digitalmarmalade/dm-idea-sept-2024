@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')


<main>
  @include('vendor.digitalmarmalade.badges.digital-ethics.header',
  ['title' => 'Header'])

  <section>
    <div class="container text-align--cente gap--xlg">
    <img data-aos="fade-up" data-aos-duration="300" data-aos-delay="100" class="animation--intro" src="/badge-assets/digital-ethics/_global/svg/animation--intro.svg" alt="" />
      <div class="flex flex--column flex--center gap text-align--center">
        <h1 data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" class="success">Congratulations!</h1>
        <div class="flex flex--column gap col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800" >
          <p>You have completed the Digital Ethics Gold badge!</p>

          <p>In this badge, you have:</p>
        
        </div>
        
      </div>
      <ul class="flex flex--wrap gap" >
        <li class='box box--intro bg--yellow flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Learned about the ethical impact that digital innovation can have on individuals, society, and the world as a whole</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--ethical-impact.svg" alt="" />
        </li>
        <li class='box box--intro bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1400">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Applied a Digital Ethics Guide that you can take away with you</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--digital-ethicist.svg" alt="" />
        </li>
        <li class='box box--intro bg--green flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1600">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Connected digital ethics to values and translated them into actions </span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--connect.svg" alt="" />
        </li>
        <li class='box box--intro bg--blue flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1800">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Discovered the role of a digital ethicist and learned how to think like one</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--framework.svg" alt="" />
        </li>
        <li class='box box--intro bg--green flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2000">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Explored some ethical dilemmas as you took on the role of a digital ethicist at a start-up </span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--dilemmas.svg" alt="" />
        </li>
        <li class='box box--intro bg--yellow flex flex--column' data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2200">
          <div class="flex flex--column gap text-align--center box__copy">
            <span>Reflected on how you can be a responsible digital citizen</span>
          </div>
          <img src="/badge-assets/digital-ethics/_global/svg/illustrations/illustration--responsible-citzen.svg" alt="" />
        </li> 
      </ul>
      <div class="flex flex--column flex--center gap col text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2400" >

          <p>Check out these resources below to learn more about digital ethics and the topics covered in this badge!</p>
          <ul class="list--resources" >
            <li>
              <a class=" btn link" href="https://idea.org.uk/badge/digital-ethics" target="_blank">
                <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--digital-ethics.png" alt="" />
                <span>iDEA Digital Ethics Bronze Badge</span>
              </a>
            </li>
            <li >
            <a class=" btn link" href="/badge-assets/digital-ethics/_global/downloads/digital-ethics-framework.pdf" target="_blank" download>
                <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--pdf-digital-framework.svg" alt="Digital Ethics Guide" />
                <span> Digital Ethics Guide PDF Download</span>
              </a>
            </li>
            <li >
             <a  class=" btn link" href="https://www.gov.scot/publications/building-trust-digital-era-achieving-scotlands-aspirations-ethical-digital-nation/pages/3/" target="_blank">
                <span>The Objects of Trust Framework</span>
              </a>
            </li>
            <li>
             <a class=" btn link" href="https://www.skillsdevelopmentscotland.co.uk/media/44684/skills-40_a-skills-model.pdf" target="_blank">
                <span>Skills 4.0 Paper: A skills model to drive Scotland’s future </span>
              </a>
            </li>
            <li >
             <a class=" btn link" href="https://online.visual-paradigm.com/community/bookshelf/default-1444l1ntn9" target="_blank">
                <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--maddie-online.svg" alt="" />
                <span>Maddie is Online Series 4 Toolkit on Ethics of Online Safety and Security</span>
              </a>
            </li>
            <li>
             <a class=" btn link" href="https://techwetrust.scot/" target="_blank">
                <img src="/badge-assets/digital-ethics/_global/svg/icons/icon--tech-we-trust.svg" alt="" />
                <span>Tech We Trust</span>
              </a>
            </li>
          </ul>

          
      </div>
      <div class="flex flex--column flex--center gap col text-align--center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2600" >

        <p>This badge was developed through funding from the Scottish Government and supported by Digital Xtra Fund.</p>
        <ul class="list--sponsors">
          <li>
            <img src="/badge-assets/digital-ethics/_global/svg/logos/logo--scottish-governament-padding.svg" alt="" />
          </li>
          <li>
            <img src="/badge-assets/digital-ethics/_global/svg/logos/logo--digitalxtra.svg" alt="" />
          </li>         
        </ul>

      </div>


      <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="2800" data-aos-anchor-placement="bottom-bottom">
        <a class="btn" onclick="oBadges.stepCompleted();" href="{{$links['submit']}}" >
            Return to <span class="i">i</span>dea
        </a>
      </div>
    </div>
  </section>
</main>

@endsection
@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 9);
    oBadges.redirectIfPreviousStepNotCompleted(8, '{{$links['last']}}');
</script>

@endsection
