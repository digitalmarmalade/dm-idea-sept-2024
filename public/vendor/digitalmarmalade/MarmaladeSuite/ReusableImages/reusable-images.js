//Change the incumbent image
($(function() {
    
    $('body').on('click', '.js-reusable-image-upload-wrapper .js-change-image', function () {
        showEmptyImage(this);
    }).on('cropstart.inputCropper', '.js-reusable-image-upload-wrapper .js-cropper-file', function () {
        showExistingImage(this);
    });
    
    function showEmptyImage(context) {
        $(context).closest('.js-reusable-image-upload-wrapper').find('.image-upload-full').addClass('hide');
        $(context).closest('.js-reusable-image-upload-wrapper').find('.image-upload-empty').removeClass('hide');
    }
    
    function showExistingImage(context) {
        $(context).closest('.js-reusable-image-upload-wrapper').find('.image-upload-full').removeClass('hide');
        $(context).closest('.js-reusable-image-upload-wrapper').find('.image-upload-empty').addClass('hide');
    }
    
}));