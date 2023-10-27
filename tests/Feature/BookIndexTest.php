<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function (){
    $this->user = User::factory()->create();
});

it('show books the user wants to read', function () {
   $this->user->books()->attach($book  = \App\Models\Book::factory()->create(),[
       'status' => 'WANT_TO_READ'
   ]);
   actingAs($this->user)->get('/')->assertSeeText('Want to read')->assertSeeText($book->title);
});
