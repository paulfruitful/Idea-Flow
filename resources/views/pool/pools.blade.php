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
    <a class="grid justify-self-stretch text-center p-6 m-6 font-bold text-2xl hover:text-blue-600 hover:px-3 " href="/pools/ideas">See more </a>

 </div>
</body>
</html>
