@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-4">

    <section class="step">
      <div class="step-number yellow" data-aos="fade-down" >4</div>
      <div class="step-copy-wrapper grad-yellow" data-aos="fade-right" data-aos-delay="100">
        <div class="step-copy">
          <h1 data-aos="fade-right" data-aos-delay="400">The Challenges of Big Data</h1>
        </div>
      </div>
    </section>

    <section class="cols">

      <div class="col">

        <div class="box grad-yellow" data-aos="fade-up" >
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-1.svg" />
          <h2>Scalability</h2>
          <p>With Big Data, it’s crucial to be able to scale up and down on-demand.  If an organisation fails to account for the rapid changes and growth in data, it can cause serious operational problems.  Big Data workloads can often spike in unpredictable places, making it difficult to plan where resources should be allocated.</p>
        </div>

        <div class="box grad-dark-blue"  data-aos="fade-up" >
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-2.svg" />
          <h2>Cost Management</h2>
          <p>It’s often very difficult to forecast the budget for Big Data projects, and if they spiral out of control the number of resources required can be very costly.  At the heart of the challenge is the need to take into account all the varying costs of the project.  For example, acquiring new hardware, paying a cloud provider and hiring the right talent.</p>
        </div>

        <div class="box grad-yellow"  data-aos="fade-up" >
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-3.svg" />
          <h2>Lack of talent</h2>
          <p>Businesses are struggling with the data talent shortage. Currently, there is a shortage of data scientists. Successfully implementing a Big Data project requires a sophisticated team of developers, data scientists and analysts who have the required expertise within their respective fields. Data scientists and data engineers are becoming some of the most coveted new job titles.</p>
        </div>

      </div>

      <div class="col">

        <div class="box grad-dark-blue"  data-aos="fade-up" data-aos-delay="100" >
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-4.svg" />
          <h2>Data Privacy</h2>
          <p>So much of the Big Data generated these days contains personal information and organisations have a responsibility to keep that information secure and private.</p>
        </div>

        <div class="box grad-yellow"  data-aos="fade-up" >
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-5.svg" />
          <h2>Security</h2>
          <p>While keeping vast amounts of data secure is difficult, it is a necessity for organisations that they must keep their customers’ confidence. </p>
          <p>The threat of hacking and data breaches is always there!</p>
        </div>

        <div class="box grad-dark-blue"  data-aos="fade-up" >
          <div>
            <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-6.svg" />
            <h2>Data Quality</h2>
            <p>Data quality has been a longstanding issue that has yet to be solved. The ability to store every piece of data a business produces in its original form only makes the problem worse. ‘Dirty data’ costs companies in the United States $600 billion every year.  The causes of dirty data are wide ranging - examples include user input errors, duplicate data and incorrect data linking.  In addition to being meticulous at maintaining and cleaning data, Big Data algorithms can also be used to help clean data.</p>
          </div>
        </div>

      </div>

      <div class="col">

        <div class="box grad-yellow"  data-aos="fade-up" data-aos-delay="200">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-7.svg" />
          <h2>Data Discrimination</h2>
          <p>With so much information about people’s lives stored within Big Data, it could potentially be used to discriminate against people.</p>

        </div>

        <div class="box grad-dark-blue"  data-aos="fade-up">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/step-4-8.svg" />
          <h2>Actionable Insights</h2>
          <p>More data doesn’t necessarily mean useful insights.  Data science teams will need to work even harder to identify the key business objectives and required insights they want to gather from the huge amount of data. The growing challenge is to extract those required insights from the collated data in order to deliver the business objectives as defined.</p>
        </div>

        <div class="box grad-yellow box-continue"  data-aos="fade-up" data-aos-delay="900">
                    <p>Handling the challenges outlined above is essential.  Businesses and organisations that fail to act will face huge risks and unfavourable outcomes, which could damage their reputations, alienate customers, and potentially carry legal and financial consequences.</p>
          <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
        </div>

      </div>

    </section>





  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 7);
      </script>

    @endsection
