<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="fan-solid.svg">
  <title>IdeaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="block">
 
    <x-navbar/>
   <!-- <div class="block">
    <div class="grid justify-self-stretch justify-items-center mt-3 mb-6  bg-gradient-to-r from-cyan-500 to-blue-700 w-full" style="height: 400px">
      <div class=" justify-self-center m-auto">
      <div class="m-auto flex flex-col">
      <p class="text-3xl lg:text-5xl text-white m-auto font-bold "><span class="">Get Inspired</span> </p>
      <p class="text-xl lg:text-2xl italic m-auto p-6 mb-4" style="color: #ffffff">Implement Ideas</p>
      <div class="justify-items-center flex flex-row m-auto">
     <a href="/create/idea" class="p-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md bg-black text-white" >New Idea</a>
      
      </div>
      </div>
      </div>
    </div>-->
    <div class="flex lg:flex-row flex-col lg:flex-row-reverse justify-between w-full">     
      <div class=" relative order-first m-6">
       <div class="flex block border-solid border-t-0 border-b-2 border-black m-2 ">
       <form action="" class="flex">
         <svg xmlns="http://www.w3.org/2000/svg" class="svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg><input type="text" placeholder="Search Ideas" class="ml-4 placeholder:text-slate-400   focus:outline-none  focus:border-sky-500" name="search">
      </form></div>
     </div>

   <x-idea-tags/>
 </div>
  <div class="text-center m-6 mt-8 font-bold text-3xl">Idea Pool</div>
    <x-latest-ideas :ideas="$ideas"/>
 <div class="p-6 m-6">{{$ideas->links()}}</div>  
 <x-idea-float/>
 <x-footer/>
</body>