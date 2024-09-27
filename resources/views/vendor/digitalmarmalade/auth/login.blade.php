@extends('vendor.digitalmarmalade.master')

@section('head')
@parent

<style>

</style>
@endsection

@section('content')


<head>
    @section('head')
    <title>{{ Config::get('msuite.app.name') }} {{ Config::get('msuite.app.version') }}</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('vendor/digitalmarmalade/MarmaladeSuite/css/main.css') }}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    
    {{ inlineAsset('vendor/digitalmarmalade/MarmaladeSuite/js/plugins.js') }}
    {{ inlineAsset('vendor/digitalmarmalade/MarmaladeSuite/js/jquery.dmdatetimecombo.js') }}
    {{ inlineAsset('vendor/digitalmarmalade/MarmaladeSuite/js/main.js') }}
    @show
</head>


<body class="@if (Route::current()->getUri() == 'msuite/pages/{pageId}/edit') with-widgets @endif">

    <header class="suite-header">

        <p class="suite-title">
            <a href="{{ route('msuiteHome') }}" class="suite-title-link">
                <span class="glyph-icon flaticon-food" aria-hidden="true"></span> Marmalade Suite <span>Client Name</span>
            </a>

        </p>

       
    </header>


<div class="container">
    <div class="wrapper">
			
			<div class="auth-background">
				<div class="login-panel panel">
					<h1 class="visuallyhidden">Login</h1>
					<form action="{{ route('login') }}" method="post" name="Login_Form" class="form-signin main-form login-form">
						{!! csrf_field() !!}<!--must be inside every form-->
						<p class="full-width-form-input">
							<label for="username">Email</label>
							<input type="text" class="form-control" name="email" placeholder="" required autofocus value="{{ old('email') }}" />
						</p>
                        

						<p class="full-width-form-input">
							<label for="usrpassword">Password</label>
							<input type="password" class="form-control" name="password" placeholder="" required />
						</p>				
						<!--<input type="checkbox" name="remember"> Remember Me-->
					
						<div class="login-actions action-buttons">
							<p><button type="submit" class="btn btn-primary" name="Submit" value="Login" type="Submit"><span>Login</span></button></p>
							<!--<p class="forgot-password"><a href=" route('forgotPassword') ">Forgotten password?</a></p>
                            route('forgotpassword not found')
                            -->
						</div>				
				   </form>					
				</div>
			</div>
			
     		
    </div>
</div>

</body>

@endsection


