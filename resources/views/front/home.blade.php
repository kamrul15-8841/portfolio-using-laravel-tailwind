@extends('front.layouts.app')
@section('title', 'Home')

<!-- Main Content -->
@section('content')
        <!-- Carousel -->
        <!-- Carousel -->
        <section id="carousel" class="relative min-h-screen bg-gray-800 overflow-hidden p-2">
            <!-- Carousel Wrapper -->
            <div id="carousel-images" class="absolute inset-0 flex transition-transform duration-700 ease-in-out">
                @foreach($sliders as $slider)
                    <div
                        class="min-w-full bg-cover bg-center bg-no-repeat flex items-center justify-center"
                        style="background-image: url('{{ asset('storage/' . $slider->image) }}');"
                        data-caption="{{ $slider->caption }}"
                        data-description="{{ $slider->description }}">
                    </div>
                @endforeach
            </div>

            <!-- Overlay for better readability -->
            <div class="absolute inset-0 bg-gray-800 bg-opacity-50"></div>

            <!-- Captions and Descriptions -->
            <div class="absolute inset-0 flex flex-col justify-center items-center z-10 text-center text-white px-4">
                <h2 id="carousel-caption" class="text-4xl font-bold mb-4"></h2>
                <p id="carousel-description" class="text-lg"></p>
            </div>

            <!-- Navigation Arrows -->
            <div class="absolute inset-0 flex justify-between items-center px-4 z-20">
                <button id="prev-btn" class="bg-white text-gray-800 p-2 rounded-full shadow-md hover:bg-gray-100">‹</button>
                <button id="next-btn" class="bg-white text-gray-800 p-2 rounded-full shadow-md hover:bg-gray-100">›</button>
            </div>

            <!-- Indicators -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 flex space-x-2">
                @foreach($sliders as $index => $slider)
                    <div
                        class="w-3 h-3 rounded-full {{ $index === 0 ? 'bg-blue-500' : 'bg-gray-400' }}"
                        data-index="{{ $index }}"></div>
                @endforeach
            </div>
        </section>

        @push('body-scripts')
            <script>
                // Fetching data dynamically from the HTML
                const slides = document.querySelectorAll('#carousel-images > div');
                const captions = Array.from(slides).map(slide => slide.getAttribute('data-caption'));
                const descriptions = Array.from(slides).map(slide => slide.getAttribute('data-description'));

                const carouselImages = document.getElementById('carousel-images');
                const carouselCaption = document.getElementById('carousel-caption');
                const carouselDescription = document.getElementById('carousel-description');
                const indicators = document.querySelectorAll('[data-index]');

                let currentIndex = 0;
                const totalImages = slides.length;

                // Function to update the carousel
                function updateCarousel() {
                    // Update transform for the images
                    carouselImages.style.transform = `translateX(-${currentIndex * 100}%)`;

                    // Update the caption and description
                    carouselCaption.textContent = captions[currentIndex] || 'No Caption';
                    carouselDescription.textContent = descriptions[currentIndex] || 'No Description';

                    // Update indicators
                    indicators.forEach((indicator, index) => {
                        indicator.classList.toggle('bg-blue-500', index === currentIndex);
                        indicator.classList.toggle('bg-gray-400', index !== currentIndex);
                    });
                }

                // Event listeners for navigation buttons
                document.getElementById('prev-btn').addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
                    updateCarousel();
                });

                document.getElementById('next-btn').addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % totalImages;
                    updateCarousel();
                });

                // Auto-slide every 5 seconds
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % totalImages;
                    updateCarousel();
                }, 5000);

                // Initialize carousel
                updateCarousel();
            </script>
        @endpush

        <!-- About Section -->
        <section id="about" class="py-16 container mx-auto p-2">
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

        <!-- Experience Section -->
        <section id="experience" class="bg-gray-900 py-16 p-2">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center">Experience</h2>
                <div class="mt-8 space-y-4">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold">Application Developer</h3>
                        <p class="text-lg">Noman Group | 01 February 2023 - Present</p>
                    </div>
                </div>
                <div class="mt-8 space-y-4">
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold">Quality Assurance Engineer</h3>
                        <p class="text-lg">InsideMaps Bangladesh | 08 September 2022 - 05 June 2023</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-16 container mx-auto p-2">
            <h2 class="text-4xl font-bold text-center">Projects</h2>
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
                <!-- Projects -->
                <div id="project-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="web-design">
                        <h3 class="text-2xl font-bold">Web Design Project 1</h3>
                        <p class="mt-2">A description of Web Design Project 1.</p>
                    </div>
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="web-design">
                        <h3 class="text-2xl font-bold">Web Design Project 2</h3>
                        <p class="mt-2">A description of Web Design Project 2.</p>
                    </div>
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="web-development">
                        <h3 class="text-2xl font-bold">Web Development Project 1</h3>
                        <p class="mt-2">A description of Web Development Project 1.</p>
                    </div>
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="web-development">
                        <h3 class="text-2xl font-bold">Web Development Project 2</h3>
                        <p class="mt-2">A description of Web Development Project 2.</p>
                    </div>
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="mobile">
                        <h3 class="text-2xl font-bold">Mobile Project 1</h3>
                        <p class="mt-2">A description of Mobile Project 1.</p>
                    </div>
                    <div class="project bg-gray-800 p-6 rounded-lg shadow-lg" data-category="mobile">
                        <h3 class="text-2xl font-bold">Mobile Project 2</h3>
                        <p class="mt-2">A description of Mobile Project 2.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Skills Section -->
        <section id="skills" class="bg-gray-900 py-16 p-2">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center">Skills</h2>
                <div class="mt-8 space-y-4">
                    <div>
                        <p class="text-lg font-bold">PHP</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-blue-500 h-4 rounded-lg" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Laravel</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-blue-500 h-4 rounded-lg" style="width: 85%;"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold">JavaScript</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-blue-500 h-4 rounded-lg" style="width: 70%;"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold">ReactJS</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-blue-500 h-4 rounded-lg" style="width: 60%;"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold">HTML</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-blue-500 h-4 rounded-lg" style="width: 90%;"></div>
                        </div>
                    </div>
                    <div>
                        <p class="text-lg font-bold">CSS</p>
                        <div class="bg-gray-800 h-4 rounded-lg">
                            <div class="bg-blue-500 h-4 rounded-lg" style="width: 90%;"></div>
                        </div>
                    </div>
                    <!-- Add more skills -->
                </div>
            </div>
        </section>

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

        <!-- Courses Section -->
        <section id="courses" class="bg-gray-900 py-16 p-2">
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

        <!-- Contact Section -->
        <section id="contact" class="py-16 container mx-auto p-2">
            <h2 class="text-4xl font-bold text-center">Contact</h2>
            <form class="mt-8 space-y-4 max-w-lg mx-auto">
                <input type="text" placeholder="Your Name" class="w-full p-4 bg-gray-800 rounded-lg">
                <input type="email" placeholder="Your Email" class="w-full p-4 bg-gray-800 rounded-lg">
                <textarea placeholder="Your Message" class="w-full p-4 bg-gray-800 rounded-lg"></textarea>
                <button class="w-full bg-blue-500 py-4 rounded-lg font-bold text-lg">Send</button>
            </form>
        </section>
@endsection

@push('body-scripts')


    <script>
        // JavaScript for Tab Navigation
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll(".tab-btn");
            const projects = document.querySelectorAll(".project");

            tabs.forEach((tab) => {
                tab.addEventListener("click", () => {
                    // Remove active state from all tabs
                    tabs.forEach((t) => t.classList.remove("bg-blue-500", "text-white"));
                    tabs.forEach((t) => t.classList.add("bg-gray-800"));

                    // Add active state to the clicked tab
                    tab.classList.add("bg-blue-500", "text-white");

                    const category = tab.getAttribute("data-category");

                    // Show or hide projects based on the selected category
                    projects.forEach((project) => {
                        if (category === "all" || project.getAttribute("data-category") === category) {
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
