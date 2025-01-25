@extends('backend.layouts.app')

@section('title', 'Slider List')

@section('content')
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-700">Sliders</h1>
        <a href="{{ route('sliders.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
            Add Slider
        </a>
    </div>

    <!-- Flash Message -->
    @if (Session::has('message'))
        <div class="text-center text-green-600 font-semibold mb-4">
            {{ Session::get('message') }}
        </div>
    @endif

    <!-- Sliders Table -->
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full border-collapse bg-white">
                <thead>
                <tr class="bg-gray-100">
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">SI</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Caption</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Description</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Image</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Status</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Slug</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($sliders as $slider)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4 border-b">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-b">{{ $slider->caption }}</td>
                        <td class="px-6 py-4 border-b">{{ $slider->description }}</td>
                        <td class="px-6 py-4 border-b">
{{--                            <p>{{ asset('storage/' . $slider->image) }}</p>--}}

                        @if($slider->image)
                                <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->caption }}" class="w-20 h-20 object-cover rounded">
                            @else
                                <span>No Image</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 border-b">{{ $slider->status ? 'Active' : 'Inactive' }}</td>
                        <td class="px-6 py-4 border-b">{{ $slider->slug }}</td>
                        <td class="px-6 py-4 border-b flex space-x-4">
                            <a href="{{ route('sliders.edit', $slider) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600 transition duration-300">
                                Edit
                            </a>
                            <form action="{{ route('sliders.destroy', $slider) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this slider?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition duration-300">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $sliders->links('vendor.pagination.tailwind') }}
    </div>
@endsection
