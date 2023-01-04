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

    <!-- Text Editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>

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
        .animated {
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
		}

		.animated.faster {
			-webkit-animation-duration: 500ms;
			animation-duration: 500ms;
		}

		.fadeIn {
			-webkit-animation-name: fadeIn;
			animation-name: fadeIn;
		}

		.fadeOut {
			-webkit-animation-name: fadeOut;
			animation-name: fadeOut;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		@keyframes fadeOut {
			from {
				opacity: 1;
			}

			to {
				opacity: 0;
			}
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
                
                <div class="flex w-[20vw] h-[2.1vw]">    
                    <button onclick="openModal('create-article-modal')" class="transition rounded-lg w-full ease-in-out outline outline-offset-2 outline-2 hover:outline-cyan-700 hover:text-cyan-700 hover:scale-110 duration-400  hover:font-normal text-white">
                    Create New Article
                    </button>
                    <div class="flex items-center">
                        <div class="md:flex items-center hidden space-x-4 ml-8 lg:ml-12">
                            <a class="text-white  hover:cursor-pointer hover:text-gray-300 font-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> LOGOUT</a>
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
        <div style="margin-top: 75px;" class=" w-full flex justify-center {{ route('login') == url()->current() || route('register') == url()->current() ? 'hidden' : ''}}">
            <div class="w-2/4 ">
                <main>
                    @yield('content')
                </main>
            </div>
            <div class="w-1/4 border">
        hello
            </div>
        </div>
        
        <main class="{{ route('login') == url()->current() || route('register') == url()->current() ? '' : 'hidden'}}">
            @yield('content')
        </main>

    </div>
    
    <!-- Create New Article -->
	<div class="create-article-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
		<div class="border border-blue-500 shadow-lg modal-container bg-white w-2/4 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold text-gray-500">New Article</p>
					<div class="modal-close cursor-pointer z-50" onclick="modalClose('create-article-modal')">
						<svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
                <form action="{{ route('createArticle') }}" method="POST">
                    @csrf
                    <div class="my-5 mr-5 ml-5 flex justify-center">
                        <div id="add_caretaker_form" class="w-full">
                            <div >
                                <div class="">
                                    <label for="title" class="text-md text-gray-600">Title</label>
                                </div>
                                <div class="">
                                    <input type="text" id="title" autocomplete="off" name="title" class="p-2 w-full border-2 border-gray-300 mb-5 rounded-md" placeholder="Title">
                                </div>
                                <div class="">
                                    <label for="article" class="text-md text-gray-600">Context</label>
                                </div>
                                <div>
                                    <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Footer-->
                    <div class="flex justify-evenly pt-2 space-x-14">
                        <button type="reset"
                            class="px-4 bg-gray-200 p-3 rounded text-black hover:bg-gray-300 font-semibold" onclick="modalClose('create-article-modal')">Cancel
                        </button>
                        <button type="submit"
                            class="px-4 bg-blue-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400" onclick="validate_form(document.getElementById('add_caretaker_form'))">Post
                        </button>
                    </div>
                </form>
			</div>
		</div>
	</div>
    <!-- /Create New Article -->

<!--  -->

</body>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
    </script>
    <script>
        all_modals = ['create-article-modal']
        all_modals.forEach((modal)=>{
            const modalSelected = document.querySelector('.'+modal);
            modalSelected.classList.remove('fadeIn');
            modalSelected.classList.add('fadeOut');
            modalSelected.style.display = 'none';
        })
        const modalClose = (modal) => {
            const modalToClose = document.querySelector('.'+modal);
            modalToClose.classList.remove('fadeIn');
            modalToClose.classList.add('fadeOut');
            setTimeout(() => {
                modalToClose.style.display = 'none';
            }, 500);
        }

        const openModal = (modal) => {
            const modalToOpen = document.querySelector('.'+modal);
            modalToOpen.classList.remove('fadeOut');
            modalToOpen.classList.add('fadeIn');
            modalToOpen.style.display = 'flex';
        }
        
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const navbar = document.getElementById("navbar");
            mainS.style.top = 100 + "px";
            console.log(navbar.clientHeight);
            
        });
    </script>
</html>
