<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
      @include('layouts.alert')
        
                   <div class="flex">
                    <div class="w-56 bg-gray-200 shadow-lg h-screen">
                        <div>
                        <img src="{{asset('logo/logo2.jpg')}}" alt="" class="h-20 w-40  mx-auto my-5">
                       
                          </div>
                          <div class="mt-5 text-center">
                            <a href="{{route('dashboard')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Dashboard</a>
                            <a href="{{route('notice.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Notice</a>
                            <a href="{{route('review.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Review</a>
                            <a href="{{route('category.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Category</a>
                            <a href="{{route('items.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Items</a>
                            <a href="{{route('packages.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Package</a>
                            <a href="{{route('orders.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Orders</a>
                            <a href="{{route('banners.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">Banners</a>
                            <a href="{{route('users.index')}}" class="block px-2 py-3 hover:bg-pink-600 hover:text-white text-lg">User</a>
                            <form action="{{route('logout')}}" method="POST" >
                              @csrf
                             <button type="submit" class="block w-full text-left px-2 py-3 hover:bg-pink-600 hover:text-white text-lg text-center">Logout </button>

                            </form>

                          </div>

                    </div>
                    <div class="flex-1 p-4 ">
                      <h2 class="font-bold text-4xl">@yield('title')</h2>
                      <hr class="h-1 bg-pink-400">
                      @yield('content')

                    </div>
                   </div>
    </body>
</html>
