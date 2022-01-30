<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Category $category)
    {
        return view('home.index', [
            'categories' => $category->all()
        ]);
    }
}
