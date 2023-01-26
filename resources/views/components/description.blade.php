@props(['idea'])
<div class="flex mt-12 flex-col w-full p-6">
    <div class="text-center mb-3 font-bold text-3xl">Description</div>
 <div class="grid justify-self-stretch">
<div class="justify-self-end"><p class="text-md ">By <span class="font-bold">{{ucwords($idea->author)}}</span></p></div>
<div class="justify-self-start"><span class="p-3 shadow-sm bg-black text-white border-solid rounded">{{$idea->plan=="combined"?"A Software X Hardware":'A' .' '. ucwords($idea->plan)}}</span></div> 
</div>
<div class=" grid mt-4 justify-self-stretch justify-items-center lg:block lg:m-auto">
    <div class="w-full justify-self-center  p-6 lg:block">
      <img src="{{$idea->image}}" alt="">
    </div></div>
    <div class="p-6 text-xl mt-4">
    <p>{{$idea->description}}</p>

</div>

</div>