<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function index()
    {
        return view('blog.hello'); // Pastikan sesuai dengan lokasi file Blade
    }
}
