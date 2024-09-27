@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <div class="cols">
      <div class="col col-1-step-4">
        <p class="step">Step 4 - Safety</p>
        <div class="holder">
          <h1 data-aos="fade-right" data-aos-delay="100">Be Careful About What You Post</h1>
          <p data-aos="fade-right" data-aos-delay="200">Sharing too much personal information on your social media channels is not wise – if you have not yet tried the <b>iDEA Safe Online badge</b> it is well worth doing to learn more about how crooks can use information you share for criminal intent.</p>
          <p data-aos="fade-right" data-aos-delay="300">You can control who can see what on a social network; some posts may be for everybody, others for friends, and still others for only very good friends or members of your family.</p>

        </div>
        <img src="/badge-assets/{{$url['slug']}}/_global/img/safety.svg" alt=""/>
      </div>
      <div class="col">
        <div class="holder">
          <div id="task" class="task task-danger">
            <p data-aos="fade-right" data-aos-delay="300">Can you identify the dangers of using Social Media at a personal level? From the options below, click on <b>all the situations</b> you believe denote some risk:</p>

            <ul>
              <li data-aos="fade-in" data-aos-delay="400"><a href="#" data-value="true">Sharing your holiday pictures while you are on holiday</a></li>
              <li data-aos="fade-in" data-aos-delay="500"><a href="#" >Sharing pictures of something you have cooked</a></li>
              <li data-aos="fade-in" data-aos-delay="600" ><a href="#" data-value="true">Sharing your home address or telephone number</a></li>
              <li data-aos="fade-in" data-aos-delay="700"><a href="#">Sharing pictures of your pet</a></li>
            </ul>
            <a data-aos="fade-right" class="btn btn-check" href="#" data-value="4">Check</a>
            <div class="feedback feedback-negative hide">
              <div class="feedback-wrapper">
                <img src="/badge-assets/{{$url['slug']}}/_global/img/incorrect.svg" alt=""/>
                <p>Always remember to think very carefully before you post anything on social media. If you share publicly that you are away from home, what might the implications be if someone had criminal intentions towards you? If you give out your phone number, what might happen? Stop and think before you share anything.</p>
              </div>
              <a class="btn btn-try-again" href="#task" data-value="4">Try again</a>
            </div>
            <div class="feedback feedback-positive hide">
              <p class="well-done">Well done!</p>
              <p>Always remember to think very carefully before you post anything on social media. If you share publicly that you are away from home, what might the implications be if anyone had criminal intent towards you? If you give out your phone number, what might happen? Stop and think before you share anything.</p>
            </div>
          </div>
            <section id="staying-safe" class="hide">
              <h2 data-aos="fade-right" data-aos-delay="400"><span class="small" data-aos="fade-right" data-aos-delay="200">11 Top Tips To</span></h2>
              <h2 data-aos="fade-right" data-aos-delay="500">Staying Safe</h2>
              <h2><span class="small" data-aos="fade-right" data-aos-delay="400">On Social Media</span></h2>
              <ul class="staying-safe">
                <li data-aos="fade-right" data-aos-delay="600">
                  <span>1</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-1.svg" alt=""/>
                  <p>Make sure you set a strong, secure password.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="700">
                  <span>2</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-4.svg" alt=""/>
                  <p>If you use social media apps on any mobile devices, make sure you set a passcode to protect your device. If you don't know how to do this, use a search engine to find out how. You can do this by using search terms such as "password protect" and entering the information about your device type and model.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="800">
                <span>3</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-3.svg" alt=""/>
                  <p>Don't feel you have to accept all 'friend' requests. Be selective. If you don’t know the person, don’t accept their request - it could be a fake account, or it could be someone who means to cause you harm.</p>
                </li>


                <li data-aos="fade-right" data-aos-delay="900">
                <span>4</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-10.svg" alt=""/>
                  <p>Try to avoid publishing any personal information about yourself such as your date of birth, where you live, or your phone number. You should consider this on your profile as well as in your posts.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="1000">
                <span>5</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-7.svg" alt=""/>
                  <p>Learn about the privacy policies of the social media channels you use and set the privacy settings to control who can see what.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="1100">
                <span>6</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-6.svg" alt=""/>
                  <p>Think before you post. If you wouldn’t say it or do it in public, don’t post it online. If you think it's something you would not like someone saying to you, don't post it online. If you think it might be breaking any laws or causing harm to anyone, including yourself, don't post it online.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="1200">
                  <span>7</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-2.svg" alt=""/>
                  <p>Try to avoid using your social media accounts in "public hotspots". Most social networking sites don’t have a secure login (you can tell if they do because there will be the letters "https" at the start of the link to the site). If you use a public hotspot, your username and password could be stolen by criminals who use these to steal data which is not secure.</p>
                </li>


                <li data-aos="fade-right" data-aos-delay="1300">
                <span>8</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-5.svg" alt=""/>
                  <p>Be very careful about what you click. Hackers will often post links in comments to try and trick you into clicking them – they can then cause you lots of problems. Only click when you see trusted sources.</p>
                </li>


                <li data-aos="fade-right" data-aos-delay="1400">
                <span>9</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-8.svg" alt=""/>
                  <p>It is a good idea if possible to protect your device by installing antivirus software. This is a specialist way of ensuring you are as secure as possible.</p>
                </li>
                <li data-aos="fade-right" data-aos-delay="1500">
                <span>10</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-11.svg" alt=""/>
                  <p>Always ensure that your browser, operating system, and software are up to date. If you need to uninstall and reinstall browsers then that is better than using an outdated version.</p>
                </li>

                <li data-aos="fade-right" data-aos-delay="1600">
                <span>11</span>
                  <img src="/badge-assets/{{$url['slug']}}/_global/img/staying-safe-9.svg" alt=""/>
                  <p>Be careful of third-party apps. Games, quizzes and polls are often used across social networking websites, but by signing up to these you may be giving the companies who run them permission to access your information or profile. You can use the privacy settings of your social networking website to avoid this.</p>
                </li>


              </ul>
              <a data-aos="fade-right" data-aos-delay="1700" onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue </a>
          </section>
        </div>
      </div>
    </div>

@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-4.js"></script>

@endsection
