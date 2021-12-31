<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Ancients</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashboard</a>
            </li>
            <li>
                <a href="" class="p-3">Posts</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li>
                    <a href="" class="p-3">Ryan McBride</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="p-3">Logout</a>
                </li>
            @endauth
            @guest
                <li>
                    <a href="{{route('login')}}" class="p-3">Login</a>
                </li>
                <li>
                    <a href="{{route('register')}}" class="p-3">Register</a>
                </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
