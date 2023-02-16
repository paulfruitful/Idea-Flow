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
    <x-idea-hero :idea="$solution" :type="solution"/>
    
</div>

<div>
 <x-description :idea="$solution" :image="$image"/>
</div>
<div>
  <x-reaction :idea="$solution" :unliked="$unliked" :liked="$liked" :type="solutions" />
  @php
      
  @endphp
</div>
<div>
  <x-comments :comments="$solution->solutionComment"/>
</div>
<x-comment-form :id="$solution->id"/>
 <div>
  <x-footer/>
 </div>
</body>