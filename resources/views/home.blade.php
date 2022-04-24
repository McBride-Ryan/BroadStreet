@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-11/12 bg-white p-6 rounded-lg">
            {{-- hero image --}}
            {{-- Create a component that takes the featured article --}}
            <div class="flex justify-center">
                <img class="object-center" src="https://sixerswire.usatoday.com/wp-content/uploads/sites/30/2022/04/Joel-Embiid-78.jpg?w=1000&h=600&crop=1" alt="cover story">
            </div>
            <h2 class="flex justify-center text-5xl m-4">Joel Embiid Proves to be the League's MVP</h2>
            <div class="px-8 bg-slate-600">
                <p class="px-9">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum accusamus architecto sunt qui quas sequi, numquam facilis, quisquam, ad quam quod eaque! Quas placeat quod sapiente corporis temporibus ipsa sunt.</p>
            </div>
        </div>
    </div>

@endsection
