@include('users.pages.header')
</head>
<body >
<div class="contianer px-10 border-b border-black/20 py-3">
   <div class="navbar flex m-3 justify-between items-center ">
      <div class="brand flex justify-center items-center text-center">
         <span class="size-15 border border-amber-500/20 text-5xl font-bold text-amber-800/50 content-cneter">E</span>
         <div class="w-30 ml-2 text-4xl font-bold">Shopper</div>
      </div>
   
      <form action="" class="flex border border-black/20 items-center">
         <input type="text" class="py-1 px-3 w-lg outline-none" placeholder="searsh">
         <button type="submit" class="size-10 border-l border-black/20   hover:text-amber-800 px-3"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
          </svg>          
          </button>
      </form>
      <div class="cart-likes flex">
      <div class="likes mx-3 flex rounded border border-black/20 px-2 py-1" >
         <div class="text-amber-800">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
               <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
             </svg>
             
         </div>
       <span>0</span>
       </div>
      <div class="cart ml-3 flex rounded border border-black/20 px-2 py-1">
         <div class="text-amber-800">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
               <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
             </svg>
         </div>
       <span>0</span>
       </div>
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
   <div class="flex">
         <div class="dropmenu-com w-1/4 mx-2 px-10 absolute">
            <div id="dropmenu-btn" class="flex justify-between bg-amber-600/80 w-full h-15 p-3 font-bold" >
               <button class="normal-case">catiories</button>
               <span class="content-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
                </span>
            </div>
            <div class="dropmenu hidden " id="dropmenu">
               <ul class="w-full h-auto bg-white border border-gray-500/50">
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">Dresses</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg border-b border-gray-500/50">home</li>
                  <li class="h-10 p-3 text-lg">home</li>
               </ul>
            </div>
         </div>
         <div class="w-1/4"></div>
      <div class="navbar flex justify-between  text-lg w-3/4">
         <ul class="flex justify-between items-center w-1/2 h-15 font-bold ">
            <a href={{ route('home')}} class="hover:text-amber-800/50 ">{{trans('index.home')}}</a>
            <a href={{ route('shop')}} class="hover:text-amber-800/50 ">{{ trans('index.shop') }}</a>
            <a href={{route('detail',1)}} class="hover:text-amber-800/50 ">shop detail</a>
            <a href={{route('shopping-cart')}} class="hover:text-amber-800/50 ">shopping cart</a>
            <a href={{route('contact')}} class="hover:text-amber-800/50 ">contact</a>
         </ul>
         <div class="auth w-1/2 flex justify-end items-center pr-10">
            @if (Auth::user())
               <ul class="flex gap-3">
                  <li>
                     {{Auth::user() -> name}}
                  </li>
                  @if (Auth::user()->is_admin == 1)
                  <li>
                     <a href="{{route('user.index')}}">Dashboard</a>
                  </li>  
                  @endif
                  <li>
                     <form action="{{route('logout')}}" method="POST">
                     @csrf   
                     <button class="logout hover:text-amber-800/50 px-3" >Logout</button>
                     </form>      
                  </li>    
               </ul>           
            @else
            <a href={{route('login')}} class="login hover:text-amber-800/50 px-3">Login</a>
            <a href={{route('register')}} class="register hover:text-amber-800/50 pl-3">Register</a>
                     
            @endif

         </div>
      </div>
   </div>


   @yield('content')

</div>
@include('users.pages.footer')


</body>
</html>