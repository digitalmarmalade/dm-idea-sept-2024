@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])
  
  <main class="step-3">

    <section class="step grad-orange">
      <div class="step-number orange" data-aos="fade-down">3</div>
      <div class="step-copy-wrapper" data-aos="fade-right" data-aos-delay="100">
        <div class="step-copy">
          <h1 data-aos="fade-right" data-aos-delay="400">How Big Data is Handled</h1>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue structured-data">
      <div class="holder">
        <div>
          <img data-aos="zoom-in" src="/badge-assets/{{$url['slug']}}/_global/img/structured-data.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right" data-aos-delay="300">Structured Data</h2>
          <p data-aos="fade-right" data-aos-delay="400">Structured data is fairly easy to organise and resides in a database. For example, orders from E-Commerce websites, or Customer Relationship Management data which tracks how an organisation is supporting its customers, can be arranged in a standard way and stored in a data warehouse.</p>
        </div>
      </div>
    </section>

    <section class="grad-orange unstructured-data">
      <div class="holder">
        <div>
          <img data-aos="zoom-in" src="/badge-assets/{{$url['slug']}}/_global/img/unstructured-data.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right" data-aos-delay="300">Unstructured Data</h2>
          <p data-aos="fade-right" data-aos-delay="400">Not easy to organise. This includes data from devices, social media, text, images and videos, and there is lots of it! Unstructured data requires a different approach to store data &mdash; we don't want to lose it, so having one copy is not a good idea! Because it's so big it's better to spread it out across various locations (distributed data storage), and it's arriving at such a high rate that the key thing to do is capture it (organising and using it can be done later!).</p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue the-cloud-section">
      <div class="holder">
        <h2 data-aos="fade-up">The Cloud</h2>
        <p data-aos="fade-up" data-aos-delay="100">Apache's Hadoop is an example framework which helps organisations handle their website and app data. Data is often stored in the cloud, using systems such as Amazon Web Services (AWS), Google Cloud Platform and Microsoft Azure. Hadoop is made up of two main modules:</p>
        <div class="cols">

            <div class="figure-box" data-aos="fade-up">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/1.svg" />
              <p class="figure">Distributed File-system</p>
              <p>A "file system" is the method used by a computer to store data.  The Distributed File System allows data to be stored in an easily accessible format, across a large number of linked storage devices. Remember, this is much better than storing the data all in one place.</p>
            </div>

            <div class="figure-box" data-aos="fade-up" data-aos-delay="100">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/2.svg" />
              <p class="figure">MapReduce</p>
              <p>MapReduce is named after the two basic operations this module carries out &mdash; reading data from the database, putting it into a format suitable for analysis (map), and performing mathematical operations i.e counting the number of males aged 30+ in a customer database (reduce).</p>
            </div>
          </div>
        </div>
      </div>
      <img  data-aos="fade-up"src="/badge-assets/{{$url['slug']}}/_global/img/the-cloud.svg" />
    </section>

    <section class="next-step orange">
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
    </section>

  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 5);
      </script>

    @endsection
