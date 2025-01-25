@extends('front.layouts.app')
@section('title', 'About')

@section('content')
    <!-- About Section -->
    <section id="about" class="py-16 container mx-auto p-2">
        <div class="flex flex-col md:flex-row items-center space-y-8 md:space-y-0">
            @foreach($abouts as $about)
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold">About {{ $about->title }}</h2>
                <p class="mt-4 text-2xl">
                    {{ $about->short_description }}
                    {{ $about->long_description }}
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('storage/' . $about->image) }}" alt="About Image" class="rounded-lg shadow-lg">
            </div>
        </div>
        @endforeach
    </section>
@endsection
