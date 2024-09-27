@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('site_navigation')

	@parent

    <ul class="suite-quicklinks">
    	<li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
        <li><a href="{{ route('msuiteUsers') }}">All Users</a></li>
        <li class="right"><a href="{{ route('msuiteUsersCreateView') }}">Add an Admin User</a></li>
    </ul>
    
@stop

@section('main')
<!--
<hgroup class="page-heading">
	<h1 class="page-header">{{ $user->id ? 'Edit' : 'Create' }} User <a href="{{ route('msuiteUsers') }}">(Back to list)</a></h1>
        @if ($user->id)
        <form method="post" action="{{ route('msuiteUserDelete', ['userId' => $user->id]) }}">
            {!! csrf_field() !!}
            <button type="submit" class="btn-secondary btn-delete">Delete</button>
        </form>
        @endif
</hgroup>

@include('vendor.digitalmarmalade.MarmaladeSuite.FeedbackMessages.messages')

<form action="{{ $user->id ? route('msuiteUserUpdate', ['userId' => $user->id]) : route('msuiteUsersCreateAction') }}" method="post" class="main-form">
    {!! csrf_field() !!}
    
    <p class="standard">
        <label>Email: </label><input type="text" name="email" value="{{ old('email', $user->email) }}" />
    </p>
    
    <p class="standard">
        <label>Name: </label><input type="text" name="name" value="{{ old('name', $user->name) }}" />
    </p>
    
   
    
    <p class="standard">
        <label>{{ $user->id ? 'Reset Password' : 'Password' }}: </label><input type="password" name="reset_password" value="" />
    </p>
    
	<div class="action-buttons">		
		<button type="submit" value="Save" class="btn btn-save" ><span>{{ $user->id ? 'Save' : 'Create' }}</span></button>
	</div>     
    
    
</form>

-->


@include('vendor.digitalmarmalade.MarmaladeSuite.FeedbackMessages.messages')

<form action="{{ $user->id ? route('msuiteUserUpdate', ['userId' => $user->id]) : route('msuiteUsersCreateAction') }}" method="post" class="main-form">
    {!! csrf_field() !!}
    
<div class="panel form-panel">

<fieldset>

<legend class="title-legend">User<span class="colon @if (old('name') !== '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
@if (old('name') !== '')
    {{ old('name') }}
@endif</span></legend>
    
<p class="standard-form-input">
<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="js-panel-title-input" />
</p>

<p class="standard-form-input">
<label id="telephone">Telephone</label>
<input type="tel" name="telephone" id="telephone" value="{{ old('telephone', $user->telephone) }}" />
</p>

<p class="standard-form-input">
<label id="email">Email</label>
<input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" />
</p>

<p class="standard-form-input">
<label for="emailrepeat">Email Repeat</label>
<input type="email" name="emailrepeat" id="emailrepeat" value="{{ old('emailrepeat', $user->email) }}" />
</p>

<p class="standard-form-input">
<label for="reset_password">{{ $user->id ? 'Reset Password' : 'Password' }}: </label>
<input type="password" name="reset_password" id="reset_password" value="" />
</p>  

</fieldset>

</div>
    
    
<div class="action-buttons">

<p><button type="submit" value="Save" class="btn btn-primary btn--large" ><span>{{ $user->id ? 'Save' : 'Create' }}</span></button></p>

</div>  
    
    
</form>

@endsection