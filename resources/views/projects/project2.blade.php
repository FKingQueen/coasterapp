@extends('layouts.dashboard')

@section('css')
@endsection

@section('content')
<div class="w-full flex justify-center pb-2 lg:pt-8 pt-4">
    <div class="lg:w-4/5 w-full lg:flex grid gap-4 ">
        <div class="lg:w-3/4 w-full shadow-xl ">
            <div class="flex justify-center">
                <img class="lg:w-[80px] lg:h-[80px] md:w-[80px] md:h-[80px] w-[70px] h-[70px]" src="{{ URL::asset("img/coaster.png") }}" alt="" >
                <div class="text-center ">
                    <h1 class="font-serif lg:text-[25px] text-[20px] font-extrabold">Coastal Engineering and Management</h1>
                    <h1 class="font-serif lg:text-[25px] text-[20px] font-extrabold">Research and Development Center</h1>
                </div>
            </div>
            <div class="text-center">
                <h1 class="font-sans lg:text-[20px] text-[15px] font-bold lg:px-1 px-5 tracking-tight">Project 1: Coastal Erosion Trends and Management Strategies for Region 1</h1>
            </div>
            <div>
                <hr class="lg:w-3/4 w-11/12 h-1 mx-auto my-4 bg-blue-400 border-0 md:my-6">
            </div>
            <div class="w-full border flex justify-center mb-2">
                <div class="lg:w-4/5 w-11/12">
                    <h1 class="font-sans lg:text-[25px] text-[20px] font-extrabold tracking-tight">ABOUT THE PROJECT:</h1>
                    <p class="text-justify font-sans font-medium tracking-tighter">Coastal erosion is the prevelent in the Philippines and will worsen rising seas. Measures to address coastal erosion, in many cases,
                        exacerbate rather than metigate the problem. Due to lack of proper understanding of causes of erosion in particular and Coastal
                        dynamic in general and scarcity of personnel that can provide information and guidance for informed coastal erosion management strategies.
                    </p>
                </div>
            </div>
            <div class="w-full border flex justify-center mb-2">
                <div class="lg:w-4/5 w-11/12">
                    <h1 class="font-sans lg:text-[25px] text-[20px] font-extrabold tracking-tight">OBJECTIVES:</h1>
                    <div>
                        <p class="text-justify font-sans font-medium tracking-tighter">
                            1. Provide knowledge know-how to Region 1 HEI researchers on coastal erosion research
                        </p>
                    </div>
                    <div>
                        <p class="text-justify font-sans font-medium tracking-tighter">
                            2. Establish the trends and possible causes of erosion along the coasts of Region 1
                        </p>
                    </div>
                    <div>
                        <p class="text-justify font-sans font-medium tracking-tighter">
                            3. Identify hotspots of erosion and recommend management options that can be considered by the LGU
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full border flex justify-center mb-2">
                <div class="lg:w-4/5 w-11/12">
                    <h1 class="font-sans lg:text-[25px] text-[20px] font-extrabold tracking-tight">HIGHLIGHT OF THE ACTIVITIES:</h1>
                </div>
            </div>
        </div>
        <div class="lg:w-1/4 w-full divide-y-4 divide-cyan-400/40 lg:mt-0 mt-5">
            <div class="">
                <h1 class="text-center text-2xl text-cyan-800">Latest Updates</h1>
            </div>

            <div class="pt-2">
                @foreach($articles as $key => $article)
                    @if($loop->iteration == 5)
                        @break
                    @endif
                    <div class="w-full flex flex-col divide-y-4 divide-gray-400/20">
                        <a href="{{ route('articlePage', $article->id)}}" class="hover:drop-shadow-2xl">
                            <img class=" w-full object-cover lg:h-[8rem] rounded-lg h-[11rem] px-2 pt-1" src="{{ asset('uploads/article/'.($article->image))}}">
                            <div class="">
                                <h1 class="text-lg text-neutral-600 px-1">{!! Str::limit($article->title, 15) !!}</h1>
                                <h1 class="text-gray-900/30 text-sm px-1">{{$article->date}}</h1>
                            </div>
                        </a>
                        <hr>
                    </div>  

                @endforeach
                <div>
                    <a href="{{ route('articleMore')}}" type="button" class="text-center lg:mb-0 mb-2 font-bold hover:text-white text-zinc-500 w-full py-2.5 font-medium text-xs uppercase hover:shadow-[inset_100rem_0_0_0] hover:shadow-cyan-700 duration-[400ms,700ms] transition-[color,box-shadow]">View More</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('js')

@endsection