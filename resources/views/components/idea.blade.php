@props(['idea'])
<a href="/ideas/{{$idea->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
<div class="text-center font-bold p-6 m-3 text-xl">{{$idea->title}}</div>
<div class="text-md ">By <a href="/ideas/{{$idea->id}}" class=" font-bold">{{ucwords($idea->author)}}</a></div>
</div>
</a>