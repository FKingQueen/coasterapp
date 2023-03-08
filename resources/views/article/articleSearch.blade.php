@extends('layouts.dashboard')

@section('css')
@endsection

@section('content')

<div class="w-screen flex justify-center pb-2 pt-5 ">
    <div class="lg:w-2/4 w-full divide-y-4 divide-cyan-400/25">
        <div>
            <h1 class="text-center text-2xl text-cyan-800">Search Result for "{{$search}}"</h1>
        </div>
        @foreach($articles as $key => $article)
            <a href="{{ route('articlePage', $article->id)}}">
                <div class="w-full lg:flex p-5">
                    <img class="lg:w-1/4 object-cover lg:h-[8rem] w-full rounded h-[7rem]" src="{{ asset('uploads/article/'.($article->image))}}">
                    <div class="lg:w-3/4">
                        <h1 class="text-lg text-neutral-600 px-1">{!! Str::limit($article->title) !!}</h1>
                        <h1 class="text-gray-900/30 text-sm px-1">{{$article->date}}</h1>
                        <h1 class="text-sm w-full text-justify mt-2 px-1">{!! Str::limit($article->article, 250) !!}</h1>
                    </div>
                </div>
            </a>
            <hr class="">
        @endforeach
    </div>
</div>
@endsection

@section('js')

@endsection