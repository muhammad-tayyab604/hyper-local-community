<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Card;
use Illuminate\Http\Request;

class ApiCardController extends Controller
{
    public function card()
    {
        $card=Card::get();
        if(!$card)
        {
            return response()->json([
                'status'=>'202',
                'message'=>'Card data not found',
               
                'card'=>$card,
            ],202);
        }
        else{
            return response()->json([
                'status'=>'200',
                'message'=>'Card data found',
               
                'card'=>$card,
            ],200);
        }
    }
}
