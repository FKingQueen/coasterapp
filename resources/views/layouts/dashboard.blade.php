@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
<div
  id="carouselDarkVariant"
  class="carousel slide carousel-fade carousel-dark relative mt-[58px] "
  data-bs-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators  absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
    <button
      data-bs-target="#carouselDarkVariant"
      data-bs-slide-to="0"
      class="active s "
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      data-bs-target="#carouselDarkVariant"
      data-bs-slide-to="1"
      aria-label="Slide 1"
    ></button>
    <button
      data-bs-target="#carouselDarkVariant"
      data-bs-slide-to="2"
      aria-label="Slide 1"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner relative lg:h-[40rem] w-full overflow-hidden">
    <!-- Single item -->
    <div class="carousel-item active relative float-left w-full">
      <img
        src="img/field1.jpg"
        class="block w-full bg-cover"
        alt="Motorbike Smoke"
      />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.2)"></div>
        </a>
    </div>

    <!-- Single item -->
    <div class="carousel-item relative float-left w-full">
      <img
        src="img/field2.jpg"
        class="block w-full bg-cover"
        alt="Mountaintop"
      />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.2)"></div>
        </a>
    </div>

    <!-- Single item -->
    <div class="carousel-item relative float-left w-full">
      <img
        src="img/field3.jpg"
        class="block w-full"
        alt="Woman Reading a Book"
      />
        <a href="#!">
          <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed opacity-0 hover:opacity-100 transition duration-300 ease-in-out" style="background-color: rgba(251, 251, 251, 0.2)"></div>
        </a>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
    type="button"
    data-bs-target="#carouselDarkVariant"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
    type="button"
    data-bs-target="#carouselDarkVariant"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="grid gap-2 place-content-center lg:mt-10 md:mt-8 sm:mt-7">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">PROJECT OBJECTIVES</h1>
    <hr>
  </div>

  <div class="flex justify-around w-[80rem]">

    <div class="flex justify-center hover:animate-pulse">
      <div class="flex justify-center">
      <div class="rounded-lg shadow-lg bg-white w-[18rem]">
        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
        </a>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2">Project 1</h5>
          <p class="text-gray-700 text-base mb-4 text-justify">
            Coastal erosion trends and management strategies for region 1
          </p>
          <div class="flex justify-end  border">
            <a href="/dashboard" class="text-blue-600 motion-safe:hover:scale-110">readmore...</a>
          </div>  
        </div>
      </div>
      </div>
    </div>

    <div class="flex justify-center">
      <div class="flex justify-center hover:animate-pulse">
      <div class="rounded-lg shadow-lg bg-white w-[18rem]">
        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
        </a>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2">Project 1</h5>
          <p class="text-gray-700 text-base mb-4 text-justify">
            Coastal erosion trends and management strategies for region 1
          </p>
          <div class="flex justify-end  border">
            <a href="/dashboard" class="text-blue-600">readmore...</a>
          </div>  
        </div>
      </div>
      </div>
    </div>

    <div class="flex justify-center">
      <div class="flex justify-center hover:animate-pulse">
      <div class="rounded-lg shadow-lg bg-white w-[18rem]">
        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
        </a>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2">Project 1</h5>
          <p class="text-gray-700 text-base mb-4 text-justify">
            Coastal erosion trends and management strategies for region 1
          </p>
          <div class="flex justify-end  border">
            <a href="/dashboard" class="text-blue-600">readmore...</a>
          </div>  
        </div>
      </div>
      </div>
    </div>

    <div class="flex justify-center">
      <div class="flex justify-center hover:animate-pulse">
      <div class="rounded-lg shadow-lg bg-white w-[18rem]">
        <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
          <img class="rounded-t-lg" src="https://mdbootstrap.com/img/new/standard/nature/182.jpg" alt=""/>
        </a>
        <div class="p-6">
          <h5 class="text-gray-900 text-xl font-medium mb-2">Project 1</h5>
          <p class="text-gray-700 text-base mb-4 text-justify">
            Coastal erosion trends and management strategies for region 1
          </p>
          <div class="flex justify-end  border">
            <a href="/dashboard" class="text-blue-600">readmore...</a>
          </div>  
        </div>
      </div>
      </div>
    </div>

  </div>

</div>
<!-- 
<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-sky-600">LATEST UPDATES</h1>
    <hr class="">
  </div>
  <div class="text-center w-[60rem]">
    <p class="">
      The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. This project is funded by DOST-PCIEERD.
    </p>
     </div>
</div>

<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-sky-600">ABOUT US</h1>
    <hr class="">
  </div>
  <div class="text-center w-[60rem]">
    <p class="">
      The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks in the Philippines. This project is funded by DOST-PCIEERD.
    </p>
     </div>
</div>

<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight text-5xl mt-0 mb-2 text-sky-600">COOP AGENCIES</h1>
    <hr class="">
  </div>
  <div class="flex justify-center">
      <div class="shrink-0">
          <a href="https://www.dost.gov.ph/"><img src="img/DOST.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.dost.gov.ph/"><img src="img/PCIEERD.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.mmsu.edu.ph/"><img src="img/mmsulogo.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
    </div>
</div> -->


<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection
