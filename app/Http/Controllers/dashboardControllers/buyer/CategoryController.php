<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = DB::table('categories')->get();

        return view('admin.category.index', compact('category'));
    }



    public function show()
    {

        return view('admin.category.create');
    }


    public function create(Request $request)
    {
        try {
            $request->validate([
                'category_name' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $category = new Category();
            $category->category_name = $request->category_name;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/category/'), $filename);
                $category->image = $filename;
            }
            $category->save();
            return redirect('show-category')->with('status', 'Category Inserted Successfuly');
        } catch (\Exception $ex) {
            return redirect('show-category')->with('Error', $ex->getMessage());

        }
    }


    public function view($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.view', compact('category'));
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }



    public function update(Request $request, $id)
    {
        try {

            $request->validate([
                'category_name' => 'required',
                'image' => 'required|image|max:2048'
            ]);
            $category = Category::find($id);
            $category->category_name = $request->category_name;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('Image/category/'), $filename);
                $category->image = $filename;
            }
            $category->update();
            return redirect('show-category')->with('status', 'Category Updated Successfuly');
        } catch (\Exception $ex) {
            return redirect()->back()->with('Error', $ex->getMessage());

        }
    }


    public function delete(Request $request)
    {
        DB::table('categories')->where('id', $request->deleted_id)->delete();

        return redirect()->back()->with('status', 'Category Deleted Successfully');
    }

}