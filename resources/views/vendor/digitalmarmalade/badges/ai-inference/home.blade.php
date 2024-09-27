@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')

@endsection

@section('page')

@include('vendor.digitalmarmalade.badges.ai-inference.header',
  ['title' => 'Header'])

<main class="main-content">
  <section class="container--sm">
    <h1 class="title-page__heading glow" data-aos="fade-up" data-aos-duration="1500">
      <span class="title-page__heading--exp">AI</span>
      Inference
    </h1>

    <p class="t-centre" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      In the fascinating world of AI, people strive to have not only machines that will do as they are told but to build intelligent computers that can think and create new logic as they learn &#8212; just like humans do. When a computer is trained to do something and is then immersed into real-life situations and fed real-life data to draw conclusions for humans to use, this is called <strong>inference</strong>.
    </p>
  </section>

  @include('vendor.digitalmarmalade.badges.ai-inference.factory-animation')

  <section class="container">
    <article>
      <div class="double-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <div class="col t-centre--m">
          <p>Once an AI model has been created and trained, it can be applied to a vast range of industries and  situations to help humans gain insights into a problem and figure out how they can design solutions for it.</p>

          <p>The good news is that there are many models, already trained, that are readily available for us to use and apply to our work and research.</p>
        </div>

        <div class="col t-centre--m">
          <p>Something that was once only available to a select group of experts, is now at our fingertips. This means that instead of building a model and spending a lot of time and resources training it from scratch, we can focus on innovating and building creative solutions for the world around us!</p>
        </div>
      </div>
    </article>

    <article>
      <h2 class="inherit t-centre"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="150"
      >
        In this badge, you will:
      </h2>

      <ul class="list list--two-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <li class="list__item list__item--blue">
          Discover the inference process and its applications
        </li>
        <li class="list__item list__item--blue">
          Explore how inference engines and pre-trained
          models can be used for computer vision applications,
          using OpenVINO as an example
        </li>
        <li class="list__item list__item--blue">
          Make use of powerful pre-trained models and explore
          what can be built with some of these models
        </li>
        <li class="list__item list__item--blue">
          Apply OpenVINO pre-trained models using Python to
          complete a challenge that you have been assigned as
          an employee for a smart cities development company!
        </li>
      </ul>
    </article>

    <div class="container c-b">
      <a
        class="btn btn--yellow force-centre"
        onclick="oBadges.stepCompleted();"
        href="{{$links['next']}}"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="150"
      >
        Let&rsquo;s begin!
      </a>
    </div>
  </section>
</main>

<footer class="main-footer">
  @include('vendor.digitalmarmalade.badges.ai-inference.disclaimer')
</footer>

@endsection

@section('javascript')

<script>
  document.body.classList.add('title-page')
</script>
@endsection
