@extends('layouts.app')
@section('title')
Review
@endsection
@section('content')
<div class="my-10 text-center">
    <a href="" class="px-7 py-2 bg-pink-600 rounded text-white ">List Of review</a>
</div>
    <table class="w-full text-center">
        
            <tr>
                <th class="border py-2">User ID</th>
                <th class="border py-2">Package ID</th>
                <th class=" border py-2">Title</th>
                <th class=" border py-2">Comment</th>
                <th class=" border py-2">Rating</th>
                <th class="border py-2">Action</th>
            </tr>
        
        
            @foreach($reviews as $review)
            <tr class="border-t hover:bg-gray-50">
                <td class="border py-2">{{ $review->user_id }}</td>
                <td class="border py-2">{{ $review->package_id }}</td>
                <td class="border py-2">{{ $review->title }}</td>
                <td class="border py-2">{{ $review->description }}</td>
                <td class="border py-2">{{ $review->rating }}</td>
                
                
                    <td class="border py-2">
                        <a href=""onclick="return confirm('Are you sure to Delete?')" class="px-2 py-1 bg-red-600 rounded-lg text-white">Delete</a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
