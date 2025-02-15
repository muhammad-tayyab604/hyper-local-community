<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function services()
    {
        $blogs = Blog::take(3)->get();
        return view('services', compact('blogs'));
    }
}
