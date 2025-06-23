@extends('users.layout.index')

@section('title')
   Shop
@endsection

@section('content')

<div class="Our-shop h-100 w-full text-center  bg-blue-200 font-bold text-5xl content-center uppercase">
OUR SHOP
<div class="font-normal text-xl my-5"><a href="">home</a> - <a href="">shop</a></div>
</div>

<div class="flex mt-10">
   <div class="w-1/4">
      <div class="filters mx-10">
         <div class="filter-price border-b py-5 h-80 flex flex-col justify-between">
            <h2 class="font-bold capitalize text-xl ">filter by price</h2>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="shop">
               <label for="all" class="capitalize">all price</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100">0$ - $100</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>

            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100">100$ - $200</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>

            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100">200$ - $500</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100">200$ - $500</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100">200$ - $500</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            
         </div>
         <div class="filter-color border-b py-5 h-80 flex flex-col justify-between">
            <h2 class="font-bold capitalize text-xl ">filter by color</h2>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="shop">
               <label for="all" class="capitalize">all color</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="capitalize">Black</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>

            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="capitalize">red</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>

            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="capitalize">blue</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="capitalize">brown</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="capitalize">white</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            
         </div>
         <div class="filter-size border-b py-5 h-80 flex flex-col justify-between">
            <h2 class="font-bold capitalize text-xl ">filter by size</h2>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="shop">
               <label for="all" class="capitalize">all size</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="uppercase">xs</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>

            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="uppercase">s</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>

            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="uppercase">m</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="uppercase">l</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            <div class="flex justify-between">
               <input type="checkbox" name="shop" id="100">
               <label for="0-100" class="uppercase">xl</label>
               <div class="number-of-product px-2 inline border border-black/20 ">100</div>
            </div>
            
         </div>
      </div>
   </div>
   <div class="w-3/4">
      <div class="products my-10">
         <div class="grid grid-cols-4 gap-4">
            @include('users.pages.products')
         </div>
      </div>
   </div>
</div>
@endsection

