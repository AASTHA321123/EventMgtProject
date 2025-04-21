<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notice;
use App\Models\Package;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalcategories = Category::count();
        $totalnotices = Notice::count();
        $totalpackages = Package::count();
       return view('dashboard', compact('totalcategories', 'totalnotices', 'totalpackages',));
        
       //categories
       $allcat = Category::all();
       $categoycount = [];
       foreach($allcat as $cat){
           $categoycount[] = Category::where('category_id',$cat->id)->count();
       }
       $allcat = $allcat->pluck('name');
       $categoycount = json_encode($categoycount);
       $allcat = json_encode($allcat);
       return view('dashboard',compact('totalcategories','totalnotices'));
    }
}
