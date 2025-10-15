@extends("admin.maindashboard");


@section('title')
   Products
@endsection

@section('content')

<form action={{route('product.update',$product->id )}} method="POST" class="w-full  mx-3">
   @csrf
   {{-- @method('PUT') --}}
   <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5"value="{{$product->name}}">
   <textarea  name="description" id="description" placeholder="description" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->description  }}" ></textarea>
   <input type="number" name="price" placeholder="price"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->price}}" >
   <input type="text" name="size_options" placeholder="size"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->size_options}}" >
   <input type="file" name="images" placeholder="image"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->images}}" >
   <input type="text" name="category" id="category" placeholder="category" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->category->name}}" >
   <input type="number" name="rate" placeholder="rate"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->rate}}" >
   <input type="number" name="stock" placeholder="stock"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" value="{{$product->stock}}" >
   <label for="is_trend">trend</label>
   <input type="number"   name="is_trend" >
   <div class="">
      <button type="submit" class="bg-amber-200 px-10 py-3">Create</button>
   </div>
</form>


@endsection