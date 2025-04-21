@extends('header')
@section('content')
<div>
<div class="py-20 bg-gray-50">
    <h1 class="text-4xl font-bold text-center text-gray-800">Our Services</h1>
    <p class="text-center text-gray-500 mt-2">We provide the best party experiences</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 p-8 max-w-6xl mx-auto mt-10">
        <!-- Service 1 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('logo/hall.jpg') }}" alt="Party Hall" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800">Luxurious Party Halls</h2>
                <p class="text-gray-500 mt-2">Spacious and beautifully designed party halls for all types of celebrations.</p>
                <a href="#" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('logo/catlog.jpg') }}" alt="Catering Service" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800">Premium Catering</h2>
                <p class="text-gray-500 mt-2">Delicious and customizable menu options to satisfy all guests.</p>
                <a href="#" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('logo/decoration.jpg') }}" alt="Decoration Services" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800">Elegant Decorations</h2>
                <p class="text-gray-500 mt-2">Beautiful themes and decorations tailored to your event.</p>
                <a href="#" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('logo/musical.jpg') }}" alt="Music and Entertainment" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800">Music & Entertainment</h2>
                <p class="text-gray-500 mt-2">Live DJs, music bands, and entertainment for a lively atmosphere.</p>
                <a href="#" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('logo/photograph.jpg') }}" alt="Photography" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800">Photography & Videography</h2>
                <p class="text-gray-500 mt-2">Capture your special moments with our professional photography team.</p>
                <a href="#" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src="{{ asset('logo/birthday.jpg') }}" alt="Security Service" class="w-full h-48 object-cover">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800">Birthday Hall</h2>
                <p class="text-gray-500 mt-2">Ensure a safe and smooth experience with our security team.</p>
                <a href="#" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</div>

</div>
@endsection