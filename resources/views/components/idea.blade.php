@props(['idea'])

<div class="block p-6 relative bg-white text-black shadow-md m-4">
<div class="text-center font-bold p-6 m-3 text-xl">{{$idea->title}}</div>
<div class="text-md">By {{ucwords($idea->author)}}</div>
</div>