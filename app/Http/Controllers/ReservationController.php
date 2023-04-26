<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accomodations;
use App\Models\Reservation;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    function complete($id)
    {

        // Information about the reservation
        $user_id = auth()->user()->id;
        $dateEntry = request()->input('entryDate');
        $dateDeparture = request()->input('departureDate');
        $price = request()->input('price');

        // Create a new reservation
        $reservation = new Reservation();
        $reservation->id_accomodation = $id;
        $reservation->id_user = $user_id;
        $reservation->start_date = $dateEntry;
        $reservation->end_date = $dateDeparture;
        $reservation->price = $price;
        $reservation->save();


        return view('page/reservation/complete');
    }

    /**
     * Return a view of reservation of accomodation by id 
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function reservation($id)
    {
        session()->put('visitedStep1', true);
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
        session()->put('visitedStep2', true);
        $accomodation = Accomodations::find($id);
        $error = false;
        return view('page/reservation/reservationStep2', compact('accomodation', 'error'));
    }

    /**
     * Return a view of reservation of accomodation by id
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function reservationStep3(Request $request, $id)
    {

        session()->put('visitedStep3', true);
        $accomodation = Accomodations::find($id);

        // Check if date is valid, if not redirect to step 2
        $entryDate = $request->input('entryDate');
        $departureDate = $request->input('departureDate');
        if ($entryDate > $departureDate) {
            $error = true;
            return view('page/reservation/reservationStep2', compact('accomodation', 'error'));
        }

        $price = $this->calculatePrice($entryDate, $departureDate);

        return view('page/reservation/reservationStep3', compact('accomodation', 'price'));
    }

    /**
     * Return a price of reservation depending on the date
     * @param $inputDate
     * @return int
     * 
     */
    private function calculatePrice($entryDate, $departureDate)
    {
        // Object DateTime with date
        $entryDate = DateTime::createFromFormat('Y-m-d', $entryDate);
        $departureDate = DateTime::createFromFormat('Y-m-d', $departureDate);

        // Get month
        $month = $entryDate->format('m');

        // Price per month
        switch ($month) {
            case '01':
                $price = 50;
                break;
            case '02':
                $price = 60;
                break;
            case '03':
                $price = 70;
                break;
            case '04':
                $price = 80;
                break;
            case '05':
                $price = 90;
                break;
            case '06':
                $price = 100;
                break;
            case '07':
                $price = 110;
                break;
            case '08':
                $price = 120;
                break;
            case '09':
                $price = 130;
                break;
            case '10':
                $price = 140;
                break;
            case '11':
                $price = 150;
                break;
            case '12':
                $price = 160;
                break;
            default:
                $price = 0;
        }

        $intervalDays = $entryDate->diff($departureDate);
        $days = $intervalDays->days;

        $price = $price * $days;

        return $price;
    }
}
