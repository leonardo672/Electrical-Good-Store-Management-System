<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockMovement;
use App\Models\Product;

class stock_movements_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\View\View
    {
        $stockMovements = StockMovement::with('product')->paginate(10); // Paginated list with related products
        return view('stock_movements.index', compact('stockMovements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\View\View
    {
        $products = Product::all(); // Fetch all products
        return view('stock_movements.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:addition,subtraction',
            'quantity' => 'required|integer|min:1',
            'reason' => 'nullable|string',
        ]);

        StockMovement::create($validated);

        return redirect()->route('stock_movements.index')->with('success', 'Stock movement added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\View\View
    {
        $stockMovement = StockMovement::with('product')->findOrFail($id);
        return view('stock_movements.show', compact('stockMovement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): \Illuminate\View\View
    {
        $stockMovement = StockMovement::findOrFail($id);
        $products = Product::all(); // Fetch all products for dropdown
        return view('stock_movements.edit', compact('stockMovement', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\RedirectResponse
    {
        $stockMovement = StockMovement::findOrFail($id);

        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:addition,subtraction',
            'quantity' => 'required|integer|min:1',
            'reason' => 'nullable|string',
        ]);

        $stockMovement->update($validated);

        return redirect()->route('stock_movements.index')->with('success', 'Stock movement updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\RedirectResponse
    {
        $stockMovement = StockMovement::findOrFail($id);
        $stockMovement->delete();

        return redirect()->route('stock_movements.index')->with('success', 'Stock movement deleted successfully!');
    }
}