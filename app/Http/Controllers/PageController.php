<?php

namespace App\Http\Controllers;

use App\Models\Accomodations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Return home view
     */
    public function index()
    {
        return view('page/home');
    }

    /**
     * Return hotels view
     */
    public function accomodations()
    {
        $accomodations = Accomodations::all();
        return view('page/accomodations', ['accomodations' => $accomodations]);
    }

    /**
     *  Return cpanel view
     */
    public function cpanel()
    {

        $countUsers = DB::table('users')->count();
        return view('page/cPanel', ['countUsers' => $countUsers]);
    }

    /**
     * Return users view.
     * Paginate users.
     * @param Request $request
     */
    public function users(Request $request)
    {

        $users = User::paginate(5);
        return view('page/users', compact('users'));
    }

    /**
     * Return user view
     * @param $id
     */
    public function user($id)
    {
        $user = User::find($id);
        return view('page/user', compact('user'));
    }
}
