@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
  class="step-2"
@endsection @section('page')

<ol class="progress">
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only">
      Step 1 - current
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--current"></span>
    <span class="sr-only">
      Step 2
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 3
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 4
    </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 5
    </span>
  </li>
</ol>

@include('vendor.digitalmarmalade.badges.ai-inference.header',
  ['title' => 'Header'])

<main class="main-content">
  <section class="container">
    <h1
      class="t-centre"
      data-aos="fade-up"
      data-aos-duration="1500"
      data-aos-delay="150"
    >
      What is Inferencing?
    </h1>

    <div
      class="double-col mb-xl"
      data-aos="fade-up"
      data-aos-duration="1500"
      data-aos-delay="150"
    >
      <div class="col">
        <p>
          The word inference means to draw a conclusion based on
          evidence and reasoning, rather than explicitly being
          told something. One way of describing this is when
          someone figures out an answer by “connecting the dots”,
          based on all of the facts and knowledge they already have.
        </p>
      </div>

      <div class="col">
        <p>
          In the context of artificial intelligence, inference is where an AI model
          uses what it has learned to do in training (e.g. to detect objects or
          recognise images) to process and draw insights from new data.<br/><br/>
          Let's break this down.
        </p>
      </div>
    </div>

    <article>
      <h2
        class="inherit t-centre"
        data-aos="fade-up"
        data-aos-duration="1500"
        data-aos-delay="150"
      >
        There are two key steps in developing an AI model:
      </h2>

      <ul class="list list--two-col list--numbered mb-xl" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <li class="list__item list__item--blue list__item--numbered list__item--headed">
          <span>
            <h2 class="list__item__heading">Training</h2>
            <p>
              A <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip1_content">
              neural network</span> is trained by feeding it lots of labelled training data
              (e.g. images or video) so it can learn how to identify what you need it to identify.
            </p>
          </span>
        </li>

        <li class="list__item list__item--blue list__item--numbered list__item--headed">
          <span>
            <h2 class="list__item__heading">Inference</h2>
            <p>
              The trained neural network is deployed onto a device, which will then process
              data in the real world, to look for and identify what it has been trained to.
            </p>
          </span>
        </li>
      </ul>

      <div class="double-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <div class="col">
          <p>
            We can think of it like a student who is studying
            something (or being trained) and then, after graduation,
            goes to work in the real world (this is inferencing).
          </p>

          <p>
            It takes a lot of processing power to train a neural
            network but once trained and given real-world data,
            neural networks can provide answers in just moments.
          </p>
        </div>

        <div class="col">
          <p>
            Once the AI learns the model, it creates an inference
            model that it will use to solve and/or classify the
            problem. This allows AI processors to learn complex
            structures without requiring large amounts of data.
          </p>
        </div>
      </div>
      </article>
  </section>

  <section class="activity--blue activity">
    <div class="container">
      <p class="t-centre mb-xl" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        Let's train an AI model and then inference it!
      </p>

      <div class="boxed boxed--blue-5 boxed--confused" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
        <h2>Robot waste sorting</h2>
        <div class="double-col">
          <div class="col">
            <p>
              <span class="tooltipster jsTooltip" data-tooltip-content="#tooltip2_content">
                Smart cities</span> have been using AI to create more sustainable and
                efficient waste management systems. One way of doing this is to use robots
                to sort recyclable waste at recycling centres.
            </p>

            <p>
              Robot recycling uses AI to sort waste products so that humans don't have to.
              This has many advantages &#8212; it can be done quicker, more accurately and protects
              people from the health and safety risks that come with sorting waste manually.
            </p>

            <p>
              Robots can be trained to recognise different types of objects based
              on features, like the way they look, what they are made from, their
              texture, and weight.
            </p>

            <p>
              In this activity, we will train an AI model to detect what material an
              object is, based on how it looks. But how?
            </p>
        </div>

        <div class="col">
          <p>
            First, the robot needs to be trained with many different images of
            these objects, each image labelled with its correct category (e.g. plastic).
          </p>

          <p>
            For example, plastic bottles come in many different shapes and sizes so
            it's important that the robot is trained to recognise different variations
            of the same object category. Once the robot is trained, we can test it to
            see if it is working the way it is supposed to &#8212; this is where inference comes in.
          </p>
        </div>
      </div>
    </div>
  </section>

  @include('vendor.digitalmarmalade.badges.ai-inference.task_2')
  @include('vendor.digitalmarmalade.badges.ai-inference.task_3')
</main>

@include('vendor.digitalmarmalade.badges.ai-inference.tooltips')

@endsection @section('javascript')
<script src="/badge-assets/{{
      $url['slug']
  }}/_global/js/tasks/task_2.js"></script>
<script src="/badge-assets/{{
      $url['slug']
  }}/_global/js/tasks/task_3.js"></script>

  <script src="/badge-assets/{{
    $url['slug']
}}/_global/js/text-box/task_2_story.js"></script>

  <script src="/badge-assets/{{
    $url['slug']
}}/_global/js/text-box/task_3_story.js"></script>

<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>


<script>
  $(document).ready(function () {
    var triggerMode = "hover";

    if ($("body").hasClass("touch")) {
      triggerMode = "click";
    }

    $(".jsTooltip").tooltipster({
      trigger: triggerMode,
      maxWidth: 350,
    });
  });
</script>

<script>
  const overlay = document.querySelector('.overlay')

  if (overlay.classList.contains('overlay--active')) {
    document.body.style.overflow = 'hidden'
    document.body.style.position = 'fixed'
  } else {
    document.body.style.overflow = 'visible'
    document.body.style.position = 'static'
  }
</script>


@endsection
