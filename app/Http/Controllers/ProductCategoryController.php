<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $categories = ProductCategory::all();
        return view('product_categories.index', compact('categories'));
    }

    public function create(){
        return view('product_categories.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $category = ProductCategory::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('product_categories.index')->with('success', 'Product category created successfully.');
    }

    public function edit(ProductCategory $productCategory){
        return view('product_categories.edit', compact('productCategory'));
    }

    public function update(Request $request, ProductCategory $productCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $productCategory->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('product_categories.index')->with('success', 'Product category updated successfully.');
    }

    public function destroy(ProductCategory $productCategory){
        $productCategory->delete();
        return redirect()->back()->with('status', 'Deleted Successfully');
    }

    
}
