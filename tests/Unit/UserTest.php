<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
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
            'password' => 'Password1',
            'repeatPassword' => 'Password1',
        ]);

        // If there is not problem to register user, redirect to home
        $pagePost->assertStatus(302)->assertRedirect(route('home'));
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
            'password' => Hash::make('Password1'),
        ]);

        // Login
        $pagePost = $this->post(route('login-validate'), [
            'email' => 'JzK0a@example.com',
            'password' => 'Password1',
        ]);

        // If there is not problem to login user, redirect to home
        $pagePost->assertStatus(302)->assertRedirect(route('home'));
    }
}
