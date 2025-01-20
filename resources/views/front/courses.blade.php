@extends('front.layouts.app')
@section('title', 'Courses')

@section('content')
    <!-- Courses Section -->
    <section id="courses" class="py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center">Courses</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Course Title</h3>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Course Title</h3>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Course Title</h3>
                </div>
                <!-- Add more courses -->
            </div>
        </div>
    </section>
@endsection
