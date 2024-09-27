<!-- PODS -->
<div class="panel form-panel" id="widget{{ $item->getId() }}">

    <input type="hidden" name="settings[{{ $item->getId() }}][number]" value="{{ $settings['number'] }}" />

    <ul class="panel-select-number">
        <li @if($settings['number'] == 1) class="on" @endif><button type="submit" name="settings[{{ $item->getId() }}][number]" value="1" class="btn btn-outline">1 POD</button></li>
        <li @if($settings['number'] == 2) class="on" @endif><button type="submit" name="settings[{{ $item->getId() }}][number]" value="2" class="btn btn-outline">2 PODS</button></li>
        <li @if($settings['number'] == 3) class="on" @endif><button type="submit" name="settings[{{ $item->getId() }}][number]" value="3" class="btn btn-outline">3 PODS</button></li>
    </ul>


    @foreach ($settings['pods'] as $podId => $pod)

    <fieldset class="widget-pod">

        <legend class="title-legend visuallyhidden">Pods</legend>

        <h2 class="fieldset-secondary-title">Pod {{ $podId+1 }}<span class="colon @if ($pod['title'] === '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
                @if ($pod['title'] !== '')
                {{ $pod['title'] }}
                @endif</span></h2>

        <p class="standard-form-input">
            <label for="settings[{{ $item->getId() }}][pods][{{ $podId }}][title]">Pod Title</label>
            <input type="text" id="settings[{{ $item->getId() }}][pods][{{ $podId }}][title]" name="settings[{{ $item->getId() }}][pods][{{ $podId }}][title]" value="{{ old('settings.' . $item->getId() . '.pods.' . $podId . '.title', $pod['title']) }}" class="js-panel-title-input" required maxlength="45">
        </p>

        @include('vendor.digitalmarmalade.MarmaladeSuite.Images.imageInput', [
            'width' => $width,
            'height' => $height,
            
            'fileInputName' => 'settings[' . $item->getId() . '][pods][' . $podId . '][imagefile]',
            
            'reuseInputName' => 'settings[' . $item->getId() . '][pods][' . $podId . '][imagereuse]',
            'reusableImages' => $reusableImages,
            
            'altInputName' => 'settings[' . $item->getId() . '][pods][' . $podId . '][imagealt]',
            'altValue' => $pod['imagealt'],
            
            'hasImage' => ($pod['imagefilename'] ? true : false),
            'imagePath' => route('msuiteDownloadPageItemSetting', ['itemId' => $item->getId(), 'settingName' => 'imagefilepath', 'podId' => $podId, 'r' => str_random(40)]),
            
            'previewClass' => 'js-pods-' . $item->getId() . '-pod-' . $podId . '-preview-image',
        ])

        <p class="standard-form-input standard-form-input--textarea standard-form-input--textarea-short">
            <label for="settings[{{ $item->getId() }}][pods][{{ $podId }}][description]">Pod Description</label>
            <textarea id="settings[{{ $item->getId() }}][pods][{{ $podId }}][description]" name="settings[{{ $item->getId() }}][pods][{{ $podId }}][description]" class="js-count-characters" data-allowedcharacters="200" maxlength="200" required>{{ old('settings.' . $item->getId() . '.pods.' . $podId . '.description', $pod['description']) }}</textarea>
            <span class="help-block"><span class="js-characters-remaining">160</span> Characters remaining</span>
        </p>

        <p class="checkbox checkbox-trigger">
            <input id="settings[{{ $item->getId() }}][pods][{{ $podId }}][includelink]" type="checkbox" name="settings[{{ $item->getId() }}][pods][{{ $podId }}][includelink]" value="1" {{ (old('settings.' . $item->getId() . '.pods.' . $podId . '.includelink', $pod['includelink']) ? 'checked' : '') }} class="js-checkbox-reveal-trigger">
            <label for="settings[{{ $item->getId() }}][pods][{{ $podId }}][includelink]">
                Include a link
            </label>
        </p>

        <div class="trigger-reveal js-trigger-reveal">
            <p class="standard-form-input">
                <label for="settings[{{ $item->getId() }}][pods][{{ $podId }}][link]">URL</label>
                <input type="url" id="settings[{{ $item->getId() }}][pods][{{ $podId }}][link]" name="settings[{{ $item->getId() }}][pods][{{ $podId }}][link]" value="{{ old('settings.' . $item->getId() . '.pods.' . $podId . '.link', $pod['link']) }}">
                <span class="checkbox inline-checkbox">
                    <input type="checkbox" name="settings[{{ $item->getId() }}][pods][{{ $podId }}][linknewwindow]" id="settings[{{ $item->getId() }}][pods][{{ $podId }}][linknewwindow]" value="1" {{ (old('settings.' . $item->getId() . '.pods.' . $podId . '.linknewwindow', $pod['linknewwindow']) ? 'checked' : '') }}>
                    <label for="settings[{{ $item->getId() }}][pods][{{ $podId }}][linknewwindow]">
                        Open in a new window?
                    </label>
                </span>
            </p>
        </div><!--/trigger-reveal-->

    </fieldset>

    @endforeach

</div>