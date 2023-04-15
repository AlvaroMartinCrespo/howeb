<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    /**
     * Return landing view
     */
    public function landing()
    {
        $randomAccomodations = DB::table('accomodations')->inRandomOrder()->take(3)->get();
        return view('landing', compact('randomAccomodations'));
    }
}
