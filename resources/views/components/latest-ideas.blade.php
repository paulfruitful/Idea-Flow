@props(['ideas'])

<div>
 @forelse ($ideas as $idea)
 <x-idea :idea="$idea"/>
 @empty
     <p>No Idea</p>
 @endforelse
</div>