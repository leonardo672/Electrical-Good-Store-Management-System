<?php

namespace App\Http\Controllers;

use App\Models\Product; // Ensure the Product model is imported
use App\Models\Category; // Add Category model
use App\Models\Brand; // Add Brand model
use Illuminate\Http\Request;

class products_controller extends Controller
{

    /**
     * Display a listing of the products.
     */
    public function index()
    {
        $products = Product::all(); // Retrieve all products
        return view('products.index', compact('products')); // Return to index view with products
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categories = Category::all(); 
        $brands = Brand::all(); 
        // Fetch categories and brands from the database

        // Return the create form view with categories and brands
        return view('products.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categoriess,id', // Validate foreign key
            'brand_id' => 'nullable|exists:_brands,id', // Validate optional foreign key
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($validated); // Create product
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified product.
     */
    public function show(string $id)
    {
        
        $product = Product::findOrFail($id); // Find the product or fail
        return view('products.show', compact('product')); // Return to show view
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::findOrFail($id); // Find the product or fail
        return view('products.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'required|exists:categoriess,id', // Validate foreign key
            'brand_id' => 'nullable|exists:_brands,id', // Validate optional foreign key
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validated); // Update product
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete(); // Delete product
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
