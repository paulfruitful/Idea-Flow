@props(['problems'])

<div class="flex flex-col  flex-wrap w-full h-full p-6 ">
 @forelse ($problems as $problem)
 <x-problem :problem="$problem"/>
 @empty
     <p class="text-center text-gray-500 text-xl">--No Problems--</p>
 @endforelse


</div>