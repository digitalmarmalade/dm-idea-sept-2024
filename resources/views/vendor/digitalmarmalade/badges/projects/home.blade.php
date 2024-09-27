@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection

@section('page')

  <header class="lockup">
      @include('vendor.digitalmarmalade.badges.projects.header', ['title' => 'Header'])
  </header>

    <main class="homepage">

      <section class="top ">
        <div class="holder">
          <p class="homepage-intro animated slideInDown">In this badge you will learn about some of the key techniques involved in</p>
          <h1 class="homepage-title animated slideInDown">Projects</h1>
          <ul>
            <li class="animated zoomIn">Scoping</li>
            <li class="animated zoomIn">Planning</li>
            <li class="animated zoomIn">Controlling</li>
          </ul>
        </div>
      </section>

      <section class="bottom">
        <div class="checkered-box">
          <div class="checkered"></div>
        </div>
        <div class="animation animation-homepage">
          <img class="car-1" src="/badge-assets/{{$url['slug']}}/_global/img/car-2.svg" />
          <img class="car-2" src="/badge-assets/{{$url['slug']}}/_global/img/car-1.svg" />
          <img class="car-3" src="/badge-assets/{{$url['slug']}}/_global/img/car-3.svg" />
          <div></div>
          <img class="car-4" src="/badge-assets/{{$url['slug']}}/_global/img/car-2.svg" />
          <img class="car-5" src="/badge-assets/{{$url['slug']}}/_global/img/car-3.svg" />
          <img class="car-6" src="/badge-assets/{{$url['slug']}}/_global/img/car-1.svg" />
        </div>
        <div class="checkered-box">
          <div class="checkered checkered-inverted"></div>
          <a href="{{$links['next']}}" class="btn">Start Badge</a>
        </div>
      </section>
    </main>
@endsection
