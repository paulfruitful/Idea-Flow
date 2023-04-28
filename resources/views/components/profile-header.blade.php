<div class="grid p-8 relative w-full">
<!--Cover Photo-->
<div class="grid justify-self-stretch mb-6 relative p-6 w-full">
    <img src={{auth()->user()->cover_photo?auth()->user()->cover_photo:'d emo pic'}} alt="" class="p-6 relative">

</div>

<!--Profile Photo-->
<div class="rounded-lg  justify-self-start justify-items-center p-6 bg-gray-200 ">
   <img class="p-6 justify-self-start rounded-lg z-2" height="200" width="150" src={{auth()->user()->avatar?auth()->user()->avatar:'https://i.ibb.co/KLLtzGc/avatar-1.png'}} >

</div>





</div>