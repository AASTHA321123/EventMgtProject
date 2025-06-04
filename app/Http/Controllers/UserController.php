<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('users.index', compact('users')); // Pass users to the view
    }

    public function profile()
{
    $user = Auth::user();

    // Get user's bookings
    $carts = Cart::with('package')->where('user_id', $user->id)->get();

    // Simple recommendation: most booked packages by all users
    $recommendedPackages = Cart::select('package_id')
        ->groupBy('package_id')
        ->orderByRaw('COUNT(*) DESC')
        ->limit(3)
        ->with('package')
        ->get()
        ->pluck('package');

    return view('profile', compact('user', 'carts', 'recommendedPackages'));
}
}
