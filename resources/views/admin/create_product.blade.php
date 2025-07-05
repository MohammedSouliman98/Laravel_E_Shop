@extends("admin.maindashboard");


@section('title')
   Products
@endsection

@section('content')

<form action={{$product->route === 'create' ? route('product.store') : ''}} method={{$product->route === 'create' ? 'POST' : ''}} class="w-full  mx-3">
   @csrf
   <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{ $product->route === 'show' ?  "value=$product->name readonly" : ''}}>
   <textarea name="description" id="description" placeholder="description" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{$product->route === 'show' ?  "value=$product->description readonly" : ''}}></textarea>
   <input type="number" name="price" placeholder="price"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{$product->route === 'show' ?  "value=$product->price readonly" : ''}}>
   <input type="number" name="size_options" placeholder="size"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{$product->route === 'show' ?  "value=$product->size_options readonly" : ''}}>
   <input type="file" name="images" placeholder="image"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{$product->route === 'show' ?  "value=$product->images readonly" : ''}}>
   <input type="text" name="category" id="category" placeholder="category" class="w-full px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{$product->route === 'show' ?  "value=$product->category readonly" : ''}}>
   <input type="number" name="rate" placeholder="rate"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5"  {{$product->route === 'show' ?  "value=$product->rate readonly" : ''}}>
   <input type="number" name="stock" placeholder="stock"  class="px-6 py-3 text-xl font-bold text-gray-600 border border-black/10 mb-5" {{$product->route === 'show' ?  "value=$product->stock readonly" : ''}}>
   <label for="is_trend">trend</label>
   <input type="number" value="1"  name="is_trend" >
   @if ($product->route === 'create')
   <div class="">
      <button type="submit" class="bg-amber-200 px-10 py-3">Create</button>
   </div>
   @endif
</form>


@endsection