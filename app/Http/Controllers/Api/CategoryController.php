<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function get_category()
    {
        $categories=Category::get();
        if(!$categories)
        {
            return response()->json([
                'status'=>'202',
                'message'=>'categories data not found',
               
                'categories'=>$categories,
            ],202);
        }
        else{
            return response()->json([
                'status'=>'200',
                'message'=>'categories data found',
               
                'categories'=>$categories,
            ],200);
        }
      
    }
    public function get_subcategory()
    {
        $categories=SubCategory::with('category')->get();
        if(!$categories)
        {
            return response()->json([
                'status'=>'202',
                'message'=>'categories with subcategories data not found',
               
                'Subcategories'=>$categories,
            ],202);
        }
        else{
            return response()->json([
                'status'=>'200',
                'message'=>'categories with subcategories  data found',
               
                'Subcategories'=>$categories,
            ],200);
        }
      
    }
    
}
