@props(['is_user','user','follower'])
<div class="grid p-8 justify-self-stretch relative w-full bg-gradient-to-r from-cyan-500 to-blue-700">






<!--Profile Photo-->
<div class=" rounded-full border-solid z-40 lg:m-16 m-6 justify-self-center  justify-items-center ">
   <img class="p-6 justify-self-center lg:p-3 bg-white shadow-lg rounded-full ml-4 lg:ml-6 relative  z-2" height="200" width="150" src={{auth()->user()->avatar?auth()->user()->avatar:'https://i.ibb.co/KLLtzGc/avatar-1.png'}} >
   <div class="flex flex-col justify-self-center relative">
   <span class="font-bold text-white text-2xl lg:text-3xl lg:m-3 m-4">{{$user->name}}</span>
    <span class="text-md lg:text-xl text-white lg:mx-12 mx-12  italic">Followers: <span class="not-italic">{{auth()->user()->followers?auth()->user()->followers:0}}</span></span>       
   @if($is_user)
   @if ($follower)
         <div class="grid justify-items-center mt-3 mx-12">
   
    <form action="/user/{{request()->user}}/follow" method="POST"> 
      @csrf
    <button type="submit"  class="p-4 mr-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md bg-black text-white" style="">Follow</button>
   
    </form>
    </div>
   @else
   <div class="grid justify-items-center mt-3 mx-12">
   
    <form action="/user/{{request()->user}}/follow" method="POST"> 
      @csrf
    <button type="submit"  class="p-4 mr-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md bg-white text-black" style="">Follow</button>
   
    </form>
    </div>
   @endif
 
   @endif
  </div>
</div>
