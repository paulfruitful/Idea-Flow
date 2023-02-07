@props(['comment'])
<div class="p-8 w-full lg:w-1/2 border-solid shadow-md justify-self-center flex flex-col">
<div class="grid">
<div class="justify-self-start text-md mb-3">{{$comment->comment}}</div>
<div class="justify-self-end font-bold">- {{$comment->username}}</div>
</div>
</div>