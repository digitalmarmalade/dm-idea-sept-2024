<?php

namespace App\Http\Controllers\DigitalMarmalade\Shop;

use App\Http\Controllers\Controller;
use \Shop;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    
    protected $orderCompleteView = 'vendor.digitalmarmalade.Shop.Order.complete';
    protected $orderFailedView = 'vendor.digitalmarmalade.Shop.Order.failed';
    protected $orderCancelledView = 'vendor.digitalmarmalade.Shop.Order.cancelled';
    
    public function checkout()
    {
        if (!Cart::current()->count) {
            throw new Exception('Cannot checkout, no items in cart.');
        }
        
        Shop::setGateway('paypalExpress');
        Shop::checkout();
        
        $order = Shop::placeOrder();
        
        if ($order->isPending) {
            $approvalUrl = Shop::gateway()->getApprovalUrl();
            
            return redirect($approvalUrl);
        }
        
     }
     
     public function orderView(Request $request, Order $order)
     {
         if ($order->hasFailed) {
             return $this->orderFailedView($order);
         } elseif ($order->hasCanceled) {
             return $this->orderCancelledView($order);
         } elseif ($order->isCompleted) {
             return $this->orderCompleteView($order);
         } else {
             return abort(404);
         }
         
     }
     
     public function orderCompleteView(Order $order)
     {
         return view($this->orderCompleteView, ['order' => $order]);
     }
     
     public function orderFailedView(Order $order)
     {
         return view($this->orderFailedView, ['order' => $order]);
     }
     
     public function orderCancelledView(Order $order)
     {
         return view($this->orderCancelledView, ['order' => $order]);
     }
    
}
