@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-linkedin.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

        <main>
          <section class="section-1">
            <div class="section-title">
                <p>Linkedin</p>
            </div>
            <div class="holder">
              <h1>Your Profile Photo</h1>
              <p>You can add, change, and edit the visibility of your LinkedIn profile photo at any time. Members with a profile photo on LinkedIn can get up to 21 times more profile views than members without. To add or change your profile photo:</p>
              <div class="cols cols-1-col">
                  <ol class="full-list">
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Click the &ldquo;Me&rdquo; icon at top of your LinkedIn homepage.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Click &ldquo;View&rdquo; Profile.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>Click on your profile photo icon near the top of the page.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>Edit your photo, if so you wish.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500" class="aos-init aos-animate"><p>Click &ldquo;Apply&rdquo; and then click &ldquo;Save&rdquo;.</p></li>
                  </ol>
            </div>
            <h2>Editing your profile photo</h2>
            <ul class="boxes boxes-grid boxes-grid--linkedin-profile">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <p>Edit your profile photo with photo filters.</p></li>
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <p>Change the position and size by dragging the photo.</p></li>
              </ul>
              <ul class="boxes boxes-grid boxes-grid--linkedin-profile">
                <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                  <p>Choose what your preview photo will look like.</p></li>
                <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                  <p>Edit the visibility of your photo.</p></li>
              </ul>
              <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-3.png" alt="linkedin - Editing your profile photo"/>

            </div>
          </section>

          <section class="profile">
            <div class="holder">
              <h2>Profile Photo guidelines and conditions</h2>
              <img data-aos="fade-in" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-profile-photo.png" alt="linkedin Profile Photo recommended uploaded size is 200 pixels by 200 pixels"/>
              <p>LinkedIn provides you with the opportunity to add a photograph to your profile to help others recognise you. Your photo can be removed by LinkedIn if your profile image doesn't include your likeness or a headshot photo. Some examples of photos that shouldn't be used are:
              </p>
              <ul class="boxes boxes-grid">
                  <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                    <p>Company logos</p></li>
                  <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                    <p>Landscapes</p></li>
                </ul>
                <ul class="boxes boxes-grid">
                  <li data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">
                    <p>Words or phrases</p></li>
                  <li data-aos="fade-up" data-aos-delay="300" class="aos-init aos-animate">
                    <p>Animals</p></li>
                </ul>
            </div>
          </section>



          <section class="cover section-4 last-section">
            <div class="holder">
              <h2>Your background photo</h2>
              <img data-aos="fade-in" data-aos-delay="100" src="/badge-assets/{{$url['slug']}}/_global/img/linkedin/linkedin-cover-photo.png" alt="linkedin Profile Cover Photo recommended uploaded size is 1584 pixels by 396 pixels"/>
              <div class="cols">
                <div class="col">
                  <p>You can also choose a custom background photo for your profile. Choose a photo with some professional context, or something that speaks to your career.</p>
                  <p>The background photo appears above the top section of your profile. You can't edit your background photo from a mobile device, but you can make changes from our desktop site.</p>
                  <p>Background images must be a file type JPG, GIF or PNG, no larger than 8MB. The recommended pixel dimensions are 1584 (w) x 396 (h) pixels.</p>
                </div>
                <div class="col">
                  <p>If your background image appears blurry or pixelated, please choose an image with a file size as close to the maximum as possible, as images with larger file sizes typically look better. Photos will also look better than images with logos.</p>
                  <p>As with the profile photo, you can use edit the image you chose before uploading.</p>
                </div>
              </div>
                <h3>Add or change your cover photo</h3>
                <div class="cols cols-1-col">
                  <ol class="full-list" >
                      <li data-aos="fade-in" data-aos-delay="100"><p>Click the &ldquo;Me&rdquo; icon at the top of your LinkedIn homepage.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200"><p>Click &ldquo;View profile&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300"><p>Click the &ldquo;Edit&rdquo; icon on the top right corner of the background photo.</p></li>
                      <li data-aos="fade-in" data-aos-delay="400"><p>Select an image from your computer to upload and click &ldquo;Open&rdquo;.</p></li>
                      <li data-aos="fade-in" data-aos-delay="500"><p>Click &ldquo;Apply&rdquo; and then click &ldquo;Save&rdquo;.</p></li>

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
