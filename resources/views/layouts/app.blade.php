<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
</head>
<body>
    <div id="app">

            <!-- Navbar start -->
            <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-between bg-sky-900 lg:px-20 md:px-3 sm:px-1 border-b-4 border-sky-600">
            <div class="px-5 xl:px-12 py-2 flex w-full items-center">
                <div class="items-center flex space-x-3">
                    <div class="shrink-0">
                        <a href="/"><img src="img/coaster.png" class="object-fill w-10 h-10" alt="#"></a>
                    </div>
                    <div class="font-sans pointer tracking-widest text-white font-semibold text-[13px] hidden md:flex">
                        <a href="/dashboard" class="flex text-white-600 hover:text-cyan-500
                    cursor-pointer transition-colors duration-300">
                        COASTAL ENGINEERING, MANAGEMENT RESEARCH <br> & DEVELOPMENT CENTER
                        </a>
                    </div>
                    <div class="font-sans pointer tracking-widest text-white text-[15px] font-semibold flex md:hidden">
                        <a href="/dashboard" class="flex text-white-600 hover:text-cyan-500
                    cursor-pointer transition-colors duration-300">
                            COASTER
                        </a>
                    </div>
                </div>
                    
                <!-- Nav Links -->
                <ul class="hidden lg:flex text-white px-5 mx-auto text-[9px] font-semibold font-heading space-x-8 ">
                    <!-- About -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = ! open" type="button" class="font-sans md:text-lg flex text-white-600 hover:text-cyan-500
                        cursor-pointer transition-colors duration-300" aria-expanded="false">
                            ABOUT
                            <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-gray-400 h-7 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">ABOUT</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
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
                        <button @click="open = ! open" type="button" class="font-sans md:text-lg flex text-white-600 hover:text-cyan-500
                        cursor-pointer transition-colors duration-300" aria-expanded="false">
                            SERVICES
                            <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-gray-400 h-7 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">TIDAL & WAVE</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
                                        <div class="ml-4">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100">WEATHER</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
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
                        <button @click="open = ! open" type="button" class="font-sans md:text-lg flex text-white-600 hover:text-cyan-500
                        cursor-pointer transition-colors duration-300" aria-expanded="false">
                            PROJECT
                            <svg :class="{'rotate-180 duration-300': open, 'duration-300' : !open}" class="text-gray-400 h-7 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">COASTAL EROSION TRENDS AND MANAGEMENT STRATEGIES FOR REGION 1</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">ASSESSMENT MONITORING, AND PREDICTION OF COASTAL FLOODING OF SELECTED MUNICIPALITIES IN REGION 1</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
                                        <div class="">
                                            <p class="text-[12px] font-semibold font-medium text-gray-100 text-justify">DEVELOPMENT OF SCIENCE-BASED ENGINEERING APPROACH TO COASTAL PROTECTION IN REGION 1</p>
                                        </div>
                                    </a>
                                    <a href="#" class="-m-3 flex items-start p-2 hover:bg-cyan-700">
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

            <div class="flex items-center justify-center">
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
                </div>
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

        <main>
            @yield('content')
        </main>
<!-- 
        <footer class="bg-sky-900">
            <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div>
                <img src="#" class="mr-5 h-6 sm:h-9" alt="logo" />
                    <p class="max-w-xs mt-4 text-sm text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, accusantium.
                    </p>
                    <div class="flex mt-8 space-x-6 text-gray-600">
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Facebook </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fillRule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clipRule="evenodd" />
                        </svg>
                    </a>
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Instagram </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fillRule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clipRule="evenodd" />
                        </svg>
                    </a>
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Twitter </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> GitHub </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fillRule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clipRule="evenodd" />
                        </svg>
                    </a>
                    <a class="hover:opacity-75" href target="_blank" rel="noreferrer">
                        <span class="sr-only"> Dribbble </span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fillRule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clipRule="evenodd" />
                        </svg>
                    </a>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
                    <div>
                    <p class="font-medium">
                        Company
                    </p>
                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                        <a class="hover:opacity-75" href> About </a>
                        <a class="hover:opacity-75" href> Meet the Team </a>
                        <a class="hover:opacity-75" href> History </a>
                        <a class="hover:opacity-75" href> Careers </a>
                    </nav>
                    </div>
                    <div>
                    <p class="font-medium">
                        Services
                    </p>
                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                        <a class="hover:opacity-75" href> 1on1 Coaching </a>
                        <a class="hover:opacity-75" href> Company Review </a>
                        <a class="hover:opacity-75" href> Accounts Review </a>
                        <a class="hover:opacity-75" href> HR Consulting </a>
                        <a class="hover:opacity-75" href> SEO Optimisation </a>
                    </nav>
                    </div>
                    <div>
                    <p class="font-medium">
                        Helpful Links
                    </p>
                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                        <a class="hover:opacity-75" href> Contact </a>
                        <a class="hover:opacity-75" href> FAQs </a>
                        <a class="hover:opacity-75" href> Live Chat </a>
                    </nav>
                    </div>
                    <div>
                    <p class="font-medium">
                        Legal
                    </p>
                    <nav class="flex flex-col mt-4 space-y-2 text-sm text-gray-500">
                        <a class="hover:opacity-75" href> Privacy Policy </a>
                        <a class="hover:opacity-75" href> Terms &amp; Conditions </a>
                        <a class="hover:opacity-75" href> Returns Policy </a>
                        <a class="hover:opacity-75" href> Accessibility </a>
                    </nav>
                    </div>
                </div>
                </div>
                <p class="mt-8 text-xs text-gray-800">
                © 2022 Comany Name
                </p>
            </div>
        </footer> -->
    </div>
</body>
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
