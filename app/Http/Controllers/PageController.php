<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Return home view
     */
    public function index()
    {
        return view('page/home');
    }

    public function hoteles()
    {
        return view('page/hoteles');
    }

    public function cpanel()
    {
        return view('page/cPanel');
    }
}
