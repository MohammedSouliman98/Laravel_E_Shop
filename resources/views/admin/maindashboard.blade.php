@include('users.pages.header')
</head>
<body >
<div class="contianer px-10 border-b border-black/20 py-3">
   <div class="navbar flex m-3 justify-between items-center ">
      <div class="brand flex justify-center items-center text-center">
         <span class="size-15 border border-amber-500/20 text-5xl font-bold text-amber-800/50 content-cneter">E</span>
         <div class="w-30 ml-2 text-4xl font-bold">Shopper</div>
      </div>
   
      <ul class="">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
      </ul>
   </div>
</div>
<div class="">
   <div class="flex justify-around mx-10">
      <div class="navbar flex justify-between  text-lg w-full">
         <ul class="flex justify-between items-center w-1/2 h-15 font-bold ">
            <a href={{ route('home')}} class="hover:text-amber-800/50 ">{{trans('index.home')}}</a>
            <a href={{ route('shop')}} class="hover:text-amber-800/50 ">{{ trans('index.shop') }}</a>
            <a href={{route('detail',1)}} class="hover:text-amber-800/50 ">shop detail</a>
            <a href={{route('shopping-cart')}} class="hover:text-amber-800/50 ">shopping cart</a>
            <a href={{route('contact')}} class="hover:text-amber-800/50 ">contact</a>
         </ul>
         <div class="auth w-1/2 flex justify-end items-center pr-10">
               <ul class="flex gap-3">
                  <li>
                     {{Auth::user() -> name}}
                  </li>
                  @if (Auth::user()->is_admin == 1)
                  <li>
                     <a href="{{route('dashboard')}}">Dashboard</a>
                  </li>  
                  @endif
                  <li>
                     <form action="{{route('logout')}}" method="POST">
                     @csrf   
                     <button class="logout hover:text-amber-800/50 px-3" >Logout</button>
                     </form>      
                  </li>    
               </ul>           

         </div>
      </div>
   </div>

   <div class="container my-5 mx-5 flex ">
      <div class="sidbar bg-black w-2/8 h-full rounded py-4">
         <div class="admin-info my-3 flex items-center justify-around">
            <img src="" alt="" class="size-20">
            <div class="span text-white">admin user name </div>
         </div>
         <div class="links">
            <ul class="text-gray-200 font-bold bg-black  ">
               <li class="hover:bg-white hover:text-black rounded px-4 py-2 m-3">
                  <a href="{{route('dashboard')}}">Dashboard</a>
               </li>
               <li class="hover:bg-white hover:text-black rounded px-4 py-2 m-3">
                  <a href="{{route('show_products')}}">Order</a>
               </li>
               <li class="hover:bg-white hover:text-black rounded px-4 py-2 m-3">
                  <a href="">Payments</a>
               </li>
            </ul>
         </div>
      </div>
   @yield('content')
   </div>

</div>
@include('users.pages.footer')


</body>
</html>