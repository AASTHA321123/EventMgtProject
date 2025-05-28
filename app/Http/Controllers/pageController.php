<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Item;
use App\Models\Package;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
    public function home()
    {
        $banners = Banner::orderBy('priority')->get();
        $packages = Package::all();
        $reviews = Review::latest()->get();
        return view('welcome',compact('banners', 'packages','reviews'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
    {
        return view('services');
    }

    

    public function viewpackage($id)
    {
        $package = Package::find($id);
        $items = Item::where('status', 'Show')->get();
        return view('viewpackage', compact('package','items'));

    }
    public function bookpackage($id)
    {
        $package = Package::find($id);
        $items = Item::where('status', 'Show')->get();
        $categories = Category::all();
        return view ('bookpackage', compact('package','items','categories'));
    }

    //binary searching algorithm
    public function search(Request $request)
    {
        $query = $request->input('query');

    if (!$query) {
        return redirect()->back()->with('error', 'Please enter a search term.');
    }

    $packages = Package::where('name', 'LIKE', '%' . $query . '%')->get();

    return view('search', compact('packages', 'query'));

    }

    public function reviewstore(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'package_id' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);
        $data['user_id'] = Auth::id();
        // Review::create($data);
        return back()->with('success','Review Submitted Successfully');
    }
}


