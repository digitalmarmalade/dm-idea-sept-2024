@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-inference.header',
  ['title' => 'Header'])

<main class="main-content">
  <section class="container">
    <div class="feedback feedback--small">
      <div class="feedback__top">
        <div class="bubble bubble--gold bubble--tip-bottom-left">
          <h1 class="heading-two">
            Congratulations!
          </h1>
          <p>
            You have successfully completed the AI Inference badge!
          </p>
        </div>
      </div>

      <div class="feedback__bottom feedback__bottom--large">
        <img
          class="feedback__icon"
          src="/badge-assets/{{ $url['slug'] }}/_global/svg/icon--android-gold.svg"
          width="109"
          height="108"
          loading="lazy"
          decoding="async"
        />
      </div>
    </div>
  </section>

  <section class="container">
    <h2 class="inherit t-centre">
      In this badge you have:
    </h2>
    <ul class="list list--two-col">
      <li class="list__item list__item--blue">
        Discovered the inference process and its applications
      </li>
      <li class="list__item list__item--blue">
        Made use of powerful pre-trained models and explored what
        can be built with some of these models
      </li>
      <li class="list__item list__item--blue">
        Explored how inference engines and pre-trained models
        can be used for computer vision applications, using
        OpenVINO as an example
      </li>
      <li class="list__item list__item--blue">
        Successfully completed the challenge assigned to you by
        FutureCity and provided your team with some
        proposed solutions based on your research and analysis!
      </li>
    </ul>
  </section>

  <section class="container">
    <h3 class="inherit t-centre">
      If you are interested in learning more about the topics
      above, please take a look at the following resources:
    </h3>

    <ul class="list list--one-col list--condensed">
      <li class="list__item">
        <a class="t-centre" rel="noopener" target="_blank" href="https://docs.openvinotoolkit.org/2021.4/index.html">
          OpenVINO™ Toolkit Overview
        </a>
      </li>
      <li class="list__item">
        <a rel="noopener" target="_blank" href="https://docs.openvinotoolkit.org/2021.4/omz_models_group_intel.html">
          OpenVINO™ Toolkit Intel's Pre-Trained Models
        </a>
      </li>
      <li class="list__item">
        <a rel="noopener" target="_blank" href="https://docs.openvinotoolkit.org/2021.4/omz_models_group_public.html">
          OpenVINO™ Toolkit Public Pre-Trained Models
        </a>
      </li>
      <li class="list__item">
        <a rel="noopener" target="_blank" href="https://www.intel.com/content/www/us/en/forms/idz/devcloud-cert-registration.html?tgt=https://www.intel.com/content/www/us/en/secure/forms/devcloud-enrollment/account-provisioning.html?type=cert">
          Intel® Edge AI Certification Program
        </a>
      </li>
      <li class="list__item">
        <a rel="noopener" target="_blank" href="https://www.intel.com/content/www/us/en/developer/tools/oneapi/distribution-for-python.html">
          Intel® Distribution for Python
        </a>
      </li>
      <li class="list__item">
        <a rel="noopener" target="_blank" href="https://www.intel.com/content/www/us/en/developer/tools/devcloud/edge/learn/overview.html">
          Intel® DevCloud
        </a>
      </li>
      <li class="list__item">
        <a rel="noopener" target="_blank" href=" https://git-scm.com/download">
          Git Download
        </a>
      </li>
    </ul>
  </section>

  <section class="container container--sm">
    <h3 class="t-centre">
      Try another Intel AI for Youth iDEA badge
    </h3>
    <ul class="other-badges">
      <li class="other-badge">
        <a rel="noopener" target="_blank" href="#">
          <img
            src="/badge-assets/ai-inference/_global/imgs/badge--what-is-ai.png"
            alt="Try iDEA Badge What is AI"
            width="240"
            height="240"
            loading="lazy"
            decoding="async"
          />
        </a>
      </li>
      <li class="other-badge">
        <a rel="noopener" target="_blank" href="#">
          <img
            src="/badge-assets/ai-inference/_global/imgs/badge--problem-solving-with-ai.png"
            alt="Try iDEA Badge Problem Solving With AI"
            width="240"
            height="240"
            loading="lazy"
            decoding="async"
          />
        </a>
      </li>
      <li class="other-badge">
        <a rel="noopener" target="_blank" href="#">
          <img
            src="/badge-assets/ai-inference/_global/imgs/badge--maths-tools-for-ai.png"
            alt="Try iDEA Badge Maths Tools for AI"
            width="240"
            height="240"
            loading="lazy"
            decoding="async"
          />
        </a>
      </li>
      <li class="other-badge">
        <a rel="noopener" target="_blank" href="#">
          <img
            src="/badge-assets/ai-inference/_global/imgs/badge--ai-project-cycle.png"
            alt="Try iDEA Badge AI Project Cycle"
            width="240"
            height="240"
            loading="lazy"
            decoding="async"
          />
        </a>
      </li>
    </ul>

    <div class="container c-b">
      <a
        class="btn btn--yellow force-centre"
        onclick="oBadges.stepCompleted();" href="{{$links['submit']}}"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="150"
      >
        Return to <span style="text-transform: none">i</span>DEA
      </a>
    </div>
  </section>
</main>

<footer class="main-footer">
  @include('vendor.digitalmarmalade.badges.ai-inference.disclaimer')
</footer>

@endsection

@section('javascript')

@endsection
