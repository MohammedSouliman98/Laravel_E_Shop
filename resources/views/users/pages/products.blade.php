
@foreach ($products as $product)

   <div class="product-img border border-black/10">
      <div class="border-b border-black/10 overflow-hidden">
        <img src={{ asset($product->images) }} class="mx-auto" alt="">
      </div>
      <div class="body font-bold my-10">
         <div class="title text-center">{{$product->name}}</div>
         <div class="price flex justify-center">
            <div class="new-price px-5">{{$product->price}}$</div>
            <div class="old-price px-5">{{$product->price}}$</div>
         </div>
      </div>
      <div class="flex  buttons border-t border-black/10 text-center">
         <a href={{route("detail", $product->id )}} class="w-1/2  p-2 flex justify-around items-center hover:text-amber-800 capitalize"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-amber-800">
            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
            <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
          </svg>
           {{trans('product.view Details')}}</a>
         <a  href={{route('add_to_cart',$product->id )}} class="w-1/2  p-2 flex justify-around items-center hover:text-amber-800 capitalize">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-amber-800">
            <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
          </svg>
            {{trans('product.Add To Cart')}}</a>
      </div>
   </div> 
   @endforeach
