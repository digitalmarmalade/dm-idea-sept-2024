<div class="overlay-container {{ $containerClass }}" id="{{ $containerId }}" data-name="{{ $name }}">

<div class="overlay-article overlay-content" style="width: {{ $containerWidth }}px; height: {{ $containerHeight }}px; margin-top: {{ $containerMarginTop }}px; margin-left: {{ $containerMarginLeft }}px;">
    <a href="#" class="close-feedback close-overlay" id="close{{ $containerId }}">
        <span class="glyph-icon flaticon-delete"></span> <span class="visuallyhidden">Close</span>
    </a>

    {!! view($template, array_merge($userData, ['overlayId' => $containerId, 'overlayName' => $name])) !!}
</div>   

</div>
<script>
    ($(function() {
        new app.digitalmarmalade.overlay($('#{{ $containerId }}'));
    }));
</script>