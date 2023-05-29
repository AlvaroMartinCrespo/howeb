<?php

namespace Tests\Feature;

use App\Models\Accomodations;
use App\Models\Reservation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AccomodationsTest extends TestCase
{
    /**
     * Test if accomodations are returned
     */
    public function test_accomodations()
    {
        Artisan::call('migrate');

        $accomodations = Accomodations::all();

        // Verificar si la vista y los datos se retornan correctamente
        $view = view('page/accomodation/accomodations', ['accomodations' => $accomodations]);
        $this->assertEquals($accomodations, $view->getData()['accomodations']);
    }

    // public function test_createReservation()
    // {
    //     Artisan::call('migrate');

    //     // Crea un usuario ficticio
    //     $user = User::create([
    //         'name' => 'John Doe',
    //         'email' => 'JzK0a@example.com',
    //         'password' => Hash::make('Password1'),
    //     ]);

    //     // Define los datos de la reserva
    //     $id = 1; // ID de la acomodación
    //     $entryDate = '2023-05-29';
    //     $departureDate = '2023-06-05';
    //     $price = 100;

    //     // Realiza la solicitud a la página de completar reserva
    //     $response = $this->actingAs($user)->get(route('complete', ['id' => $id]), [
    //         'entryDate' => $entryDate,
    //         'departureDate' => $departureDate,
    //         'price' => $price,
    //     ]);

    //     // Verifica que la vista devuelta sea la correcta
    //     $response->assertViewIs('page/reservation/complete');

    //     // Verifica que se haya creado una nueva reserva en la base de datos
    //     $this->assertDatabaseHas('reservations', [
    //         'id_accomodation' => $id,
    //         'id_user' => $user->id,
    //         'start_date' => $entryDate,
    //         'end_date' => $departureDate,
    //         'price' => $price,
    //     ]);

    //     // Verifica que se haya actualizado el contador de reservas del usuario
    //     $user->refresh();
    //     $this->assertEquals(1, $user->reservations);
    // }

    // public function test_removeReservation()
    // {
    //     Artisan::call('migrate');

    //     $user = User::create([
    //         'name' => 'John Doe',
    //         'email' => 'JzK0a@example.com',
    //         'password' => Hash::make('Password1'),
    //     ]);

    //     $accomodation = Accomodations::create([
    //         'name' => 'Hotel',
    //         'stars' => 5,
    //         'description' => 'Description',
    //         'image' => 'image',
    //     ]);

    //     $reservation = Reservation::create([
    //         'id_accomodation' => 1,
    //         'id_user' => 1,
    //         'end_date' => '2023-06-16',
    //         'start_date' => '2023-06-16',
    //         'price' => 1,
    //     ]);

    //     // Realiza la solicitud para eliminar la reserva
    //     $response = $this->post(route('removeReservation', ['id' => $reservation->id]));

    //     // Verifica que la redirección sea a la ruta "home"
    //     $response->assertRedirect('home');

    //     // Verifica que se haya eliminado la reserva de la base de datos
    //     $this->assertDatabaseMissing('reservations', ['id' => $reservation->id]);

    //     // Verifica que el contador de reservas del usuario se haya actualizado
    //     $user->refresh();
    //     $this->assertEquals(0, $user->reservations);

    // }
}
