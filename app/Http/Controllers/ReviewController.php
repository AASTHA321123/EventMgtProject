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

public function index()
   {
      $reviews = Review::all();
       return view('review.index', compact('reviews'));
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
        'sentiment_score' => $numericScore,
    ]);

    // Sentiment Analysis algorthim
    $sentiment = new Sentiment();
    $score = $sentiment->score($request->description);
    $class = $sentiment->categorise($request->description); // positive, negative, neutral

    // Optional: Convert to numeric sentiment score (e.g., +1 for positive, -1 for negative)
    $numericScore = match ($class) {
        'positive' => 1,
        'neutral' => 0,
        'negative' => -1,
    };

    return redirect()->route('reviews.create')->with('success', 'Review submitted!');
}

public function averageSentiment()
{
    return $this->reviews()->avg('sentiment_score');
}


public function destroy ($id)
    {
      $reviews = Review::find($id);
      $reviews->delete();
      return redirect(route('review.index'))->with('success','Review Delete Successfully');
    }
}
