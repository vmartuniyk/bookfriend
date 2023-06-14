<?php
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('has errors if the details are not provided', function () {
    $this->post('/register')
         ->assertSessionHasErrors(['name','email','password']);

});
it('register user', function () {
    $this->post('/register',[
        'name' => 'John',
        'email' => 'john@example.com',
        'password'=>'iamjohngold'
    ])->assertRedirect('/');

   $this->assertDatabaseHas('users',[
       'name' => 'John',
       'email' => 'john@example.com'
   ])->assertAuthenticated();

});
