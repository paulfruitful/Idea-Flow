@props(['id'])
<div class="p-6 w-full grid justify-self-stretch justify-items-center mt-6">

    <form action="/problem/{{$id}}/comment" method="POST">
        @csrf
    <div class="text-center font-bold text-2xl p-6"><p>Drop A Comment</p></div>
    <div>
    <div class="grid justify-self-center p-6 w-full">
    <textarea placeholder="What do you think?" id="edit"  class="w-72 placeholder:italic placeholder:text-slate-400 block border-solid border-2 p-6 border-slate-400  focus:outline-none focus:border-sky-500" name="comment" style=""></textarea>
     <button type="submit" class="p-3 mt-4 bg-black text-white text-md font-bold justify-self-end rounded">Drop</a>
</form>
</div>
</div>
</div>