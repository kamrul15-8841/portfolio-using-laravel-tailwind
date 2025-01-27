@extends('backend.layouts.app')

@section('title', 'Edit Course')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Edit Course</h1>
            <a href="{{ route('courses.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Back to Course List
            </a>
        </div>

        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-600 font-medium">Title</label>
                <input type="text" name="title" id="title" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title', $course->title) }}" required>
                @error('title')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Long Description -->
            <div class="mb-4">
                <label for="description" class="block text-gray-600 font-medium">Long Description</label>
                <textarea name="description" id="description" rows="6" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $course->description) }}</textarea>
                @error('description')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- institute -->
            <div class="mb-4">
                <label for="institute" class="block text-gray-600 font-medium">institute</label>
                <input type="text" name="institute" id="institute" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('institute', $course->institute) }}">
                @error('institute')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- period -->
            <div class="mb-4">
                <label for="period" class="block text-gray-600 font-medium">Technology period</label>
                <input type="text" name="period" id="period" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('period', $course->period) }}">
                @error('period')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- expertise -->
            <div class="mb-4">
                <label for="expertise" class="block text-gray-600 font-medium">Technology expertise</label>
                <input type="text" name="expertise" id="expertise" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('expertise', $course->expertise) }}">
                @error('expertise')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Image -->
            <div class="mb-4">
                <label for="image" class="block text-gray-600 font-medium">Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <div class="mt-2">
                    @if ($course->image)
                        <img src="{{ asset('storage/' . $course->image) }}" alt="course Image" class="h-20 rounded-lg shadow">
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
{{--                    <option value="1" {{ old('status', $course->status) == '1' ? 'selected' : '' }}>Active</option>--}}
{{--                    <option value="0" {{ old('status', $course->status) == '0' ? 'selected' : '' }}>Inactive</option>--}}
                    <option value="1" {{ old('status', $course->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ old('status', $course->status) == '' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

{{--            <!-- Slug -->--}}
{{--            <div class="mb-4">--}}
{{--                <label for="slug" class="block text-gray-600 font-medium">Slug</label>--}}
{{--                <input type="text" name="slug" id="slug" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('slug', $course->slug) }}">--}}
{{--                @error('slug')--}}
{{--                <span class="text-red-500 text-sm">{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition">
                Update Course
            </button>
        </form>
    </div>
@endsection
