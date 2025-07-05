@extends("admin.maindashboard");


@section('title')
   Products
@endsection

@section('content')


   <div class="main_dashboard w-6/8 mx-2 overflow-x-auto">
      <a href="{{route('product.create')}}" class="text-white bg-blue-500 px-6 px-3 rounded mb-3">create</a>
      <table class="table w-full border border-black/20 ">
         <thead class="  bg-gray-200 ">
            <th class="px-6 py-3">#Id</th>
            <th class="px-6 py-3">Name</th>
            <th class="px-25 py-3">description</th>
            <th class="px-6 py-3">price</th>
            <th class="px-6 py-3">image</th>
            <th class="px-6 py-3">category</th>
            <th class="px-6 py-3">size option</th>
            <th class="px-6 py-3">rate</th>
            <th class="px-6 py-3">stock</th>
            <th class="px-6 py-3">trend</th>
            <th class="px-6 py-3">action</th>
         </thead>
         @foreach ($products as $product)
         <tbody>
            <tr>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->id}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->name}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->description}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->price}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->image}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->category}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->size_options}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->rate}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->stock}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$product->is_trend}}</td>
               <td class="px-3 py-1 text-center border border-black/20">
                  <div class="flex">
                        <a href="{{route('product.show' , [$product->id])}}" class="px-3 py-1 mx-1 bg-blue-500 text-white rounded">show</a>
                        <a href="{{route('product.edit' , [$product->id])}}" class="px-3 py-1 mx-1 bg-black text-white rounded">edit</a>
                     <form action="">
                        <button type="submit" class="px-3 py-1 mx-1 bg-red-500 rounded">delete</button>
                     </form>
                  </div>
               </td>
            </tr>
         </tbody>
         @endforeach
      </table>
   </div>

@endsection