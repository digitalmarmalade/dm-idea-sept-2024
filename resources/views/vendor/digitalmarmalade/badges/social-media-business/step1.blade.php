@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<main>
    <section class="grey grey-no-border-top">
      <div class="holder">
        <div class="cols">
          <span class="step-number" data-aos="zoom-in" data-aos-delay="100">Step 1/5</span>
          <div class="col">
            <div class="step-title" data-aos="fade-down" data-aos-delay="300">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-title.png" alt="" />
              <h1>Which platforms to use for different businesses and why</h1>
            </div>
          </div>
          <div class="col">

            <p class="step-intro" data-aos="fade-right" data-aos-delay="400">Choosing a social platform for your business can be more complicated than you would think. You can start by assessing the most popular and most extensively used platforms. You need to think about which give you the best exposure with your target audience(s). You will also need to assess which ones will help you meet your marketing goals.</p>
          </div>
        </div>
        <!-- <ul>
          <li><a href="#facebook">Facebook</a></li>
          <li><a href="#linkedin">LinkedIn</a></li>
          <li><a href="#twitter">Twitter</a></li>
          <li><a href="#instagram">Intagram</a></li>
          <li><a href="#pinterest">Pinterest</a></li>
          <li><a href="#youtube">YouTube</a></li>
          <li><a href="#snapchat">Snapchat</a></li>
        </ul> -->
        <div class="panel panel-social-neworks" >
          <div class="social-networks">

            <div id="facebook" data-aos="fade-up" data-aos-delay="100">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-facebook.svg" alt="Facebook" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>Facebook</h2>
                  <p>This is by far the largest platform, with billions of monthly active users, the majority of whom are between the ages of 25 and 54. Facebook is good for lead generation (identifying and cultivating potential customers for your business's products or services), and its advertising platform can be highly customized to target very specific audiences.</p>
                  <p>
                    <b>Facebook is a good platform for building relationships, showing the human side of your business, and turning leads into loyal followers and customers. </b>
                  </p>
                </div>
                <div class="wrapper-col wrapper-col-3">
                  <p>Many different content types are appropriate for Facebook, but it's important to share content that reveals something interesting or distinctive about your company. Facebook (and Twitter) are both excellent for reaching large numbers of people. Eye catching content helps you stand out in people's timelines.</p>
                  <div class="tip">
                    <p><b><span>Tip</span>On Facebook, videos have higher engagement than images or links. Videos uploaded directly to Facebook tend to receive more engagement and shares than YouTube links.</b></p>
                  </div>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook-curated-content.svg" alt="Curated Content" />
                      </div>
                      <p>Curated Content</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/facebook-videos.svg" alt="Videos" />
                    </div>
                      <p>Videos</p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div id="linkedin" data-aos="fade-up" data-aos-delay="200">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-linkedin.svg" alt="Linkedin" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>Linkedin</h2>
                  <p>LinkedIn has a very specific demographic, as the majority of users are between the ages of 30 to 49.</p>
                  <p><b>Because LinkedIn is a professional networking platform (we recommend you try the Social Media Set Up badge for more information), the most suitable content for a LinkedIn post or share is job listings, career information and business related editorial content.</b> You can also share company news and milestones on your LinkedIn company page. Or you can share content that’s relevant to the professionals in your target audience. This includes training webinars, industry news, and industry studies.</p>
                </div>
                <div class="wrapper-col wrapper-col-3">
                  <p>Your LinkedIn Company Page is a great channel for potential new employees to learn more about your company. For example:</p>
                  <ul>
                    <li>Your company culture</li>
                    <li>Employees’ experiences working at your company</li>
                    <li>Employees’ achievements</li>
                    <li>Open job positions</li>
                  </ul>
                  <div class="tip">
                    <p><b><span>Tip</span>If you would like to drive engagement on your LinkedIn posts, attach an image or video as this generally leads to a higher comment and share rate on LinkedIn.</b></p>
                  </div>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin-jobs.svg" alt="Jobs" />
                      </div>
                      <p>Jobs</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin-professional-content.svg" alt="Professional Content" />
                    </div>
                      <p>Professional Content</p>
                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/linkedin-company-news.svg" alt="Company News" />
                    </div>
                      <p>Company News</p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div id="twitter" data-aos="fade-up" data-aos-delay="300">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter.svg" alt="Twitter" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>Twitter</h2>

                  <p><b>Twitter is the go-to platform if your business is about immediacy, and if you want to reach out to followers with breaking news, announcements, important messages, and other in-the-moment information.</b></p>
                  <p>Most Twitter users are under the age of 50, and Twitter makes a great platform for sharing news that’s relevant to your followers — industry news, company news, product news and the type of content that works best on this platform is easily digestible textual content, such as how-to articles, lists, and quotes.</p>
                </div>
                <div class="wrapper-col wrapper-col-3">
                  <p>If you have created GIFs for your posts, Twitter is the best platform for sharing them. Twitter is one of the Social Media platforms where GIFs first became popular. And GIFs are still very popular on Twitter today. </p>
                  <div class="tip">
                    <p><b><span>Tip</span>Learn more about GIFs with the iDEA GIF making badge - find it in the Maker category on the Badge Store.</b></p>
                  </div>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter-news.svg" alt="News" />
                      </div>
                      <p>news</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter-blog-post.svg" alt="Blog Posts" />
                    </div>
                      <p>Blog Posts</p>
                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter-gifs.svg" alt="Gifs" />
                    </div>
                      <p>Gifs</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div id="intagram" data-aos="fade-up" data-aos-delay="400">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-instagram.svg" alt="Instagram" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>Instagram</h2>
                  <p>With hundreds of millions of active users, Instagram is one of the most popular social networks. Posts are categorised with the use of hashtags, which means using the right hashtags will help your posts reach the right audience. <b>It's all about imagery on Instagram, so it’s important that the videos and photos you're sharing are high-quality. </b></p>
                  <p>Here are some examples of high-quality photos & videos you can post to Instagram:</p>
                  <p><span>Product Photos</span>If you sell physical products such as fashion, furniture or food, post high-resolution photos of your products in different settings.</p>
                  <p><span>Behind-the-scenes</span>These could be photos of events, the making of a product, or people who work in the company. </p></li>
                  <p><span>Curated Content</span>Otherwise known as User Generated Content (UGC) - Why not curate content? Make sure you ask for permission from the original author before reposting content and you should also tag them in the caption.</p>
                </div>
                <div class="wrapper-col wrapper-col-3">
                  <p><span>Quotes</span>Inspirational and motivational quotes are some of the most popular pieces of content on Instagram.</p>
                  <p><span>Instagram Stories</span>Many people create a look and feel for their Instagram profile which reflects their branding and product or service offer in terms of tone and personality. If you want to experiment a bit and try different ideas out, Instagram Stories are useful because they disappear after 24 hours.</p>
                </ul>
                  <p>There are many different ways of using Instagram <b>Stories</b> for your business. Here are a few examples:</p>
                  <ul>
                    <li>Promote a blog post</li>
                    <li>Share how-to tutorials</li>
                    <li>Share a list</li>
                    <li>Share announcements, news, and updates</li>
                    <li>Offer giveaways and discount coupons</li>
                    <li>Share photographs and videos of an event as it unfolds</li>
                    <li>Announce limited time offers and promotions</li>
                  </ul>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-high-res-photos.svg" alt="High-resolution Photos" />
                      </div>
                      <p>High-resolution Photos</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-quotes.svg" alt="Quotes" />
                    </div>
                      <p>Quotes</p>
                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/instagram-stories.svg" alt="Stories" />
                    </div>
                      <p>Stories</p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div id="pinteret" data-aos="fade-up" data-aos-delay="500">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-pinterest.svg" alt="Pinterest" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>Pinterest</h2>

                  <p>There are more women than men on Pinterest, and it’s a graphics-heavy platform that lends itself to décor, food, art, fashion, wedding, travel, and other businesses that can leverage content featuring beautiful photographs.</p>

                  <p>At its essence, Pinterest is a kind of virtual bulletin board and doesn’t entirely adhere to the set-up of conventional social networks. <b>Although traditional aspects of Social Media, like communication, don’t play such a large role on this site, the network is a great tool for increasing customer loyalty and strengthening your brand.</b></p>

                </div>
                <div class="wrapper-col wrapper-col-3">
                  <p>If you follow someone on Pinterest, you will then receive their latest “Pins” in your feed. As a further advertising option “promoted pins”, are included into the natural, or organic content of users’ feeds. </p>
                  <p>When you start posting images on Pinterest, make sure they link back to a related blog or page on your website. As people click through from your image to your site they want to see or read something that’s related to the image that caught their eye.</p>
                  <p>Once you begin posting, organize your Pinterest by dividing it into boards. Each board should have a category relative to different aspects of your business. Make it simple for your followers to find what they're looking for. Also make sure that your caption is keyword optimized.</p>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/pinterest-infographics.svg" alt="Infographics" />
                      </div>
                      <p>Infographics</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/pinterest-step-by-step-photo-guides.svg" alt="Step-by-step Photo Guides" />
                    </div>
                      <p>Step-by-step Photo Guides</p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div id="youtube" data-aos="fade-up" data-aos-delay="600">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-youtube.svg" alt="YouTube" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>YouTube</h2>

                  <p>YouTube is a great tool for getting your business valuable exposure.  Videos are a lot more engaging and shareable than text content and they also aid your search rank in Google</b>. </p>

                  <p>When creating videos for YouTube, quality matters: make sure there’s a purpose and value to what you’re uploading and sharing. Also, pay attention to your production values as both the video and audio of what you upload should be crisp, clear, easy to understand, and reflective of your brand. </p>



                </div>
                <div class="wrapper-col wrapper-col-3">
                  <p>YouTube gives you a gateway to be an educator in your industry. Upload webinars or videos addressing important topics that further the knowledge and awareness of your audience.</p>
                  <p>Videos posted to YouTube can be shared on other platforms too, for example a webinar or how-to video could also make great content for your business's LinkedIn page.</p>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube-how-to-videos.svg" alt="How-to Videos" />
                      </div>
                      <p>How-to Videos</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube-webinars.svg" alt="Webinars" />
                    </div>
                      <p>Webinars</p>
                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/youtube-promotional-videos.svg" alt="Promotional Videos" />
                    </div>
                      <p>Promotional Videos</p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <div id="snapchat" data-aos="fade-up" data-aos-delay="700">
              <div class="wrapper">
                <div class="wrapper-col wrapper-col-1">
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/icon-snapchat.svg" alt="Snapchat" />
                </div>
                <div class="wrapper-col wrapper-col-2">
                  <h2>Snapchat</h2>

                  <p><b>Snapchat is especially popular among teenagers; this can partly be credited to the host of playful features that the app offers.</b> A person or business on Snapchat can send photos and videos, called Snaps, to their friends and followers. These Snaps can then be viewed for up to 10 seconds before they’re deleted.<p>

                  <p>Snapchat offers some special paid marketing options for businesses. You can create a clever <b>Snap Ad</b>, build a fun <b>Sponsored Geofilter</b>, or give people an opportunity to interact with a <b>Sponsored Lens</b>.</p>

                  <p><span>Snap Ad</span>
                  A 10-second, full screen vertical video ad that appears between Stories. Advertisers can offer Snapchatters the choice to swipe up to view more in-depth content like a long form video, article, app install ad, or mobile website.</p>


                </div>
                <div class="wrapper-col wrapper-col-3">

                  <p><span>Geofilters</span>
                  Small art graphics that show up over a Snap. When Snapchatters take a Snap while they are in the location of your choice, they’ll be able to select your Geofilter and use it to explain where, when, and why they took the Snap.</p>

                  <p><span>Sponsored Lenses</span>
                  Give Snapchat users the chance to play with the interactive ad you’ve created. As Snapchat explains on their website, “To activate Lenses, Snapchatters simply press and hold on their faces. Some Lenses include prompts like ‘raise your eyebrows’ to trigger an animation, adding a fun twist to the experience. And when you’re finished playing, it’s easy to send Lenses to a friend or post one to your Story. On average, Snapchatters play with a Sponsored Lens for 20 seconds”.</p>
                </div>
                <div class="wrapper-col wrapper-col-4">
                  <h3>Great for:</h3>
                  <ul>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat-special-offers.svg" alt="Special Offers" />
                      </div>
                      <p>Special Offers</p>

                    </li>
                    <li>
                      <div>
                      <img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat-innovative.svg" alt="Special Offers" />
                      </div>
                      <p>Innovative Marketing Campaigns</p>

                    </li>
                  </ul>
                </div>

              </div>
            </div>

          </div>


        </div>
        <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn" >Continue</a>
      </div>
    </section>
</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}', 1);
  </script>


@endsection
