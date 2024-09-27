<section class="widget title-description">
	<h1>Title & Description</h1>
	<p class="standard">
	 <label>Title</label><input type="text" name="settings[{{ $item->getId() }}][title]" value="{{ $settings['title'] }}" />
	</p> 

	<p class="standard"> 
	 <label>Description</label><textarea name="settings[{{ $item->getId() }}][description]">{{ $settings['description'] }}</textarea>
	</p> 
</section>
