<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class publicController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('welcome' , compact('products'));
    }

    public function show($id){
        $product = Product::find($id);
        return view('public.show', compact('product'));
    }

}
