@extends("users.layout.index")

@section("title")
   Contact
@endsection


@section('content')
<div class="Our-shop h-100 w-full text-center  bg-blue-200 font-bold text-5xl content-center uppercase">
   Contact
   <div class="font-normal text-xl my-5"><a href="">home</a> - <a href="">Contact</a></div>
</div>
<div class="titel-of-section w-full text-center my-10">
   <div class="line w-100 h-1 bg-black mx-auto"></div>
   <h1 class="text-4xl font-bold p-5">Contact Us</h1>
</div>
<div class="flex max-md:flex-col px-15">
   
   <form action="" class="md:w-3/5 w-full flex flex-col">
      <input type="text" name="name" id="name" placeholder="Your Name" class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5">
      <input type="email" name="email" id="email" placeholder="Your Email" class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5">
      <input type="text" name="subject" id="subject" placeholder="Subject" class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5">
      <textarea type="textaria" name="Message" id="Message" placeholder="message" class="w-full px-6 py-3 text-xl font-bold text-gray-600/50 border border-black/10 mb-5"></textarea>
      <div class="">
         <button class="bg-amber-200 px-10 py-3">send message</button>
      </div>
   </form>

   <div class="md:w-2/5 w-full md:ml-5 max-md:my-5 text-gray-500/80">
      <h2 class="font-bold text-2xl text-black">Get In Touch</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere tempora magnam iure error eum obcaecati et magni, autem, blanditiis laborum repellat explicabo repellendus quia quibusdam necessitatibus, maxime quam illo?</p>
      <div class="store-1">
         <h2 class="font-bold text-2xl text-black">store 1</h2>
         <div class="address pr-2 py-2 flex items-center"><span class="inline-block mr-3  text-amber-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
         </svg>
         </span>123 Street, New York, USA</div>
         <div class="email pr-2 py-2 flex items-center"><span class="inline-block mr-3  text-amber-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
         </svg>
         </span>mohammed@gmail.com</div>
         <div class="number pr-2 py-2 flex items-center"><span class="inline-block mr-3  text-amber-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
         </svg>
         </span>+963937958865</div>
      </div>
      <div class="store-1">
         <h2 class="font-bold text-2xl text-black">store 2</h2>
         <div class="address pr-2 py-2 flex items-center"><span class="inline-block mr-3  text-amber-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
         </svg>
         </span>123 Street, New York, USA</div>
         <div class="email pr-2 py-2 flex items-center"><span class="inline-block mr-3  text-amber-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
         </svg>
         </span>mohammed@gmail.com</div>
         <div class="number pr-2 py-2 flex items-center"><span class="inline-block mr-3  text-amber-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
         </svg>
         </span>+963937958865</div>
      </div>
   </div>
</div>

@endsection