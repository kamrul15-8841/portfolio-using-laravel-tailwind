@extends('backend.layouts.app')

@section('title', 'Edit Project')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Edit Project</h1>
            <a href="{{ route('projects.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Back to Project List
            </a>
        </div>

        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-600 font-medium">Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title', $project->title) }}" required>
                @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Type -->
            <div class="mb-4">
                <label for="type" class="block text-gray-600 font-medium">Type</label>
                <input type="text" name="type" id="type" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('type', $project->type) }}">
                @error('type')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Stack -->
            <div class="mb-4">
                <label for="stack" class="block text-gray-600 font-medium">Technology Stack</label>
                <input type="text" name="stack" id="stack" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('stack', $project->stack) }}">
                @error('stack')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Short Description -->
            <div class="mb-4">
                <label for="short_description" class="block text-gray-600 font-medium">Short Description</label>
                <textarea name="short_description" id="short_description" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('short_description', $project->short_description) }}</textarea>
                @error('short_description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Long Description -->
            <div class="mb-4">
                <label for="long_description" class="block text-gray-600 font-medium">Long Description</label>
                <textarea name="long_description" id="long_description" rows="6" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('long_description', $project->long_description) }}</textarea>
                @error('long_description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- GitHub Link -->
            <div class="mb-4">
                <label for="github_link" class="block text-gray-600 font-medium">GitHub Link</label>
                <input type="url" name="github_link" id="github_link" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('github_link', $project->github_link) }}">
                @error('github_link')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Web Link -->
            <div class="mb-4">
                <label for="web_link" class="block text-gray-600 font-medium">Web Link</label>
                <input type="url" name="web_link" id="web_link" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('web_link', $project->web_link) }}">
                @error('web_link')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-600 font-medium">Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="mt-2">
                    @if ($project->image)
                        <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="h-20 rounded-lg shadow">
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
                    <option value="1" {{ old('status', $project->status) == '1' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $project->status) == '0' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Slug -->
            <div class="mb-4">
                <label for="slug" class="block text-gray-600 font-medium">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('slug', $project->slug) }}">
                @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition">
                Update Project
            </button>
        </form>
    </div>
@endsection
