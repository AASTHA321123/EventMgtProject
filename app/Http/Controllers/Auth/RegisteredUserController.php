<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
        'name' => ['required', 'regex:/^[A-Za-z\s]+$/'],
        'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/', 'unique:users,email'],
        'number' => ['required', 'regex:/^\d{10}$/'],
        'password' => ['required', 'confirmed', 'min:6'],
        ]);

        $password = $request->password;
         $cost = 10; // Cost factor for hash (can be adjusted)
 
         // Create a random salt
         $salt = substr(base64_encode(openssl_random_pseudo_bytes(17)), 0, 22);
         $salt = strtr($salt, '+', '.'); // hash uses ./ instead of + in the salt
 
         // Build the hash salt format
         $salt = sprintf('$2y$%02d$', $cost) . $salt;
 
         // Hash the password with hash
         $hashedPassword = crypt($password, $salt);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  $hashedPassword,
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        return redirect(route('login'));
    }
}
