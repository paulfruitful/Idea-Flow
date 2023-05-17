@props(['idea','is_user'])
@if ($is_user)
<script>
    modal=document.querySelector("dialog")
    btn=document.querySelector('#btn')
    btn.addEventListener('click',()=>{
        modal.showModal()
    })
    close=document.querySelector('#close')
    close.addEventListener('click',()=>{
        modal.close()
    })
</script>
<a href="/ideas/{{$idea->id}}" class="">
    <div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
        <dialog>
            <ul class="flex p-6 flex-col justify-self-center  z-10 mb-6">
               <li class="my-3 text-xl flex ">      <svg class="svg mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"/></svg> Delete</li>
               <li class="my-3 text-xl flex"><svg class="svg mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"/></svg> Edit</li>
            </ul>
           
            <form method="dialog">
            <div class="justify-self-end">
             <button id="close">Close</button>
            </div>
        </form>
     </dialog>
     <form method="dialog" id="btn">
        <div class="text-center flex flex-row flex-row-reverse p-6 text-blue-600 text-md" style="font-size: 20px;">
          
          <button class="bg-transparent border-none"> 
             <svg xmlns="http://www.w3.org/2000/svg" style="height: 30px; width:30px; margin-top:-5px;" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"/></svg>
       </button> 
   
    </div>
 </form>
    <div class="text-center font-bold p-6 text-xl">-{{$idea->title}}</div>
    <div class="relative grid">
    <div class="relative text-md mb-3 justify-self-start">By <a href="/ideas/{{$idea->id}}" class=" font-bold">You</a></div>
    <div class=" relative justify-self-end ">
    <a class="flex flex-row hover:text-blue-600 hover:px-3 " href="/ideas/{{$idea->id}}">Learn more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
    </div>
    </div>
    </div>
    </a>
   
@else
<a href="/ideas/{{$idea->id}}" class="">
<div class="block p-6 relative bg-white hover:shadow-lg hover:p-8 text-black shadow-md m-4">
    <div class="text-center flex flex-row flex-row-reverse p-6 text-blue-600 text-md" style="font-size: 20px;"><img src="https://cdn-icons-png.flaticon.com/512/9135/9135999.png" class="" style="height: 30px; width:30px; margin-top:-5px;" alt=""><p class="mr-2">{{$idea->tagline}} </p></div>

<div class="text-center font-bold p-6 text-xl">-{{$idea->title}}</div>
<div class="relative grid">
<div class="relative text-md mb-3 justify-self-start">By <a href="/ideas/{{$idea->id}}" class=" font-bold">{{ucwords($idea->author)}}</a></div>
<div class=" relative justify-self-end ">
<a class="flex flex-row hover:text-blue-600 hover:px-3 " href="/ideas/{{$idea->id}}">Learn more <img src="https://cdn-icons-png.flaticon.com/512/2989/2989988.png" style="height: 30px; width:30px;" alt=""> </a>
</div>
</div>
</div>
</a>


@endif

