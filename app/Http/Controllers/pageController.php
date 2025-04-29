<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Item;
use App\Models\Package;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        $banners = Banner::orderBy('priority')->get();
        $packages = Package::all();
        return view('welcome',compact('banners', 'packages'));
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
    public function search (Request $request)
    {
        $query = $request->input('query');

    if (!$query) {
        return redirect()->back()->with('error', 'Please enter a search term.');
    }

    $packages = Package::where('name', 'LIKE', '%' . $query . '%')->get();

    if ($packages->isEmpty()) {
        return redirect()->back()->with('error', 'No packages found.');
    }

    return view('search_result', compact('packages', 'query'));

    }
}


