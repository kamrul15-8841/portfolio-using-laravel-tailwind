@extends('front.layouts.app')
@section('title', 'Experience')

@section('content')
    <!-- Experience Section -->
    <section id="experience" class="py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-8">Experience</h2>
            <div class="space-y-6">
                @foreach($experiences as $experience)
                    <div class="bg-gray-800 rounded-lg shadow-xl p-6 transition-transform duration-300 hover:scale-102">
                        <!-- Image and Details Row -->
                        <div class="flex flex-col md:flex-row gap-6 mb-4">
                            <!-- Image Section -->
                            <div class="md:w-1/4">
                                <img src="{{ asset('storage/' . $experience->image) }}" alt="Experience Image"
                                     class="rounded-lg w-full h-48 object-cover shadow-md">
                            </div>

                            <!-- Details Section -->
                            <div class="md:w-3/4 space-y-2">
                                <h3 class="text-2xl font-bold text-indigo-400">{{ $experience->job_title }}</h3>
                                <p class="text-lg font-semibold">{{ $experience->company_name }}</p>
                                <p class="text-gray-400">{{ $experience->company_address }}</p>
                                <div class="flex flex-wrap gap-4 text-sm">
                                    <p class="bg-gray-700 px-3 py-1 rounded-full">
{{--                                        📅 {{ $experience->joining_date }} - Recent--}}
{{--                                        📅 {{ $experience->joining_date->format('F Y') }} - Recent--}}
                                        📅 {{ \Carbon\Carbon::parse($experience->joining_date)->format('F Y') }} - Recent

                                    </p>
                                    <p class="bg-gray-700 px-3 py-1 rounded-full">
                                        🛠️ {{ $experience->expertise }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Job Description Full Width -->
                        <div class="border-t border-gray-700 pt-4">
                            <p class="text-gray-300 leading-relaxed">
                                {{ $experience->job_description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


{{--@extends('front.layouts.app')--}}
{{--@section('title', 'Experience')--}}

{{--@section('content')--}}
{{--    <!-- Experience Section -->--}}
{{--    <section id="experience" class="py-4 p-2">--}}
{{--        <div class="container mx-auto">--}}
{{--            <h2 class="text-4xl font-bold text-center">Experience</h2>--}}
{{--            @foreach($experiences as $experience)--}}
{{--            <div class="mt-4 space-y-4">--}}
{{--                <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex space-x-6">--}}
{{--                    <div>--}}
{{--                        <img src="{{ asset('storage/' . $experience->image) }}" alt="Experience Image" class="rounded-lg shadow-lg h-64 w-64">--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <h3 class="text-2xl font-bold">{{ $experience->job_title }}</h3>--}}
{{--                        <p class="text-lg">{{ $experience->company_name }} ({{ $experience->company_address }})</p>--}}
{{--                        <p class="text-lg">{{ $experience->joining_date }} - {{ $experience->left_date }}</p>--}}
{{--                        <p class="text-lg">{{ $experience->expertise }}</p>--}}
{{--                        <p class="text-lg">{{ $experience->job_description }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
