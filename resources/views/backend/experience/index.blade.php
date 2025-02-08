@extends('backend.layouts.app')

@section('title', 'Experience List')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">experience List</h1>
            <a href="{{ route('experiences.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Add experience
            </a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full bg-white shadow-md rounded-lg">
            <thead>
            <tr class="bg-gray-100 text-gray-700">
                <th class="py-2 px-4">#</th>
                <th class="py-2 px-4">Job Title</th>
                <th class="py-2 px-4">Company</th>
                <th class="py-2 px-4">Joining Date</th>
                <th class="py-2 px-4">Image</th>
                <th class="py-2 px-4">Status</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($experiences as $experience)
                <tr class="border-t text-gray-700">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $experience->job_title }}</td>
                    <td class="py-2 px-4">{{ $experience->company_name }}</td>
                    <td class="py-2 px-4">{{ $experience->joining_date }}</td>
                    <td class="px-2 py-4">
                        @if($experience->image)
                            <img src="{{ asset('storage/' . $experience->image) }}" alt="{{ $experience->job_title }}" class="w-20 h-20 object-cover rounded">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>
                    <td class="py-2 px-4">
                            <span class="{{ $experience->status ? 'text-green-500' : 'text-red-500' }}">
                                {{ $experience->status ? 'Active' : 'Inactive' }}
                            </span>
                    </td>
                    <td class="py-2 px-4 flex space-x-2">
                        <a href="{{ route('experiences.edit', $experience) }}" class="bg-yellow-400 text-white px-4 py-1 rounded shadow hover:bg-yellow-500 transition">Edit</a>
                        <form action="{{ route('experiences.destroy', $experience) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this experience?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-4 py-1 rounded shadow hover:bg-red-600 transition">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-500">No experiences available.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $experiences->links('vendor.pagination.tailwind') }}
    </div>

@endsection
