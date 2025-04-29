
@extends('header')
@section('content')
<div class="max-w-7xl mx-auto p-6">
        <!-- Search Form -->
        <form action="{{ route('search') }}" method="GET" class="flex justify-center mb-8">
            <input 
                type="search" 
                name="query"
                value="{{ request('query') }}"
                placeholder="Search..." 
                class="border border-pink-200 p-2 w-1/2 rounded-l-lg"
            >
            <button type="submit" class="bg-pink-400 text-white rounded-r-lg px-4">
                <i class="ri-search-line p-2"></i> Search
            </button>
        </form>

        <!-- Display error message if redirected back with error -->
        @if(session('error'))
            <div class="text-red-500 text-center mb-4">
                {{ session('error') }}
            </div>
        @endif

        <!-- Packages Display -->
        @if($packages->count())
        <div class="px-4 py-10">
            <h1 class="text-2xl font-semibold text-center">Our Packages</h1>
            <p class="text-center text-gray-500">We provide the best Packages for you</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-5">
                @foreach($packages as $package)
                <div class="bg-pink-600 text-white shadow-lg p-4 rounded-lg hover:-translate-y-1 duration-300 cursor-pointer">
                    <h1 class="text-center mt-2 p-2 text-lg">{{ $package->name }}</h1>
                    <hr class="mx-4">
                    <p class="text-2xl font-bold text-center mt-2">${{ $package->price }}</p>
                    <p class="text-center">Capacity: {{ $package->capacity }} Person</p>
                    <p class="p-4 text-justify line-clamp-1">{{ $package->description }}</p>
                    <div class="text-center p-4">
                        <a href="{{ route('viewpackage', $package->id) }}" class="bg-blue-50 text-blue-600 px-4 py-2 rounded-lg">Get Package</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
            <div class="text-center text-gray-500 mt-10">
                No packages found for "<strong>{{ request('query') }}</strong>".
            </div>
        @endif
    </div>

    @endsection