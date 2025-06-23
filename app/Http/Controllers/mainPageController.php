<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainPageController extends Controller
{
    public function index(){
        return view('users.layout.home');
    }
    public function shop(){
        return view('users.layout.shop');
    }
    public function detail(){
        return view('users.layout.shop-details');
    }
    public function cart(){
        return view('users.layout.shopping-cart');
    }
}
