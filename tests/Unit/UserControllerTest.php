<?php
namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testUserAuthentication()
    {
        // create a test user
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'test@example.com',
            'pnum' => '1234567890',
            'address' => '123 Main St, Anytown USA',
            'bdate' => '1990-01-01',
            'years' => '5',
            'months' => '2',
            'municipality' => 'Anytown',
            'age' => '31',
            'password' => bcrypt('password'),
        ]);

        // simulate a user login request
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // assert that the user is redirected to the home page
        $response->assertRedirect('/dashboard');

        // assert that the authenticated user is the test user
        $this->assertAuthenticatedAs($user);
    }
}
