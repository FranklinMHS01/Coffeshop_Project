<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Increment the login attempt counter
        $request->session()->increment('login_attempts');

        // Validate the request input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate the user using custom logic
        $user = User::where('username', $request->username)->first();

        if ($user) {
            // Check if the password matches the hashed password in the database
            if (Hash::check($request->password, $user->password)) {
                // Log the user in
                Auth::login($user);

                // Store user-related data in the session
                $request->session()->put('user_id', $user->id_user);
                $request->session()->put('user_name', $user->username);
                $request->session()->put('user_level', $user->level);

                // Reset login attempts counter
                $request->session()->forget('login_attempts');

                return redirect()->route('menu.index'); // Redirect to the dashboard
            }
        }

        // If login fails, redirect back with an error message
        return redirect()->back()->withErrors(['login' => 'Invalid credentials.']);
    }
}


