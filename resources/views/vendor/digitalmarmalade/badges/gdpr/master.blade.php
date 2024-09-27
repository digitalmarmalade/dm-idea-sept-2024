<!doctype html>
<html class="no-js" lang="en">
    <head>

       <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width">
        <link href="/badge-assets/{{$url['slug']}}/css/main.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

        <title>An introduction to GDPR</title>
        <meta name="description" content="">

        <script>var badgeRoot = '/{{$url['slug']}}';</script>

        <!-- Hotjar Tracking Code for https://dm2.idea.org.uk/gdpr -->
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:1569346,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        </head>

       <body @yield('body-attributes')>

       <svg style="display: none">

<symbol id="iconCross" viewBox="0 0 15.642 15.642">
<path fill-rule="evenodd" d="M8.882 7.821l6.541-6.541A.75.75 0 1 0 14.362.219L7.821 6.76 1.28.22A.75.75 0 1 0 .219 1.281L6.76 7.822l-6.54 6.54a.75.75 0 0 0 1.06 1.061l6.541-6.541 6.541 6.541a.75.75 0 1 0 1.06-1.061l-6.54-6.541z"/>
</symbol>

<symbol id="iconPlus" viewBox="0 0 401.994 401.994">
<path d="M394 154.175c-5.331-5.33-11.806-7.994-19.417-7.994H255.811V27.406c0-7.611-2.666-14.084-7.994-19.414C242.488 2.666 236.02 0 228.398 0h-54.812c-7.612 0-14.084 2.663-19.414 7.993-5.33 5.33-7.994 11.803-7.994 19.414v118.775H27.407c-7.611 0-14.084 2.664-19.414 7.994S0 165.973 0 173.589v54.819c0 7.618 2.662 14.086 7.992 19.411 5.33 5.332 11.803 7.994 19.414 7.994h118.771V374.59c0 7.611 2.664 14.089 7.994 19.417 5.33 5.325 11.802 7.987 19.414 7.987h54.816c7.617 0 14.086-2.662 19.417-7.987 5.332-5.331 7.994-11.806 7.994-19.417V255.813h118.77c7.618 0 14.089-2.662 19.417-7.994 5.329-5.325 7.994-11.793 7.994-19.411v-54.819c-.002-7.616-2.661-14.087-7.993-19.414z"/>
</symbol>

<symbol id="iconDownArrow" viewBox="0 0 284.929 284.929">
<path d="M282.082 76.511l-14.274-14.273c-1.902-1.906-4.093-2.856-6.57-2.856-2.471 0-4.661.95-6.563 2.856L142.466 174.441 30.262 62.241c-1.903-1.906-4.093-2.856-6.567-2.856-2.475 0-4.665.95-6.567 2.856L2.856 76.515C.95 78.417 0 80.607 0 83.082c0 2.473.953 4.663 2.856 6.565l133.043 133.046c1.902 1.903 4.093 2.854 6.567 2.854s4.661-.951 6.562-2.854L282.082 89.647c1.902-1.903 2.847-4.093 2.847-6.565 0-2.475-.945-4.665-2.847-6.571z"/>
</symbol>

<symbol id="iconUpArrow" viewBox="0 0 284.929 284.929">
<path d="M282.082 195.285L149.028 62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665.953-6.567 2.856L2.856 195.285C.95 197.191 0 199.378 0 201.853c0 2.474.953 4.664 2.856 6.566l14.272 14.271c1.903 1.903 4.093 2.854 6.567 2.854s4.664-.951 6.567-2.854l112.204-112.202 112.208 112.209c1.902 1.903 4.093 2.848 6.563 2.848 2.478 0 4.668-.951 6.57-2.848l14.274-14.277c1.902-1.902 2.847-4.093 2.847-6.566.001-2.476-.944-4.666-2.846-6.569z"/>
</symbol>

<symbol id="iconLeftArrow" viewBox="0 0 284.935 284.936">
<path d="M110.488 142.468L222.694 30.264c1.902-1.903 2.854-4.093 2.854-6.567s-.951-4.664-2.854-6.563L208.417 2.857C206.513.955 204.324 0 201.856 0c-2.475 0-4.664.955-6.567 2.857L62.24 135.9c-1.903 1.903-2.852 4.093-2.852 6.567 0 2.475.949 4.664 2.852 6.567l133.042 133.043c1.906 1.906 4.097 2.857 6.571 2.857 2.471 0 4.66-.951 6.563-2.857l14.277-14.267c1.902-1.903 2.851-4.094 2.851-6.57 0-2.472-.948-4.661-2.851-6.564L110.488 142.468z"/>
</symbol>

<symbol id="iconRightArrow" viewBox="0 0 284.935 284.936">
<path d="M222.701 135.9L89.652 2.857C87.748.955 85.557 0 83.084 0c-2.474 0-4.664.955-6.567 2.857L62.244 17.133c-1.906 1.903-2.855 4.089-2.855 6.567 0 2.478.949 4.664 2.855 6.567l112.204 112.204L62.244 254.677c-1.906 1.903-2.855 4.093-2.855 6.564 0 2.477.949 4.667 2.855 6.57l14.274 14.271c1.903 1.905 4.093 2.854 6.567 2.854 2.473 0 4.663-.951 6.567-2.854l133.042-133.044c1.902-1.902 2.854-4.093 2.854-6.567s-.945-4.664-2.847-6.571z"/>
</symbol>

</svg>

       <header class="lockup">
         <a href="https://idea.org.uk/" target="_blank">
          <img src="/badge-assets/{{$url['slug']}}/img/idea-logo.svg" alt="iDEA Inspiring Digital Enterprise Awards" />
        </a>
       </header>

        @yield('page')

        <script>document.documentElement.className='js';</script>
        <script
          src="https://code.jquery.com/jquery-3.3.1.min.js"
          integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>

        <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/js/staggered-entry.min.js"></script>
        <script src="/badges.js"></script>

        <script>
        $( window ).scroll(function() {
            if($(window).scrollTop() < 80) {
                $('body').removeClass('scrolled');
            } else {
                $('body').addClass('scrolled');
            }
        });
        </script>

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

        @yield('javascript')

    </body>
</html>
