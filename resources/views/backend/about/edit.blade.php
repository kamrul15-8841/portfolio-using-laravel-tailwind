@extends('backend.layouts.app')

@section('title', 'Edit About')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Edit About</h1>
            <a href="{{ route('abouts.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                About List
            </a>
        </div>

        <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-5 rounded shadow">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-600 font-medium">Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title', $about->title) }}" required>
                @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="short_description" class="block text-gray-600 font-medium">Short Description</label>
                <textarea name="short_description" id="short_description" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('short_description', $about->short_description) }}</textarea>
                @error('short_description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="long_description" class="block text-gray-600 font-medium">Long Description</label>
                <textarea name="long_description" id="long_description" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('long_description', $about->long_description) }}</textarea>
                @error('long_description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-600 font-medium">About Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if($about->image)
                    <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" class="w-20 h-20 object-cover mt-2 rounded">
                @endif
                @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-600 font-medium">Status</label>
                <select name="status" id="status" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
{{--                    <option value="1" {{ old('status', $about->status) == '1' ? 'selected' : '' }}>Active</option>--}}
{{--                    <option value="0" {{ old('status', $about->status) == '0' ? 'selected' : '' }}>Inactive</option>--}}
                    <option value="1" {{ old('status', $about->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $about->status) == '' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-gray-600 font-medium">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('slug', $about->slug) }}" required>
                @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Update About
            </button>
        </form>
    </div>
@endsection
