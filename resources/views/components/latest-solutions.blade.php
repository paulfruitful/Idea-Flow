@props(['solutions'])

<div class="flex flex-col lg:flex-col flex-wrap w-full h-full p-6 ">
 @forelse ($solutions as $solution)
 <x-solution :solution="$solution"/>
 @empty
     <p>No Idea</p>
 @endforelse


</div>