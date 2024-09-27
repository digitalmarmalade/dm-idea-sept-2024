<?php $uniqueId = intval(microtime(true)) . rand(1, 10000000); ?>

<div class="js-reusable-image-upload-wrapper">

    <div class="image-upload image-upload-full @if (!$hasImage) hide @endif">

        <div class="uploaded-image">

            <div class="js-reusable-image-preview js-{{ $uniqueId }}-preview" style="overflow: hidden; @if ($width > 760) width: 760px; @else width: {{ $width }}px; @endif height: @if ($width > 760) {{ 760 / ($width / $height) }}px @else {{ $width / ($width / $height) }}px  @endif">
                <img src="{{ $imagePath }}" alt="" />
            </div>

            <!-- Remove button -->
            <p class="uploaded-image-change"><button type="button" class="btn btn-primary js-change-image">Change this image</button></p>

            <!-- Image alt tag -->
            <p class="uploaded-image-alt-tag-holder">
                <label for="{{ str_slug($altInputName) }}">Alt tag</label>
                <input type="text" class="uploaded-image-alt-tag" placeholder="Alt tag" id="{{ str_slug($altInputName) }}" name="{{ $altInputName }}" value="{{ $altValue }}" />
            </p>

        </div>

        <div class="image-upload-dimensions">
            <span class="glyph-icon flaticon-photo"></span>
            <p>{{ $width }}px x {{ $height }}px</p>
        </div>

    </div>

    <div class="image-upload image-upload-empty @if ($hasImage) hide @endif">

        <div class="image-upload-dimensions">
            <span class="glyph-icon flaticon-photo"></span>
            <p>{{ $width }}px x {{ $height }}px</p>
        </div>

        @if (isset($reusableImages))
        <input type="hidden" id="{{ $uniqueId . '_reuse_input' }}" name="{{ $reuseInputName }}" value="" />
        @endif
        
        <ul class="centre-actions js-centre-actions">
            <li @if (isset($reusableImages)) class="full-width" @endif>
                {!! Cropper::file($fileInputName, [
                    'aspectRatio' => ($width / $height),
                    'preview' => '.js-' . $uniqueId . '-preview' . (isset($previewClass) ? ', .' . $previewClass : ''),
                    'minHeight' => $height,
                    'minWidth' => $width,
                    'class' => 'js-' . $uniqueId . '-generated-by-reusable-image-input'
                ]) !!}
            </li>
            @if (isset($reusableImages))
                <li>
                    <button id="reusable-image-input-{{ $uniqueId }}_reuse_button" type="button" class="btn btn-primary" @if (!count($reusableImages)) disabled @endif >Pick from existing</button>
                </li>
            @endif
        </ul>
        <span class="js-cropper-file-errors cropper-file-errors"></span>
    </div>

</div>
<script>
    $(function () {
        $("#reusable-image-input-{{ $uniqueId }}_reuse_button").on('click', function () {
            var reuseButton = $(this);
            
            var reusableImageWrapper = reuseButton.closest('.js-reusable-image-upload-wrapper');
            app.digitalmarmalade.overlayManager.getOverlay('reusableImagesOverlay_{{ $uniqueId }}').show();

            app.digitalmarmalade.overlayManager.getOverlay('reusableImagesOverlay_{{ $uniqueId }}').getContainer()
                .one('click', '.js-reusable-images-image', function () {
                    $("#{{ $uniqueId . '_reuse_input' }}").val($(this).data('images_id'));
                    reuseButton.closest('.js-reusable-image-upload-wrapper').find('.js-reusable-image-preview').children('img').attr('src', $(this).attr('src'));
                    app.digitalmarmalade.overlayManager.getOverlay('reusableImagesOverlay_{{ $uniqueId }}').hide()
                    
                    reusableImageWrapper.find('.image-upload-full').removeClass('hide');
                    reusableImageWrapper.find('.image-upload-empty').addClass('hide');
            });

        });
        
        $(".js-{{ $uniqueId }}-generated-by-reusable-image-input")            
            .on('imageError.inputCropper', function(event, data) {
                $(this).closest('.js-centre-actions').next('.js-cropper-file-errors').text(data.message).removeClass("spinner").addClass("red");                
            })
            .on('imageSuccess.inputCropper', function(event) {
                $(this).closest('.js-centre-actions').next('.js-cropper-file-errors').text('').removeClass("spinner");
            })
            .on('fileChange.inputCropper', function(event) {
                $(this).closest('.js-centre-actions').next('.js-cropper-file-errors').text('').addClass("spinner");
            });

    });
</script>

@if (isset($reusableImages))
    {!!
        Overlay
        ::width(900)
        ->setName('reusableImagesOverlay_' . $uniqueId)
        ->setTemplate('vendor.digitalmarmalade.MarmaladeSuite.Images.reusableImagesOverlay')
        ->renderMultiple(['reusableImages' => $reusableImages])
    !!}
@endif

{!! Cropper::header() !!}
<script src="{{ asset('/vendor/digitalmarmalade/MarmaladeSuite/ReusableImages/reusable-images.js') }}"></script>

