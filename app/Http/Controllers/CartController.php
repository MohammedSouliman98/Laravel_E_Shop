<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Pest\Laravel\delete;

class CartController extends Controller
{
    public function add(Request $request ){
        $user_id = Auth::user()->id;
        $product = product::find($request->id,['id','name','price']);
        $is_product_existe = cart::where('user_id' , $user_id)->where('product_id' , $product->id)->count();
        if($is_product_existe > 0 ){
            $current_quantity = cart::where('product_id' , $product->id)->value('quantity'); 
            cart::where('product_id' , $product->id)->update([
            'quantity' => $current_quantity + 1,
        ]);
        }else{
            $add_to_cart = cart::create([
                'product_id' => $product->id,
                'user_id' =>   $user_id  ,
                'name' => $product->name,
                'price' => $product->price,
            ]);
        }
        
        return back();
    }
    public function delete(Request $request){
        cart::find($request->id)->delete();
        return back();
    }
    
}
