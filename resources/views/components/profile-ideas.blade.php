@props(['user','is_user'])
<div class="grid w-full p-6 ">
<div class="grid justify-self-center justify-items-center p-6">
    <p class="text-2xl font-bold italics">Ideas</p>
</div>


<div class="flex flex-col  flex-wrap w-full h-full p-6 ">
 @forelse ($user->ideas as $idea)
 <x-idea :idea="$idea" :is_user="$is_user"/>
 @empty
     
 <p class="text-center text-gray-500 text-xl">--No Ideas--</p>
 @endforelse


</div>
</div>



