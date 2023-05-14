<?php

namespace App\Http\Controllers;

use App\Models\Accomodations;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class PageController extends Controller
{
    /**
     * Return home view
     * Turn to false if already visited visitedStep1, visitedStep2 and visitedStep3 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        // If exists checksteps variables in session set them to false
        if (session()->has('visitedStep1')) {
            session()->put('visitedStep1', false);
            if (session()->has('visitedStep2')) {
                session()->put('visitedStep2', false);

                if (session()->has('visitedStep2')) {
                    session()->put('visitedStep3', false);
                }
            }
        };

        $randomAccomodations = DB::table('accomodations')->inRandomOrder()->take(3)->get();

        $idUser = auth()->user()->id;

        // Get all reservations of current user
        $dates = DB::table('reservations')
            ->join('accomodations', 'reservations.id_accomodation', '=', 'accomodations.id')
            ->select('reservations.id as id_reservation', 'reservations.*', 'accomodations.*')
            ->where('reservations.id_user', '=', $idUser)
            ->get();

        return view('page/home', compact('randomAccomodations', 'dates'));
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
        $countReservations = DB::table('reservations')->count();
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
        $dates = DB::table('reservations')
            ->join('accomodations', 'reservations.id_accomodation', '=', 'accomodations.id')
            ->select('reservations.id as id_reservation', 'reservations.*', 'accomodations.*')
            ->where('reservations.id_user', '=', $id)
            ->get();
        $user = User::find($id);
        // If user doesn't exist
        if (!$user) {
            abort(404);
        }
        return view('page/user/user', compact('user', 'dates'));
    }

    /**
     *  Return accomodation view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function accomodation($id)
    {
        $accomodation = Accomodations::find($id);
        // If accomodation doesn't exist
        if (!$accomodation) {
            abort(404);
        }
        return view('page/accomodation/accomodation', compact('accomodation'));
    }

    /**
     * Return aboutUs view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 
     */
    public function aboutUs()
    {
        return view('page/aboutUs');
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
     * Return a view of terms and conditions
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function terms()
    {
        return view('page/termsAndConditions');
    }
}
