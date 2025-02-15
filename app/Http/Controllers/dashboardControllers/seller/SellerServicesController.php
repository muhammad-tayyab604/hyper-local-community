<?php

namespace App\Http\Controllers\dashboardControllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerServicesController extends Controller
{
    public function index()
    {
        $services = Service::where('user_id', Auth::id())->get();
        return view('dashboards.seller.services.index', compact('services'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboards.seller.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('services', 'public') : null;

        Service::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    public function show(Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        return view('dashboards.seller.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        $categories = Category::all();
        return view('dashboards.seller.services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $service->update(['image' => $imagePath]);
        }

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('dashboards.seller.services.index')->with('success', 'Service updated successfully!');
    }

    public function destroy(Service $service)
    {
        if ($service->user_id !== Auth::id()) {
            abort(403);
        }

        $service->delete();
        return redirect()->route('dashboards.seller.services.index')->with('success', 'Service deleted successfully!');
    }
}
