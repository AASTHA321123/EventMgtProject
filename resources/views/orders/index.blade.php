@extends('layouts.app')
@section('title')
    Orders
@endsection
@section('content')
    <div class="my-10 text-center">
        <a href="" class="px-7 py-2 bg-pink-600 rounded text-white">List Of Orders</a>
    </div>
    <table class="w-full text-center">
        <tr>
        <th class="border py-2">S.N</th>
            <th class="border py-2">User Id</th>
            <th class="border py-2">package Id</th>
            <th class="border py-2">No of people</th>
            <th class="border py-2">Items</th>
            <th class="border py-2">Booking Date</th>
            <th class="border py-2">Total Price</th>
            <th class="border py-2">Status</th>
            <th class="border py-2">Action</th>

            
        </tr>
        @foreach($orders as $order)
        <tr>
        <td class="border py-2">{{$loop->iteration}}</td>
            <td class="border py-2">{{$order->user->name}}</td>
            <td class="border py-2">{{$order->package->name}}</td>
            <td class="border py-2">{{$order->no_of_people}}</td>
            <td class="border py-2">{{$order->items}}</td>
            <td class="border py-2">{{$order->booking_date}}</td>
            <td class="border py-2">{{$order->total_price}}</td>
            <td class="border py-2  bg-green-600 rounded-lg text-white">{{$order->status}}</td>
            <td class="border py-2  "> 
                <a href="{{route('orders.status',[$order->id,'Pending'])}}" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Pending</a>
                <a href="{{route('orders.status',[$order->id,'Confirmed'])}}" class="px-2 py-1 bg-blue-600 rounded-lg text-white">Confirmed</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection