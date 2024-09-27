@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-instagram.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
        <main class="features features-instagram">
          <section class="section-1">
            <div class="section-title">
              <p>Instagram</p>
            </div>
            <div class="holder">

              <div class="cols">
                <div class="col">
                  <p class="list-title list-title-photo"> Posting a photo</p>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Tap the &ldquo;+&rdquo; button at the bottom of the screen.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>You can't take or upload photos from a desktop computer. To upload a photo from your phone's library, tap &ldquo;Library&rdquo; at the bottom of the screen and select the photo you'd like to share. To take a new photo, tap &ldquo;Photo&rdquo; at the bottom of the screen then tap. Remember you can  switch between front and rear-facing cameras to get the best picture.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Once you've taken or uploaded a photo, you can add <b>effects or filters</b>, a <b>caption</b> and <b>your location</b> before posting. </p></li>
                  </ol>

                </div>
                <div class="col">
                  <p class="list-title list-title-video">Posting a Video </p>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100"><p>Tap the &ldquo;+&rdquo; button at the bottom of the screen.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>You can't take or upload videos from a desktop computer. To upload a video from your phone's library, tap &ldquo;Library&rdquo; at the bottom of the screen and select the video you'd like to share. To record a video, tap &ldquo;Video&rdquo; at the bottom of the screen. Tap and hold  to start recording, and lift your finger to stop. You can tap and hold again to record multiple video clips and tap  to switch between cameras. Keep in mind that the maximum video length is 60 seconds. </p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Once you've recorded or uploaded a video, you can add a <b>filter</b>, a <b>caption</b> and your <b>location</b> before sharing.</p></li>
                  </ol>
                </div>
              </div>


            </div>

            </section><!--/holder-->

            <section>
              <div class="holder">
                <h2>Sharing a post with multiple photos or videos</h2>
                <p>You can upload up to 10 photos and videos and share them as a single post:</p>
                <div class="cols cols-1-col">

                    <ol class="full-list">
                        <li data-aos="fade-in" data-aos-delay="100"><p>Tap the 	&ldquo;+&rdquo; button at the bottom of the screen.</p></li>
                        <li data-aos="fade-in" data-aos-delay="200"><p>Tap the 	multiple squares button.</p></li>
                        <li data-aos="fade-in" data-aos-delay="300"><p>Select up to 10 photos and videos from your phone's library. To adjust how each photo or video is cropped, tap it then touch the screen to adjust how it fits in the frame. Keep in mind that the orientation you choose (square, portrait or landscape) affects all of the photos or videos in your post. You can't select a different orientation for each photo or video. When you're done, tap 	&ldquo;Next&rdquo; in the top right.</p></li>
                        <li data-aos="fade-in" data-aos-delay="400"><p>Tap a filter at the bottom of the screen to apply it to every photo and video you've selected, or tap a photo or video to edit it and add filters individually.</p></li>
                        <li data-aos="fade-in" data-aos-delay="500"><p>To change the order of your photos and videos, tap and hold one then drag it to another spot. To remove a photo or video from your post, tap and hold one, then drag it to  at the top of the screen. When you're done, tap 	&ldquo;Next&rdquo; in the top right.</p></li>
                        <li data-aos="fade-in" data-aos-delay="600"><p>You can add one <b>location</b> and <b>caption</b> for your entire post, and <b>tag</b> someone in each individual photo. Tap 	&ldquo;Tag People&rdquo;, then swipe to find the photo you'd like to tag someone in.</p></li>
                        <li data-aos="fade-in" data-aos-delay="700"><p>Tap &ldquo;Share&rdquo;.</p></li>
                    </ol>



                </div>

              </div>

            </section>
            <section class="section-2 last-section">
              <div class="holder">
                <h2>Let’s talk about image resolutions</h2>
                <div class="cols">
                  <div class="col">
                    <p>When you share a photo on Instagram, regardless of whether you're using Instagram for iOS or Android, Instagram makes sure to upload it at the best quality resolution possible (up to a width of 1080 pixels).</p>
                    <p>When you share a photo that has a width between 320 and 1080 pixels, Instagram keeps that photo at its original resolution as long as the photo's aspect ratio is between 1.91:1 and 4:5 (a height between 566 and 1350 pixels with a width of 1080 pixels). </p>
                  </div>
                  <div class="col">
                    <p>If the aspect ratio of your photo isn't supported, it will be cropped to fit a supported ratio. If you share a photo at a lower resolution, Instagram enlarges it to a width of 320 pixels. If you share a photo at a higher resolution, Instagram shrinks it down to a width of 1080 pixels.</p>
                    <p>If you want to make sure that your photo is shared with a width of 1080 pixels, follow the tips below:</p>
                  </div>
                </div>
                <ul class="boxes">
                  <li data-aos="fade-in" data-aos-delay="100" class="aos-init"><p>Download the most recent version of the Instagram app.</p></li>
                  <li data-aos="fade-in" data-aos-delay="200" class="aos-init"><p>Upload a photo with a width of at least 1080 pixels with an aspect ratio between 1.91:1 and 4:5.</p></li>
                  <li data-aos="fade-in" data-aos-delay="300" class="aos-init"><p>Make sure you're using a phone with a high-quality camera as different phones have cameras of varying qualities.</p></li>
                </ul>
                <a data-aos="fade-in" data-aos-delay="100" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
              </div>
            </section>
        </main>


    @endsection


    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
