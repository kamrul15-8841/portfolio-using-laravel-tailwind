@extends('front.layouts.app')
@section('title', 'Services')

@section('content')
    <!-- services Section -->
    <section id="services" class="py-16 container mx-auto p-2">
        <h2 class="text-4xl font-bold text-center">services</h2>
        <div class="mt-8">
            <!-- Tab Navigation -->
            <div class="flex justify-center space-x-4">
                <button
                    class="tab-btn bg-blue-500 text-white py-2 px-4 rounded-lg"
                    data-category="all">All</button>
                <button
                    class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg"
                    data-category="web-design">Web Design</button>
                <button
                    class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg"
                    data-category="web-development">Web Development</button>
                <button
                    class="tab-btn bg-gray-800 text-white py-2 px-4 rounded-lg"
                    data-category="mobile">Mobile</button>
            </div>
            <!-- services -->
            <div id="service-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                @foreach($services as $service)
                    <div class="service bg-gray-800 p-6 rounded-lg shadow-lg" data-category="{{ $service->type }}">
                        <img src="{{ asset('storage/' . $service->image) }}" alt="service Image" class="rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold">{{ $service->title }}</h3>
                        <h6 class="text-lg font-bold">{{ $service->stack }}</h6>
                        <p class="mt-2">{{ $service->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@push('body-scripts')
    <script>
        // JavaScript for Tab Navigation
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".tab-btn");
            const services = document.querySelectorAll(".service");

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    // Remove active state from all tabs
                    tabs.forEach((t) => t.classList.remove("bg-blue-500", "text-white"));
                    tabs.forEach((t) => t.classList.add("bg-gray-800"));

                    // Add active state to the clicked tab
                    tab.classList.add("bg-blue-500", "text-white");

                    const category = tab.getAttribute("data-category");

                    // Show or hide services based on the selected category
                    services.forEach((service) => {
                        if (category === "all" || service.getAttribute("data-category") === category) {
                            service.classList.remove("hidden");
                        } else {
                            service.classList.add("hidden");
                        }
                    });
                });
            });
        });
    </script>
@endpush
