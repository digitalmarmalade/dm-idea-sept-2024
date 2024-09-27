@extends($url['viewDir'] . $url['slug'] . '.master')
  <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/wordsearch.css">

@section('body-attributes')
@endsection

@section('page')
<main class="step-5">
    <section class="blue blue-no-border-bottom">
      <div class="holder">
        <div class="cols">
          <span class="step-number" data-aos="zoom-in" data-aos-delay="100">Step 3/5</span>

          <div class="col">
            <div class="step-title" data-aos="fade-down" data-aos-delay="300">
              <img src="/badge-assets/{{$url['slug']}}/_global/img/step-title.svg" alt="" />
              <h1>How businesses share and publish content</h1>
            </div>
          </div>
          <div class="col">
            <p class="step-intro" data-aos="fade-right" data-aos-delay="400">
              Let’s start by finding some key words in the diagram below:
            </p>
          </div>
        </div>

        <div class="playable-area">
          <div class="puzzle" id="puzzle">
            <div class="table-holder" id="tableHolder">
              <table cellpadding="0" cellspacing="0" id="wordSearchTable">
                <tbody class="puzzleholder">

                </tbody>
              </table>
              <div id="dragger" class="cell-drag-selection"></div>
              <div id="viewer-tpl" class="viewer"></div>
            </div>
            <ul class="words clearfix"></ul>
          </div>
        </div><!--/playable-area-->

      </section>
      <div id="overlayCompleted" class="hide" >
        <section class="grey grey-no-border-top" >
          <div class="holder">
            <h1 data-aos="fade-right" data-aos-delay="100">Good Work!</h1>
            <p data-aos="fade-right" data-aos-delay="200">Let’s understand a little more on how businesses share and publish content on Social Media:</p>
            <div class="panel panel-frequency" class="step-title" data-aos="fade-up" data-aos-delay="400">
              <div class="cols">
                <div class="col">
                  <h2>Frequency of updates</h2>
                  <p>The frequency with which you should post updates depends on:</p>
                  <ul>
                    <li>Your type of business: if you’re a news organisation you might be expected to post more regularly than, for example,  if you are an accountant.</li>
                    <li>Your audience and how hungry they are for information, and, of course, what you have to say.</li>
                  </ul>
                  <p>Although you can find an abundance of online resources that can be used as guidelines, you will have to evaluate for yourself what works best for your type of business on each of the platforms.</p>
                </div>
                <div class="col">
                  <p>Users tend to reach for the most recent posts on their feeds, so Social Media updates might not last long.  Your mission is to find the fine balance between not overwhelming your audience with too many posts and keeping your posts visible for as much time as possible.</p>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/frequency.svg" alt="" />
                </div>
              </div>
            </div>


          <div class="panel panel-engagement" data-aos="fade-up" data-aos-delay="500">
            <div class="cols">
              <div class="col">
                <h2>Engagement</h2>
                <p>Here are few ways your business can engage with your audience on Social Media:</p>
                <ul>
                  <li>
                    <h3>Monitoring and listening</h3>
                    <p>As you're sharing content you should collect data on how your audience reacts to it. Monitoring how much engagement your posts have is also a good way of assessing the quality of content you are publishing. You might re-evaluate the timing of your updates, the format or sentence structure you use, and even the type of media you're using.</p>

                    <p>Social listening data might provide valuable insights for businesses such as: your product feedback channel, your user experience consultation, and even your early warning system for when things have gone wrong.</p>
                  </li>
                  <li>
                    <h3>Participating</h3>
                    <p>If you want your community to help or participate in a particular way, respond to users’ mentions, questions, commentary, etc. By investing in the relationship with your audience and earning their loyalty you can ask for survey participation, product feedback, or any other action that suits the goals of your Social Media strategies (note anything you do requesting personal data from anyone should be compliant with GDPR. The iDEA GDPR badge is coming soon so look out for it!).</p>
                  </li>
                </ul>

              </div>
              <div class="col">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/engagement.svg" alt="" />
                <ul>
                  <li>
                    <h3>Cross-promoting</h3>
                    <p>Cross-promotion is an easy way to help users find your content. Ensure your website is linked from your social properties, keep all of your profile names the same across all social channels wherever possible and cross-promote your accounts.</p>
                  </li>
                  <li>
                    <h3>Gamifying</h3>
                    <p>People enjoy competition and like being rewarded for achievements. Adding game-like elements into your marketing mix can help you inspire a community, build on your existing social marketing and increase sentiment, retention, and loyalty.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="panel panel-branding" data-aos="fade-up" data-aos-delay="600">
            <div class="cols">
              <div class="col">
                <h2>Consistent Branding and Voice</h2>
                <p>Your social presence is just an extension of your brand, allowing that brand to reach many people through networked experiences. This can be both a risk and an opportunity, so it’s important to spend the time it takes to decide and define what your brand will be in the social environment, as inconsistency in this area can lead to a disjointed customer experience (or even a negative impact).</p>

                <img src="/badge-assets/{{$url['slug']}}/_global/img/branding.svg" alt="" />
              </div>
              <div class="col">

                <ul>
                  <li>
                    <h3>Get to know your audience</h3>
                    <p>Know your audience. Be on-brand, but also be relevant to the environment in which you're working. Your audience, or the social platform you are engaging on, may require that you slightly change your tone of voice. This is where it's important to have a really solid understanding of your brand so you can adapt as necessary. <b>Use analytics to monitor and get a better understanding of your audience</b>. You will learn more about how to use analytics in Social Media later in this badge.</p>
                  </li>
                  <li>
                    <h3>Guidelines</h3>
                    <p>Reinforce your brand identity with a clear brand voice and consistent presence by creating a Social Media stylebook that everyone who posts on your social accounts has access to. Determine what the brand tone will be and keep visual consistency to ensure your brand is easily recognizable.</p>
                  </li>
                  <li>
                    <h3>Humanise</h3>
                    <p>Humanising your brand voice will help will create a tone that people can relate to and build relationships with. </p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        </section>


        <section class="dark-grey familiarity">
          <div class="holder">

            <h1 data-aos="fade-right" data-aos-delay="100">How to earn familiarity, trust, and likeability in your community</h1>
            <p data-aos="fade-right" data-aos-delay="200">Building a reputation around these three qualities is part of what goes into building relationships. Building relationships online for your brand is not all that different from building relationships offline.</p>
            <div class="cols">

            <div class="col">
              <div class="panel" data-aos="fade-up" data-aos-delay="100">
                <h2>Be present</h2>
                <p>Being present is the first step. Give people a reason to invest in the relationship; if you don't prove you're going to stick around or pop in at least somewhat regularly, people won't have any reason to connect with you in the first place.</p>
              </div>

              <div class="panel" data-aos="fade-up" data-aos-delay="200">
                <h2>Practice etiquette</h2>
                <p>Don't be too pushy or forward, don’t post something that could cause offence to others and make sure that you treat others with respect. It's good practice during major breaking news to turn off all promoted and scheduled posts.</p>
                <div class="tip">
                  <p><b><span>Tip</span>If you haven’t done so already, do the Ethics and Safety on Social Media  iDEA badge to learn more about this.</b></p>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="panel" data-aos="fade-up" data-aos-delay="300">
                <h2>Add value</h2>
                <p>You're building a network and trying to establish your business here. Adding value will help you be recognised as helpful, authoritative, and ultimately, make you a wanted part of the community. Offer assistance, answer questions, and go out of your way to make someone's life easier or brighter.</p>
              </div>
              <div class="panel" data-aos="fade-up" data-aos-delay="400">
                <h2>Be inclusive</h2>
                <p>Don’t treat a select few so exclusively that people new to your brand or account feel as if they're outsiders. Try to make everybody you engage with, and those looking on, feel like they’re special and part of the in-crowd.</p>

              </div>
            </div>
          </div>
          </div>
        </section>

        <section class="grey grey-no-border-top crises-management">
          <div class="holder">

            <h1 data-aos="fade-right" data-aos-delay="100">Crisis management</h1>
            <div class="cols">
              <div class="col">
                <p data-aos="fade-rigth" data-aos-delay="200">Hopefully, you’ll never be faced with a crisis but it’s important to be prepared. Especially as Social Media can add an extra layer of complication to such a situation. The best way to fight chaos is with clarity. It is also critical not to be over-hasty or thoughtless, including reacting in the heat of the moment. Emotions can cloud your judgement.</p>
                <p data-aos="fade-right" data-aos-delay="300">When in crisis mode work to first understand the level of severity then identify the potential risks, and escalate accordingly. Work through the crisis by listening intently, showing empathy, transparency, and a willingness to correct whatever may have gone wrong.</p>
              </div>
              <div class="col">
                <p data-aos="fade-right" data-aos-delay="400">Afterwards, examining the impact and pulling insight from the situation can help your business heal, move forward, and gain traction toward a strong position which will help you safeguard against other problems in the future.</p>
                <p data-aos="fade-right" data-aos-delay="500">When thinking about crisis management, all companies should be in one of the following four stages at all times:</p>
              </div>
            </div>
            <ul>
              <li data-aos="fade-right" data-aos-delay="100"><div>1</div><p><span>Preparation</span>Understand the risks, build an escalation process, draft responses, make sure everyone knows their roles and responsibilities, staff training, etc.</p></li>
              <li data-aos="fade-right" data-aos-delay="200"><div>2</div><p><span>Responding</span>If necessary, following up, measuring and monitoring reach, volume, etc.</p></li>
              <li data-aos="fade-right" data-aos-delay="300"><div>3</div><p><span>Recovery</span>Typically consists of more measurement, follow up, case-studies, and knowledge sharing throughout the organization.</p></li>
              <li data-aos="fade-right" data-aos-delay="400"><div>4</div><p><span>Prevention</span> Analysis of crisis and existing procedures, identification of opportunities for improvement, and acknowledgement of what worked well.</p></li>
            </ul>
            <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>
          </div>
        <section>
    </div>
</main>

@endsection
@section('javascript')

  <script>
      oBadges.setSlugAndStep('{{$url['slug']}}',5);
  </script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/jquery-1.11.0.min.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/TweenMax.min.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/Draggable.min.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/vendor/idangerous.swiper.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/class.puzzlebase.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/class.wordsearch.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/puzzlebase-platform-specific-web.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/wordsearch-event-handlers-web.js"></script>

  <script>
    var utag_meta = {},
        utag_data = {},
        oApp = new Wordsearch();
        oApp.init();
  </script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/step-5.js"></script>
@endsection
