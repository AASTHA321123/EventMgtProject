@extends('header')
@section('content')
<h2 class=" font-bold text-3xl text-center my-5">Package Details </h2>
<div class="grid grid-cols-3 gap-5 px-24 mt-10">
    <div class="col-span-1">
    <h1 class=" text-2xl font-semibold">{{$package->name}}</h1>
            <p class="text-gray-700 text-xl font-bold">Rs.{{$package->price}}</p>
            <p class="text-gray-700">Capacity:{{$package->capacity}} Person</p>
            <p class=" text-justify mt-5">{{$package->description}}</p>
            <div class="mt-5">
                <a href="{{route('bookpackage',$package->id)}}" class="bg-pink-600 text-white px-4 py-2 rounded-lg">Book Package</a>
            </div>
    </div>
    <div class="border-l pl-2">
                    <h2 class="font-bold text-2xl text-center my-2">Choice a Category</h2>
                    <input type="checkbox" name="selectall" id="selectall" class="text-pink-500 accent-pink-500 border-pink-500"> @foreach($items as $item )
        <p><i class="ri-check-double-line"></i>{{$item->name}}</p>
        @endforeach
                    @error('categories')
                    <p class="text-red-500 ml-2 text-xs"></p>
                    @enderror

                   
                    
    </div>

    <div class="border-l pl-2">
        <h3 class="font-bold text-xl">Available Items</h3>
        @foreach($items as $item )
        <p><i class="ri-check-double-line"></i>{{$item->name}}</p>
        @endforeach
    </div>
</div>
@endsection