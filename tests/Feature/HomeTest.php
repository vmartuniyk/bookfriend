<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('greets the user if they are signed out', function () {
    $this->get('/')
        ->assertSee('Bookfriends')
        ->assertSee('Sign up to get started.')
        ->assertDontSee(['Feed']);

});
it('show authenticated menu items if th user is signed in', function () {
    $user = User::factory()->create();
    $this->actingAs($user)
        ->get('/')
        ->assertSeeText(['Feed', 'My Books', 'Add a book', 'Friend', $user->name]);

});
it('show unauthenticated menu items if th user is not signed in', function () {

    $this->get('/')
        ->assertSeeText(['Home','Login', 'Register']);

});
