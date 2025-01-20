@extends('front.layouts.app')
@section('title', 'Contacts')

@section('content')
    <!-- Contact Section -->
    <section id="contact" class="py-16 container mx-auto">
        <h2 class="text-4xl font-bold text-center">Contact</h2>
        <form class="mt-8 space-y-4 max-w-lg mx-auto">
            <input type="text" placeholder="Your Name" class="w-full p-4 bg-gray-800 rounded-lg">
            <input type="email" placeholder="Your Email" class="w-full p-4 bg-gray-800 rounded-lg">
            <textarea placeholder="Your Message" class="w-full p-4 bg-gray-800 rounded-lg"></textarea>
            <button class="w-full bg-blue-500 py-4 rounded-lg font-bold text-lg">Send</button>
        </form>
    </section>
@endsection
