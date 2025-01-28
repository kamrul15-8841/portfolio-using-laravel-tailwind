@extends('front.layouts.app')
@section('title', 'About')

@section('content')
    <!-- About Section -->
    <section id="about" class="py-4 container mx-auto p-2">
        <h2 class="text-4xl font-bold text-center">About</h2>
        <div class="flex flex-col md:flex-row items-center space-y-8 md:space-y-0">
            @foreach($abouts as $about)
            <div class="md:w-7/10 text-center md:text-left">
                <h2 class="text-4xl font-bold">I Am {{ $about->title }}</h2>
                <p class="mt-4 text-2xl">
                    {{ $about->short_description }}
                    {{ $about->long_description }}
                </p>
            </div>
            <div class="md:w-3/10">
                <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="rounded-lg shadow-lg">
            </div>
        </div>
        @endforeach
    </section>
@endsection
