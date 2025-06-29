<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;

class mainPageController extends Controller
{

    public function index(){
        $product = product::select('name' , 'price','images','id')->simplePaginate(5);
        return view('users.layout.home' ,['products' => $product]);
    }
    public function shop(){
        $product = product::select('name' , 'price','images','id')->simplePaginate(5);
        return view('users.layout.shop',['products' => $product]);
    }
    public function detail(Request $request){
        $product = product::find($request->id, ['name', 'description', 'images' , 'size_options','price']);
        return view('users.layout.shop-details',['product' => $product]);
    }
    public function cart(){
        $products = cart::all();
        return view('users.layout.shopping-cart',['products' => $products]);
    }
    public function contact(){

        return view('users.layout.contact');
    }
}
