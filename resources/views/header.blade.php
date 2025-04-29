<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body>
    <nav class="flex px-20 py-2 bg-white justify-between items-center shadow-lg sticky top-0 z-30 ">
    
    <img src="{{asset('logo/images of logo.jpg')}}" alt="" class="h-16">

    <!-- serching -->
    
    <form action="{{route('search')}}" method="GET" class="flex-1 justify-center flex">
            <input type="search" class="border-pink-200 border-gray-200 p-2 w-1/2 rounded-l-lg" placeholder="Search Any Packages">
            <button type="submit" class="bg-pink-600 text-white rounded-r-lg">
                <i class="ri-search-line p-2 px-4"></i>
            </button>
        </form>
            
    <div class ="flex gap-5">
        <a href="{{route('home')}}">Home</a>
        <a href="{{ route('services') }}">Services</a>
        <a href="{{route('about')}}">About</a>
        <a href="{{route('contact')}}">Contact</a>
        


       
        @auth
        <div class="relative group">
        <i class="ri-user-fill p-2 cursor-pointer bg-gray-100 rounded-full"></i>
        <div class="absolute right-0 top-7 w-48 bg-gray-100 p-2 rounded-lg hidden group-hover:block">
        <p class="p-2 hover:bg-gray-200 cursor-pointer rounded-lg" >Hi, {{auth()->user()->name}}</p>
        <a href="{{route('cart.index')}}" class="p-2 block hover:bg-gray-200 cursor-pointer rounded-lg" > My Cart</a>
        <form action="{{route('logout')}}" method="post" class="p-2 hover:bg-gray-200 rounded-lg">
               @csrf
              <button type="submit">Logout</button>
        </form>
        </div>
        </div>
        @else
        <a href="{{route('login')}}">Login</a>
        @endauth

    </div>
    </nav>
    @yield('content')
    

    <footer class="bg-pink-600 mt-20 py-2 px-20">
        <p class="text-center text-white">Copyright &copy; 2025 | All Rights Reserved | Event Booking System

        </p>

    </footer>
</body>
</html>