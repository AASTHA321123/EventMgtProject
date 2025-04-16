@extends('layouts.app')
@section('title')Dashboard @endsection
@section('content')
<div class="grid grid-cols-3 gap-10 mt-5">
    <div class="bg-blue-500 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Users</h2>
        <p class="text-4xl font-bold text-center">100</p>
    </div>

    <div class="bg-red-500 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Notices</h2>
        <p class="text-4xl font-bold text-center">{{$totalnotices}}</p>
    </div>

    <div class="bg-green-500 rounded-lg text-white p-5 shadow-lg">
        <h2 class="text-2xl font-bold">Total Categories</h2>
        <p class="text-4xl font-bold text-center">{{$totalcategories}}</p>
    </div>
</div>
@endsection