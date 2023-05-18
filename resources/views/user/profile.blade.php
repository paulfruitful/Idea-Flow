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
    <div>
      <!-- User Heading: Image And Followers-->
      <x-profile-header :is_user="$is_user" :user="$user" :follower="$follower"/>
    </div>
  <div>
    <x-profile-ideas :user="$user" :is_user="$is_user" />
  </div>
</body>