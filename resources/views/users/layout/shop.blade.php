@extends('users.layout.index')

@section('title')
   Shop
@endsection

@section('content')

<div class="Our-shop h-100 w-full text-center  bg-blue-200 font-bold text-5xl content-center uppercase">
OUR SHOP
<div class="font-normal text-xl my-5"><a href="">home</a> - <a href="">shop</a></div>
</div>

<div class="lg:flex block mt-10">
   <div class="lg:w-1/4 w-full">
      <form action="{{route('filter')}}" class="filters px-5">
         <a id="filter-btn" class="py-3 text-center font-bold rounded-lg mt-5 text-black cursor-pointer">Show filtter</a>
         <div id="filters" class="max-lg:border-b">
            <button id="filter-btn" class="bg-blue-500 px-6 py-3 text-center font-bold rounded-lg mt-5 text-white cursor-pointer">filter</button>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-1 lg:gap-0 gap-5 ">
               <div class="filter-price lg:border-b py-5 h-80 flex flex-col justify-between">
                  <h2 class="font-bold capitalize text-xl ">filter by price</h2>
                  
                  <div class="flex justify-between">
                     <input type="radio" value="0-100"  name="price" id="100">
                     <label for="100">0$ - $100</label>
                     <div class="number-of-product px-2 inline border border-black/20 ">100</div>
   
                  </div>
                  <div class="flex justify-between">
                     <input type="radio" value="100-200" name="price" id="100-200">
                     <label for="100-200">100$ - $200</label>
                     <div class="number-of-product px-2 inline border border-black/20 ">100</div>
   
                  </div>
                  <div class="flex justify-between">
                     <input type="radio" value="200-500" name="price" id="00-500">
                     <label for="00-500">200$ - $500</label>
                     <div class="number-of-product px-2 inline border border-black/20 ">100</div>
                  </div>
                  <div class="flex justify-between">
                     <input type="radio" value="100-500" name="price" id="100-500">
                     <label for="100-500">500$ - $1000</label>
                     <div class="number-of-product px-2 inline border border-black/20 ">100</div>
                  </div>
                  
               </div>
               <div class="filter-category lg:border-b py-5 h-80 flex flex-col justify-between">
                  <h2 class="font-bold capitalize text-xl ">filter by category</h2>
                  @foreach ($categories as $category)
                  <div class="flex justify-between">
                     <input type="radio" value={{$category->id}}  name='category' id="{{$category->name}}">
                     <label for="{{$category->name}}">{{$category->name}}</label>
                     <div class="number-of-product px-2 inline border border-black/20 ">{{100}}</div>
                  </div>
                  @endforeach
               </div>
               <div class="filter-size lg:border-b py-5 h-80 flex flex-col justify-between">
                  <h2 class="font-bold capitalize text-xl ">filter by size</h2>
                  
                  @foreach ($size_options as $size)
                     <div class="flex justify-between">
                        <input type="radio" value="{{$size->name}}" name="size" id="{{$size->name}}">
                        <label for="{{$size->name}}" class="uppercase">{{$size->name}}</label>
                        <div class="number-of-product px-2 inline border border-black/20 ">100</div>
                     </div>
                  @endforeach
               </div>
            </div>
         </div>
      </form>
   </div>
   <div class="lg:w-3/4 w-full">
      <div class="products my-10 px-5">
         <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @include('users.pages.products')
         </div>
<div class="my-3">{{$products->links()}}</div>
      </div>
   </div>
</div>
@endsection

