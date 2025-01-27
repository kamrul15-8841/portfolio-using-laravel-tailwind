@extends('front.layouts.app')
@section('title', 'Contacts')

@section('content')
    <!-- Contact Section -->
    <section id="contact" class="py-16 container mx-auto p-2">
        <h2 class="text-4xl font-bold text-center">Contact</h2>
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <form action=" {{ route('add-contact') }}" method="POST" class="mt-8 space-y-4 max-w-lg mx-auto">
            @csrf
            <input name="name" type="text" placeholder="Your Name" class="w-full p-4 bg-gray-800 rounded-lg">
            <input name="email" type="email" placeholder="Your Email" class="w-full p-4 bg-gray-800 rounded-lg">
            <input name="mobile" type="number" placeholder="Your Mobile" class="w-full p-4 bg-gray-800 rounded-lg">
            <textarea name="message" placeholder="Your Message" class="w-full p-4 bg-gray-800 rounded-lg"></textarea>
            <button class="w-full bg-blue-500 py-4 rounded-lg font-bold text-lg">Send</button>
        </form>
    </section>
@endsection
