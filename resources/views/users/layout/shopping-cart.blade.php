@extends('users.layout.index')

@section('title')
   Shoping Cart
@endsection

@section('content')

<div class="Our-shop h-100 w-full text-center  bg-blue-200 font-bold text-5xl content-center uppercase">
shopping cart
<div class="font-normal text-xl my-5"><a href="">home</a> - <a href="">shopping cart</a></div>
</div>

<div class="cart  px-15 my-10 flex">
   <div class="table w-2/3">
      <table class=" w-full border border-black/20">
         <thead>
            <tr class="px-6 py-3  bg-gray-200">
               <th class="px-6 py-3">products</th>
               <th class="px-6 py-3">price</th>
               <th class="px-6 py-3">quantity</th>
               <th class="px-6 py-3">total</th>
               <th class="px-6 py-3">size</th>
               <th class="px-6 py-3">remove</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($products as $product)
            <tr>
               <td class="px-6 py-3 text-center border border-black/20">{{$product->name}}</td>
               <td class="px-6 py-3 text-center border border-black/20">{{$product->price}}$</td>
               <td class="px-6 py-3 text-center border border-black/20 ">
                  <div class="flex justify-center">
                     <button class="text-2xl bg-amber-200 size-7 text-center content-center " id="minus">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                         </svg>                      
                     </button>
                     <div class="number w-10 bg-gray-200 h-7  font-bold text-center content-center" id="number">1</div>
                     <button class="text-2xl bg-amber-200 size-7 text-center content-center" id="plus">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                         </svg>                      
                     </button>
                  </div>
               </td>
               <td class="px-6 py-3 text-center border border-black/20">150$</td>
               <td class="px-6 py-3 text-center border border-black/20">Xl , md</td>
               <td class="px-6 py-3 text-center border border-black/20">
                  <button class="text-2xl bg-red-400 size-7 text-center content-center" id="remove">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                      </svg>                   
                  </button>
               </td>
            </tr>
            @endforeach
            
         </tbody>
      </table>
   </div>
   <div class="cart-detail w-1/3 mx-5">
      <form action="" class="border border-black/20 flex mb-5">
         <input type="text" name="" placeholder="coupon code" class="w-2/3 p-3 font-bold" id="">
         <input type="submit" value="Aplly coupon" class="w-1/3 p-3 bg-amber-200 text-gray-600">
      </form>
      <form action="" class="cart-summary border border-black/20">
         <h2 class="font-bold text-xl bg-gray-200 px-6 py-3">cart summary</h2>
         <table class="w-full">
            <tbody class="font-bold border-b border-black/20">
               <tr>
                  <td class="w-1/2 px-6 py-3">subtotal</td>
                  <td class="w-1/2 text-end px-6 py-3">150$</td>
               </tr>
               <tr>
                  <td class="w-1/2  px-6 py-3">subtotal</td>
                  <td class="w-1/2 text-end px-6 py-3">150$</td>
               </tr>
            </tbody>
            <tfoot>
               <tr>
                  <td class="w-1/2 px-6 py-5 capitalize text-xl font-extrabold">total</td>
                  <td class="w-1/2 px-6 py-5 text-end text-xl font-bold">300$</td>
               </tr>
            </tfoot>
         </table>
         <button  class="font-bold px-6 py-3 bg-amber-200 w-full">checkout</button>
      </form>
   </div>
</div>
@endsection