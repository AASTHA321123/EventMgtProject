@extends('header')

@section('content')
<div class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Intro -->
        <section class="text-center mb-16">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">About <span class="text-pink-500">Elite Events</span></h1>
            <p class="text-lg text-gray-600">Crafting Unforgettable Moments with Style, Precision, and Passion</p>
        </section>

        <!-- Our Story -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <img src="{{ asset('logo/about img.jpg') }}" alt="Our Story" class="rounded-full shadow-md">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Story</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Founded with a dream to transform ordinary events into extraordinary experiences, Elite Events has become a trusted name in the event planning industry.
                        From humble beginnings to prestigious celebrations, our journey has been one of creativity, dedication, and heartfelt service.
                    </p>
                </div>
            </div>
        </section>

        <!-- Vision and Mission -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Vision & Mission</h2>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li><strong>Vision:</strong> To be the most creative and dependable event planning company in the region.</li>
                        <li><strong>Mission:</strong> To craft events that reflect our clients’ personalities and values while offering seamless execution.</li>
                        <li><strong>Core Values:</strong> Passion, Innovation, Integrity, and Excellence.</li>
                    </ul>
                </div>
                <img src="{{ asset('logo/about img 1.jpg') }}" alt="Vision Mission" class="rounded-lg shadow-md ">
            </div>
        </section>

        <!-- Testimonials -->
        <section class="text-center bg-pink-50 rounded-lg shadow-inner p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">What Our Clients Say</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <p class="text-gray-700 italic">“Elite Events made our wedding a dream come true. Every detail was flawless, and the team was incredible to work with!”</p>
                    <span class="block mt-4 font-semibold text-pink-500">– Sarah & John</span>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <p class="text-gray-700 italic">“From planning to execution, the experience was smooth and professional. We’ll definitely be back for our next big event!”</p>
                    <span class="block mt-4 font-semibold text-pink-500">– Corporate Client</span>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
