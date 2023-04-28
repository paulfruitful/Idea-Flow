
<div class="grid p-8 justify-self-stretch relative w-full">


    <span class="text-center text-2xl font-bold">Your Profile</span>





<!--Profile Photo-->
<div class="rounded-full border-solid  z-40 lg:m-16 absolute m-6 justify-self-start justify-items-center ">
   <img class="p-6 justify-self-start rounded-lg z-2" height="200" width="150" src={{auth()->user()->avatar?auth()->user()->avatar:'https://i.ibb.co/KLLtzGc/avatar-1.png'}} >
   <span class="font-bold text-2xl m-3">{{auth()->user()->name}}</span>
</div>





</div>