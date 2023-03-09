@props(['solutions'])

<div class="flex flex-col  flex-wrap w-full h-full p-6 ">
 @forelse ($solutions as $solution)
 <x-solution :solution="$solution"/>
 @empty
    
 <p class="text-center text-gray-500 text-xl">--No Solutions--</p>
 @endforelse


</div>