<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite\Shop;

use App\Http\Controllers\DigitalMarmalade\MarmaladeSuite\MarmaladeSuiteControllerAbstract;
use App\Product as ProductModel;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Shop\Product;
use App\ProductVariation as ProductVariationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cart;
use Illuminate\Support\Facades\Auth;

/**
 * The controller for the shop dashboard
 */
class ShopController extends MarmaladeSuiteControllerAbstract
{
    
    public function homeView()
    {
        return view('vendor.digitalmarmalade.MarmaladeSuite.Shop.home');
        
    }
        
}
