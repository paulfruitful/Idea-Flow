@props(['problems'])

<div class="flex flex-col  flex-wrap w-full h-full p-6 ">
 @forelse ($problems as $problem)
 <x-idea :idea="$idea"/>
 @empty
     <p>No Idea</p>
 @endforelse


</div>