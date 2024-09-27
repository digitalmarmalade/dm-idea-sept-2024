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
    <section class="section-1">
        <div class="section-title">
            <p>Snapchat</p>
        </div>
        <div class="holder">
            <h1>Your Friends' Snaps</h1>

            <div class="cols cols-vertical-aligment">

                <div class="col" style="display: block;">
                  <img data-aos="fade-in" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-3.png" alt="snapchat - Your friends Snaps"/></a>
                </div>
                <div class="col">
                    <p>Swipe right when in camera mode, or tap on the bottom-left &ldquo;chat box&rdquo; button which will turn blue when you have unopened Snaps.</p>
                    <p>This is a list of Snaps sent to you directly. Tap on each name to view.</p>
                    <p>When you open the snap, it will show for the number of seconds the sender set it to. The timer in the top right will count these down. If it's a video, it will play the length of the video (max length 10 seconds).</p>
                    <p>To respond to the snap, tap the big circle. This will open up a chat box with the sender. You can type a reply.</p>
                    <p>Or tap the picture frame button to reply with a picture from your camera roll, call them, reply with your own snap or reply with a video call.</p>
                    <p>All history will be deleted unless you save it by holding down a line of chat (this works for pictures too).</p>
                </div>
            </div>
        </div>

    </section>
    <section class="section-2 last-section">
        <div class="holder">
            <h1>Snapchat Memories</h1>

            <div class="cols cols-vertical-aligment">

                <div class="col">
                 <p>There's one more key feature you can access from the home screen — your <b>Snapchat Memories</b> (a history of Snaps you have previously sent and saved to your Memories).</p>
                  <p>Memories is where all the Snaps you saved before sending are stored.</p>
                  <p>Tapping on any snap will bring it up in full, and there's lots you can do with it. Scroll up to push the old snap into "edit mode" — you can now treat it like you've just captured it, send it as it is, or tap edit to add geofilters, just as before (by swiping right or left), add a caption, or overlay emojis...</p>
                  <p>Snapchat remembers the location your photos were taken in.</p>
                  <p>You can also export your Snaps from Memories too — that is, send via messaging and mail apps outside of Snapchat and/or save to your phone.</p>
                  </p>
                </div>
                <div class="col" style="display: block;">
                  <img data-aos="fade-in"  src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-4.png" alt="snapchat - Snapchat Memories"/></a>
                </div>
            </div>
            <div class="cols cols-vertical-aligment">
                <div class="col" style="display: block;">
                <img data-aos="fade-in" src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/snapchat-5.png" alt="snapchat - Snapchat Memories"/></a>
              </div>
                <div class="col">
                  <p>Tapping on the three dots  in the top right will give you the option to move your snap to <b>My Eyes Only</b> — do this if you don't want to remove your saved snap from the <b>Snaps</b> section in Memories.</p>
                  <p>You will be prompted to set up a passcode for Snaps sent to  <b>My Eyes Only</b>, and you will have to enter this passcode to view any Snaps you have moved here.</p>
                  </p>
                </div>

            </div>

        <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>

    </section>

</main>


@endsection

@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
@endsection
