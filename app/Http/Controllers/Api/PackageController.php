<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return response()->json([
            'message'=> 'Fetched Sucessfully',
            'success'=> true,
            'data'=> $packages
        ]);
    }
}
