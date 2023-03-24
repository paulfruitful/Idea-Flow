<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="fan-solid.svg">
  <title>IdeaFlow</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <x-navbar/>
    <div class="flex flex-col">
    <x-solution-hero :solution="$solution" />
    
</div>

<div>
 <x-solution-description :solution="$solution" :image="$image"/>
</div>
<div>
  <x-solution-reaction :solution="$solution" :unliked="$unliked" :liked="$liked"  />
  @php
      
  @endphp
</div>
<div>
  <x-comments :comments="$solution->solutionComment"/>
</div>
<x-solution-comment-form :id="$solution->id"/>

  <div class="m-6 mt-12">
    <h1 class="font-semibold text-center text-3xl">See Similar Ideas</h1>
    <x-latest-solutions :solutions="$similar"/>
  </div>
  
 <div>
  <x-footer/>
 </div>
</body>