@props(['ideas'])

<div>
 @forelse ($ideas as $idea)
 <p>{!! $idea->created_at !!}</p>    
 @empty
     <p>No Idea</p>
 @endforelse
</div>