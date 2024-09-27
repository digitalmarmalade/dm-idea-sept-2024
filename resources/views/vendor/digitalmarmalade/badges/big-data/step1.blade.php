@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-1 pink">
    <section class="step">
      <div data-aos="fade-down" class="step-number pink">1</div>
      <div class="step-copy-wrapper grad-pink" data-aos="fade-right" data-aos-delay="100">
        <div class="step-copy">
          <h1>What's big data?</h1>
          <p data-aos="fade-right" data-aos-delay="500">Big Data is the result of tracking and quantifying anything that can be recorded and stored. This can be everything from interactions on social media sites (Facebook ‘likes’ and Twitter posts, etc.) to mobile phone messages and financial transactions. An example of Big Data would be all of the NHS patient records for every person in Britain - that’s all the doctor’s appointments and prescriptions of 65 million people!</p>
        </div>
      </div>
    </section>
    <section class="grad-dark-blue">

      <div class="holder">
        <div>
          <p data-aos="fade-right" data-aos-delay="500" >The challenges of Big Data include capture, curation, storage, search, sharing, transfer, analysis and visualisation.  Scientists have to contend with the limitations of large datasets in areas such as meteorology, genomics and environmental research.<p>
          <p data-aos="fade-right" data-aos-delay="600">The limitations also affect the financial industries, the pharmaceutical sector and internet searches.</p>
        </div>
        <div>
          <p data-aos="fade-right" data-aos-delay="700">The concept of Big Data is constantly changing and evolving, which means it has to be updated all the time.  It remains the driving force behind many ongoing waves of digital transformations, including artificial intelligence, data science and the Internet of Things.</p>
        </div>

      </div>
      <div class="holder">
        <h2 class="colour-pink" data-aos="fade-right">Big Data can be defined through the 4 Vs:</h2>
      </div>
      <ul class="boxes">
        <li>
          <div>
            <img class="side"  data-aos="fade-left" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-left.svg" />
          </div>
          <div data-aos="fade-up">
            <img class="title" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-volume.svg" />
            <img class="icon" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-volume-icon.svg" />
            <p>In the past, the key challenge was around storage. Whilst this still continues to represent a challenge, decreasing storage costs mean there are now bigger challenges, such as how to find the relevant bits within the data (search) or how do we analyse it all, so it provides some valuable insight (analytics).</p>
          </div>
        </li>

        <li>

          <div data-aos="fade-up">
            <img class="title" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-velocity.svg" />
            <img class="icon" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-velocity-icon.svg" />
            <p>Data is requested and streamed at an ever increasing rate. Businesses must keep up with demand so that they can deliver data in a timely manner &mdash; customers don't like to wait for services and information!</p>
          </div>
          <div>
            <img class="side" data-aos="fade-right" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-right.svg" />
          </div>
        </li>

        <li>
          <div >
            <img class="side" data-aos="fade-left" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-left.svg" />
          </div>
          <div data-aos="fade-up">
            <img class="title" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-variety.svg" />
            <img class="icon" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-variety-icon.svg" />
            <p>Data today comes in all types of formats - pictures, text, and video to name a few.  Organisations are constantly looking for new and efficient ways of managing, merging and governing different varieties of data.</p>
          </div>
        </li>

        <li>

          <div data-aos="fade-up">
            <img class="title" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-veracity.svg" />
            <img class="icon" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-veracity-icon.svg" />
            <p>The uncertainty of data presents challenges in maintaining good quality data.  For example, if 100,000 people complete a survey how can you be sure of the honesty and accuracy of their responses?</p>
          </div>
          <div >
            <img class="side"  data-aos="fade-right" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/step-1-box-right.svg" />
          </div>
        </li>

      </ul>
      <div class="holder">
        <h2 data-aos="fade-right">How much is big, and why is it growing?</h2>
      </div>
      <div class="holder">

        <div>
          <p  data-aos="fade-right" data-aos-delay="100" >With computers and digital comes data, and lots of it. It started with the PC - desktop computers, and then, the internet. And suddenly, we began generating extreme amounts of data. </p>
          <p  data-aos="fade-right" data-aos-delay="200">As technology advanced, we saw the creation of mobile phones, Artificial Intelligence (AI), and most recently voice data (Alexa, Siri and Google Assistant & Microsoft Cortana). This means, of course, that Big Data continues to grow at an exponential rate.</p>
        </div>
        <div>
          <p  data-aos="fade-right" data-aos-delay="300">Even before computers, we had data that was generally kept on paper. Transactions, customer records, invoices, and library archives are among those.  When computers arrived, we saw a way to store that data in an organised manner &mdash; meaning it was much quicker to catalogue and was available with a simple click of a mouse.</p>
        </div>
      </div>
      <img class="big-image"  data-aos="fade-in"  src="/badge-assets/{{$url['slug']}}/_global/img/step-1.svg" />
    </section>
    <section class="next-step pink">
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
    </section>

  </main>

    @endsection


    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 1);
      </script>
    @endsection
