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
use Spatie\Permission\Models\Role;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'in:admin,seller,buyer'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Role::where('name', $request->role)->exists()) {
            $user->assignRole($request->role);
        } else {
            return back()->withErrors(['role' => 'Invalid role selected.']);
        }

        event(new Registered($user));
        Auth::login($user);

        // Redirect based on role
        if ($user->hasRole('buyer')) {
            return redirect()->route('buyer.dashboard'); // Make sure this route exists
        } elseif ($user->hasRole('seller')) {
            return redirect()->route('seller.dashboard'); // Adjust based on your seller route
        } elseif ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard'); // Adjust based on your admin route
        }

        return redirect(RouteServiceProvider::HOME);
    }
}
