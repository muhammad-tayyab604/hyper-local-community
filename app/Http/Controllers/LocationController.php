<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location(Request $request, $location)
    {
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $categories = Category::all();
        $searchQuery = $request->input('search'); // Get the user's search input

        // Start with a query that filters by the specified area
        $query = Product::where('area', $location);

        // Conditionally apply the search query
        if ($searchQuery) {
            $query->where(function ($query) use ($searchQuery) {
                $query->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('area', 'like', '%' . $searchQuery . '%');
            })
                ->where(function ($query) use ($minPrice, $maxPrice) {
                    if ($minPrice !== null) {
                        $query->where('price', '>=', $minPrice);
                    }
                    if ($maxPrice !== null) {
                        $query->where('price', '<=', $maxPrice);
                    }
                });

        }

        // Get the filtered properties
        $properties = $query->get();

        return view('locations', compact('properties', 'location', 'categories'));
    }

}
