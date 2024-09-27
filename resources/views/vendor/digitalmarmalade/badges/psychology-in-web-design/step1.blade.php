@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

<main> 

    <div class="progress">
        <ol>
            <li class="current"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    
    
<div class="holder">
<h1>Psychology in Web Design</h1>

<div class="columns">

<div class="column">
<p>People form first impressions very quickly. Psychologists at Princeton in the USA suggest that first impressions about people are formed in one tenth (0.1) of a second.</p>
<p>The first impression of a website is formed even quicker than this, according to three studies conducted by the Human-Oriented Technology Lab at Carleton University, Ottawa, Canada, which suggested that users judge the visual appeal of a website in five hundredths (0.05) of a second.</p>
</div>
    
<div class="column">
    <div class="engraving-image engraving-image--clock">
        <img src="/badge-assets/{{$url['slug']}}/img/step-1/clock.svg" alt="" />
        <div class="triangle"></div>
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <div class="time-for-box">
            <p>There’s been time for 
                <span id="firstImpressions">0</span>
                first impressions of websites since you loaded this page
            </p>
        </div>
        
    </div>  
</div>
    
</div><!--/columns-->
    
</div><!--holder-->
    
<div class="holder">


<div class="columns columns--content-right">

    <div class="column">
        <div class="engraving-image engraving-image--eyeball">
            <img src="/badge-assets/{{$url['slug']}}/img/step-1/eyeball.svg" alt="" />
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="squares"></div>
            <div class="circle"></div>
        </div>
        
    </div>
<div class="column">
<p>The basic psychological principles of a website can have a significant impact on the first impression users form.</p>
<p>The initial decisions made when visiting a website are based on emotion and the subconscious. Users will make a judgement about your website before they read a word of text.</p>
</div>
    

    
</div><!--/columns-->
    
</div><!--holder-->
    
<div class="holder">

    <ul class="important-questions">
        <li class="centre">Is this a safe website?</li>
        <li class="left">What emotional effect do the colours have?</li>
        <li class="right">Does the website feel like it’s the right place?</li>
        <li class="centre">Are the choices available clear and appropriate?</li>
    </ul>

    <div class="standout-point">

        <p>All of these judgements are affected by the way in which you present your website.</p>

    </div>

</div><!--/holder-->
    
<div class="tint-section">
<div class="kraken-row"> 
    
    <img src="/badge-assets/{{$url['slug']}}/img/step-1/kraken.svg" alt="" class="kraken-image" />
        <div class="circle circle--white"></div>
        <div class="lines">
            <span></span>
            <span></span>
            <span></span>
        </div>
    
<div class="holder">


<div class="columns columns--with-kraken">

<div class="column">
<p>Studies, like the Stanford-Makovsy Web Credibility Study, have consistently found that, when deciding whether a website is trustworthy or not, visitors are influenced by the quality of its design. </p>
<p>Elements such as layout, consistency, typography, colour and style all affect how users perceive your website and what kind of image you project. Other factors that influence credibility are: the quality of the website’s content, amount of errors, rate of updates, ease of use and trustworthiness of authors.</p>
<p><strong>Click the screenshot of the safest looking website out of these two:</strong></p>
</div>

<div class="column"></div>

    

    

    
</div><!--/columns-->
    
</div><!--holder-->
        

    </div><!--/kraken-row-->
    
    <div class="holder">
        <div class="screenshot-quiz">
            <div class="screenshot">
               <img src="/badge-assets/{{$url['slug']}}/img/step-1/trustworthy1.jpg" alt="" />
                <a href="#agree"></a>
                <span class="screenshot__percentage" data-result="99">0%</span>
            </div>
            <div class="screenshot">
               <img src="/badge-assets/{{$url['slug']}}/img/step-1/trustworthy2.jpg" alt="" />
                <a href="#disagree"></a>
                <span class="screenshot__percentage" data-result="1">0%</span>
            </div>
        </div>
    </div>
    
<div class="success-row hide" id="successRow">    
    <div class="holder holder--success">
        
        
        <div class="squares squares--success1"><span></span></div>
        <div class="squares squares--success2"><span></span></div>
        <div class="success-triangle"><span></span></div>
        <div class="barbell barbell--small"></div>
        
        
        <div class="page-summary hide" id="agree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="page-summary__text">
            <p>You agree with the majority of people who think that this is the safest website. But what is it that makes this website give the impression of safety?</p>
                <p class="page-cta"><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Next Step</a></p>
            </div>
        </div>
        
        <div class="page-summary hide" id="disagree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-down.svg" alt="Incorrect" />
            <div class="page-summary__text">
            <p>Hmmm. You disagree with most people. Only <span id="answerPercent"></span>% think that this is the safest website. But what is it that makes the most selected website give the impression of safety?</p>
                <p class="page-cta"><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Next Step</a></p>
            </div>
        </div>
        
        
    </div>
    
    </div>    
    
    
    
</div><!--/tint-section-->

</main>

@endsection

@section('javascript')
 
 <script>
    var firstImpressions = 0;
    var commaNum = numberWithCommas(firstImpressions);
    
    function timeout() {
        setTimeout(function () {
            firstImpressions++;
            commaNum = numberWithCommas(firstImpressions);
            $('#firstImpressions').text(commaNum);
            timeout();
        }, 50);
    }
    timeout(); 
    
    function numberWithCommas(number) {
        var parts = number.toString().split(".");
        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        return parts.join(".");
    }
    
    $( ".screenshot a" ).on( "click", function(e) {
        $(this).closest('.screenshot').addClass('selected');
        var selectedAmount = $(this).closest('.screenshot').find('.screenshot__percentage').attr('data-result');
        $('.screenshot a').remove();
        
        $('#successRow').removeClass('hide');
        
        if(selectedAmount == 99) {
            $('#agree').removeClass('hide');
        } else {
            $('#disagree').removeClass('hide');
            $('#answerPercent').text(selectedAmount);
        }
        
        $('.screenshot__percentage').each(function() {
            var $this = $(this),
              countTo = $this.attr('data-result');
            
            $this.show();
            $({ countNum: $this.text()}).animate({
            countNum: countTo
            },

            {
            duration: 1000,
            easing:'linear',
            step: function() {
              $this.text(Math.floor(this.countNum)+'%');
            },
            complete: function() {
              $this.text(this.countNum + '%');
            }
        });  
        
        

    });
    
    
  
  

});
    
</script>
 
  <script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 1);
  </script>

@endsection