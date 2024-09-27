<script>
$(document).ready(function() {
    
    $('.js-add-item-button').on('click', function(event) {
        event.preventDefault();
        $.get(
            $(this).attr('href'),
            function(response) {
                if (response.success) {
                    var template = $('.js-item-template').clone();
                    template
                        .removeClass('js-item-template')
                        .show()
                        .find('.js-item-content').html(response.content);
                    template.find('.js-delete-url').attr('href', response.deleteUrl);
                    $('.js-page-items-wrapper').append(template);
                }
            },
            'json'
        );
    });
    $('.js-page-items-wrapper').on('click', '.js-item-delete-button', function(event) {
        event.preventDefault();
        var self = this;
        $.get(
            $(this).attr('href'),
            function(response) {
                if (response.success) {
                    $(self).closest('.js-page-item-wrapper').remove();
                }
            },
            'json'
        );
        
    });
    
});
</script>
