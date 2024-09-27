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
        
        <p>Do you need to change your current choices from the settings below to improve your game?</p>

        <form class="build-game-form">
        
        <fieldset id="categoryNames">
            <legend>Content (Categories)</legend>

            <p>
                The categories vary in interest, attractiveness, complexity, and difficulty. You need to think carefully about your audience and which combination of categories will suit them best.
            </p>

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
            oBadges.setSlugAndStep('{{$url['slug']}}', 12);
            oBadges.redirectIfPreviousStepNotCompleted(11, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-12.js', 'min' => false))</script>

@endsection