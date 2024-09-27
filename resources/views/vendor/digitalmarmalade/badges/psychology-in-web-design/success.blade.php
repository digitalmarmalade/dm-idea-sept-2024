@extends($url['viewDir'] . $url['slug'] . '.master')

@section('page')

    <main> 
    
          
  

    <div class="progress">
        <ol>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li class="current"></li>
        </ol>
    </div>
    
    
<div class="holder">


<div class="columns success-columns">
<div class="cloud-anim">

<img src="/badge-assets/{{$url['slug']}}/img/success/cloud.png" alt="" class="cloud" />
<img src="/badge-assets/{{$url['slug']}}/img/success/cloud.png" alt="" class="cloud2" />
<div class="engraving-image engraving-image--balloon">
        <img src="/badge-assets/{{$url['slug']}}/img/success/balloon.svg" alt="" />
</div>
    
    </div>
     

<div class="column success-column">
<h1>Applying these principles to your site</h1>
<p>So now you know the basics of psychology in web design. How do you incorporate these design strategies into your website?</p>
</div>
    

    
</div><!--/columns-->
  
  <div class="columns columns--text">

<div class="column">
<h2>Identify your target audience</h2>
<p>Knowing your target audience is a hugely important first step in designing a site that will appeal to them. If your visitors are internet veterans, they’re going to have a different set of priorities than someone who only goes online to look at videos of cats.</p>
<p>If you can identify this, then you can work out which psychological triggers will work for them.</p>
</div>
    
<div class="column">
<h2>Plan your site</h2>
<p>Make a list of everything that needs to be on your site.</p>
<p>Once you have this, create a map of your site that includes every page so that you can ensure that each page has only one focus.</p>
<h2 class="top-margin">Design your site</h2>
<p>Design your site with your target audience in mind. Choose fonts, colours and imagery that reinforce what you want to project about your site. </p>
</div>
    
</div><!--/columns-->
   

</div><!--holder-->

<div class="tint-section">

<div class="success-row" id="successRow">    
    <div class="holder holder--success">
        
        
        <div class="squares squares--success1"><span></span></div>
        <div class="squares squares--success2"><span></span></div>
        <div class="success-triangle"><span></span></div>
        <div class="barbell barbell--small"></div>
        
        
        <div class="page-summary" id="agree">
            <img src="/badge-assets/{{$url['slug']}}/img/thumbs-up.svg" alt="Correct" />
            <div class="page-summary__text">
            <p>Well done!</p>
            <p>You have completed the Psychology in Web Design badge.</p>
            <p><a href="{{$links['submit']}}" class="btn">Go back to <span class="lowercase">i</span>DEA and collect your points</a></p>
            
            </div>
        </div>
        
        
    </div>
    
    </div> 


</div>




 



</main>

    @endsection


    @section('javascript')

    <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 8);
    </script>

    @endsection
