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
    
</div>

    

<!-- Rating  -->
 <div class="text-center Font-bold">
    <p class="text-2xl text-black text-bold">feedback</p>
 </div>
<div class="p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        
        <!-- {{-- Left: Rating Form --}} -->
        <div class="bg-white p-6 shadow rounded-2xl">
            <h2 class="text-xl font-bold mb-4">Submit a Review</h2>
            <form action="{{route('review.store')}}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Title</label>
                    <input type="text" name="title" class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Select Package</label>
                    <select name="package_id" class="w-full border rounded px-3 py-2" required>
                        @foreach($packages as $package)
                            <option value="{{$package->id}}">{{$package->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Comment</label>
                    <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Rating</label>
                    <select name="rating" class="w-full border rounded px-3 py-2" required>
                        <option value="5">★★★★★ (5)</option>
                        <option value="4">★★★★☆ (4)</option>
                        <option value="3">★★★☆☆ (3)</option>
                        <option value="2">★★☆☆☆ (2)</option>
                        <option value="1">★☆☆☆☆ (1)</option>
                    </select>
                </div>

                <button type="submit" class="bg-pink-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded">
                    Submit
                </button>
            </form>
        </div>

        <!-- {{-- Right: Display Reviews --}} -->
        <div class="bg-white p-6 shadow rounded-2xl">
            <h2 class="text-xl font-bold mb-4">User Reviews</h2>
           
                @foreach($reviews as $review)
                <div class="border-b py-4">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold">{{$review->user->name}}</h3>
                        <div class="text-yellow-500">
                            @for($i=0;$i<$review->rating;$i++)
                            ★
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-700 mt-1">{{$review->title}}</p>
                    <div class="text-sm text-gray-500 mt-2">
                       {{$review->description}}
                    </div>
                </div>
           
                @endforeach
           
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