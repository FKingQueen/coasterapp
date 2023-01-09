<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'COASTER') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <style>
        ul.breadcrumb li+li::before {
            content: "\276F";
            padding-left: 8px;
            padding-right: 4px;
            color: inherit;
        }

        ul.breadcrumb li span {
            opacity: 60%;
        }

        #sidebar {
            -webkit-transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
            transition: all 300ms cubic-bezier(0, 0.77, 0.58, 1);
        }

        #sidebar.show {
            transform: translateX(0);
        }

        #sidebar ul li a.active {
            background: #1f2937;
            background-color: #1f2937;
        }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
</head>
<body>
    <div id="app">

        <!-- Navbar start -->
        <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-between bg-[#0d2247] lg:px-20 md:px-3 sm:px-1 border-b-4 border-cyan-900 ">
            <div class="px-5 xl:px-12 py-2 flex w-full items-center {{ route('login') == url()->current() || route('register') ==  url()->current() ? 'hidden' : '' }}">
                <div class="items-center flex space-x-3">
                    <div class="shrink-0 hidden md:flex">
                        <a href="/dashboard"><img src="img/coaster.png" class="duration-200 hover:scale-110 cursor-pointer object-fill w-10 h-10" alt="#"></a>
                    </div>
                    <div class="font-sans pointer tracking-widest text-white font-semibold text-[13px] hidden md:flex">
                        <a href="/dashboard" class="flex 
                    cursor-pointer text-transparent bg-clip-text font-bold text-white hover:bg-gradient-to-r hover:from-sky-900 hover:to-cyan-500">
                        COASTAL ENGINEERING, MANAGEMENT RESEARCH <br> & DEVELOPMENT CENTER
                        </a>
                    </div>
                    <div class="font-sans pointer tracking-widest text-white text-[15px] font-semibold flex md:hidden">
                            <a href="/dashboard"><img src="img/coastername.png" class="duration-200 hover:scale-110 cursor-pointer object-fill w-32" alt="#"></a>
                        </a>
                    </div>
                </div>
                    
                <!-- Nav Links -->
                <ul class="hidden lg:flex text-white px-5 mx-auto text-[9px] font-semibold font-heading space-x-8 ">
                    <!-- About -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = ! open" type="button" class="font-sans md:text-lg flex text-white hover:text-white
                        cursor-pointer transition-colors duration-300" aria-expanded="false">
                            ABOUT
                            <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-white h-7 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute left-1/2 z-full mt-3 w-screen w-60 -translate-x-1/2 transform px-5 sm:px-0">

                            <div class="overflow-hidden shadow-lg ring-1 ring-black  ring-opacity-5">
                                <div class="relative grid gap-6 bg-stone-700 border-x-4 px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="#" class="-m-3 flex items-start p-2  hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">ABOUT</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">CONTACT</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /About -->
                    <!-- Services -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = ! open" type="button" class="font-sans md:text-lg flex text-white hover:text-white
                        cursor-pointer transition-colors duration-300 " aria-expanded="false">
                            SERVICES
                            <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-white h-7 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute left-1/2 z-full mt-3 w-screen w-60 -translate-x-1/2 transform px-5 sm:px-0">

                            <div class="overflow-hidden shadow-lg ring-1 ring-black  ring-opacity-5">
                                <div class="relative grid gap-6 bg-stone-700 border-x-4 px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">TIDAL & WAVE</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">WEATHER</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">MAP</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Services -->
                    <!-- Project -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = ! open" type="button" class="font-sans md:text-lg flex text-white hover:text-white
                        cursor-pointer transition-colors duration-300" aria-expanded="false">
                            PROJECT
                            <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-white h-7 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-90"
                            class="absolute left-1/2 z-full mt-3 w-screen w-80 -translate-x-1/2 transform px-1 sm:px-0">

                            <div class="overflow-hidden shadow-lg ring-1 ring-black  ring-opacity-5">
                                <div class="relative grid gap-6 bg-stone-700 border-x-4 px-5 py-6 sm:gap-8 sm:p-8">
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">COASTAL EROSION TRENDS AND MANAGEMENT STRATEGIES FOR REGION 1</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">ASSESSMENT MONITORING, AND PREDICTION OF COASTAL FLOODING OF SELECTED MUNICIPALITIES IN REGION 1</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">DEVELOPMENT OF SCIENCE-BASED ENGINEERING APPROACH TO COASTAL PROTECTION IN REGION 1</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:shadow-[inset_20rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">ENHANCING COASTAL DESIGN AND INFRASTRUCTURE INTERVENTION THROUGH THE ESTABLISHMENT OF WAVE TESTING FACILITY</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Project -->
                </ul>
                <!-- Header Icons -->
                <div class="hidden xl:flex items-center space-x-5 items-center">
                
                </div>
            </div>

            <!-- Search -->
            <!-- <div class="flex items-center justify-center">
                <div class=" rounded-lg bg-gray-200">
                    <div class="flex">
                    <div class="flex w-10 items-center justify-center rounded-tl-lg rounded-bl-lg border-r border-gray-200 bg-white p-4">
                        <svg viewBox="0 0 20 20" aria-hidden="true" class="pointer-events-none absolute w-5 fill-gray-500 transition">
                        <path d="M16.72 17.78a.75.75 0 1 0 1.06-1.06l-1.06 1.06ZM9 14.5A5.5 5.5 0 0 1 3.5 9H2a7 7 0 0 0 7 7v-1.5ZM3.5 9A5.5 5.5 0 0 1 9 3.5V2a7 7 0 0 0-7 7h1.5ZM9 3.5A5.5 5.5 0 0 1 14.5 9H16a7 7 0 0 0-7-7v1.5Zm3.89 10.45 3.83 3.83 1.06-1.06-3.83-3.83-1.06 1.06ZM14.5 9a5.48 5.48 0 0 1-1.61 3.89l1.06 1.06A6.98 6.98 0 0 0 16 9h-1.5Zm-1.61 3.89A5.48 5.48 0 0 1 9 14.5V16a6.98 6.98 0 0 0 4.95-2.05l-1.06-1.06Z"></path>
                        </svg>
                    </div>
                    <input type="text"  class="w-full bg-white pl-2 text-base font-semibold outline-0" placeholder="" />
                    <button class="bg-blue-600 p-1 rounded-tr-lg rounded-br-lg text-white hover:bg-blue-800 transition-colors">Search</button>
                    </div>
                </div>
            </div> -->
            <!-- /Search -->

            <!-- Sidebar -->
            <button id="btnSidebarToggler" type="button" class=" text-2xl lg:invisible md:visible sm:visible text-white hover:text-gray-200">
                <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="hidden h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <!-- /Sidebar -->
        </nav>
        <!-- Navbar end -->

        <!-- Sidebar start-->
        <div id="containerSidebar" class="z-40">
            <div class="navbar-menu relative z-40">
                <nav id="sidebar"
                    class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-sky-900 pt-6 pb-8 sm:max-w-xs lg:w-80">
                    <!-- one category / navigation group -->
                    <div class="px-4 pb-6">
                        <ul class="mb-8 text-sm font-medium">
                            <li>
                                <router-link class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"  to='/' exact>HOME</router-link>
                            </li>
                            <li>
                                <router-link class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" to='/services'>SERVICES</router-link>
                            </li>
                            <li>
                                <router-link class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600" to='/about'>ABOUT</router-link>
                            </li>
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                    href="#link1">
                                    <span class="select-none">Blog</span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                    href="#link1">
                                    <span class="select-none">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- navigation group end-->
                </nav>
            </div>
        </div>
        <!-- Sidebar end -->

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
                src="img/coaster_banner.jpg"
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
        <div class="flex bg-sky-50 mt-2">
            <div class="w-2/12 flex items-center">
              <div class="w-full text-right">
                <button onclick="prev()" class="p-3 rounded-full bg-white border-gray-700 shadow-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                  </svg>
                </button>
              </div>
            </div>
            <div id="sliderContainer" class="w-10/12 overflow-hidden">
              <ul id="slider" class="flex w-full transition-margin duration-700">
                @foreach($articles as $key => $article)
                <li class="w-96">
                        <div class="rounded-lg p-4 h-full">
                            <card class="relative h-[30rem] sm:h-96 w-[35rem] rounded-lg">
                                <!-- Background Image -->
                                <img src="{{ asset('uploads/article/'.($article->image))}}" class="object-cover w-full h-full rounded-lg" />
                                <!-- Content -->
                                <div class="absolute w-full h-full bottom-0 bg-gradient-to-r from-cyan-900/70 to-gray-900/10 rounded-lg grid content-end text-center">

                                    <div class="">
                                        <!-- Content -->
                                        <p class="text-lg text-white/70">
                                            {!! Illuminate\Support\Str::limit($article->article, 150) !!}
                                        </p>
                                    </div>

                                    <!-- Title -->
                                    <div class="w-full flex justify-start mt-">
                                      <p class=" font-bold text-gray-100 ml-3">
                                          {{ Illuminate\Support\Str::limit($article->title, 50) }}
                                      </p>
                                    </div>
                                    <!-- Date -->
                                    <div class="w-full flex justify-start mb-2">
                                      <p class="text-white/70 ml-3 text-sm font-light">
                                          {{$date[$key]}}
                                      </p>
                                    </div>
                                </div>
                            </card>
                        </div>
                  </li>
                  @endforeach

              </ul>
            </div>
            <div class="w-2/12 flex items-center">
              <div class="w-full">
                <button onclick="next()" class="p-3 rounded-full bg-white border-gray-700 shadow-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                  </svg>
                </button>
              </div>
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

</body>
<script>
  let sliderContainer = document.getElementById('sliderContainer');
  let slider = document.getElementById('slider');
  let cards = document.getElementsByTagName('li');

  let elementsToShow = 3;

  let sliderContainerWidth = sliderContainer.clientWidth;

  let cardWidth = sliderContainerWidth/elementsToShow;

  slider.style.width = cards.length*cardWidth+'px';

  for(let index = 0; index < cards.length; index++) 
  {
    const element = cards[index];
    element.style.width = cardWidth+'px';
  }

  function prev(){
    if(+slider.style.marginLeft.slice(0, -2) != -cardWidth*(cards.length-elementsToShow))
    slider.style.marginLeft= ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
  }

  function next(){
    if(+slider.style.marginLeft.slice(0, -2) != 0)
    slider.style.marginLeft= ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        const sidebar = document.getElementById("sidebar");
        const btnSidebarToggler = document.getElementById("btnSidebarToggler");
        const navClosed = document.getElementById("navClosed");
        const navOpen = document.getElementById("navOpen");
        const content1 = document.getElementById("content");

        btnSidebarToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
            navClosed.classList.toggle("hidden");
            navOpen.classList.toggle("hidden");
        });
        content1.style.top = parseInt(navbar.clientHeight) - 1 + "px";
        sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
        console.log(content1.style.top);
        
    });
</script>


</html>
