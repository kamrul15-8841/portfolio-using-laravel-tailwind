@extends('backend.layouts.app')

@section('title', 'Contact List')

@section('content')
    <div class="w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Contact List</h1>
            <a href="{{ route('contacts.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Add Contact
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
                <th class="py-2 px-4">name</th>
                <th class="py-2 px-4">email</th>
                <th class="py-2 px-4">mobile</th>
                <th class="py-2 px-4">message</th>
                <th class="py-2 px-4">status</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($contacts as $contact)
                <tr class="border-t text-gray-700">
                    <td class="py-2 px-4">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4">{{ $contact->name }}</td>
                    <td class="py-2 px-4">{{ $contact->email }}</td>
                    <td class="py-2 px-4">{{ $contact->mobile }}</td>
                    <td class="py-2 px-4">{{ $contact->message }}</td>
                    <td class="py-2 px-4">
                            <span class="{{ $contact->status ? 'text-green-500' : 'text-red-500' }}">
                                {{ $contact->status ? 'Active' : 'Inactive' }}
                            </span>
                    </td>
                    <td class="py-2 px-4 flex space-x-2">
                        <a href="{{ route('contacts.edit', $contact) }}" class="bg-yellow-400 text-white px-4 py-1 rounded shadow hover:bg-yellow-500 transition">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?');">
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
                    <td colspan="6" class="text-center py-4 text-gray-500">No contacts available.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $contacts->links('vendor.pagination.tailwind') }}
    </div>
@endsection
