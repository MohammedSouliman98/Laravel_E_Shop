<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\category;
use App\Models\Color;
use App\Models\product;
use App\Models\Product_option;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class mainPageController extends Controller
{

    public function index(){

        $product = product::select('name' , 'price','images','id')->simplePaginate(5);
        return view('users.layout.home' ,['products' => $product ]);
    }
    public function shop(){
        $product = product::select('name' , 'price','images','id')->paginate(15);
        $size = Size::all()->unique('name');
        $category = category::select('name',"id")->get();
        return view('users.layout.shop',['products' => $product , 'categories' => $category->unique('name') , 'size_options' => $size]);
    }
    public function detail(Request $request){
        $product = product::with('category')->find($request->id, ['name', 'description', 'images' ,'price']);
        $productz = Product::find($request->id)->options->pluck('color_id');
        $product_color = color::whereIn("id" , $productz)->get()->pluck('name');
        $product_size = size::whereIn("id" , $productz)->get()->pluck('name');
        //  dd($product_color);
        return view('users.layout.shop-details',['product' => $product  , 'product_color' => $product_color  , 'product_size' => $product_size] );
    }
    public function cart(){
        $products = cart::where("user_id" , Auth::user()->id)->get();
        return view('users.layout.shopping-cart',['products' => $products]);
    }
    public function contact(){

        return view('users.layout.contact');
    }
    public function filter(Request $request){
        $product = product::query();   
        if($request->has('price')){
                if($request->price == '0-100')
                $product->where('price', '<' ,100);

                if($request->price =='100-200')
                $product->wherebetween('price', [100,200]);

                if($request->price == '200-500')
                $product->wherebetween('price', [200,500]);

                if($request->price == '500-1000')
                $product->wherebetween('price', [500,1000]);

            }
            if($request->has('category')){
                $product->with('category')->where('category_id',request('category'));
            }
            if($request->has('size')){  
               $size =  Size::where('name', request('size'))->get();
            }
            $product->select('name' , 'price','images','id')->get();
            $category = category::select('name',"id")->get();
            return view('users.layout.shop',['products' => $product , 'categories' => $category->unique('name') , 'size_options' => $size ]);
        }
    public function search(Request $request){
        $product = product::select('name' , 'price','images','id','size_options')->where('name', 'like' , "%{$request->search}%")
                    ->orwhere('description', 'like' , "%{$request->search}%")
                    ->paginate(5);
        $category = category::select('name',"id" ,'description')->get();
        return view('users.layout.shop',['products' => $product , 'categories' => $category]);
  
    }

    public function test(){
        // $test = product::with(['options.colors', 'options.sizes'])->find(1);
        // $color = Color::where('id' , $test)->get();
        // return $test;
    }
}
