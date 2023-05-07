<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700&family=Montserrat:ital,wght@0,700;1,600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-full h-screen">

<div class=" bg-[#06604e] dark:bg-gray-800 ">
    <nav class="2xl:container 2xl:mx-auto sm:py-6 sm:px-7 py-5 px-4 flex justify-between">
        <!-- For large and Medium-sized Screen -->
        <div class="flex justify-between w-full">
            <div class="flex space-x-3 items-center">
                <x-application-logo class="w-8 h-8 fill-white text-gray-500" />
                <h1 class=" font-normal text-2xl leading-6 text-white " >To do</h1>
            </div>
            <div class="hidden sm:flex flex-row space-x-4">
                <a href="{{ route('login') }}" class="rounded-md flex space-x-2 w-24 h-10 font-semibold text-sm leading-3 text-white border border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-white hover:text-[#06604e] duration-150 justify-center items-center" >Sign In</a>
                <a href="{{ route('register') }}" class="rounded-md flex space-x-2 w-24 h-10 font-semibold text-sm leading-3 text-emerald-700 bg-white focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Sign Up</a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <!-- Burger Icon -->
            <div id="bgIcon"  class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800  flex justify-center items-center sm:hidden cursor-pointer">
                <svg @click="open =! open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

            </div>
            <!-- Mobile and small-screen devices (toggle Menu) -->
            <div x-show="open" id="MobileNavigation" class=" mt-4">
                <div class="flex flex-col gap-4 mt-4">
                    <a href="{{ route('login') }}" class="rounded-md flex space-x-2 w-16 h-8 font-normal text-xs leading-3 text-white border border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-600 hover:bg-indigo-600 duration-150 justify-center items-center" >Sign In</a>
                    <a href="{{ route('register') }}" class="rounded-md flex space-x-2 w-16 h-8 font-semibold text-xs leading-3 text-emerald-700 bg-white focus:outline-none focus:bg-gray-200 hover:bg-gray-200 duration-150 justify-center items-center" >Sign Up</a>
                </div>
            </div>
        </div>
    </nav>
</div>


</body>
</html>
