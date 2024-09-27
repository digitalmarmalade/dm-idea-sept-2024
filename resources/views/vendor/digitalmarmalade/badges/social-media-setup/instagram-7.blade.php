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


        <main>
          <section class="section-1 last-section only-section">
            <div class="section-title">
                <p>Instagram</p>
            </div>
            <div class="holder">
              <h1>Private Posts</h1>
              <p>By default, anyone can view your profile and posts on Instagram. You can make your posts private so that only followers you approve can see them. If your posts are set to private, only your approved followers will see them in the Photos tab of Search & Explore or on hashtag or location pages. Posts can't be set to private from a desktop computer. To set your posts to private from the Instagram app go to your profile by tapping the <b>profile icon</b> and turn on the <b>Private Account</b> setting.</p>
              <h3>Tips about privacy</h3>
              <ul class="boxes boxes-grid boxes-grid-3-cols">
                <li data-aos="fade-up" data-aos-delay="100"><p>Private posts you share to Social Networks may be visible to the public depending on your privacy settings for those networks. For example, a post you share to Twitter that was set to private on Instagram may be visible to the people who can see your Twitter posts.</p></li>
              </ul>
              <ul class="boxes boxes-grid boxes-grid-3-cols">
                <li data-aos="fade-up" data-aos-delay="200"><p>Once you make your posts private, people will have to send you a follow request to see your posts, your followers list or your following list.</p></li>
                <li data-aos="fade-up" data-aos-delay="400"><p>If someone was already following you before you set your posts to private and you don't want them to see your posts, you can block them.</p></li>
              </ul>
              <ul class="boxes boxes-grid boxes-grid-3-cols">
                <li data-aos="fade-up" data-aos-delay="300"><p>Follow requests appear in  Activity, where you can approve or ignore them.</p></li>
                <li data-aos="fade-up" data-aos-delay="600"><p>People can send a photo or video directly to you even if they’re not following you.</p></li>
              </ul>
                <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>



            </div>
          </section>



        </main>


    @endsection

    @section('javascript')
    <script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
