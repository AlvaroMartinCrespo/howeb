<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accomodations;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    function complete()
    {
        return view('reservation/complete');
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

    /**
     * Return a view of reservation of accomodation by id
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function reservationStep2($id)
    {
        $accomodation = Accomodations::find($id);
        return view('page/reservation/reservationStep2', compact('accomodation'));
    }

    /**
     * Return a view of reservation of accomodation by id
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function reservationStep3($id)
    {
        $accomodation = Accomodations::find($id);
        return view('page/reservation/reservationStep3', compact('accomodation'));
    }
}
