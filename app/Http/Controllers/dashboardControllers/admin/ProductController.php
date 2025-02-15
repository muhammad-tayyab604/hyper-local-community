<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboards.admin.buyers.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboards.admin.buyers.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'area' => 'required',
                'property_details_pdf' => 'nullable',
                'floor_plan_details_pdf' => 'nullable',
                'property_video' => 'nullable',
                'country' => 'required',
                'property_size' => 'required',
                'year_build' => 'required',
                'number_of_bed' => 'required',
                'garadge' => 'required',
                'garage_size' => 'required',
                'status' => 'required',
                'number_of_bath' => 'required',
                'square_feet' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'price' => 'required',
                'air_conditioning' => 'nullable',
                'heater' => 'nullable',
                'lawndry_room' => 'nullable',
                'lawn' => 'nullable',
                'swimming_pool' => 'nullable',
                'dining_room' => 'nullable',
                'property_id' => 'required',

            ]);
            $product = new Product();
            $product->name = $request->name;
            $product->address = $request->address;
            $product->state = $request->state;
            $product->city = $request->city;
            $product->zip = $request->zip;
            $product->area = $request->area;
            $product->country = $request->country;
            $product->year_build = $request->year_build;
            $product->number_of_bed = $request->number_of_bed;
            $product->garadge = $request->garadge;
            $product->garage_size = $request->garage_size;
            $product->status = $request->status;
            $product->number_of_bath = $request->number_of_bath;
            $product->square_feet = $request->square_feet;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            $product->property_size = $request->property_size;
            $product->property_id = $request->property_id;
            $product->air_conditioning = $request->has('air_conditioning') ? 1 : 0;
            $product->heater = $request->has('heater') ? 1 : 0;
            $product->lawndry_room = $request->has('lawndry_room') ? 1 : 0;
            $product->lawn = $request->has('lawn') ? 1 : 0;
            $product->swimming_pool = $request->has('swimming_pool') ? 1 : 0;
            $product->dining_room = $request->has('dining_room') ? 1 : 0;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/product/'), $filename);
                $product->image = $filename;
            }
            if ($request->file('floor_plan_img')) {
                $file = $request->file('floor_plan_img');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/product/floorplan'), $filename);
                $product->floor_plan_img = $filename;
            }
            if ($request->file('property_video')) {
                $file = $request->file('property_video');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Video/propertyVideos/'), $filename);
                $product->property_video = $filename;
            }
            if ($request->file('property_details_pdf')) {
                $file = $request->file('property_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $product->property_details_pdf = $filename;
            }
            if ($request->file('company_profile_pdf')) {
                $file = $request->file('company_profile_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $product->company_profile_pdf = $filename;
            }
            if ($request->file('floor_plan_details_pdf')) {
                $file = $request->file('floor_plan_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $product->floor_plan_details_pdf = $filename;
            }
            $product->save();
            return redirect('/product')->with('success', 'Property store successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        $category = Category::find($product->category_id);
        return view('dashboards.admin.buyers.show', compact('product', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('dashboards.admin.buyers.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'address' => 'required',
                'state' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'property_details_pdf' => 'nullable',
                'floor_plan_details_pdf' => 'nullable',
                'property_video' => 'nullable',
                'garage_size' => 'required',
                'status' => 'required',
                'property_size' => 'required',
                'property_id' => 'required',
                'area' => 'required',
                'country' => 'required',
                'year_build' => 'required',
                'number_of_bed' => 'required',
                'garadge' => 'required',
                'number_of_bath' => 'required',
                'square_feet' => 'required',
                'description' => 'required',
                'category_id' => 'required',
                'price' => 'required',
            ]);
            $product = Product::find($id);
            $product->name = $request->name;
            $product->address = $request->address;
            $product->state = $request->state;
            $product->city = $request->city;
            $product->zip = $request->zip;
            $product->area = $request->area;
            $product->country = $request->country;
            $product->year_build = $request->year_build;
            $product->garage_size = $request->garage_size;
            $product->status = $request->status;
            $product->property_id = $request->property_id;
            $product->number_of_bed = $request->number_of_bed;
            $product->garadge = $request->garadge;
            $product->property_size = $request->property_size;
            $product->number_of_bath = $request->number_of_bath;
            $product->square_feet = $request->square_feet;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->price = $request->price;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/product/'), $filename);
                $product->image = $filename;
            }
            if ($request->file('floor_plan_img')) {
                $file = $request->file('floor_plan_img');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/product/floorplan'), $filename);
                $product->floor_plan_img = $filename;
            }
            if ($request->file('property_video')) {
                $file = $request->file('property_video');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Video/propertyVideos/'), $filename);
                $product->property_video = $filename;
            }
            if ($request->file('property_details_pdf')) {
                $file = $request->file('property_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $product->property_details_pdf = $filename;
            }
            if ($request->file('company_profile_pdf')) {
                $file = $request->file('company_profile_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $product->company_profile_pdf = $filename;
            }
            if ($request->file('floor_plan_details_pdf')) {
                $file = $request->file('floor_plan_details_pdf');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/PDFs/'), $filename);
                $product->floor_plan_details_pdf = $filename;
            }

            $product->update();
            return redirect('/product')->with('success', 'Property updated successfully');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
        $product = Product::find($request->deleted_id);
        $product->delete();
        return redirect('/product')->with('success', 'Property deleted successfully');

    }
}
