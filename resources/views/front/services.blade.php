@extends('front.layouts.app')
@section('title', 'Services')

@section('content')
    <!-- Services Section -->
    <section id="services" class="py-16 container mx-auto p-2">
        <h2 class="text-4xl font-bold text-center">Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold">Web Design</h3>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold">Web Design</h3>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold">Web Design</h3>
            </div>
            <!-- Add more services -->
        </div>
    </section>
@endsection
