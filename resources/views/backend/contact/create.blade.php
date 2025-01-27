@extends('backend.layouts.app')

@section('title', 'Add Contact')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Add New Contact</h1>
            <a href="{{ route('contacts.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Back to Contact List
            </a>
        </div>

        <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600 font-medium">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('name') }}" required>
                @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('email') }}">
                @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- mobile -->
            <div class="mb-4">
                <label for="mobile" class="block text-gray-600 font-medium">Mobile</label>
                <input type="text" name="mobile" id="mobile" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('mobile') }}">
                @error('mobile')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Short message -->
            <div class="mb-4">
                <label for="message" class="block text-gray-600 font-medium">Message</label>
                <textarea name="message" id="message" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('message') }}</textarea>
                @error('message')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-gray-600 font-medium">Status</label>
                <select name="status" id="status" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition">
                Save Contact
            </button>
        </form>
    </div>
@endsection
