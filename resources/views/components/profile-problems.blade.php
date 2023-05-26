@props(['user','is_user','problems'])
<div class="grid w-full p-6 ">
<div class="grid justify-self-center justify-items-center p-6">
    <p class="text-2xl font-bold italics">Problems</p>
</div>


<div class="flex flex-col  flex-wrap w-full h-full p-3 ">
 @forelse ($problems as $problem)
 <x-user-idea :idea="$problem" :is_user="$is_user"/>
 @empty
     
 <p class="text-center text-gray-500 text-xl">--No Problems--</p>
 @endforelse

</div>
</div>

