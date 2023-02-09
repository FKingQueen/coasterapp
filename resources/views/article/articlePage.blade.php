@extends('layouts.dashboard')

@section('css')
@endsection

@section('content')
<div class="w-screen flex justify-center pb-2 pt-8">
    <div class="lg:w-3/5 w-full lg:flex grid gap-4 ">
        <div class="lg:w-2/3 w-full shadow-xl">
            <img class=" w-full object-cover lg:h-[20rem] rounded-lg h-[10rem] pb-2 px-2" src="{{ URL::asset("uploads/article/".($selArticles->image)) }}">
               <!-- {{$selArticles}} -->
               <div class="p-2 pb-5">
                    <h1 class="text-3xl text-neutral-600">{{$selArticles->title}}</h1>
                    <h1 class="text-gray-900/50 text-sm">{{$selArticles->date}}</h1>


                    <h1 class="text-base text-neutral-900 py-4 italic">By</h1>

                    
                    <h1 class="text-base text-neutral-900 text-justify text-neutral-800  indent-10">
                        {!!$selArticles->article!!}
                    </h1>
               </div>
        </div>
        <div class="lg:w-1/3 w-full divide-y-4 divide-cyan-400/40 lg:mt-0 mt-5">
            <div class="">
                <h1 class="text-center text-2xl text-cyan-800">Other Updates</h1>
            </div>

            <div class="pt-2">
                @foreach($fArticles as $key => $article)
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