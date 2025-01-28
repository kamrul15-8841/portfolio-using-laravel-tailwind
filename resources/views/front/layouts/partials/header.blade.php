<!-- Header -->
{{--<header class="bg-transparent bg-opacity-100 fixed w-full z-50 shadow-lg">--}}
<header class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% fixed w-full z-50 shadow-lg">
{{--<header class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 fixed w-full z-50 shadow-lg">--}}
    <div class="container mx-auto px-3 py-6 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold">
            <a href="{{ route('home') }}" class="hover:text-purple-900 text-2xl ml-2">KAMRUL</a>
{{--            <a href="{{ route('home') }}" class="hover:bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-4xl ml-2">KAMRUL</a>--}}
        </div>

        <!-- Navigation -->
        <nav class="flex space-x-6">
            <a href="{{ route('home') }}" class="hover:text-purple-900 text-xl">Home</a>
            <a href="{{ route('about') }}" class="hover:text-purple-900 text-xl">About</a>
            <a href="{{ route('experience') }}" class="hover:text-purple-900 text-xl">Experience</a>
            <a href="{{ route('skill') }}" class="hover:text-purple-900 text-xl">Skills</a>
            <a href="{{ route('project') }}" class="hover:text-purple-900 text-xl">Projects</a>
            <a href="{{ route('service') }}" class="hover:text-purple-900 text-xl">Services</a>
            <a href="{{ route('course') }}" class="hover:text-purple-900 text-xl">Courses</a>
{{--            <a href="{{ route('certificate') }}" class="hover:text-blue-400 text-xl">Certificates</a>--}}
            <a href="{{ route('contact') }}" class="hover:text-blue-400 text-xl">Contact</a>
            <a href="{{ route('other') }}" class="hover:text-purple-900 text-xl">others</a>
        </nav>

        <!-- Contact and Login -->
        <div class="flex space-x-6">
            @if (Route::has('login'))
                    @auth
{{--                        <a href="{{ url('/dashboard') }}" class="hover:text-purple-900 text-xl">Dashboard</a>--}}
                    <a href="{{ route('dashboard') }}" class="hover:text-purple-900 text-xl">Dashboard</a>
{{--                        <a href="{{ route('logout') }}" class="hover:text-purple-900 text-xl">Logout</a>--}}
                    <form method="POST" action="{{ route('logout') }}" class="hover:text-purple-900 text-xl">
                        @csrf
                        <a href="{{ route('dashboard') }}" class="hover:text-purple-900 text-xl" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
{{--                        <x-dropdown-link :href="route('logout')"--}}
{{--                                         onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                            {{ __('Log Out') }}--}}
{{--                        </x-dropdown-link>--}}
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-purple-900 text-xl">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:text-purple-900 text-xl">Register</a>
                        @endif
                    @endauth
            @endif
        </div>
    </div>
</header>
