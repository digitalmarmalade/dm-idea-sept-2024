@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')    
 class="success"
@endsection


@section('page')

<main> 
 <div class="success-holder">   
<div class="page-header">

    <div class="progress">

    </div>

    <div class="page-header-triangles"></div>
</div><!--/page-header-->
    
    
    
<div class="holder">

<h1>Well done!</h1>
<p>You have successfully completed the GDPR badge.</p>
<p>You can download a handy guide to everything you’ve just learnt.</p>
<p><a href="/badge-assets/{{$url['slug']}}/downloads/GDPR.pdf" target="_blank" class="btn" style="background: #8F1ED8; color: #fff; text-transform: none; margin: 0 0 3rem;">
   DOWNLOAD THE iDEA GDPR GUIDE
</a></p>
    
    <p><a href="{{$links['submit']}}" class="btn" style="display: block;">Claim your points and go back to <b class="lowercase">i</b>DEA</a></p>

    
</div><!--/holder-->
  
  </div>


 



</main> 


@endsection


@section('javascript')

<script>
    oBadges.setSlugAndStep('{{$url['slug']}}', 8);
    oBadges.redirectIfPreviousStepNotCompleted(7, '{{$links['last']}}');
</script>




@endsection