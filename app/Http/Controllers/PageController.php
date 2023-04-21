<?php

namespace App\Http\Controllers;

use App\Models\Accomodations;
use App\Models\Reservation;
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
        return view('page/accomodation/accomodations', ['accomodations' => $accomodations]);
    }

    /**
     *  Return cpanel view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cpanel()
    {

        $countUsers = DB::table('users')->count();
        $countAccomodations = DB::table('accomodations')->count();
        $countReservations = DB::table('reservation')->count();
        return view('page/cPanel', ['countUsers' => $countUsers, 'countAccomodations' => $countAccomodations], ['countReservations' => $countReservations]);
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
        return view('page/user/users', compact('users'));
    }

    /**
     * Return user view
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user($id)
    {
        $user = User::find($id);
        return view('page/user/user', compact('user'));
    }

    /**
     *  Return accomodation view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function accomodation($id)
    {
        $accomodation = Accomodations::find($id);
        return view('page/accomodation/accomodation', compact('accomodation'));
    }

    /**
     * Return a view of list of accomodation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listAccomodation()
    {
        $accomodations = Accomodations::paginate(5);
        return view('page/accomodation/listAccomodations', ['accomodations' => $accomodations]);
    }

    /**
     * Return a view of list of reservation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function listReservation()
    {
        $reservations = Reservation::paginate(5);
        return view('page/reservation/listReservation', ['reservations' => $reservations]);
    }

    /**
     * Return a view of reservation of accomodation by id 
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function reservation($id)
    {
        $accomodation = Accomodations::find($id);
        return view('page/reservation/reservation', compact('accomodation'));
    }
}
