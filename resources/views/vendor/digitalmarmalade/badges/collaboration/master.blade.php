<!doctype html>
<html class="no-js" lang="en">
    <head>
       
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Collaboration</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css">

        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet"> 
        <script>var badgeRoot = '/{{$url['slug']}}';</script>

        <!-- Hotjar Tracking Code for https://dm2.idea.org.uk/collaboration -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1569297,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
       
        </head>

       <body @yield('body-attributes')>
       
       <header class="lockup">
         <a target="_blank" href="http://www.idea.org.uk">
          <img src="/badge-assets/{{$url['slug']}}/_global/img/idea-logo.svg" class="lockup-badge-type" />
        </a>
       </header>  
              
        @yield('page')
        
        <script>document.documentElement.className='js';</script>
        <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/jquery.staggered-entry.js"></script>
        <script src="/badges.js"></script>
        
        @yield('javascript')
        
        <script>
      // Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
      </script>

    </body>
</html>