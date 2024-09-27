@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
        <main class="step-1">
            <div class="top">
                <div class="step">
                    <p>Step 1 of 7<span>what to include?</span></p>
                </div>
                <div class="holder">
                  <h1>Blogs and Websites</h1>
                  <h2>The anatomy of a Blog</h2>
                  <p>The word &lsquo;blog&rsquo; is short for &lsquo;weblog&rsquo;. Blogs are a fantastic way of sharing information and opinions, and they are a great tool for starting debates and conversations. They tend to be written in a chatty or informal style and reveal something about the personality of the writer or the business.</p>
                  <div class="anatomy-wrapper">
                      <div class="image-wrapper image-wrapper-blog">
                          <ul class="figures">
                              <li data-aos="fade-in" data-aos-delay="100">1</li>
                              <li data-aos="fade-in" data-aos-delay="100">2</li>
                              <li data-aos="fade-in" data-aos-delay="100">3</li>
                              <li data-aos="fade-in" data-aos-delay="100">4</li>
                              <li data-aos="fade-in" data-aos-delay="100">5</li>
                          </ul>
                          <img class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/anatomy-blog.png" alt="Example of blog layout"/></a>
                      </div>
                      <div class="description-wrapper description-wrapper-blog">
                          <ul>
                              <li data-aos="fade-right" data-aos-delay="100"><p><span>1. Blog</span>Blogs are web pages you can use to communicate things you care about.</p></li>
                              <li data-aos="fade-right" data-aos-delay="100"><p><span>2. Blog Post</span>Posts are the individual pieces of commentary or stories on your blog.</p></li>
                              <li data-aos="fade-right" data-aos-delay="100"><p><span>3. Comments</span>You can use blogs to invite readers to participate and share their views, too.</p></li>
                              <li data-aos="fade-left" data-aos-delay="100"><p><span>4. Imagery</span>You can illustrate them with images and embed videos.</p></li>
                              <li data-aos="fade-left" data-aos-delay="100"><p><span>5. Archive</span>Blog posts are published one by one, so your readers can access previous articles – they are archived by date, category, author, tags and sub-categories.</p></li>
                          </ul>
                      </div>
                      <img class="hide-mobile" src="/badge-assets/{{$url['slug']}}/_global/img/anatomy-blog.png" alt="Example of blog layout"/></a>
                  </div>
                  <div class="cols">
                      <div class="col">
                          <p>If you’re part of a business, company or organization, your blog should be related to the product(s) or service(s) you provide, or the cause you promote. If you’re an individual, you have more flexibility when choosing a topic:</p>
                          <p><b>Blog about something you enjoy</b>If you aren’t excited about your topic, writing about it will be hard in the long term.</p>
                          <p><b>Blog about something with plenty of room for discussion</b>A blog requires a lot of content to get going and remain interesting. You’ll be at this a long time so make sure you have plenty to talk about.</p>
                      </div>
                      <div class="col">
                          <p><b>Choose a niche in which you can establish yourself as an authority</b>You probably won’t be the first person to blog about the topic you choose. It’s almost guaranteed someone else has thought of it before you. Don’t fret about this, try come up with a unique angle or a different take on the subject. Do you have a reasonable chance of making your blog better than others talking about the same thing? The goal of any blog is to become the go-to resource for its topic or niche.</p>
                      </div>
                  </div>
                </div>
            </div>
            <div class="bottom">
                <h2>The anatomy of a Website</h2>
                <p>Websites tend to follow a standard format. It's very common to build four key sections and/or pages:</p>
                <div class="holder">
                  <div class="anatomy-wrapper">
                    <div class="image-wrapper image-wrapper-website">
                        <ul>
                            <li data-aos="fade-in" data-aos-delay="100">1</li>
                            <li data-aos="fade-in" data-aos-delay="100">2</li>
                            <li data-aos="fade-in" data-aos-delay="100">3</li>
                            <li data-aos="fade-in" data-aos-delay="100">4</li>
                        </ul>
                        <img class="hide-desktop" src="/badge-assets/{{$url['slug']}}/_global/img/anatomy-website.png" alt="Example of website layout"/></a>
                    </div>

                    <div class="description-wrapper description-wrapper-website">
                        <ul>
                            <li data-aos="fade-right" data-aos-delay="100"><p><span>1. Homepage or Hero Banner</span>Include the name of your business and a simplified pitch – a few lines about what makes you unique and/or why customers should choose your business.</li>
                            <li data-aos="fade-right" data-aos-delay="100"><p><span>2. About Us</span>Provide your company background. Also include customer testimonials, which help make your company seem more trustworthy and credible.</li>
                            <li data-aos="fade-left" data-aos-delay="100"><p><span>3. Products and Services</span>Include details about the products you sell or services you provide. On the page where you detail products or services, give a brief overview describing each,together with the cost.</li>
                            <li data-aos="fade-left" data-aos-delay="100"><p><span>4. Contact Us</span>Where you’re located, email, phone number, the hours you are open for business, and links to any social media accounts such as Twitter and Facebook should appear on this section or page. You should also embed a Google map of your location and include different ways of getting there (i.e. tube, train, car etc) if applicable.</li>
                        </ul>
                        <img class="hide-mobile" src="/badge-assets/{{$url['slug']}}/_global/img/anatomy-website.png" alt="Example of website layout"/></a>
                    </div>

                </div>
                  <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>
                </div>
            </div>
        </main>


            @endsection
            @section('javascript')
            <script>
                oBadges.setSlugAndStep('{{$url['slug']}}', 1);
            </script>
              <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
            @endsection
