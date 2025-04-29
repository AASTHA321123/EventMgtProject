<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request, Package $package)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'rating' => 'required|integer|between:1,5',
        ]);

        $package->reviews()->create([
            'user_id' => auth()->id(),
            'title' => $validated['title'],
            'description' => $validated['description'],
            'rating' => $validated['rating'],
        ]);

        return back()->with('success', 'Thank you for your review!');
    }
}
