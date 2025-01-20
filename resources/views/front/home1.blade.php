<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 text-white">

<!-- Header -->
<header class="bg-gray-900 bg-opacity-80 fixed w-full z-50 shadow-lg">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold">Logo</div>

        <!-- Navigation -->
        <nav class="flex space-x-6">
            <a href="#home" class="hover:text-blue-400">Home</a>
            <a href="#about" class="hover:text-blue-400">About</a>
            <a href="#experience" class="hover:text-blue-400">Experience</a>
            <a href="#skills" class="hover:text-blue-400">Skills</a>
            <a href="#projects" class="hover:text-blue-400">Projects</a>
            <a href="#services" class="hover:text-blue-400">Services</a>
            <a href="#courses" class="hover:text-blue-400">Courses</a>
            <a href="#certificates" class="hover:text-blue-400">Certificates</a>
        </nav>

        <!-- Contact and Login -->
        <div class="flex space-x-4">
            <a href="#contact" class="hover:text-blue-400">Contact</a>
            <a href="#" class="hover:text-blue-400">Login</a>
        </div>
    </div>
</header>
 
<!-- Main Content -->
<main class="pt-20">
    <!-- Carousel -->
    <section id="carousel" class="relative h-96 bg-gray-800">
        <div class="absolute inset-0 flex items-center justify-between">
            <button class="bg-white p-2 rounded-full shadow-md">‹</button>
            <button class="bg-white p-2 rounded-full shadow-md">›</button>
        </div>
        <div class="h-full flex items-center justify-center">
            <div class="text-center">
                <h2 class="text-3xl font-bold">Certificate Title</h2>
                <p class="text-lg mt-2">Certificate description here.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 container mx-auto">
        <div class="flex flex-col md:flex-row items-center space-y-8 md:space-y-0">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold">About Me</h2>
                <p class="mt-4 text-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod nulla ac efficitur placerat. Integer eget ligula ac augue vehicula luctus.
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="img/about.png" alt="About Image" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="bg-gray-900 py-16">
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
    <section id="projects" class="py-16 container mx-auto">
        <h2 class="text-4xl font-bold text-center">Projects</h2>
        <div class="mt-8">
            <!-- Tab Navigation -->
            <div class="flex justify-center space-x-4">
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg">All</button>
                <button class="bg-gray-800 py-2 px-4 rounded-lg">Web Design</button>
                <button class="bg-gray-800 py-2 px-4 rounded-lg">Web Development</button>
                <button class="bg-gray-800 py-2 px-4 rounded-lg">Mobile</button>
            </div>
            <!-- Projects -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8">
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Title 1</h3>
                    <p class="mt-2">Project description 1 here.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Title 1</h3>
                    <p class="mt-2">Project description 1 here.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Title 1</h3>
                    <p class="mt-2">Project description 1 here.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Title 1</h3>
                    <p class="mt-2">Project description 1 here.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Title 1</h3>
                    <p class="mt-2">Project description 1 here.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Title 1</h3>
                    <p class="mt-2">Project description 1 here.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="bg-gray-900 py-16">
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
    <section id="services" class="py-16 container mx-auto">
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
    <section id="courses" class="bg-gray-900 py-16">
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
    <section id="contact" class="py-16 container mx-auto">
        <h2 class="text-4xl font-bold text-center">Contact</h2>
        <form class="mt-8 space-y-4 max-w-lg mx-auto">
            <input type="text" placeholder="Your Name" class="w-full p-4 bg-gray-800 rounded-lg">
            <input type="email" placeholder="Your Email" class="w-full p-4 bg-gray-800 rounded-lg">
            <textarea placeholder="Your Message" class="w-full p-4 bg-gray-800 rounded-lg"></textarea>
            <button class="w-full bg-blue-500 py-4 rounded-lg font-bold text-lg">Send</button>
        </form>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-900 py-4 text-center">
    <p>&copy; 2025 Portfolio. All rights reserved.</p>
</footer>

</body>
</html>
