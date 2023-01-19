@props(['idea'])
<a href="/ideas/{{$idea->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
<div class="text-center font-bold p-6 text-xl">{{$idea->title}}</div>
<div class="text-center p-6 text-blue-600 text-md"><span class="text-black font-bold">"</span> {{$idea->tagline}} <span class="text-black font-bold">"</span> </div>
<div class="relative grid">
<div class="relative text-md mb-3 justify-self-start">By <a href="/ideas/{{$idea->id}}" class=" font-bold">{{ucwords($idea->author)}}</a></div>
<div class=" relative justify-self-end ">
<a class="flex flex-row hover:text-blue-600 hover:px-3 " href="">See more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
</div>
</div>
</div>
</a>
