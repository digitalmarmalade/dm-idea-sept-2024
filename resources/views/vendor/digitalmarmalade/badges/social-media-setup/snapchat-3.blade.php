@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-snapchat.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
<main>
    <section class="section-1 only-section last-section">
        <div class="section-title">
            <p>Snapchat</p>
        </div>
        <div class="holder">
            <h1>Adding Friends</h1>
            <div class="anatomy-wrapper">
                <div class="image-wrapper image-wrapper-snapchat-adding-friends">
                    <ul class="figures hide-desktop">
                        <li data-aos="fade-in" data-aos-delay="100">1</li>
                        <li data-aos="fade-in" data-aos-delay="200">2</li>
                    </ul>
                    <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-1.png" alt="snapchat - Adding Friends"/></a>
                </div>
                <div class="description-wrapper description-wrapper-snapchat-adding-friends">
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>Use a <b>Snapcode</b></li>
                        <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">2</span>Add friends manually</li>
                    </ul>
                </div>
                <img data-aos="fade-up" class="hide-mobile border snapchat-adding-friends" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-1.png" alt="snapchat - Adding Friends"/></a>
            </div>

            <div class="cols cols-snapchat-adding-friends">

                <div class="col">
                    <h2>Using a Snap Code</h2>
                    <p>A <b>Snapcode</b> is a lot like a QR code. It's a unique image that represents an individual Snapchat account. If you're talking to a friend in person, or they've sent you their <b>Snapcode</b>, and you want to add them to your Snapchat, it's quick and easy to do.</p>
                    <ol>
                        <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Launch Snapchat.</p></li>
                        <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Centre your camera on their <b>Snapcode</b>. Touch and hold on the image of their <b>Snapcode</b>.</p></li>
                        <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>When it works, you'll get a confirmation!</p></li>
                    </ol>
                    <p>You can also share your <b>Snapcode</b> by saving it directly to your photos and sending it to people, they can Snap or screenshot your code to add you. Tap &ldquo;Add by Snapcode&rdquo; if your friend sent you a screenshot of their <b>Snapcode</b>. (Snapchat will show you your camera roll with images it thinks might be a <b>Snapcode</b> at the top. Just tap the <b>Snapcode</b> screenshot to add your friend.)</p>
                </div>
                <div class="col">
                  <h2>Manually</h2>
                  <p>If you don't have a <b>Snapcode</b> handy, you can add friends the old-fashioned way — by username!</p>
                  <ol>
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Tap your Bitmoji/icon in the upper left corner on the Snapchat home screen.</p></li>
                      <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>Tap &ldquo;Add Friends&rdquo;. There will be three options along the top for your to choose from: Add Friends, Contacts, and <b>Snapcode</b>.</p></li>
                      <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>Enter the person's Snapchat username in the search bar at the top of the screen.</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>Snapchat will show you the username options available as you continue to enter the person's Snapchat name: then all you have to do is tap &ldquo;Add&rdquo; to add them to your Snapchat contacts!</p></li>
                      <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>You will get a notification if they add you back, which appears on your profile page under <b>Added Me</b>.</p></li>
                  </ol>
                </div>
            </div>

        <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>

    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
@endsection
