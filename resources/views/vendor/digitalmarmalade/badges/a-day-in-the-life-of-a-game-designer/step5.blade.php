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
        
        <p>In order for you to build your game you will need to make a number of choices.</p>

        <div class="select-colours clearfix">
            
            <h3>APPEARANCE (GAME AESTHETICS)</h3>
            <p style="margin:0 10px 10px 10px;">Let’s start with a simple one – what is the colour scheme for the game? You will need to make this attractive to a range of players, using colours that don't make the game difficult to play, for example, try and avoid clashing colours, or colours that are too bright or too dark.</p>
            
            <p style="margin:0 10px;">
                This is your chance to make the game unique – so it looks how you want it to, while appealing to your target audience.
            </p>

            <div class="colour-select" id="csHolder1">
            
            <p>
            <label for="">Main Colour Background</label>
            <select class="cs-select cs-skin-boxes" id="csSelect1" data-json-item="branding main-bg">
                <option value="" disabled selected>Pick your colour</option>
                <option value="rgb(255,252,108)" data-class="color-fffc6c">#fffc6c</option>
                <option value="rgb(242,182,7)" data-class="color-f2b607">#f2b607</option>
                <option value="rgb(249,137,63)" data-class="color-f9893f">#f9893f</option>
                <option value="rgb(157,191,49)" data-class="color-9dbf31">#9dbf31</option>
                <option value="rgb(42,192,120)" data-class="color-9dbf31">#9dbf31</option>
                <option value="rgb(38,87,48)" data-class="color-265730">#265730</option>
                <option value="rgb(29,226,243)" data-class="color-1de2f3">#1de2f3</option>
                <option value="rgb(113,150,157)" data-class="color-71969d">#71969d</option>
                <option value="rgb(56,87,90)" data-class="color-38575a">#38575a</option>
                <option value="rgb(38,46,71)" data-class="color-262e47">#262e47</option>
                <option value="rgb(128,22,244)" data-class="color-8016f4">#8016f4</option>
                <option value="rgb(242,122,94)" data-class="color-f27a5e">#f27a5e</option>
                <option value="rgb(204,96,105)" data-class="color-cc6069">#cc6069</option>
                <option value="rgb(255,87,76)" data-class="color-ff574c">#ff574c</option>
                <option value="rgb(202,79,59)" data-class="color-ca4f3b">#ca4f3b</option>
                <option value="rgb(217,41,41)" data-class="color-d92929">#d92929</option>
                <option value="rgb(165,29,25)" data-class="color-a51d19">#a51d19</option>
                <option value="rgb(141,54,99)" data-class="color-8d3663">#8d3663</option>
                <option value="rgb(243,29,153)" data-class="color-f31d99">#f31d99</option>
                <option value="rgb(114,80,54)" data-class="color-725036">#725036</option>
            </select>
            </p>
            
            </div>
            
            <div class="colour-select" id="csHolder2">
            
            <p>
            <label for="">Main Colour Foreground</label>
            <select class="cs-select cs-skin-boxes" id="csSelect2" data-json-item="branding main-fg">
                <option value="" disabled selected>Pick your colour</option>
                <option value="rgb(255,255,255)" data-class="color-ffffff">#ffffff</option>
                <option value="rgb(227,204,253)" data-class="color-e3ccfd">#e3ccfd</option>
                <option value="rgb(205,249,252)" data-class="color-cdf9fc">#cdf9fc</option>
                <option value="rgb(208,241,225)" data-class="color-d0f1e1">#d0f1e1</option>
                <option value="rgb(244,220,222)" data-class="color-f4dcde">#f4dcde</option>
                <option value="rgb(252,205,233)" data-class="color-fccde9">#fccde9</option>
                <option value="rgb(254,229,213)" data-class="color-fee5d5">#fee5d5</option>
                <option value="rgb(243,216,212)" data-class="color-f3d8d4">#f3d8d4</option>
                <option value="rgb(224,232,233" data-class="color-e0e8e9">#e0e8e9</option>
                <option value="rgb(255,254,223)" data-class="color-fffedf">#fffedf</option>
                <option value="rgb(252,240,205)" data-class="color-fcf0cd">#fcf0cd</option>
                <option value="rgb(252,228,223)" data-class="color-fce4df">#fce4df</option>
                <option value="rgb(227,220,215)" data-class="color-e3dcd7">#e3dcd7</option>
                <option value="rgb(237,237,237)" data-class="color-ededed">#ededed</option>
                <option value="rgb(255,204,204)" data-class="color-ffcccc">#ffcccc</option>
                <option value="rgb(204,255,255)" data-class="color-ccffff">#ccffff</option>
                <option value="rgb(255,255,204)" data-class="color-ffffcc">#ffffcc</option>
                <option value="rgb(204,255,204)" data-class="color-ccffcc">#ccffcc</option>
                <option value="rgb(255,204,255)" data-class="color-ffccff">#ffccff</option>
                <option value="rgb(204,255,204)" data-class="color-ccffcc">#ccffcc</option>
            </select>
            </p>
            
            </div>
            
            <div class="colour-select" id="csHolder3">
            
            <p>
            <label for="">Accent Colour Background</label>
            <select class="cs-select cs-skin-boxes" id="csSelect3" data-json-item="branding accent-bg">
                <option value="" disabled selected>Pick your colour</option>
                <option value="rgb(255,255,255)" data-class="color-ffffff">#ffffff</option>
                <option value="rgb(227,204,253)" data-class="color-e3ccfd">#e3ccfd</option>
                <option value="rgb(205,249,252)" data-class="color-cdf9fc">#cdf9fc</option>
                <option value="rgb(208,241,225)" data-class="color-d0f1e1">#d0f1e1</option>
                <option value="rgb(244,220,222)" data-class="color-f4dcde">#f4dcde</option>
                <option value="rgb(252,205,233)" data-class="color-fccde9">#fccde9</option>
                <option value="rgb(254,229,213)" data-class="color-fee5d5">#fee5d5</option>
                <option value="rgb(243,216,212)" data-class="color-f3d8d4">#f3d8d4</option>
                <option value="rgb(224,232,233" data-class="color-e0e8e9">#e0e8e9</option>
                <option value="rgb(255,254,223)" data-class="color-fffedf">#fffedf</option>
                <option value="rgb(252,240,205)" data-class="color-fcf0cd">#fcf0cd</option>
                <option value="rgb(252,228,223)" data-class="color-fce4df">#fce4df</option>
                <option value="rgb(227,220,215)" data-class="color-e3dcd7">#e3dcd7</option>
                <option value="rgb(237,237,237)" data-class="color-ededed">#ededed</option>
                <option value="rgb(255,204,204)" data-class="color-ffcccc">#ffcccc</option>
                <option value="rgb(204,255,255)" data-class="color-ccffff">#ccffff</option>
                <option value="rgb(255,255,204)" data-class="color-ffffcc">#ffffcc</option>
                <option value="rgb(204,255,204)" data-class="color-ccffcc">#ccffcc</option>
                <option value="rgb(255,204,255)" data-class="color-ffccff">#ffccff</option>
                <option value="rgb(204,255,204)" data-class="color-ccffcc">#ccffcc</option>
            </select>
            </p>
            
            </div>
            
            <div class="colour-select" id="csHolder4">
            
            <p>
            <label for="">Accent Colour Foreground</label>
            <select class="cs-select cs-skin-boxes" id="csSelect4" data-json-item="branding accent-fg">
                <option value="" disabled selected>Pick your colour</option>
                <option value="rgb(255,252,108)" data-class="color-fffc6c">#fffc6c</option>
                <option value="rgb(242,182,7)" data-class="color-f2b607">#f2b607</option>
                <option value="rgb(249,137,63)" data-class="color-f9893f">#f9893f</option>
                <option value="rgb(157,191,49)" data-class="color-9dbf31">#9dbf31</option>
                <option value="rgb(42,192,120)" data-class="color-9dbf31">#9dbf31</option>
                <option value="rgb(38,87,48)" data-class="color-265730">#265730</option>
                <option value="rgb(29,226,243)" data-class="color-1de2f3">#1de2f3</option>
                <option value="rgb(113,150,157)" data-class="color-71969d">#71969d</option>
                <option value="rgb(56,87,90)" data-class="color-38575a">#38575a</option>
                <option value="rgb(38,46,71)" data-class="color-262e47">#262e47</option>
                <option value="rgb(128,22,244)" data-class="color-8016f4">#8016f4</option>
                <option value="rgb(242,122,94)" data-class="color-f27a5e">#f27a5e</option>
                <option value="rgb(204,96,105)" data-class="color-cc6069">#cc6069</option>
                <option value="rgb(255,87,76)" data-class="color-ff574c">#ff574c</option>
                <option value="rgb(202,79,59)" data-class="color-ca4f3b">#ca4f3b</option>
                <option value="rgb(217,41,41)" data-class="color-d92929">#d92929</option>
                <option value="rgb(165,29,25)" data-class="color-a51d19">#a51d19</option>
                <option value="rgb(141,54,99)" data-class="color-8d3663">#8d3663</option>
                <option value="rgb(243,29,153)" data-class="color-f31d99">#f31d99</option>
                <option value="rgb(114,80,54)" data-class="color-725036">#725036</option>
            </select>
            </p>
            
            </div>
            
        </div><!--/select-colours-->
        
        
        <!--/task-->
        
        <div class="lets-move-on visible" id="moveon">

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
            oBadges.setSlugAndStep('{{$url['slug']}}', 5);
            oBadges.redirectIfPreviousStepNotCompleted(4, '{{$links['last']}}');
        </script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/all.js', 'min' => false))</script>
        <script>@include('_inliner', array('file' => '/vendor/digitalmarmalade/badges/'.$url['slug'].'/js/step-5.js', 'min' => false))</script>

@endsection