<?php
namespace App\Http\Controllers;

use App\Models\User; // Import User model
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request) // Inject the Request object
    {
        // Validate the request
        $attributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed']
        ]);

        // Create the user
        $user = User::create($attributes);

        // Log the user in
        Auth::login($user);

        // Redirect to jobs page
        return redirect('/jobs');
    }
}
