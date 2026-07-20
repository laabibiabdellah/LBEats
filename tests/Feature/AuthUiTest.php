<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthUiTest extends TestCase
{
    public function test_login_page_posts_to_the_login_endpoint(): void
    {
        $response = $this->get('/login');

        $response->assertOk();
        $response->assertSee('method="POST"', false);
        $response->assertSee('action="' . route('login.submit') . '"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
    }

    public function test_register_page_posts_to_the_register_endpoint(): void
    {
        $response = $this->get('/register');

        $response->assertOk();
        $response->assertSee('method="POST"', false);
        $response->assertSee('action="' . route('register.submit') . '"', false);
        $response->assertSee('name="name"', false);
        $response->assertSee('name="email"', false);
        $response->assertSee('name="password"', false);
        $response->assertSee('name="password_confirmation"', false);
    }
}
