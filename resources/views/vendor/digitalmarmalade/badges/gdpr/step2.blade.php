@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
class="step-2"
@endsection

@section('page')
 <main>

<div class="page-header">

    <div class="progress">
        <ol>
            <li></li>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>

    <img src="/badge-assets/{{$url['slug']}}/img/step-2/intro.svg" class="page-header-image" alt="" />
    <div class="page-header-triangles"></div>
</div><!--/page-header-->

<div class="holder intro-holder">
<h1>What is GDPR?</h1>
<p>GDPR stands for <strong>General Data Protection Regulation</strong>.  GDPR replaces the previous Data Protection Act. Like the previous Data Protection Act GDPR provides guidelines and regulations on how data is processed, used, stored or exchanged. It is about keeping people’s personal information safe. </p>
<p>GDPR applies to all the organisations that are registered in the EU or have an establishment or subsidiary in the EU.</p><p>It also applies to an organisation which sells goods or services to citizens of the EU and process or monitor the personal data of EU residents.</p>

</div>

<div class="subject-to-gdpr">
<h2 class="staggered">You are subject to GDPR if you have:</h2>

<ol class="staggered">
<li>Your company has a presence in any EU country</li>
<li>Your company processes, stores or transmits personal data (any data that can be used to identify an individual) belonging to EU residents even if you are based outside the EU.</li>
<li>Your company processes, stores or transmits personal data (any data that can be used to identify an individual) belonging to EU residents even if it is on behalf of another company. </li>
</ol>
</div>
<div class="top-slant-1"></div>
<div class="holder">


    <div class="text-two-cols staggered">
        <div class="text-col">
            <p>GDPR dictates that there must be a chain of documentation to demonstrate accountability. These documents must be written in plain English and it is important that key people in your organisation are aware of it.</p>
            <p>GDPR impacts filing and storing information offline and online, as well as contacting people by email.</p>
        </div>
        <div class="top-tip">
            <h3>Top Tip</h3>
            <p>You must document your decision making process when deciding what data to capture and how it is relevant to your business.</p>
            <p>This should appear in your Privacy Policy.</p>
        </div>
    </div>

</div>

<div class="bottom-slant-2 bottom-slant-2--flipped"></div>

<div class="americas-row question-row question-row--first">


<div class="holder">

<p>Based on this information, can you tell if each of the organisations below is subject to GDPR regulation? </p>

    <div class="restart hide" id="restart">
        <p>Whoops - you got two wrong, you'll have to start again...</p>
    </div>

<div class="organisation-question">

<div class="company-info">

    <div class="company-image">
        <img src="/badge-assets/{{$url['slug']}}/img/step-2/big-office.png" alt="" />
    </div>

    <div class="company-info-section">
  <div class="company-info-block">
<h3>Company Type</h3>
<p>Banking and Finance</p>
        </div>
          <div class="company-info-block">
<h3>Employees</h3>
<p>1,000+</p>
        </div>
    </div>
    <div class="company-info-section">
          <div class="company-info-block">
<h3>Area of Operations</h3>
<p>North, Central and South America</p>
        </div>
    </div>
    <div class="company-info-section">
          <div class="company-info-block">
<h3>Description</h3>
<p>The company handles personal information from millions of clients. Some of this information is of a sensitive nature such as bank account and credit card details.</p>
        </div>
    </div>
</div>

<p>Is this company subject to GDPR?</p>
<ul class="question-options">
    <li><a href="#q1Answer" data-answer="true">Yes</a></li>
    <li><a href="#q1Answer" data-answer="false">No</a></li>
</ul>

<div id="q1Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">

        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>This company is subject to GDPR.</h3>
    <p>GDPR applies to EU citizens no matter where they reside. If there is a chance that the customer of the business are EU citizens, then the company must comply with GDPR.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmm. That's not right. This is considered personal data. If you get one more wrong you'll have to start again.</p>
  </div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2"></div>
</div>



<div class="uk-row question-row hide">


<div class="holder">


<div class="organisation-question">

<div class="company-info">

    <div class="company-image">
        <img src="/badge-assets/{{$url['slug']}}/img/step-2/small-office.png" alt="" />
    </div>

    <div class="company-info-section">
  <div class="company-info-block">
<h3>Company Type</h3>
<p>Media Agency</p>
        </div>
          <div class="company-info-block">
<h3>Employees</h3>
<p>50</p>
        </div>
    </div>
    <div class="company-info-section">
          <div class="company-info-block">
<h3>Area of Operations</h3>
<p>UK</p>
        </div>
    </div>
    <div class="company-info-section">
          <div class="company-info-block">
<h3>Description</h3>
<p>The company handles data from clients and contractors.</p>
        </div>
    </div>
</div>

<p>Is this company subject to GDPR?</p>
<ul class="question-options">
    <li><a href="#q2Answer" data-answer="true">Yes</a></li>
    <li><a href="#q2Answer" data-answer="false">No</a></li>
</ul>

<div id="q2Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>This company is subject to GDPR.</h3>
    <p>If your organisation operates in the EU or with EU residents and stores personal data from clients you are obliged to inform them why you need the data, how you will be using it and how long you intend to keep it for.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmm. That's not right. This is considered personal data. If you get one more wrong you'll have to start again.</p>
  </div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2 bottom-slant-2--flipped"></div>
</div>

    <div class="world-row question-row hide" >


<div class="holder">


<div class="organisation-question">

<div class="company-info">

    <div class="company-image">
        <img src="/badge-assets/{{$url['slug']}}/img/step-2/pharmacy.png" alt="" />
    </div>

    <div class="company-info-section">
  <div class="company-info-block">
<h3>Company Type</h3>
<p>Pharmaceutical</p>
        </div>
          <div class="company-info-block">
<h3>Employees</h3>
<p>3,000+</p>
        </div>
    </div>
    <div class="company-info-section">
          <div class="company-info-block">
<h3>Area of Operations</h3>
<p>Worldwide, including many countries in the EU</p>
        </div>
    </div>
    <div class="company-info-section">
          <div class="company-info-block">
<h3>Description</h3>
<p>Holds sensitive data of customers collected through clinical testing.</p>
        </div>
    </div>
</div>

<p>Is this company subject to GDPR?</p>
<ul class="question-options">
    <li><a href="#q3Answer" data-answer="true">Yes</a></li>
    <li><a href="#q3Answer" data-answer="false">No</a></li>
</ul>

<div id="q3Answer"></div>
<div class="question-answer question-answer--right correct hide">
    <div class="confirmation-tick">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
    </div>
    <h3>This company is subject to GDPR.</h3>
    <p>If your organisation operates in the EU or with EU residents and stores personal data from clients you are obliged to inform them why you need the data, how you will be using it and how long you intend to keep it for.</p>
</div>

<div class="question-answer question-answer--wrong wrong hide">
    <div class="failed">
    <svg><use xlink:href="#iconCross"></use></svg>
    </div>
    <p>Hmm. That's not right. This is considered personal data. If you get one more wrong you'll have to start again.</p>
</div>

</div>

</div><!--/holder-->

<div class="bottom-slant-2"></div>
</div>





<div class="success-row top-slant-1 hide" id="successRow">

<div class="confirmation-tick">
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"></circle><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"></path></svg>
</div>

<p>Well done!</p>


<p class="next-step-cta">
    <a onclick="oBadges.stepCompleted();" href="{{$links['next']}}" class="btn"><span class="btn__text">Next Step</span>
       <svg><use xlink:href="#iconRightArrow"></use></svg>
    </a>
</p>

</div>

</main>

@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 2);
    oBadges.redirectIfPreviousStepNotCompleted(1, '{{$links['last']}}');
</script>

<script src="/badge-assets/{{$url['slug']}}/js/jquery.paroller.min.js"></script>

<script>
    var correctQuiz = 0,
        wrongQuiz = 0;
        $(function () {
        $('.paroller').paroller();
        });


    $( ".organisation-question a" ).on( "click", function(e) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

        $('#restart').addClass('hide');
        $(this).addClass('selected');
        $(this).closest('.organisation-question').addClass('disabled');

        if($(this).data('answer')===true) {

            $(this).closest('.organisation-question').find('.correct').removeClass('hide');
            $(this).closest('.organisation-question').find('.wrong').addClass('hide');
            $(this).closest('.question-row').next('.question-row').removeClass('hide');

            correctQuiz++;

            scrollTo(target);
        } else {
            $(this).closest('.organisation-question').find('.wrong').removeClass('hide');
            wrongQuiz++;
            if(wrongQuiz === 2) {

                $('.question-row').addClass('hide')
                $('.organisation-question').removeClass('disabled');
                $('.organisation-question .selected').removeClass('selected');
                $('.organisation-question .wrong').addClass('hide');
                $('.organisation-question .correct').addClass('hide');
                $('.question-row--first').removeClass('hide');
                wrongQuiz = 0;
                correctQuiz = 0;
                $('#restart').removeClass('hide');
                location.href = "#restart";
                return false;

            } else {
                scrollTo(target);
                $(this).closest('.question-row').next('.question-row').removeClass('hide');
            }

        }
        if(correctQuiz + wrongQuiz === 3) {
            $('#successRow').removeClass('hide');
        }
    });

</script>

@endsection
