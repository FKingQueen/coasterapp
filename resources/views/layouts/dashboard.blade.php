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
    <!-- Styles -->

    <!-- Navigaiton Bar Dropdown -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Preloader -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- CSS Carousel  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body class="bg-gray-50">

    <div id="app">
        <!-- Navbar start -->
          <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-between bg-[#0d2247] lg:px-20 md:px-3 sm:px-1 border-b-4 border-cyan-900 ">
              <div class="px-5 xl:px-12 py-2 flex w-full items-center {{ route('login') == url()->current() || route('register') ==  url()->current() ? 'hidden' : '' }}">
                  <div class="items-center flex space-x-3">
                      <div class="shrink-0 hidden md:flex">
                          <a href="/"><img src="{{ URL::asset("img/coaster.png") }}" class="duration-200 hover:scale-110 cursor-pointer object-fill w-10 h-10" alt="#"></a>
                      </div>
                      <div class="font-sans pointer tracking-widest text-white font-semibold text-[13px] hidden md:flex">
                          <a href="/" class="flex cursor-pointer font-bold text-white">
                          COASTAL ENGINEERING, MANAGEMENT RESEARCH <br> & DEVELOPMENT CENTER
                          </a>
                      </div>
                      <div class="font-sans pointer tracking-widest text-white text-[15px] font-semibold flex md:hidden">
                              <a href="/"><img src="{{ URL::asset("img/coastername.png") }}" class="duration-200 hover:scale-110 cursor-pointer object-fill w-32" alt="#"></a>
                          </a>
                      </div>
                  </div>
                      
                  <!-- Nav Links -->
                  <div id="navButton" style="display: none;" class="mx-auto">
                    <ul class="hidden lg:flex text-white px-5  text-[9px] font-semibold font-heading space-x-8 ">
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
                                        <a href="#aboutUs" @click="autoScroll()" class="-m-3 flex items-start p-2  hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
                                            <div class="ml-4">
                                                <p class="text-[12px] font-semibold font-medium text-gray-100">ABOUT</p>
                                            </div>
                                        </a>
                                        <a href="#contact" class="-m-3 flex items-start p-2 hover:shadow-[inset_13rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">
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
                  </div>
                  <!-- Header Icons -->
                  <div class="hidden xl:flex items-center space-x-5 items-center">
                  
                  </div>
              </div>

              <!-- Sidebar Button -->
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
              <!-- /Sidebar Button -->
          </nav>
        <!-- Navbar end -->

        <!-- Sidebar start-->
          <div id="containerSidebar" class=" z-40">
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
          <div id="articleContent">
            @yield('content')
          </div>
        <!-- Footer -->
          <footer id="footer" style="display: none;" class="bg-white dark:bg-gray-800 mt-5">
            <div id="contact" class="max-w-screen-xl mx-auto lg:py-5 md:p-8 lg:p-10">
              <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-2">
                  <div class="place-content-center grid ">
                      <img class="w-40 h-40 sm:w-36 sm:h-36 " src="{{ URL::asset("img/coaster.png") }}" alt="" >
                  </div>
                  <div class="">
                      <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">COASTER</h3>
                      <ul class="text-gray-500 dark:text-gray-400  justify-end">
                          <li class="mb-4">
                              <a href="#" class=" hover:underline">About</a>
                          </li>
                      </ul>
                  </div>
              </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-1">
              <div class="text-center">
                  <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2022-2023 COASTER. All Rights Reserved.
                  </span>
                  <ul class="flex justify-center mt-5 space-x-5">
                      <li>
                          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                          </a>
                      </li>
                  </ul>
              </div>
            </div>
          </footer>
        <!-- /Footer -->

    </div>
</body>
<!-- Side Navigation Bar -->
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
          sidebar.style.top = parseInt(navbar.clientHeight) - 1 + "px";
          
      });
  </script>
<!-- /Side Navigation Bar -->
<!-- Carousel -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.mySwiper', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  </script>
<!-- /Carousel -->
<script>
        var articleContent = document.getElementById("articleContent");

        articleContent.style.marginTop = parseInt(navbar.clientHeight) + "px";

        console.log(articleContent.style);
</script>

<!-- Preload Effects-->
  <script>
        $(window).on("load",function(){
        //   $(".loader-wrapper").fadeOut("slow");
            $("#navButton").fadeIn();
            $("#articleContent").fadeIn();
            $("#footer").fadeIn();
        });
  </script>
<!-- /Preload Effects-->

<!-- Auto Scroll Page -->
  <script>
      window.addEventListener('scroll', () => {
          const scrollable = document.documentElement.scrollHeight ;
          const scrolled = window.scrollY;
          console.log(scrolled);
      })
  function autoScroll(){

  window.scrollTo(0, 200);

  }
  </script>

<!-- /Auto Scroll Page -->
</html>
