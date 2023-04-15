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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('page/home');
    }

    /**
     * Return hotels view
     * Accomodations
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 
     */
    public function accomodations()
    {
        $accomodations = Accomodations::all();
        return view('page/accomodations', ['accomodations' => $accomodations]);
    }

    /**
     *  Return cpanel view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cpanel()
    {

        $countUsers = DB::table('users')->count();
        $countAccomodations = DB::table('accomodations')->count();
        return view('page/cPanel', ['countUsers' => $countUsers, 'countAccomodations' => $countAccomodations]);
    }

    /**
     * Return users view.
     * Paginate users.
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function users(Request $request)
    {

        $users = User::paginate(5);
        return view('page/users', compact('users'));
    }

    /**
     * Return user view
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user($id)
    {
        $user = User::find($id);
        return view('page/user', compact('user'));
    }

    /**
     *  Return accomodation view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function accomodation()
    {
        return view('page/accomodation');
    }

    /**
     * Return a view of list of accomodation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listAccomodation()
    {
        $accomodations = Accomodations::all();
        return view('page/listAccomodations', ['accomodations' => $accomodations]);
    }
}
