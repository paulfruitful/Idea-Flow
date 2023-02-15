
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<div class="relative flex flex-row m-6 p-6 text-center"><h1 class="font-bold text-3xl">Share Your Solution</h1></div>
  <form action="/create/solution" class="block  p-12 m-6 border-solid border-2  shadow-xl  rounded-md bg-white" method="POST" enctype="multipart/form-data">
     @csrf
@if($errors->all())
<div class="flex flex-col">
 
<ul class="p-6 m-auto">
@foreach ($errors->all() as $e)
  <li class="text-red-600 font-bold list-disc">{{$e}}</li>
  <script>alert('Fill the required fields')</script>
@endforeach

</ul>    
</div>

  
@else

@endif 
<div class="relative flex flex-row m-6">
  <label  class="text-xl pr-3">Title:</label>
  <input type="text" placeholder="Name e.g MediStar" class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none w-full focus:border-sky-500" style=" border-bottom-width:2.4px;" name="title">
</div>
<div class="relative flex flex-row m-7 ml-4">
  <label  class="text-xl pr-3">Tagline:</label>
  <input type="text" placeholder="A Solution To Solve " class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none w-full focus:border-sky-500" style=" border-bottom-width:2.4px;" name="tagline">
</div>
<div class=" flex flex-row m-12 ml-4">
  <label  class="text-xl pr-3">Cover Image:</label>
<div class="flex flex-col">
  <input type="file" name="image" >

<input type="text" name="image" placeholder="Or Image Url" class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none w-full mt-4 focus:border-sky-500" >
</div>
</div>
<div class="relative flex flex-col m-6 mt-6">
  <textarea placeholder="Idea to solve..." id="edit" class="  placeholder:italic placeholder:text-slate-400 block border-solid border-2 p-6 border-slate-400  focus:outline-none focus:border-sky-500" name="description"></textarea>
<span class="flex flex-row"><span class="text-gray-400 italic text-md text-center pr-2">Write a brief description of your solution </span>😍</span></div>
<div class="block mt-6 mr-6 ml-6 mb-2 p-6">
  <h1 class="font-bold text-2xl text-center text-gray-700 border-solid">Post Settings</h1>
</div>
<div class="relative flex flex-row flex-wrap">
<div class="relative flex flex-row mr-3 mt-4 ">
  <label  class="text-md pr-3">Monetizable:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="monetizable" id="">
  
  <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="true">Yes</option>
  <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="false">No</option>
</select>
</div>
<div class="relative flex flex-row mr-3 mt-4">
  <label  class="text-md pr-3">Privacy:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="privacy" id="">
  
  <option  class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="true">Public</option>
  <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="false">Only Me</option>
</select>
</div>

<div class="relative flex flex-row mt-4 ">
     <label  class="text-md pr-3">Type:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="type" id="">
  
  <option  class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="software">Software</option>
  <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="hardware">Hardware</option>
   <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="combined">Combined</option>
  
</select>

<div class="relative flex flex-row mt-4 ">
    <label  class="text-md pr-3">Sector:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="" name="sector" id="">
  
    <option  class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="health">Health</option>
    <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="finance">Finance</option>
     <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="agriculture">Agriculture</option>
     
     <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="artificial intelligence">Artificial Intelligence</option>
     
     <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="fashion">Fashion</option>
     
     <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="real estate">Real Estate</option>
    
  </select>
</div>
</div>
</div>

<div class="mt-16 grid justify-items-end">
  <button type="submit" class="p-4 pt-2 pb-2 bg-black text-white font-bold text-md border-solid border-black border-2 shadow-sm hover:bg-white hover:text-black rounded">Share</button>
</div>

</form>

<script>
  CKEDITOR.replace( 'description' );
 
 
</script>

