<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_registerUser()
    {
        Artisan::call('migrate');

        // Form
        $pageForm = $this->get('/register');
        $pageForm->assertStatus(200);

        // Post
        $pagePost = $this->post('/register-validate', [
            'name' => 'John Doe',
            'email' => 'JzK0a@example.com',
            'password' => 'password',

        ]);
    }

    public function test_loginUser()
    {
    }
}
