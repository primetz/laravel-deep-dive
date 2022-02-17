<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Category $category)
    {
        return view('auth.login', [
            'categoryList' => $category->getList()
        ]);
    }
}
