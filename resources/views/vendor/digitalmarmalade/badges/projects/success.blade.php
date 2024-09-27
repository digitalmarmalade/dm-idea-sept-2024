@extends($url['viewDir'] . $url['slug'] . '.master')

@section('body-attributes')
@endsection


@section('page')

  <header class="lockup">
    @include('vendor.digitalmarmalade.badges.projects.header', ['title' => 'Header'])
  </header>

    <main>

      <section class="top top-success">
        <div class="holder">
          <h1 class="animated slideInDown">Well done!</h1>
          <p class="intro animated slideInDown">In this badge you have learnt about some of the key techniques involved in projects, including:</p>

          <ul>
            <li class="animated zoomIn">Scoping</li>
            <li class="animated zoomIn">Planning</li>
            <li class="animated zoomIn">Controlling</li>
          </ul>
        </div>
      </section>

      <section class="bottom bottom-success">
        <div class="checkered-box">
          <div class="checkered"></div>
        </div>
        <div class="animation ">
          <img class="animated tada" src="/badge-assets/{{$url['slug']}}/_global/img/team-trophy.svg" />
        </div>
        <div class="checkered-box clear-both">
          <div class="checkered checkered-inverted"></div>
          <a href="{{$links['submit']}}" class="btn">Claim your points and go back to idea</a>
        </div>
      </section>
    </main>

    @endsection


    @section('javascript')

    <script>
        oBadges.setSlugAndStep('{{$url['slug']}}', 5);
        oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
    </script>

    @endsection
