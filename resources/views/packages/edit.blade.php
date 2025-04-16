@extends('layouts.app')
@section('title')
Edit Package
@endsection
@section('content')
<form action="{{route('packages.update',$package->id)}}" method="POST" class="mt-5">
    @csrf 
    <input type="text" class="block w-full my-5 rounded-lg border-gray-300" placeholder="Package Name" name="name" value="{{$package->name}}">
    @error('priority')
    <span class="text-red-600 text-sm block-mt-5">{{$message}}</span>
    @enderror

    <input type="text" class="block w-full my-5 rounded-lg border-gray-300" placeholder="Description" name="description" value="{{$package->description}}" >
    @error('description')
    <span class="text-red-600 text-sm block-mt-5">{{$message}}</span>
    @enderror
    <input type="text" class="block w-full my-5 rounded-lg border-gray-300" placeholder="Price" name="price" value="{{$package->price}}" >
    @error('price')
    <span class="text-red-600 text-sm block-mt-5">{{$message}}</span>
    @enderror

    <input type="text" class="block w-full my-5 rounded-lg border-gray-300" placeholder="Capacity (No of Person)" name="capacity" value="{{$package->capacity}}" >
    @error('capacity')
    <span class="text-red-600 text-sm block-mt-5">{{$message}}</span>
    @enderror

    <div class="flex justify-center gap-3">
        <button class="bg-blue-600 text-white px-3 py-2 rounded-lg">update Package</button>
        <a href="{{route('packages.index')}}" class="bg-red-600 text-white px-10 py-2 rounded-lg">Exit</a>
    </div>
</form>
@endsection