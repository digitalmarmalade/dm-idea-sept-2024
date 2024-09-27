<!doctype html>
<html class="no-js" lang="en" />
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Chatbots</title>
    <!-- Initial concept and learning design by Andy Jones -->

    <meta name="description" content="" />

    <link rel="stylesheet" type="text/css" href="/badge-assets/{{$url['slug']}}/_global/css/tooltipster.bundle.min.css" />
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css" />
    <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,900;1,400;1,900&display=swap" />

    <script>
      var badgeRoot = '/{{$url['slug']}}';
      @if(isset($url['step']))
      var badgeStep = {{$url['step']}};
      @endif
    </script>

  </head>
 <body @yield('body-attributes')>


    @yield('page')

  <script>document.documentElement.className='js';
    </script>
  <script
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous">
  </script>

<script>
    $('p').each(function(){
        let string = $(this).html();
        string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
        $(this).html(string);
    });

    $('li').each(function(){
      let string = $(this).html();
      string = string.replace(/ ([^ ]*)$/,'&nbsp;$1');
      $(this).html(string);
    });
  </script>

  <script type="text/javascript" src="/badge-assets/{{$url['slug']}}/_global/js/tooltipster.bundle.min.js"></script>

  <script src="/badges.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/plugins.js"></script>
  <script src="/badge-assets/{{$url['slug']}}/_global/js/main.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script
       src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
       integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
       crossorigin="anonymous">

  </script>
  <script>
  /*!
   * jQuery UI Touch Punch 0.2.3
   *
   * Copyright 2011–2014, Dave Furfero
   * Dual licensed under the MIT or GPL Version 2 licenses.
   *
   * Depends:
   *  jquery.ui.widget.js
   *  jquery.ui.mouse.js
   */
  !function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
  </script>


  <script>
      AOS.init({once: true});
  </script>

  @yield('javascript')

  </body>
</html>
