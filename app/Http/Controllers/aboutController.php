<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about()
    {
        $blogs = Blog::take(3)->get();
        return view('about', compact('blogs'));
    }
}
