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
    <div class="block">
    <div class="grid justify-self-stretch justify-items-center mt-3 mb-6  bg-gradient-to-r from-cyan-500 to-blue-700 w-full" style="height: 400px">
      <div class=" justify-self-center m-auto">
      <div class="m-auto flex flex-col">
      <p class="text-2xl lg:text-5xl text-white m-auto font-bold "><span class="">Discover Solutions</span> </p>
      <p class="text-xl font-bold m-auto p-6 mb-4" style="color: #ffffff">Solve Your Problems</p>
      <div class="justify-items-center flex flex-row m-auto">
     <a href="/create/solution" class="p-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md bg-black text-white" >New Idea</a>
      
      </div>
      </div>
      </div>
    </div>
  <div class="text-center m-6 mt-8 font-bold text-3xl">Solution Pool</div>
    <x-latest-solutions :solution="$solutions"/>
 <div class="p-6 m-6">{{$solutions->links()}}</div>  

 <x-footer/>
</body>