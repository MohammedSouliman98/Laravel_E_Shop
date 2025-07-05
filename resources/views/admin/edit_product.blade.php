@extends("admin.maindashboard");


@section('title')
   Products
@endsection

@section('content')

<form action="" method="" class="w-full  mx-3">
   @csrf
   <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5"value="{{$porduct->name}}">
   <textarea  name="description" id="description" placeholder="description" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->description  }}" ></textarea>
   <input type="number" name="price" placeholder="price"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->price}}" >
   <input type="text" name="size_options" placeholder="size"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->size_options}}" >
   <input type="file" name="images" placeholder="image"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->images}}" >
   <input type="text" name="category" id="category" placeholder="category" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->category}}" >
   <input type="number" name="rate" placeholder="rate"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->rate}}" >
   <input type="number" name="stock" placeholder="stock"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$porduct->stock}}" >
   <label for="is_trend">trend</label>
   <input type="number"   name="is_trend" >
   
</form>


@endsection