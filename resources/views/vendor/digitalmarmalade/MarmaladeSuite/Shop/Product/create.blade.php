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
    <li class="right"><a href="{{ route('msuiteShopAddProductView') }}">Add a Product</a></li>
</ul>

@stop

@section('main')

<form action="{{ route('msuiteShopAddProductAction') }}" method="post" class="main-form">
    {!! csrf_field() !!}

    <div class="panel form-panel">

        <fieldset>

            <legend class="title-legend">Product<span class="colon @if (old('name') !== '') hide @endif">:</span> <span class="panel-entered-title js-panel-entered-title">
            @if (old('name') !== '')
                {{ old('name') }}
            @endif</span></legend>

            <p class="full-width-form-input">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" class="js-panel-title-input" required />
            </p>
            
            <p class="full-width-form-input">
                <label for="sku">Stock Keeping Unit</label>
                <input type="text" name="sku" id="sku" value="{{ old('sku') }}" placeholder="PROD123456" maxlength="50" required />
            </p>

        </fieldset>
        
    </div>
    
    <div class="panel form-panel">

        <fieldset>
            
            <legend class="title-legend">Description</legend>

            <p class="standard-form-input standard-form-input--textarea">
                <label for="description">Description</label>
                <textarea name="description">{{ old('description') }}</textarea>
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
                'altValue' => old('imagealt'),

                'hasImage' => false,
                'imagePath' => '',
            ])
            
        </fieldset>
    </div>
    
    <div class="panel form-panel">

        <fieldset>
            
            <legend class="title-legend">Stock &amp; Price</legend>

            <p class="full-width-form-input">
                <label for="price">Price</label>
                <input type="text" name="price" value="{{ old('price') }}" />
            </p>
            
            <p class="full-width-form-input">
                <label for="stock">Stock</label>
                <input type="text" name="stock" value="{{ old('stock') }}" />
            </p>

        </fieldset>
        
    </div>
    
    <div class="action-buttons">

        <p>
            <button type="submit" class="btn btn-primary btn--large" ><span>Add</span></button>
        </p>

    </div>  

    
</form>

@endsection