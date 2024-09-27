@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-facebook.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

        <main>
          <section class="section-1">
            <div class="section-title">
                <p>Facebook</p>
            </div>
            <div class="holder">
              <h1>Your Profile</h1>
              <div class="cols">
                <div class="col">
                  <p>Your profile tells your story. You can choose what to share, such as interests, photos and personal information like your hometown, and who to share it with.</p>
                  <p>Your profile also includes your <b>Timeline</b>, where you can see your own posts and posts you've been tagged in. Your <b>Timeline</b> and tagging settings will help you manage tags and review who can add and see things on your <b>Timeline</b>.</p>
                </div>
                <div class="col">
                  <p>You can also choose to show interest categories, from sports to music which will then appear on your profile under the more button.</p>
                  <p>If you’re using a profile for professional purposes, you may want to avoid these sections unless they are industry-relevant or they offer relevant insight to connections.</p>
                </div>
              </div>
              <div class="anatomy-wrapper">
                  <div class="image-wrapper image-wrapper-facebook-profile">
                      <ul class="figures hide-desktop">
                          <li data-aos="fade-in" data-aos-delay="100">1</li>
                          <li data-aos="fade-in" data-aos-delay="200">2</li>
                          <li data-aos="fade-in" data-aos-delay="300">3</li>
                          <li data-aos="fade-in" data-aos-delay="400">4</li>
                      </ul>
                      <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-3.png" alt="Facebook - Your Profile screen"/>
                  </div>
                  <div class="description-wrapper description-wrapper-facebook-profile">
                      <ul>
                          <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Your profile picture or video</li>
                          <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Your cover photo</li>
                          <li data-aos="fade-right" data-aos-delay="300"><p><span class="figure">3</span>Your <b>Timeline</b></li>
                          <li data-aos="fade-left" data-aos-delay="400"><p><span class="figure">4</span>More interests</li>
                      </ul>
                  </div>
                  <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-3.png" alt="Facebook - Your Profile screen"/>
              </div>

            </div>
          </section>

          <section class="profile">
            <div class="holder">
              <h2>Your profile picture</h2>
              <img data-aos="fade-in" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/profile-picture-facebook.png" alt="Facebook Profile Picture recommended uploaded size is 170 pixels by 170 pixels"/>
              <div class="cols">
                <div class="col">
                  <p>Your Facebook profile picture is the square photo on the left side of your profile. It’s the same photo that shows up on other people’s walls or homepages when you post. For that reason, your profile picture should be a headshot. Your current profile picture is always public.</p>

                  <p>The image you choose for your profile picture should be square and clear in small and large sizes.</p>
                  <p>It displays at 170x170 pixels on your Profile on computers, 128x128 pixels on smartphones and 36x36 pixels on most feature phones.</p>

                </div>
                <div class="col">
                  <h3>Add or change your profile picture:</h3>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Go to your profile and hover over your profile picture.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Click &ldquo;Update Profile Picture&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Upload a photo from your computer.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500"><p>Or you can select a photo you've already uploaded or one you're tagged in.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400"><p>You can choose to add a frame.</p></li>
                      <li data-aos="fade-in" data-aos-delay="600"><p>Crop your photo and click &ldquo;Save&rdquo;. If you don't want to crop your photo, click ‘Skip Cropping’ in the bottom left, then click &ldquo;Save&rdquo;.</p></li>
                  </ol>
                </div>
              </div>
            </div>
          </section>

          <section class="section-4">
            <div class="holder">
              <h2>Your profile video</h2>
              <div class="cols">
                <div class="col">
                  <p>Alternatively,  you can also take or upload a video of up to 7 seconds to use as your profile video. Profile videos appear at the top your profile just like a profile picture.</p>
                  <p>Currently you can only add a profile video from iPhone or Android devices.
                  <h3>Add a profile video from iPhone</h3>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Go to your profile and tap your profile picture or video.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Tap &ldquo;Take a New Profile Video&rdquo; to take a new video or tap &ldquo;Select Profile Video&rdquo; to choose a video on your phone.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Record a new video or select a video already on your phone.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400"><p>Tap &ldquo;Use&rdquo;.</p></li>
                  </ol>
                </div>
                <div class="col">

                  <h3>Add a profile video from Android</h3>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Go to your profile and tap your profile picture or video.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Tap &ldquo;Take a New Profile Video&rdquo; to take a new video or tap &ldquo;Select Profile Video&rdquo; to choose a video on your phone.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Tap &ldquo;Next&rdquo;, then tap the bar at the bottom of the screen to choose a thumbnail for your video.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400"><p>Tap &ldquo;Use&rdquo;.</p></li>
                  </ol>
                </div>
              </div>
            </div>
          </section>

          <section class="cover">
            <div class="holder">
              <h2>Your cover photo</h2>
              <img data-aos="fade-in" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/profile-cover-photo-facebook.png" alt="Facebook Profile Cover Photo recommended uploaded size is 820 pixels by 312 pixels"/>
              <div class="cols">
                <div class="col">
                  <p>Your Facebook cover photo is the large image that appears behind your profile picture. The larger size of this image offers opportunities for you to make an impression.</p>
                  <p>Like your profile picture, cover photos are public, which means anyone visiting your profile will be able to see them.</p>
                </div>
                <div class="col">
                  <p>It displays at 820 pixels wide by 312 pixels high on your Profile on computers and 640 pixels wide by 360 pixels high on smartphones.</p>
                  <p>The image must be at least 400 pixels wide and 150 pixels high. It loads fastest as an RGB JPG file that's 851 pixels wide, 315 pixels high and less than 100 kilobytes.</p>
                </div>
              </div>
            </section>
            <section class="section-negative-margin last-section">
              <div class="holder">
                <h3>Add or change your cover photo</h3>
                <div class="cols cols-1-col">
                  <ol class="full-list" >
                      <li data-aos="fade-in" data-aos-delay="100"><p>Go to your profile and hover over &ldquo;Update Cover Photo&rdquo; in the top-left of your current cover photo.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Click &ldquo;Update Cover Photo&rdquo;. If you don't currently have a cover photo, click &ldquo;Add Cover Photo&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Choose whether you want to upload a new photo or pick a photo from one of your existing photo albums.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400"><p>Once you choose a photo, you can reposition it by clicking the image and dragging it up or down.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500"><p>Click &ldquo;Save Changes&rdquo;.</p></li>

                  </ol>


              </div>
                    <a data-aos="fade-in" data-aos-delay="100" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
              </div>
            </section>




        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    @endsection
