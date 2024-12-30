<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class Order_controller extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        $orders = Order::all(); // Fetch all orders
        return view('orders.index', compact('orders')); // Pass orders data to the view
    }

    /**
     * Show the form for creating a new order.
     */
    public function create()
    {
  
        $customers = Customer::all(); // Retrieve all customers
        return view('orders.create', compact('customers'));
        // return view('orders.create'); // Return the order creation form view
    }

    /**
     * Store a newly created order in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'customer_id' => 'required|exists:customers,id', // Ensure customer exists
            'total' => 'required|numeric|min:0',
            'status' => 'required|in:pending,completed,canceled',
        ]);
    
        // Create a new order
        Order::create([
            'customer_id' => $request->customer_id,
            'total' => $request->total,
            'status' => $request->status,
            'order_date' => now(),
        ]);
    
        // Redirect to the orders list with a success message
        return redirect()->route('orders.index')->with('success', 'Order created successfully!');
    }
    

    /**
     * Display the specified order.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id); // Find the order by id
        return view('orders.show', compact('order')); // Pass the order data to the view
    }

    /**
     * Show the form for editing the specified order.
     */
  

    public function edit($id)
    {
        $order = Order::findOrFail($id); // Retrieve the order by ID
        $customers = Customer::all();   // Retrieve all customers
        return view('orders.edit', compact('order', 'customers'));
    }

        // $order = Order::findOrFail($id); // Find the order by id
        // return view('orders.edit', compact('order')); // Pass order data to the edit form view

    /**
     * Update the specified order in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'customer_id' => 'required|exists:customers,id', // Ensure the customer exists
            'total' => 'required|numeric|min:0',
            'status' => 'required|in:pending,completed,canceled',
        ]);
    
        // Update the order
        $order = Order::findOrFail($id);
        $order->update([
            'customer_id' => $request->customer_id,
            'total' => $request->total,
            'status' => $request->status,
        ]);
    
        // Redirect to the orders list with a success message
        return redirect()->route('orders.index')->with('success', 'Order updated successfully!');
    }
    

    /**
     * Remove the specified order from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id); // Find the order by id
        $order->delete(); // Delete the order

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
