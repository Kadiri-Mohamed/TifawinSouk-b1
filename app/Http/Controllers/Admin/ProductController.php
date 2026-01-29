<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::all();
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|min:3|max:100',
            'stock' => 'required|numeric',
            'reference' => 'required',
            'prix' => 'required|numeric',
            'description' => 'required|min:10',
        ]);

        Product::create($data);
        return redirect()->route('admin.products.index')->with('success', 'Produit ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $data = $request->validate([
            'nom' => 'required|min:3|max:100',
            'reference' => 'required',
            'stock' => 'required|numeric',
            'prix' => 'required|numeric',
            'description' => 'required|min:10',
            'category' => 'required|exists:categories,id'
        ]);

        $data['category_id'] = $data['category'];
        unset($data['category']);

        $product->update($data);
        return redirect()->route('admin.products.index')->with('success', 'Produit modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
