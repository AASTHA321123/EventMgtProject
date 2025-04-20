<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        //sort categories by priority using bubble sort
        for($i=0;$i<count($categories); $i++)
        {
            for($j=0;$j<count($categories)-$i-1;$i++)
            {
             if($categories[$j]->priority > $categories[$j]->priority)  
               {
                $temp = $categories[$j];
                $categories[$j] = $categories[$j+1];
                $categories[$j+1] = $temp;
               }
            }

        }
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
    //dd($request->all());
    $data= $request->validate([
        'priority' =>'required|integer',
        'name' =>'required'
    ]);
    Category::create($data);
    return redirect(route('category.index'))->with('success', 'Category created successfully');
    }

    public function edit($id)
    {
    $category = Category::findOrFail($id);
    return view('category.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $data= $request->validate([
            'priority' =>'required|integer',
            'name' =>'required'
        ]);
        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect(route('category.index'))->with('success', 'Category update successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('category.index'))->with('success','Category deleted successfully');
    }

    
}
