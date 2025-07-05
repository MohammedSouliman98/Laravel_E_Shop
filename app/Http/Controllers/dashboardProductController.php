<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class dashboardProductController extends Controller
{
    public function showall(){
        $data["product"] = product::all();
        return view('admin.product' , ['products' => $data['product']]);
    }
    public function show($id){
        $product = product::find($id);
        $data['show'] = 'show';
        return view('admin.create_product',["porduct" => $product ,'show' => $data['show']]);
    }
    public function edit($id){
        $product = product::find($id);
        $data['edit'] = 'edit';
        return view('admin.edit_product', ['porduct' => $product,'edit' => $data['edit']]);
    }
    public function create(){
        return view('admin.create_product');
    }
    public function store(Request $request){
        $valedated = $request->validate([
            'name'  => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'images'  => 'image',
            'category'  => 'required',
            'size_option'  => 'required',
            'rate'  => 'required',
            'stock'  => 'required',
            'is_trend'  => 'required',
        ]);
        product::create($valedated);
        return view('admin.product');
    }

}
