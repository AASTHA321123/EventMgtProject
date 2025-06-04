@extends('header')

@section('content')

<div class="max-w-7xl mx-auto py-10 px-6">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">👤 {{ $user->name }}'s Profile</h1>
        <p class="text-gray-500">Your booking details are shown below:</p>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Package</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Date</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">No. of People</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Items</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Package Price</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Item Price/plate</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-700">Total</th>
                    <th class="px-4 py-3 text-center font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($carts as $cart)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $cart->package->name }}</td>
                    <td class="px-4 py-2">{{ $cart->booking_date }}</td>
                    <td class="px-4 py-2">{{ $cart->no_of_people }}</td>
                    <td class="px-4 py-2">
                        @foreach($cart->items as $item)
                        <p>{{ $item }}</p>
                        @endforeach
                    </td>
                    <td class="px-4 py-2">Rs. {{ $cart->package->price }}</td>
                    <td class="px-4 py-2">Rs. {{ $cart->itemprice }}/plate</td>
                    <td class="px-4 py-2 text-green-600 font-semibold">
                        Rs. {{ $cart->package->price + $cart->itemprice * $cart->no_of_people }}
                    </td>
                    <td class="px-4 py-2 text-center">
                        <a href="{{ route('checkout', $cart->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg mb-2">Checkout</a>
                        <a href="{{ route('cart.destroy', $cart->id) }}"
                           onclick="return confirm('Are you sure to delete?')"
                           class="inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                            Remove
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 📦 Recommended Packages Section -->
    <div class="mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">📌 Recommended for You</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($recommendedPackages as $package)
            <div class="bg-white shadow-md rounded-2xl p-5">
                <h3 class="text-lg font-semibold text-blue-700">{{ $package->name }}</h3>
                <p class="text-gray-500 mt-2">Price: Rs. {{ $package->price }}</p>
                <a href="{{ route('packages.show', $package->id) }}"
                   class="mt-3 inline-block bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                    View Package
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


