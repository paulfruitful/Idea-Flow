@props(['problem','image'])
<div class="flex mt-12 flex-col w-full p-6">
 
    <div class="text-center mb-3 font-bold text-3xl">Description</div>
    <div class="grid m-3 mt-6">
      <div class="justify-self-start"><p class="text-md ">By <span class="font-bold">{{ucwords($problem->author)}}</span></p></div>
      </div>
<div class=" grid mt-4 justify-self-stretch justify-items-center lg:block lg:m-auto">
    <div class="w-full justify-self-center  p-6 lg:block">
      <img src="{{$image}}" alt="">
    </div></div>
    <div class="p-6 text-xl mt-4">
    <p>{{$problem->description}}</p>

</div>

</div>