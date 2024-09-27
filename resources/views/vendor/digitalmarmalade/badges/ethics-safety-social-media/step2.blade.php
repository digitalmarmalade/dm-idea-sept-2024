@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <div class="cols">
      <div class="col col-1-step-2" style="position:relative; z-index:3;">
        <p class="step">Step 2 - Ethics</p>
        <div class="holder">
          <p data-aos="fade-right" data-aos-delay="100">Developing a strong understanding of best practice while using social media will help you stay safe, and ensure you don't make mistakes. Sometimes people act too hastily – they respond in anger for example, or they share posts or tweets written by someone they don't know and cannot substantiate. It's possible to accidentally post <span class="tooltip tooltip-fake-news"><span class="tooltiptext">Is a type of journalism or propaganda that consists of deliberate misinformation or hoaxes spread via traditional print and broadcast news media or online social media.</span>'fake news'</span> or rumours that might hurt someone or cause a problem somewhere.</p>
        </div>
        <img src="/badge-assets/{{$url['slug']}}/_global/img/communication.png" alt=""/>
      </div>
      <div class="col">

          <div class="holder"  >
            <div class="task task-ethics">
              <p data-aos="fade-right" data-aos-delay="200">Below is a list of considerations it would be wise to reflect upon before posting <b>anything</b> on Social Media. Remember, after you have published your posts and shares, they are on your record forever.<p>

              <p data-aos="fade-right" data-aos-delay="200">Select which principle of behaviour could be best applied to each of the following:</p>

              <ul class="steps" id="steps">
                <li class="on"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="question question-1">
                  <p data-aos="fade-in" data-aos-delay="300" class="behaviour">Will I hurt or damage anyone, or any situation, if I publish this?</p>
                  <ul>
                    <li data-aos="fade-in" data-aos-delay="400"><a href="#" data-value="true">Respect</a></li>
                    <li data-aos="fade-in" data-aos-delay="500"><a href="#" data-value="false">Transparency</a></li>
                    <li data-aos="fade-in" data-aos-delay="600"><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-1">Next</a>
                  </div>
              </div>

              <div class="question question-2 hide">
                  <p data-aos-delay="300" class="behaviour">Am I phrasing what I want to say with respect and kindness?</p>
                  <ul>
                    <li><a href="#" data-value="true">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-2">Next</a>
                  </div>
              </div>

              <div class="question question-3 hide">
                  <p class="behaviour">Am I being true to myself and communicating my values effectively?</p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="true">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-3">Next</a>
                  </div>
              </div>

              <div class="question question-4 hide">
                  <p class="behaviour">Would I be upset or angry if someone posted this to me, or about me?</p>
                  <ul>
                    <li><a href="#" data-value="true">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-4">Next</a>
                  </div>
              </div>

              <div class="question question-5 hide">
                  <p class="behaviour">Does what I want to say fit with the way I want others to know me and recognise me?</p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="true">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-5">Next</a>
                  </div>
              </div>

              <div class="question question-6 hide">
                  <p class="behaviour">Am I secretly trying to hide my real purpose for communicating this? </p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="true">Transparency</a></li>
                    <li><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-6">Next</a>
                  </div>
              </div>

              <div class="question question-7 hide">
                  <p class="behaviour">Is my <span class="tooltip"><span class="tooltiptext tooltiptext-conscience">A person's moral sense of right and wrong, viewed as acting as a guide to one's behaviour.</span>conscience</span> clear that I am not telling lies or misrepresenting the truth in any way?  </p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="true">Transparency</a></li>
                    <li><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-7">Next</a>
                  </div>
              </div>

              <div class="question question-8 hide">
                  <p class="behaviour">Am I being open and honest in what I am writing?</p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="true">Transparency</a></li>
                    <li><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-8">Next</a>
                  </div>
              </div>

              <div class="question question-9 hide">
                  <p class="behaviour">Am I risking breaking any laws?</p>
                  <ul>
                    <li><a href="#" data-value="true">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="false">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-9">Next</a>
                  </div>
              </div>

              <div class="question question-10 hide">
                  <p class="behaviour">Am I happy for this to exist somewhere in cyberspace forever as a representation of who I am?</p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="true">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#steps" class="btn next btn-next-10">Next</a>
                  </div>
              </div>

              <div class="question question-11 hide">
                  <p class="behaviour">Have I done my best to remove <span class="tooltip"><span class="tooltiptext tooltiptext-ambiguity">The quality of being open to more than one interpretation; inexactness.</span>ambiguity</span>?</p>
                  <ul>
                    <li><a href="#" data-value="false">Respect</a></li>
                    <li><a href="#" data-value="false">Transparency</a></li>
                    <li><a href="#" data-value="true">Authenticity</a></li>
                  </ul>
                  <div class="feedback hide">
                    <a href="#general-guidelines" class="btn next btn-next-11">Next</a>
                  </div>
              </div>


            </div><!--end of task-->
          </div>

        <div class="holder"  >

            <section  style="padding-top: 0;" class="hide" id="general-guidelines">
                <h2 data-aos="fade-right" data-aos-delay="300"><span>General</span></h2>
                <h2 data-aos="fade-right" data-aos-delay="400">Guidelines</h2>
                <ul class="general-guidelines">
                  <li data-aos="fade-right" data-aos-delay="500" style="position: relative; z-index:3;">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-5.svg" alt=""/>
                    <p>Do not do anything illegal, <span class="tooltip"><span class="tooltiptext tooltiptext-libellous">Containing or constituting a published false statement that is damaging to a person's reputation; a written defamation.</span>libellous</span>, <span class="tooltip"><span class="tooltiptext">A false and malicious statement.</span> slanderous</span> or dangerous.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="600" style="position: relative; z-index:1;">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-4.svg" alt=""/>
                    <p>Do not pretend to be anyone other than yourself.</p>
                  </li>


                  <li data-aos="fade-right" data-aos-delay="700">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-12.svg" alt=""/>
                    <p>Do not threaten anyone.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="800">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-13.svg" alt=""/>
                    <p>Do not be rude to anyone.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="900">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-10.svg" alt=""/>
                    <p>Only ever be honest - dishonesty can have serious personal and professional consequences.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1000">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-7.svg" alt=""/>
                    <p>Think before you post – re-read and make sure you only publish something when you are thinking clearly.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1100">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-6.svg" alt=""/>
                    <p>Try to avoid being reactive or allowing your emotions to take over. Just because you are behind a screen, you are still <b>you</b>, so it's important you never do or say anything you might ever be ashamed of.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1200">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-14.svg" alt=""/>
                    <p>Avoid doing or saying anything that anyone could ever construe as bullying behaviour.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1300">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-15.svg" alt=""/>
                    <p>Remember what you say and do can be seen publicly and indeed saved by anyone who sees it. This means it can be shared again and again until the end of time.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1400">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-1.svg" alt=""/>
                    <p>If you’re posting photographs of other people, you should ask permission before tagging them.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1500">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-2.svg" alt=""/>
                    <p>Before you post, tweet, or share anything, think about how others might interpret it - are you sure you have phrased what you have written as clearly and effectively as possible?</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1600">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-3.svg" alt=""/>
                    <p>Use humour carefully – you might upset someone so think through the consequences.</p>
                  </li>

                  <li data-aos="fade-right" data-aos-delay="1700">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-8.svg" alt=""/>
                    <p>Avoid oversharing – it is potentially dangerous to share your daily routine or, for example,  holiday plans publically.</p>
                  </li>
                  <li data-aos="fade-right" data-aos-delay="1800">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-9.svg" alt=""/>
                    <p>These days it's common for employers and educational institutions to look at candidates' social media activity so be sure that anything you do on social media is a credit to you and reflects well how you want the world to know you.</p>
                  </li>

                  <li data-aos="fade-right" data-aos-delay="1900">
                    <img src="/badge-assets/{{$url['slug']}}/_global/img/general-rules-11.svg" alt=""/>
                    <p>Look after yourself - if your judgement might be impaired in any way – lack of sleep, jet lag, or for any other reason – you’re more likely to share, tweet or post something you might regret.</p>
                  </li>

                </ul>
                <a data-aos="fade-right" data-aos-delay="2000" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue </a>
            </section>

        </div>
      </div>
    </div>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-2.js"></script>
@endsection
