<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'COASTER') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div class="flex justify-center h-screen w-screen items-center">
        <div class="w-full flex flex-col items-center" >
            <form method="POST" action="{{ route('register') }}" class="w-1/4">
                @csrf
                <!-- text login -->
                <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">REGISTER</h1>
                <!-- email input -->
                <div class=" mb-6">
                    <input id="name" type="text" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
                </div>
                <div class=" mb-6">
                    <input id="email" type="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                </div>
                <!-- password input -->
                <div class=" mb-6">
                    <input id="password" type="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " name="password" placeholder="Password" required autocomplete="new-password">
                </div>
                <div class=" mb-6">
                    <input id="password-confirm" type="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " name="password_confirmation" placeholder="Password" required autocomplete="new-password">
                </div>
                <!-- button -->
                <div class=" mt-4">
                    <button type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:bg-blue-700"> LOGIN</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
