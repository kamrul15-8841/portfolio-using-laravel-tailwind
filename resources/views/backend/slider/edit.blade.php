@extends('backend.layouts.app')

@section('title', 'Edit Slider')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Edit Slider</h1>
            <a href="{{ route('sliders.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Slider List
            </a>
        </div>

        <form action="{{ route('sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data" class="bg-white p-5 rounded shadow">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="caption" class="block text-gray-600 font-medium">Caption</label>
                <input type="text" name="caption" id="caption" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('caption', $slider->caption) }}" required>
                @error('caption')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-600 font-medium">Description</label>
                <textarea name="description" id="description" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $slider->description) }}</textarea>
                @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-600 font-medium">Slider Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @if ($slider->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" class="w-24 h-24 object-cover rounded">
                    </div>
                @endif
                @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-600 font-medium">Status</label>
                <select name="status" id="status" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
{{--                    <option value="1" {{ old('status', $slider->status) == '1' ? 'selected' : '' }}>Active</option>--}}
{{--                    <option value="0" {{ old('status', $slider->status) == '0' ? 'selected' : '' }}>Inactive</option>--}}
                    <option value="1" {{ old('status', $slider->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $slider->status) == '' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-gray-600 font-medium">Slug</label>
                <input type="text" name="slug" id="slug" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('slug', $slider->slug) }}" required>
                @error('slug')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Update Slider
            </button>
        </form>
    </div>
@endsection
