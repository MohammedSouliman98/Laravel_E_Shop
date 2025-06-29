<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class CartController extends Controller
{
    public function add(Request $request){
        $product = product::find($request->id,['id','name','price','size_options']);
        $is_product_existe = cart::where('product_id' , $product->id)->count();
        
        // dd($product->id);
        if($is_product_existe > 0 ){
            $current_quantity = cart::where('product_id' , $product->id)->value('quantity'); 
            cart::where('product_id' , $product->id)->update([
            'quantity' => $current_quantity + 1,
        ]);
        }else{
            $add_to_cart = cart::create([
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'size_options' => $product->size_options
            ]);
        }
        
        return redirect()->route('shopping-cart');
    }
    public function delete(Request $request){
        
        $product_for_delete = cart::find($request->id);
        $product_for_delete->delete();
        return back();
    }
    
}
