<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Broad Street Media</title>
</head>
<body class="bg-gray-200">
<nav class="bg-red-800 text-white">
    <ul class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-4">
        <ul class="flex flex-col md:flex-row items-center">
            <li>
                <a href="/">
                    LOGO
                </a>
            </li>
            <li class="md:ml-16 mt-3 md:mt-0">
                <a href="{{route('dashboard')}}" class="hover:text-gray-300 hover:underline">DASHBOARD</a>
            </li>
            <li class="md:ml-6 mt-3 md:mt-0">
                <a href="{{route('posts')}}" class="hover:text-gray-300 hover:underline">Discuss</a>
            </li>
        </ul>
        <ul class="flex flex-col md:flex-row items-center sm:mt-3 md:mt-0">
            <div class="relative mt-3 md:mt-0">
                <input type="text" class="rounded-full w-64 px-4 py-1 pl-8 focus:outline-none focus:shadow-outline" style="color: #222" placeholder="Search...">
                <div class="absolute top-0">
                    <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z"/></svg>
                </div>
            </div>
            @auth
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/images/avatar.jpg" alt="avatar" class="hover:opacity-75 transition ease-in-out duration-150 rounded-full w-8 h-8">
                    </a>
                </div>
                <li class="md:ml-6 mt-3 md:mt-0 hover:text-gray-300 hover:underline">
                    <a href="/">{{auth()->user()->username}}</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0 hover:text-gray-300 hover:underline">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button href="{{route('logout')}}" type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="md:ml-6 mt-3 md:mt-0 hover:text-gray-300 hover:underline">
                    <a href="{{route('login')}}">Login</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0 hover:text-gray-300 hover:underline">
                    <a href="{{route('register')}}">Register</a>
                </li>
            @endauth
        </ul>
</nav>
    @yield('content')
</body>
</html>
