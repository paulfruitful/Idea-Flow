@props(['is_user'])
<div class="grid p-8 justify-self-stretch relative w-full bg-gradient-to-r from-cyan-500 to-blue-700">






<!--Profile Photo-->
<div class=" rounded-full border-solid z-40 lg:m-16 m-6 justify-self-center  justify-items-center ">
   <img class="p-6 justify-self-center lg:p-3 bg-white shadow-lg rounded-full ml-4 lg:ml-6 relative  z-2" height="200" width="150" src={{auth()->user()->avatar?auth()->user()->avatar:'https://i.ibb.co/KLLtzGc/avatar-1.png'}} >
   <div class="flex flex-col justify-self-center relative">
   <span class="font-bold text-white text-2xl lg:text-3xl lg:m-3 m-3">{{auth()->user()->name}}</span>
    <span class="text-md lg:text-xl text-white lg:mx-12 mx-8  italic">Followers: <span class="not-italic">{{auth()->user()->followers?auth()->user()->followers:0}}</span></span>       
   @if($is_user)
   <div class="justify-items-center flex flex-row m-auto mt-6">
    <a href="/create/idea" class="p-4 mr-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md bg-black text-white" style="">Follow</a>
   
    
    </div>
   @endif
  </div>
</div>





</div>