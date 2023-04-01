<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
