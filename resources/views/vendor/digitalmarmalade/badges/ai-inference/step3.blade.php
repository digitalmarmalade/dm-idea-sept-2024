@extends($url['viewDir'] . $url['slug'] . '.master') @section('body-attributes')
  class="step-3 office-bg"
@endsection @section('page')

<ol class="progress">
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only"> Step 1 - current </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--completed"></span>
    <span class="sr-only"> Step 2 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter progress__counter--current"></span>
    <span class="sr-only"> Step 3 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only"> Step 4 </span>
  </li>
  <li class="progress__item">
    <span class="progress__counter"></span>
    <span class="sr-only">
      Step 5
    </span>
  </li>
</ol>

<div class="jsStep3 ">
  @include('vendor.digitalmarmalade.badges.ai-inference.header', ['title' => 'Header'])

  <div class="container feedback feedback--large">
    <div class="feedback__bottom feedback__bottom--x-large">
      <img class="feedback__icon" src="/badge-assets/ai-inference/_global/svg/animations/animation--alert.svg" width="227" height="227" />
    </div>

    <div class="jsStory feedback__top">
      <div class="bubble bubble--yellow bubble--tip-middle-left" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150">
        <p class="">You are a Research Consultant working for FutureCity, a company that develops smart cities.</p>
        <div class="Js-not-remove bubble__btn">
          <button class="btn btn--blue btn--sm">Continue</button>
        </div>
      </div>
    </div>
  </div>
</div>

<main class="main-content hide">
  <section class="container">
    <h1 class="t-centre" data-aos="fade-up" data-aos-duration="1500">
      Open Access<br />
      Deep Learning Models
    </h1>

    <div class="double-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <div class="col">
        <p>
          Deep learning models mimic the way the human brain works and
          can train and improve themselves to perform tasks by
          processing lots of data in a short amount of time.
        </p>

        <p>
          Deep learning is used in many contexts, across all industries to solve problems on a local, national and global scale. Deep learning models
          have been transforming our lives; from the way we shop, to the way we travel, to the way we make business decisions.
        </p>
      </div>

      <div class="col">
        <p>
          Because of these rapid advancements, massive amounts of talent and resources around the world are dedicated to accelerating the growth and
          development of deep learning models.
        </p>

        <p>Nowadays, there are open sourced lists and databases of deep learning models that are readily available.</p>

        <p>
          <strong> One example is Intel's OpenVINO™ Toolkit. </strong>
        </p>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="open-vino boxed boxed--blue-gradient-1" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <header class="open-vino__header">
        <h2 class="open-vino__heading">OpenVINO™ Toolkit</h2>
        <img
          class="open-vino__logo"
          src="/badge-assets/ai-inference/_global/imgs/open-vino.png"
          width="186"
          height="44"
          alt="Open Vino logo"
          loading="lazy"
          decoding="async"
        />
      </header>

      <div class="double-col">
        <div class="col">
          <p>OpenVINO stands for Open Visual Inference and Neural Network Optimization.</p>

          <p>
            It is a toolkit that facilitates faster inference of deep learning applications which helps to create cost-effective and high-performing computer
            vision-based applications.
          </p>
        </div>

        <div class="col">
          <p>
            This means that anyone can build smart vision solutions more easily and without a high cost - something that was once only available to a
            select few experts.
          </p>

          <p>Toolkits like this can be used to provide high-performing solutions for AI integration across a wide range of scenarios. For example:</p>
        </div>
      </div>

      <ul class="list list--two-col open-vino__list "> <!-- SNAG: The class 'list--a-start' was stopping the example boxes to be equal height -->
        <li class="list__item open-vino__list-item">
          <img
            src="/badge-assets/ai-inference/_global/svg/surveillance.svg"
            width="368"
            height="274"
            alt="CCTV camera"
            loading="lazy"
            decoding="async"
          />
          <h3>Surveillance</h3>
          <p>To enhance the safety of public spaces</p>
          <p class="example-box">e.g. AI models for people detection, face detection, people tracking</p>
        </li>

        <li class="list__item open-vino__list-item">
          <img
            src="/badge-assets/ai-inference/_global/svg/smart-cities.svg"
            width="368"
            height="274"
            alt="Traffic junction"
            loading="lazy"
            decoding="async"
          />
          <h3>Smart Cities</h3>
          <p>To improve traffic flow</p>
          <p class="example-box">
            e.g. AI models to detect vehicle types in high-traffic situations and use this information to address congestion zones
          </p>
        </li>

        <li class="list__item open-vino__list-item">
          <img
            src="/badge-assets/ai-inference/_global/svg/retail.svg"
            width="368"
            height="274"
            alt="Woman in supermarket"
            loading="lazy"
            decoding="async"
          />
          <h3>Retail</h3>
          <p>To create personalised experiences</p>
          <p class="example-box">e.g. AI models to track in-store movement of customers to optimise product placement</p>
        </li>

        <li class="list__item open-vino__list-item">
          <img
            src="/badge-assets/ai-inference/_global/svg/healthcare.svg"
            width="368"
            height="274"
            alt="X-ray of a hand"
            loading="lazy"
            decoding="async"
          />
          <h3>Healthcare</h3>
          <p>To improve medical diagnoses</p>
          <p class="example-box">e.g. AI models to help analyse MRI results or x-rays</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="container">
    <div class="double-col" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <div class="col">
        <p>
          The OpenVINO™ Toolkit has multiple components of use (we will provide a link at the end of this badge for you to explore them further) but
          in this badge, we will focus on the inference engine component and even try using two pre-trained models in your assignment for FutureCity!
        </p>

        <p>An inference engine is a tool that provides us with results (the model's prediction) on the basis of a pre-trained deep learning model.</p>
      </div>

      <div class="col">
        <p>
          For example, if we have a pre-trained model that can predict whether an image is of a dog or a cat, the inference engine provides us with a
          window to run that code and test it based on the image provided in real-time. The inference engine will place the test image into the model,
          process it, and provide a prediction of what the model thinks the image is.
        </p>
      </div>
    </div>
  </section>

  <section class="container">
    <p class="t-centre container--sm" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      So, let's take a look at some of the pre-trained models available. You will get to try using two of these later in the final exercise!
    </p>

    <table class="responsive-table table-a11y" role="table" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      <caption class="sr-only">Table Caption</caption>
      <thead>
        <tr role="row">
          <th id="columnheader1" role="columnheader" scope="col">Models</th>
          <th id="columnheader2" role="columnheader" scope="col">Functionality</th>
          <th id="columnheader3" role="columnheader" scope="col">Example</th>
        </tr>
      </thead>
      <tbody>
        <tr role="row">
          <th id="item1" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>OBJECT DETECTION</th>
          <td role="cell" headers="item1 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer determines where objects are in an image and what types of objects they are.</td>
          <td role="cell" headers="item1 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Detection of faces, people, vehicles</td>
        </tr>
        <tr role="row">
          <th id="item2" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>OBJECT RECOGNITION</th>
          <td role="cell" headers="item2 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer recognises and classifies certain features based on known objects.</td>
          <td role="cell" headers="item2 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Recognition of age and gender, license plates, emotions, vehicle types or attributes</td>
        </tr>
        <tr role="row">
          <th id="item3" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>HUMAN POSE ESTIMATION</th>
          <td role="cell" headers="item3 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer finds a 2D pose using the shape of a human skeleton based on key points on the body and connections between them.</td>
          <td role="cell" headers="item3 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Sitting, arms crossed, arms in the air</td>
        </tr>
        <tr role="row">
          <th id="item4" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>IMAGE PROCESSING</th>
          <td role="cell" headers="item3 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer performs operations on an image in order to get an enhanced image to make it easier to extract useful information from.</td>
          <td role="cell" headers="item3 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Image resolution enhancement</td>
        </tr>
        <tr role="row">
          <th id="item5" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>TEXT DETECTION</th>
          <td role="cell" headers="item3 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer finds words in an image.</td>
          <td role="cell" headers="item3 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Finding building names in an image of a street</td>
        </tr>
        <tr role="row">
          <th id="item6" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>ACTION RECOGNITION</th>
          <td role="cell" headers="item3 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer finds and understands actions performed by a human.</td>
          <td role="cell" headers="item3 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Recognising sign language</td>
        </tr>
        <tr role="row">
          <th id="item7" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>MACHINE TRANSLATION</th>
          <td role="cell" headers="item3 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer converts source text in one language to text in another language.</td>
          <td role="cell" headers="item3 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>Translating English text into French text</td>
        </tr>
        <tr role="row">
          <th id="item8" role="rowheader" scope="row" headers="columnheader1"><span class="b-t-l-r col-header" aria-hidden="true">Models</span>TEXT TO SPEECH</th>
          <td role="cell" headers="item3 columnheader2"><span class="col-header" aria-hidden="true">Functionality</span>The computer reconstructs sound waves to create an audible reading from text.</td>
          <td role="cell" headers="item3 columnheader3"><span class="b-b-l-r col-header" aria-hidden="true">Example</span>A virtual assistant reading out a text message</td>
        </tr>
      </tbody>
    </table>

    <p class="container--sm boxed boxed--cobalt t-centre" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      There are links at the end of this badge to direct you to the full official Intel repository as well as the public list!
    </p>
  </section>

  <section class="container--sm">
    <p class="t-centre" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
      In short, the OpenVINO™ Toolkit is widely-used because it can be efficient, easy to use, it is an all-in-one package from model selection to
      deployment, gives you high performance, and distribution of this toolkit is free for anyone to use and create their own AI-enabled projects!
    </p>

    <p class="t-centre" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">Now, let's return to the FutureCity challenge!</p>

    <div class="container c-b">
      <a
        class="btn btn--yellow force-centre"
        onclick="oBadges.stepCompleted();"
        href="{{ $links['next'] }}"
        data-aos="zoom-in"
        data-aos-duration="1000"
        data-aos-delay="400"
      >
        Continue
      </a>
    </div>
  </section>
</main>

@endsection @section('javascript')

<script src="/badge-assets/{{ $url['slug'] }}/_global/js/text-box/step_3_story.js"></script>

<script>
  oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>
@endsection
