<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $url = route('news::categories');
        return '<h1>There will be news here</h1>' . "<a href='$url'>Categories</a>";
    }
}
