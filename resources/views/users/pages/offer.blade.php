<div class="offer">
   <div class="grid grid-cols-2 gap-5 ">
         <div class="flex justify-between bg-red-200 pt-10">
            <img src={{asset("img/offer-1.png")}} class="w-35" alt="">
            <div class="text-end mr-20">
               <h1 class=" text-2xl text-amber-500">20% off the all order</h1>
               <p class="text-4xl font-bold my-8">Spring Collection</p>
               <button class="w-35 h-10 text-amber-500 border border-amber-500/50 hover:text-black hover:bg-amber-500 transition">{{ trans('offer.shop now') }}</button>
            </div>
         </div>
         <div class="flex justify-between bg-red-200 pt-10">
            <div class="text-start ml-20">
               <h1 class=" text-2xl text-amber-500">20% off the all order</h1>
               <p class="text-4xl font-bold my-8">Winter Collection</p>
               <button class="w-35 h-10 text-amber-500 border border-amber-500/50 hover:text-black hover:bg-amber-500 transition">{{ trans('offer.shop now') }}</button>
            </div>
            <img src={{asset("img/offer-2.png")}} class="w-45" alt="">
         </div>
   </div>
</div>