<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Text Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div id="app">
        <!-- Navbar start -->
        <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-between bg-gray-400 lg:px-20 md:px-3 sm:px-1 border-b-4 border-gray-300 ">
            <div class="flex justify-between items-center py-3 px-10 container mx-auto {{ route('home') != url()->current() ? 'hidden' : ''}}">
                <div>
                    <h1 class="text-2xl font-bold bg-gradient-to-tr from-indigo-600 to-green-600 bg-clip-text text-transparent hover:cursor-pointer">Coaster Admin</h1>
                </div>

                <!-- Sidebar start-->
                <div id="containerSidebar" class="z-40">
                    <div class="navbar-menu relative z-40">
                        <nav id="sidebar"
                            class="fixed left-0 bottom-0 flex w-3/4 -translate-x-full flex-col overflow-y-auto bg-cyan-900 pt-6 pb-8 sm:max-w-xs lg:w-80 show">
                            <!-- one category / navigation group -->
                            <div class="px-4 pb-6">
                                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                                    Main
                                </h3>
                                <ul class="mb-8 text-sm font-medium">
                                    <li>
                                        <a class="active flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#homepage">
                                            <span class="select-none">Homepage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#link1">
                                            <span class="select-none">link1</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- navigation group end-->

                            <!-- example copies start -->
                            <div class="px-4 pb-6">
                                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                                    Legal
                                </h3>
                                <ul class="mb-8 text-sm font-medium">
                                    <li>
                                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#tc">
                                            <span class="select-none">Terms and Condition</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#privacy">
                                            <span class="select-none">Privacy policy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#imprint">
                                            <span class="select-none">Imprint</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="px-4 pb-6">
                                <h3 class="mb-2 text-xs font-medium uppercase text-gray-500">
                                    Others
                                </h3>
                                <ul class="mb-8 text-sm font-medium">
                                    <li>
                                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#ex1">
                                            <span class="select-none">...</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="flex items-center rounded py-3 pl-3 pr-4 text-gray-50 hover:bg-gray-600"
                                            href="#ex2">
                                            <span class="select-none">...</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- example copies end -->
                        </nav>
                    </div>
                </div>
                <!-- Sidebar end -->
                
                <div class="flex h-[2.1vw]">    
                    <!-- Create Article Modal -->
                    <div x-data="{ modelOpen: false }" class="grid grid-cols-1 gap-4 place-content-center">
                        <button @click="modelOpen =!modelOpen" class="transition transition ease-in-out hover:scale-110  duration-500 text-white hover:text-cyan-700">
                            Create New Article
                        </button>

                        <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modelOpen = false" x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                ></div>

                                <div x-cloak x-show="modelOpen" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                >
                                    <div class="flex items-center justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">New Article</h1>

                                        <!-- <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button> -->
                                    </div>

                                    <!-- Create Article Form -->
                                    <form action="{{ route('createArticle') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-5">
                                            <img id="output" width="300" />
                                        </div>
                                        <div class="mt-4">
                                        <label class="block text-sm text-gray-700 capitalize dark:text-gray-200">Image</label>
                                        </div>
                                        <div class="">
                                            <label>
                                                <span class="sr-only">Choose profile photo</span>
                                                <input required onchange="loadFile(event)" accept="image/png, image/jpeg" name="image" id="image" type="file" class=" text-sm text-slate-500
                                                file:mr-4 file:py-2 file:px-4
                                                file:rounded-lg file:border-0
                                                file:text-sm file:font-semibold
                                                file:bg-violet-50 file:text-violet-700
                                                hover:file:bg-violet-100
                                                "/>
                                            </label>
                                            <script>
                                                var loadFile = function(event) {
                                                    var image = document.getElementById('output');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>

                                        
                                        <div>
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Title</label>
                                            <input required id="title" autocomplete="off" name="title" placeholder="Title" type="text" class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div class="mt-4">
                                            <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Context</label>
                                            <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
                                        </div>
                                        
                                        <div class="flex justify-end mt-6">
                                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-100 rounded-md dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                                POST
                                            </button>
                                        </div>
                                    </form>
                                    <!-- Create Article Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Create Article Modal -->
                    <!-- Logout -->
                    <div class="flex items-center">
                        <div class="md:flex items-center hidden space-x-4 ml-8 lg:ml-12">
                            <a class="text-white  hover:cursor-pointer hover:text-gray-300 font-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> LOGOUT</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!-- /Logout -->
                </div>
            </div>

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
        <div style="margin-top: 75px;" class=" w-full flex justify-center {{ route('login') == url()->current() || route('register') == url()->current() ? 'hidden' : ''}}">
            <div class="w-2/4 border">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        
        <main class="{{ route('login') == url()->current() || route('register') == url()->current() ? '' : 'hidden'}}">
            @yield('content')
        </main>

    </div>
    


</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</html>
