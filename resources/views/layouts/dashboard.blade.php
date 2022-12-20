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
<!-- Latest Update -->
<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">LATEST UPDATES</h1>
    <hr class="">
  </div>
</div>

<!-- /Latest Update -->

<!-- Project -->
<div class="grid gap-2 place-content-center lg:mt-10 md:mt-8 sm:mt-7 w-full mt-5">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">PROJECT OBJECTIVES</h1>
    <hr>
  </div>
</div>
<div class="bg-sky-50 w-full lg:h-[40rem] grid grid-cols-1 content-center mt-2">
  <div class="flex justify-center w-full">
    <div class="w-3/4 lg:w-full md:flex justify-center gap-4">
      <div class="flex justify-center ">
        <div class="rounded-lg shadow-lg bg-white max-w-xs  grid-cols-3 gap-4">
          <a href="#!" class="">
            <img class="rounded-t-lg " src="img/project1.png" alt=""/>
          </a>
          <div class="p-6 grid grid-cols-1 gap-4">
            <div>
              <h5 class="text-gray-900 text-xl font-medium mb-2 font-bold">Project 1</h5>
            </div>
            <div>
              <p class="text-gray-700 text-base mb-4 text-justify whitespace-normal">
                Coastal erosion trend and management strategies for Region 1
              </p>
            </div>
          </div>
          <button type="button" class="font-bold hover:text-white text-zinc-500 w-full py-2.5 font-medium text-xs uppercase hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">See more</button>
        </div>
      </div>

      <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!">
            <img class="rounded-t-lg" src="img/project2.png" alt=""/>
          </a>
          <div class="p-6 grid grid-cols-1 gap-4">
            <div>
              <h5 class="text-gray-900 text-xl font-medium mb-2 font-bold">Project 2</h5>
            </div>
            <div>
              <p class="text-gray-700 text-base mb-4 text-justify whitespace-normal">
                Assessment, Monitoring, and Prediction of Coastal Flodding of Seelcted Municipalities in Region 1
              </p>
            </div>
          </div>
          <button type="button" class="font-bold hover:text-white text-zinc-500 w-full py-2.5 font-medium text-xs uppercase hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">See more</button>
        </div>
      </div>


      <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!">
            <img class="rounded-t-lg" src="img/project3.png" alt=""/>
          </a>
          <div class="p-6 grid grid-cols-1 gap-4">
            <div>
              <h5 class="text-gray-900 text-xl font-medium mb-2 font-bold">Project 3</h5>
            </div>
            
            <div>
              <p class="text-gray-700 text-base mb-4 text-justify">
                Development of Sceiened-Based Engineering Approach to Coastal Protection in Region 1
              </p>
            </div>
          </div>
          <button type="button" class="font-bold hover:text-white text-zinc-500 w-full py-2.5 font-medium text-xs uppercase hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">See more</button>
        </div>
        
      </div>

      <div class="flex justify-center">
        <div class="rounded-lg shadow-lg bg-white max-w-xs">
          <a href="#!">
            <img class="rounded-t-lg" src="img/project4.png" alt=""/>
          </a>
          <div class="p-4 grid grid-cols-1 gap-2 ">
            <div>
              <h5 class="text-gray-900 text-xl font-medium mb-2 font-bold">Project 4</h5>
            </div>
            <div>
              <p class="text-gray-700 text-base mb-4 text-justify">
                Enhancing Coastal Design and Infrastructure Intervention Through the Establishment of Wave Testing Facility
              </p>
            </div>
          </div>
            <button type="button" class="font-bold hover:text-white text-zinc-500 w-full py-2.5 font-medium text-xs uppercase hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">See more</button>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- /Project -->

<!-- About Us -->
<div class="grid gap-2 place-content-center mt-10">
  <div class="text-center">
    <h1 class="font-medium leading-tight lg:text-5xl md:text-2xl sm:text:xl text-sky-600">ABOUT US</h1>
    <hr class="">
  </div>
</div>


<div class="flex justify-center w-full mt-5">
  <div >
    <div class="xl:w-[90rem] lg:w-[50rem] sm:w-[10rem] text-justify indent-8">
        The Coastal Engineering Research Center or CoastER Center is the country’s first coastal engineering and management research and development center and 
        the hub of innovations for coastal resiliency. This facility will spur the development of innovations that address coastal erosion, development construction 
        materials for coastal protection, policies, and guidelines intended to protect resources from coastal flooding and improve the lives of people in coastal 
        communities. It will also bolster the capability of Filipino engineers towards coastal engineering leading to the development of a master’s degree for coastal 
        engineering.
    </div>
    <hr class="my-6 border-sky-300" />
    <div class="xl:w-[90rem] lg:w-[50rem] sm:w-[10rem] text-justify indent-8">
        The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks. The overall goal of the 
        center is to take the lead in coastal science and engineering studies to better undertand the magniture of certain process and hazards and their impacts
        on the maritime environment including tidal deltas and low-lying lands.
    </div>
  </div>
  
</div>

<!-- /About Us -->

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
          <a href="https://www.dost.gov.ph/"><img src="img/MMSU.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.mmsu.edu.ph/"><img src="img/KYOTO.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.mmsu.edu.ph/"><img src="img/DILIMAN.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.mmsu.edu.ph/"><img src="img/DMMMSU.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.mmsu.edu.ph/"><img src="img/CIVIL.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
      <div class="shrink-0">
          <a href="https://www.mmsu.edu.ph/"><img src="img/DPWH.png" class="object-fill w-20 h-20" alt="#"></a>
      </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
@endsection
