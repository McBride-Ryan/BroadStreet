@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-1/3 bg-white p-6 rounded-lg">
            @if(session('status'))
                <div class="bg-red-500 py-4 rounded mb-6 text-white text-center">
                {{ session('status') }}
                </div>
            @endif

            <form action="{{route('login')}}" method="post">
                @csrf


                <div class="mb-4">
                    <label for="name" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"
                           class="bg-gray-100 border-3 w-full p-4 rounded-lg" value="{{ old('email') }}">
                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                           class="bg-gray-100 border-3 w-full p-4 rounded-lg" value="">
                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 px-4 py-3 w-full rounded font-medium text-white hover:bg-blue-400">Login</button>
            </form>
        </div>
    </div>

@endsection
