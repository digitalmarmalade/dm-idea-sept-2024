@extends('vendor.digitalmarmalade.master')

@section('content')

<head>
    @section('head')
    <title>{{ Config::get('msuite.app.name') }} {{ Config::get('msuite.app.version') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('vendor/digitalmarmalade/MarmaladeSuite/css/main.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/Knockout/knockoutjs/js/knockout-3.4.0.js') }}"></script>

    
    <script src="{{ asset('vendor/digitalmarmalade/MarmaladeSuite/js/plugins.js') }}"></script>
    <script src="{{ asset('vendor/digitalmarmalade/MarmaladeSuite/js/jquery.dmdatetimecombo.js') }}"></script>
    {{ inlineAsset('vendor/digitalmarmalade/MarmaladeSuite/js/main.js') }}
    @show
</head>


<body class="@if (Route::current()->getUri() == 'msuite/pages/{pageId}/edit') with-widgets @endif">
    
    @include('vendor.digitalmarmalade.MarmaladeSuite.FeedbackMessages.messages')

    <header class="suite-header">

        <p class="suite-title">
            <a href="{{ route('msuiteHome') }}" class="suite-title-link">
                <span class="glyph-icon flaticon-food" aria-hidden="true"></span> Marmalade Suite <span>Client Name</span>
            </a>
            <a href="#" target="_blank" class="btn-header">View Website</a><!-- route('home') -->
            @if (config('msuite.app.multilingual'))
            <span class="languages">
                <select class="js-language-switcher">
                    @foreach (LocaleManager::getAvailable() as $code => $locale)                
                    <option value="{{ $locale['route'] }}" @if (App::getLocale()==$code) selected @endif>{{ $code }}</option>
                    @endforeach
                </select>
            </span>
            @endif
        </p>

        @if (Auth::check())
        <div class="header-user-details">
            <p class="js-trigger-user-details"><span class="glyph-icon flaticon-profile" aria-hidden="true"></span> {{ Auth::user()->name }}</p>
        </div>
        @endif        
    </header>
    
    @if (Auth::check())
        <div class="user-details js-user-details">
            <ul>
                <li class="nav-logout"><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    @endif

    <!--NAVIGATION-->  

    <nav class="suite-nav">
        @section('site_navigation')


        <p class="menu-trigger-holder">
            <a href="#menu" class="menu-trigger" id="menuTrigger"><span class="menu-bar"></span><span class="visuallyhidden">Menu</span></a>
        </p>

        <div class="dropdown-nav clearfix" id="menu">
            <ul>
                <ul>
                    @foreach ($navigation->get() as $section)
                    <li class="{{ ($section->isActive() ? 'on' : '') }}"><a href="{{ $section->getUrl() }}">{{ $section->getName() }}</a>  </li>
                    @endforeach
                </ul>
            </ul>
        </div>

        @show

    </nav>
    <!--NAVIGATION ENDS-->

    <div class="main-content">
        @yield('main')
    </div>

    @section('bodyEnd')
    @show


    @section('overlays')
    <div id="overlayWrapper">
        
    </div>
    @show

    @section('_reservedBodyEnd')
    @include('vendor.digitalmarmalade.MarmaladeSuite.Overlay.setup')
    @show

    @section('javascript')
    @show


<!--    include('vendor.digitalmarmalade.MarmaladeSuite.Debug.debug')-->
</body>


@endsection
