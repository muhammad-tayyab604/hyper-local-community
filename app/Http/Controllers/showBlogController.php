<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class showBlogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $blogs = Blog::when($search, function ($query) use ($search) {
            $query->where('title', 'like', "%$search%");
        })->get();

        return view('blog', compact('blogs'));
    }
}
