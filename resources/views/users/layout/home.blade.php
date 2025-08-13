@extends("users.layout.index")

@section('title')
   Home
@endsection

@section("content")

<div class="flex mb-5 lg:mr-10 ">
   <div class="hidden lg:block lg:w-1/4"></div>
   <div class="slider  w-full  lg:w-3/4  h-100 overflow-hidden flex flex-row justify-between items-center" id="slider">
      <div class="back-next-btn size-10 bg-black mx-6" data-btn="back" ></div>
      <div class="back-next-btn size-10 bg-black mx-6" data-btn="next" ></div>
   </div>
</div>

<div class="servies grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2 font-black  text-xl   mx-3">
   <div class="quality-product flex border border-black/20 py-10 justify-center items-center">
      <div class="">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
          </svg>
      </div>
      quality product
   </div>
   <div class="Free-Shipping flex border border-black/20  py-10 justify-center items-center">
      <div class="">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 18.375V5.625ZM21 9.375A.375.375 0 0 0 20.625 9h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 0 0 .375-.375v-1.5Zm0 3.75a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 0 0 .375-.375v-1.5Zm0 3.75a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 0 0 .375-.375v-1.5ZM10.875 18.75a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375h7.5ZM3.375 15h7.5a.375.375 0 0 0 .375-.375v-1.5a.375.375 0 0 0-.375-.375h-7.5a.375.375 0 0 0-.375.375v1.5c0 .207.168.375.375.375Zm0-3.75h7.5a.375.375 0 0 0 .375-.375v-1.5A.375.375 0 0 0 10.875 9h-7.5A.375.375 0 0 0 3 9.375v1.5c0 .207.168.375.375.375Z" clip-rule="evenodd" />
          </svg>
          
      </div>
      Free Shipping
   </div>
   <div class="q14-Day-Return flex border border-black/20 py-10 justify-center items-center ">
      <div class="">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21 3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
          </svg>
          
      </div>
      14-Day Return
   </div>
   <div class="Support flex border border-black/20  py-10 justify-center items-center ">
      <div class="">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
          </svg>
                     
      </div>
      24/7 Support
   </div>
</div>


<div class="porducts mx-3 my-5">
   <div class="grid sm:gird-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
         <div class="h-100 border border-black/20 product-img">
            <div class="number-of-porduct h-15 text-end mx-5 text-black/50 py-3">15 {{trans('product.pordcut')}}</div>
            <div class="h-70 overflow-hidden">
               <img src={{asset("img/cat-1.jpg")}} class="h-full mx-auto" alt="">
            </div>
            <div class="name h-15 font-bold text-2xl mx-5">Men</div>
         </div>
         <div class="h-100 border border-black/20 product-img">
            <div class="number-of-porduct h-15 text-end mx-5 text-black/50 py-3">15 {{trans('product.pordcut')}}</div>
            <div class="h-70 overflow-hidden">
               <img src={{asset("img/cat-2.jpg")}} class="h-full mx-auto" alt="">
            </div>
            <div class="name h-15 font-bold text-2xl mx-5">woman</div>
         </div>
         <div class="h-100 border border-black/20 product-img">
            <div class="number-of-porduct h-15 text-end mx-5 text-black/50 py-3">15 {{trans('product.pordcut')}}</div>
            <div class="h-70 overflow-hidden">
               <img src={{asset("img/cat-3.jpg")}} class="h-full mx-auto" alt="">
            </div>
            <div class="name h-15 font-bold text-2xl mx-5">child</div>
         </div>
   </div>
</div>



@include('users.pages.offer')


<div class="trandy-porducts">
   <div class="titel-of-section w-full text-center my-10">
      <div class="line w-100 h-1 bg-black mx-auto"></div>
      <h1 class="text-4xl font-bold p-5">{{trans('section.Trandy Products')}}</h1>
   </div>
   <div class="products my-10 px-5">
      <div class="w-full grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
         @include('users.pages.products')
      </div>
      <div class="my-3">{{$products->links()}}</div>
   </div>
</div>

<div class="updates w-full bg-blue-200 py-15 text-center ">
   <div class="titel-of-section w-full text-center my-10">
      <div class="line w-100 h-1 bg-black mx-auto"></div>
      <h1 class="text-4xl font-bold p-5">{{trans('section.Stay Updated')}}</h1>
   </div>
   <div class="sm:w-2/3 sm:px-0 px-5 mx-auto text-black/70 font-bold">
      <p>Amet lorem at rebum amet dolores. Elitr lorem dolor sed amet diam labore at justo ipsum eirmod duo labore labore.</p>
   <form action="" class="w-full  mt-10 flex  items-center">
      <input type="text" placeholder="Email Gose Here" class="py-3 px-6 w-lg outline-none h-10 bg-white" placeholder="searsh">
      <button type="submit" class=" h-10 w-35  bg-amber-500 text-back-800">Subscribe</button>
   </form>
   </div>
</div>

<div class="just-arrived ">
   <div class="titel-of-section w-full text-center my-10">
      <div class="line w-100 h-1 bg-black mx-auto"></div>
      <h1 class="text-4xl font-bold p-5">{{trans('section.Just Arrived')}}</h1>
   </div>
   <div class="products my-10 px-5">
      <div class="w-full grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
         @include('users.pages.products')
      </div>
      <div class="my-3">{{$products->links()}}</div>
   </div>
</div>


<div class="sponser my-30">
   <div class="flex w-full overflow-x-scroll overflow-y-hidden ">
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-1.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-2.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-3.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-4.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-5.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-6.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-7.jpg" alt="" class="size-35 "></div>
      <div class="size-35 flex-none border border-black/20 mx-5 "><img src="img/vendor-8.jpg" alt="" class="size-35 "></div>
   </div>
</div>

@endsection