@extends('backend.layouts.app')

@section('title', 'Edit service')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Edit service</h1>
            <a href="{{ route('services.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Back to service List
            </a>
        </div>

        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <!-- Type -->
            <div class="mb-4">
                <label for="type" class="block text-gray-600 font-medium">Type</label>
                <input type="text" name="type" id="type" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('type', $service->type) }}">
                @error('type')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Stack -->
            <div class="mb-4">
                <label for="stack" class="block text-gray-600 font-medium">Technology Stack</label>
                <input type="text" name="stack" id="stack" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('stack', $service->stack) }}">
                @error('stack')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- GitHub Link -->
            <div class="mb-4">
                <label for="github" class="block text-gray-600 font-medium">GitHub Link</label>
                <input type="url" name="github" id="github" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('github', $service->github) }}">
                @error('github')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Web Link -->
            <div class="mb-4">
                <label for="link" class="block text-gray-600 font-medium">Web Link</label>
                <input type="url" name="link" id="link" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('link', $service->link) }}">
                @error('link')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Long Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-600 font-medium">Long Description</label>
                <textarea name="description" id="description" rows="6" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $service->description) }}</textarea>
                @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-600 font-medium">Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="mt-2">
                    @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" alt="service Image" class="h-20 rounded-lg shadow">
                    @endif
                </div>
                @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Status -->
            <div class="mb-4">
                <label for="status" class="block text-gray-600 font-medium">Status</label>
                <select name="status" id="status" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="1" {{ old('status', $service->status) == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $service->status) == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-4">
                <label for="slug" class="block text-gray-600 font-medium">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('slug', $service->slug) }}">
                @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition">
                Update service
            </button>
        </form>
    </div>
@endsection
