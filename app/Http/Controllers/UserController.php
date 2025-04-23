<?php

namespace App\Http\Controllers;

// Importing necessary classes
use App\Models\User; // User model for interacting with the users table
use Illuminate\Http\Request; // Handles HTTP requests
use Illuminate\Support\Facades\Auth; // Laravel's authentication system
use Illuminate\Support\Facades\Hash; // For securely hashing passwords
use Illuminate\Support\Facades\Validator; // For validating form inputs

class UserController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('register'); // Return the registration view
    }

    // Handle user registration
    public function register(Request $request)
    {
        // Validate incoming registration form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255', // Name is required and must be a string with max length 255
            'email' => 'required|string|email|max:255|unique:users', // Email must be unique in the users table
            'password' => 'required|string|min:8|confirmed', // Password must be at least 8 characters and match the confirmation
        ]);

        // If validation fails, redirect back with errors and input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new user with hashed password
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password before storing
        ]);

        // Automatically log the user in
        Auth::login($user);

        // Redirect to dashboard with success message
        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('login'); // Return the login view
    }

    // ❌ This function seems to be misplaced. It looks like a duplicate of the register function.
    // It is named "login", but it's doing registration again. Below are its comments regardless:

    public function login(Request $request)
    {
        // Validates the login form data (but it's actually a duplicate of registration validation)
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Again, creates a new user (which should not happen in a login function)
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to login form with success message
        return redirect()->route('login.form')->with('success', 'Registration successful! Please log in.');
    }

}
