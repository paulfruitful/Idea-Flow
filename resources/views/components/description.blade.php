@props(['idea'])
<div class="flex mt-12 flex-col w-full p-6">
    <div class="text-center mb-3 font-bold text-3xl">Description</div>
 <div class="grid justify-self-stretch">
<div class="justify-self-end"><p class="text-md">By <span class="font-bold">{{$idea->author}}</span></p></div>
 </div>
    <div class="p-6 text-xl">
    <p>{{$idea->description}}</p>

</div>

</div>