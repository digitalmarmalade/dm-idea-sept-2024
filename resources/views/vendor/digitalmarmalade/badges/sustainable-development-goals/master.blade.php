<!doctype html>
<html class="no-js @if(isset($url['step'])) step-item-{{$url['step']}} @endif" lang="en">
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sustainable Development Goals</title>
    <meta name="description" content="">

    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/animate.min.css">
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/slick.css">
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/slick-theme.css">
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/aos.css">
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i&display=swap" rel="stylesheet">

    <script>var badgeRoot = '/{{$url['slug']}}';</script>

    </head>

   <body @yield('body-attributes')>


     @yield('page')

     <script
         src="https://code.jquery.com/jquery-2.2.4.min.js"
         integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
     crossorigin="anonymous"></script>
		    <script src="/badges.js"></script>
     <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
     <script src="/badge-assets/{{$url['slug']}}/_global/js/plugins.js"></script>
     <script src="/badge-assets/{{$url['slug']}}/_global/js/aos.js"></script>

     <script>
        AOS.init({
           once: true
        });
     </script>
         @section('javascript')

         @show
  </body>
</html>
