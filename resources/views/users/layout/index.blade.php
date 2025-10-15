@include('users.pages.header')
</head>

<body>
    <div class="contianer lg:px-10 border-b border-black/20 py-3">
        <div class="navbar lg:flex block items-center">
            <div class="flex justify-between">
                <div class="brand flex lg:justify-center items-center text-center p-2 lg:p-0">
                    <span
                        class="size-15 border border-amber-500/20 text-5xl font-bold text-amber-800/50 content-cneter">E</span>
                    <div class=" ml-2 text-4xl font-bold">Shopper</div>
                </div>
                
                <div id="toggle" class="toggle flex justify-center items-center cursor-pointer  md:hidden text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>
                </div>
            </div>
            <div  class=" w-full bg-gray-300 my-3   md:hidden">
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
                        <a href={{ route('detail', $firstproduct->id) }}
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
            <div class="md:flex w-full justify-between items-center px-5">
                <div class="w-full md:w-6/10  flex justify-center">
                    <form action="{{ route('search') }}" method="GET"
                        class="flex w-full border border-black/20 items-center">
                        @csrf
                        <input type="text" name="search" class="py-1 px-3 w-full outline-none" placeholder="search">
                        <button type="submit"
                            class="size-10 border-l border-black/20   hover:text-amber-800 px-3 "><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </button>
                    </form>
                </div>

                <div class="cart-likes flex justify-center sm:justify-around items-center gap-5 md:w-auto">
                    <div class="likes">
                        <div
                            class="cursor-pointer  h-10 flex justify-center items-center px-2 py-1 rounded border border-black/20">
                            <div class="text-amber-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                                </svg>
                            </div>
                            <span>0</span>
                        </div>
                    </div>
                    <div class="cart-btn h-10 relative ml-3 flex " id="cart-btn">
                        <div
                            class="cursor-pointer flex justify-center items-center px-2 py-1 rounded border border-black/20">
                            <div class="text-amber-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-6">
                                    <path
                                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                                </svg>
                            </div>
                            <span>{{ Auth::check() ? $allcart->count() : 0 }}</span>
                        </div>
                        <div class="cart-detail w-auto min-h-20 max-h-100 overflow-y-scroll bg-blue-300  border-2 border-gray-500 overflow-hidden rounded-lg absolute  hidden -right-46 max-md:top-15 md:right-20 "
                            id="cart-detail">
                            <table class="">
                                <thead>
                                    <tr class="px-3 py-3  bg-gray-200">
                                        <th class="px-6 py-3">name</th>
                                        <th class="px-6 py-3">price</th>
                                        <th class="px-6 py-3">quantity</th>
                                        <th class="px-6 py-3">remove</th>
                                    </tr>
                                </thead>
                                <tbody class="font-bold">
                                    @auth
                                        @foreach ($allcart as $cart)
                                            <tr>
                                                <td class="px-6 py-3 text-center border border-black/20"><a
                                                        href=>{{ $cart->name }}</a></td>
                                                <td class="px-6 py-3 text-center border border-black/20">
                                                    {{ $cart->price }}$</td>
                                                <td class="px-6 py-3 text-center border border-black/20 ">
                                                    <div class="flex justify-center">
                                                        <div class="number w-10   font-bold text-center content-center"
                                                            id="number">{{ $cart->quantity }}</div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-3 text-center border border-black/20">
                                                    <form action={{ route('delete_from_cart', [$cart->id]) }}
                                                        method='Post'>
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="text-2xl bg-red-400 size-7 text-center content-center cursor-pointer"
                                                            id="remove">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                                class="size-7">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18 18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endauth

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <ul class="">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="">
        <div class="flex justify-between">
            <div class="dropmenu-com hidden lg:block w-1/4 mx-2 px-10 absolute">
                <div id="dropmenu-btn" class="flex justify-between bg-amber-600/80 w-full h-15 p-3 font-bold">
                    <button class="normal-case">{{ trans('index.category') }}</button>
                    <span class="content-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
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
            <div class="w-1/4 hidden lg:block"></div>
            <div class="navbar  flex justify-between  text-lg mx-5 w-full lg:w-3/4 max-md:hidden">
                <ul class="flex justify-between items-center w-2/3 h-15 font-bold ">
                    <a href={{ route('home') }} class="hover:text-amber-800/50 ">{{ trans('index.home') }}</a>
                    <a href={{ route('shop') }} class="hover:text-amber-800/50 ">{{ trans('index.shop') }}</a>
                    <a href={{ route('detail', $firstproduct->id) }}
                        class="hover:text-amber-800/50 ">{{ trans('index.shop detial') }}</a>
                    <a href={{ route('shopping-cart') }}
                        class="hover:text-amber-800/50 ">{{ trans('index.shopping cart') }}</a>
                    <a href={{ route('contact') }} class="hover:text-amber-800/50 ">{{ trans('index.contact') }}</a>
                </ul>
                <div class="auth w-1/3 flex justify-end items-center text-center pr-10">
                    @if (Auth::user())
                        <ul class="gird grid-cols-1 gap-3">
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
                    @else
                        <a href={{ route('login') }}
                            class="login hover:text-amber-800/50 px-3  font-bold text-3xl ">{{ trans('auth.login') }}</a>
                        <a href={{ route('register') }}
                            class="register hover:text-amber-800/50 pl-3 font-bold text-3xl ">{{ trans('auth.register') }}</a>

                    @endif

                </div>
            </div>
        </div>


        @yield('content')

    </div>
    @include('users.pages.footer')


</body>

</html>
