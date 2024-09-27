@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
 
@endsection
        
@section('page')

  <main>

    <div class="homepage-banner">
   <ul id="scene" class="scene">
          <li class="layer" data-depth="0.05"><div class="moon"></div></li>
          <li class="layer" data-depth="0.1"><div class="cloud-1"></div></li>
          <li class="layer" data-depth="0.15"><div class="cloud-2"></div></li>
          <li class="layer" data-depth="0.125"><div class="cloud-3"></div></li>
          <li class="layer" data-depth="0.05"><div class="cloud-4"></div></li>
          <li class="layer" data-depth="0.1"><div class="cloud-5"></div></li>
          <li class="layer" data-depth="0.05"><div class="cloud-6"></div></li>
          <li class="layer" data-depth="0.1"><div class="cloud-7"></div></li>
          <li class="layer" data-depth="0.05"><div class="waves waves-6"></div></li>
          <li class="layer" data-depth="0.1"><div class="waves waves-5"></div></li>
          <li class="layer" data-depth="0.15"><div class="lighthouse"></div></li>
          <li class="layer" data-depth="0.2"><div class="waves waves-4"></div></li>
          <li class="layer" data-depth="0.25"><div class="waves waves-3"></div></li>
          <li class="layer" data-depth="0.25"><div class="shark"></div></li>
          <li class="layer" data-depth="0.3"><div class="waves waves-2"></div></li>
          <li class="layer" data-depth="0.35"><div class="waves waves-1"></div></li>
          
          <li class="layer" data-depth="0.35">
              <div class="badge-title">
                  <div class="badge-title__letter c swing-1"></div>
                  <div class="badge-title__letter o swing-2"></div>
                  <div class="badge-title__letter l swing-3"></div>
                  <div class="badge-title__letter l swing-4"></div>
                  <div class="badge-title__letter a swing-5"></div>
                  <div class="badge-title__letter b swing-1"></div>
                  <div class="badge-title__letter o swing-3"></div>
                  <div class="badge-title__letter r swing-2"></div>
                  <div class="badge-title__letter a swing-4"></div>
                  <div class="badge-title__letter t swing-5"></div>
                  <div class="badge-title__letter i swing-1"></div>
                  <div class="badge-title__letter o swing-2"></div>
                  <div class="badge-title__letter n swing-3"></div>
              </div>
          </li>
          
          <li class="layer" data-depth="0.35"><div class="mountain-1"></div></li>
          <li class="layer" data-depth="0.4"><div class="mountain-2"></div></li>
          
          <li class="layer" data-depth="0.45"><div class="tree tree-1"><div class="sway"></div></div></li>
          <li class="layer" data-depth="0.45"><div class="house"></div></li>
          <li class="layer" data-depth="0.5"><div class="hill-1 hill-1--extra"></div></li>
          <li class="layer" data-depth="0.5"><div class="hill-1"></div></li>
          <li class="layer" data-depth="0.55"><div class="tree tree-2"><div class="sway"></div></div></li>
          <li class="layer" data-depth="0.6"><div class="hill-2 hill-2--extra"></div></li>
          <li class="layer" data-depth="0.6"><div class="hill-2"></div></li>
          <li class="layer" data-depth="0.65"><div class="tree tree-3"><div class="sway"></div></div></li>
          <li class="layer" data-depth="0.7"><div class="hill-3 hill-3--extra"></div></li>
          <li class="layer" data-depth="0.7"><div class="hill-3"></div></li>
          <li class="layer" data-depth="0.75"><div class="tree tree-4"><div class="sway"></div></div></li>
          
          <li class="layer" data-depth="0.75"><div class="office-1"></div></li>
          <li class="layer" data-depth="0.75"><div class="office-3"></div></li>
          <li class="layer" data-depth="0.85"><div class="office-2"></div></li>

    </ul>
    </div>
    
    <a href="{{$links['next']}}" class="btn btn--primary btn--get-started">Get Started</a>
   
    </main> 

@endsection

@section('javascript')


@endsection