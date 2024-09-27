

var shopProductViewModel = function() {
    var self = this;
    //var animator = new app.digitalmarmalade.PageBuilder.Animator.animator();
    //this.items = ko.observableArray({ json_encode(old('settings.' . $item->getId() . '.items', $settings['items'])) });

    this.variationRoute = "{{ route('shopProductVariation', ['productId' => $product->id]) }}";

    this.id = ko.observable({{ $product->id }});
    this.product = ko.observable({!! json_encode($product->getModel()) !!});
    this.variation = ko.observable({});

    this.options = {!! json_encode($product->options()) !!};
    this.selectedOptions = ko.observable({});

    this.setProductOption = function(option, event) {
        var productOptionId = option.id;
        var value = $(event.currentTarget).val();
        self.selectedOptions()[productOptionId] = value;
        self.getProductVariation();
    };

    this.getProductVariation = function() {
        $.get(
            self.variationRoute,
            {options: self.selectedOptions()},
            function(response) {
                self.variation(response);
            }
        );
    };

    $.each(this.options, function(i, option) {
        self.selectedOptions()[option.id] = option.values[0].id;
    });

    this.getProductVariation();
};

window.ko.applyBindings(new shopProductViewModel(), $('#product')[0]);