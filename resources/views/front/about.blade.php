@extends('front.layouts.app')
@section('title', 'About')

@section('content')
    <!-- About Section -->
    <section id="about" class="py-16 container mx-auto">
        <div class="flex flex-col md:flex-row items-center space-y-8 md:space-y-0">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold">About Me</h2>
                <p class="mt-4 text-2xl">
                    psum dolor sit amet, consectetur adipiscing elit. Proin euismod nulla ac efficitur placerat. Inet ligula ac augue vehicula luctus.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod nulla ac efficitur placerat. Inr placerat. Integer eget ligula ac augue vehicula luctus.
                    psum dolor sit amet, consectetur c efficitur placerat. Integer eget ligula ac augue vehicula luctus.
                    Lorem ipsum dolor sit amet, consectetur adipisod nulla ac efficitur placerat. Integer eget ligula ac augue vehicula luctus.
                    Lorem ipsum dolor sit amet, consectetur adipisod nulla ac efficitur placerat. Integer eget ligula ac augue vehicula luctus.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod nulla ac efficitur placerat. Integer eget ligula ac augue vehicula luctus.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elacerat. Integer eget ligula ac augue vehicula luctus.
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('img/about.png') }}" alt="About Image" class="rounded-lg shadow-lg">
                {{--                <img src=" img/about.png" alt="About Image" class="rounded-lg shadow-lg">--}}
            </div>
        </div>
    </section>
@endsection
