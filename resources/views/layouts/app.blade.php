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
    <nav class="sticky top-0 p-6 bg-red-700 flex justify-between mb-6 mx-16">
        <ul class="flex items-center text-white">
            <li class="bg-red-300">
                <a href="{{route('home')}}" class="bg-red-300 p-3">Logo</a>
            </li>
            <li>
                <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="{{route('posts')}}" class="p-3">Posts</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">{{auth()->user()->username}}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit ">Logout</button>

                    </form>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{route('login')}}" class="p-3 text-white">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="py-3 text-white">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
