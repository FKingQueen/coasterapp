@extends('layouts.app')

@section('content')
<div class=" w-full">
    <div class="border-b-2 mb-3 border-cyan-600">
        <p class="font-bold text-[2vw] ml-2 text-stone-600" >
            Coaster Articles
        </p>
    </div>
    <div class="flex justify-center">
        <div class="border w-3/4 flex">
            <div class="w-2/4 ">
                <img src="img/coaster_banner.jpg" class="object-cover h-80 rounded-l-lg">
            </div>
            <div class="w-2/4 p-2">
                <div>
                    <p class="font-['Open_Sans'] font-bold text-[1.2vw]">
                        Sample
                    </p>
                    <p class=" text-xs text-gray-700 text-opacity-50 ">
                    Sample
                    </p>
                </div>
                <div>
                    <p class="text-[1vw]">
                        Sample
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- 
<main id="mainS" style="margin-top: 50px;"  class="{{ route('login') == url()->current() || route('register') == url()->current() ? 'hidden' : ''}} w-2/4">

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
                        <div class="bg-white  rounded-md ">
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
        </main> -->
