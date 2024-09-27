@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-youtube.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="section-1 last-section only-section">
        <div class="section-title">
            <p>YouTube</p>
        </div>
        <div class="holder">
            <h1>Uploading a Video</h1>

            <div class="anatomy-wrapper">
                <div class="image-wrapper image-wrapper-youtube-video">
                    <ul class="figures hide-desktop">
                        <li data-aos="fade-in" data-aos-delay="100">1</li>
                        <li data-aos="fade-in" data-aos-delay="200">2</li>
                    </ul>
                    <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/youtube-3.png" alt="youtube - Uploading a video"/></a>
                </div>
                <div class="description-wrapper description-wrapper-youtube-video">
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Upload from your computer</li>
                        <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Upload from Google Photos</li>

                    </ul>
                </div>
                <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/youtube/youtube-3.png" alt="youtube - Uploading a video"/></a>
                <div class="cols cols-1-col">
                  <ol class="full-list">
                    <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Sign in to YouTube.</p></li>
                    <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Click on &ldquo;Upload&rdquo; at the top of the page. Before you start uploading the video, you can choose the video privacy settings.</p></li>
                    <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>Select the video you'd like to upload from your computer. You can also import a video from Google Photos. As the video is uploading, you can edit both the basic information and the advanced settings of the video and decide if you want to notify subscribers (if you uncheck this option, no communication will be shared with your subscribers). Partners will also be able to adjust their Monetisation settings.</p></li>
                    <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>Click &ldquo;Publish&rdquo; to finish uploading a public video to YouTube. If you set the video privacy setting to <b>Private</b> or <b>Unlisted</b>, just click &ldquo;Done&rdquo; to finish the upload or click &ldquo;Share&rdquo; to privately share your video. If you don’t click &ldquo;Publish&rdquo;, your video won’t be viewable by other people. You can always publish your video at a later time in your Video Manager.</p></li>
                    <li data-aos="fade-in" data-aos-delay="500" class="aos-init aos-animate"><p>Once the upload is complete, YouTube will send you an email to notify you that your video has finished uploading and processing. You can then forward that email to friends or family for easy sharing. If you prefer not to receive notifications, you can opt out by visiting your email settings.</p></li>
                </ol>
              </div>
            </div>

          </div>

      </section>
      <section class="section-2 last-section">
        <div class="holder">
          <h2>"Published on" date on the watch page</h2>
            <div class="cols">
                <div class="col">
                    <p>When you make a video public on YouTube, the <b>published on</b> date on the watch page is based on Pacific Standard Time (PST). </p>
                    <p>If you want to make a video public with a specific date on the watch page, make sure that your video is uploaded or scheduled to go public for that date in Pacific Standard Time.</p>
                    <p>If you are elsewhere in the world, you will have to do the calculation to work out what time you want it published for your local audience and work out what time that corresponds to in PST.</p>
                </div>
                <div class="col">
                    <p>You may see a different publishing date on the watch page than the one you see in your Video Manager if you:</p>
                    <ul class="boxes boxes-full-width">
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Upload a public video in a timezone ahead of PST.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Schedule a private video to go public at a specific time in a timezone ahead of PST.</p></li>
                  </ul>
                </div>
            </div>
            <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary aos-init aos-animate" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>

    </section>

</main>


@endsection
@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
@endsection
