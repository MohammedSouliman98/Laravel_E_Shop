@extends("admin.maindashboard");


@section('title')
   Dashboard
@endsection

@section('content')


   <div class="main_dashboard w-6/8 mx-2">
      <table class="table w-full border border-black/20">
         <thead class="  bg-gray-200">
            <th class="px-6 py-3">#Id</th>
            <th class="px-6 py-3">Name</th>
            <th class="px-6 py-3">Email</th>
            <th class="px-6 py-3">Is-Admin</th>
            <th class="px-6 py-3">Created AT</th>
            <th class="px-6 py-3">Action</th>
         </thead>
         @foreach ($users as $user)
         <tbody>
            <tr>
               <td class="px-3 py-1 text-center border border-black/20">{{$user->id}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$user->name}}</td>
               <td class="px-3 py-1 text-center border border-black/20">{{$user->email}}</td>
               <td class="px-3 py-1 text-center border border-black/20"> <span class="px-3 py-1 text-center rounded-lg {{$user->is_admin === 1 ? 'bg-green-500' : 'bg-red-500'}}">{{$user->is_admin === 1 ? 'yes' : 'no' }}</span></td>
               <td class="px-3 py-1 text-center border border-black/20">{{$user->created_at}}</td>
               <td class="px-3 py-1 text-center border border-black/20">
                  <div class="flex">
                     @if (Auth::user()->id === $user->id)
                        <a href="" class="px-3 py-1 mx-1 bg-blue-500 text-white rounded">show</a>
                        <a href="" class="px-3 py-1 mx-1 bg-black text-white rounded">edit</a>
                        @else
                        <a href="" class="px-3 py-1 mx-1 bg-blue-500 text-white rounded">show</a>
                        <a href="" class="px-3 py-1 mx-1 bg-black text-white rounded">edit</a>
                     <form action="">
                        <button type="submit" class="px-3 py-1 mx-1 bg-red-500 rounded">delete</button>
                     </form>
                     @endif
                  </div>
               </td>
            </tr>
         </tbody>
         @endforeach
      </table>
   </div>

@endsection