@props(['ideas'])

<div class="flex flex-col lg:flex-row flex-wrap w-full h-full p-6 ">
 @forelse ($ideas as $idea)
 <x-idea :idea="$idea"/>
 @empty
     <p>No Idea</p>
 @endforelse

 <div class="text-center text-3xl font-bold text-black">
    <a class="flex flex-row hover:text-blue-600 hover:px-3 " href="">See more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>

 </div>
</div>