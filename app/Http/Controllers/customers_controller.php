<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class customers_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $customer = Customer::all();
        return view('customers.index')->with('customer', $customer);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'nullable|email|unique:customers,email',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
        ]);

        // Create the customer record
        Customer::create($validated);

        // Redirect with a flash message
        return redirect('customers')->with('flash_message', 'Customer added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $customer = Customer::findOrFail($id);

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'email' => 'nullable|email|unique:customers,email,' . $customer->id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
        ]);

        // Update the customer record
        $customer->update($validated);

        // Redirect with a flash message
        return redirect('customers')->with('flash_message', 'Customer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Customer::destroy($id);
        return redirect('customers')->with('flash_message', 'Customer deleted successfully!');
    }
}
