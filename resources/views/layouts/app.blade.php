<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Coaster') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Text Editor -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script> -->
    <script src="https://cdn.tiny.cloud/1/pj83hy3jqcyp9knhor63ei0napaxc9izb164lop5wg69xnk3/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div id="app" class="">
        <div x-data="setup()" :class="{ 'dark': isDark } ">
            <div class=" min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white text-black">
                <!-- Header -->
                <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                    <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
                        <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                        <span class="hidden md:block">COASTER ADMIN</span>
                    </div>
                    <div class="flex justify-end items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
                        <!-- <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                            <button class="outline-none focus:outline-none">
                                <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </button>
                            <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                        </div> -->
                        <ul class="flex items-center">
                            <li>
                                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="flex items-center mr-4 hover:text-blue-100">
                                    <span class="inline-flex mr-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                    </span>
                                    Logout
                                </a>
                                                    <!-- Logout -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./Header -->
    
                <!-- Sidebar -->
                <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                        <ul class="flex flex-col py-4 space-y-1">
                            <li class="px-5 hidden md:block">
                                <div class="flex flex-row items-center h-8">
                                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                                </div>
                            </li>
                            <li x-data="{ {{ route('home') == url()->current() ? 'isActive: true' : 'isActive: false'}}, open: false} ">
                                <a
                                    href="#"
                                    @click="$event.preventDefault(); open = !open"
                                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6"
                                    :class="{'bg-cyan-700 dark:bg-cyan-700': isActive || open}"
                                    role="button"
                                    aria-haspopup="true"
                                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                                >
                                    <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate"> Article </span>
                                    <span aria-hidden="true" class="ml-auto">
                                    <!-- active class 'rotate-180' -->
                                    <svg
                                        class="w-4 h-4 transition-transform transform"
                                        :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                    </span>
                                </a>

                                <div x-show="open" class="mt-2 space-y-2 px-7 " role="menu" aria-label="Authentication">
                                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                                    <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                    >
                                    All
                                    </a>
                                    <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                    >
                                    Project 1
                                    </a>
                                    <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                    >
                                    Project 2
                                    </a>
                                    <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                    >
                                    Project 3
                                    </a>
                                    <a
                                    href="#"
                                    role="menuitem"
                                    class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700"
                                    >
                                    Project 4
                                    </a>
                                </div>
                            </li>

                            <li x-data="{isActive: false, open: false}" >
                                <a
                                    href="#"
                                    @click="$event.preventDefault(); open = !open"
                                    class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6"
                                    :class="{'bg-cyan-700 dark:bg-cyan-700': isActive || open}"
                                    role="button"
                                    aria-haspopup="true"
                                    :aria-expanded="(open || isActive) ? 'true' : 'false'"
                                >
                                    <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                    </span> 
                                    <span class="ml-2 text-sm tracking-wide truncate"> User Management </span>
                                    <span aria-hidden="true" class="ml-auto">
                                    <!-- active class 'rotate-180' -->

                                </a>
                            </li>
                            <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center mt-5 h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                            </div>
                            </li>
                            <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                            </a>
                            </li>
                        </ul>
                        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2023</p>
                    </div>
                </div>
                <!-- ./Sidebar -->
                <!-- Content Main -->
                <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
                    @yield('content')
                </div>
                <!-- /Content Main -->
            </div>
        </div>

        <main class="{{ route('login') == url()->current() || route('register') == url()->current() ? '' : 'hidden'}}">
            @yield('content')
        </main>
        
    </div>
    


</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    tinymce.init({
      selector: 'textarea',
      content_style:
        "body { background: #6A7A95; color: white; font-size: 14pt; font-family: Arial; }",
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

</html>
