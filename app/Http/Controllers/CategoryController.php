<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories')->with('categories', $categories);
    }

    public function add()
    {
        return view('categories.add');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect('/categories');
    }
}
