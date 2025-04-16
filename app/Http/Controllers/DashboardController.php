<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Notice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totalcategories = Category::count();
        $totalnotices = Notice::count();
        return view('dashboard', compact('totalcategories', 'totalnotices'));
        
    }
}
