@extends('vendor.digitalmarmalade.MarmaladeSuite.master')

@section('head')
@parent
    {!! \DigitalMarmalade\Wysiwyg\WysiwygOutput::header() !!}
    {!! Cropper::header() !!}
@endsection

@section('site_navigation')

@parent

<ul class="suite-quicklinks">
    <li><a href="{{ route('msuiteHome') }}">Dashboard</a></li>
    <li><a href="{{ route('msuiteShop') }}">Shop</a></li>
    <li class="right"><a href="{{ route('msuiteShopEditProductView', ['productId' => $product->id]) }}">Add a Product</a></li>
</ul>

@stop

@section('main')

<form action="{{ route('msuiteShopUpdateProductAction', ['productId' => $product->id]) }}" method="post" class="main-form" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div class="panel form-panel">

        <fieldset>

            <legend class="title-legend">Product<span class="colon @if (old('name', $product->name) !== '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
            @if (old('name', $product->name) !== '')
                {{ old('name', $product->name) }}
            @endif</span></legend>

            <p class="full-width-form-input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" class="js-panel-title-input" required />
            </p>
            
            <p class="full-width-form-input">
                <label for="sku">Stock Keeping Unit</label>
                <input type="text" name="sku" id="sku" value="{{ old('sku', $productVariation->sku) }}" placeholder="PROD123456" maxlength="50" required />
            </p>

        </fieldset>
        
    </div>
    
    <div class="panel form-panel">

        <fieldset>
            
            <legend class="title-legend">Description</legend>

            <p class="standard-form-input standard-form-input--textarea">
                <label for="description">Description</label>
                <textarea name="description">{{ old('description', $product->description) }}</textarea>
            </p>

        </fieldset>
        
    </div>
    
    <div class="panel form-panel">

        <fieldset>
            
            <legend class="title-legend">Image</legend>
            
            @include('vendor.digitalmarmalade.MarmaladeSuite.Images.imageInput', [
                'width' => 400,
                'height' => 400,

                'fileInputName' => 'image',

                'reuseInputName' => 'imagereuse',
                'reusableImages' => $reusableImages,

                'altInputName' => 'imagealt',
                'altValue' => old('imagealt', $productVariation->image_alt),

                'hasImage' => $productVariation->image_filepath ? true : false,
                'imagePath' => route('msuiteShopViewProductVariationImage', ['productVariationId' => $productVariation->id]),
            ])
            
        </fieldset>
    </div>
    
    <div class="panel form-panel">

        <fieldset>
            
            <legend class="title-legend">Stock &amp; Price</legend>

            <p class="full-width-form-input">
                <label for="price">Price</label>
                <input type="text" name="price" value="{{ old('price', $productVariation->price) }}" />
            </p>
            
            <p class="full-width-form-input">
                <label for="current_stock">Current Stock</label>
                <input type="text" name="current_stock" value="{{ $productVariation->stock }}" disabled />
            </p>
            
            <p class="full-width-form-input">
                <label for="stock_alteration">Stock Alteration</label>
                <input type="text" name="stock_alteration" id="stock_alteration" placeholder="0" value="{{ old('stock_alteration') }}" />
            </p>
            
        </fieldset>
        
    </div>
    
    <div class="action-buttons">

        <p>
            <button type="submit" class="btn btn-primary btn--large" ><span>Update</span></button>
        </p>

    </div>  

    
</form>

@endsection