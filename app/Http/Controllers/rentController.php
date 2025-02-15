<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class rentController extends Controller
{
    public function rent(Request $request)
    {

        $categories = Category::all();
        $rentProducts = Product::all();
        return view('rent', compact('rentProducts', 'categories'));
    }

    public function searchProducts(Request $request)
    {
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $search = $request->input('search');
        $categories = Category::all();

        // Use a query to filter products based on the search query
        $query = Product::query()
            ->where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('area', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%');
            })
            ->where(function ($query) use ($minPrice, $maxPrice) {
                if ($minPrice !== null) {
                    $query->where('price', '>=', $minPrice);
                }
                if ($maxPrice !== null) {
                    $query->where('price', '<=', $maxPrice);
                }
            });

        $rentProducts = $query->get();

        return view('rent', compact('rentProducts', 'categories'));
    }
}