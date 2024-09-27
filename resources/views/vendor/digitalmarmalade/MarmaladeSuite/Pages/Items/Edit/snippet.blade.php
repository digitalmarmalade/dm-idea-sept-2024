<!--SNIPPET--> 

<div class="panel form-panel" data-itemId="{{ $item->getId() }}" id="widgetsSnippet{{ $item->getId() }}">

    <fieldset>

        <legend class="title-legend">Title<span class="colon @if ($settings['title'] === '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
                @if ($settings['title'] !== '')
                {{ $settings['title'] }}
                @endif</span></legend>

        <p class="standard-form-input form-input-border-b">
            <label for="settings[{{ $item->getId() }}][title]">Title</label>
            <input type="text" placeholder="Snippet title" class="js-panel-title-input" id="settings[{{ $item->getId() }}][title]" name="settings[{{ $item->getId() }}][title]" value="{{ old('settings' . $item->getId() . '.title', $settings['title']) }}" required>
        </p>

        <p class="standard-form-input standard-form-input--textarea">
            <label for="settings[{{ $item->getId() }}][description]">Description</label>
            <textarea id="settings[{{ $item->getId() }}][description]" name="settings[{{ $item->getId() }}][description]" required>{{ $settings['description'] }}</textarea>
        </p>

        <fieldset class="input-group input-group--alternative-radios clearfix">

            <legend>Link</legend>

            <p class="radio-alternative">
                <input type="radio" id="settings-{{ $item->getId() }}--type-1" type="radio" class="js-snippet-type js-choose-option" name="settings[{{ $item->getId() }}][type]" value="none" {{ ($settings['type'] === 'none' ? 'checked' : '') }}>
                <label for="settings-{{ $item->getId() }}--type-1">
                    No Link
                </label>
            </p>
            <p class="radio-alternative">
                <input id="settings-{{ $item->getId() }}--type-2" type="radio" class="js-snippet-type js-choose-option" name="settings[{{ $item->getId() }}][type]" value="link" {{ ($settings['type'] === 'link' ? 'checked' : '') }} data-target="fields-web-link">
                <label for="settings-{{ $item->getId() }}--type-2">
                    Web Link
                </label>
            </p>

            <p class="radio-alternative">
                <input id="settings-{{ $item->getId() }}--type-3" type="radio" class="js-snippet-type js-choose-option" name="settings[{{ $item->getId() }}][type]" value="email" {{ ($settings['type'] === 'email' ? 'checked' : '') }} data-target="fields-email-link">
                <label for="settings-{{ $item->getId() }}--type-3">
                    Email
                </label>
            </p>
            <p class="radio-alternative">
                <input id="settings-{{ $item->getId() }}--type-4" type="radio" class="js-snippet-type js-choose-option" name="settings[{{ $item->getId() }}][type]" value="download" {{ ($settings['type'] === 'download' ? 'checked' : '') }} data-target="fields-download-link">
                <label for="settings-{{ $item->getId() }}--type-4">
                    Download
                </label>
            </p>

        </fieldset>

        <div class="optional-inputs fields-web-link">

            <p class="standard-form-input">
                <label for="settings[{{ $item->getId() }}][link]">URL</label>
                <input type="url" id="settings[{{ $item->getId() }}][link]" name="settings[{{ $item->getId() }}][link]" placeholder="https://web-address.com" value="{{ $settings['link'] }}">
                <span class="checkbox inline-checkbox">
                    <input type="checkbox" id="settings[{{ $item->getId() }}][linknewwindow]" name="settings[{{ $item->getId() }}][linknewwindow]" value="1" {{ ($settings['linknewwindow'] ? 'checked' : '') }}>
                    <label for="settings[{{ $item->getId() }}][linknewwindow]">
                        Open in a new window?
                    </label>
                </span>
            </p>

            <p class="standard-form-input">
                <label for="settings[{{ $item->getId() }}][linktext]">Button Label</label>
                <input type="text" id="settings[{{ $item->getId() }}][linktext]" name="settings[{{ $item->getId() }}][linktext]" placeholder="Click here" value="{{ $settings['linktext'] }}" maxlength="11">
            </p>

        </div>

        <div class="optional-inputs fields-email-link">

            <p class="standard-form-input">
                <label for="settings[{{ $item->getId() }}][email]">Email Address</label>
                <input type="email" placeholder="Enter Email Address" id="settings[{{ $item->getId() }}][email]" name="settings[{{ $item->getId() }}][email]" value="{{ $settings['email'] }}">
                <span class="inline-input">
                    <label for="">Button Label</label>
                    <input type="text" id="settings[{{ $item->getId() }}][emailtext]" name="settings[{{ $item->getId() }}][emailtext]" placeholder="Enter label" value="{{ $settings['emailtext'] }}" maxlength="11">
                </span>
            </p>

        </div>

        <div class="optional-inputs fields-download-link">
            
            @if ($settings['downloadfilename'] !== null) <p><span class="faux-label">Current File</span> <span class="current-doc">{{ $settings['downloadfilename'] }}</span></p> @endif
            
            <p class="file-upload-holder">
                <span class="faux-label">Select File</span>
                <input type="file" name="settings[{{ $item->getId() }}][downloadfile]" id="settings[{{ $item->getId() }}][downloadfile]" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple />
                <label for="settings[{{ $item->getId() }}][downloadfile]" class="file-input-label"><i class="glyph-icon flaticon-arrows-3"></i> <span class="filename">Choose a file&hellip;</span></label>

                <span class="inline-input">
                    <label for="settings[{{ $item->getId() }}][downloadbuttontext]">Button label</label>
                    <input type="text" placeholder="Enter label" id="settings[{{ $item->getId() }}][downloadbuttontext]" name="settings[{{ $item->getId() }}][downloadbuttontext]" value="{{ $settings['downloadbuttontext'] }}" maxlength="11">
                </span>

                
            
            </p>
            <p class="cropper-file-errors-snippet-container"><span class="js-cropper-file-errors cropper-file-errors"></span></p>
        </div>


    </fieldset>

</div>

<!--SNIPPET ENDS--> 
