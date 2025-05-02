<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{ 
    public function create()
{
    $packages = Package::all();
    $reviews = Review::with('user')->latest()->get();
    return view('reviews.create', compact('packages', 'reviews'));
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'package_id' => 'required|exists:packages,id',
        'description' => 'required|string',
        'rating' => 'required|integer|min:1|max:5',
    ]);

    Review::create([
        'user_id' => Auth::id(),
        'package_id' => $request->package_id,
        'title' => $request->title,
        'description' => $request->description,
        'rating' => $request->rating,
    ]);

    return redirect()->route('reviews.create')->with('success', 'Review submitted!');
}
}
