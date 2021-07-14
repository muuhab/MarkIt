<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_functionality()
    {
        $user = User::factory()->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);


        $this->assertAuthenticated();
        $response->assertRedirect('/products');
    }
    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = User::factory()->create([
            'password' => bcrypt('i-love-laravel'),
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);

        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
    public function test_user_cannot_login_with_incorrect_email()
    {
        $user = User::factory()->create([

            'email' => 'laravel@laravel.com',
            'password' => bcrypt('i-love-laravel'),
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => 'php@larave.com',
            'password' => 'i-love-laravel',
        ]);
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }
    public function test_user_cannot_login_with_incorrect_input()
    {
        $user = User::factory()->create([

            'email' => 'laravel@laravel.com',
            'password' => bcrypt('i-love-laravel'),
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => '',
            'password' => 'i-love-laravel',
        ]);
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertfalse(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    public function test_auth_user_can_not_login()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/login');
        $response->assertRedirect('/home');
    }
}
