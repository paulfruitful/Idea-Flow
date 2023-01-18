@props(['ideas'])

<div>
 @forelse ($ideas as $idea)
 
 @empty
     <p>No Idea</p>
 @endforelse
</div>