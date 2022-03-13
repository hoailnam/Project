<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id)
    {
        $product= Product::findOrFail($id);
        return view('front.shop.show',compact('product'));
    }
    public function index(){
        $products= Product::paginate(6);
        return view('front.shop.index', compact('products'));
    }
}
