@props(['comments'])
<div class="p-6 flex flex-col w-full">
    <p class="text-center p-6 font-bold text-xl">Comments</p>
<div class="grid mt-3">
@forelse ($comments as $comment)
    <x-comment :comment="$comment"/>
@empty
    
@endforelse
</div>
</div>