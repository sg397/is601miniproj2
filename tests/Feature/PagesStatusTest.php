<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesStatusTest extends TestCase
{
    /*Register Page unit test*/
    public function testRegisterPage()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /*Login Page unit test*/
    public function testLoginPage()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

}
