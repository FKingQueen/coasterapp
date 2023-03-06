@extends('layouts.app')

@section('css')
<!-- Text Editor -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="bg-indigo-50">
        <!-- Header -->
        <header>
            <h1 class="bg-white py-4 text-center">
            <a href="#" class="text-xl font-bold text-gray-700 cursor-pointer">Article Management</h1>
            </h1>
            <nav class="mt-3 h-fit">
            <ul class="items-center">
                <li class="text-center ">
                    <!-- Create Article Modal -->
                    <div x-data="{ modalCreate: false }" class="grid grid-cols-1 gap-4 place-content-center">
                    <a href="#" @click="modalCreate =!modalCreate" class="text-md font-semibold text-gray-600 hover:text-gray-800">New Article</a>

                        <div x-show="modalCreate" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modalCreate = false" x-show="modalCreate" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                ></div>

                                <div x-cloak x-show="modalCreate" 
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

                                        <!-- <button @click="modalCreate = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button> -->
                                    </div>

                                    <!-- Create Article Form -->
                                    <form action="{{ route('createArticle') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-5">
                                            <img id="output1" width="300" />
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
                                                    var image = document.getElementById('output1');
                                                    image.src = URL.createObjectURL(event.target.files[0]);
                                                };
                                            </script>
                                        </div>

                                        
                                        <div class="mt-4">
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Author</label>
                                            <input required id="author" autocomplete="off" name="author" placeholder="Author" type="text" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div class="mt-4">
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Title</label>
                                            <input required id="title" autocomplete="off" name="title" placeholder="Title" type="text" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div class="mt-4">
                                            <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Context</label>
                                            <textarea name="editor" id="editor" cols="100" rows="10"></textarea>
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
                </li>
            </ul>
            </nav>
        </header>
        <section class="h-fit body-font text-gray-600 ">
            <div class="container mx-auto px-5 py-6">
            <div class="-m-4 flex flex-wrap">
                @foreach($articles as $key => $article)
                    <div class="w-full p-4 md:w-1/2 lg:w-1/4">
                        <!-- Edit Article Modal -->
                        <div x-data="{ modalEdit_{{$article->id}}: false }" class="grid grid-cols-1 gap-4 place-content-center">
                            <button @click="modalEdit_{{$article->id}} = !modalEdit_{{$article->id}}" class="relative block h-48 overflow-hidden rounded shadow-lg">
                                <img alt="ecommerce" class="block h-full w-full object-cover object-center cursor-pointer " src="{{ asset('uploads/article/'.($article->image))}}" />
                            </button>

                            <div x-show="modalEdit_{{$article->id}}" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                    <div x-cloak @click="modalEdit_{{$article->id}} = false" x-show="modalEdit_{{$article->id}}" 
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0" 
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100" 
                                        x-transition:leave-end="opacity-0"
                                        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                    ></div>

                                    <div x-cloak x-show="modalEdit_{{$article->id}}" 
                                        x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                        x-transition:leave="transition ease-in duration-200 transform"
                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                        class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                    >
                                        <div class="flex items-center justify-between space-x-4">
                                            <h1 class="text-xl font-medium text-gray-800 ">Edit Article</h1>
                                            <!-- Delete Article Modal -->
                                            <div x-data="{ modalDelete_{{$article->id}}: false }" class="grid grid-cols-1 gap-4 place-content-center">
                                                <button @click="modalDelete_{{$article->id}} =!modalDelete_{{$article->id}}" class="block flex justify-center pr-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-rose-700 transition ease-in-out hover:-translate-y-1 hover:scale-125  duration-500">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                    </svg>
                                                </button>

                                                <div x-show="modalDelete_{{$article->id}}" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                        <div x-cloak @click="modalDelete_{{$article->id}} = false" x-show="modalDelete_{{$article->id}}" 
                                                            x-transition:enter="transition ease-out duration-300 transform"
                                                            x-transition:enter-start="opacity-0" 
                                                            x-transition:enter-end="opacity-100"
                                                            x-transition:leave="transition ease-in duration-200 transform"
                                                            x-transition:leave-start="opacity-100" 
                                                            x-transition:leave-end="opacity-0"
                                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                        ></div>

                                                        <div x-cloak x-show="modalDelete_{{$article->id}}" 
                                                            x-transition:enter="transition ease-out duration-300 transform"
                                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                            x-transition:leave="transition ease-in duration-200 transform"
                                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                                        >

                                                            <!-- Delete Article -->
                                                            <form action="{{ route('deleteArticle', $article->id) }}" method="POST">
                                                                @csrf
                                                                    <!--body-->
                                                                    <div class="text-center p-5 flex-auto justify-center">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                            </svg>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                                                                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                                            </svg>
                                                                                    <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                                                                                    <p class="text-sm text-gray-500 px-8">Do you really want to delete this article?
                                                                            This process cannot be undone</p>    
                                                                    </div>
                                                                    <!--footer-->
                                                                    <div class="p-3  mt-2 text-center space-x-4 md:block">
                                                                        <button @click="modalDelete_{{$article->id}} = false" type="button" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                                                            Cancel
                                                                        </button>
                                                                        <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
                                                                    </div>
                                                            </form>
                                                            <!-- Delete Article -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Delete Article Modal -->
                                        </div>

                                        <!-- Update Article Form -->
                                        <form action="{{ route('updateArticle', $article->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mt-5">
                                                <img id="output1" width="300" />
                                            </div>
                                            <div class="mt-4">
                                            <label class="block text-sm text-gray-700 capitalize dark:text-gray-200">Image</label>
                                            </div>
                                            <div class="">
                                                <label>
                                                    <span class="sr-only">Choose profile photo</span>
                                                    <input required onchange="loadFile(event)" accept="image/png, image/jpeg"  name="image" id="image" type="file" class=" text-sm text-slate-500
                                                    file:mr-4 file:py-2 file:px-4
                                                    file:rounded-lg file:border-0
                                                    file:text-sm file:font-semibold
                                                    file:bg-violet-50 file:text-violet-700
                                                    hover:file:bg-violet-100
                                                    "/>
                                                </label>
                                                <script>
                                                    var loadFile = function(event) {
                                                        var image = document.getElementById('output1');
                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                    };
                                                </script>
                                            </div>

                                            
                                            <div class="mt-4">
                                                <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Title</label>
                                                <input required id="title" autocomplete="off" name="title" value="{{$article->title}}" placeholder="Title" type="text" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                            </div>

                                            <div class="mt-4">
                                                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">Context</label>
                                                <textarea name="editor" id="editor" cols="100" rows="10">{{$article->article}}</textarea>
                                            </div>
                                            
                                            <div class="flex justify-end mt-6">
                                                <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-100 rounded-md dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                        <!-- Create Article Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Edit Article Modal -->
                        <div class="mt-3">
                            <h2 class="title-font text-lg font-medium text-gray-900">{{$article->title}}</h2>
                            <p class=" text-gray-900/50">{{$article->date}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

@section('js')
<!-- CKEditor  -->
    <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
        ClassicEditor.create(allEditors[i]);
        }
        ClassicEditor.defaultConfig = {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'undo',
                    'redo'
                ]
            },
            language: 'en'
        };
        var allEditors = document.querySelectorAll('#editor');
        for (var i = 0; i < allEditors.length; ++i) {
            ClassicEditor.create(allEditors[i]);
        }
    </script>
<!-- /CKEditor  -->
@endsection