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
    <!-- Styles -->
    
    
    <!-- Navigaiton Bar Dropdown -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Preloader -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- CSS Carousel  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


    
</head>
<body class="bg-gray-50" style="scroll-behavior: smooth;">

    <div id="app">
        <!-- Top View -->
        <div id="topView" class="w-full hidden lg:block p-0">
                <div class="flex justify-around">
                    <div class="md:flex p-0">
                        <img src="{{ URL::asset("img/top.png") }}" class="duration-200  cursor-pointer object-fill h-20" alt="#">
                    </div>
                <div class="text-sm grid grid-cols-1 gap-1 content-center ">
                    <div class="text-right">
                        <p class="">Contact Us</p>
                        <p class="no-underline hover:underline hover:text-blue-600 cursor-pointer">+63912345678</p>
                        <p class="no-underline hover:underline hover:text-blue-600 cursor-pointer">coaster@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Navbar start -->
          <nav id="navbar" style="transition: 0.6s;" class="relative z-30 flex w-full bg-[#0d2247] lg:px-20 md:px-3 sm:px-1 border-y-4 border-cyan-900 ">
            <div class="px-5 xl:px-12  flex w-full justify-evenly {{ route('login') == url()->current() || route('register') ==  url()->current() ? 'hidden' : '' }}">
                <!-- Nav Links -->
                <div id="navButton" style="">
                    <div class=" lg:flex text-white font-normal font-heading w-full ">
                        <!-- About -->
                            <a href="/" class="py-4 px-4 flex text-white font-semibold hover:bg-sky-700 
                            cursor-pointer transition-colors duration-300 ">
                                HOME
                            </a>
                        <!-- /About -->
                        <!-- Tidal & Wave -->
                            <a href="/" class="py-4 px-4 flex text-white font-semibold hover:bg-sky-700 
                            cursor-pointer transition-colors duration-300 ">
                                TIDAL & WAVE
                            </a>
                        <!-- /Tidal & Wave -->
                        <!-- Weather -->
                            <a href="/" class="py-4 px-4 flex text-white font-semibold hover:bg-sky-700 
                            cursor-pointer transition-colors duration-300 ">
                                WEATHER
                            </a>
                        <!-- /Weather -->
                        <!-- Map -->
                            <div class="dropdown z-40  px-4 flex text-white font-semibold hover:bg-sky-700 
                            cursor-pointer transition-colors duration-300 " style="float:left;">
                            <button class="dropdown py-4">MAP</button>
                                <div class="dropdown-content p-1 w-[10rem] font-normal " style="left:0;">
                                    <a href="{{ route('map')}}" class="text-white hover:shadow-[inset_10rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">MAP</a>
                                    <a href="{{ route('waterLevel')}}" class="text-white hover:shadow-[inset_10rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">WATER LEVEL</a>
                                </div>
                            </div>

                        <!-- /Map -->

                        <!-- Project -->
                        <div class="dropdown z-40  px-4 flex text-white font-semibold hover:bg-sky-700 
                            cursor-pointer transition-colors duration-300 " style="float:left;">
                            <button class="dropdown py-4 ">PROJECT</button>
                            <div class="dropdown-content p-1 w-[23rem] font-normal " style="left:0;">
                                <a href="#" class="text-white text-justify  hover:shadow-[inset_23rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">Coastal Erosion Trends and Management Strategies for Region 1</a>
                                <a href="#" class="text-white text-justify  hover:shadow-[inset_23rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">Assesment Monitoring, and Prediction of Coastal Flooding of Selected Municipalities in Region 1</a>
                                <a href="#" class="text-white text-justify  hover:shadow-[inset_23rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">Development of Science-based Engineering Approach to Coastal Prediction in Region 1</a>
                                <a href="#" class="text-white text-justify  hover:shadow-[inset_23rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">Enhancing Coastal Design and Infrastructure Intervention through the Establishment of Wave Testing Facility</a>
                            </div>
                        </div>
                        <!-- /Project -->
                    </div>
                </div>

                <!-- Search Bar -->
                    <button id="btnSearchrToggler" type="button" class=" text-2xl text-white hover:text-gray-200 lg:mr-0 mr-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 focus:outline outline-offset-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </button>
                <!-- /Search Bar -->

            </div>
          </nav>
        <!-- Navbar end -->




        <!-- Search Bar start-->
            <!-- <div  class="navbar-menu relative z-40 flex justify-center ">
                <nav id="sidebar" class="absolute flex lg:w-2/4 w-full -translate-y-full flex-col overflow-y-auto bg-white ">
                    <div class="px-5 py-2">
                        <div class="flex items-center border-b border-b-2 border-gray-500 py-2">
                            <form action="{{ route('searchArticle') }}" method="GET" class="w-full">
                                @csrf
                                <input name="searchInput" required class="bg-transparent w-full leading-tight focus:outline-none" type="text" placeholder="Search Updates & Projects">
                                <button type="submit"  class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                                        <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div> -->
        <!-- Search Bar end -->
          <div id="articleContent">
            @yield('content')
          </div>
        <!-- Footer -->
          <footer id="footer" style="" class="bg-white dark:bg-gray-800">
            <div id="contact" class="max-w-screen-xl mx-auto lg:py-5 md:p-8 lg:p-10">
              <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-2">
                  <div class="place-content-center grid ">
                      <img class="w-40 h-40 sm:w-36 sm:h-36 " src="{{ URL::asset("img/coaster.png") }}" alt="" >
                  </div>
                  <div class="">
                      <h3 class="mb-4 text-base text-gray-900 dark:text-white">Coaster Contact Information</h3>
                      <ul class="text-gray-500 dark:text-gray-400  justify-end">
                            <li class="mb-4">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    Quiling Sur, Batac City, Ilocos Norte, Philippines
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>
                                    +63 5678954378
                                </div>
                            </li>
                            <li class="mb-4">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>
                                    nralibuyog@mmsu.edu.ph
                                </div>
                            </li>
                      </ul>
                  </div>
              </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-1">
              <div class="text-center">
                  <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2022-2023 COASTER. All Rights Reserved.
                  </span>
                  <!-- <ul class="flex justify-center mt-5 space-x-5">
                      <li>
                          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white dark:text-gray-400">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                          </a>
                      </li>
                  </ul> -->
              </div>
            </div>
          </footer>
        <!-- /Footer -->

    </div>
</body>

<!-- Navigation Bar -->
    <script>
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            CH =  $("#navbar").height();
            TV =  $("#topView").height();

            if (scroll > TV) {
                document.getElementById("navbar").style.top = 0 ;
                document.getElementById("navbar").style.zIndex = 50;
                document.getElementById("navbar").style.position = "fixed";
            }else{
                console.log("false");
                document.getElementById("navbar").style.position = "relative";
            }
        });
    </script>
<!-- /Navigation Bar -->

<!-- Search Bar -->
  <script>
    document.addEventListener("DOMContentLoaded", () => {
        const sidebar = document.getElementById("sidebar");
        const btnSearchrToggler = document.getElementById("btnSearchrToggler");

        btnSearchrToggler.addEventListener("click", (e) => {
            e.preventDefault();
            sidebar.classList.toggle("show");
        });
        var scroll = $(window).scrollTop();
            CH =  $("#navbar").height();
            TV =  $("#topView").height();
        if (scroll > TV) {
            document.getElementById("sidebar").style.position = "fixed";
        }else{
        }
    });
  </script>
<!-- /Search Bar -->
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

</html>
