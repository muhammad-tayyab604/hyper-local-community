<?php

namespace App\Http\Controllers\dashboardControllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Auth::user()->categories;
        return view('dashboards.seller.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboards.seller.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'user_id' => Auth::id(), // Assign the logged-in user's ID
        ]);
        return redirect()->route('service-categories.index')->with('status', 'Category Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboards.seller.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboards.seller.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;

        $category->save();
        return redirect()->route('service-categories.index')->with('status', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('service-categories.index')->with('status', 'Category Deleted Successfully');
    }
}
