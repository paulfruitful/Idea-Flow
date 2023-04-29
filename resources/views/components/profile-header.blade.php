
<div class="grid p-8 justify-self-stretch relative w-full bg-gradient-to-r from-cyan-500 to-blue-700">






<!--Profile Photo-->
<div class="rounded-full border-solid z-40 lg:m-16 m-6 justify-self-center  justify-items-center ">
   <img class="p-6 justify-self-center lg:p-3 bg-white shadow-lg rounded-full m-3 z-2" height="200" width="150" src={{auth()->user()->avatar?auth()->user()->avatar:'https://i.ibb.co/KLLtzGc/avatar-1.png'}} >
   <span class="font-bold text-white text-2xl lg:text-3xl lg:m-3 m-6">{{auth()->user()->name}}</span>
   @if (auth()->user()->username==request()->user)
     <span class="text-md p-6 font-bold italic">Followers: <span class="not-italic p-3">{{}}</span></span>       
   @endif
</div>





</div>