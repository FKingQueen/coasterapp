@extends('layouts.app')

@section('content')
<div class="w-full flex justify-center mt-3">
    <!-- <div class="flex justify-between items-center p-2 border-b-4 bg-cyan-900 border-cyan-100">
        <span class="text-3xl text-white">Article</span>
        <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
            <button class="outline-none focus:outline-none">
                <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </button>
            <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
        </div>
    </div> -->

    <!-- Social Traffic -->
    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-100 w-11/12 shadow-lg rounded text-black">
        <div class="rounded-t mb-0 px-0 border-0">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <span class="hidden md:block tracking-wider text-xl">Article</span>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                    <!-- <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-1 shadow-sm border border-gray-200">
                        <button class="outline-none focus:outline-none">
                            <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                        <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                    </div> -->
                </div>
            </div>
            <div class="block w-full overflow-x-auto">
                <div class="grid grid-cols-3 gap-4">
                    <div class="border">
                        <div class="w-full h-64 bg-top bg-cover rounded-t" style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)"></div>
                            <div class="flex flex-col w-full md:flex-row">
                                <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                                    <div class="md:text-3xl">Jan</div>
                                    <div class="md:text-6xl">13</div>
                                    <div class="md:text-xl">7 pm</div>
                                </div>
                                <div class="p-4 font-normal text-gray-800 md:w-3/4">
                                    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">2020 National Championship</h1>
                                    <p class="leading-normal">The College Football Playoff (CFP) determines the national champion of the top division of college football. The format fits within the academic calendar and preserves the sport’s unique and compelling regular season.</p>
                                    <div class="flex flex-row items-center mt-4 text-gray-700">
                                        <div class="w-1/2">
                                            Mercedes-Benz Superdome
                                        </div>
                                        <div class="w-1/2 flex justify-end">
                                            <img src="https://collegefootballplayoff.com/images/section_logo.png" alt="" class="w-8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border">
                        <div class="w-full h-64 bg-top bg-cover rounded-t" style="background-image: url(https://www.si.com/.image/t_share/MTY4MTkyMjczODM4OTc0ODQ5/cfp-trophy-deitschjpg.jpg)"></div>
                            <div class="flex flex-col w-full md:flex-row">
                                <div class="flex flex-row justify-around p-4 font-bold leading-none text-gray-800 uppercase bg-gray-400 rounded md:flex-col md:items-center md:justify-center md:w-1/4">
                                    <div class="md:text-3xl">Jan</div>
                                    <div class="md:text-6xl">13</div>
                                    <div class="md:text-xl">7 pm</div>
                                </div>
                                <div class="p-4 font-normal text-gray-800 md:w-3/4">
                                    <h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-800">2020 National Championship</h1>
                                    <p class="leading-normal">The College Football Playoff (CFP) determines the national champion of the top division of college football. The format fits within the academic calendar and preserves the sport’s unique and compelling regular season.</p>
                                    <div class="flex flex-row items-center mt-4 text-gray-700">
                                        <div class="w-1/2">
                                            Mercedes-Benz Superdome
                                        </div>
                                        <div class="w-1/2 flex justify-end">
                                            <img src="https://collegefootballplayoff.com/images/section_logo.png" alt="" class="w-8">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Social Traffic -->
</div>
@endsection
