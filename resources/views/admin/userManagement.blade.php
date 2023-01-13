@extends('layouts.app')

@section('content')
<div class="bg-indigo-50">
    <!-- Header -->
    <header>
        <h1 class="bg-white py-4 text-center">
            <a href="#" class="text-xl font-bold text-gray-700 cursor-pointer">User Management</h1>
        </h1>
    </header>
    <section class="h-fit body-font text-gray-600 ">
        <div class="container mx-auto px-5 py-6">
            <div class="flex justify-between mb-1">
                <div class="block w-full ml-2">
                    <!-- Register Article Modal -->
                    <div x-data="{ modalRegister: false }" >
                        <a href="#" @click="modalRegister =!modalRegister" class="text-md font-semibold text-gray-600 hover:text-gray-800">Register</a>

                        <div x-show="modalRegister" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                <div x-cloak @click="modalRegister = false" x-show="modalRegister" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0" 
                                    x-transition:enter-end="opacity-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100" 
                                    x-transition:leave-end="opacity-0"
                                    class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                ></div>

                                <div x-cloak x-show="modalRegister" 
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                    x-transition:leave="transition ease-in duration-200 transform"
                                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                    class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                >
                                    <div class="flex justify-between space-x-4">
                                        <h1 class="text-xl font-medium text-gray-800 ">Account Registration</h1>

                                        <!-- <button @click="modalRegister = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </button> -->
                                    </div>

                                    <!-- Register Article Form -->
                                    <form action="{{ route('createUser') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="mt-4">
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Name</label>
                                            <input autocomplete="name" required id="name" autocomplete="off" name="name" placeholder="Name" type="text" value="{{ old('name') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        
                                        <div class="mt-4">
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Email</label>
                                            <input autocomplete="name" required id="email" autocomplete="off" name="email" placeholder="Email" type="text" value="{{ old('email') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        
                                        <div class="mt-4">
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Password</label>
                                            <input autocomplete="name" required id="password" autocomplete="off" name="password" placeholder="Password" type="password" value="{{ old('password') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>

                                        <div class="mt-4">
                                            <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Confirm Password</label>
                                            <input autocomplete="new-password" required id="password" autocomplete="off" name="password_confirmation" placeholder="Password" type="password" value="{{ old('password') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                        </div>
                                        
                                        <div class="flex justify-end mt-6">
                                            <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-100 rounded-md dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                                REGISTER
                                            </button>
                                        </div>
                                    </form>
                                    <!-- Register Article Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Register Article Modal -->
                </div>

                <div class="w-1/4 flex">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="myInput" onkeyup="search()" class="focus:outline-none focus:ring-0 rounded-l-md bg-gray-50 border border-gray-300 text-gray-900 text-sm block w-full pl-10 p-2.5" placeholder="Search" required>
                    </div>
                    <div class="p-2.5 text-sm font-medium text-white bg-blue-700 border border-blue-700 rounded-r-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </div>
                </div>
            </div>

            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
                <table id="myTable" class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Name</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Email</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900">Create at</th>
                        <th scope="col" class="px-6 py-4 font-medium text-gray-900 flex justify-end">Option</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach($users as $user)
                            <tr class="hover:bg-gray-50">
                                <td class="gap-3 px-6 py-4 font-normal text-gray-900">
                                    {{$user->name}}
                                </td>
                                <td class=" gap-3 px-6 py-4 font-normal text-gray-900">
                                    {{$user->email}}
                                </td>
                                <td class=" gap-3 px-6 py-4 font-normal text-gray-900">
                                    {{$user->date}}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
                                        <!-- Edit Article Modal -->
                                        <div x-data="{ modaluserEdit: false }" class="grid grid-cols-1 gap-4 place-content-center">
                                            <a @click=" modaluserEdit = ! modaluserEdit" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"/>
                                                </svg>
                                            </a>
                                            <div x-show="modaluserEdit" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                    <div x-cloak @click="modaluserEdit = false" x-show="modaluserEdit" 
                                                        x-transition:enter="transition ease-out duration-300 transform"
                                                        x-transition:enter-start="opacity-0" 
                                                        x-transition:enter-end="opacity-100"
                                                        x-transition:leave="transition ease-in duration-200 transform"
                                                        x-transition:leave-start="opacity-100" 
                                                        x-transition:leave-end="opacity-0"
                                                        class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                    ></div>

                                                    <div x-cloak x-show="modaluserEdit" 
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
                                                            <!-- Delete User Modal -->
                                                            <div x-data="{ modaluserDelete: false }" class="grid grid-cols-1 gap-4 place-content-center">
                                                                <button @click="modaluserDelete =!modaluserDelete" class="block flex justify-center pr-2">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-rose-700 transition ease-in-out hover:-translate-y-1 hover:scale-125  duration-500">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                                    </svg>
                                                                </button>

                                                                <div x-show="modaluserDelete" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                                    <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                                        <div x-cloak @click="modaluserDelete = false" x-show="modaluserDelete" 
                                                                            x-transition:enter="transition ease-out duration-300 transform"
                                                                            x-transition:enter-start="opacity-0" 
                                                                            x-transition:enter-end="opacity-100"
                                                                            x-transition:leave="transition ease-in duration-200 transform"
                                                                            x-transition:leave-start="opacity-100" 
                                                                            x-transition:leave-end="opacity-0"
                                                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true"
                                                                        ></div>

                                                                        <div x-cloak x-show="modaluserDelete" 
                                                                            x-transition:enter="transition ease-out duration-300 transform"
                                                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" 
                                                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                                            x-transition:leave="transition ease-in duration-200 transform"
                                                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" 
                                                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl"
                                                                        >

                                                                            <!-- Delete User Form -->
                                                                            <form action="" method="POST">
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
                                                                                                    <p class="text-sm text-gray-500 px-8">Do you really want to delete this account?
                                                                                            This process cannot be undone</p>    
                                                                                    </div>
                                                                                    <!--footer-->
                                                                                    <div class="p-3  mt-2 text-center space-x-4 md:block">
                                                                                        <button @click="modaluserDelete = false" type="button" class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                                                                                            Cancel
                                                                                        </button>
                                                                                        <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
                                                                                    </div>
                                                                            </form>
                                                                            <!-- Delete User Form -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /Delete User Modal -->
                                                        </div>

                                                        <!-- Update User Form -->
                                                        <form action="{{ route('updateUser', $user->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="mt-4">
                                                                <label for="user name" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Name</label>
                                                                <input autocomplete="name" value="{{$user->name}}" required id="name" autocomplete="off" name="name" placeholder="Name" type="text" value="{{ old('name') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            
                                                            <div class="mt-4">
                                                                <label for="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Email</label>
                                                                <input autocomplete="email" value="{{$user->email}}" required id="email" autocomplete="off" name="email" placeholder="Email" type="text" value="{{ old('email') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            
                                                            <div class="mt-4">
                                                                <label for="password" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Password</label>
                                                                <input autocomplete="possword" required id="password" autocomplete="off" name="password" placeholder="New Password" type="password" value="{{ old('password') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>

                                                            <div class="mt-4">
                                                                <label for="confirm password" class="block text-sm text-gray-700 capitalize dark:text-gray-200 mt-2">Confirm Password</label>
                                                                <input autocomplete="new-password" required id="password" autocomplete="off" name="password_confirmation" placeholder="New Password" type="password" value="{{ old('password') }}" class="block w-full px-3 py-2  text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                            </div>
                                                            
                                                            <div class="flex justify-end mt-6">
                                                                <button type="submit" class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-100 rounded-md dark:bg-gray-500 dark:hover:bg-gray-700 dark:focus:bg-gray-700 hover:bg-gray-600 focus:outline-none focus:bg-gray-500 focus:ring focus:ring-gray-300 focus:ring-opacity-50">
                                                                    UPDATE
                                                                </button>
                                                            </div>
                                                        </form>
                                                        <!-- Update User Form -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Update User Modal -->
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script>
        function search() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        console.log(filter);
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
    </script>   

@endsection
