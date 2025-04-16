@extends('header')
@section('content')

<div class="overflow-hidden whitespace-nowrap bg-gray-200 text-black  text-center">
<marquee behavior="" direction="">
  <div class="inline-block animate-[moveLeft_10s_linear_infinite]">
    <p> 🎉Special Offer: Get 20% off on all packages! 🎉 Limited Time Only!</p>
    </marquee>
  </div>
  

</div>
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        @foreach($banners as $banner)
      <div class="swiper-slide">
        <img src="{{asset('images/banners/'.$banner->photopath)}}" alt="" class="h-96 w-full object-cover">
      </div>
      @endforeach
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
     <!--package-->
   <div class="px-24 py-10">
      <h1 class="text-2xl font-semibold text-center">Our Packages</h1>
        <p class="text-center text-gray-500">We provide the best Packages for you</p>
    <div class="grid grid-cols-3 gap-10 mt-5">
      @foreach($packages as $package)
        <div class="bg-pink-600 text-white shadow-lg p-4 rounded-lg hover:-translate-y-1 duration-300 cursor-pointer">
          
            <h1 class=" text-center mt-2 p-2 text-lg">{{$package->name}}</h1>
            <hr class="mx-4">
            <p class="text-2xl font-bold text-center mt-2">{{$package->price}}</p>
            <p class="text-center">Capacity: {{$package->capacity}} Person</p>
            <p class="p-4 text-justify line-clamp-1">{{$package->description}}</p>
            <div class="text-center justify-between item-center p-4">
              <a href="{{route('viewpackage',$package->id)}}" class=" bg-blue-50  text-blue-600 px-4 py-2 rounded-lg">Get Packages</a>
           </div>
      </div>
        @endforeach
         </div>
    </div>
     
    <div class="" >
    <h1 class="py-10 text-2xl font-bold text-center text-blue"> This is
      <a href="{{route('about')}}" class="text-red-400"> About Page</a>
    </h1>
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

    <div class="py-20 bg-gray-50">
    <h1 class="text-2xl font-bold text-center text-gray-800">
      <a href="{{route('contact')}} " class="text-red-400">Contact Us</a>
    </h1>
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
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
@endsection