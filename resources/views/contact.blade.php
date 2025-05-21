@extends('header')
@section('content')


<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-900 mb-4">Contact us</h1>
    </div>
<div class="bg-white  flex items-center justify-center ">
    
    <div class="max-w-6xl w-full grid grid-cols-1 md:grid-cols-2 gap-10 py-16">
        
        <!-- Contact Info Section -->
        <div class="flex flex-col justify-center">
            <p class="text-green-600 font-medium text-xl mb-2">How can we help you?</p>
            
            <p class="text-gray-700 mb-6 leading-relaxed">
                We're here to help and answer any questions you might have. We look forward to hearing from you!
            </p>

            <div class="space-y-4 text-gray-700">
                <div class="flex items-center space-x-3">
                <i class="ri-map-pin-line"></i>
                    <span>Chitwan, Bharatpur-10  Narayanghar</span>
                </div>
                <div class="flex items-center space-x-3">
                <i class="ri-phone-line"></i>
                    <span>+977-9876543210</span>
                </div>
                <div class="flex items-center space-x-3">
                <i class="ri-mail-line"></i>
                    <a href="info@info.com" class="text-blue-500 hover:underline">info@info.com</a>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="flex items-center justify-center">
            <img src="{{ asset('logo/contact.png') }}" alt=""
                 class="w-full max-w-sm">
        </div>
    </div>
</div>

@endsection
