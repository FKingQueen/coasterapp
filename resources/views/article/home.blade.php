@extends('layouts.dashboard')

@section('css')
@endsection

@section('content')
    <!-- Carousel -->
        <div class="sample swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <img
                    class="object-cover w-full lg:h-[35rem]"
                    src="img/field1.jpg"
                    alt="apple watch photo"
                />
                </div>
                <div class="swiper-slide">
                <img
                    class="object-cover w-full lg:h-[35rem]"
                    src="img/field2.jpg"
                    alt="apple watch photo"
                />
                </div>
                <div class="swiper-slide">
                <img
                    class="object-cover w-full lg:h-[35rem]"
                    src="img/field3.jpg "
                    alt="apple watch photo"
                />
                </div>
            </div>
            <div class="swiper-button-next "></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    <!-- /Carousel -->

    <!-- Latest Update -->
        <div class="w-full  ">
            <div class="grid gap-2 place-content-center lg:mt-10 mt-2">
                <div class="text-center">
                <h1 class="font-medium leading-tight text-3xl text-sky-600">LATEST UPDATES</h1>
                <hr class="">
                </div>
            </div>

            <div class="lg:w-4/5 sm:w-2/3 bg-white mx-auto mt-5 shadow-md">
                <div class="flex items-center mt-2 flex-wrap pt-4">
                    @foreach($articles as $key => $article)
                        @if($loop->iteration == 5)
                            @break
                        @endif
                        <div class="w-full xl:w-1/4 p-6 flex flex-col">
                            <a href="{{ route('articlePage', $article->id)}}" class="border-b-4 border-cyan-600/30 hover:drop-shadow-2xl">
                                <img class=" w-full object-cover lg:h-[13rem] h-[10rem] py-1" src="{{ asset('uploads/article/'.($article->image))}}">
                                <div class="pt-3 flex items-center justify-between overflow-hidden">
                                    <p class="text-gray-900 font-sm">
                                        {{ Illuminate\Support\Str::limit($article->title, 15) }}
                                    </p>
                                </div>
                                <p class="pt-1 text-gray-900/30 text-xs">{{$article->date}}</p>
                            </a>
                        </div>  
                    @endforeach
                </div>
                <div class="w-full">
                    <a href="{{ route('articleMore')}}" type="button" class="lg:mb-0 mb-2 font-bold text-center hover:text-white text-zinc-500 w-full py-2.5 font-medium text-xs uppercase hover:shadow-[inset_100rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">View More</a>
                </div>
            </div>
        </div>
    <!-- /Latest Update -->  

    <!-- Project -->
        <div>
        <div class="grid gap-2 place-content-center m-10">
            <div class="text-center">
                <h1 class="font-medium leading-tight text-3xl text-sky-600">PROJECT OBJECTIVES</h1>
                <hr class="">
            </div>
        </div>
        
        <section class="body-font text-gray-600">
            <div class="container mx-auto px-5">
            <div class="-m-4 flex flex-wrap ">
                <div class="w-full p-4 md:w-1/2 lg:w-1/4 ">
                <a class="relative block overflow-hidden rounded flex justify-center">
                    <img alt="ecommerce" class="block h-full w-80 shadow-lg object-cover object-center cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-105 duration-300" src="img/P1.png" />
                </a>
                <div class="mt-4 flex justify-center">
                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT 1</h3>
                </div>
                </div>
                <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <a class="relative block overflow-hidden rounded flex justify-center">
                    <img alt="ecommerce" class="block h-full w-80 shadow-lg object-cover object-center cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-105 duration-300" src="img/P2.png" />
                </a>
                <div class="mt-4 flex justify-center">
                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT 2</h3>
                </div>
                </div>
                <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <a class="relative block overflow-hidden rounded flex justify-center">
                    <img alt="ecommerce" class="block h-full w-80 shadow-lg object-cover object-center cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-105 duration-300" src="img/P3.png" />
                </a>
                <div class="mt-4 flex justify-center">
                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT 3</h3>
                </div>
                </div>
                <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                <a class="relative block overflow-hidden rounded flex justify-center">
                    <img alt="ecommerce" class="block h-full w-80 shadow-lg object-cover object-center cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-105 duration-300" src="img/P4.png" />
                </a>
                <div class="mt-4 flex justify-center">
                    <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">PROJECT 4</h3>
                </div>
                </div>
            </div>
        </section>
        </div>
    <!-- /Project -->

    <!-- About Us -->
        <div >
            <div class="grid gap-2 place-content-center mt-10">
                <div class="text-center">
                <h1 class="font-medium leading-tight text-3xl text-sky-600">ABOUT US</h1>
                <hr class="">
                </div>
            </div>
            <div class="flex justify-center w-full mt-5">
                <div>
                    <div class="xl:w-[90rem] lg:w-[50rem] sm:w-[10rem] text-justify indent-8 p-3">
                        The Coastal Engineering Research Center or CoastER Center is the country’s first coastal engineering and management research and development center and 
                        the hub of innovations for coastal resiliency. This facility will spur the development of innovations that address coastal erosion, development construction 
                        materials for coastal protection, policies, and guidelines intended to protect resources from coastal flooding and improve the lives of people in coastal 
                        communities. It will also bolster the capability of Filipino engineers towards coastal engineering leading to the development of a master’s degree for coastal 
                        engineering.
                    </div>
                    <hr class="my-6 border-sky-300" />
                    <div class="xl:w-[90rem] lg:w-[50rem] sm:w-[10rem] text-justify indent-8 p-3">
                        The COASTER aims to spearhead the development of technologies and innovation to mitigate and manage coastal disasters and risks. The overall goal of the 
                        center is to take the lead in coastal science and engineering studies to better undertand the magniture of certain process and hazards and their impacts
                        on the maritime environment including tidal deltas and low-lying lands.
                    </div>
                </div>
            </div>
        </div>
    <!-- /About Us -->

    <!-- Coop Agencies -->
        <div class="grid gap-2 place-content-center mt-10">
            <div class="grid gap-2 place-content-center lg:mt-10 mt-2">
                <div class="text-center">
                <h1 class="font-medium leading-tight text-3xl text-sky-600">COOP AGENCIES</h1>
                <hr class="">
                </div>
            </div>
        <div class="flex justify-center gap gap-4">
            <div class="shrink-0">
                <a href="https://www.dost.gov.ph/"><img src="img/DOST.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
            <div class="shrink-0">
                <a href="https://www.dost.gov.ph/"><img src="img/MMSU.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
            <div class="shrink-0">
                <a href="https://www.mmsu.edu.ph/"><img src="img/KYOTO.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
            <div class="shrink-0">
                <a href="https://www.mmsu.edu.ph/"><img src="img/DILIMAN.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
            <div class="shrink-0">
                <a href="https://www.mmsu.edu.ph/"><img src="img/DMMMSU.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
            <div class="shrink-0">
                <a href="https://www.mmsu.edu.ph/"><img src="img/CIVIL.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
            <div class="shrink-0">
                <a href="https://www.mmsu.edu.ph/"><img src="img/DPWH.png" class="object-fill lg:w-[4vw] lg:h-[4vw] w-[11vw] h-[11vw]" alt="#"></a>
            </div>
        </div>
        </div>
    <!-- /Coop Agencies -->
@endsection

@section('js')
@endsection