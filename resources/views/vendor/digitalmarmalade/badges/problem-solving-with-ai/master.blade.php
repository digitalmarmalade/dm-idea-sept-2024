<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Problem solving with AI</title>
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="/badge-assets/{{$url['slug']}}/_global/css/tooltipster.bundle.min.css" />
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css?v=20200811-2">

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" >
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,900;1,400;1,900&display=swap" >

    <script>
      var badgeRoot = '/{{$url['slug']}}'; 
      @if(isset($url['step']))
      var badgeStep = {{$url['step']}};
      @endif
    </script>

  </head>
 <body @yield('body-attributes')>

   @include('vendor.digitalmarmalade.badges.what-is-ai.header', ['title' => 'Header'])

    @yield('page')

  <script>document.documentElement.className='js';</script>
  <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous">
  </script>
  <script src="/badges.js"></script>
  <script type="text/javascript" src="/badge-assets/{{$url['slug']}}/_global/js/tooltipster.bundle.min.js"></script>
  
  <script src="/badge-assets/{{$url['slug']}}/_global/js/plugins.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>

  <script src="/badge-assets/{{$url['slug']}}/_global/js/select-item.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/select-dropdown.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
      AOS.init({once: true});
  </script>

  @yield('javascript')

  </body>
</html>
