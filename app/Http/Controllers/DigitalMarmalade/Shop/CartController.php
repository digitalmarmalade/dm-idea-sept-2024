<?php

namespace App\Http\Controllers\DigitalMarmalade\Shop;

use App\Http\Controllers\Controller;
use App\ProductVariation;
use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $this->validate($request, [
            'quantity' => 'required|integer',
            'product_variation_id' => 'required|integer|exists:product_variations,id',
        ]);
        
        $productVariation = ProductVariation::findOrFail($request->get('product_variation_id'));
        
        Cart::current()->add($productVariation, $request->get('quantity'));
        return redirect()->back()->with('success', 'Product was added to your cart');
    }
    
    public function clear()
    {
        Cart::current()->clear();
        return redirect()->back()->with('success', 'Your cart was cleared');
    }
    
}
