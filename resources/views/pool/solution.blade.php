<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="fan-solid.svg">
  <title>IdeaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .svg{
      height:20px ;
      width: 25px;
    }
   
  </style>
</head>
<body class="block">
 
    <x-navbar/>
   <!-- <div class="grid justify-self-stretch justify-items-center mt-3 mb-6  bg-gradient-to-r from-green-300 to-green-700 w-full" style="height: 400px">
      <div class=" justify-self-center m-auto">
      <div class="m-auto flex flex-col">
      <p class="text-2xl lg:text-5xl text-white m-auto font-bold "><span class="">Discover Solutions</span> </p>
      <p class="text-2xl italic m-auto p-6 mb-4" style="color: #ffffff">Solve Your Problems</p>
      <div class="justify-items-center flex flex-row m-auto">
     <a href="/create/solution" class="p-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md bg-black text-white" >New Solution</a>
      
      </div>
      </div>
      </div>
    </div>
  -->
  <div class="flex lg:flex-row flex-col lg:flex-row-reverse justify-between w-full">     
         <div class=" relative order-first m-6">
          <div class="flex block border-solid border-t-0 border-b-2 border-black m-2 ">
          <svg xmlns="http://www.w3.org/2000/svg" class="svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/></svg><input type="text" placeholder="Search Solutions" class="placeholder:text-slate-400   focus:outline-none  focus:border-sky-500">
         </div>
        </div>
  
      <x-solution-tags/>
    </div>

  
  <div class="text-center m-6 mt-8 font-bold text-4xl">Solution Pool</div>
  
  
  </div>
    <x-latest-solutions :solutions="$solutions"/>
 <div class="p-6 m-6">{{$solutions->links()}}</div>  

 <x-footer/>
</body>