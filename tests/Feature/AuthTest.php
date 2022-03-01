<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_register(){
        $response = $this->post('/api/auth/register',['name'=>'andy','email'=>'123456789','password'=>'123']);
        $response->assertStatus(302);
    }

    public function test_login(){
        $response = $this->post('/api/auth/login',['email'=>'123456789','password'=>'123']);
        $response->assertStatus(401);
    }

}
