@extends('front.layouts.app')
@section('title', 'Skills')

@section('content')
    <!-- Skills Section -->
    <section id="skills" class="py-4 p-2">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center">Skills</h2>
            <div class="mt-4 space-y-4">
                @foreach($skills as $skill)
                    @php
                        // Create an array of Tailwind color classes
                        $colors = ['purple', 'green', 'red', 'orange', 'amber', 'lime'];
                        // Get color based on loop index
                        $color = $colors[$loop->index % count($colors)];
                    @endphp
                    <div>
                        <p class="text-lg font-bold">{{ $skill->title }}</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-{{ $color }}-400 h-4 rounded-lg transition-all duration-500"
                                 style="width: {{ $skill->progress }}%;">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

{{--    <section id="skills" class="py-4 p-2">--}}
{{--        <div class="container mx-auto">--}}
{{--            <h2 class="text-4xl font-bold text-center">Skills</h2>--}}
{{--            <div class="mt-4 space-y-4">--}}
{{--                @foreach($skills as $skill)--}}
{{--                <div>--}}
{{--                    <p class="text-lg font-bold">{{ $skill->title }}</p>--}}
{{--                    <div class="bg-gray-800 h-4 rounded-lg">--}}
{{--                        <div class="bg-purple-400 h-4 rounded-lg" style="width: {{ $skill->progress }}%;"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@endsection
