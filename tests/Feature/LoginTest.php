<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Laravel\post;

uses(RefreshDatabase::class);

it('redirect authenticated user', function () {
   $user = User::factory()->create();

   $this->actingAs($user)
        ->get('/auth/login')
        ->assertStatus(302);
});
it('show error when details are not provider')
    ->post('/login')
    ->assertSessionHasErrors(['email','password']);



it('logs the user in', function(){
   $user = User::factory()->create([
       'password' => bcrypt('mcischampion')
   ]);

   post('/login',[
       'email' => $user->email,
       'password' => 'mcischampion'
   ])->assertRedirect('/');

   $this->assertAuthenticated();

});