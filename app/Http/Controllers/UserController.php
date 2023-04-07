<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->get('username');
        $users = DB::table('users')->where('name', 'like', '%' . $user . '%')->get();
        return redirect(route('cpanel'))->with('users', $users);
        // return view('page/cPanel', compact('users'));
    }
}
