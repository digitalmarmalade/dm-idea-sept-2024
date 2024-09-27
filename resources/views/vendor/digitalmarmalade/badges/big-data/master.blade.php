<!doctype html>
<html class="no-js" lang="en">
    <head>

       <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Big Data</title>
        <meta name="description" content="">

        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css">
        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/animate.min.css">
        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/slick.css">
        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/slick-theme.css">
        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/aos.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,600" rel="stylesheet">
        <script>var badgeRoot = '/{{$url['slug']}}';</script>

        <!-- Hotjar Tracking Code for https://dm2.idea.org.uk/big-data -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1569559,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        </head>

       <body @yield('body-attributes')>


         @yield('page')

         <script>document.documentElement.className = 'js';</script>
         <script
             src="https://code.jquery.com/jquery-2.2.4.min.js"
             integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
         crossorigin="anonymous"></script>
 		    <script src="/badges.js"></script>
         <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
         <script src="/badge-assets/{{$url['slug']}}/_global/js/plugins.js"></script>
         <script src="/badge-assets/{{$url['slug']}}/_global/js/aos.js"></script>

         <script>
             AOS.init();
         </script>
             @section('javascript')

             @show
      </body>
    </html>
