<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{

    /**
     * Return login view
     */
    public function loginPage()
    {
        return view('session/login');
    }

    /**
     * Return register view
     */
    public function registerPage()
    {
        return view('session/register');
    }

    /**
     * Function for login and redirect to home.
     * If the user is admin, redirect to admin dashboard.
     */
    public function login(Request $request)
    {
        $credenciales = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();
            if (auth()->user()->admin) {
                return redirect(route('cpanel'));
            }
            return redirect()->intended(route('home'));
        } else {

            return redirect(route('login'));
        }
    }

    /**
     *  Function for register and redirect to home.
     */
    public function register(Request $request)
    {
        // Check if passwords match
        if (
            $request->password !== $request->repeatPassword
        ) {
            return view('session/register', ['errorPassword' => 'Passwords do not match']);
        } else if (User::where('email', $request->email)->exists()) {
            return view('session/register', ['errorEmail' => 'Email already exists']);
        } else {
            // Save user
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            Auth::login($user);
            return redirect(route('home'));
        }
    }

    /**
     * Function for logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
