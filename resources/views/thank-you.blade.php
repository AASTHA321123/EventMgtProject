@extends('header')

@section('content')
<div class="max-w-xl mx-auto py-16 text-center">
    <h1 class="text-3xl font-bold mb-4">Thank You!</h1>
    <p class="text-lg text-gray-700">We’ve received your message. We’ll get back to you shortly.</p>
    <a href="{{ route('home') }}" class="mt-6 inline-block text-blue-600 hover:underline">Return to Homepage</a>
</div>
@endsection
