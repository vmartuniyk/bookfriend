<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('redirect authenticated user', function () {
    expect(User::factory()->create())->toBeRedirectedFor('auth/register');
});

it('it shows register page')
    ->get('/auth/register')
    ->assertStatus(200);


it('has errors if the details are not provided')
        ->post('/register')
        ->assertSessionHasErrors(['name','email','password']);

it('register user')
    ->tap(function (){
        $this->post('/register',[
            'name' => 'John',
            'email' => 'john@example.com',
            'password'=>'iamjohngold'
        ])->assertRedirect('/');
    })->assertDatabaseHas('users',[
        'name' => 'John',
        'email' => 'john@example.com'
    ])->assertAuthenticated();
