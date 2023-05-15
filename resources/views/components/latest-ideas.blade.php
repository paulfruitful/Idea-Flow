@props(['ideas','is_user'])

<div class="flex flex-col  flex-wrap w-full h-full p-6 ">
 @forelse ($ideas as $idea)
 <x-idea :idea="$idea" :is_user="$is_user"/>
 @empty
     
 <p class="text-center text-gray-500 text-xl">--No Ideas--</p>
 @endforelse


</div>