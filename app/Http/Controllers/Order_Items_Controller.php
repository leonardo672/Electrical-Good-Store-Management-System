<?php

namespace App\Http\Controllers;

use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class Order_Items_Controller extends Controller
{
    /**
     * Display a listing of the order items.
     */
    public function index()
    {
        // Retrieve all order items, including the related order and product data
        $orderItems = OrderItem::with(['order', 'product'])->get();
        
        return view('order_items.index', compact('orderItems'));
    }

    /**
     * Show the form for creating a new order item.
     */
    public function create()
    {
        // Fetch available orders and products for creating an order item
        $orders = Order::all();
        $products = Product::all();

        return view('order_items.create', compact('orders', 'products'));
    }

    /**
     * Store a newly created order item in the database.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'order_id' => 'required|exists:order,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Create the new order item
        OrderItem::create([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('order_items.index')->with('success', 'Order item created successfully!');
    }

    /**
     * Display the specified order item.
     */
    public function show($id)
    {
        // Retrieve the specific order item with its related order and product
        $orderItem = OrderItem::with(['order', 'product'])->findOrFail($id);
        
        return view('order_items.show', compact('orderItem'));
    }

    /**
     * Show the form for editing the specified order item.
     */
    public function edit($id)
    {
        // Retrieve the specific order item along with orders and products for editing
        $orderItem = OrderItem::findOrFail($id);
        $orders = Order::all();
        $products = Product::all();

        return view('order_items.edit', compact('orderItem', 'orders', 'products'));
    }

    /**
     * Update the specified order item in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $request->validate([
            'order_id' => 'required|exists:order,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        // Find the order item and update it with the new data
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->update([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);

        return redirect()->route('order_items.index')->with('success', 'Order item updated successfully!');
    }

    /**
     * Remove the specified order item from storage.
     */
    public function destroy($id)
    {
        // Find the order item and delete it
        $orderItem = OrderItem::findOrFail($id);
        $orderItem->delete();

        return redirect()->route('order_items.index')->with('success', 'Order item deleted successfully!');
    }
}
