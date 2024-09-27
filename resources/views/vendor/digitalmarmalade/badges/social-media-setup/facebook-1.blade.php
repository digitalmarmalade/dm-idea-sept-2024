@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
<nav>
  <ul>
    <li><span><a href="quiz" title="Go to Quiz"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-quiz.svg" alt="Go to Quiz"/></a></span><p>Take Quiz</p></li>
    <li><span><a href="/badge-assets/{{$url['slug']}}/_global/pdf/setup-guide-facebook.pdf" title="Download Set Up Guide"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-download.svg" alt="Go to Quiz" download/></a></span><p>Download Set Up Guide</p></li>
    <li><span><a href="intro" title="Go to Introduction"><img src="/badge-assets/{{$url['slug']}}/_global/img/icon-introduction.svg" alt="Go to Introduction"/></a></span><p>Go To Introduction</p></li>
  </ul>
</nav>

<main>
    <section class="section-1">
        <div class="section-title">
            <p>Facebook</p>
        </div>
        <div class="holder">
            <h1>Create An Account</h1>
            <p>To create a Facebook account go to:</p>
            <a data-aos="fade-in" class="btn btn-primary btn-lowercase" href="https://www.facebook.com/" target="_blank"><span>facebook.com</span></a>
            <div class="anatomy-wrapper">
                <div class="image-wrapper image-wrapper-facebook-account">
                    <ul class="figures hide-desktop">
                        <li data-aos="fade-in" data-aos-delay="100">1</li>
                        <li data-aos="fade-in" data-aos-delay="200">4</li>
                        <li data-aos="fade-in" data-aos-delay="300">2</li>
                        <li data-aos="fade-in" data-aos-delay="400">5</li>
                        <li data-aos="fade-in" data-aos-delay="500">3</li>
                    </ul>
                    <img data-aos="fade-up" class="hide-desktop border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-1.png" alt="Facebook - Create An Account screen"/></a>
                </div>
                <div class="description-wrapper description-wrapper-facebook-account">
                    <ul>
                        <li data-aos="fade-right" data-aos-delay="100"><p><span class="figure">1</span>The name you go by in everyday life</li>
                        <li data-aos="fade-right" data-aos-delay="300"><p><span class="figure">2</span>A password</li>
                        <li data-aos="fade-right" data-aos-delay="500"><p><span class="figure">3</span>Your gender</li>
                        <li data-aos="fade-left" data-aos-delay="200"><p><span class="figure">4</span>Your email or mobile number</li>
                        <li data-aos="fade-left" data-aos-delay="400"><p><span class="figure">5</span>Your date of birth <span class="note"><span>Note</span>You must be at least 13 years old to create a Facebook account</span></li>

                    </ul>
                </div>
                <img data-aos="fade-up" class="hide-mobile border" src="/badge-assets/{{$url['slug']}}/_global/img/facebook/facebook-1.png" alt="Facebook - Create An Account screen"/></a>
            </div>

            <div class="cols">
                <div class="col">
                    <p>Once you click the &ldquo;Create Account&rdquo; button, you will need to confirm your email address or mobile number to let Facebook know that they are sending your account information to the right place. Be sure to confirm your email address or mobile number as soon as possible because you may not be able to use your account until you've confirmed that your details are correct.</p>
                </div>
                <div class="col">
                    <p>To confirm your mobile number, enter the code you receive via text message (SMS) in the box that shows up when you log in.</p>
                    <p>To confirm your email address, click or tap the link in the email sent to you by Facebook when you created your account.</p>
                </div>
            </div>


        </div>

    </section>
    <section class="password-strength-test last-section only-section">
        <div class="holder">
            <h3>Creating a strong password</h3>
            <p>Type a password of your choice below to test its strength:</p>
            <input type="text" name="password">
            <input type="submit" value="Check Strength" class="btn-check-password">
            <div class="password-feedback">
                <div class="strength-bar"><span></span></div>
                <div class="strength-bar-legend">
                    <p><span>0</span>Level of strength<span class="two">4</span></p>
                </div>
                <p class="password-feedback-text">You scored <span class="one">0</span> out of <span class="two">4</span> on your password strength test.</p>
            </div>
        </div>
    </section>

    <section class="password-strength-boxes section-negative-margin">
        <div class="holder">
            <h4>What makes a password strong:</h4>
            <ul class="boxes">
                <li data-aos="fade-in" data-aos-delay="100"><p>When you create a new password, make sure that it's at least 6 characters long. Try to use a complex combination of numbers, letters and symbols.</p></li>
                <li data-aos="fade-in" data-aos-delay="200"><p>If you see a message letting you know the password you entered isn't strong enough, try mixing together uppercase and lowercase letters. You can also make the password more complex by making it longer with a phrase or series of words that you can easily remember, but no one else knows.</p></li>
                <li data-aos="fade-in" data-aos-delay="300"><p>Keep in mind that your Facebook password should also be different from the passwords you use to log into other accounts, like your email or bank account.</p></li>
            </ul>
        </div>
    </section>
    <section class="section-2 last-section only-section">
        <div class="holder">
            <h2>What's in a name? </h2>
            <p>Facebook is a community where everyone uses the name they go by in everyday life, this makes it easier to know who you're connecting with. The name you use on Facebook should also appear on an ID or document from Facebook's ID list. You can use a nickname as a first or middle name if it's a variation of your authentic name (like Bob, Rob or Robbie instead of Robert). Facebook also allows you to list another name on your account such as your maiden name, nickname, or professional name. When you create a Facebook profile it is for individual use only and isn't suitable for your business, organisation or idea - for this, you should create a &ldquo;Page&rdquo;.</p>
            <h4>Your name can’t include:</h4>
            <ul class="boxes">
                <li data-aos="fade-in" data-aos-delay="100"><p>Symbols, numbers, unusual capitalisation, repeating characters or punctuation</p></li>
                <li data-aos="fade-in" data-aos-delay="200"><p>Characters from multiple languages</p></li>
                <li data-aos="fade-in" data-aos-delay="300"><p>Titles of any kind (For example: professional, religious)</p></li>
                <li data-aos="fade-in" data-aos-delay="400"><p>Words or phrases in place of a name</p></li>
                <li data-aos="fade-in" data-aos-delay="500"><p>Offensive or suggestive words of any kind</p></li>
            </ul>
        </div>
        <a data-aos="fade-in" data-aos-delay="600" class="btn btn-primary" href="{{$links['next']}}" onclick="oBadges.stepCompleted();"><span>Continue</span></a>
        </div>
        </div>

    </section>

</main>


@endsection


@section('javascript')
<script> oBadges.setSlugAndStep('{{$url['slug']}}', {{$url['step']}});</script>
<script src="/badge-assets/{{$url['slug']}}/_global/js/step-3.js"></script>
@endsection
