@extends('vendor.digitalmarmalade.Shop.master')

@section('content')

<div id="cart">
    <span>Items in cart: {{ $cart->count }}</span>
    <table>
        <thead>
            <tr>
                <th>Sku</th>
                <th>Name</th>
                <th>Price</th>
                <th>Display Price</th>
                <th>Tax</th>
                <th>Quantity</th>
                <th>Shipping</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cart->items as $item)
                <tr>
                    <td>{{ $item->sku }}</td>
                    <td><a href="{{ $item->shopUrl }}">{{ $item->displayName }}</a></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->displayPrice }}</td>
                    <td>{{ $item->tax }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->shipping }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <p></p>
    
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total (before tax)</td>
                <td>{{ $cart->displayTotalPrice }}</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>{{ $cart->displayTotalShipping }}</td>
            </tr>
            <tr>
                <td>VAT</td>
                <td>{{ $cart->displayTotalTax }}</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{ $cart->displayTotal }}</td>
            </tr>
        </tbody>
    </table>
    
    @if ($cart->count)
    <form action="{{ route('shopCartClear') }}" method="post">
        {{ csrf_field() }}
        <button type="submit">Clear Cart</button>
    </form>
    @endif
    
    @if ($cart->count)
    <p>
        <a href="{{ route('shopCheckout') }}">Checkout</a>
    </p>
    @endif
    
</div>
<style>
    th, td {
        padding: 3px;
        border: solid 1px;
    }
    
    table {
        border-collapse: collapse;
    }
    #cart {
        float: right;
    }
</style>

@foreach ($products as $product)

<script>
        
    ($(function() {
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
        
        window.ko.applyBindings(new shopProductViewModel(), $('#product_{{ $product->id }}')[0]);
    }));
</script>

<form method="post" action="{{ route('shopCartAddProduct', ['productVariationId' => $product->id]) }}">
    {{ csrf_field() }}
    <div id="product_{{ $product->id }}">

        <input type="hidden" name="product_variation_id" data-bind="value: variation().id" />


        <h1 data-bind="text: product().name"></h1>

        <p>
            Description:
            <span data-bind="text: product().description"></span>
        </p>

        <p>
            Price: <span data-bind="text: variation().price"></span>
        </p>

        <p>
            Sku: <span data-bind="text: variation().sku"></span>
        </p>
        <div data-bind="foreach: options">
            <label data-bind="text: name"></label>
            <select data-bind="attr: { 'data-product_option_id': id }, event: { change: $root.setProductOption }">
                <!-- ko foreach: values -->
                <option data-bind="value: id, text: name"></option>
                <!-- /ko -->
            </select>
        </div>
        
        <p>
            Quantity:
            <select name="quantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>
        
        <p>
            <button type="submit">Add to Cart</button>
        </p>

    </div>
</form>

@endforeach

@endsection
