@extends('front.layouts.app')
@section('title', 'Experience')

@section('content')
    <!-- Experience Section -->
    <section id="experience" class=" py-16 p-2">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center">Experience</h2>
            @foreach($experiences as $experience)
            <div class="mt-8 space-y-4">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">{{ $experience->job_title }}</h3>
                    <p class="text-lg">{{ $experience->company_name }} | {{ $experience->joining_date }} - {{ $experience->left_date }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
