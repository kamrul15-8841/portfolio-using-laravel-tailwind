@extends('front.layouts.app')

@section('title', 'Projects')

@section('content')
    <!-- Projects Section -->
    <section id="projects" class="py-4 container mx-auto p-2">
        <h2 class="text-4xl font-bold text-center">Projects</h2>
        <div class="mt-4">
            <!-- Tab Navigation -->
            <div class="flex justify-center space-x-4 flex-wrap">
                <button
                    class="tab-btn bg-blue-500 text-white py-2 px-4 rounded-lg mb-2"
                    data-category="all">All</button>
                @foreach($projects->pluck('type')->unique() as $type)
                    <button
                        class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg mb-2"
                        data-category="{{ Str::slug($type) }}">
                        {{ $type }}
                    </button>
                @endforeach
            </div>
            <!-- Projects -->
            <div id="project-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                @foreach($projects as $project)
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg"
                         data-category="{{ Str::slug($project->type) }}">
                        <img src="{{ asset('storage/' . $project->image) }}"
                             alt="Project Image"
                             class="rounded-lg shadow-lg w-full h-48 object-cover">
                        <h3 class="text-2xl font-bold mt-4">{{ $project->title }}</h3>
                        <div class="flex flex-wrap gap-2 my-2">
                            @foreach(explode(',', $project->stack) as $tech)
                                <span class="bg-gray-700 px-2 py-1 rounded text-sm">
                                    {{ trim($tech) }}
                                </span>
                            @endforeach
                        </div>
                        <p class="mt-2 text-gray-300">{{ $project->short_description }}</p>
                        <p class="mt-2 text-gray-400 text-sm">{{ $project->long_description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('body-scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".tab-btn");
            const projects = document.querySelectorAll(".project");

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    // Remove active state from all tabs
                    tabs.forEach((t) => {
                        t.classList.remove("bg-blue-500", "text-white");
                        t.classList.add("bg-gray-800");
                    });

                    // Add active state to clicked tab
                    tab.classList.add("bg-blue-500", "text-white");
                    tab.classList.remove("bg-gray-800");

                    const category = tab.dataset.category;

                    // Filter projects
                    projects.forEach((project) => {
                        const projectCategory = project.dataset.category;
                        if (category === "all" || projectCategory === category) {
                            project.classList.remove("hidden");
                        } else {
                            project.classList.add("hidden");
                        }
                    });
                });
            });
        });
    </script>
@endpush

{{--@extends('front.layouts.app')--}}

{{--@section('title', 'Projects')--}}

{{--@section('content')--}}
{{--    <!-- Projects Section -->--}}
{{--    <section id="projects" class="py-4 container mx-auto p-2">--}}
{{--        <h2 class="text-4xl font-bold text-center">Projects</h2>--}}
{{--        <div class="mt-4">--}}
{{--            <!-- Tab Navigation -->--}}
{{--            <div class="flex justify-center space-x-4">--}}
{{--                <button--}}
{{--                    class="tab-btn bg-blue-500 text-white py-2 px-4 rounded-lg"--}}
{{--                    data-category="all">All</button>--}}
{{--                <button--}}
{{--                    class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg"--}}
{{--                    data-category="web-design">Web Design</button>--}}
{{--                <button--}}
{{--                    class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg"--}}
{{--                    data-category="web-development">Web Development</button>--}}
{{--                <button--}}
{{--                    class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg"--}}
{{--                    data-category="mobile">Mobile</button>--}}
{{--            </div>--}}
{{--            <!-- Projects -->--}}
{{--            <div id="project-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">--}}
{{--                @foreach($projects as $project)--}}
{{--                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="{{ $project->type }}">--}}
{{--                        <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="rounded-lg shadow-lg">--}}
{{--                        <h3 class="text-2xl font-bold">{{ $project->title }}</h3>--}}
{{--                        <h6 class="text-lg font-bold">{{ $project->stack }}</h6>--}}
{{--                        <p class="mt-2">{{ $project->short_description }}</p>--}}
{{--                        <p class="mt-2">{{ $project->long_description }}</p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@endsection--}}
{{--@push('body-scripts')--}}
{{--    <script>--}}
{{--        // JavaScript for Tab Navigation--}}
{{--        document.addEventListener("DOMContentLoaded", () => {--}}
{{--            const tabs = document.querySelectorAll(".tab-btn");--}}
{{--            const projects = document.querySelectorAll(".project");--}}

{{--            tabs.forEach((tab) => {--}}
{{--                tab.addEventListener("click", () => {--}}
{{--                    // Remove active state from all tabs--}}
{{--                    tabs.forEach((t) => t.classList.remove("bg-blue-500", "text-white"));--}}
{{--                    tabs.forEach((t) => t.classList.add("bg-gray-800"));--}}

{{--                    // Add active state to the clicked tab--}}
{{--                    tab.classList.add("bg-blue-500", "text-white");--}}

{{--                    const category = tab.getAttribute("data-category");--}}

{{--                    // Show or hide projects based on the selected category--}}
{{--                    projects.forEach((project) => {--}}
{{--                        if (category === "all" || project.getAttribute("data-category") === category) {--}}
{{--                            project.classList.remove("hidden");--}}
{{--                        } else {--}}
{{--                            project.classList.add("hidden");--}}
{{--                        }--}}
{{--                    });--}}
{{--                });--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
