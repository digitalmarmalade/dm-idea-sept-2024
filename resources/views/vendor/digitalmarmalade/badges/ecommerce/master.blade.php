<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Secret Life of eCommerce</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css">
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/t-scroll.min.css">



    <script>var badgeRoot = '/{{$url['slug']}}';</script>

    <!-- Hotjar Tracking Code for https://dm2.idea.org.uk/ecommerce -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1569376,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
  </head>
 <body @yield('body-attributes')>
    @yield('page')

  <script>document.documentElement.className='js';</script>
  <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous">
  </script>
  <script src="/badges.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/plugins.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/t-scroll.min.js"></script>
  @yield('javascript')

  </body>
</html>
