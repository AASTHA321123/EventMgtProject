@extends('header')
@section('content')
<div class="py-20 bg-gray-50">
    <h1 class="text-4xl font-bold text-center text-gray-800">Contact Us</h1>
    <p class="text-center text-gray-500 mt-2">We are here to assist you</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 p-8 max-w-4xl mx-auto mt-10">
        <!-- Vendor Contact -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h2 class="text-2xl font-bold text-gray-800">For Vendors</h2>
            <p class="text-gray-500 mt-2">Get in touch with our vendor support</p>
            <div class="mt-4">
                <p class="text-lg font-semibold text-gray-700">vendors@wedgood.com</p>
                <p class="text-lg font-semibold text-gray-700">+1 320-252-0255</p>
            </div>
            <a href="mailto:vendors@wedgood.com" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg  transition duration-300">
                Contact Vendor Support
            </a>
        </div>

        <!-- User Contact -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <h2 class="text-2xl font-bold text-gray-800">For Users</h2>
            <p class="text-gray-500 mt-2">Reach out for general inquiries</p>
            <div class="mt-4">
                <p class="text-lg font-semibold text-gray-700">info@gmail.com</p>
                <p class="text-lg font-semibold text-gray-700">+1 552-655-325202</p>
            </div>
            <a href="mailto:info@gmail.com" class="mt-4 inline-block bg-pink-600 text-white px-4 py-2 rounded-lg  transition duration-300">
                Contact User Support
            </a>
        </div>
    </div>
</div>

    

@endsection