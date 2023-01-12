<script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
<form action="/create/idea" class="block  p-12 m-6 border-solid border-2  shadow-xl  rounded-md bg-white">
    <div class="relative flex flex-row m-6 p-6 text-center"><h1 class="font-bold text-3xl">Share an Idea</h1></div>
    <div class="relative flex flex-row m-6">
    <label  class="text-xl pr-3">Title:</label>
    <input type="text" placeholder="Idea to solve..." class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none focus:border-sky-500" style="width: 240px" name="title">
</div>
<div class="relative flex flex-col m-6 mt-6">
    <input type="text" placeholder="Idea to solve..." id="edit" class="  placeholder:italic placeholder:text-slate-400 block border-solid border-2 p-6 border-slate-400  focus:outline-none focus:border-sky-500" name="description">
<span class="flex flex-row"><span class="text-gray-400 italic text-md text-center pr-2">Write a brief description about your idea </span>😍</span></div>
</form>

<script>
    CKEDITOR.replace( 'description' );
   
   
</script>

