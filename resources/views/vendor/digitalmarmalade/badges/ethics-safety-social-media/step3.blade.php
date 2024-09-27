@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

    <div class="cols">
      <div class="col col-1-step-3">
        <p class="step">Step 3 - Safety</p>
        <div class="holder">
          <h1 data-aos="fade-right" data-aos-delay="100">Protecting</br>Yourself</h1>
          <p data-aos="fade-right" data-aos-delay="200">When you use social media, it's like sharing with the world who you are, what you like, aspects of your lifestyle and the sorts of people and brands that appeal to you. Think of anything you do on social media like opening up a window in your home and allowing everyone who is interested to peek inside.</p>
          <p data-aos="fade-right" data-aos-delay="300">You can <span class="tooltip tooltip-fake-news"><span class="tooltiptext tooltiptext-mitigate">Make (something bad) less severe, serious, or painful.</span>mitigate</span> this a bit by using privacy settings wisely. You can also <span class="tooltip tooltip-fake-news"><span class="tooltiptext tooltiptext-mitigate">Make (something bad) less severe, serious, or painful.</span>mitigate</span> this by being very cautious and careful about information you share on social media, and ensuring anything sensitive that an identity thief might use to impersonate you is not in the public domain.</p>
        </div>
        <img  src="/badge-assets/{{$url['slug']}}/_global/img/step-3.svg" alt=""/>
      </div>
      <div class="col">
        <div class="holder">
          <div id="task-1">
          <h3 data-aos="fade-right" data-aos-delay="400">Protect</br> your account</h3>
          <p data-aos="fade-right" data-aos-delay="500">One of the most important tasks you <b>must</b> take seriously is ensuring you set strong, and different, passwords, on each of your social media accounts. By doing this, you effectively create a 'locking system' around your account making it hard for any thieves to 'pick the lock'. By enhancing your own security measures like this, and telling your friends and family to do the same, you can help everyone be safer online.</p>

          <div data-aos="fade-right" data-aos-delay="600" class="task task-password  task-password-1">
            <p>Do you know how to make a password strong? Type a password of your choice below to test its strength:</p>
            <input type="text" name="password">

            <div class="password-feedback password-feedback-1">
                <div class="strength-bar strength-bar-1"><span></span></div>
                <div class="strength-bar-legend strength-bar-legend-1">
                    <p><span>0</span>Level of strength<span class="two">4</span></p>
                </div>
                <input type="submit" value="Check Strength" class="btn btn-check-password-1">
                <p class="password-feedback-text password-feedback-text-1">You scored <span class="one">0</span> out of <span class="two">4</span> in your password strength test.</p>
                <a href="#strong-password" class="btn btn-continue-1 hide">Continue </a>
            </div>
          </div>
        </div>
          <section id="strong-password" class="hide" style="padding: 0;">

            <h2 data-aos="fade-right" data-aos-delay="100"><span class="small">What makes a</span>Password</h2>
            <h2 data-aos="fade-right" data-aos-delay="200">Strong?</h2>

            <ul class="list-with-titles" style="position:relative; z-index:3;">
              <li>
                <p data-aos="fade-right" data-aos-delay="300" class="title title-figure">1</p>
                <p data-aos="fade-right" data-aos-delay="400" class="description">Make sure that it's at least 6 characters long. Try to use a complex combination of numbers, letters and symbols. Make sure also that you are able to remember your password.</p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="500" class="title title-figure">2</p>
                <p data-aos="fade-right" data-aos-delay="600" class="description">If you see a message letting you know the password you entered isn't strong enough, try mixing together uppercase and lowercase letters, numbers and different symbols. You can also make the password more complex by making it longer with a phrase or series of words that you can easily remember, but no one else knows. An example of this might be <b>"Il0veLemonad3yum94!*"</b></p>
              </li>
              <li>
                <p data-aos="fade-right" data-aos-delay="700" class="title title-figure">3</p>
                <p data-aos="fade-right" data-aos-delay="800" class="description">Do not use the same password more than once. Ensure each of your Social Media accounts has a different password; and make sure each of those is different to other passwords you might use such as for your email account or online banking. If you use the same password, you make it so much easier for anyone <span class="tooltip tooltip-fake-news" ><span class="tooltiptext tooltiptext-hack">Gain unauthorized access to data in a system or computer.</span>to hack</span> or steal your identity.</p>
              </li>
            </ul>
            <p data-aos="fade-right" data-aos-delay="900" class="description" style="position:relative; z-index:2;">To be extra safe, a lot of sites offer some form of two-step authentication, which requires you to prove your identity using both a password and an external factor, such as a text sent to your smartphone. Social Media accounts represent a very personal aspect of your life so it would be advisable to take as many steps as possible to avoid anyone ever trying <span class="tooltip "><span class="tooltiptext tooltiptext-hack">Gain unauthorized access to data in a system or computer.</span>to hack</span> your accounts.</p>
            <div data-aos="fade-right" data-aos-delay="600" class="task task-password task-password-2">
              <p>Let's try to come up with a strong password again. Can you reach level 4 on the scale below? Make sure to follow the tips above!</p>
              <input type="text" name="password-2">

              <div id="password-feedback-2" class="password-feedback password-feedback-2">
                  <div class="strength-bar strength-bar-2"><span></span></div>
                  <div class="strength-bar-legend strength-bar-legend-2">
                      <p><span>0</span>Level of strength<span class="two">4</span></p>
                  </div>
                  <input type="submit" value="Check Strength" class="btn btn-check-password-2">
                  <div class="password-feedback-fail">
                    <p class="password-feedback-text password-feedback-text-2">You scored <span class="one">0</span> out of <span class="two">4</span> in your password strength test. Check the tips above if you get stuck!</p>
                    <a href="#password-feedback-2" class="btn btn-try-again-password">Try again</a>
                  </div>
                  <div class="password-feedback-success">
                    <p class="password-feedback-text password-feedback-text-2">Well done! You scored <span class="one">4</span> out of <span class="two">4</span> in your password strength test.</p>
                    <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn">Continue</a>
                  </div>
              </div>
            </div>

          </section>
          </div>
        </div>
      </div>
    </div>





@endsection
@section('javascript')
<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 3);
</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
@endsection
