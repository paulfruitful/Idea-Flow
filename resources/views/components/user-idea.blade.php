@props(['idea','is_user'])
@if ($is_user)
<a href="/ideas/{{$idea->id}}" class="">
    <div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
        <dialog>
            <ul class="flex p-6 flex-col bg-white z-10 shadow-md">
               <li class="my-3 text-xl ">Delete</li>
               <li class="my-3 text-xl">Edit</li>
            </ul>
       <form method="dialog">
        <div class="text-center flex flex-row flex-row-reverse p-6 text-blue-600 text-md" style="font-size: 20px;">
          
          <button class="bg-transparent border-none"> 
             <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px; width:30px; margin-top:-5px;" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg>
       </button> 
   
    </div>
 </form>
     </dialog>
    <div class="text-center font-bold p-6 text-xl">-{{$idea->title}}</div>
    <div class="relative grid">
    <div class="relative text-md mb-3 justify-self-start">By <a href="/ideas/{{$idea->id}}" class=" font-bold">You</a></div>
    <div class=" relative justify-self-end ">
    <a class="flex flex-row hover:text-blue-600 hover:px-3 " href="/ideas/{{$idea->id}}">Learn more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
    </div>
    </div>
    </div>
    </a>
   
@else
<a href="/ideas/{{$idea->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
    <div class="text-center flex flex-row flex-row-reverse p-6 text-blue-600 text-md" style="font-size: 20px;"><img src="https://cdn-icons-png.flaticon.com/512/9135/9135999.png" class="" style="height: 30px; width:30px; margin-top:-5px;" alt=""><p class="mr-2">{{$idea->tagline}} </p></div>

<div class="text-center font-bold p-6 text-xl">-{{$idea->title}}</div>
<div class="relative grid">
<div class="relative text-md mb-3 justify-self-start">By <a href="/ideas/{{$idea->id}}" class=" font-bold">{{ucwords($idea->author)}}</a></div>
<div class=" relative justify-self-end ">
<a class="flex flex-row hover:text-blue-600 hover:px-3 " href="/ideas/{{$idea->id}}">Learn more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
</div>
</div>
</div>
</a>


@endif

