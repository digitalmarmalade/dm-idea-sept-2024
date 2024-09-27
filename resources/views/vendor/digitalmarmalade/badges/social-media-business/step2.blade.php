@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main class="the-coffee-shop-task">
  <section class="blue top">
      <img class="cloud cloud-1" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-1.svg" alt="" />

      <img class="cloud cloud-2" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-2.svg" alt="" />

      <img class="cloud cloud-3" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-3.svg" alt="" />

      <img class="cloud cloud-4" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-4.svg" alt="" />

      <img class="cloud cloud-5" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-5.svg" alt="" />

      <img class="cloud cloud-6" src="/badge-assets/{{$url['slug']}}/_global/img/cloud-6.svg" alt="" />

      <div class="holder">
        <div class="task-intro">
        <h1 data-aos="zoom-in" data-aos-delay="100">The Coffee Shop</h1>

        <p data-aos="zoom-in" data-aos-delay="200">You’ve learnt that Social Media platforms differ in terms of audience profiles and types of content.</p>

        <p data-aos="zoom-in" data-aos-delay="300">A chain of coffee shops is using Social Media as part of their marketing strategy. Their marketing goals are:</p>
        <ul class="coffee-shop-goals">
          <li data-aos="zoom-in" data-aos-delay="400">Promote a new line of cold coffee drinks and increase brand awareness 15% by the end of the summer.</li>
          <li data-aos="zoom-in" data-aos-delay="500">By the end of the summer, increase the number of store visits by 10%. To achieve this objective, engage with customers that don’t necessarily associate coffee shops with a cold beverage.</li>
        </ul>
        <p data-aos="zoom-in" data-aos-delay="600">The company’s marketing team has prepared a few pieces of content that you will need to post on Social Media. Using what you've just learnt to think about how you would make the best use of the content.</p>
      </div>
      </div>
      <div class="the-coffee-shop">
        <img class="fence" data-aos="fade-right" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/fence.png" alt="" />
        <img class="building" data-aos="fade-up" data-aos-delay="200" src="/badge-assets/{{$url['slug']}}/_global/img/the-coffee-shop.png" alt="" />
        <img class="people" data-aos="fade-up" data-aos-delay="400" src="/badge-assets/{{$url['slug']}}/_global/img/the-coffee-shop-people.png" alt="" />

      </div>

  </section>

  <section class="grey bottom">
    <div class="holder">
      <div class="panel" id="#task" data-aos="fade-up" data-aos-delay="100">
        <div class="task task-coffee-shop">

          <div class="question question-1">
            <span class="question-number">1/6</span>
            <p class="question-icon">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook-videos.svg" alt="" />
            </p>
            <p class="question-text">1.	A short video tutorial that shows people how to prepare the perfect cold cappuccino.</p>
            <p>To share the tutorial on your business's Facebook page, would it be better to first upload the video to your YouTube Channel and then share the link, or should you upload it directly to Facebook? Select one answer.</p>
            <ul>
              <li>Upload the video to YouTube and then share the link.</li>
              <li data-value="true">Upload the video directly to Facebook.</li>
            </ul>
            <a href="#next-1" class="btn btn-check btn-check-1">Check</a>
            <div id="next-1">
              <div class="feedback feedback-success">
                  <p>Correct!</p>
                  <p>Upload it directly to Facebook! As we've learnt already, videos uploaded directly to Facebook tend to receive more engagement and shares than YouTube links.</p>
                  <p><a href="#check-2" class="btn btn-next">Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Are you sure?</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-2">
            <span class="question-number">2/6</span>
            <p class="question-icon">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter-blog-post.svg" alt="" />
            </p>
            <p class="question-text">1.	A short video tutorial that shows people how to prepare the perfect cold cappuccino.</p>
            <p>The video is 2 minutes and 30 seconds long; how would you share it with your followers on Instagram? Select one answer.</p>
            <ul>
              <li>Upload the video to your feed and don't forget to include relevant hashtags in the caption.</li>
              <li data-value="true">Upload a beautiful still from the video to your feed and put the link to the video in your bio.</li>
            </ul>
            <a href="#next-2" class="btn btn-check btn-check-2" id="check-2">Check</a>
            <div  id="next-2">
              <div class="feedback feedback-success">
                  <p>Correct!</p>
                  <p><a href="#check-3" class="btn btn-next">Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p>You cannot upload more than 60 seconds of video to an Instagram post. If you haven't done so already, do the Social Media Set-Up badge to learn more about Instagram and other Social Media networks.</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-3">
            <span class="question-number">3/6</span>
            <p class="question-icon">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-high-res-photos.svg" alt="" />
            </p>
            <p class="question-text">2.	Photographs of staff in the stores enjoying the new cold coffee drinks.</p>
            <p>Is it appropriate to share photographs of the staff enjoying the new cold coffee drinks on Social Media or would you rather use them for a staff newsletter? Select one answer.</p>
            <ul>
              <li data-value="true">The photographs would make a great 'behind the scenes' post, share them on Instagram on a day when it's hot outside!</li>
              <li>The photographs make it look like the staff aren't working hard, do not share them.</li>
            </ul>
            <a href="#task" class="btn btn-check btn-check-3" id="check-3">Check</a>
            <div  id="next-3">
              <div class="feedback feedback-success">
                  <p>Great Choice!</p>
                  <p><a href="#check-4" class="btn btn-next">Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-4">
            <span class="question-number">4/6</span>
            <p class="question-icon">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-high-res-photos.svg" alt="" />
            </p>
            <p class="question-text">2.	Photographs of staff in the stores enjoying the new cold coffee drinks.</p>
            <p>Apart from Instagram, where else might be appropriate to share this content? Select five answers.</p>
            <ul>
              <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook.svg" alt="" /><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook-grey.svg" alt="" /></li>
              <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin.svg" alt="" /><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin-grey.svg" alt="" /></li>
              <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter.svg" alt="" /><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter-grey.svg" alt="" /></li>
              <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-pinterest.svg" alt="" /><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-pinterest-grey.svg" alt="" /></li>
              <li><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube.svg" alt="" /><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube-grey.svg" alt="" /></li>
              <li data-value="true"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat.svg" alt="" /><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat-grey.svg" alt="" /></li>
            </ul>
            <a href="#next-4" class="btn btn-check btn-check-4" id="check-4">Check</a>
            <div id="next-4">
              <div class="feedback feedback-success">
                  <p>Great Choices!</p>
                  <p><a href="#check-5" class="btn btn-next" >Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p>Are you considering all the possible platforms where you can post photos or a series of curated photos?</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-5">
            <span class="question-number">5/6</span>
            <p class="question-icon">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-high-res-photos.svg" alt="" />
            </p>
            <p class="question-text">3.	Photos of gorgeous cups, newly designed especially for the new range of drinks.</p>
            <p>You want to share these photos on Pinterest, what must you remember to include? Select two answers.</p>
            <ul>
              <li data-value="true">A link to the new menu.</li>
              <li>The time, date and location at which the photos were taken.</li>
              <li data-value="true">Keywords.</li>
              <li>How much the new cups cost the coffee shop.</li>
            </ul>
            <a href="#next-5" class="btn btn-check btn-check-5" id="check-5">Check</a>
            <div id="next-5">
              <div class="feedback feedback-success">
                  <p>Great Choices!</p>
                  <p><a href="#check-6" class="btn btn-next" >Next</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

          <div class="question question-6">
            <span class="question-number">6/6</span>
            <p class="question-icon">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-high-res-photos.svg" alt="" />
            </p>
            <p class="question-text">3.	Photos of gorgeous cups, newly designed especially for the new range of the drinks.</p>
            <p>The coffee shop has many different boards on Pinterest, which ones would be most appropriate for these photos? Select two answers.</p>
            <ul>
              <li>Coffee Plantations</li>
              <li>Winter Warmers</li>
              <li>Cookies and Cakes</li>
              <li data-value="true">Cups 'n' Saucers</li>
              <li>Latte Art</li>
              <li data-value="true">Summer Specials</li>
            </ul>
            <a href="#next-6" class="btn btn-check btn-check-6">Check</a>
            <div  id="next-6">
              <div class="feedback feedback-success">
                  <p>Great Choices!</p>
                  <p><a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" >Continue</a></p>
              </div>
              <div class="feedback feedback-fail">
                  <p>Not quite right...</p>
                  <p><a href="#task" class="btn btn-try-again">Try again</a></p>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>
</main>

@endsection
@section('javascript')
  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 2);
  </script>


@endsection
