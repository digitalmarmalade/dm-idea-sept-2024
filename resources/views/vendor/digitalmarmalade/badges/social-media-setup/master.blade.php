<!doctype html>
<html class="no-js" lang="en">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>How To Set Up on Social Media</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css">
  <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/animate.min.css">
  <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/aos.css">

  <!-- Hotjar Tracking Code for https://dm2.idea.org.uk/social-media-setup -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:1569382,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>

  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

       <body @yield('body-attributes') style="margin:0px;">

        @include('vendor.digitalmarmalade.badges.social-media-setup.header', ['title' => 'Header'])

        @yield('page')

        <script>document.documentElement.className = 'js';</script>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
		    <!-- <script src="/badges.js"></script> -->
        <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/plugins.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/aos.js"></script>
        <script src="/badges.js"></script>
        <script>
            AOS.init();
        </script>
            @section('javascript')

            @show
      </body>
    </html>
