@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')
  
<main class="start-page">   
    
<h1 class="start-page__title">Psychology in Web Design</h1>

<p class="start-page__cta"><a href="{{$links['next']}}" onclick="oBadges.stepCompleted();" class="btn">Get Started</a></p>
    
    <div class="start-page__triangle1"></div>
    <div class="start-page__triangle2"></div>
    <div class="start-page__triangle3"></div>
    <div class="start-page__circle"></div>
    <div class="lines lines--start1">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="lines lines--start2">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="lines lines--start3">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="lines lines--start4">
        <span></span>
        <span></span>
        <span></span>
    </div>
    
    <div class="squares squares--start1">
        <span></span>
    </div>
    <div class="squares squares--start2">
        <span></span>
    </div>
    
    <div class="barbell barbell--start1"></div>
    <div class="barbell barbell--start2"></div>
    <div class="barbell barbell--small barbell--start3"></div>
    <div class="barbell barbell--small barbell--start4"></div>
    <div class="barbell barbell--small barbell--start5"></div>
    <div class="barbell barbell--small barbell--start6"></div>
    <div class="barbell barbell--small barbell--start7"></div>
    
    <div class="fill-square fill-square--start1"></div>
    <div class="fill-square fill-square--start2"></div>
    <div class="fill-square fill-square--start3"></div>
    <div class="fill-square fill-square--start4"></div>
    
    <img src="/badge-assets/{{$url['slug']}}/img/start/brain.svg" alt="" class="start__brain" />

</main>  
  
@endsection
