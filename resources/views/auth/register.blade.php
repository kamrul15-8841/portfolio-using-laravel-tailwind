<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 min-h-screen flex items-center justify-center">
<div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
    <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Register</h1>

    <!-- Registration Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            @error('email')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            @error('password')
            <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required
                   class="w-full mt-1 p-2 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
        </div>

        <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">
            Register
        </button>
    </form>

    <!-- Login Redirect -->
    <p class="mt-4 text-sm text-center text-gray-600">
        Already have an account?
        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Login</a>
    </p>
</div>
</body>
</html>
