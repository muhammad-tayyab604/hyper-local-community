<?php

namespace App\Http\Controllers\dashboardControllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()
    {
        $category = DB::table('categories')
            ->join('sub_categories', 'categories.id', 'sub_categories.category')->get();
        // dd($category);

        return view('admin.subcategory.index', compact('category'));
    }



    public function show()
    {
        $category = DB::table('categories')->get();

        return view('admin.subcategory.create', compact('category'));
    }


    public function create(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'sub_category' => 'required',
        ]);
        DB::table('sub_categories')->insert([

            'category' => $request->category,
            'sub_category' => $request->sub_category,
        ]);
        return redirect('show-subcategory')->with('status', 'Sub Category Inserted Successfuly');
    }


    public function view($id)
    {
        $category = DB::table('categories')
            ->join('sub_categories', 'categories.id', 'sub_categories.category')
            ->where('sub_categories.id', $id)->get();
        // dd($category);

        return view('admin.subcategory.view', compact('category'));
    }


    public function edit($id)
    {
        $category = DB::table('categories')->get();
        $sub_category = DB::table('categories')
            ->join('sub_categories', 'categories.id', 'sub_categories.category')
            ->where('sub_categories.id', $id)->get();
        // dd($sub_category);

        return view('admin.subcategory.edit', compact('category', 'sub_category'));
    }



    public function update(Request $request, $id)
    {

        // dd($request->all());
        $request->validate([
            'category' => 'required',
            'sub_category' => 'required',
        ]);
        DB::table('sub_categories')->where('id', $id)->update([

            'category' => $request->category,
            'sub_category' => $request->sub_category,
        ]);
        return redirect('show-subcategory')->with('status', 'Category Updated Successfuly');
    }


    public function delete(Request $request)
    {
        DB::table('sub_categories')->where('id', $request->deleted_id)->delete();

        return redirect()->back()->with('status', 'Category Deleted Successfully');
    }
}
