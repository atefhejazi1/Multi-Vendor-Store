<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Fetch all products with their categories and stores
        $products = Product::where('status', "=", "active")->with(['category', 'store'])->paginate(8);
        return view('welcome', compact('products'));
    }
}
