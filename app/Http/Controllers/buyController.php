<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class buyController extends Controller
{
    public function buy()
    {
        $buyProducts = Product::all();
        return view('buy', compact('buyProducts'));
    }
}