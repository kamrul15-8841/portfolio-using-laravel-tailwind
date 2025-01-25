@extends('backend.layouts.app')

@section('title', 'About List')

@section('content')
    <div class="w-full mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">About List</h1>
            <a href="{{ route('abouts.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Add New About
            </a>
        </div>

        <table class="min-w-full bg-white border">
            <thead>
            <tr class="bg-gray-200 text-gray-600 text-left text-sm uppercase font-bold">
                <th class="py-3 px-4 border-b">#</th>
                <th class="py-3 px-4 border-b">Title</th>
                <th class="py-3 px-4 border-b">Short Description</th>
                <th class="py-3 px-4 border-b">Image</th>
                <th class="py-3 px-4 border-b">Status</th>
                <th class="py-3 px-4 border-b text-right">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($abouts as $about)
                <tr class="text-gray-700">
                    <td class="py-3 px-4 border-b">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4 border-b">{{ $about->title }}</td>
                    <td class="py-3 px-4 border-b">{{ Str::limit($about->short_description, 50) }}</td>
                    <td class="px-6 py-4 border-b">
                        @if($about->image)
                            <img src="{{ asset('storage/' . $about->image) }}" alt="{{ $about->title }}" class="w-20 h-20 object-cover rounded">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td class="py-3 px-4 border-b">{{ $about->status ? 'Active' : 'Inactive' }}</td>
                    <td class="py-3 px-4 border-b text-right">
                        <a href="{{ route('abouts.edit', $about->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600 transition duration-300">Edit</a>
                        <form action="{{ route('abouts.destroy', $about->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition duration-300" onclick="return confirm('Are you sure you want to delete this About?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
