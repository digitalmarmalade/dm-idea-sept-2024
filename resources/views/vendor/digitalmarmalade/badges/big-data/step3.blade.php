@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  @include('vendor.digitalmarmalade.badges.big-data.header', ['title' => 'Header'])

  <main class="step-2 red">
    <section class="step">
      <div class="step-number red" data-aos="fade-down">2</div>
      <div class="step-copy-wrapper grad-red" data-aos="fade-right" data-aos-delay="100">
        <div class="step-copy">
          <h1 data-aos="fade-right" data-aos-delay="400">The History of Big Data</h1>
        </div>
      </div>
    </section>
    <section class="timeline-holder grad-dark-blue">

        <div class="timeline" data-slick='{"slidesToShow": 1, "slidesToScroll": 1}'>
        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>Ancient History of Data</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-1.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>18,000 BC</h3>
                  <p>The earliest examples we have of humans storing and analysing data were called ‘tally sticks’. Palaeolithic tribes people used sticks, notched with marks, to keep track of trading activity or supplies. By comparing sticks and notches, they were able to predict how long their food supplies would last.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>Ancient History of Data</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-2.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>300 BC – 48 AD</h3>
                  <p>The largest collection of data in the ancient world is thought to be the Library of Alexandria, located in Egypt. Approximately half a million scrolls were stored there, covering everything humankind had learned so far, on almost every topic imaginable.</p>

                  <p>Sadly, in 48AD it is thought to have been destroyed by the invading Romans, perhaps accidentally.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Dawn of Modern Data Storage</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-7.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1926</h3>
                  <p>In a magazine interview,  Nikola Tesla states that when wireless technology is “perfectly applied, the whole Earth will be converted into a huge brain, which in fact it is, all things being particles of a real and rhythmic whole … and the instruments through which we shall be able to do this will be amazingly simple compared to our present telephone. A man will be able to carry one in his vest pocket”.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Dawn of Modern Data Storage</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-10.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1928</h3>
                  <p>Fritz Pfleumer, a German-Austrian engineer, invents a method of storing information magnetically on tape.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Dawn of Modern Data Storage</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-3.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1944</h3>
                  <p>Fremont Rider, Wesleyan University Librarian, publishes The Scholar and the Future of the Research Library. Based on the fact that university libraries were doubling in size every sixteen years, he estimates that in 2040 Yale library will have “approximately 200,000,000 volumes, which will occupy over 6,000 miles of shelves… [requiring] a cataloguing staff of over six thousand persons”.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Arrival of Data Centres</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-8.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1965</h3>
                  <p>The world’s first data centre is planned by the US Government. The project aims to store 742 million tax returns and 175 million sets of fingerprints on magnetic tape.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Arrival of Data Centers</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-12.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1976</h3>
                  <p>Material Requirements Planning (MRP) systems are becoming more commonly used across the business world.  This is the first mainstream commercial use of computers to increase the efficiency of what had previously been manual processes.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Internet Comes of Age</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-4.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1991</h3>
                  <p>Computer scientist Tim Berners-Lee submits a post on Usenet group alt.hypertext, which describes the birth of what we now know as the web.</p>
                  <p>He says: “The original idea of the web was that it should be a collaborative space where you can communicate through sharing information.”</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Internet Comes of Age</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-5.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1996</h3>
                  <p>Digital storage becomes more cost-effective for storing data than paper according to RJT Morris and BJ Truskowski, in “The Evolution of Storage Systems,” IBM Systems Journal, July 1, 2003.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Internet Comes of Age</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-6.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>1998</h3>
                  <p>K.G. Coffman and Andrew Odlyzko publish “The Size and Growth Rate of the Internet.” They hypothesise that “the growth rate of traffic on the Internet, while lower than is often cited, is still about 100% per year, much higher than for traffic on other networks. Hence, if present growth trends continue, data traffic in the U. S. will overtake voice traffic around the year 2002 and will be dominated by the Internet”.</p>
             </div>
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>Data Volumes grow with Web 2.0</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-9.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>2010</h3>
                  <p>Eric Schmidt, executive chairman of Google, tells a conference: “Every 2 days we create as much information as we did up to 2003”.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>Data Volumes grow with Web 2.0</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-11.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>2014</h3>
                  <p>For the first time, more people are using mobile devices to access digital data, than office or home computers. Companies across the globe, such as GE and Accenture agree that Big Data analytics is essential for their strategies.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>Data Volumes grow with Web 2.0</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-13.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>2018</h3>
                  <p>The number of companies with more than 100 terabytes of unstructured data has doubled since 2016.</p>
                  <p>The terabyte is a multiple of the unit byte for digital information. The prefix tera represents the fourth power of 1000, and means 10<sup>12</sup> in the International System of Units (SI), and therefore one terabyte is one trillion bytes.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Future</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-14.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>2020</h3>
                  <p>It is expected that by 2020, the accumulated volume of Big Data will increase from 4.4 zettabytes to roughly 44 zettabytes or 44 trillion GB.</p>
             </div><!--/timeline-text-->
          </div>
        </div>

        <div class="slide">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-right.svg" alt="" class="timeline-img-bg" />
          <h2>The Future</h2>
          <div class="slide-content">
             <div class="timeline-image">
                 <img src="/badge-assets/{{$url['slug']}}/_global/img/bg-history-15.svg" alt="" class="timeline-image-front" />
             </div>
             <div class="timeline-text">
                  <h3>2021</h3>
                  <p>By 2021 it is expected that virtual digital assistants will overtake the world population with 7.5 billion active devices.</p>
             </div><!--/timeline-text-->
          </div>
        </div>


      </div>
    </section>
    <section class="next-step red hide">
      <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn-next-step">Continue</a>
    </section>

  </main>
    @endsection



    @section('javascript')


      <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 3);
      </script>
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
        <script>
        var item_length = $('.timeline > div').length - 1,
        	wrongAnswers = 0;

        $('.timeline').slick({
            infinite: false,
            dots: true,
        }).on('afterChange', function(event, slick, currentSlide, nextSlide){
        	if(currentSlide == item_length) {
        		$('.next-step').removeClass('hide');
            $("html, body").animate({scrollTop: $(document).height()});
        	}
        });
      </script>


    @endsection
