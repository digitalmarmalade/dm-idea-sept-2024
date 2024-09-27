@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection


@section('page')

 <main>

    <div class="homepage-banner">
   <ul id="scene" class="scene">
          <?php
          $star = 1; 
          while($star < 40) { ?>
          <li class="layer" data-depth="0.0<?php echo rand(1,9); ?>"><span class="star"></span></li>
          
          <?php
          $star++;
          }
          ?>
          <li class="layer" data-depth="0.1"><div class="saturn"></div></li>
          <li class="layer" data-depth="0.15"><div class="success-moon"></div></li>
          <li class="layer" data-depth="0.3"><div class="sputnik"></div></li>
          <li class="layer" data-depth="0.4"><div class="success-earth"></div></li>
          <li class="layer" data-depth="0.5"><div class="success-text planet">
        <p>You have successfully completed the Collaboration badge!</p>
        
        <div class="wrap">
     <div class="background"></div>
     <div class="clouds"></div>   
  </div>
  <div class="mask"></div>
        
    </div></li>
          <li class="layer" data-depth="0.6"><div class="rocket-holder"><div class="rocket-flame"></div><div class="rocket"></div></div></li>
          
          <li class="layer" data-depth="0.2">
              <div class="badge-title">
                  <div class="badge-title__letter w2 swing-1"></div>
                  <div class="badge-title__letter e2 swing-2"></div>
                  <div class="badge-title__letter l2 swing-3"></div>
                  <div class="badge-title__letter l2 swing-4"></div>
                  <div class="badge-title__letter d2 swing-5"></div>
                  <div class="badge-title__letter o2 swing-1"></div>
                  <div class="badge-title__letter n2 swing-3"></div>
                  <div class="badge-title__letter e2 swing-2"></div>
              </div>
          </li>
          


    </ul>
    </div>
    
    
    <a href="{{$links['submit']}}" class="btn btn--primary btn--get-started btn--claim">Claim your points and back to iDEA</a>

   
    </main>

@endsection


@section('javascript')

oBadges.setSlugAndStep('{{$url['slug']}}', 4);
oBadges.redirectIfPreviousStepNotCompleted(3, '{{$links['last']}}');

<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script>
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene);
</script>
<script>

$('.star').each(function( index ) {
var animationNumber = Math.floor(Math.random() * 10) + 1;
$(this).css('left',1 + Math.floor(Math.random() * 80)+10+'%').css('top',1 + Math.floor(Math.random() * 96)+2+'%').addClass('star-glitter-'+animationNumber);
});

</script>

@endsection
