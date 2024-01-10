<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApplicationTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function auth_login_test()
    {
        $userData = [
            'email' => 'exmaple@gmailcom',
            'password' => bcrypt('password')
        ];

        $user = \App\Models\UsersCredentials::create($userData);

        $response = $this -> postJson('/api/login', []);
    }

    
}
