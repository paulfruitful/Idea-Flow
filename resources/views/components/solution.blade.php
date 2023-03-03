@props(['solution'])
<a href="/solutions/{{$solution->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
    <div class="text-center lg:text-center flex flex-row flex-row-reverse p-6 text-green-600 italic text-md" style="font-size: 20px;"><img src="https://cdn-icons-png.flaticon.com/512/3334/3334338.png" class="" style="height: 30px; width:30px; margin-top:-5px;" alt=""><p class="mr-2">{{$solution->tagline}} </p></div>

<div class="text-center font-bold p-6 text-xl">-{{$solution->title}}</div>
<div class="relative grid">
<div class="relative text-md mb-3 justify-self-start">By <a href="/solutions/{{$solution->id}}" class=" font-bold">{{ucwords($solution->author)}}</a></div>
<div class=" relative justify-self-end ">
<a class="flex flex-row hover:text-blue-600 hover:px-3 " href="/solutions/{{$solution->id}}">Learn more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
</div>
</div>
</div>
</a>
