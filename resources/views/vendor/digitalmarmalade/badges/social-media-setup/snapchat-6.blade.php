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
            <h1>Emojis next to your friends' names</h1>
            <p>Emojis next to friends' names in Snapchat are based very specifically on how often you interact with each friend on Snapchat. Based on that, drag and drop the best descriptions for the emojis below:</p>
            <div class="drop-wrapper drop-wrapper-snapchat">
              <div class="drag-options">
                  <ul>
                      <li class="drag-option draggable" id="answer_1_1"><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-best-friend-1.png" alt="Snapchat Emoji Best Friend"/></li>
                      <li class="drag-option draggable" id="answer_1_2"><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-new-friends.png" alt="Snapchat Emoji New Friend"/></li>
                      <li class="drag-option draggable" id="answer_1_3"><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-most-snaps.png" alt="Snapchat Emoji Most Snaps"/></li>
                      <li class="drag-option draggable" id="answer_1_4"><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-end.png" alt="Snapchat Emoji Relationship Ending"/></li>
                  </ul>
              </div>
                <div class="droppable-zone">
                    <ul>
                        <li class="dropzone" id="droppable1">
                            <div class="before-drop">
                                <p><span></span>You send the most Snaps to this Snapchatter, and they send the most Snaps to you too.</p>
                            </div>
                            <div class="after-drop">
                                <span><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-best-friend-1.png" alt="Snapchat Emoji Best Friend"/></span><p>You send the most Snaps to this Snapchatter, and they send the most Snaps to you too.</p>
                            </div>
                        </li>

                        <li class="dropzone" id="droppable2">
                            <div class="before-drop">
                                <p><span></span>One of your Best Friends - this is a Snapchatter you send a lot of Snaps to (but isn't your Best Friend).</p>
                            </div>
                            <div class="after-drop">
                                <span><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-most-snaps.png" alt="Snapchat Emoji Most Snaps"/></span><p>One of your Best Friends - this is a Snapchatter you send a lot of Snaps to (but isn't your Best Friend).</p>
                            </div>
                        </li>

                        <li class="dropzone" id="droppable3">
                            <div class="before-drop">
                                <p><span></span>Appears next to someone’s name if your Snapstreak is going to end soon. Send each other a Snap (not a Chat) to keep your streak alive.</p>
                            </div>
                            <div class="after-drop">
                              <span><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-end.png" alt="Snapchat Emoji Relationship Ending"/></span><p>Appears next to someone’s name if your Snapstreak is going to end soon. Send each other a Snap (not a Chat) to keep your streak alive.</p>
                            </div>
                        </li>

                        <li class="dropzone" id="droppable4">
                            <div class="before-drop">
                                <p><span></span>You just became friends.</p>
                            </div>
                            <div class="after-drop">
                                <span><img src="/badge-assets/{{$url['slug']}}/_global/img/snapchat/emoji-new-friends.png" alt="Snapchat Emoji Newly Friends"/></span><p>You just became friends.</p>
                            </div>
                        </li>


                    </ul>
                </div>

            </div>
            <div class="nice-one hide">
              <h2>Nice one!</h2>
              <p>Check below a few more examples of the meaning of the emojis next to your friends' names: </p>
              <ul class="boxes boxes-full-width boxes-emojis">
                <li data-aos="fade-in" data-aos-delay="100" class="aos-init aos-animate"><p>You have been each other's #1 Best Friend for at least two weeks.</p></li>
                <li data-aos="fade-in" data-aos-delay="200" class="aos-init aos-animate"><p>You share a Best Friend – your Best Friend is also this Snapchatter's Best Friend.</p></li>
                <li data-aos="fade-in" data-aos-delay="300" class="aos-init aos-animate"><p>You share a Close Friend – one of your Best Friends is also one of this Snapchatter's Best Friends.</p></li>
                <li data-aos="fade-in" data-aos-delay="400" class="aos-init aos-animate"><p>You're their Best Friend, but they aren't your Best Friend – you're someone they send the most Snaps to, but they aren't someone you send Snaps to the most.</p></li>
                <li data-aos="fade-in" data-aos-delay="500" class="aos-init aos-animate"><p>You're on a Snapstreak! Appears next to the number of days that you and a friend have Snapped each other. If you and your friend don't both send a Snap within 24 hours, you will lose your Snapstreaks.</p></li>
                <li data-aos="fade-in" data-aos-delay="600" class="aos-init aos-animate"><p>It's your friend's birthday – appears next to your friend's name on the date they entered as their birthday on Snapchat.</p></li>

              </ul>

              <a data-aos="fade-in" data-aos-delay="700" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
            </div>

        </div>

    </section>
</main>


@endsection
@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-45.js"></script>
@endsection
