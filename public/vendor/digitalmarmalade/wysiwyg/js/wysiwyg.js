var app = window.app || {};
app.digitalmarmalade = app.digitalmarmalade || {};

app.digitalmarmalade.wysiwyg = function(textarea) {
    
    var self = this;
    
    if (textarea.length > 1) {
        $.each(textarea, function(i, e) {
            new app.digitalmarmalade.wysiwyg(e);
        });
        return;
    }
    
    this.create = function() {
        var className = 'js-tinymce-wysiwyg-' + Math.round(Math.random() * 1000000) + '-' + (new Date()).getTime();
        
        $(textarea).addClass(className).addClass('js-tinymce-wysiwyg');
        
        tinymce.init({
            selector:'.' + className,
            toolbar: 'undo redo | bold italic | link image | alignleft | alignright | blockquote | bullist numlist | code | pre | styleselect',
            style_formats: [
                { title: 'Header 2', block: 'h2' },
                { title: 'Header 3', block: 'h3' },
                { title: 'Header 4', block: 'h4' },
            ],
            menubar: false,
            plugins: "paste autoresize link",
            autoresize_bottom_margin: 0,
            paste_as_text: true,
            setup: function(editor) {
                $(textarea).removeClass(className).removeClass('js-tinymce-wysiwyg');
            }
        });
        
    };
    
    this.destroy = function() {
        //TODO
    };
    
    this.getAllowedTags = function() {
        var allowedTags = textarea.data('allowed_tags') || '';
        var allowedTagsWithoutAttributes = allowedTags.replace(/ *\[[^\]]*]/, '');
        return allowedTagsWithoutAttributes.toUpperCase().split(',');
    };
    
    this.filterString = function(content) {
        var stringWrapper = $('<div>').html(content)[0];
        var allowedTags = this.getAllowedTags();
        var tags = Array.prototype.slice.apply(stringWrapper.getElementsByTagName("*"), [0]);
        for (var i = 0; i < tags.length; i++) {
            if (allowedTags.indexOf(tags[i].nodeName) == -1) {
                this.removeParent(tags[i]);
            }
        }
        return $(stringWrapper).html();
    };
    
    this.removeParent = function(element) {
        var last = element;
        for (var i = element.childNodes.length - 1; i >= 0; i--) {
            var e = element.removeChild(element.childNodes[i]);
            element.parentNode.insertBefore(e, last);
            last = e;
        }
        element.parentNode.removeChild(element);
    };
    
    if ($(textarea).length && !$(textarea).data('wysiwyg')) {
        $(textarea).data('wysiwyg', this);
        this.create();
    }
    
};
