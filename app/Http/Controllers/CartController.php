<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
        $product = product::find($request->id,['id','name','price','size_options']);
        $add_to_cart = cart::create([
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'size_options' => $product->size_options
        ]);
        return redirect()->route('shopping-cart');
    }
}
