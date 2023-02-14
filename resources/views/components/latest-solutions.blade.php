@props(['solutions'])

<div class="flex flex-col lg:flex-row flex-wrap w-full h-full p-6 ">
 @forelse ($solutions as $idea)
 <x-idea :idea="$idea"/>
 @empty
     <p>No Idea</p>
 @endforelse


</div>