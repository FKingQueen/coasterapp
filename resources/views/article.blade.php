@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="border-b-2 mb-3 bg-white border-cyan-600">
        <p class="font-bold text-[2vw] ml-2 text-stone-600" >
            Coaster Articles
        </p>
    </div>

    @foreach($articles as $article)
    <div class="flex justify-center drop-shadow-xl">
        <div class="w-5/6 flex mb-6">
            <div class="w-3/4 bg-slate-50 flex justify-center rounded-l-sm border-b-4 border-cyan-600">
                <img src="{{ asset('uploads/article/'.($article->image))}}" class="object-cover z-1 h-72 rounded-l-lg">
            </div>

            <div class="w-2/4 p-2 bg-white rounded-r-sm border-b-4 border-cyan-600">
                <div>
                    <p class="font-bold text-[1.2vw]">
                    {{ Illuminate\Support\Str::limit($article->title, 50) }}
                    </p>
                    <p class=" text-xs text-gray-700 text-opacity-50 ">
                        {{$article->created_at}}
                    </p>
                </div>
                <div class="mt-5">
                    <p>
                        {!! Illuminate\Support\Str::limit($article->article, 350) !!}
                    </p>
                </div>
            </div>
            <div class="w-1/12 p-2 grid grid-cols-1 gap-4 place-content-evenly">
            <button class="block flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-teal-700 transition ease-in-out hover:-translate-y-1 hover:scale-125  duration-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                
            </button>
            <button class="block flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 stroke-rose-700 transition ease-in-out hover:-translate-y-1 hover:scale-125  duration-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
            </button>
            </div>
        </div>
    </div>
    @endforeach
@endsection
