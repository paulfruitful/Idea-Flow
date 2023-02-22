@props(['problem'])
<a href="/problems/{{$problem->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
    <div class="text-center lg:text-center flex flex-row flex-row-reverse p-6 text-blue-600 text-md" style="font-size: 20px;"><img src="https://cdn-icons-png.flaticon.com/512/9135/9135999.png" class="" style="height: 30px; width:30px; margin-top:-5px;" alt=""></div>

<div class="text-center font-bold p-6 text-xl">-{{$problem->title}}</div>
<div class="relative grid">
<div class="relative text-md mb-3 justify-self-start">By <a href="/problems/{{$problem->id}}" class=" font-bold">{{ucwords($problem->author)}}</a></div>
<div class=" relative justify-self-end ">
<a class="flex flex-row hover:text-blue-600 hover:px-3 " href="/problems/{{$problem->id}}">Learn more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
</div>
</div>
</div>
</a>
