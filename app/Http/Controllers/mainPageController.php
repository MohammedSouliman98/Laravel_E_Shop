<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class mainPageController extends Controller
{

    public function index(){
        $product = product::all();

        return view('users.layout.home' ,['products' => $product]);
    }
    public function shop(){
     $product = product::all();

        return view('users.layout.shop',['products' => $product]);
    }
    public function detail(){
     $product = product::all();

        return view('users.layout.shop-details',['products' => $product]);
    }
    public function cart(){
     $product = product::all();

        return view('users.layout.shopping-cart' ,['products' => $product]);
    }
    public function contact(){
        $product = product::all();

        return view('users.layout.contact' ,['products' => $product ]);
    }
}
