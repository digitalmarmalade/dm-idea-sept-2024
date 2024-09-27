<!--
!! Wysiwyg::header() !!
<section class="widget rich-text">
    <h1>Text</h1>

    <div>
        !! Wysiwyg::render([
            'name' => 'settings[' . $item->getId() . '][text]',
            'content' => old('settings' . $item->getId() . '.text', $settings['text'])
        ]) !!
    </div>
</section>
-->


<!-- RICH TEXT -->
<div class="panel form-panel panel-rich-text" data-itemId="{{ $item->getId() }}" id="widgetsSnippet{{ $item->getId() }}">

<fieldset>

<legend class="title-legend">Text</legend>

    {!! Wysiwyg::render(['name' => 'settings[' . $item->getId() . '][text]', 'content' => $settings['text'], 'content_css' => asset('/vendor/SwimWales/Website/js/Wysiwyg/override-inside-iframe.css')]) !!}

    <span class="cropper-file-errors spinner"></span>

</fieldset>

</div>

