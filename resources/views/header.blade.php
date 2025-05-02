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
        <a href="{{route('home')}}"><i class="ri-home-4-line"></i>Home</a>
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
    

    <footer class="bg-pink-600 text-white px-16 py-4 mt-10">
        <div class="grid grid-cols-3 gap-4">
            <div>
                
      <a href="{{route('about')}}" class="  text-2xl font-bold  text-black underline text-white-400"> About Page</a>
    </h1>
    <p>this is our aobut page we have many package foe event if u want u can learn more about us....</p>
            </div>
            <div class="   text-center">
            
      <a href="{{route('services')}}" class=" underline text-2xl text-white-400 font-bold  text-black">  Our Sevices</a>
    </h1>
                <ul>
                    <li>service 1</li>
                    <li>service 2</li>
                    <li>service 3</li>
                    <li>service 4</li>
                    <li>service 5</li>
                    <li>service 6</li>
                </ul>
            </div>
            <div>
            <h1 class=" text-2xl font-bold text-black">
            <a href="{{route('contact')}} " class=" underline text-white-400">Contact Us</a>
            </h1>
                <p>Address: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <p>Phone: 9876543210</p>
                <p>Email: info@info.com</p>
            </div>
        </div>
    </footer>
</body>
</html>