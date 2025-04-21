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

    <div w-full>
    <h1 class=" text-2xl font-bold text-center text-blue"> Our
      <a href="{{route('services')}}" class="text-red-400"> Sevices</a>
    </h1>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-20 p-8 max-w-6xl mx-auto mt-10">
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
     
    <div class="" >
    <h1 class="py-10 text-2xl font-bold text-center text-blue"> This is
      <a href="{{route('about')}}" class="text-red-400"> About Page</a>
    </h1>
    <div class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-6">
        

        <!-- Our Story -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <img src="{{ asset('logo/about img.jpg') }}" alt="Our Story" class="rounded-full shadow-md">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Story</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Founded with a dream to transform ordinary events into extraordinary experiences, Elite Events has become a trusted name in the event planning industry.
                        From humble beginnings to prestigious celebrations, our journey has been one of creativity, dedication, and heartfelt service.
                    </p>
                </div>
            </div>
        </section>

        <!-- Vision and Mission -->
        <section class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Vision & Mission</h2>
                    <ul class="list-disc list-inside text-gray-600 space-y-2">
                        <li><strong>Vision:</strong> To be the most creative and dependable event planning company in the region.</li>
                        <li><strong>Mission:</strong> To craft events that reflect our clients’ personalities and values while offering seamless execution.</li>
                        <li><strong>Core Values:</strong> Passion, Innovation, Integrity, and Excellence.</li>
                    </ul>
                </div>
                <img src="{{ asset('logo/about img 1.jpg') }}" alt="Vision Mission" class="rounded-lg shadow-md ">
            </div>
        </section>

        <!-- Testimonials -->
        <section class="text-center bg-pink-50 rounded-lg shadow-inner p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">What Our Clients Say</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <p class="text-gray-700 italic">“Elite Events made our wedding a dream come true. Every detail was flawless, and the team was incredible to work with!”</p>
                    <span class="block mt-4 font-semibold text-pink-500">– Sarah & John</span>
                </div>
                <div class="bg-white rounded-lg p-6 shadow-md">
                    <p class="text-gray-700 italic">“From planning to execution, the experience was smooth and professional. We’ll definitely be back for our next big event!”</p>
                    <span class="block mt-4 font-semibold text-pink-500">– Corporate Client</span>
                </div>
            </div>
        </section>
    </div>
</div>
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