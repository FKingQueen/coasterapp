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
        <nav id="navbar" class="fixed top-0 z-40 flex w-full flex-row justify-between bg-gray-400 lg:px-20 md:px-3 sm:px-1 border-b-4 border-gray-300 ">
            <div class="flex justify-between items-center py-3 px-10 container mx-auto {{ route('home') != url()->current() ? 'hidden' : ''}}">
                <div>
                    <h1 class="text-2xl font-bold bg-gradient-to-tr from-indigo-600 to-green-600 bg-clip-text text-transparent hover:cursor-pointer">Coaster Admin</h1>
                </div>
                <div>    
                    <div class="flex items-center">
                        <div class="md:flex items-center hidden space-x-4 ml-8 lg:ml-12">
                            <a class="text-white  hover:cursor-pointer hover:text-gray-300 " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> LOGOUT</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </div>
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


        <main id="mainS" style="margin-top: 50px;" class="{{ route('login') == url()->current() || route('register') == url()->current() ? 'hidden' : ''}}">
            <!-- section hero -->
            <section>
                <div  class="bg-gray-100 sm:grid grid-cols-5 grid-rows-2 px-4 py-6 min-h-full lg:min-h-screen space-y-6 sm:space-y-0 sm:gap-4">

                    <div class="col-span-4 flex items-center">
                            @yield('content')
                    </div>
                    <div class="h-96 col-span-1 ">
                        <div class="bg-white py-3 px-4 rounded-lg flex justify-around items-center ">
                        <input type="text" placeholder="search" class=" bg-gray-100 rounded-md  outline-none pl-2 ring-indigo-700 w-full mr-2 p-2">
                        <a href="">
                            <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor ">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg></span>
                        </a>
                        </div>
                        <div class="bg-white  rounded-md">
                            <div class="bg-white rounded-md list-none  text-center mt-1">
                                <li class="{{ route('home') == url()->current() ? 'bg-cyan-700 text-white' : ''}} py-3 border-b-2 hover:shadow-[inset_25rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow] hover:text-white "><a href="#" class="list-none font-bold">ARTICLES</a></li>
                                <li class="py-3 border-b-2 hover:shadow-[inset_25rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow] hover:text-white"><a href="#" class="list-none font-bold">PROJECT 1</a></li>
                                <li class="py-3 border-b-2 hover:shadow-[inset_25rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow] hover:text-white"><a href="#" class="list-none font-bold">PROJECT 2</a></li>
                                <li class="py-3 border-b-2 hover:shadow-[inset_25rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow] hover:text-white"><a href="#" class="list-none font-bold">PROJECT 3</a></li>
                                <li class="py-3 border-b-2 hover:shadow-[inset_25rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow] hover:text-white"><a href="#" class="list-none font-bold">PROJECT 4</a></li>
                                <li class="py-3 border-b-2 hover:shadow-[inset_25rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow] hover:text-white"><a href="#" class="list-none font-bold">RELATED</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
        <main class="{{ route('login') == url()->current() || route('register') == url()->current() ? '' : 'hidden'}}">
            @yield('content')
        </main>
    </div>

</body>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const navbar = document.getElementById("navbar");
        mainS.style.top = 100 + "px";
        console.log(navbar.clientHeight);
        
    });
</script>
</html>
