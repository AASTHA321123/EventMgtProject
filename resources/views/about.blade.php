@extends('header')
@section('content')

<div>
<section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8 mt-10">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Image -->
            <img src="{{asset('logo\about img.jpg')}}" alt="Event Image" class="rounded-full shadow-md w-full md:w-1/2 ">
            <div class="md:ml-6 mt-6 md:mt-0">
                <h2 class="text-2xl font-semibold text-gray-800">We Make Your Events Memorable</h2>
                <p class="mt-4 text-gray-600">
                    Welcome to <span class="font-bold text-pink-500">Elite Events</span>, your one-stop destination for unforgettable experiences. 
                    From weddings to corporate events, we bring your visions to life with creativity, precision, and passion.
                </p>
                <p class="mt-2 text-gray-600">
                    With years of expertise, our team ensures seamless planning and execution, so you can enjoy your special moments stress-free.
                </p>
            </div>
            
        </div>
</section>
<section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8 mt-10">
        <div class="flex flex-col md:flex-row items-center">
            <!-- Image -->
            <img src="{{asset('logo\about img 1.jpg')}}" alt="Event Image" class="rounded-full shadow-md w-full md:w-1/2 ">
            <div class="md:ml-6 mt-6 md:mt-0">
                <h2 class="text-2xl font-semibold text-gray-800">We Make Your Events Memorable</h2>
                <p class="mt-4 text-gray-600">
                    Welcome to <span class="font-bold text-pink-500">Elite Events</span>, your one-stop destination for unforgettable experiences. 
                    From weddings to corporate events, we bring your visions to life with creativity, precision, and passion.
                </p>
                <p class="mt-2 text-gray-600">
                    With years of expertise, our team ensures seamless planning and execution, so you can enjoy your special moments stress-free.
                </p>
            </div>
            
        </div>
</section>
</div>
@endsection