@extends("admin.maindashboard");


@section('title')
   Products
@endsection

@section('content')



<form action="{{route('user.store')}}" method="POST">
   @csrf
   <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5"value="">
   <input type="email" name="email" id="email" placeholder="Your email" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5"value="">
   <input type="text" name="password" id="password" placeholder="Your password" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5"value="">
<button type="submit" class="bg-blue-500 rounded text-white px-3 py-2 mb-3 w-30 text-center">create</button>
</form>


@endsection