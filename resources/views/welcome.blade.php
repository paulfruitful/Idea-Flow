<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <!-- Container for demo purpose -->
<div>

  <!-- Section: Design Block -->
  <section class="mb-40 background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(
          650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%
        ),
        radial-gradient(
          1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%
        );
      }
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9);
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>
    <nav class="navbar navbar-expand-lg shadow-md py-2 bg-white relative flex items-center w-full justify-between">
      <div class="px-6 w-full flex flex-wrap items-center justify-between">
        <div class="flex items-center">
          <button
            class="navbar-toggler border-0 py-3 lg:hidden leading-none text-xl bg-transparent text-gray-600 hover:text-gray-700 focus:text-gray-700 transition-shadow duration-150 ease-in-out mr-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContentY"
            aria-controls="navbarSupportedContentY"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              class="w-5"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512"
            >
              <path
                fill="currentColor"
                d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"
              ></path>
            </svg>
          </button>
          <a class="navbar-brand text-blue-600" href="#!">
            <svg class="w-5 h-5 ml-2 lg:ml-0 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
              <path fill="currentColor" d="M485.5 0L576 160H474.9L405.7 0h79.8zm-128 0l69.2 160H149.3L218.5 0h139zm-267 0h79.8l-69.2 160H0L90.5 0zM0 192h100.7l123 251.7c1.5 3.1-2.7 5.9-5 3.3L0 192zm148.2 0h279.6l-137 318.2c-1 2.4-4.5 2.4-5.5 0L148.2 192zm204.1 251.7l123-251.7H576L357.3 446.9c-2.3 2.7-6.5-.1-5-3.2z"></path>
            </svg>
          </a>
        </div>
        <div class="navbar-collapse collapse grow items-center" id="navbarSupportedContentY">
          <ul class="navbar-nav mr-auto lg:flex lg:flex-row">
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Team</a>
            </li>
            <li class="nav-item mb-2 lg:mb-0">
              <a class="nav-link block pr-2 lg:px-2 py-2 text-gray-600 hover:text-gray-700 focus:text-gray-700 transition duration-150 ease-in-out" href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">Projects</a>
            </li>
          </ul>
        </div>
        <div class="flex items-center lg:ml-auto">
          <button type="button" class="inline-block px-6 py-2.5 mr-2 bg-transparent text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Login</button>
          <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light">Sign up for free</button>
        </div>
      </div>
    </nav>

    <div class="px-6 py-12 lg:py-24 md:px-12 text-center lg:text-left">
      <div class="container mx-auto xl:px-32 text-gray-800">
        <div class="grid lg:grid-cols-2 gap-12 flex items-center">
          <div class="mt-12 lg:mt-0" style="z-index: 10;">
            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12" style="color: hsl(218, 81%, 95%);">The best offer <br /><span style="color: hsl(218, 81%, 75%);">for your business</span></h1>
            <p class="opacity-70" style="color: hsl(218, 81%, 85%)">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Temporibus, expedita iusto veniam atque, magni tempora mollitia
              dolorum consequatur nulla, neque debitis eos reprehenderit quasi
              ab ipsum nisi dolorem modi. Quos?
            </p>
          </div>
          <div class="mb-12 lg:mb-0 relative">
            <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
            <div id="radius-shape-2" class="absolute shadow-lg"></div>
            <div class="block rounded-lg shadow-lg bg-glass px-6 py-12 md:px-12">
              <form action="/register" method="POST">
                @csrf
                <div class="grid md:grid-cols-2 md:gap-6">
                  <div class="mb-6">
                    <input name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Name"/>
                  </div>
                  <div class="mb-6">
                    <input type="text" name="username" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Username"/>
                  </div>
                </div>
                <input type="email" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address" name="email"/>
                <input type="password" name="password" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password"/>
                <input type="password" name="password_confirmation" class="form-control block w-full px-3 py-1.5 mb-6 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password"/>
               
                <div class="form-check flex justify-center mb-6">
                  <input class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label inline-block text-gray-800" for="flexCheckChecked">
                    Subscribe to our newsletter
                  </label>
                </div>
                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 mb-6 w-full bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Sign up</button>
                <div class="text-center">
                
                </div>
              <div class="flex justify-center">
                 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

</div>
<!-- Container for demo purpose -->
</body>
</html>