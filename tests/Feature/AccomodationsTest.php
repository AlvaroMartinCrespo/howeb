<?php

namespace Tests\Feature;

use App\Models\Accomodations;
use Illuminate\Support\Facades\Artisan;
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
}
