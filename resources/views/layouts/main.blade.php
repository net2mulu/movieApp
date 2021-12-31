<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container px-4 mx-auto flex  item-center justify-between px-4 py-6">
            <ul class="flex item-center">
                <li>
                    <a href="#"><img src="{{ asset('/img/logo.png')}}" ></a>
                </li>
                <li class="ml-16"><a href="#" class="hover:text-gray-300">Movies</a></li>
                <li class="ml-6"><a href="#" class="hover:text-gray-300">Tv shows</a></li>
                <li class="ml-6"><a href="#" class="hover:text-gray-300">Actors</a></li>
            </ul>
            <div class="flex item-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 py-1 pl-8 outline-gray-500 tet-sm focus:outline-none focus:shadow-outline" placeholder="Search" name="" id="">
                    <div class="absolute top-0">
                        <svg class="fill-current text-gray-500 mt-2 ml-2" id="nav-search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 32.2 32.2"><path d="M19 0C11.8 0 6 5.8 6 13c0 3.1 1.1 5.9 2.9 8.2l-8.6 8.6c-0.5 0.5-0.5 1.4 0 2 0.5 0.5 1.4 0.5 2 0l8.6-8.6C13.1 24.9 15.9 26 19 26c7.2 0 13-5.8 13-13S26.2 0 19 0zM19 24C12.9 24 8 19.1 8 13S12.9 2 19 2 30 6.9 30 13 25.1 24 19 24z"/></svg>

                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img class="rounded-full w-8 h-8" src="{{ asset('/img/avatar.jpg')}}" alt="avatar">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>