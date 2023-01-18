@props(['idea'])
<a href="/ideas/{{$idea->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
<div class="text-center font-bold p-6 m-3 text-xl">{{$idea->title}}</div>
<div class="relative ">
<div class="relative text-md ">By <a href="/ideas/{{$idea->id}}" class=" font-bold">{{ucwords($idea->author)}}</a></div>
<div class=" relative ">
<a class="flex flex-row" href="">See more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
</div>
</div>
</div>
</a>
<!---
<a href="https://iconscout.com/icons/right-navigation" target="_blank">Right navigation Icon</a> by <a href="https://iconscout.com/contributors/bombasticon" target="_blank">Bombasticon Studio</a>