@extends('front.layouts.app')
@section('title', 'Skills')

@section('content')
    <!-- Skills Section -->
    <section id="skills" class="py-4 p-2">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center">Skills</h2>
            <div class="mt-4 space-y-4">
                @foreach($skills as $skill)
                <div>
                    <p class="text-lg font-bold">PHP</p>
                    <div class="bg-gray-800 h-4 rounded-lg">
                        <div class="bg-purple-400 h-4 rounded-lg" style="width: 90%;"></div>
                    </div>
                </div>
                @endforeach
                <div>
                    <p class="text-lg font-bold">Laravel</p>
                    <div class="bg-gray-800 h-4 rounded-lg">
                        <div class="bg-green-400 h-4 rounded-lg" style="width: 85%;"></div>
                    </div>
                </div>
                <div>
                    <p class="text-lg font-bold">JavaScript</p>
                    <div class="bg-gray-800 h-4 rounded-lg">
                        <div class="bg-red-400 h-4 rounded-lg" style="width: 70%;"></div>
                    </div>
                </div>
                <div>
                    <p class="text-lg font-bold">ReactJS</p>
                    <div class="bg-gray-800 h-4 rounded-lg">
                        <div class="bg-orange-400 h-4 rounded-lg" style="width: 60%;"></div>
                    </div>
                </div>
                <div>
                    <p class="text-lg font-bold">HTML</p>
                    <div class="bg-gray-800 h-4 rounded-lg">
                        <div class="bg-amber-400 h-4 rounded-lg" style="width: 90%;"></div>
                    </div>
                </div>
                <div>
                    <p class="text-lg font-bold">CSS</p>
                    <div class="bg-gray-800 h-4 rounded-lg">
                        <div class="bg-lime-400 h-4 rounded-lg" style="width: 90%;"></div>
                    </div>
                </div>
                <!-- Add more skills -->
            </div>
        </div>
    </section>
@endsection
