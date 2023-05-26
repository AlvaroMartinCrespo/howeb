<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;


class UserTest extends TestCase
{
    /**
     * This test checks if the page of the registers works and if user can register
     */
    public function test_registerUser()
    {
        Artisan::call('migrate');
        // Form
        $pageForm = $this->get(route('register'));
        $pageForm->assertStatus(200);

        // Register
        $pagePost = $this->post(route('register-validate'), [
            'name' => 'John Doe',
            'email' => 'JzK0a@example.com',
            'password' => 'password',
        ])->assertRedirect(route('home'));
    }

    /**
     * This test checks if the page of the login works and if user can login
     */
    public function test_loginUser()
    {
        Artisan::call('migrate');
        // Form
        $pageForm = $this->get(route('login'));
        $pageForm->assertStatus(200);

        // Create user
        User::create([
            'name' => 'John Doe',
            'email' => 'JzK0a@example.com',
            'password' => 'password',
        ]);

        // Login
        $pagePost = $this->post(route('login-validate'), [
            'email' => 'JzK0a@example.com',
            'password' => 'password',
        ])->assertStatus(200);
    }
}
