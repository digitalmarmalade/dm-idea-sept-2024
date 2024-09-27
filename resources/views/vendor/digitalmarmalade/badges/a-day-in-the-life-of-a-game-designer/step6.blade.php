@extends($url['viewDir'] . $url['slug'] . '.master')
@section('page')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="holder page-content animsition">
        
        @include('vendor.digitalmarmalade.badges.a-day-in-the-life-of-a-game-designer.header', ['title' => 'Header'])
       
        <div class="row with-footer">
        <div class="question-column">
        
        <div class="progress-holder">
        
        <div class="progress-bar">
        <div class="progress-bar-fill" style="width: {{$progress['percentage']}}%;"></div>
        </div>
        
        </div>
        
        <h2 class="page-title">BUILDING THE GAME</h2>
        
        <form class="build-game-form">
        
        <fieldset id="categoryNames">
            <legend>Content (CATEGORIES)</legend>

            <p>The game will use three categories to populate the Total Swipeout quiz questions.  These can be linked, or completely random – it is up to you, but remember this will be key to whether your target audience enjoys the game or not. Try to keep the choices interesting and fun.</p>

            <p>There will be three rounds where you can use one or more of these categories – more on that later. </p>

            <p>Choose three categories you want in your game below.</p>


            <input type="hidden" name="category0Label" id="category0Label" data-json-item="grid labels 0" class="standard-form-control standard-form-control--full-width" value="item" />

            <p>
                <label for="category1Label">Category 1</label>
                <select name="category1Label" id="category1Label" data-json-item="grid labels 1" class="standard-form-control standard-form-control--full-width" required />
                    <option value="">Select a Category</options>
                    @foreach ($data['categories'] as $slug => $category)
                        <option value="{{$slug}}">{{ $category['name'] }}</options>
                    @endforeach
                </select>
            </p>

            <p>
                <label for="category2Label">Category 2</label>
                <select name="category2Label" id="category2Label" data-json-item="grid labels 2" class="standard-form-control standard-form-control--full-width" required />
                    <option value="">Select a Category</options>
                    @foreach ($data['categories'] as $slug => $category)
                        <option value="{{$slug}}">{{ $category['name'] }}</options>
                    @endforeach
                </select>
            </p>

            <p>
                <label for="category3Label">Category 3</label>
                <select name="category3Label" id="category3Label" data-json-item="grid labels 3" class="standard-form-control standard-form-control--full-width" required />
                    <option value="">Select a Category</options>
                    @foreach ($data['categories'] as $slug => $category)
                        <option value="{{$slug}}">{{ $category['name'] }}</options>
                    @endforeach
                </select>
            </p>
            
        </fieldset>
        
        </form>


        
        
        <!--/task-->
        
        <div class="lets-move-on" id="moveon">

        <p class="cta centre-cta"><a href="{{$links['next']}}" class="btn btn-primary animsition-link jsBtnNext">Continue</a></p>
        
        </div> <!--/lets-move-on-->
        
        
        </div>
        </div>
        </div><!--/holder-->
        
        
        
        <div class="small-screen">
            <div class="small-screen-message">
                <h2>Sorry</h2>
                <p>Your screen is too small to complete these tasks.</p>
                <p>Please try again when you have access to a larger screen.</p>
            </div>
        </div>

        @include('vendor.digitalmarmalade.badges._global.partials.javascript');
        <script src="/badge-assets/{{$url['slug']}}/_global/js/classie.js"></script>
        <script src="/badge-assets/{{$url['slug']}}/_global/js/selectFx.js"></script>
        <script>
            oBadges.localStorageName = '{{$localStorageKey}}';
            oBadges.setSlugAndStep('{{$url['slug']}}', 6);
            oBadges.redirectIfPreviousStepNotCompleted(5, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-6.js', 'min' => false))</script>

@endsection