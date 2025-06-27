@extends('users.layout.index')

@section('title')
   Detail
@endsection

@section('content')
<div class="Our-shop h-100 w-full text-center  bg-blue-200 font-bold text-5xl content-center uppercase">
   shop ditail
   <div class="font-normal text-xl my-5"><a href="">home</a> - <a href="">shop detail</a></div>
</div>

<div class="px-15 my-10 ">
   <div class="flex mb-10 h-125">
      <div class="border-b border-black/10 overflow-hidden w-2/5" style="background-image: url({{ asset($product->images) }}); background-size:contain">
      </div>
      <div class="flex flex-col justify-around w-3/5  px-15 ">
         <h2 class="capitalize font-bold text-3xl">{{$product->name}}</h2>
         <div class="rate">5 star</div>
         <div class="price font-bold">{{$product->price}}$</div>
         <p>{{$product->description}}</p>     
         <form action="" class="h-40 flex flex-col">
            <div class="size flex font-bold my-3">
               <div class="capitalize">size : </div>
               <div action="" class="flex justify-around  ml-5">
                  <div class="">
                     <input type="radio" name="shop" id="xs">
                     <label for="xs" class="capitalize px-3">xs</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="s">
                     <label for="s" class="capitalize px-3">s</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="m">
                     <label for="m" class="capitalize px-3">m</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="l">
                     <label for="l" class="capitalize px-3">l</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="xl">
                     <label for="xl" class="capitalize px-3">xl</label>
                  </div>
               </div>
            </div>
            <div class="color flex font-bold my-3">
               <div class="capitalize">color : </div>
               <div action="" class="flex justify-around  ml-5">
                  <div class="">
                     <input type="radio" name="shop" id="black">
                     <label for="black" class="capitalize px-3">black</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="white">
                     <label for="white" class="capitalize px-3">wihte</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="blue">
                     <label for="blue" class="capitalize px-3">blue</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="red">
                     <label for="red" class="capitalize px-3">red</label>
                  </div>
                  <div class="">
                     <input type="radio" name="shop" id="brown">
                     <label for="brown" class="capitalize px-3">brown</label>
                  </div>
               </div>
            </div>
            <div class="flex">
               <button class="text-6xl bg-amber-200 size-10 text-center content-center" id="minus">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                   </svg>                   
               </button>
               <div class="number w-20 bg-gray-200 h-10 text-2xl font-bold text-center content-center" id="number">1</div>
               <button class="text-5xl bg-amber-200 size-10 text-center content-center" id="plus">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                   </svg>                   
               </button>
               <button type="submit" class="capitalize h-10 px-5 mx-5 font-bold text-center bg-amber-200">Add to cart</button>
            </div>
         </form>
         <div class="share capitalize font-bold">
            share on: 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 inline mx-10">
               <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" clip-rule="evenodd" />
             </svg>
             
             
         </div> 
      </div>
   </div>
</div>

<div class="info-about-product px-15">
   <div class="button flex justify-center border border-white border-b-gray-500">
      <button type="submit" class="w-40 px-6 py-3 text-amber-400 font-bold text-center border border-white focus:border-gray-500 focus:border-b-white focus:text-gray-500 ">Description</button>
      <button type="submit" class="w-40 px-6 py-3 text-amber-400 font-bold text-center border border-white focus:border-gray-500 focus:border-b-white focus:text-gray-500 ">information</button>
      <button type="submit" class="w-40 px-6 py-3 text-amber-400 font-bold text-center border border-white focus:border-gray-500 focus:border-b-white focus:text-gray-500 ">reviews</button>
   </div>
   <div class="info my-10 ">
      <div class="description hidden">
         <h2 class="font-bold text-xl my-5">product description</h2>
         <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur accusamus, veniam, quisquam facere suscipit architecto voluptas tenetur sit nostrum dolorem perferendis laudantium cumque totam repellat, distinctio hic? Pariatur, placeat!lorem
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, inventore dolorem explicabo, ducimus labore consectetur illo reprehenderit reiciendis animi consequatur, cupiditate sequi cum temporibus nisi suscipit ab aut architecto unde.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur accusamus, veniam, quisquam facere suscipit architecto voluptas tenetur sit nostrum dolorem perferendis laudantium cumque totam repellat, distinctio hic? Pariatur, placeat!lorem
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, inventore dolorem explicabo, ducimus labore consectetur illo reprehenderit reiciendis animi consequatur, cupiditate sequi cum temporibus nisi suscipit ab aut architecto unde.
         </p>
      </div>
      <div class="information hidden">
         <h2 class="font-bold text-xl my-5">Additional Information</h2>
         <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur accusamus, veniam, quisquam facere suscipit architecto voluptas tenetur sit nostrum dolorem perferendis laudantium cumque totam repellat, distinctio hic? Pariatur, placeat!lorem
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, inventore dolorem explicabo, ducimus labore consectetur illo reprehenderit reiciendis animi consequatur, cupiditate sequi cum temporibus nisi suscipit ab aut architecto unde.
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur accusamus, veniam, quisquam facere suscipit architecto voluptas tenetur sit nostrum dolorem perferendis laudantium cumque totam repellat, distinctio hic? Pariatur, placeat!lorem
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, inventore dolorem explicabo, ducimus labore consectetur illo reprehenderit reiciendis animi consequatur, cupiditate sequi cum temporibus nisi suscipit ab aut architecto unde.
         </p>
      </div>
      <div class="reviews-section flex gap-5 w-full">
         <div class="w-1/2">
            <h2 class="font-bold text-2xl">1 reviews for "colorful stylish shirt"</h2>
            <div class="flex flex-col">
               <div class="one flex gap-5 my-5">
                  <div class="w-1/10">
                     <img src="img/user.jpg" alt="">
                  </div>
                  <div class="w-9/10 flex flex-col">
                     <h2 class="font-bold">john de-01 jan 2045</h2>
                     <span  class="font-bold">rate</span>
                     <p  class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, maxime enim! Alias illo, voluptatem est consequuntur necessitatibus voluptatibus eos quidem! Commodi sed quibusdam, voluptas dolore ea provident deleniti velit quos?</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="add-review w-1/2 ">
            <h2 class="font-bold text-2xl">leave a review</h2>
            <form action="" class="w-full flex flex-col">
               <h1 class="text-gray-500 text-sm my-5">Your email address will not be published. Required fields are marked *</h1>
               <div class="flex mb-5">
                  <label for="rate" class="text-xl text-gray-500">
                     your rate
                  </label>
                  <input type="range" name="rate" id="rate" class="">
               </div>
               <label for="review" class="text-xl text-gray-500">
                  your review *
               </label>
               <textarea type="textaria" name="Message" id="review"  class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5"></textarea>
               <label for="name" class="text-xl text-gray-500">
                  your name *
               </label>
               <input type="text" name="name" id="name" class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5">
               <label for="email" class="text-xl text-gray-500">
                  your eamil *
               </label>
               <input type="email" name="email" id="email"  class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5">
               <div class="">
                  <button class="bg-amber-200 px-10 py-3">leave your review</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

@endsection

