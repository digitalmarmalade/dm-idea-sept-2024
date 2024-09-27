@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-6">
    <section class="step">
      <div class="step-number light-blue" data-aos="fade-down">6</div>
      <div class="step-copy-wrapper grad-blue" data-aos="fade-right" data-aos-delay="100">
        <div class="step-copy">
          <h1  data-aos="fade-right" data-aos-delay="400">How is Big Data being used?</h1>
          <p data-aos="fade-right" data-aos-delay="500">Big Data is being used everywhere, by everyone. New and more ambitious uses will continue to be developed in the future. Here are just a few examples of how Big Data can, and will affect your life:</p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue ">
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" data-aos="fade-left" />
      <div class="holder">
        <div>
          <h2 data-aos="fade-right">Preventing crime</h2>
          <p data-aos="fade-right"  data-aos-delay="100">Big Data is applied heavily in improving security for law enforcement. Police forces use Big Data tools to catch criminals and even predict criminal activity. Credit card companies use Big Data to detect fraudulent transactions.</p>
        </div>
        <div>
          <img data-aos="zoom-in" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-1.svg" />
        </div>
      </div>
    </section>

    <section class="grad-blue">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right" />
      <div class="holder">
        <div>
          <img data-aos="zoom-in"  data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-2.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right"  data-aos-delay="200">Improving healthcare </h2>
          <p data-aos="fade-right"  data-aos-delay="300">Research is driven by data, and healthcare advances are driven by research. Being able to collect more data and then being able to analyse that data much more quickly and without errors is a key factor for success.</p>
          <p data-aos="fade-right"  data-aos-delay="400">We can now look through huge numbers of medical records and look for patterns that can assist with early diagnosis and even help develop new treatments and medicines. Data and intelligent machines are being used to help find a cure for cancer and to eradicate Alzheimer's disease. </p>
          <p data-aos="fade-right"  data-aos-delay="500">We can decode entire DNA strings in minutes to predict how diseases will evolve. Thanks to Big Data, in the near future, health apps and smartwatches will likely be able to feed data into your medical records in a way that will enable you to get a notification telling you to go to the doctor if needed. </p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue ">
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg"  data-aos="fade-right"  data-aos-delay="500"/>
      <div class="holder">
        <div>
          <h2 data-aos="fade-right">Predicting and responding to natural and man-made disasters </h2>
          <p data-aos="fade-right"  data-aos-delay="200">Data captured via sensors and transmitted to appropriate channels could be used to forecast possible earthquake occurrences and analysing patterns of human behaviour can help organisations to take action on a relief mission.</p>

          <p data-aos="fade-right"  data-aos-delay="300">Big Data has been used to monitor and safeguard the flow of refugees around war zones.</p>
        </div>
        <div>
          <img data-aos="zoom-in"  data-aos-delay="400" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-3.svg" />
        </div>
      </div>
    </section>

    <section class="grad-blue">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right"  data-aos-delay="400" />
      <div class="holder">
        <div>
          <img data-aos="zoom-in"  data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-4.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right"  >Understanding and targeting customers</h2>
          <p data-aos="fade-right"  data-aos-delay="100">Here, Big Data is used to better understand customers and their behaviours and preferences. The objective, in many cases, is to create predictive models.</p>

          <p data-aos="fade-right"  data-aos-delay="200">Using Big Data means that, telecommunication companies can better predict customer subscriber rates; retailers can predict what products will sell and car insurance companies can understand how well their customers actually drive.</p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue big-image ">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right"  data-aos-delay="100" />
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" data-aos="fade-left"  data-aos-delay="100" />

          <h2 data-aos="zoom-in"  >Understanding and optimising business processes</h2>
          <div class="holder">

            <div>
              <p data-aos="fade-right"  data-aos-delay="100">Big Data is also contributing to improving business processes. Retailers are able to optimise their stock based on predictions generated from social media data, web search trends and weather forecasts.</p>

              <p data-aos="fade-right"  data-aos-delay="200">Supply chains are seeing massive changes due to<br>a lot of Big Data analytics. Geographic positioning and radio frequency identification sensors are used to track goods or delivery vehicles and optimise routes by integrating live traffic data, etc. </p>
            </div>
            <div>

              <p data-aos="fade-right"  data-aos-delay="300">The HR industry is also taking advantage of Big Data analytics: a big American bank puts sensors into employee name badges that can detect social dynamics in the workplace. The sensors report on how employees move around the workplace, with whom they speak, and even the tone of voice they use when communicating. The company noticed that its top performing employees at call centres were those who took breaks together. So they instituted group break policies and employee performance improved by 23%!</p>
            </div>
          </div>
          <img data-aos="zoom-in"  class="business-processes" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-5.svg" />

    </section>

    <section class="grad-blue">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right"  data-aos-delay="100" />
      <div class="holder">
        <div>
          <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/img/step-6-6.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right"  data-aos-delay="100">Personal quantification and performance optimisation</h2>
          <p data-aos="fade-right"  data-aos-delay="200">Big Data is not just for companies and governments, but also for all of us individually. We can all benefit from data generated by wearable devices like smartwatches although while it gives individuals rich insights, the real value is in analysing the collective data.</p>

          <p data-aos="fade-right"  data-aos-delay="300">Another area where we benefit from Big Data analytics is finding love - online that is. Most online dating sites apply Big Data tools and algorithms to find us the most appropriate matches.</p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue ">
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" data-aos="fade-left"  data-aos-delay="400"/>
      <div class="holder">
        <div>
          <h2 data-aos="fade-right">Improving sports performance</h2>

          <p data-aos="fade-right"  data-aos-delay="100">Most elite sports have now embraced Big Data analytics.  </p>

          <p data-aos="fade-right"  data-aos-delay="200">We have the IBM SlamTracker tool for tennis tournaments; we use video analytics to track the performance of players in football and baseball games and sensor technology in sports equipment such as basketballs or golf clubs allows us to get feedback (via smartphones and cloud servers) on our own game and how to improve it. Many teams also monitor athletes outside of the sporting environment - using smart technology to track nutrition and sleep, as well as social media conversations to monitor emotional wellbeing.</p>
        </div>
        <div>
          <img data-aos="zoom-in"  data-aos-delay="300" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-7.svg" />
        </div>
      </div>
    </section>

    <section class="grad-blue">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" data-aos="fade-right"  data-aos-delay="100" />
      <div class="holder">
        <div>
          <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/img/step-6-8.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right"  data-aos-delay="200">Improving science and research</h2>
          <p data-aos="fade-right"  data-aos-delay="300">Science and research are currently going through a revolution caused by the new possibilities Big Data brings.</p>
          <p data-aos="fade-right"  data-aos-delay="400">Take, for example, CERN, the nuclear physics lab which houses the Large Hadron Collider, the world's largest and most powerful particle accelerator. The CERN data centre has 65,000 processors to analyse its 30 petabytes of data.</p>
          <p data-aos="fade-right"  data-aos-delay="500">However, it uses the computing powers of thousands of computers distributed across 150 data centres worldwide to analyse the data. Such computing powers can be leveraged to transform so many other areas of science and research. The computing power of Big Data could also be applied to any set of data, opening up new sources of information to scientists.</p>
          <p  data-aos="fade-right"  data-aos-delay="600">Census data and other government collected data can more easily be accessed and analysed by researchers to create bigger and better pictures of our health and social sciences.</p>
        </div>
      </div>
    </section>

    <section class="grad-dark-blue">
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg"  data-aos="fade-left"  data-aos-delay="400"/>
      <div class="holder">

        <div>
          <h2 data-aos="fade-right"  >Optimising machine and device performance </h2>
          <p data-aos="fade-right"  data-aos-delay="100">Machines and devices are becoming more and more autonomous with the help of Big Data analytics. An example is Google’s self-driving car experiments that are operated by Big Data tools: the car is fitted with cameras, GPS, powerful computers and sensors to safely drive on the road without human intervention. </p>
          <p data-aos="fade-right"  data-aos-delay="200">Energy companies are installing smart meters in customers’ homes that allow them to see their energy usage in real time. The smart grid would also, in theory, allow energy companies to predict usage in order to plan for future infrastructure.</p>
        </div>
        <div>
          <img data-aos="zoom-in"  data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/step-6-9.svg" />
        </div>
      </div>
    </section>

    <section class="grad-blue">
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg"  data-aos="fade-right"  data-aos-delay="100"/>
      <div class="holder">
        <div>
          <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/img/step-6-10.svg" />
        </div>
        <div>
          <h2 data-aos="fade-right"  data-aos-delay="200">Financial trading</h2>
          <p data-aos="fade-right"  data-aos-delay="300">Currently, Big Data algorithms are used to make trading decisions. Machine intelligence begins to understand how this data all works, then it is entirely feasible that with no human interaction it will be possible to generate huge amounts of personal wealth.</p>

        </div>
      </div>
    </section>

    <section class="grad-dark-blue big-image cities-countries">
      <img class="question-bg question-bg-right" src="/badge-assets/{{$url['slug']}}/_global/img/bg-left.svg" alt="" class="timeline-img-bg" data-aos="fade-left"  data-aos-delay="100" />
      <img class="question-bg question-bg-left" src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg"  data-aos="fade-right"  data-aos-delay="100"/>
      <h2 data-aos="fade-right" >Improving and optimising cities and countries</h2>

      <div class="holder">
        <div>
          <p data-aos="fade-right"  data-aos-delay="100">A lot is happening to improve various aspects of city life with the help of Big Data.</p>
          <p data-aos="fade-right"  data-aos-delay="200">Many cities are already optimising traffic flows based on real time traffic information as well as social media and weather data. There are a number of cities currently piloting Big Data analytics with the aim of turning themselves into Smart Cities, where the transport infrastructure and utility processes are all joined up. </p>

        </div>
        <div>
          <p data-aos="fade-right"  data-aos-delay="300">A bus waiting for a delayed train to help commuters continue their onward journey, or traffic lights which adapt to the actual traffic on the road and change their timings to minimise traffic jams are practical examples of how this might work. Los Angeles is using data from magnetic road sensors and traffic cameras to control traffic lights and congestion around the city. The computerised system controls 4,500 traffic signals and has reduced traffic congestion by an estimated 16%.</p>
        </div>
      </div>
      <div>
        <img data-aos="zoom-in"  src="/badge-assets/{{$url['slug']}}/_global/img/step-6-11.svg" />
      </div>
      <div class="holder">
        <div>
          <p data-aos="fade-right">In California another city is using smart water meters to detect illegal watering in real time. This has been used to help some homeowners cut their water usage by as much as 80% &mdash; vital in an area that is known to suffer severe droughts.</p>
          <p data-aos="fade-right"  data-aos-delay="200">There is a tech start-up, in Porto, Portugal, testing a new way to create mobile Wi-Fi hotspots. More than 600 city buses and taxis have been equipped with Wi-Fi transmitters, creating the largest free Wi-Fi hotspot in the world. The company then sells the routers and service to the city, which in turn provides the Wi-Fi free to citizens, like a public utility. </p>
        </div>
        <div>
          <p data-aos="fade-right"  data-aos-delay="300">In exchange, the city gets an enormous amount of data &mdash; with the idea being that the data can be used to offset the cost of the Wi-Fi in other areas. A good example of this is the sensors which can tell the city's waste management department when dumpsters are full, meaning they don't waste time, man hours, or fuel returning part-full containers.</p>
        </div>

      </div>
    </section>



  </main>


</section>




    <section class="next-step light-blue">
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
    </section>

  </main>
    @endsection



    @section('javascript')
      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 10);
      </script>

    @endsection
