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

<!-- Project -->
<div class="grid gap-2 place-content-center lg:mt-10 md:mt-8 sm:mt-7 w-full mt-5">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">PROJECT OBJECTIVES</h1>
    <hr>
  </div>
</div>


<div class="flex justify-evenly w-full mt-5 bg-stone-100 py-8">
    <!-- <div class="max-w-sm overflow-hidden rounded-lg bg-white shadow-md hover:font-normal duration-200 hover:scale-105 hover:shadow-lg cursor-pointer">
      <div class="p-5 flex items-center">
        <p class="text-medium mb-2 text-gray-700 text-justify">
          (1) Provide knowledge know-how Region 1 HEI researchers on coastal erosion research 
          (2) Establish the trends and possible causes of erosion aling the coasts of Region 1
          (3) Identify hotspots of erosion and recommend management options that can be considered by the LGU
        </p>
      </div>
    </div>
    <div class="max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200  hover:font-normal hover:scale-105 hover:shadow-lg cursor-pointer">
      <div class="p-5 flex items-center">
        <p class="text-medium mb-2 py-5 text-gray-700 text-justify">
          Develop an integrated model to assess and predict coastal flooding due to the combined effects of river swelling and storm surges which will serve as a basis
          for sustainable and integrated coastal flood management
        </p>
      </div>
    </div>
    <div class="max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:font-normal hover:scale-105 hover:shadow-lg cursor-pointer">
      <div class="p-5 flex items-center">
        <p class="text-medium mb-2 py-5 text-gray-700 text-justify">
          Establish strategies for coastal protection and climate change mitigation using science-based engineering solutions
        </p>
      </div>
    </div>
    <div class="max-w-sm overflow-hidden rounded-xl bg-white shadow-md duration-200 hover:font-normal hover:scale-105 hover:shadow-lg cursor-pointer">
      <div class="p-5 flex items-center">
        <p class="text-medium mb-2 py-5 text-gray-700 text-justify">Formulate policies that will enhance that resiliency of coastal communities to flooding and storm surge</p>
      </div>
    </div> -->
    <div class="shrink-0">
      <img src="img/coaster.png" class="duration-200 hover:scale-105 cursor-pointer object-fill w-[20rem] h-[20rem]" alt="#">
    </div>
</div>

<!-- /Project -->

<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">LATEST UPDATES</h1>
    <hr class="">
  </div>
</div>

<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">ABOUT US</h1>
    <hr class="">
  </div>
</div>

<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600  ">COOP AGENCIES</h1>
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
</div>


<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection
