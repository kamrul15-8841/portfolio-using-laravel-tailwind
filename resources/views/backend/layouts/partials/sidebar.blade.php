<aside id="sidebar" class="w-64 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 ease-in-out">
    <!-- Sidebar Header (optional) -->
    <div class="text-center mb-6">
        <h1 class="text-xl font-bold cursor-pointer" id="toggleSidebar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
            </svg>
        </h1>
    </div>

    <!-- Sidebar Navigation -->
    <ul class="space-y-3">
        <!-- Example Link -->
        <li class="text-center group">
            <a href="{{ route('dashboard') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Home</span>
            </a>
        </li>

        <!-- Repeat for other links -->
        <li class="group">
            <a href="{{ route('sliders.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Slider</span>
            </a>
        </li>

        <!-- About Link -->
        <li class="group">
            <a href="{{ route('abouts.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">About</span>
            </a>
        </li>

        <!-- Experience Link -->
        <li class="group">
            <a href="{{ route('experiences.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7V5a2 2 0 00-2-2H10a2 2 0 00-2 2v2M3 7h18M5 7a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5z" />
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Experience</span>
            </a>
        </li>

        <!-- Projects Link -->
        <li class="group">
            <a href="{{ route('projects.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h5l2 2h9a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Projects</span>
            </a>
        </li>

        <!-- Contact Link -->
        <li class="group">
            <a href="{{ route('contacts.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z" />
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Contact</span>
            </a>
        </li>

        <!-- Services Link -->
        <li class="group">
            <a href="{{ route('services.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 15l-3.95-3.95a2.5 2.5 0 013.12-3.12L12 10.5m4.5-4.5L16 6m1.16-1.16l4 4m-7.32 7.32a2.5 2.5 0 11-3.12 3.12L9 19.5M15 12h4m-2 2v-4m4 6v6m-6-6h6" />
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Services</span>
            </a>
        </li>

        <!-- Course Link -->
        <li class="group">
            <a href="{{ route('courses.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9-5 9-5 9 5-9 5zm0 0v6m-4-3h8" />
                </svg>
                <span class="ml-2 text-sm font-medium sidebar-text">Course</span>
            </a>
        </li>

        <!-- Skill Link -->
        <li class="group">
            <a href="{{ route('skills.index') }}"
               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">
                <!-- Toolbox Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 12v7a2 2 0 002 2h12a2 2 0 002-2v-7M16 7h2a2 2 0 012 2v1M6 7h2a2 2 0 00-2 2v1m0-3h8a2 2 0 012 2v1H4V9a2 2 0 012-2z" />
                </svg>
                <!-- Skill Text -->
                <span class="ml-2 text-sm font-medium sidebar-text">
            Skill
        </span>
            </a>
        </li>

    </ul>
</aside>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleSidebarButton = document.getElementById('toggleSidebar');
    const sidebarTextElements = document.querySelectorAll('.sidebar-text');

    // Set an initial state for the sidebar to be expanded
    let isSidebarCollapsed = false;

    toggleSidebarButton.addEventListener('click', () => {
        if (isSidebarCollapsed) {
            // Expand the sidebar
            sidebar.classList.remove('w-18');
            sidebar.classList.add('w-64');

            // Show text for all sidebar links
            sidebarTextElements.forEach(element => {
                element.style.display = 'inline';
            });

            isSidebarCollapsed = false;
        } else {
            // Collapse the sidebar
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-18');

            // Hide text for all sidebar links
            sidebarTextElements.forEach(element => {
                element.style.display = 'none';
            });

            isSidebarCollapsed = true;
        }
    });
</script>


{{--<aside id="sidebar" class="w-64 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 ease-in-out">--}}
{{--    <!-- Sidebar Header (optional) -->--}}
{{--    <div class="text-center mb-6">--}}
{{--        <h1 class="text-xl font-bold cursor-pointer" id="toggleSidebar">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 mx-auto">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>--}}
{{--            </svg>--}}
{{--        </h1>--}}
{{--    </div>--}}

{{--    <!-- Sidebar Navigation -->--}}
{{--    <ul class="space-y-3">--}}
{{--        <li class="text-center group">--}}
{{--            <a href="{{ route('dashboard.home') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}


{{--        <!-- Slider Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('sliders.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Slider</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- About Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('abouts.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">About</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Experience Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('experiences.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7V5a2 2 0 00-2-2H10a2 2 0 00-2 2v2M3 7h18M5 7a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5z" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Experience</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Projects Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('projects.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h5l2 2h9a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Projects</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Contact Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('contacts.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Contact</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Services Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('services.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.25 15l-3.95-3.95a2.5 2.5 0 013.12-3.12L12 10.5m4.5-4.5L16 6m1.16-1.16l4 4m-7.32 7.32a2.5 2.5 0 11-3.12 3.12L9 19.5M15 12h4m-2 2v-4m4 6v6m-6-6h6" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Services</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Course Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('courses.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l-9-5 9-5 9 5-9 5zm0 0v6m-4-3h8" />--}}
{{--                </svg>--}}
{{--                <span class="ml-2 text-sm font-medium">Course</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Skill Link -->--}}
{{--        <li class="group">--}}
{{--            <a href="{{ route('skills.index') }}"--}}
{{--               class="flex items-center py-2 px-4 rounded bg-gray-800 text-white transition-all duration-300 hover:bg-teal-500 hover:scale-105 ease-in-out">--}}
{{--                <!-- Toolbox Icon -->--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 text-white group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                          d="M4 12v7a2 2 0 002 2h12a2 2 0 002-2v-7M16 7h2a2 2 0 012 2v1M6 7h2a2 2 0 00-2 2v1m0-3h8a2 2 0 012 2v1H4V9a2 2 0 012-2z" />--}}
{{--                </svg>--}}
{{--                <!-- Skill Text -->--}}
{{--                <span class="ml-2 text-sm font-medium">--}}
{{--            Skill--}}
{{--        </span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--    </ul>--}}
{{--</aside>--}}


{{--<script>--}}
{{--    const sidebar = document.getElementById('sidebar');--}}
{{--    const toggleSidebarButton = document.getElementById('toggleSidebar');--}}

{{--    // Set an initial state for the sidebar to be expanded--}}
{{--    let isSidebarCollapsed = false;--}}

{{--    toggleSidebarButton.addEventListener('click', () => {--}}
{{--        if (isSidebarCollapsed) {--}}
{{--            // Expand the sidebar--}}
{{--            sidebar.classList.remove('w-16');--}}
{{--            sidebar.classList.add('w-64');--}}
{{--            isSidebarCollapsed = false;--}}
{{--        } else {--}}
{{--            // Collapse the sidebar--}}
{{--            sidebar.classList.remove('w-64');--}}
{{--            sidebar.classList.add('w-16');--}}
{{--            isSidebarCollapsed = true;--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}

{{--big icons--}}
<!-- Home Link -->
{{--        <li class="text-center group">--}}
{{--            <a href="{{ route('dashboard.home') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <!-- Slider Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href="--}}
{{--                {{ route('sliders.index') }}--}}
{{--                " class="block py-3 px-2 rounded transition-all duration-300 hover:bg-indigo-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Slider</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- About Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href="--}}
{{--                {{ route('abouts.index') }}--}}
{{--                " class="block py-3 px-2 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">About</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Experience Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href="{{ route('experiences.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">--}}
{{--                <!-- Briefcase Icon -->--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7V5a2 2 0 00-2-2H10a2 2 0 00-2 2v2M3 7h18M5 7a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5z" />--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Experience</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Projects Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href=--}}
{{--               "{{ route('projects.index') }}"--}}
{{--               class="block py-3 px-2 rounded transition-all duration-300 hover:bg-green-600 hover:scale-105 ease-in-out">--}}
{{--                <!-- Folder Icon -->--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7a2 2 0 012-2h5l2 2h9a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Projects</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Contact Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href="{{ route('contacts.index') }}"--}}
{{--               class="block py-3 px-2 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">--}}
{{--                <!-- Envelope Icon -->--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z" />--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Contact</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Service Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href="{{ route('services.index') }}"--}}
{{--               class="block py-3 px-2 rounded transition-all duration-300 hover:bg-yellow-500 hover:scale-105 ease-in-out">--}}
{{--                <!-- Wrench and Screwdriver Icon -->--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                          d="M8.25 15l-3.95-3.95a2.5 2.5 0 013.12-3.12L12 10.5m4.5-4.5L16 6m1.16-1.16l4 4m-7.32 7.32a2.5 2.5 0 11-3.12 3.12L9 19.5M15 12h4m-2 2v-4m4 6v6m-6-6h6" />--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Service</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Course Link -->--}}
{{--        <li class="text-center group">--}}
{{--            <a href="{{ route('courses.index') }}"--}}
{{--               class="block py-3 px-2 rounded transition-all duration-300 hover:bg-indigo-500 hover:scale-105 ease-in-out">--}}
{{--                <!-- Graduation Cap Icon -->--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                          d="M12 14l-9-5 9-5 9 5-9 5zm0 0v6m-4-3h8" />--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Course</span>--}}
{{--            </a>--}}
{{--        </li>--}}
