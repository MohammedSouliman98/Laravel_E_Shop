<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Product_option;
use App\Models\Size;
use Illuminate\Http\Request;

class dashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =  $products = Product::with(['sizes', 'colors'])->get(); // Eager load sizes and colors
        return view('admin.product' , ['products' =>  $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = product::find(2); 
        $data['route'] = 'create';
        return view('admin.create_product',['product' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valedated = $request->validate([
            'name'  => 'required',
            'description'  => 'required',
            'price'  => 'required',
            'category'  => 'required',
            'size_options'  => 'required',
            'rate'  => 'required',
            'stock'  => 'required',
            'is_trend'  => 'required',
        ]);
        product::create($valedated);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = product::find($id);
        $data['route'] = 'show';
        return view('admin.create_product',["product" => $data ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = product::find($id);
        $data['route'] = 'edit';
        return view('admin.edit_product', ['product' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::find($id)->delete();
        return back();
    }
}
