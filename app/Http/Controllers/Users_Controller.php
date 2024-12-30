<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Users;

class Users_Controller extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = Users::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,staff',
        ]);
    
        // Hash the password
        $validated['password'] = bcrypt($validated['password']);
        
        // Create the user record
        Users::create($validated);
    
        // Redirect with a flash message
        return redirect('users')->with('flash_message', 'User added successfully!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        // $user = Users::findOrFail($id);
        // return view('users.show')->with('user', $user);
            // Find the user by ID
    $users = Users::findOrFail($id); // You can replace `User` with the relevant model if needed

    // Pass the user data to the view
    return view('users.show', compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        // $user = Users::findOrFail($id);
        // return view('users.edit')->with('user', $user); 
            // Find the user by ID
    $users = Users::findOrFail($id);

    // Pass the user data to the view
    return view('users.edit', compact('users')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Find the user by id
        $user = Users::findOrFail($id);
    
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'email' => 'sometimes|required|email|max:100|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8',
            'role' => 'sometimes|required|in:admin,staff',
        ]);
    
        // If password is provided, hash it
        if (isset($validated['password'])) {
            $validated['password'] = bcrypt($validated['password']);
        }
    
        // Update the user record
        $user->update($validated);
    
        // Redirect with a flash message
        return redirect('users')->with('flash_message', 'User updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Users::destroy($id);
        return redirect('users')->with('flash_message', 'User deleted successfully!');
    }
}
