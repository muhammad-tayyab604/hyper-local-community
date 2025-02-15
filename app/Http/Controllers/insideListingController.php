<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;


class insideListingController extends Controller
{
    public function insideListing($buyProduct)
    {
        $blogs = Blog::take(3)->get();
        $insideListingCategory = Category::find($buyProduct);
        $insideListing = Product::find($buyProduct);
        $insideProducts = Product::all();
        $firstThreeHomeProducts = $insideProducts->take(3);
        $nextThreeHomeProducts = $insideProducts->slice(3, 3);
        return view('insidelisting', compact('insideListing', 'insideListingCategory', 'firstThreeHomeProducts', 'nextThreeHomeProducts', 'blogs'));
    }
}
