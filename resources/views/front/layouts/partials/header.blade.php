<!-- Header -->
<header class="bg-gray-900 bg-opacity-80 fixed w-full z-50 shadow-lg">
    <div class="container mx-auto px-3 py-6 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold">Logo</div>

        <!-- Navigation -->
        <nav class="flex space-x-6">
            <a href="{{ route('home') }}" class="hover:text-blue-400 text-xl">Home</a>
            <a href="{{ route('about') }}" class="hover:text-blue-400 text-xl">About</a>
            <a href="{{ route('experience') }}" class="hover:text-blue-400 text-xl">Experience</a>
            <a href="{{ route('skills') }}" class="hover:text-blue-400 text-xl">Skills</a>
            <a href="{{ route('projects') }}" class="hover:text-blue-400 text-xl">Projects</a>
            <a href="{{ route('services') }}" class="hover:text-blue-400 text-xl">Services</a>
            <a href="{{ route('courses') }}" class="hover:text-blue-400 text-xl">Courses</a>
            <a href="{{ route('certificates') }}" class="hover:text-blue-400 text-xl">Certificates</a>
            <a href="{{ route('others') }}" class="hover:text-blue-400 text-xl">others</a>
        </nav>

        <!-- Contact and Login -->
        <div class="flex space-x-4">
            <a href="{{ route('contacts') }}" class="hover:text-blue-400 text-xl">Contact</a>
            <a href="{{ route('dashboard.home') }}" class="hover:text-blue-400 text-xl">Login</a>
        </div>
    </div>
</header>
