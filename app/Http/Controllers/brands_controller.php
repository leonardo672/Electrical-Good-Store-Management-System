<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Brand;

class brands_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $brands = Brand::all();
        return view('brands.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:_brands,name',
            'description' => 'nullable|string',
        ]);

        // Create the brand record
        Brand::create($validated);

        // Redirect with a flash message
        return redirect('brands')->with('flash_message', 'Brand added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $brands = Brand::findOrFail($id);
        return view('brands.show', compact('brands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $brands = Brand::findOrFail($id);
        return view('brands.edit', compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $brands = Brand::findOrFail($id);

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:100|unique:_brands,name,' . $brands->id,
            'description' => 'nullable|string',
        ]);

        // Update the brand record
        $brands->update($validated);

        // Redirect with a flash message
        return redirect('brands')->with('flash_message', 'Brand updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Brand::destroy($id);
        return redirect('brands')->with('flash_message', 'Brand deleted successfully!');
    }
}
