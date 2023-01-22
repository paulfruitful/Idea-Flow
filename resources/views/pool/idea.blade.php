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
    @php
     $idea=["title"=>"Keep The Cycle Of Ideas Flowing",
     "description"=>"Build The Next Solution By Implementing Ideas"
]; 
    @endphp
    <x-navbar/>

    <x-latest-ideas :ideas="$ideas"/>
    <x-idea-hero :idea="$idea"/>
</body>