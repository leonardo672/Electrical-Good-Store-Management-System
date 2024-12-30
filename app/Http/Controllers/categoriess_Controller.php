<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Category;

class categoriess_Controller extends Controller
{
    
        /**
          * Display a listing of the resource.
          */
         public function index(): View
         {
             $categoriess = Category::all();
             return view('categoriess.index')->with('categoriess', $categoriess);
         }
     
         /**
          * Show the form for creating a new resource.
          */
         public function create(): View
         {
             return view('categoriess.create');
         }
     
         /**
          * Store a newly created resource in storage.
          */
         public function store(Request $request): RedirectResponse
         {
             // Validate the incoming request
             $validated = $request->validate([
                 'name' => 'required|string|max:100|unique:categoriess,name',
                 'description' => 'nullable|string',
             ]);
     
             // Create the category record
             Category::create($validated);
     
             // Redirect with a flash message
             return redirect('categoriess')->with('flash_message', 'Category added successfully!');
         }
     
         /**
          * Display the specified resource.
          */
         public function show(string $id): View
         {
             $categoriess = Category::findOrFail($id);
             return view('categoriess.show', compact('categoriess'));
         }
     
         /**
          * Show the form for editing the specified resource.
          */
         public function edit(string $id): View
         {
             $categoriess = Category::findOrFail($id);
             return view('categoriess.edit', compact('categoriess'));
         }
     
         /**
          * Update the specified resource in storage.
          */
         public function update(Request $request, string $id): RedirectResponse
         {
             $category = Category::findOrFail($id);
     
             // Validate the incoming request
             $validated = $request->validate([
                 'name' => 'sometimes|required|string|max:100|unique:categoriess,name,' . $category->id,
                 'description' => 'nullable|string',
             ]);
     
             // Update the category record
             $category->update($validated);
     
             // Redirect with a flash message
             return redirect('categoriess')->with('flash_message', 'Category updated successfully!');
         }
     
         /**
          * Remove the specified resource from storage.
          */
         public function destroy(string $id): RedirectResponse
         {
             Category::destroy($id);
             return redirect('categoriess')->with('flash_message', 'Category deleted successfully!');
         }
     
 }
     
     
     
