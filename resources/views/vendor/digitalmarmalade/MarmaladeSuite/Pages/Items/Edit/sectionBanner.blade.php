<section class="widget section-banner">
	<h1>Section Banner</h1>

<div data-itemId="{{ $item->getId() }}">
	<p class="standard">
		<label>Title: </label>
		<input type="text" name="settings[{{ $item->getId() }}][title]" value="{{ $settings['title'] }}" />
	</p>
    <p class="standard">
		<label>Description: </label>    
		<textarea name="settings[{{ $item->getId() }}][description]">{{ $settings['description'] }}</textarea>
    </p>
	
    @if ($settings['bannerfilename'] !== null)
    <p class="standard">
		<label>Current File: {{ $settings['bannerfilename'] }}</label>
		<img src="{{ route('msuiteDownloadPageItemSetting', ['itemId' => $item->getId(), 'settingName' => 'bannerfilepath']) }}" alt="{{ $settings['banneralt'] }}" style="height: 200px" />	
	</p>
    @endif
	
	<p class="standard">
		<span class="input-file-container">
		<span class="label">No file selected.</span>
		<span class="file-name"></span>
		    <input type="file" name="settings[{{ $item->getId() }}][bannerfile]" />
		</span>
		<label>File</label>
    </p>
	
	<p class="standard">
		<label>Alt: </label><input type="text" name="settings[{{ $item->getId() }}][banneralt]" value="{{ $settings['banneralt'] }}" />
	</p>

	<fieldset class="checkbox-list">
		<h2>Include link</h2>
		<p>
			<input type="checkbox" name="settings[{{ $item->getId() }}][includelink]" id="settings[{{ $item->getId() }}][includelink]" value="1" {{ ($settings['includelink'] ? 'checked' : '') }} /><label for="settings[{{ $item->getId() }}][includelink]"><!--Include link--></label>
		</p>
	</fieldset>	

	<p class="standard">
		<label>Link</label>
		<input type="text" name="settings[{{ $item->getId() }}][link]" value="{{ $settings['link'] }}" placeholder="http://website-link.com" />
	</p>
	
	<fieldset class="checkbox-list">
		<h2>Open in new window</h2>
		<p>
			<input type="checkbox" name="settings[{{ $item->getId() }}][linknewwindow]" id="settings[{{ $item->getId() }}][linknewwindow]" value="1" {{ ($settings['linknewwindow'] ? 'checked' : '') }} />
			<label for="settings[{{ $item->getId() }}][linknewwindow]"><!--Open in new window--></label>
		</p>
	</fieldset>	
</div>

</section>