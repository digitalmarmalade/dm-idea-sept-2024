(function($) {
    
    
    $.fn.inputCropper = function(userOptions, cropperOptions) {
        
        var self = $.fn.inputCropper;
        
        if ($.isPlainObject(userOptions)) {
            var elements = this;

            var options = $.extend({}, $.fn.inputCropper.defaults, userOptions);
            self.init(elements, options, cropperOptions);
        } else {
            $.fn.inputCropper[userOptions](this);
        }

        return this;
    };

    $.fn.inputCropper.defaults = {
        formInputs: true, //append additional inputs after the file input containing the crop data
        inputSuffixes: { //suffixes or the inputs (added if formInputs is true)
            width: "_width",
            height: "_height",
            x: "_x",
            y: "_y",
        },
        cropperImage: false,
        minWidth: null,
        minHeight: null
    };
    
    $.fn.inputCropper.init = function(elements, options, cropperOptions) {
        $.each(elements, function(index, element) {
            setElementData($(element), 'options', options);
            setElementData($(element), 'cropperOptions', cropperOptions);
            $.fn.inputCropper.addOnChangeEvent($(element), options, cropperOptions);
            $.fn.inputCropper.addInputs($(element), options);
        });
    };
    
    $.fn.inputCropper.clear = function(element) {
        clearExistingGeneratedInputs(element);
        $(element).val('');
        return true;
    };
    
    /**
     * 
     * @param {window.Image} targetImage -  The image on the screen that has the crop box on it
     * @param {int} imageWidth - the natural width of the selected image
     * @param {int} imageHeight - the width width of the selected image
     * @param {object} options
     * @returns {inputcropper_L1.$.fn.inputCropper.calculateMinCropBox.inputcropperAnonym$1|inputcropper_L1.$.fn.inputCropper.calculateMinCropBox.inputcropperAnonym$2}
     */
    $.fn.inputCropper.calculateMinCropBox = function(targetImage, imageWidth, imageHeight, options) {
        if (options.minWidth === null || options.minHeight === null) {
            return {
                minCropBoxWidth: 0,
                minCropBoxHeight: 0
            };
        } else {
            return {
                minCropBoxWidth: options.minWidth * (targetImage.width() / imageWidth),
                minCropBoxHeight: options.minHeight * (targetImage.height() / imageHeight)
            };
        }
    };
    
    $.fn.inputCropper.addInputs = function(element, options) {
        if (options.formInputs) {
            removeExistingGeneratedInputs(element);
            $.each(options.inputSuffixes, function(inputType, suffix) {
                addInput(element, inputType, suffix);
            });
        }
    };
    
    $.fn.inputCropper.addOnChangeEvent = function(element) {
        if (hasFileReader()) { //if the browser supports FileReader use that
            $(element).on('change', function(event) {
                if ($(element).val() === '') { //no file, do nothing.
                    return true;
                }
                $.fn.inputCropper.handleOnChange(event, element);
            });
        }
    };
    
    $.fn.inputCropper.handleOnChange = function(event, element) {
        if (event.target.files !== undefined && event.target.files[0] !== undefined) {
            $(element).trigger('fileChange.inputCropper');
            var fileReader = new window.FileReader();
            fileReader.readAsDataURL(event.target.files[0]);
            $.fn.inputCropper.addFileReaderOnLoadEvent(fileReader, element);
        }
    };
    
    $.fn.inputCropper.addFileReaderOnLoadEvent = function(fileReader, element) {
        $(fileReader).one('load', function(event) {
            $.fn.inputCropper.handleFileReaderOnLoad(event, element);
        });
    };
    
    $.fn.inputCropper.handleFileReaderOnLoad = function(event, element) {
        var options = getElementData(element, 'options');
        var cropperOptions = getElementData(element, 'cropperOptions');
        
        
        this.validateImage(event.target.result, options, function(validatorImage) {
            var image = (options.cropperImage === false) ? $('<img>') : options.cropperImage;
            $.fn.inputCropper.destroyCropper(image);
            
            image.attr('src', event.target.result);
            
            element.trigger('cropstart.inputCropper', {image: image});
            $.fn.inputCropper.createCropper(
                image,
                $.extend(
                    $.fn.inputCropper.calculateMinCropBox(image, validatorImage.width, validatorImage.height, options),
                    cropperOptions
                )
            );
            $.fn.inputCropper.addOnCropEvent(image, element, options);
            element.trigger('imageSuccess.inputCropper');
        }, function(message) {
            element.trigger('imageError.inputCropper', {message: (message === undefined ? 'Invalid image selected, please try again' : message)});
        });
    };
    
    $.fn.inputCropper.validateImage = function(src, options, callback, errorCallback) {
        var validatorImage = new Image();
        validatorImage.onload = function() {
            
            if (options.minWidth !== null && options.minHeight !== null) {
                if (validatorImage.width < options.minWidth || validatorImage.height < options.minHeight) {
                    if ($.isFunction(errorCallback)) {
                        errorCallback(
                            'Image must be a minimum size of ' + options.minWidth + 'px x ' + options.minHeight + 'px, selected image is ' +
                                validatorImage.width + 'px x ' + validatorImage.height + 'px.'
                        );
                    }
                    return false;
                }
            }
            
            if ($.isFunction(callback)) {
                callback(validatorImage);
            }
        };
        validatorImage.onerror = function() {
            if ($.isFunction(errorCallback)) {
                errorCallback();
            }
        };
        validatorImage.src = src;
    };
    
    $.fn.inputCropper.createCropper = function(image, cropperOptions) {
        image.cropper(cropperOptions);
    };
    
    $.fn.inputCropper.destroyCropper = function(image) {
        if (image.data('cropper')) {
            var existingPreviews = image.data('cropper').options.preview;
            var clonedExistingPreviewImages = [];
            $.each(existingPreviews, function(i, existingPreview) {
                clonedExistingPreviewImages.push($(existingPreview).find('img').clone());
            });
            image.cropper('destroy');
            $.each(existingPreviews, function(i, existingPreview) {
                $(existingPreview).html(clonedExistingPreviewImages[i]);
            });
        }
    };
    
    $.fn.inputCropper.addOnCropEvent = function(image, element, options) {
        image.off('crop.cropper'); //remove any existing crop events so we can reuse the cropper
        image.on('crop.cropper', function(event) {
            if (options.formInputs) {
                $.each(options.inputSuffixes, function(inputType, suffix) {
                    getInput(element, inputType).val(parseInt(event[inputType]));
                });
            }
        });
    };
    
    /**
     * Checks to see whether the browser supports the FileReader object
     * @returns {boolean}
     */
    var hasFileReader = function() {
        return ($.isFunction(window.FileReader) || $.isPlainObject(window.FileReader));
    };
    
    var addInput = function(element, inputType, suffix) {
        var name = element.attr('name');
        var suffixedName = (name.substr(-1, 1) === ']' ? (name.substr(0, name.length - 1) + suffix + ']') : (name + suffix));
        var input = $('<input>').attr('name', suffixedName).attr('type', 'hidden').addClass('js-inputcropper-generated-input');
        input.insertAfter(element);
        setElementData(element, inputType + 'Input', input);
    };
    
    var clearExistingGeneratedInputs = function(element) {
        $(element).parent().children('.js-inputcropper-generated-input').val('');
    };
    
    var removeExistingGeneratedInputs = function(element) {
        $(element).parent().children('.js-inputcropper-generated-input').remove(); //remove any existing generated inputs caused by cloning dom
    }
    ;
    var getInput = function(element, inputType) {
        return getElementData(element, inputType + 'Input');
    };
    
    var setElementData = function(element, key, value) {
        var data = element.data('inputCropper') || {};
        data[key] = value;
        element.data('inputCropper', data);
    };
    
    var getElementData = function(element, key) {
        var data = element.data('inputCropper') || {};
        if (data[key] !== undefined) {
            return data[key];
        }
    };
    
}(jQuery));