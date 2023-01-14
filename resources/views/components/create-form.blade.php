<script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script>
<form action="/create/idea" class="block  p-12 m-6 border-solid border-2  shadow-xl  rounded-md bg-white">
    @csrf
    <div class="relative flex flex-row m-6 p-6 text-center"><h1 class="font-bold text-3xl">Share an Idea</h1></div>
    <div class="relative flex flex-row m-6">
    <label  class="text-xl pr-3">Title:</label>
    <input type="text" placeholder="Idea to solve..." class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none focus:border-sky-500" style="width: 240px; border-bottom-width:1px;" name="title">
</div>
<div class="relative flex flex-col m-6 mt-6">
    <input type="text" placeholder="Idea to solve..." id="edit" class="  placeholder:italic placeholder:text-slate-400 block border-solid border-2 p-6 border-slate-400  focus:outline-none focus:border-sky-500" name="description">
<span class="flex flex-row"><span class="text-gray-400 italic text-md text-center pr-2">Write a brief description about your idea </span>😍</span></div>
<div class="block mt-6 mr-6 ml-6 mb-2 p-6">
    <h1 class="font-bold text-2xl text-center text-gray-700 border-solid">Post Settings</h1>
</div>
<div class="relative flex flex-row flex-nowrap">
<div class="relative flex flex-row mr-3 ">
    <label  class="text-md pr-3">Monetizable:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="sponsor" id="">
    
    <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="true">Yes</option>
    <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="false">No</option>
</select>
</div>
<div class="relative flex flex-row mr-3 ">
    <label  class="text-md pr-3">Privacy:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="privacy" id="">
    
    <option  class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="true">Public</option>
    <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="false">Public</option>
</select>
</div>

<div class="relative flex flex-row mr-3 ">
    <label  class="text-md pr-3">Sector:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="privacy" id="">
    
    <option  class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="true">Public</option>
    <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="false">Public</option>
</select>
</div>

</div>
</form>

<script>
    CKEDITOR.replace( 'description' );
   
   
</script>

