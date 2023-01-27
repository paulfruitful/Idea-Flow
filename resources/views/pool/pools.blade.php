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
  <div class="m-auto p-auto text-center text-black font-bold text-3xl">Latest Ideas</div>
  <div>
    <x-latest-ideas :ideas="$ideas"/>
  </div>
  <div class="grid justify-self-stretch">
    <a class="flex flex-row justify-self-center text-center p-6 m-auto font-bold text-xl hover:text-blue-600 hover:px-3 " href="/pools/ideas">See more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""></a>
</div>
 </div>
</body>
</html>
