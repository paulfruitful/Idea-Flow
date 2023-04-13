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
  <div class="flex-column">
    <x-navbar/>
    <x-pool-hero/>
  </div>
  <div class="m-auto p-auto text-center text-gradient-to-r from-cyan-500 to-blue-700 font-bold text-3xl">Latest Ideas</div>
  <div>
    <x-latest-ideas :ideas="$ideas"/>
  </div>
  <div class="grid justify-self-stretch mb-12">
    <a class="flex flex-row justify-self-center text-center p-6 m-auto  text-xl hover:text-blue-600 active:text-blue-600 hover:px-3 " href="/pools/ideas">See more Ideas<img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>

<div class="m-auto p-auto text-center text-gradient-to-r from-cyan-500 to-blue-700 font-bold text-3xl">Trending Ideas</div>
  <div>
    <x-latest-ideas :ideas="$topIdeas"/>
  </div>
  <div class="grid justify-self-stretch mb-12">
    <a class="flex flex-row justify-self-center text-center p-6 m-auto  text-xl hover:text-blue-600 active:text-blue-600 hover:px-3 " href="/pools/ideas">See more Ideas<img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>

<div class="m-auto p-auto text-center  font-bold text-3xl">Latest Solutions</div>
  <div>
    <x-latest-solutions :solutions="$solutions"/>
  </div>
  <div class="grid justify-self-stretch mb-12">
    <a class="flex flex-row justify-self-center text-center p-6 m-auto  text-xl hover:text-green-600 active:text-green-600 hover:px-3 " href="/pools/solutions">See more Solutions<img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>

<div class="m-auto p-auto text-center  font-bold text-3xl">Trending Solutions</div>
  <div>
    <x-latest-solutions :solutions="$topSolutions"/>
  </div>
  <div class="grid justify-self-stretch">
    <a class="flex flex-row justify-self-center text-center p-6 m-auto  text-xl hover:text-green-600 active:text-green-600 hover:px-3 " href="/pools/solutions">See more Solutions<img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>

<div class="m-auto p-auto text-center  font-bold text-3xl">Latest Problems</div>
<div>
  <x-latest-problems :problems="$problems"/>
</div>
<div class="grid justify-self-stretch mb-12">
  <a class="flex flex-row justify-self-center text-center p-6 m-auto  text-xl hover:text-red-600 active:text-red-600 hover:px-3 " href="/pools/ideas">See more Problems<img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>

<div class="m-auto p-auto text-center  font-bold text-3xl">Trending Problems</div>
<div>
  <x-latest-problems :problems="$topProblems"/>
</div>
<div class="grid justify-self-stretch mb-12">
  <a class="flex flex-row justify-self-center text-center p-6 m-auto  text-xl hover:text-red-600 active:text-red-600 hover:px-3 " href="/pools/ideas">See more Problems <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>

<x-footer/>
 </div>
</body>
</html>
