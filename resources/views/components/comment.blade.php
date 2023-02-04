@props(['comment'])
<div class="p-6 w-full flex flex-col border-solid border-2 border-gray-500">
<div class="grid justify-self-stretch">
<div class="text-center text-md">{{$comment->comment}}</div>
<div class="justify-self-end">{{$comment->username}}</div>
</div>
</div>