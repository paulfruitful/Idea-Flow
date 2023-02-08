@props(['idea'])


<div class="relative flex flex-row m-6 p-6 text-center"><h1 class="font-bold text-3xl">Edit Your Idea</h1></div>
  <form action="/idea/{{$idea->id}}/update" class="block  p-12 m-6 border-solid border-2  shadow-xl  rounded-md bg-white" method="POST">
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
  <input type="text" placeholder="Name e.g MediStar" class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none w-full focus:border-sky-500" style=" border-bottom-width:2.4px;" name="title" value="{{$idea->title}}">
</div>
<div class="relative flex flex-row m-7 ml-4">
  <label  class="text-xl pr-3">Tagline:</label>
  <input type="text" placeholder="An Idea To Solve " class=" placeholder:italic placeholder:text-slate-400 block border-solid border-t-0 border-b-2 border-slate-600  focus:outline-none w-full focus:border-sky-500" style=" border-bottom-width:2.4px;" name="tagline" value="{{$idea->tagline}}">
</div>
<div class="relative flex flex-col m-6 mt-6">
  <textarea placeholder="Idea to solve..." id="edit" class="  placeholder:italic placeholder:text-slate-400 block border-solid border-2 p-6 border-slate-400  focus:outline-none focus:border-sky-500" name="description" >{{$idea->description}}</textarea>
<span class="flex flex-row"><span class="text-gray-400 italic text-md text-center pr-2">Write a brief description about your idea </span>😍</span></div>
<div class="block mt-6 mr-6 ml-6 mb-2 p-6">
  <h1 class="font-bold text-2xl text-center text-gray-700 border-solid">Post Settings</h1>
</div>
<div class="relative flex flex-row flex-wrap">
<div class="relative flex flex-row mr-3 mt-4 ">
  <label  class="text-md pr-3">Monetizable:</label>
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="sponsor" id="">
  
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
<select class=" border-solid border-2 border-gray-700 rounded-lg form-select focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Monetizable?" name="plan" id="">
  
  <option  class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="software">Software</option>
  <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="hardware">Hardware</option>
   <option class="border-solid border-2 border-indigo-600 rounded-lg hover:bg-indigo-600 " value="combined">Combined</option>
  
</select>

</div>
</div>

<div class="mt-16 grid justify-items-end">
  <button type="submit" class="p-4 pt-2 pb-2 bg-black text-white font-bold text-md border-solid border-black border-2 shadow-sm hover:bg-white hover:text-black rounded">Update</button>
</div>

</form>


