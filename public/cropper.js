(function($) {
    
    
    $.fn.inputCropper = function(userOptions, cropperOptions) {
        
        var self = $.fn.inputCropper;
        var elements = this;

        var options = $.extend({}, $.fn.inputCropper.defaults, userOptions);
        self.init(elements, options, cropperOptions);

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
        cropperImage: false
    };
    
    $.fn.inputCropper.init = function(elements, options, cropperOptions) {
        $.each(elements, function(index, element) {
            setElementData($(element), 'options', options);
            setElementData($(element), 'cropperOptions', cropperOptions);
            $.fn.inputCropper.addOnChangeEvent($(element), options, cropperOptions);
            $.fn.inputCropper.addInputs($(element), options);
        });
    };
    
    $.fn.inputCropper.addInputs = function(element, options) {
        if (options.formInputs) {
            $.each(options.inputSuffixes, function(inputType, suffix) {
                addInput(element, inputType, suffix);
            });
        }
    };
    
    $.fn.inputCropper.addOnChangeEvent = function(element) {
        if (hasFileReader()) { //if the browser supports FileReader use that
            $(element).on('change', function(event) {
                $.fn.inputCropper.handleOnChange(event, element);
            });
        }
    };
    
    $.fn.inputCropper.handleOnChange = function(event, element) {
        if (event.target.files !== undefined && event.target.files[0] !== undefined) {
            var fileReader = new window.FileReader();
            fileReader.readAsDataURL(event.target.files[0]);
            $.fn.inputCropper.addFileReaderOnLoadEvent(fileReader, element);
        }
    };
    
    $.fn.inputCropper.addFileReaderOnLoadEvent = function(fileReader, element) {
        fileReader.onload = function(event) {
            $.fn.inputCropper.handleFileReaderOnLoad(event, element);
        };
    };
    
    $.fn.inputCropper.handleFileReaderOnLoad = function(event, element) {
        var options = getElementData(element, 'options');
        var cropperOptions = getElementData(element, 'cropperOptions');
        
        var image = (options.cropperImage === false) ? $('<img>') : options.cropperImage;
        image.attr('src', event.target.result);
        $.fn.inputCropper.createCropper(image, cropperOptions);
        $.fn.inputCropper.addOnCropEvent(image, element, options);
        element.trigger('cropstart.inputCropper', {image: image});
    };
    
    $.fn.inputCropper.createCropper = function(image, cropperOptions) {
        image.cropper(cropperOptions);
    };
    
    $.fn.inputCropper.addOnCropEvent = function(image, element, options) {
        image.on('crop.cropper', function(event) {
            if (options.formInputs) {
                console.log(event);
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
        return ($.isFunction(window.FileReader));
    };
    
    var addInput = function(element, inputType, suffix) {
        var input = $('<input>').attr('name', element.attr('name') + suffix).attr('type', 'hidden');
        setElementData(element, inputType + 'Input', input);
        input.insertAfter(element);
    };
    
    var getInput = function(element, inputType) {
        var input = $('<input>').attr('name', element.attr('name') + inputType).attr('type', 'hidden');
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