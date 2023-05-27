<?php

use App\Providers\RouteServiceProvider;
use App\Models\InviteCode;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('registration screen can be rendered', function () {
    $response = $this->get('/signup');

    $response->assertStatus(200);
});

test('new users cannot signup without an invite code', function () {
    $response = $this->post('/signup', [
        'first_name' => 'Test',
        'last_name' => 'User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertInvalid(['invite_code']);
    $response->assertStatus(302);
    $this->assertDatabaseCount('users', 0);
});

test('new users cannot signup with an invalid invite code', function () {
    // Create a valid invite code
    $inviteCode = InviteCode::factory()->create();

    // Invalid invite code that doesn't exist in the database
    $invalidInviteCode = 'invalid_code';

    $response = $this->post('/signup', [
        'first_name' => 'Test',
        'last_name' => 'User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'invite_code' => $invalidInviteCode,
    ]);

    $response->assertInvalid(['invite_code']);
    $response->assertStatus(302);
    $this->assertDatabaseCount('users', 0);
});

test('new users can register', function () {
    // Create a valid invite code
    $inviteCode = InviteCode::factory()->create();

    $response = $this->post('/signup', [
        'first_name' => 'Test',
        'last_name' => 'User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'invite_code' => $inviteCode->code,
    ]);

    $this->assertAuthenticated();
    $this->assertDatabaseCount('users', 1);
    $this->assertDatabaseHas('users', [
        'first_name' => 'Test',
        'email' => 'test@example.com',
    ]);
    $response->assertRedirect(RouteServiceProvider::HOME);
});
