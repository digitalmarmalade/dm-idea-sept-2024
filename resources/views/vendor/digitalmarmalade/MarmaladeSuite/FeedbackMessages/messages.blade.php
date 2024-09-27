

@if (Session::has('success'))
	<div class="feedback-message positive"><p>{{ Session::get('success') }}</p><a href="#" class="close-feedback">Close</a></div>
@endif
@if (count($errors) > 0)
<div class="feedback-message negative">	
	@foreach ($errors->all() as $error)
		<p>{{ $error }}</p>
	@endforeach	
	<a href="#" class="close-feedback">Close</a>
</div>
@endif