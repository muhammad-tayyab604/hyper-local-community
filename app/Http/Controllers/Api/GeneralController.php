<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\CategoryArtical;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
public function article()
{
    $artical=Artical::get();
    if(!$artical)
    {
        return response()->json([
            'status'=>'202',
            'message'=>'artical data not found',
           
            'artical'=>$artical,
        ],202);
    }
    else{
        return response()->json([
            'status'=>'200',
            'message'=>'artical data found',
           
            'artical'=>$artical,
        ],200);
    }
}
public function category_wise_article(Request $request)
{

        $artical=CategoryArtical::with('category')->where('category_id',$request->category_id)->get();
  
    if(!$artical)
    {
        return response()->json([
            'status'=>'202',
            'message'=>'category wise artical data not found',
           
            'artical'=>$artical,
        ],202);
    }
    else{
        return response()->json([
            'status'=>'200',
            'message'=>'category wise artical data found',
           
            'artical'=>$artical,
        ],200);
    }
}
}