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
      <p class="text-5xl text-white m-auto font-bold "><span class="">Let Your</span>  Ideas Flow </p>
      <p class="text-xl font-bold p-6 mb-4" style="color: #ffffff">Share Your Ideas, Offer Your Solutions and Report Your Problems </p>
      <div class="justify-items-center flex flex-row m-auto">
     <a href="/create/idea" class="p-4 m-auto hover:shadow-md hover:p-3 text-md text-gray-800 flex flex-row font-bold border-solid shadow-xl rounded-md" style="background-color:#59ff26;"><svg style="width:15px; height:20px;" class="mt-1 ml-1 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>New Idea</a>
      
      </div>
      </div>
      </div>
    </div>
    <x-latest-ideas :ideas="$ideas"/>
   
</body>