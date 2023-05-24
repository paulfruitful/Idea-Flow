<body>
   

    <!-- Implement the FAB -->

    <button onclick="buttonHandler()" title="Contact Sale"
        class="fixed z-90 bottom-10 right-2  w-20 h-20 rounded-full drop-shadow-lg flex justify-center bg-white shadow-md items-center text-white text-4xl hover:bg-gray-300 hover:drop-shadow-2xl hover:animate-bounce duration-300"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg></button>

    <!-- Javascript code -->
    <script>
        // Do something when the button is clicked
        function buttonHandler() {
            window.location.assign('/logout')
        }   
    </script>
</body>