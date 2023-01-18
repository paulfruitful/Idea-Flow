@props(['ideas'])

<div class="flex flex-row flex-wrap">
 @forelse ($ideas as $idea)
 <x-idea :idea="$idea"/>
 @empty
     <p>No Idea</p>
 @endforelse
</div>