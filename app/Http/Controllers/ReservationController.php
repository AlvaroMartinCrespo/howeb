<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Accomodations;
use App\Models\Reservation;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    /**
     * Eliminate a reservation by id
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    function removeReservation($id)
    {
        // Error, elimina la reserva del usuario activo en la pagina.
        // TO DO
        // A partir de la reserva obtener el id de usuario y eliminar la reserva a ese usuario, no al usuario activo
        Reservation::find($id)->delete();
        //Remove reservation from user
        $user_id = auth()->user()->id; /* Aqui es el error */
        $user = User::find($user_id);
        $user->reservations = $user->reservations - 1;
        $user->save();

        return redirect('home')->with('eliminate', 'Reservation removed!');
        // return redirect()->route('home');
    }

    /**
     * Return a view of reservation with the information of the reservation, the accomodation and the user
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function infoReservation($id)
    {
        $reservation = Reservation::find($id);
        $accomodation = Accomodations::find($reservation->id_accomodation);
        $user = User::find($reservation->id_user);
        return view('page/reservation/infoReservation', compact('reservation', 'accomodation', 'user'));
    }

    /**
     * When you finish the reservation, redirect to the complete page with a animation payment successful.
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

        // Update the number of reservations of the user
        $user = User::find($user_id);
        $user->reservations = $user->reservations + 1;
        $user->save();

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
        $busy = false;
        return view('page/reservation/reservationStep2', compact('accomodation', 'error', 'busy'));
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

        // If entry date or departure date are null redirect to step 2
        if (is_null($entryDate) || is_null($departureDate)) {
            $error = true;
            $busy = false;
            return view('page/reservation/reservationStep2', compact('accomodation', 'error', 'busy'));
        }

        // Take all the reservation with id of accomodation
        $reservations = Reservation::where('id_accomodation', $id)->get();


        // We have the reservation dates in the reservations collection, and I have to check one by one if the new dates are within any of the already reserved dates to determine if the accommodation may be occupied or not.

        $available = true;
        foreach ($reservations as $reservation) {

            $reservationEntryDate = $reservation->start_date;
            $reservationDepartureDate = $reservation->end_date;

            if ($entryDate >= $reservationEntryDate && $entryDate <= $reservationDepartureDate) {
                $available = false;
                break;
            }

            if ($departureDate >= $reservationEntryDate && $departureDate <= $reservationDepartureDate) {
                $available = false;
                break;
            }
        }

        // If the dates are wrong redirect to step 2
        if ($entryDate > $departureDate) {
            $error = true;
            $busy = false;
            return view('page/reservation/reservationStep2', compact('accomodation', 'error', 'busy'));
        }

        // If not available redirect to step 2 
        if (!$available) {
            $busy = true;
            $error = false;
            return view('page/reservation/reservationStep2', compact('accomodation', 'busy', 'error'));
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
