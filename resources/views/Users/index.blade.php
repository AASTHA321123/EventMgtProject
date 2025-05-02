@extends('layouts.app')

@section('title')
Users
@endsection

@section('content')
<div class="p-5">
    <table class="w-full text-center border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border py-2 px-4">Username</th>
                <th class="border py-2 px-4">Email</th>
                <th class="border py-2 px-4">Phone No.</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td class="border py-2 px-4">{{ $user->name }}</td>
                    <td class="border py-2 px-4">{{ $user->email }}</td>
                    <td class="border py-2 px-4">{{ $user->phone ?? 'N/A' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="border py-2 px-4">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
