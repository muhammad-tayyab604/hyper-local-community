<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class investmentsController extends Controller
{
    public function investments()
    {
        $blogs = Blog::take(3)->get();
        $investmentCategories = Category::all();
        $investmentProducts = Product::get();
        return view('investments', compact('investmentProducts', 'investmentCategories', 'blogs'));
    }
}
