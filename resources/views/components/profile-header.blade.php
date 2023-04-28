<div class="grid p-8 relative w-full">
<!--Cover Photo-->
<div class="grid justify-self-stretch mb-6 relative p-6 w-full">
    <img src={{auth()->user()->cover_photo?auth()->user()->cover_photo:'https://th.bing.com/th/id/R.be2d887f773575b6bac522a262fa484e?rik=1Xo%2fiBKoNeHC%2fA&pid=ImgRaw&r=0'}} alt="" class="p-6 relative">

</div>

<!--Profile Photo-->
<div class="rounded-full border-solid  z-40 lg:m-16 absolute m-6 justify-self-start justify-items-center bg-gray-200 ">
   <img class="p-6 justify-self-start rounded-lg z-2" height="200" width="150" src={{auth()->user()->avatar?auth()->user()->avatar:'https://i.ibb.co/KLLtzGc/avatar-1.png'}} >

</div>





</div>