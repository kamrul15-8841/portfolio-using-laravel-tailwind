@extends('front.layouts.app')
@section('title', 'Courses')

@section('content')
    <!-- Experience Section -->
    <section id="experience" class=" py-4 p-2">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center">Courses</h2>
            @foreach($courses as $course)
                <div class="mt-4 space-y-4">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex space-x-6">
                        <div>
                            <img src="{{ asset('storage/' . $course->image) }}" alt="Experience Image" class="rounded-lg shadow-lg h-64 w-64">
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold">{{ $course->title }}</h3>
                            <p class="text-lg">{{ $course->institute }} ({{ $course->description }})</p>
                            <p class="text-lg">Duration: {{ $course->period }}</p>
                            <p class="text-lg">Expertise: {{ $course->expertise }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
