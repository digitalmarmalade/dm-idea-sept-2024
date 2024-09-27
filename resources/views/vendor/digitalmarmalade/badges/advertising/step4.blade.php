@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

<header class="step-lockup">
    <a target="_blank" href="https://idea.org.uk/">
     <img src="/badge-assets/promotions/_global/img/idea-logo.svg" alt="iDEA Inspiring Digital Enterprise Awards"/>
   </a>
   <p>Advertising Badge - Section 4 of 6</p>
</header>

<main>

    <div class="holder">
    <h1>Benefits & limitations of online advertising</h1>

    <p>Online advertising will eventually become the most dominant form of advertising. What are the benefits and limitations of this type of advertising? Can you guess which is which?</p>

    </div><!--/holder-->

    <div class="hero-image">
    <img src="/badge-assets/promotions/_global/img/step4-hero.png" alt="" />
    </div>

    <div class="holder">

    <div class="quiz jsQuiz">
        <div class="quiz-intro staggered-entry">
            <h2>Select the three benefits of online advertising from the list below</h2>
        </div>

        <ul class="quiz-benefit-list jsOptionsList staggered-entry">
            <li><a href="#" data-answer="true">Lower risk</a></li>
            <li><a href="#" data-answer="false">Security and privacy concerns</a></li>
            <li><a href="#" data-answer="false">Fraud on the advertiser</a></li>
            <li><a href="#" data-answer="false">Banner blindness</a></li>
            <li><a href="#" data-answer="true">Richer content</a></li>
            <li><a href="#" data-answer="false">Ad blocking</a></li>
            <li><a href="#" data-answer="false">Technological variations</a></li>
            <li><a href="#" data-answer="false">Spam</a></li>
            <li><a href="#" data-answer="false">Anti-targeting technologies</a></li>
            <li><a href="#" data-answer="true">Actions tracking</a></li>
        </ul>

        <div class="quiz-intro jsOutcome hide">
            <p>You got <span class="jsCorrect">0</span> out of 3. Try selecting different ones.</p>
        </div>

        </div>

        <a href="#correct" id="gotocorrect"></a>


    </div><!--/holder-->

    <a class="btn btn--home jsCheck" href="#">Check your answers</a>

    <div class="holder jsCorrectContent hide" id="correct">

    <div class="quiz-answer">

        <div class="medium-correct-message">
        <img src="/badge-assets/promotions/_global/img/correct-tick.png" alt="" />
        <p>Correct!</p>
        </div>



    </div>

    <div class="pros-cons pros-cons--full-width">


            <div class="pro-or-con pro-or-con--con staggered-entry">
                <h3 class="pro-or-con-heading"><img src="/badge-assets/promotions/_global/img/con-cross.png" alt="" /> Disadvantages</h3>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/fraud.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Fraud on the advertiser</h4>
                <p>There are numerous ways that advertisers can be overcharged for their advertising. For example, click fraud occurs when a publisher or third parties click (manually or through automated means) on a Cost-Per- Click(CPC) or Pay-Per-Click(PPC) ad with no legitimate buying intent. For example, click fraud can occur when a competitor clicks on ads to deplete its rival's advertising budget, or when publishers attempt to manufacture revenue.</p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/ad-blocking.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Ad blocking</h4>
                <p>The ads do not appear to the user because the user implements technology to screen out ads. Many browsers block unsolicited pop-up ads by default. Other software programs or browser add-ons may also block the loading of ads, or block elements on a page with behaviors characteristic of ads (e.g. HTML autoplay of both audio and video). </p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/ant-targeting.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Anti-targeting technology</h4>
                <p>Some web browsers offer privacy modes where users can hide information about themselves from publishers and advertisers. Among other consequences, advertisers can't use cookies to serve targeted ads to private browsers. Most major browsers have incorporated ‘Do Not Track’ options into their browser headers. </p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/banner-blindness.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Banner blindness</h4>
                <p>Eye-tracking studies have shown that Internet users often ignore web page zones likely to contain display ads (sometimes called "banner blindness"), and this problem is worse online than in offline media. On the other hand, studies suggest that even those ads "ignored" by the users may influence the user subconsciously. </p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/variations.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Technological variations</h4>
                <p>Because users have different operating systems, web browsers and computer hardware (including mobile devices and different screen sizes), online ads may appear to users differently from how the advertiser intended, or the ads may not display properly at all. </p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/spam.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Spam</h4>
                <p>The Internet's low cost of disseminating advertising contributes to spam, especially by large-scale spammers. Scammers can take advantage of consumers' difficulties verifying an online persona's identity, leading to artifices like phishing (where scam emails look identical to those from a well-known brand owner) and other scams.</p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--con pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/privacy.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Security and privacy concerns</h4>
                <p>Many consumers have reservations about online behavioral targeting. By tracking users' online activities, advertisers are able to understand consumers quite well. Advertisers often use technology, such as web bugs and respawning cookies, to maximizing their abilities to track consumers.</p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--pro staggered-entry">
                <h3 class="pro-or-con-heading"><img src="/badge-assets/promotions/_global/img/pro-tick.png" alt="" /> Advantanges</h3>
            </div>

            <div class="pro-or-con pro-or-con--pro pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/lower-risk.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Lower risk</h4>
                <p>One of the reasons for this medium's growth is that advertising can be lower risk and more scalable for companies as they can pay based on results and adjust their advertising as they grow. It's not all beneficial though so let's look at how online advertising works in practice and what this means for the advertiser and the audience. </p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--pro pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/richer-content.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Richer content</h4>
                <p>Another key reason for the growth in online advertising is the richer information it can provide. Search engine marketing tracks what people search for and their social media interactions. Advertisers can therefore understand customers' interests and tailor their adverts accordingly. There are also broader benefits for companies from understanding their customers including making their business more efficient and effective. For example, changing  stock levels based on what's popular.</p>
                </div>
            </div>

            <div class="pro-or-con pro-or-con--pro pro-or-con--detailed staggered-entry">

               <div class="pro-or-con--detailed__image">
               <img src="/badge-assets/promotions/_global/img/online-advertising/actions-tracking.png" alt="" />
                </div>
               <div class="pro-or-con--detailed__text">
                <h4>Actions tracking</h4>
                <p>The main reason for its popularity is its ability to encourage and track actions – online advertising is better targeted than television for example, but how does this type of targeting work? In the next section, you will learn more about actions tracking.</p>
                </div>
            </div>

        </div>





    </div><!--/holder-->

    <a class="btn btn--home jsNextStep hide" href="{{$links['next']}}">Learn more about actions tracking</a>

</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 4);
    oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');
</script>

<script>
    var currentQuestion = 1;

$( ".jsOptionsList a" ).click(function() {
    $(this).toggleClass('selected');
    if($(this).hasClass('selected-wrong')) {
        $(this).removeClass('selected-wrong');
    }
    if($(this).hasClass('selected-right')) {
        $(this).removeClass('selected-right');
    }
    $('.jsOutcome').addClass('hide');
    return false;
});

$( ".jsCheck" ).click(function() {
    var rightAnswers = 0;
    $('.jsOptionsList a.selected').each(function( index ) {
        var rightOrWrong = $(this).data('answer');
        if(rightOrWrong === true) {
            rightAnswers++;
            $(this).addClass('selected-right');
        } else {
            $(this).addClass('selected-wrong');
        }



    });

    if(rightAnswers === 3) {
        $('.jsCorrectContent').removeClass('hide');
        $('.jsNextStep').removeClass('hide');
        $('.jsCheck').addClass('hide');
        $('#gotocorrect').click();
        oBadges.stepCompleted();
    } else {
        $('.jsCorrect').text(rightAnswers);
        $('.jsOutcome').removeClass('hide');
    }

    return false;
});
</script>


@endsection
