@props(['comments'])
<div class="p-6 flex flex-col w-full">
@forelse ($comments as $comment)
    <x-comment :comment="$comment"/>
@empty
    
@endforelse
</div>