<!doctype html>
<html class="no-js" lang="en">
    <head>
       
       <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Teamwork</title>
        <meta name="description" content="">

        <link rel="stylesheet" href="/badge-assets/{{$url['slug']}}/_global/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet"> 
        <script>var badgeRoot = '/{{$url['slug']}}';</script>
       
        </head>

       <body @yield('body-attributes')>
       
        @include('vendor.digitalmarmalade.badges.teamwork.header', ['title' => 'Header'])
        
        @yield('page')
        
        <script>document.documentElement.className='js';</script>
        <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/jquery.staggered-entry.js"></script>
        <script src="/badges.js"></script>
        
        @yield('javascript')

    </body>
</html>