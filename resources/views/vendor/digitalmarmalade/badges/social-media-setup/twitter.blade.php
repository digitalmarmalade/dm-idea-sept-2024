@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')


<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-twitter.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>
        <main class="features features-twitter">
          <section class="section-1 last-section only-section">
            <div class="section-title">
              <p>Twitter</p>
            </div>
            <div class="holder">
              <img class="network-icon" src="/badge-assets/{{$url['slug']}}/_global/img/icon-twitter.svg" alt="Twitter"/></a>
              <p>Twitter is an online news and Social Networking service where users post and interact with messages, known as &ldquo;tweets&rdquo;. Twitter was created in March 2006 and rapidly gained worldwide popularity. It has been described as &ldquo;the SMS of the Internet&rdquo;.</p>
              <p>Please note you have to be 13 years old and over to create an account on Twitter. If you are not old enough, you can still complete this badge to learn for the future.</p>
              <h1>Key Features</h1>
              <div class="cols-key-features">
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="100">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-tweets.svg" alt="Tweets"/>
                    <h2>Tweets</h2>
                    <p>Tweets are 280 character posts and updates. A character is each and every letter, number or emoji. The 280 character limit includes spaces with each space counted as one character. You’ll also see there is an archive of every Tweet you’ve ever created. You can see both your own Tweets and other users’ Tweets. Scanning through another user’s recent Tweets will give you a good sense of what they spend their time doing and what they value.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="400">
                    <img class="messages" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-messages.svg" alt="Messages"/>
                    <h2>Messages</h2>
                    <p>This is your inbox for direct messages. Direct messages are 280 characters long and can be sent privately to Twitter users who are following your account. Think of them as private Tweets. It’s a great way to follow up with someone if they have a question or concern about your company that can be handled simply between you both.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="700">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-likes.svg" alt="Likes"/>
                    <h2>Likes</h2>
                    <p>This shows all the Tweets you have liked. You like a Tweet by clicking the small heart icon. Liking a Tweet is a great way to acknowledge another user’s message. It’s also a great way to get noticed by potential followers. If you frequently like their Tweets, they’ll notice and may take an interest in learning more about you.</p>
                  </div>
                </div>
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="200">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-home.svg" alt="Home or Feed"/>
                    <h2>Home or Feed</h2>
                    <p>A chronological collection of Tweets made by Twitter users you follow. Catch up on the day and see what people are saying. Find interesting, timely conversations and jump in.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="500">
                    <img class="retweets" src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-retweets.svg" alt="Retweets"/>
                    <h2>Retweets</h2>
                    <p>A retweet is a reshare of the original Tweet. Clicking the small circle icon will re-share that tweet to your followers. This is a great way to endorse another user’s idea or message. It pretty much says: &ldquo;I agree and I think more people should see this&rdquo;. This feature is the power behind Twitter’s ability to spread information around the world in seconds. If you’re operating as a brand, keep in mind that anything you endorse or retweet will (forever) be associated with your brand.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="800">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-following.svg" alt="Following"/>
                    <h2>Following</h2>
                    <p>This is the list of Twitter users you follow. Clicking the Follow button on another user’s profile is a bit like subscribing. Every time they Tweet, you’ll see it in your Feed. Find influential people in your industry and keep tabs on what they have to say. When you follow them, they might be interested in following you too.</p>
                  </div>
                </div>
                <div class="col">
                  <div data-aos="fade-up" data-aos-delay="300">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-notifications.svg" alt="Notifications"/>
                    <h2>Notifications</h2>
                    <p>A list of activity related to your Twitter account including mentions, newest followers, retweets, likes, and additions to public lists. See who is listening to what you have to say. Say hi, acknowledge them, and keep them in mind when you’re deciding on relevant content for your followers.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="600">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-followers.svg" alt="Followers"/>
                    <h2>Followers</h2>
                    <p>This is the list of people who follow you. While your Tweets are public for everyone to find, your followers will see your Tweets in their feed. This is your core Twitter audience. If they like what they see from you, they’ll engage and retweet you spreading your messages and brand.</p>
                  </div>
                  <div data-aos="fade-up" data-aos-delay="900">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/twitter/feature-pinned-tweets.svg" alt="Pinned Tweets"/>
                    <h2>Pinned Tweets</h2>
                    <p>Pin one of your Tweets to the top of your profile so it stays visible, even as you post new Tweets. Pin the Tweets that people need to see. Maybe it’s a time- sensitive offer, maybe it’s a link to your latest blog post, maybe it’s just a great thought you want to share.</p>
                  </div>
                </div>
              </div>
              <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}"><span>Continue</span></a>

            </div>

            </section><!--/holder-->
        </main>


    @endsection


    @section('javascript')
    <script src="/badge-assets/{{$url['slug']}}/_global/js/step-1.js"></script>
    @endsection
