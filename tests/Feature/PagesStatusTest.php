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

    /*About Page unit test*/
    public function testAboutPage()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    /*Contact Page unit test*/
    public function testContactPage()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

}
