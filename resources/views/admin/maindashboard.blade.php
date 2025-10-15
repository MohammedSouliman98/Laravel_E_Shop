@include('users.pages.header')
</head>
<body >
<div class="contianer px-10 border-b border-black/20 py-3">
   <div class="navbar flex m-3 justify-between items-center ">
      <div class="brand flex justify-center items-center text-center">
         <span class="size-15 border border-amber-500/20 text-5xl font-bold text-amber-800/50 content-cneter">E</span>
         <div class="w-30 ml-2 text-4xl font-bold">Shopper</div>
      </div>
      
      <div>
        
      <div id="toggle" class="toggle flex justify-center items-center cursor-pointer  lg:hidden text-black">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
             stroke="currentColor" class="size-8">
             <path stroke-linecap="round" stroke-linejoin="round"
                 d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
         </svg>
     </div> 
      </div>
   </div>
</div>
<div class="">
   <div  class=" w-full bg-gray-300 my-3   lg:hidden">
      <div id="toggle-content" class="navbar hidden  ">
        @if (Auth::user())

        <div class="flex justify-between">
           <div class=" text-3xl font-bold text-amber-800/50 px-6 py-3">Hello <span>{{ Auth::user()->name }}</span></div>
           <div class=" text-3xl font-bold px-6 py-3">Your <span>
              @if (Auth::user()->is_admin == 1)
                  <a class=" text-amber-800/50" href="{{ route('user.index') }}"
                      target="bluck">{{ trans('auth.dashboard') }}</a>
          @endif   
           </span></div>
        </div>
         <div class="flex justify-evenly text-lg mx-5 w-full">
           <ul class=" w-full grid grid-cols-1 font-bold ">
              <a href={{ route('home') }} class="hover:text-amber-800/50 ">{{ trans('index.home') }}</a>
              <a href={{ route('shop') }} class="hover:text-amber-800/50 ">{{ trans('index.shop') }}</a>
              <a href={{ route('detail', 2) }}
                  class="hover:text-amber-800/50 ">{{ trans('index.shop detial') }}</a>
              <a href={{ route('shopping-cart') }}
                  class="hover:text-amber-800/50 ">{{ trans('index.shopping cart') }}</a>
              <a href={{ route('contact') }} class="hover:text-amber-800/50 ">{{ trans('index.contact') }}</a>
          </ul>
          <div class="auth text-center w-full grid grid-cols-1 ">
                  <ul class="grid grid-cols-1 gap-3">
                      <li>
                          <form action="{{ route('logout') }}" method="POST">
                              @csrf
                              <button
                                  class="logout hover:text-amber-800/50 px-3 font-bold">{{ trans('auth.logout') }}</button>
                          </form>
                      </li>
                      <ul class="">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                  </ul>
                  </ul>
              @else
                 <div class="flex justify-evenly w-full p-5">
                    <a href={{ route('login') }}
                    class="login hover:text-amber-800/50 px-3 font-bold  text-3xl">{{ trans('auth.login') }}</a>
                <a href={{ route('register') }}
                    class="register hover:text-amber-800/50 pl-3 font-bold text-3xl">{{ trans('auth.register') }}</a>

                 </div>
              @endif

          </div>
         </div>
      </div>
  </div>
   <div class="flex justify-around mx-10 max-lg:hidden">
      <div class="navbar flex justify-between  text-lg w-full">
         <ul class="flex justify-between items-center w-1/2 h-15 font-bold ">
            <a href={{ route('home')}} class="hover:text-amber-800/50 ">{{trans('index.home')}}</a>
            <a href={{ route('shop')}} class="hover:text-amber-800/50 ">{{ trans('index.shop') }}</a>
            <a href={{route('detail',1)}} class="hover:text-amber-800/50 ">{{ trans('index.shop detial') }}</a>
            <a href={{route('shopping-cart')}} class="hover:text-amber-800/50 ">{{ trans('index.shopping cart') }}</a>
            <a href={{route('contact')}} class="hover:text-amber-800/50 ">{{ trans('index.contact') }}</a>
         </ul>
         <div class="auth w-1/2 flex justify-end items-center  pr-10">
               <ul class="flex justify-end items-center gap-3">
                  <li class="font-bold text-2xl " >
                     Hi <span class="text-amber-800/50">{{ Auth::user()->name }}</span> 
                 </li>
                 @if (Auth::user()->is_admin == 1)
                 <li class="font-bold text-lg hover:text-amber-800/50">
                     <a href="{{ route('user.index') }}"
                         target="bluck">{{ trans('auth.dashboard') }}</a>
                 </li>
             @endif
             <li>
                 <form action="{{ route('logout') }}" method="POST">
                     @csrf
                     <button
                         class="logout  font-bold text-lg hover:text-amber-800/50 px-3">{{ trans('auth.logout') }}</button>
                 </form>
             </li>   
               </ul>    
                      

         </div>
      </div>
   </div>

   <div class="container my-5 mx-5 mx-auto ">
      <div class="sidbar block md:flex  items-center justify-between bg-black w-full h-auto  rounded p-4">
         <div class="admin-info  my-3  flex items-center justify-around">
            <img src="" alt="" class="size-20">
            <div class="span text-white font-bold text-3xl">{{Auth::user() -> name}} </div>
         </div>
         <div class="links ">
            <ul class="text-gray-200 font-bold bg-black flex ">
               <li class="hover:bg-white hover:text-black rounded px-4 py-2 m-3">
                  <a href="{{route('user.index')}}">users</a>
               </li>
               <li class="hover:bg-white hover:text-black rounded px-4 py-2 m-3">
                  <a href="{{route('product.index')}}">products</a>
               </li>
               <li class="hover:bg-white hover:text-black rounded px-4 py-2 m-3">
                  <a href="">orders</a>
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